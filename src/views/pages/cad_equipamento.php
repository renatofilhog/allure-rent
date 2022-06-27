<?php $render('header'); ?>
    <!-- Begin Page Content -->

    <div class="container-fluid">
        <h1>Cadastro de Equipamento</h1>
        <hr>
        <form class="cadastro user">
            <div class="form-group tpequip">
                <span>Tipo de Equipamento: </span>
                <select name="tpequip" class="selectTpequip">
                    <?php 
                        foreach($tpequip as $value):
                    ?>
                    <option value="<?= $value['id']?>"><?= $value['nome_tipo']?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="form-group">
                <input type="text" class="form-control form-control-user"
                    placeholder="Insira a descrição do equipamento">
            </div>
            <div class="form-group">
                <input id="telefone-cadPessoa" type="text" class="form-control form-control-user"
                    placeholder="Insira o serial / identificador">
            </div>
            
            <a href="index.html" class="btn btn-primary btn-user btn-block">
                Cadastrar
            </a>
            <hr>
        </form>
    </div>
    <!-- /.container-fluid -->
<?php $render('footer'); ?>
