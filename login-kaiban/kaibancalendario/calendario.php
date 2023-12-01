<?php 
session_start();
include '../crud/conexao.php';

$sql = "SELECT * FROM tarefa_blocodenotas";

$result = $conn->query($sql);

if ($result) {
  $resultarray = array();

  while($row = $result->fetch_assoc()){
    $resultarray[] = $row;
  }
  $resultJSON = json_encode($resultarray);
} else {
  echo "Erro na consulta: " . $conn->error;
}

$conn->close();

// Verifique se a sessão de usuário está ativa (ou seja, se o usuário está logado)
if (!isset($_SESSION['funcionario_id'])) {
    // Redireciona para a página de login
    header('Location: index.php');
    exit; // Certifica-se de que o script não continue a ser executado
}

?>


<!DOCTYPE html>
<html lang='pt-br'>
  <head>
    <meta charset='utf-8' />
    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/index.global.min.js'></script>
    <script src="main.js" defer></script>
    <link rel="stylesheet" href="style-calendario.css">
  </head>

<body>
  <div id='app'>
    <div id='sidebar'>
      <div id="logo">
      </div>


      <script>
       
document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');
        var calendar = new FullCalendar.Calendar(calendarEl, {
          initialView: 'dayGridMonth',
          locale: 'pt-BR',
          pluins: ['interactions','dayGrid'],
          events: <?php echo $resultJSON; ?>,
          eventDisplay:"block",
          eventBackgorundColor:'color',
          eventBorderColor:'color',
          eventClick: function (info) {
              // Ao clicar em um evento, exibe um alerta com título, descrição e horário
              Swal.fire({
                title: info.event.title,
                html: '<b>Descrição:</b> ' + info.event.extendedProps.description +
                      '<br><b>Data Início:</b> ' + info.event.start.toLocaleDateString('pt-BR') + 
                      '<br><b>Data Fim:</b> ' + info.event.end.toLocaleDateString('pt-BR'),
                icon: 'info',
                confirmButtonText: 'Fechar'
              });
            }
        });
        calendar.render();
        calendar.setOption('locale', 'pt-BR')
      });
    </script>
      

      <div class="criartarefas">
        <form action="inserir.php" method="post">
        <!-- <h2>Criar Tarefas</h2>
        <label for="taskTitle">Título da Tarefa</label>

        <input type="text" id="eventotitle" placehpolder="nome do evento">

        <input type="date" id="eventostart">
        <input type="date" id="eventoEnd">
        
        <p>Urgência da Tarefa</p>
        <select name="selectcor" required>
          <option value="green" selected>Verde-Baixa</option>
          <option value="yellow" selected>Amarelo-Média</option>
          <option value="pink" selected>Rosa-Alta</option>
        </select> <br> <br>
        <div class="button">
        <br>
        <button type="submit" id="addTaskButton">Adicionar Tarefa</button>
      </div> -->
    </div>
      </form>
      <div id='listar-conteiner'>
        <form action="../tela-principal.php" method="post">
           <button type="submit" id="listar-button">Listagem de tarefas</button>
    <div id='calender-container'>
      <div id='calendar'></div>
    </div>

  </div>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

</body>
</html>