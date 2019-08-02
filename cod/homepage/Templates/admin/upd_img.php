<?php 
$img = $data['img'];
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
                                <form role="form" method="post" role="form" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label>nome da nova imagem</label>
                                        
                                        
                                        
                                         <br><input  type="file" name="arquivo" ><br>
                                        <input type="hidden" name='id' value="<?php echo $img->getId_img()?>">
                                        <input type="hidden" name='img_old' value="<?php echo $img->getImg()?>">
                                    </div> 
                                    <div class="form-group">
                                        <label>video antigo</label><br>
                                        
                                        <img src="<?php echo $this->base_url."view/templates/default/img/".$img->getImg(); ?>" width='100'>               
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
                        <a href="<?php echo $this->base_url ?>adminImg/">
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

