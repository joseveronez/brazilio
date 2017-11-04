<?php
    $dados = $_SESSION["parametrosView"];
?>
<div class="col-md-9 pull-right conteudo">
    <div class="fluid content">
        <section>
            <h1><i class="fa fa-cog fa-spin fa-fw"></i>&nbsp;Configurações - Gerenciar</h1>
            <h4 class="sub-title"></h4>

            <form action="<?= caminhoSite ?>/configuracoes/atualizar-pagina" method="post" enctype="multipart/form-data">
            	<input type="hidden" name="id" value="<?= $dados->id ?>" />

            	<div class="box">
                    <div class="box-title">
                        <h3 class="box-title-title"><i class="fa fa-pencil" aria-hidden="true"></i>&nbsp;&nbsp;Logos</h3>
                    </div>
                    <div class="box-content">
            			<div class="control-group row">
                            <label class="col-sm-2 control-label" align="right">Logo topo</label>

                            <div class="col-sm-10">
                                <?php
                                    if (!empty($dados->logo_header)) {
                                ?>
                                    <img src="<?= caminhoSite ?>/uploads/<?= $dados->logo_header ?>" class="img-responsive"><br>
                                <?php
                                    }
                                ?>

                                <input type="file" name="logo_header" id="logo_header" class="inputfile inputfile-1" />
                                <label for="logo_header"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/></svg> <span>Escolha o arquivo&hellip;</span></label>
                            </div>
                        </div><br>
            			<div class="control-group row">
                            <label class="col-sm-2 control-label" align="right">Logo rodapé</label>

                            <div class="col-sm-10">
                                <?php
                                    if (!empty($dados->logo_footer)) {
                                ?>
                                    <img src="<?= caminhoSite ?>/uploads/<?= $dados->logo_footer ?>" class="img-responsive"><br>
                                <?php
                                    }
                                ?>

                                <input type="file" name="logo_footer" id="logo_footer" class="inputfile inputfile-1" />
                                <label for="logo_footer"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/></svg> <span>Escolha o arquivo&hellip;</span></label>
                            </div>
                        </div><br>
                    </div>
                </div>

                <div class="box">
                    <div class="box-title">
                        <h3 class="box-title-title"><i class="fa fa-pencil" aria-hidden="true"></i>&nbsp;&nbsp;Newsletter</h3>
                    </div>
                    <div class="box-content">
            			<div class="control-group row">
                            <label class="col-sm-2 control-label" align="right">Banner</label>

                            <div class="col-sm-10">
                                <?php
                                    if (!empty($dados->banner_newsletter)) {
                                ?>
                                    <img src="<?= caminhoSite ?>/uploads/<?= $dados->banner_newsletter ?>" class="img-responsive"><br>
                                <?php
                                    }
                                ?>

                                <input type="file" name="banner_newsletter" id="banner_newsletter" class="inputfile inputfile-1" />
                                <label for="banner_newsletter"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/></svg> <span>Escolha o arquivo&hellip;</span></label>
                            </div>
                        </div><br>
            			<div class="control-group row">
                            <label class="col-sm-2 control-label" align="right">Chamada</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="titulo_newsletter" maxlength="255" value="<?= $dados->titulo_newsletter ?>" />
                            </div>
                        </div><br>
                        <div class="control-group row">
                            <label class="col-sm-2 control-label" align="right">E-mail disparo</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="email_newsletter" maxlength="255" value="<?= $dados->email_newsletter ?>" />
                            </div>
                        </div><br>
            		</div>
                </div>

                <div class="box">
                    <div class="box-title">
                        <h3 class="box-title-title"><i class="fa fa-pencil" aria-hidden="true"></i>&nbsp;&nbsp;Configurações</h3>
                    </div>
                    <div class="box-content">
                        <div class="control-group row">
                            <label class="col-sm-2 control-label" align="right">Código</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="codigo" maxlength="255" value="<?= $dados->codigo ?>" />
                            </div>
                        </div><br>
                        <div class="control-group row">
                            <label class="col-sm-2 control-label" align="right">CNPJ</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="cnpj" maxlength="255" value="<?= $dados->cnpj ?>" />
                            </div>
                        </div><br>
                        <div class="control-group row">
                            <label class="col-sm-2 control-label" align="right">E-mail contato</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="email_contato" maxlength="255" value="<?= $dados->email_contato ?>" />
                            </div>
                        </div><br>
                        <div class="control-group row">
                            <label class="col-sm-2 control-label" align="right">Telefone</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="telefone" maxlength="255" value="<?= $dados->telefone ?>" />
                            </div>
                        </div><br>
                        <div class="control-group row">
                            <label class="col-sm-2 control-label" align="right">Fax</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="fax" maxlength="255" value="<?= $dados->fax ?>" />
                            </div>
                        </div><br>
                        <div class="control-group row">
                            <label class="col-sm-2 control-label" align="right">Escritório</label>

                            <div class="col-sm-10">
                                <textarea name="endereco_escritorio" type="text" class="form-control tinyMCE" cols="10" rows="10"><?= $dados->endereco_escritorio ?></textarea>
                            </div>
                        </div><br>
                        <div class="control-group row">
                            <label class="col-sm-2 control-label" align="right">Estacionamento</label>

                            <div class="col-sm-10">
                                <textarea name="endereco_estacionamento" type="text" class="form-control tinyMCE" cols="10" rows="10"><?= $dados->endereco_estacionamento ?></textarea>
                            </div>
                        </div><br>
                        <div class="control-group row">
                            <label class="col-sm-2 control-label" align="right">Mapa</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="mapa" maxlength="255" value="<?= $dados->mapa ?>" />
                            </div>
                        </div><br>
                        <div class="control-group row">
                            <label class="col-sm-2 control-label" align="right">Copyright</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" value="© 2018 BRAZILIO BACELLAR, SHIRAI ADVOGADOS  •  Todos os direitos reservados." readonly />
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