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
                    <button type="button" class="btn btn-success"><a href="<?php echo $this->base_url?>adminVideo/insertVideo">adcionar video</a></button>
                        <table width="100%" class="table table-striped table-bordered table-hover" id="table">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>ID do video</th>
                                        <th>Video</th>                                        
                                        <th>Ação</th>                                        
                                    </tr>
                                </thead>
                                <tbody>
                                   <?php $item = 0;?>
                                   <?php foreach($data['video'] as $vide):?> 
                                            <tr class="<?php echo ($item%2==0)?"even":"odd"; ?>"> 
                                               <td><?php echo $vide->getId_video()?></td>
                                               <td><?php echo $vide->getVideo()?></td>
                                               <td><iframe width="400" height="250" src="https://www.youtube.com/embed/<?php echo $vide->getVideo(); ?>" frameborder="0" allowfullscreen></iframe></td>
                                               
                                               <td>
                                            <a href="<?php echo $this->base_url ?>adminVideo/updateVideo/<?php echo $vide->getId_video() ?>"><i class='fa fa-3x fa-edit'></i></a>
                                            <a href="<?php echo $this->base_url ?>adminVideo/deletVideo/<?php echo $vide->getId_video() ?>"><i class='fa fa-3x fa-remove'></i></a>
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
   