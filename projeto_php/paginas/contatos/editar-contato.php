<?php 
$idContato = $_GET["idContato"];

$sql = "SELECT * FROM agenda_telefonica.tb_contato tbcontato WHERE idContato= {$idContato}";
$rs = mysqli_query($conexao, $sql) or die("Erro ao executar a consulta." . mysqli_error($conexao));
$dados = mysqli_fetch_assoc($rs);
?>
<header>
    <h3>Editar Contato</h3>
</header>

<form action="index.php?menuop=atualizar-contato" method="post">

<div>
    <label for="idContato">ID:</label>
    <input type="text" name="idContato" value="<?= $dados["idContato"] ?? '' ?>">
</div>
    
    <div>
        <label for="nomeContato">Nome:</label>
        <input type="text" name="nomeContato" value="<?= $dados["nomeContato"] ?>">
    </div>

    <div>
        <label for="emailContato">E-mail:</label>
        <input type="email" name="emailContato" value="<?= $dados["emailContato"] ?>">
    </div>

    <div>
        <label for="telefoneContato">Telefone:</label>
        <input type="text" name="telefoneContato" value="<?= $dados["telefoneContato"] ?>">
    </div>

    <div>
        <label for="data_nasc_Contato">Data de Nascimento:</label>
        <input type="date" name="data_nasc_Contato" value="<?= $dados["data_nasc_Contato"] ?>">
    </div>

    <div>
        <input type="submit" value="Atualizar" name="btnAtualizar">
    </div>
</form>
