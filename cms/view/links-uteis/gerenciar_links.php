<?php
    $categorias = $_SESSION["parametrosView"]["categorias"];
    $dados = $_SESSION["parametrosView"]["dados"];
?>
<div class="col-md-9 pull-right conteudo">
    <div class="fluid content">
        <section>
            <h1><i class="fa fa-link" aria-hidden="true"></i>&nbsp;Links Úteis - Gerenciar links</h1>
            <h4 class="sub-title">Gerenciar links cadastrados</h4>

            <?php foreach($categorias as $cat) { ?>
            <div class="box">
                <div class="box-title">
                    <h3 class="box-title-title"><i class="fa fa-align-justify" aria-hidden="true"></i>&nbsp;&nbsp;<?= $cat->categoria ?></h3>
                </div>
                <div class="box-content">
        			<div class="panel-body content table-responsive table-full-width" style="background-color:#FFFFFF; color:#000000;">
                        <table class="table table-striped" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>título</th>
                                    <th>url</th>
                                    <th>&nbsp;</th>
                                    <th>&nbsp;</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $dados[$cat->id] = LinksUteis::sql("SELECT * FROM links_uteis WHERE id_categoria = {$cat->id}");
                                    foreach ($dados[$cat->id] as $item) {
                                ?>
                                <tr>
					                <td>
                                    	<?= $item->titulo ?>
                               		</td>
                                    <td>
                                        <?= $item->url ?>
                                    </td>
                                    <td>
                                        <center>
                                            <a href="<?= caminhoSite ?>/links-uteis/editar-link/<?= $item->id ?>"><button type="button" class="btn btn-default btn-editar"><span class="glyphicon glyphicon-edit"></span>&nbsp;&nbsp;Editar</button></a>
                                        </center>
                                    </td>
                                    <td>
                                        <center>
                                            <a href="<?= caminhoSite ?>/links-uteis/excluir-link/<?= $item->id ?>" class="btnDeleteAjax"><button type="button" class="btn btn-default btn-excluir"><span class="glyphicon glyphicon-trash"></span>&nbsp;&nbsp;Excluir</button></a>
                                        </center>
                                    </td>
                                </tr>
                                <?php
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
        		</div>
            </div><br>
            <?php } ?>

        </section>
        <?php include caminhoFisico . "/view/parts/footer.php" ?>
    </div>
</div>
<script type="text/javascript">
    $("#example").dataTable({
        "pageLength": 50
    });

    $(document).ready(function() {
        $(".btnDeleteAjax").click(function(event) {
            /* Act on the event */
            event.preventDefault();
            var href = $(this).attr("href");
            var ele = $(this);
            swal({
                title: "Deseja realmente excluir?",
                text: "Você tem certeza que deseja excluir este link?",
                type: "warning", 
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Sim, pode excluir!",
                closeOnConfirm: false
            }, function(){
                $.ajax({
                    url: href
                })
                .done(function(data) {
                    console.log("success");
                    swal("Removido!", "Link removido com sucesso!", "success");
                    location.reload();
                })
                .fail(function() {
                    console.log("error");
                })
                .always(function() {
                    console.log("complete");
                });
            });
        });
    });
</script>