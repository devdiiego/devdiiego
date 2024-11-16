<header>
    <h3>Inserir Contato</h3>
</header>
<?php 

    $nomeContato = mysqli_real_escape_string($conexao,$_POST["nomeContato"]);
    $emailContato = mysqli_real_escape_string($conexao,$_POST["emailContato"]);
    $telefoneContato = mysqli_real_escape_string($conexao,$_POST["telefoneContato"]);
    $enderecoContato = mysqli_real_escape_string($conexao,$_POST["enderecoContato"]);
    $data_nasc_Contato = mysqli_real_escape_string($conexao,$_POST["data_nasc_Contato"]);
    $sql = "INSERT INTO tb_contato (
        nomeContato,
        emailContato,
        telefoneContato, 
        enderecoContato, 
        data_nasc_Contato)
        VALUES( 
            '{$nomeContato}',
            '{$emailContato}',
            '{$telefoneContato}',
            '{$enderecoContato}',
            '{$data_nasc_Contato}'
        )   
        ";
        mysqli_query($conexao, $sql) or die("Erro ao executar a consulta." . mysqli_error($conexao));

        echo "O registro foi inserido com sucesso.";
?>