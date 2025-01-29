import { fetchTasksByProject } from './tasks.js';
import { filterTable, sortTable, clearTable } from './table.js';

window.onload = () => {
  fetchProjects();

  // const container = document.getElementById('body');
  // const rect = container.getBoundingClientRect();

  // // Вычисляем размеры контейнера
  // const width = Math.ceil(rect.width);
  // const height = Math.ceil(rect.height);
  // console.log(width + ' : ' + height);
  // // Устанавливаем размеры фрейма
  //BX24.resizeWindow(3000, 1600);

  var selectBody = document.getElementById('projectSelect');
  const tasksHeaderProject = document.getElementById('tasksHeaderProject');
  selectBody.addEventListener('change', () => {
    const selectedProjectId = selectBody.value;
    if (selectedProjectId) {
      tasksHeaderProject.innerHTML = '' + selectBody.options[selectBody.selectedIndex].text;
      clearTable();
      fetchTasksByProject(selectedProjectId);
    } else {
      clearTable();
      const header = document.getElementById('tasksHeaderTime');
      header.innerHTML = '';
      tasksHeaderProject.innerHTML = '';
    }
  });
};

//Получение всех групп и их вывод в select
function fetchProjects() {
  BX24.init(function () {
    BX24.installFinish();
    console.log('BX24 initialized successfully.');
    var groups = [];
    BX24.callMethod('sonet_group.get', {}, function (res) {
      groups = res.data();
      var selectBody = document.getElementById('projectSelect');
      groups.forEach((group) => {
        console.log(group);
        var newOption = new Option(group.NAME, group.ID);
        selectBody.add(newOption);
      });
    });
  });
}

document.querySelectorAll('th').forEach((th, index) => {
  th.addEventListener('click', () => sortTable(index));
});

const responsiblesBody = document.getElementById('responsiblesList');
responsiblesBody.addEventListener('change', () => {
  filterTable(responsiblesBody.options[responsiblesBody.selectedIndex].text);
});

var btn = document.getElementById('showSettings');
btn.addEventListener('click', () => {
  const modal = document.getElementById('settingsTab');
  modal.style.display = 'block';
});

window.onclick = function (event) {
  const modal = document.getElementById('settingsTab');
  if (event.target == modal) {
    modal.style.display = 'none';
  }
};

// Закрытие модального окна
const closeSpan = document.getElementById('closeModal');
closeSpan.addEventListener('click', () => {
  const modal = document.getElementById('settingsTab');
  modal.style.display = 'none';
});
