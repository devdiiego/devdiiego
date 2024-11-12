<?php 
    include ("db/db_agenda.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Agendas</title>
</head>
<body>
    <header>
        <h1>Sistema Agendador</h1>
        
        <nav> <!-- tag menuop é usada para url -->
            <a href="index.php?menuop=home">Home</a>
            <a href="index.php?menuop=contatos">Contatos</a>
            <a href="index.php?menuop=tarefas">Tarefas</a>
            <a href="index.php?menuop=eventos">Eventos</a>
        </nav>
    </header>
    <hr>
    <main>
        <?php //Quando clicar no link e ele é encaminhado para um local do site.
            $menuop = (isset($_GET["menuop"]))?$_GET["menuop"]:"home";
            switch ($menuop) {
                case 'home':
                    include("paginas/home/home.php");
                    break;
                case 'contatos':
                    include("paginas/contatos/contatos.php");
                    break;
                case 'cad-contatos':
                    include("paginas/contatos/cad-contato.php");
                    break;
                case 'inserir-contato':
                    include("paginas/contatos/inserir-contato.php");
                    break;
                case 'editar-contato':
                        include("paginas/contatos/editar-contato.php");
                    break;
                case 'excluir-contato':
                        include("paginas/contatos/excluir-contato.php");
                    break;
                case 'atualizar-contato':
                        include("paginas/contatos/atualizar-contato.php");
                        break;
                case 'tarefas':
                    include("paginas/tarefas/tarefas.php");
                    break;
                case 'eventos':
                    include("paginas/eventos/eventos.php");
                    break;
                default:
                    include("paginas/home/home.php");
                        break;
            }
        ?>
    </main>
</body>
</html>
