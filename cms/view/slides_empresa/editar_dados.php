<?php
    $dados = $_SESSION["parametrosView"];
?>
<div class="col-md-9 pull-right conteudo">
    <div class="fluid content">
        <section>
            <h1><i class="fa fa-university" aria-hidden="true"></i>&nbsp;Slides - Editar</h1>
            <h4 class="sub-title">Editar Slides</h4>

            <form action="<?= caminhoSite ?>/slides_empresa/atualizar-dados" method="post" enctype="multipart/form-data">
            	<input type="hidden" name="id" value="<?= $dados->id ?>" />

            	<div class="box">
                    <div class="box-title">
                        <h3 class="box-title-title"><i class="fa fa-handshake-o" aria-hidden="true"></i>&nbsp;&nbsp;Slides</h3>
                    </div>
                    <div class="box-content">
                        <div class="control-group row">
                            <label class="col-sm-2 control-label" align="right">slider</label>
                            <div class="col-sm-10">
                                <select class="form-control" name="slider" id="slider" value="<?= $dados->slider ?>" required>
                                    <option  disabled>Selecione uma opção</option>
                                    <option value="1" <?php if($dados->slider == 1){?> selected <?php }; ?>>Cima</option>
                                    <option value="2" <?php if($dados->slider == 2){?> selected <?php }; ?>>Baixo</option>
                                    <option value="3" <?php if($dados->slider == 3){?> selected <?php }; ?>>Lateral</option>
                                </select>
                            </div>
                        </div><br>
            			<div class="control-group row">
                            <label class="col-sm-2 control-label" align="right">imagem</label>

                            <div class="col-sm-10">
                                <img src="<?= caminhoSite ?>/uploads/<?= $dados->imagem ?>">
                                <?php
                                    if (!empty($dados->imagem)) {
                                ?>
                                    <br><i class="fa fa-file-archive-o fa-2x" aria-hidden="true"></i>&nbsp;&nbsp;<?= $dados->imagem ?><br />
                                <?php
                                    }
                                ?>

                                <input type="file" name="imagem" id="imagem" class="inputfile inputfile-1" />
                                <label for="imagem"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/></svg> <span>Escolha o arquivo&hellip;</span></label>
                            </div>
                        </div><br>
                        <div class="control-group row">
                            <label class="col-sm-2 control-label" align="right">posicao</label>
                            <div class="col-sm-2">
                                <input type="number" class="form-control" name="posicao"  min="1" maxlength="255" value="<?= $dados->posicao ?>" />
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