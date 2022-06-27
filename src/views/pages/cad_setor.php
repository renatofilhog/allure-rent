<?php $render('header'); ?>
    <!-- Begin Page Content -->

    <div class="container-fluid">
        <h1>Cadastro de Setor</h1>
        <hr>
        <form class="cadastro user" method="POST">
            <div class="form-group">
                <input name="nome" type="text" class="form-control form-control-user"
                    placeholder="Insira o nome do Setor">
            </div>
            <input type="submit" class="btn btn-primary btn-user btn-block"
                value="Cadastrar" />
            <hr>
        </form>
    </div>
    <!-- /.container-fluid -->
<?php $render('footer'); ?>