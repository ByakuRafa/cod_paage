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
                    Cadastrar Notícia
                </div>
                <div class="panel-body">                    
                    <form method="post" role="form" > 
                        <div class="form-group">
                            <label for="title"> Título</label>
                            <input id='title' class="form-control" 
                                   type="text" name='title' 
                                   placeholder="Informe um título para a notícia">
                            <p class="help-block">Informe um título para a notícia</p>
                        </div>
                        <div class="form-group">
                            <label for="text"> Texto</label>
                            <textarea id='text' 
                                      class="form-control" 
                                      name='text' 
                                      placeholder='Informe um texto para a notícia'></textarea>
                            <p class="help-block">Informe um texto para a notícia</p>
                        </div> 
                        <div class="form-group">
                            <label for="img"> Imagem</label>
                            <textarea id='img' 
                                      class="form-control" 
                                      name='img' 
                                      placeholder='Informe uma imagem para a notícia'></textarea>
                            <p class="help-block">Informe uma imagem para a notícia</p>
                        </div> 
                        <div class="form-group">
                            <label for="fecha"> Data</label>
                            <input id='fecha' 
                                   type="date"
                                      class="form-control" 
                                      name='fecha' 
                                      placeholder='Informe uma data para a notícia'/>
                            <p class="help-block">Informe uma data para a notícia</p>
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
