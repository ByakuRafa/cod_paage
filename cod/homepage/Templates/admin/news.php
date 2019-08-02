<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Notícias</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-12">            
                <a href="<?php echo $this->base_url ?>AdminNews/addNews/">
                    <button type="button" class="btn btn-info btn-circle btn-lg">
                        <i class="fa fa-plus"></i>&nbsp&nbsp&nbsp&nbspCriar Nova Notícia
                    </button>                
                </a>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        DataTables Advanced Tables
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                                <tr>
                                    <th>ID News</th>
                                    <th>Title</th>
                                    <th>Text</th>
                                    <th>Action</th>                                
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($data['zomb'] as $zomb): ?>
                                    <tr class="<?php echo ($zomb->getId_Zomb() % 2 == 0) ? 'even' : 'odd'; ?>">
                                        <td><?php echo $zomb->getId_Zomb() ?></td>
                                        <td><?php echo $zomb->getTexto() ?></td>
                                        <td><?php echo substr($zomb->getDescricao(), 0, 200) . "..." ?></td>
                                        <td>
                                            <a href="<?php echo $this->base_url ?>AdminNews/updateNews/<?php echo $zomb->getId_Zomb() ?>"><i class='fa fa-3x fa-edit'></i></a>
                                            <a href="<?php echo $this->base_url ?>AdminNews/deleteNews/<?php echo $zomb->getId_Zomb() ?>"><i class='fa fa-3x fa-remove'></i></a>
                                        </td>  

                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>

                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
            </div>
            <!-- /.col-lg-12 -->
        </div>
    </div>
</div>
<!-- /#page-wrapper -->
