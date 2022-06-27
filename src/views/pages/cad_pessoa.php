<?php $render('header'); ?>
    <!-- Begin Page Content -->

    <div class="container-fluid">
        <h1>Cadastro de Pessoa</h1>
        <hr>
        <form class="cadastro user">
        <div class="form-group">
                <input type="text" class="form-control form-control-user"
                    placeholder="Insira o nome da pessoa">
            </div>
            <div class="form-group">
                <input id="telefone-cadPessoa" type="text" class="form-control form-control-user"
                    placeholder="Insira o telefone">
            </div>
            <div class="form-group setor">
                <span>Informe o setor: </span>
                <select name="setor" class="selectSetor">
                    <?php 
                        foreach($setores as $setor):
                    ?>
                    <option value="<?= $setor['id']?>"><?= $setor['nome_setor']?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <a href="index.html" class="btn btn-primary btn-user btn-block">
                Cadastrar
            </a>
            <hr>
        </form>
    </div>
    <!-- /.container-fluid -->
<?php $render('footer'); ?>
