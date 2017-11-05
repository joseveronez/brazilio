<?php
    $categorias = $_SESSION["parametrosView"]["categorias"];
    $dados = $_SESSION["parametrosView"]["dados"];
?>
<div class="col-md-9 pull-right conteudo">
    <div class="fluid content">
        <section>
            <h1><i class="fa fa-link" aria-hidden="true"></i>&nbsp;Links Úteis - Editar link</h1>
            <h4 class="sub-title">Editar dados do link</h4>

            <form action="<?= caminhoSite ?>/links-uteis/atualizar-link" method="post" enctype="multipart/form-data">
            	<input type="hidden" name="id" value="<?= $dados->id ?>" />

            	<div class="box">
                    <div class="box-title">
                        <h3 class="box-title-title"><i class="fa fa-pencil" aria-hidden="true"></i>&nbsp;&nbsp;Principal</h3>
                    </div>
                    <div class="box-content">
            			<div class="control-group row">
                            <label class="col-sm-2 control-label" align="right">Categoria</label>
                            <div class="col-sm-10">
                                <select class="form-control" name="id_categoria" required>
                                    <?php foreach($categorias as $cat) { ?>
                                    <option <?= ($cat->id == $dados->id_categoria) ? 'selected' : '' ?> value="<?= $cat->id ?>"><?= $cat->categoria ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div><br>
                        <div class="control-group row">
                            <label class="col-sm-2 control-label" align="right">Título</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="titulo" maxlength="255" value="<?= $dados->titulo ?>" />
                            </div>
                        </div><br>
                        <div class="control-group row">
                            <label class="col-sm-2 control-label" align="right">URL</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="url" maxlength="255" value="<?= $dados->url ?>" />
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