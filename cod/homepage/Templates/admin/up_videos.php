<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Administrar Videos</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Cadastrar Video
                </div>
                <div class="panel-body">                    
                    <form method="post" role="form" > 
                        <div class="form-group">
                            <label for="video">Video</label>
                            <textarea id='video' 
                                      class="form-control" 
                                      name='video' 
                                      placeholder='Informe o ID do video para cadastrar'></textarea>
                            <p class="help-block">ID do video para adcionar</p>
                        </div>
                        <input type='submit' class="btn btn-default" value="Cadastrar" name='add'/>
                        <input type="reset" class='btn btn-default' value='Limpar'>
                    </form>
                    <?php if($data['msg']):?>
                    <div class='alert alert-danger'>
                        <button type="button" class="close"></button>
                        <?php echo $data['msg'];?>
                    </div>
                    <?php endif?>
                </div>
            </div>
        </div>
    </div>
