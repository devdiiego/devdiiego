<?php 
$idContato = $_GET["idContato"];

$sql = "SELECT * FROM agenda_telefonica.tb_contato tbcontato WHERE idContato= {$idContato}";
$rs = mysqli_query($conexao, $sql) or die("Erro ao executar a consulta." . mysqli_error($conexao));
$dados = mysqli_fetch_assoc($rs);
?>
<header>
    <h3><i class="bi bi-pencil-square"></i> Editar Contato</h3>
</header>

<form action="index.php?menuop=atualizar-contato" method="post">

<div>
    <label for="idContato">ID:</label>
    <div class="input-group mb-3">
        <span class="input-group-text"><i class="bi bi-key-fill"></i></span>
        <input class="form-control" type="text" name="idContato" value="<?= $dados["idContato"] ?>">
    </div>
</div>
    
    <div>
        <label for="nomeContato">Nome:</label>
        <div class="input-group mb-3">
            <span class="input-group-text"><i class="bi bi-person-fill"></i></span>
            <input class="form-control" type="text" name="nomeContato" value="<?= $dados["nomeContato"] ?>">
        </div>
    </div>

    <div>
        <label for="emailContato">E-mail:</label>
        <div class="input-group mb-3">
            <span class="input-group-text">@</span>
            <input class="form-control" type="email" name="emailContato" value="<?= $dados["emailContato"] ?>">
        </div>
    </div>

    <div>
        <label for="telefoneContato">Telefone:</label>
        <div class="input-group mb-3">
            <span class="input-group-text"><i class="bi bi-telephone-fill"></i></span>
            <input class="form-control" type="text" name="telefoneContato" value="<?= $dados["telefoneContato"] ?>">
        </div>
    </div>

    <div>
        <label for="enderecoContato">Endereço:</label>
        <div class="input-group mb-3">
            <span class="input-group-text"><i class="bi bi-geo-alt-fill"></i></span>
            <input class="form-control" type="text" name="enderecoContato" value="<?= $dados["enderecoContato"] ?>">
        </div>
    </div>

    <div>
        <label for="data_nasc_Contato">Data de Nascimento:</label>
        <div class="input-group mb-3">
            <span class="input-group-text"><i class="bi bi-calendar"></i></span>
            <input class="form-control" type="date" name="data_nasc_Contato" value="<?= $dados["data_nasc_Contato"] ?>">
        </div>
    </div>

    <div class="mb-3">
        <input class="btn btn-success" type="submit" value="Atualizar" name="btnAtualizar">
    </div>
</form>
