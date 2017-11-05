<div class="col-md-9 pull-right conteudo">
    <div class="fluid content">
        <section>
            <h1><i class="fa fa-users" aria-hidden="true"></i>&nbsp;Equipe - Novo integrante</h1>
            <h4 class="sub-title">Adicionar novo integrante a equipe</h4>

            <form action="<?= caminhoSite ?>/equipe/salvar-integrante" method="post" enctype="multipart/form-data" id="formInserirDados">
            	<div class="box">
                    <div class="box-title">
                        <h3 class="box-title-title"><i class="fa fa-pencil" aria-hidden="true"></i>&nbsp;&nbsp;Principal</h3>
                    </div>
                    <div class="box-content">
            			<div class="control-group row">
                            <label class="col-sm-2 control-label" align="right">Foto</label>

                            <div class="col-sm-10">
                                <input type="file" name="foto" id="foto" class="inputfile inputfile-1" />
                                <label for="foto"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/></svg> <span>Escolha o arquivo&hellip;</span></label>
                            </div>
                        </div><br>
                        <div class="control-group row">
                            <label class="col-sm-2 control-label" align="right">Tipo</label>
                            <div class="col-sm-10">
                                <select class="form-control" name="tipo" id="tipo" required>
                                    <option selected value="">Selecione uma opção</option>
                                    <option value="1">Sócio</option>
                                    <option value="2">Advogado</option>
                                    <option value="3">Equipe</option>
                                </select>
                            </div>
                        </div><br>
            			<div class="control-group row">
                            <label class="col-sm-2 control-label" align="right">Nome</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="nome" maxlength="255" required />
                            </div>
                        </div><br>
            			<div class="control-group row">
                            <label class="col-sm-2 control-label" align="right">OAB</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="oab" maxlength="255" />
                            </div>
                        </div><br>
            			<div class="control-group row">
                            <label class="col-sm-2 control-label" align="right">E-mail</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="email" maxlength="255" required />
                            </div>
                        </div><br>
                        <div class="control-group row">
                            <label class="col-sm-2 control-label" align="right">Formação</label>

                            <div class="col-sm-10">
                                <textarea name="formacao" type="text" class="form-control tinyMCE" cols="10" rows="10"></textarea>
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