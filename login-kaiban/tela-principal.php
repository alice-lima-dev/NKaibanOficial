<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="kaiban.jpg" type="image/png">
    <link rel="stylesheet" href="css/style-principal.css">
    <script src="js.js"></script>
    <title>Tela principal</title>
</head>

<body>
    <nav>
        <div class="logo-kaiban-principal" scr="imagens/kaiban.jpg">
    </nav>
<div class="containe"> 
    <div class="display">
        <div class="barra-lateral"> 

            <div id="usuario"> 

                <img id="img-cadastro" src="imagens/user-interface.png"> 

                <p id="nome">Nome do usuario</p> 

            </div> 
                  
            <div id="div-busca"> 

                <input type="text" id="txtBusca" placeholder="Pesquisar.." /> 

                <img src="imagens/lupa.png" id="btnBusca" alt="Buscar" /> 

            </div> 

            

            <div id="div-novo"> 
            <a href="#"> 
                <h2 id="novo">Novo</h2> 

                <img id="img-novo" src="imagens/mais.png"> 

            </a> 

            </div> 

            <div class="topicos"> 

                <div> 

                    <a href="#"> 

                        <p>Início</p> 

                    </a> 

                </div> 

                <div> 

                    <a href="#"> 

                        <p>Tarefa</p> 

                    </a> 

                </div> 

                <div> 

                    <a href="#"> 

                        <p>Calendarío</p> 

                    </a> 

                </div> 

                <div> 

                    <a href="#"> 

                        <p>Lixeira</p> 

                    </a> 

                </div> 
                <div> 
                    <a href="#"> 
                        <p>Cadernos</p>
                    </a> 

                </div> 

                <div> 

                    <a href="#"> 

                        <p>Compartilhados</p> 

                    </a> 
                </div>  
        </div> 
        <div class="container">
        <div class="kanban-heading">
            <strong class="kanban-heading-text">Kanban Board</strong>
        </div>
        <div class="kanban-board">
            <div id="todo">To Do</div>
            <div id="inprogress">In Progress</div>
            <div id="done">Done</div>
        </div>
    </div>
    <div class="kanban-block" id="todo">
    <strong>To Do</strong>
    <div class="task-button-block">
        <button id="task-button">Create new task</span>
    </div>
    <div class="task" id="task1">
        <span>Task 1</span>
    </div>
    <div class="task" id="task2">
        <span>Task 2</span>
    </div>
    <div class="task" id="task3">
        <span>Task 3</span>
    </div>
    <div class="task" id="task4">
        <span>Task 4</span>
    </div>
    <div class="task" id="task5">
        <span>Task 5</span>
    </div>
    <div class="task" id="task6">
        <span>Task 6</span>
    </div>
</div>

        </div>  
    </div>
</div >               
<script>
        function drag(ev) {
            ev.dataTransfer.setData("text", ev.target.id);
        }

        function allowDrop(ev) {
            ev.preventDefault();
        }

        function drop(ev) {
            ev.preventDefault();
            var data = ev.dataTransfer.getData("text");
            ev.target.appendChild(document.getElementById(data));
        }
    </script>
</body>

</html>