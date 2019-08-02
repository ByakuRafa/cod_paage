<?php 
$vide = $data['video'];
?>
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
            <div class="col-lg-6 col-lg-offset-2">            
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Atualizar Video</h3>
                    </div>

                    <div class="panel-body ">
                        <div class="row">
                            <div class="col-lg-12 center">
                                <form role="form" method="post">
                                    <div class="form-group">
                                        <label>Id do Novo Video</label>
                                        
                                        <input class="form-control" type='text' name='embvi'  placeholder="Informe um título" value="<?php echo $vide->getVideo()?>">
                                        <input type="hidden" name='idv' value="<?php echo $vide->getId_video()?>">
                                    </div> 
                                    <div class="form-group">
                                        <label>video antigo</label><br>
                                        
                                        <iframe width="400" height="250" src="https://www.youtube.com/embed/<?php echo $vide->getVideo(); ?>" frameborder="0" allowfullscreen></iframe>                 
                                    </div>
                                    <input type="submit" class="btn btn-default" value='Atualizar' name='upd' >
                                    <input type="reset" class="btn btn-default" value="Limpar">
                                </form>                            

                                <?php if ($data['msg']): ?>
                                    <div class="alert alert-danger alert-dismissable">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                        <?php echo $data['msg'] ?>
                                    </div>
                                <?php endif ?>
                            </div>                        
                        </div>                        
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-lg-offset-2 center">
                        <a href="<?php echo $this->base_url ?>adminVideo/">
                            <button type="button" class="btn btn-info btn-circle btn-lg">
                                <i class="fa fa-arrow-left"></i>&nbsp&nbsp&nbsp&nbspVoltar
                            </button>                
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

