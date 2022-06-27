<?php $render('header'); ?>
    <!-- Begin Page Content -->

    <div class="container-fluid">
        <h1>Cadastro de Tipo de Equipamento</h1>
        <hr>
        <form class="cadastro user" method="POST" action="<?=$base;?>/cadastro/tpequip">
            <div class="form-group">
                <input type="text" maxlength="100" class="form-control form-control-user"
                    name="nome"
                    placeholder="Insira o nome do tipo de equipamento">
            </div>
            <input type="submit" value="Cadastrar" class="btn btn-primary btn-user btn-block">
            <hr>
        </form>
    </div>
    <!-- /.container-fluid -->
<?php $render('footer'); ?>
