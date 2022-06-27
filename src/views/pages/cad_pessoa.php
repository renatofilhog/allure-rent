<?php $render('header'); ?>
    <!-- Begin Page Content -->

    <div class="container-fluid">
        <h1>Cadastro de Pessoa</h1>
        <hr>
        <form class="cadastro user" method="POST">
            <div class="form-group">
                <input required name="nome" type="text" class="form-control form-control-user"
                    placeholder="Insira o nome da pessoa">
            </div>
            <div class="form-group">
                <input required name="telefone" id="telefone-cadPessoa" type="text" class="form-control form-control-user"
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
            <input type="submit" class="btn btn-primary btn-user btn-block"
                value="Cadastrar" />
            <hr>
        </form>
    </div>
    <!-- /.container-fluid -->
<?php $render('footer'); ?>
