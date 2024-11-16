<header>
    <h3 class="bi bi-person-square"></class=>  Cadastro de Contato</h3>
</header>
<div>
<form action="index.php?menuop=inserir-contato" method="post">

    <div class="mb-3">
        <label class="form-label" class="form-label" for="nomeContato">Nome</label>
        <div class="input-group">
            <span class="input-group-text"><i class="bi bi-person-fill"></i></span>
            <input class="form-control" class="form-control" type="text" name="nomeContato">
        </div>
    </div>

    <div class="mb-3">
        <label class="form-label" for="emailContato">E-mail</label>
        <div class="input-group">
            <span class="input-group-text">@</span>
            <input class="form-control" class="form-control" type="text" name="emailContato">
        </div>
    </div>

    <div class="mb-3">
        <label class="form-label" for="telefoneContato">Telefone</label>
        <div class="input-group">
            <span class="input-group-text"><i class="bi bi-telephone-fill"></i></span>
            <input class="form-control" type="text" name="telefoneContato">
        </div>
    </div>

    <div class="mb-3">
        <label class="form-label" for="enderecoeContato">Endereço</label>
        <div class="input-group">
            <span class="input-group-text"><i class="bi bi-geo-alt-fill"></i></span>
            <input class="form-control" type="text" name="enderecoContato">
        </div>
    </div>

    <div class="mb-3">
        <label class="form-label" for="data_nasc_Contato">Data de Nascimento</label>
        <div class="input-group">
            <span class="input-group-text"><i class="bi bi-calendar"></i></span>
            <input class="form-control" type="date" name="data_nasc_Contato">
        </div>
    </div>

    <div class="mb-3">
        <input class="btn btn-success" type="submit" value="Adicionar" name="btnadicionar">
    </div>
</form>
</div>
