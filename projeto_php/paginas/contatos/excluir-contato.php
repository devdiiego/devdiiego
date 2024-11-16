<header>
    <h3><i class="bi bi-trash"></i> Excluir Contato</h3>
</header>

<?php 
$idContato = mysqli_real_escape_string($conexao, $_GET["idContato"]);
$sql = "DELETE FROM tb_contato WHERE idContato= '{$idContato}'";

mysqli_query($conexao,$sql) or die("Erro ao excluir o registro. ". mysqli_error($conexao));
echo "Registro excluído com sucesso!"
?>