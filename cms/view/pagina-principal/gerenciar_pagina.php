<?php
    $dados = $_SESSION["parametrosView"];
?>
<div class="col-md-9 pull-right conteudo">
    <div class="fluid content">
        <section>
            <h1><i class="fa fa-home" aria-hidden="true"></i>&nbsp;Home - Gerenciar página</h1>
            <h4 class="sub-title">Gerenciar página principal</h4>

            <form action="<?= caminhoSite ?>/pagina-principal/atualizar-pagina" method="post" enctype="multipart/form-data">
            	<input type="hidden" name="id" value="<?= $dados->id ?>" />

            	<div class="box">
                    <div class="box-title">
                        <h3 class="box-title-title"><i class="fa fa-pencil" aria-hidden="true"></i>&nbsp;&nbsp;Empresa</h3>
                    </div>
                    <div class="box-content">
                        <div class="control-group row">
                            <label class="col-sm-2 control-label" align="right">Título</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="titulo_empresa" maxlength="255" value="<?= $dados->titulo_empresa ?>" />
                            </div>
                        </div><br>
                        <div class="control-group row">
                            <label class="col-sm-2 control-label" align="right">Conteúdo</label>

                            <div class="col-sm-10">
                                <textarea name="texto_empresa" type="text" class="form-control tinyMCE" cols="10" rows="10"><?= $dados->texto_empresa ?></textarea>
                            </div>
                        </div><br>
                    </div>
                </div>

                <div class="box">
                    <div class="box-title">
                        <h3 class="box-title-title"><i class="fa fa-pencil" aria-hidden="true"></i>&nbsp;&nbsp;Áreas de atuação</h3>
                    </div>
                    <div class="box-content">
            			<div class="control-group row">
                            <label class="col-sm-2 control-label" align="right">Título</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="titulo_areas" maxlength="255" value="<?= $dados->titulo_areas ?>" />
                            </div>
                        </div><br>
                        <div class="control-group row">
                            <label class="col-sm-2 control-label" align="right">Conteúdo</label>

                            <div class="col-sm-10">
                                <textarea name="texto_areas" type="text" class="form-control tinyMCE" cols="10" rows="10"><?= $dados->texto_areas ?></textarea>
                            </div>
                        </div><br>
            		</div>
                </div><br>

            	<button type="submit" class="btn btn-lg btn-default btn-atualizar"><span class="glyphicon glyphicon-ok"></span>&nbsp;&nbsp;Atualizar</button>
            </form>
        </section>
        <?php include caminhoFisico . "/view/parts/footer.php" ?>
    </div>
</div>