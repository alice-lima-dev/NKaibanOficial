<?php 
session_start();
// echo  $_SESSION['funcionario_id'];
  include '../crud/conexao.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    
    $nome = $_POST['nometarefa'];
    $data = $_POST['datainicio'];
    $termino = $_POST['datafim'];
    $cor = $_POST['selectcor'];
    $id_funcionario = $_SESSION['funcionario_id'];

    $sql = "INSERT INTO tarefa_blocodenotas
     (tarefa_titulo, tarefa_assunto, tarefa_cor, fk_funcionario_id) VALUES ('$tarefa_titulo', '$tarefa_assunto', '$tarefa_cor', '$id_funcionario')";

    if ($conn->query($sql) === TRUE) {
        echo "Notas inserida com sucesso!";
        header("./>tela-principal.php");
        header("location: http://localhost/NKaibanOficial/login-kaiban/tela-principal.php");
    } else {
        echo "Erro ao inserir notas: " . $conn->error;
    }

}
?>


<!DOCTYPE html>
<html lang='en'>
<head>
  <meta charset='utf-8' />
  <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/index.global.min.js' defer></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" defer></script>
  <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/main.min.css"> -->
  <script src="../js.js" defer></script>
  <!-- <link rel="stylesheet"  href="calendar"> -->
  <link rel="stylesheet" href="calendario.css">
</head>

<body>
  <main>
    <div id='sidebar'>
      <div class="criartarefas">
        <h2>Criar Tarefas</h2>
        <form action="" method="post">
          <label for="taskTitle">Título da Tarefa</label>
          <input type="text" id="eventoTitle" name="nometarefa">

          <label for="taskTitle"  class="datainicio">Data de inicio</label>
          <input type="date" id="eventostart" name="datainicio">

          <label for="taskTitle" class="datatermino">Data de término</label>
          <input type="date" id="eventoEnd" name="datafim">
        
          <select name="selectcor">
            <option value= "blue" selected>Azul</option>
            <option value= "yellow" selected>Amarelo</option>
            <option value= "pink" selected>Rosa</option>
            <option value= "green" selected>Verde</option>
          </select> <br> <br>
          <input type="text" id="eventTitle" name="descricao" placeholder="descricao">
          <div class="button">
            <br>
            <button type="submit">Adicionar Tarefa</button>
            <br>
          </div>
        </form>
      </div>
    </div>
    <div id='calender'>
      <div id='calendar'></div>
    </div>
  </main>
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
              start: '2023-10-25',
              end: '2023-10-25',
              color: 'blue',
            },
          ]
        });
        calendar.render();
      });
    </script>
  
</body>
</html>