// Функция для получения списка всех групп (проектов)
function fetchProjects() {
  BX24.init(function () {
    console.log('BX24 initialized successfully.');
    var groups = [];
    BX24.callMethod('sonet_group.get', {}, function (res) {
      groups = res.data();
      var selectBody = document.getElementById('projectSelect');
      groups.forEach((group) => {
        var newOption = new Option(group.NAME, group.ID);
        selectBody.addEventListener('change', () => {
          console.log(
            'id = ' +
              selectBody.value +
              ' ' +
              ' name = ' +
              selectBody[selectBody.selectedIndex].text,
          );
        });
        selectBody.add(newOption);
      });
    });
  });
}

// Обработчик изменения выбора проекта
document.getElementById('projectSelect').addEventListener('change', function () {
  const selectedProjectId = this.value;
  if (selectedProjectId) {
    fetchTasksByProject(selectedProjectId);
  } else {
    clearTable(); // Очищаем таблицу, если проект не выбран
  }
});

function fetchTasksByProject(projectId) {
  BX24.callMethod(
    'tasks.task.list',
    {
      filter: {
        GROUP_ID: projectId,
      },
    },
    function (res) {
      console.log(res.answer.result);
      processTasks(res.answer.result.tasks); // Передаем массив задач
    },
  );
}

// Функция для обработки задач и добавления их в таблицу
function processTasks(tasks) {
  console.log('tasks = ', tasks);
  const tbody = document.querySelector('#tasksTable tbody');
  let totalTimeEstimate = 0;
  let totalTimeSpent = 0;

  // Очищаем таблицу перед добавлением новых данных
  tbody.innerHTML = '';

  tasks.forEach((task) => {
    const timeInHours = (task.timeEstimate || 0) / 3600;
    const timespent = (task.timeSpentInLogs || 0) / 3600;
    const row = document.createElement('tr');
    row.innerHTML = `
      <td>${task.title}</td>
      <td>${projectSelect.options[projectSelect.selectedIndex].text}</td>
      <td>${timeInHours.toFixed(2)}</td> <!-- Отображаем время с двумя знаками после запятой -->
      <td>${timespent.toFixed(2)}</td> <!-- Отображаем время с двумя знаками после запятой -->
      <td>${task.responsible.name}</td>
  `;

    // Добавляем обработчик события для клика
    row.addEventListener('click', () => {
      const userId = task.responsible.id;
      const taskId = task.id;
      const url = `/company/personal/user/${userId}/tasks/task/view/${taskId}/`;
      BX24.openPath(url, function (result) {
        console.log(result);
      });
    });

    tbody.appendChild(row);
    totalTimeEstimate += timeInHours;
    totalTimeSpent += timespent;
  });

  // Добавление строки с итоговым временем
  const totalRow = document.createElement('tr');
  totalRow.innerHTML = `
  <td><strong>Итого</strong></td>
  <td></td>
  <td><strong>${totalTimeEstimate.toFixed(2)}</strong></td>
  <td><strong>${totalTimeSpent.toFixed(2)}</strong></td>
  <td></td>
`;
  tbody.appendChild(totalRow);

  // Обновление итогового времени
  document.getElementById('totalTime').textContent = totalTimeEstimate.toFixed(2); // Отображаем итоговое время в часах
}

// Функция для очистки таблицы
function clearTable() {
  const tbody = document.querySelector('#tasksTable tbody');
  tbody.innerHTML = '';
  document.getElementById('totalTime').textContent = 0;
}

// Загружаем проекты при загрузке страницы
fetchProjects();
