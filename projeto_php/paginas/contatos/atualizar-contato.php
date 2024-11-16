<header>
    <h3>Atualizar Contato</h3>
</header>
<?php
    $idContato = mysqli_real_escape_string($conexao,$_POST["idContato"]);
    $nomeContato = mysqli_real_escape_string($conexao,$_POST["nomeContato"]);
    $emailContato = mysqli_real_escape_string($conexao,$_POST["emailContato"]);
    $telefoneContato = mysqli_real_escape_string($conexao,$_POST["telefoneContato"]);
    $enderecoContato = mysqli_real_escape_string($conexao,$_POST["enderecoContato"]);
    $data_nasc_Contato = mysqli_real_escape_string($conexao,$_POST["data_nasc_Contato"]);
    $sql = "UPDATE agenda_telefonica.tb_contato tb_produtos SET 
    nomeContato = '{$nomeContato}',
    emailContato = '{$emailContato}',
    telefoneContato = '{$telefoneContato}', 
    enderecoContato = '{$enderecoContato}', 
    data_nasc_Contato = '{$data_nasc_Contato}'
    WHERE idContato = '{$idContato}'
    ";
        mysqli_query($conexao, $sql) or die("Erro ao executar a consulta." . mysqli_error($conexao));

        echo "O registro foi atualizado com sucesso.";
?>