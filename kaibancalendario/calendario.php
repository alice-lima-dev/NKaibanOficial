<!DOCTYPE html>
<html lang='en'>
  <head>
    <meta charset='utf-8' />
    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/index.global.min.js' defer></script>
    <script src="main.js" defer></script>
    <link rel="stylesheet"  href="../kaibancalendario/style-calendario.css">
  </head>

<body>
  <div id='app'>
    <div id='sidebar'>
      <div id="logo">
      </div>
      <div class="criartarefas">
        <h2>Criar Tarefas</h2>
        <label for="taskTitle">Título da Tarefa</label>
        <input type="text" id="eventotitle">
        <input type="date" id="eventostart">
        <input type="date" id="eventoEnd">
        <input type="radio" name="color" value="blue" checked> Azul
        <input type="radio" name="color" value="yellow" checked> Amarelo
        <input type="radio" name="color" value="pink" checked> Rosa
        <input type="radio" name="color" value="green" checked> Verde
        <div class="button">
        <br>
        <button id="addTaskButton">Adicionar Tarefa</button>
      </div>
    </div>
    <div id='calender container'>
      <div id='calendar'></div>
    </div>
  </div>
</body>
</html>