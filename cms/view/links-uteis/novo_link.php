<?php
    $categorias = $_SESSION["parametrosView"];
?>
<div class="col-md-9 pull-right conteudo">
    <div class="fluid content">
        <section>
            <h1><i class="fa fa-link" aria-hidden="true"></i>&nbsp;Links Úteis - Novo link</h1>
            <h4 class="sub-title">Adicionar novo link</h4>

            <form action="<?= caminhoSite ?>/links-uteis/salvar-link" method="post" enctype="multipart/form-data" id="formInserirDados">
            	<div class="box">
                    <div class="box-title">
                        <h3 class="box-title-title"><i class="fa fa-pencil" aria-hidden="true"></i>&nbsp;&nbsp;Principal</h3>
                    </div>
                    <div class="box-content">
            			<div class="control-group row">
                            <label class="col-sm-2 control-label" align="right">Categoria</label>
                            <div class="col-sm-10">
                                <select class="form-control" name="id_categoria" required>
                                    <option selected value="">Selecione a categoria</option>
                                    <?php foreach($categorias as $cat) { ?>
                                    <option value="<?= $cat->id ?>"><?= $cat->categoria ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div><br>
                        <div class="control-group row">
                            <label class="col-sm-2 control-label" align="right">Título</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="titulo" maxlength="255" required />
                            </div>
                        </div><br>
                        <div class="control-group row">
                            <label class="col-sm-2 control-label" align="right">URL</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="url" maxlength="255" required />
                            </div>
                        </div><br>
            		</div>
                </div><br>

            	<button type="submit" class="btn btn-lg btn-default btn-atualizar"><span class="glyphicon glyphicon-ok"></span>&nbsp;&nbsp;Salvar</button>
            </form>
        </section>
        <?php include caminhoFisico . "/view/parts/footer.php" ?>
    </div>
</div>