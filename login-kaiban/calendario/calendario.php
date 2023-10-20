<?php 

//   include "conexao.php";
?>

<!DOCTYPE html>
<html lang='en'>
<head>
  <meta charset='utf-8' />
  <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/index.global.min.js' defer></script>
  <script src="main.js" defer></script>
  <!-- <link rel="stylesheet"  href="calendar"> -->
  <link rel="stylesheet" href="calendario.css">
</head>

<body>
  <main>
    <div id='sidebar'>
      <div class="criartarefas">
        <h2>Criar Tarefas</h2>
        <form action="inserir.php" method="post">
          <h2>Criar Tarefa </h2>
        <label for="taskTitle">Título da Tarefa</label>

        <input type="text" id="eventoTitle" name="nometarefa">

        <input type="date" id="eventostart" name="datainicio">

        <input type="date" id="eventoEnd" name="datafim">
      
        <select name="selectcor">
          <option value= "blue" selected>Azul</option>
          <option value= "yellow" selected>Amarelo</option>
          <option value= "pink" selected>Rosa</option>
          <option value= "green" selected>Verde</option>
</select> <br> <br>
    </div>
    </div>
<input type="text" id="eventTitle" name="descricao" placeholder="descricao">
<div class="button">
  <br>
  <button type="submit">Adicionar Tarefa</button>
  <br>
  </main>
  
</body>
</html>