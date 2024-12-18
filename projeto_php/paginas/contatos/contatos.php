<?php 
    include ("db/db_agenda.php");
?>
<head>
    <h3><i class="bi bi-person-square"> </i>Contatos</h3>
</head>
<div>
    <a class="btn btn-outline-primary mb-2" href="index.php?menuop=cad-contatos"><i class="bi bi-person-fill-add"></i> Novo Contato</a>
</div>
<div>
    <form action="index.php?menuop=contatos" method="post">
        <div class="input-group">
        <input class="form-control col-3" type="text" name="txt_pesquisa">
        <button class="btn btn-outline-success btn-sm" type="submit"> <i class="bi bi-search"> </i>Pesquisa</button>
        </div>
    </form>
</div>
<div class="table1">
    <table class="table table-dark table-hover table-bordered table-sm">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>E-mail</th>
                <th>Telefone</th>
                <th>Endereço</th>
                <th>Data de Nasc.</th>
                <th>Editar</th>
                <th>Excluir</th>
                
            </tr>
        </thead>
        <tbody>
        <?php
            // paginação aula-10
            $quantidade = 10;
            
            $pagina = isset($_GET['pagina']) ? (int)$_GET['pagina'] : 1;

            $inicio = ($pagina - 1) * $quantidade;

            $txt_pesquisa = isset($_POST["txt_pesquisa"]) ? $_POST["txt_pesquisa"] : "";

            $sql = "SELECT 
                        idContato,
                        upper(nomeContato) AS nomeContato,
                        lower(emailContato) AS emailContato,
                        telefoneContato,
                        upper(enderecoContato) AS enderecoContato,
                        date_format(data_nasc_Contato, '%d/%m/%y') AS data_nasc_Contato
                    FROM agenda_telefonica.tb_contato
                    WHERE 
                        idContato = '{$txt_pesquisa}' OR
                        nomeContato LIKE '%{$txt_pesquisa}%'
                    ORDER BY idContato ASC  
                    LIMIT $inicio, $quantidade";  

            $rs = mysqli_query($conexao, $sql) or die("Erro ao conectar a consulta: " . mysqli_error($conexao));

            while ($dados = mysqli_fetch_assoc($rs)) {
        ?>
            <tr>
                <td><?=$dados["idContato"] ?></td>
                <td class="text-nowrap"><?=$dados["nomeContato"] ?></td>
                <td class="text-nowrap"><?=$dados["telefoneContato"] ?></td>
                <td class="text-nowrap"><?=$dados["emailContato"] ?></td>
                <td class="text-nowrap"><?=$dados["enderecoContato"] ?></td>
                <td><?=$dados["data_nasc_Contato"] ?></td>
                <td class="text-center">
                    <a class="btn btn-outline-warning btn-sm" href="index.php?menuop=editar-contato&idContato=<?=$dados["idContato"] ?>"><i class="bi bi-pencil-square"></i></a>
                </td>
                <td class="text-center">
                    <a class="btn btn-outline-danger btn-sm" href="index.php?menuop=excluir-contato&idContato=<?=$dados["idContato"] ?>"><i class="bi bi-trash"></i></a>
                </td>
            </tr>
    <?php 
        }
        ?>
        </tbody>
    </table>
</div>
<br>

<ul class="pagination justify-content-center">


<?php 
    // contar o total de registros
    $sqlTotal = "SELECT idContato FROM tb_contato";
    $qrTotal = mysqli_query($conexao, $sqlTotal) or die(mysqli_error($conexao));
    $numTotal = mysqli_num_rows($qrTotal);

    $totalPagina = ceil($numTotal / $quantidade);
    
    echo '<li class="page-item"><span class="page-link">Total de registros: ' . $numTotal . '</span></li>';

    echo '<li class="page-item"><a class="page-link" href="?menuop=contatos&pagina=1">Primeira Página</a></li>';

    if ($pagina > 1) {
        ?>
        <li class="page-item"><a class="page-link" href="?menuop=contatos&pagina=<?php echo $pagina - 1; ?>"> << </a></li>
        <?php
    }

    for ($i = 1; $i <= $totalPagina; $i++) {
        if($i>=($pagina-5) && $i <= ($pagina+5)){
            if ($i == $pagina) {
                echo "<li class='page-item active'><span class='page-link'>$i</span></li>";
            } else {
                echo "<li clas='page-item'><a class='page-link'href=\"?menuop=contatos&pagina=$i\">$i</a></li>";
            }
        }
    }

    if ($pagina < $totalPagina) {
        ?>
        <li class="page-item"><a class="page-link" href="?menuop=contatos&pagina=<?php echo $pagina + 1; ?>"> >> </a></li>
        <?php
    }

    echo "<li class='page-item'><a class='page-link' href=\"?menuop=contatos&pagina=$totalPagina\">Última Página</a></li>";
?>
</ul>



