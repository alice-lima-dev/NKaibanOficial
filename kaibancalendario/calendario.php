<!DOCTYPE html>
<html lang='en'>
  <head>
    <meta charset='utf-8' />
    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/index.global.min.js'></script>
    <script>

document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');
        var calendar = new FullCalendar.Calendar(calendarEl, {
          initialView: 'dayGridMonth',
          locale: 'pt-br',
          dayNamesShort: ['Dom', 'Seg', 'Ter', 'Qua', 'Qui', 'Sex', 'Sáb'], // Troca dos dias da semana
          events: [
            {
              title: 'teste',
              start: '2023-08-25',
              end: '2023-08-25',
              color: 'blue',
            },
          ]
        });
        calendar.render();
      });
    </script>
  </head>

  <body>
    <div id='app'>
     <div id='sidebar'>
        <div id="logo">
            <img class="logo" src="kaiban.jpg" alt="logo">
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
              </div>
            
              <div id='calender container'>
                <div id='calendar'></div>
                </div>
              </div>
            </body>
</html>