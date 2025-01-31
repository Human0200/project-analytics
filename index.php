<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Таблица задач по проекту</title>
  <link rel="stylesheet" href="styles.css" />
</head>

<body id="body">

  <div class="menu">
    <button id="showManual" class="menu-manual-button">Инструкция

    </button>
    <button id="showSettings" class="menu-button">Настройки
      <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
        <g id="SVGRepo_iconCarrier">
          <path
            d="M11 3H13C13.5523 3 14 3.44772 14 4V4.56879C14 4.99659 14.2871 5.36825 14.6822 5.53228C15.0775 5.69638 15.5377 5.63384 15.8403 5.33123L16.2426 4.92891C16.6331 4.53838 17.2663 4.53838 17.6568 4.92891L19.071 6.34312C19.4616 6.73365 19.4615 7.36681 19.071 7.75734L18.6688 8.1596C18.3661 8.46223 18.3036 8.92247 18.4677 9.31774C18.6317 9.71287 19.0034 10 19.4313 10L20 10C20.5523 10 21 10.4477 21 11V13C21 13.5523 20.5523 14 20 14H19.4312C19.0034 14 18.6318 14.2871 18.4677 14.6822C18.3036 15.0775 18.3661 15.5377 18.6688 15.8403L19.071 16.2426C19.4616 16.6331 19.4616 17.2663 19.071 17.6568L17.6568 19.071C17.2663 19.4616 16.6331 19.4616 16.2426 19.071L15.8403 18.6688C15.5377 18.3661 15.0775 18.3036 14.6822 18.4677C14.2871 18.6318 14 19.0034 14 19.4312V20C14 20.5523 13.5523 21 13 21H11C10.4477 21 10 20.5523 10 20V19.4313C10 19.0034 9.71287 18.6317 9.31774 18.4677C8.92247 18.3036 8.46223 18.3661 8.1596 18.6688L7.75732 19.071C7.36679 19.4616 6.73363 19.4616 6.34311 19.071L4.92889 17.6568C4.53837 17.2663 4.53837 16.6331 4.92889 16.2426L5.33123 15.8403C5.63384 15.5377 5.69638 15.0775 5.53228 14.6822C5.36825 14.2871 4.99659 14 4.56879 14H4C3.44772 14 3 13.5523 3 13V11C3 10.4477 3.44772 10 4 10L4.56877 10C4.99658 10 5.36825 9.71288 5.53229 9.31776C5.6964 8.9225 5.63386 8.46229 5.33123 8.15966L4.92891 7.75734C4.53838 7.36681 4.53838 6.73365 4.92891 6.34313L6.34312 4.92891C6.73365 4.53839 7.36681 4.53839 7.75734 4.92891L8.15966 5.33123C8.46228 5.63386 8.9225 5.6964 9.31776 5.53229C9.71288 5.36825 10 4.99658 10 4.56876V4C10 3.44772 10.4477 3 11 3Z"
            stroke="#000000" stroke-width="1.5"></path>
          <path
            d="M14 12C14 13.1046 13.1046 14 12 14C10.8954 14 10 13.1046 10 12C10 10.8954 10.8954 10 12 10C13.1046 10 14 10.8954 14 12Z"
            stroke="#000000" stroke-width="1.5"></path>
        </g>
      </svg>
      <path
        d="M24 13.616v-3.232c-1.651-.587-2.693-2.18-2.303-3.914l-2.673-1.544c-.61.985-1.707 1.641-2.924 1.641-1.217 0-2.314-.656-2.924-1.641l-2.673 1.544c.39 1.734-.652 3.327-2.303 3.914v3.232c1.651.587 2.693 2.18 2.303 3.914l2.673 1.544c.61-.985 1.707-1.641 2.924-1.641 1.217 0 2.314.656 2.924 1.641l2.673-1.544c-.39-1.734.652-3.327 2.303-3.914zm-12 2.384c-2.209 0-4-1.791-4-4s1.791-4 4-4 4 1.791 4 4-1.791 4-4 4z"
        fill="currentColor" />
      </svg>
    </button>


  </div>
  <div id="settingsTab" class="modal">
    <div class="modal-content">
      <h2>Настройки</h2>
      <label for="projectSelect">Выберите проект:</label>
      <div class="select-container">
        <select id="projectSelect" class="project-select">
          <option value="">Выберите проект</option>
          <!-- Опции проектов будут добавлены динамически -->
        </select>
      </div>
      <input id="totalTime" class="total-project-time-input"> </input>
      <button id='saveTimeButton' class="save-time-button">Сохранить</button>
      <span id="closeModal" class="close-modal-span">
        <svg style="width: 24px; height: 24px;" viewBox="0 0 24 24" fill="black" xmlns="http://www.w3.org/2000/svg">
          <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
          <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" stroke="#CCCCCC"
            stroke-width="0.288"></g>
          <g id="SVGRepo_iconCarrier">
            <path
              d="M8.00191 9.41621C7.61138 9.02569 7.61138 8.39252 8.00191 8.002C8.39243 7.61147 9.0256 7.61147 9.41612 8.002L12.0057 10.5916L14.5896 8.00771C14.9801 7.61719 15.6133 7.61719 16.0038 8.00771C16.3943 8.39824 16.3943 9.0314 16.0038 9.42193L13.4199 12.0058L16.0039 14.5897C16.3944 14.9803 16.3944 15.6134 16.0039 16.004C15.6133 16.3945 14.9802 16.3945 14.5896 16.004L12.0057 13.42L9.42192 16.0038C9.03139 16.3943 8.39823 16.3943 8.00771 16.0038C7.61718 15.6133 7.61718 14.9801 8.00771 14.5896L10.5915 12.0058L8.00191 9.41621Z"
              fill="#0F0F0F"></path>
            <path fill-rule="evenodd" clip-rule="evenodd"
              d="M23 4C23 2.34315 21.6569 1 20 1H4C2.34315 1 1 2.34315 1 4V20C1 21.6569 2.34315 23 4 23H20C21.6569 23 23 21.6569 23 20V4ZM21 4C21 3.44772 20.5523 3 20 3H4C3.44772 3 3 3.44772 3 4V20C3 20.5523 3.44772 21 4 21H20C20.5523 21 21 20.5523 21 20V4Z"
              fill="#0F0F0F"></path>
          </g>
        </svg>
      </span>
    </div>
  </div>

  <div class="modal-manual" id="ModalManual">
    <div class="modal-manual-content">
    </div>
  </div>

  <!-- Таблица задач -->
  <div id="tasksTab">
    <div class="tasks-header">
      <h2>Таблица задач по проекту</h2>
      <h2 class="tasks-header-project" id="tasksHeaderProject"></h2>
    </div>
    <div class="tasks-header-time">
      <h3 style="margin-bottom:0px; margin-right:24px">Планируемое время проекта:</h3>
      <h3 class="tasks-header-time-value" id="tasksHeaderTime"></h3>
    </div>
    <p>Выберите сотрудника для фильтрации</p>
    <div class="select-container">
      <select id="responsiblesList" class="responsibles-select">
        <option> Выберите сотрудника</option>
      </select>
    </div>
    <div class="select-container">
      <select id="projectsList" class="projects-select">
        <option value=""> Выберите проект</option>
      </select>
    </div>
    <table id="tasksTable" class="tasks-table">
      <thead>
        <tr>
          <th>Проект</th>
          <th>Задача</th>
          <th>Исполнитель</th>
          <th>Затраченное время (часы) планируемое</th>
          <th>Затраченное время (часы) фактическое</th>
        </tr>
      </thead>
      <tbody></tbody>
    </table>
    <div class="container2">
      <div class="container">
        <canvas id="timeChart" width="400" height="400"></canvas>
      </div>
    </div>
  </div>

  <script src="https://api.bitrix24.com/api/v1/"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script type="module" src="main.js"></script>
</body>

</html>