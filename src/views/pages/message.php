<?php $render('header'); ?>
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- 404 Error Text -->
        <div class="text-center">
            <p class="lead text-gray-800 mb-5"><?=$message;?></p>
            <p class="text-gray-500 mb-0"><?=$subMessage;?></p>
            <a href="<?=$base?>">&larr; Voltar para o Inicio</a>
        </div>

    </div>
    <!-- /.container-fluid -->
<?php $render('footer'); ?>