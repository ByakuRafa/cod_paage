<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Administrar Imagens</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Imagens Cadastradas
                </div>
                <div class="panel-body">
                                        <button type="button" class="btn btn-success"><a href="<?php echo $this->base_url?>adminImg/insertImg">adcionar imagem</a></button>

                    
                        <table width="100%" class="table table-striped table-bordered table-hover" id="table">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>nome e formato</th>
                                        <th>Imagem</th>
                                        <th>ação</th>
                                    </tr>
                                </thead>
                                <tbody>
                                   <?php $item = 0;?>
                                   <?php foreach($data['img'] as $imag):?> 
                                            <tr class="<?php echo ($item%2==0)?"even":"odd"; ?>"> 
                                               <td><?php echo $imag->getId_Img()?></td>
                                               <td><?php echo $imag->getImg(); ?></td>
                                               <td><img src="<?php echo $this->base_url."view/templates/default/img/".$imag->getImg(); ?>" width='100'></td>
                                            
                                            <td>
                                            <a href="<?php echo $this->base_url ?>adminImg/updateImg/<?php echo $imag->getId_Img() ?>"><i class='fa fa-3x fa-edit'></i></a>
                                            <a href="<?php echo $this->base_url ?>adminImg/deletImg/<?php echo $imag->getId_Img() ?>"><i class='fa fa-3x fa-remove'></i></a>
                                        </td>  
                                        </tr>
                                        <?php $item++;?>
                                    <?php endforeach?>
                                </tbody>
                        </table>
                    
                </div>
            </div>
        </div>
    </div>
   