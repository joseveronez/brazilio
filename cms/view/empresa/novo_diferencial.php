<div class="col-md-9 pull-right conteudo">
    <div class="fluid content">
        <section>
            <h1><i class="fa fa-gavel" aria-hidden="true"></i>&nbsp;Empresa - Novo diferencial</h1>
            <h4 class="sub-title">Adicionar novo diferencial</h4>

            <form action="<?= caminhoSite ?>/empresa/salvar-diferencial" method="post" enctype="multipart/form-data" id="formInserirDados">
            	<div class="box">
                    <div class="box-title">
                        <h3 class="box-title-title"><i class="fa fa-pencil" aria-hidden="true"></i>&nbsp;&nbsp;Principal</h3>
                    </div>
                    <div class="box-content">
                        <div class="control-group row">
                            <label class="col-sm-2 control-label" align="right">Diferencial</label>

                            <div class="col-sm-10">
                                <textarea name="texto" type="text" class="form-control tinyMCE" cols="10" rows="10"></textarea>
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