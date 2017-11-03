<?php
    $dados = $_SESSION["parametrosView"];
?>
<div class="col-md-9 pull-right conteudo">
    <div class="fluid content">
        <section>
            <h1><i class="fa fa-user-circle" aria-hidden="true"></i>&nbsp;Equipe - Editar</h1>
            <h4 class="sub-title">Editar informações</h4>

            <form action="<?= caminhoSite ?>/equipe/atualizar-dados" method="post" enctype="multipart/form-data">
            	<input type="hidden" name="id" value="<?= $dados->id ?>" />

            	<div class="box">
                    <div class="box-title">
                        <h3 class="box-title-title"><i class="fa fa-user-circle" aria-hidden="true"></i>&nbsp;&nbsp;Equipe</h3>
                    </div>
                    <div class="box-content">
            			<div class="control-group row">
                            <label class="col-sm-2 control-label" align="right">tipo</label>
                            <div class="col-sm-10">
                                <!-- <input type="text" class="form-control" name="tipo" maxlength="255"  /> -->
                                <select class="form-control" name="tipo" id="tipo" value="<?= $dados->tipo ?>" required>
                                    <option  disabled>Selecione uma opção</option>
                                    <option value="1" <?php if($dados->tipo == 1){?> selected <?php }; ?>>Sócio</option>
                                    <option value="2" <?php if($dados->tipo == 2){?> selected <?php }; ?>>Advogado</option>
                                    <option value="3" <?php if($dados->tipo == 3){?> selected <?php }; ?>>Equipe</option>
                                </select>
                            </div>
                        </div><br>
            			<div class="control-group row">
                            <label class="col-sm-2 control-label" align="right">nome</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="nome" maxlength="255" value="<?= $dados->nome ?>" />
                            </div>
                        </div><br>
            			<div class="control-group row">
                            <label class="col-sm-2 control-label" align="right">oab</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="oab" maxlength="255" value="<?= $dados->oab ?>" />
                            </div>
                        </div><br>
            			<div class="control-group row">
                            <label class="col-sm-2 control-label" align="right">email</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="email" maxlength="255" value="<?= $dados->email ?>" />
                            </div>
                        </div><br>
                        <div class="control-group row">
                            <label class="col-sm-2 control-label" align="right">formacao</label>

                            <div class="col-sm-10">
                                <textarea name="formacao" type="text" class="form-control tinyMCE" cols="10" rows="10"><?= $dados->formacao ?></textarea>
                            </div>
                        </div><br>
            			<div class="control-group row">
                            <label class="col-sm-2 control-label" align="right">foto</label>

                            <div class="col-sm-10">
                                <?php
                                    if (!empty($dados->foto)) {
                                ?>
                                    <i class="fa fa-file-archive-o fa-2x" aria-hidden="true"></i>&nbsp;&nbsp;<?= $dados->foto ?><br />
                                <?php
                                    }
                                ?>

                                <input type="file" name="foto" id="foto" class="inputfile inputfile-1" />
                                <label for="foto"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/></svg> <span>Escolha o arquivo&hellip;</span></label>
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