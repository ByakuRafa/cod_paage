<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Administrar Notícias</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Notícias Cadastradas
                </div>
                <div class="panel-body">
                    
                        <table width="100%" class="table table-striped table-bordered table-hover" id="table">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Título</th>
                                        <th>Texto</th>
                                    </tr>
                                </thead>
                                <tbody>
                                   <?php $item = 0;?>
                                   <?php foreach($data['zomb'] as $zomb):?> 
                                            <tr class="<?php echo ($item%2==0)?"even":"odd"; ?>"> 
                                               <td><?php echo $zomb->getId_news()?></td>
                                               <td><?php echo $zomb->getTexto(); ?></td>
                                               <td><?php echo substr($zomb->getDescricao(),0,100)." ..."?></td>
                                            </tr>
                                        <?php $item++;?>
                                    <?php endforeach?>
                                </tbody>
                        </table>
                    
                </div>
            </div>
        </div>
    </div>
   