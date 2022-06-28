<?php $render('header'); ?>
<div class="container-fluid">
        <!-- Begin Page Content -->
        
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Aluguéis Pendentes</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Equipamento</th>
                                <th>Serial</th>
                                <th>Pessoa</th>
                                <th>Setor</th>
                                <th>Data Aluguel</th>
                                <th>Data Limite</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Equipamento</th>
                                <th>Serial</th>
                                <th>Pessoa</th>
                                <th>Setor</th>
                                <th>Data Aluguel</th>
                                <th>Data Limite</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            <?php foreach($alugueis as $aluguel):?>
                                <tr>
                                    <td><?=$aluguel['equipamento']?></td>
                                    <td><?=$aluguel['serial']?></td>
                                    <td><?=$aluguel['pessoa']?></td>
                                    <td><?=$aluguel['setor']?></td>
                                    <td><?=$aluguel['data_aluguel']?></td>
                                    <td><?=$aluguel['data_limite']?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->
    
<?php $render('footer'); ?>