<?php $render('header'); ?>
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <h1>Realizar aluguel</h1>
        <hr>
        <form class="cadastro user" method="POST">
            <div class="form-group tpequip">
                <span>Equipamento: </span>
                <select name="equipamento" class="selectTpequip">
                    <?php 
                        foreach($equipamentos as $value):
                    ?>
                    <option value="<?= $value['id']?>"><?= $value['descricao']?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="form-group tpequip">
                <span>Setor: </span>
                <select name="setor" class="selectTpequip">
                    <?php 
                        foreach($setores as $value):
                    ?>
                    <option value="<?= $value['id']?>"><?= $value['nome_setor']?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="form-group datesDevolucao">
                <span>Data Devolução</span>
                <input name="data_limite" type="date" class="form-control form-control-user"
                    placeholder="Insira a data de devolução">
                <span>Hora Devolução</span>
                <input name="hora_limite" type="time" class="form-control form-control-user"
                    placeholder="Hora devolução">
            </div>
            <input type="submit" class="btn btn-primary btn-user btn-block"
                value="Alugar equipamento">
            <hr>
        </form>
    </div>
    <!-- /.container-fluid -->
<?php $render('footer'); ?>
