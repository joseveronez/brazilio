<?php
    $dados = $_SESSION["parametrosView"];
?>
<div class="col-md-9 pull-right conteudo">
    <div class="fluid content">
        <section>
            <h1><i class="fa fa-users" aria-hidden="true"></i>&nbsp;Equipe - Gerenciar equipe</h1>
            <h4 class="sub-title">Gerenciar integrantes da equipe</h4>

            <div class="box">
                <div class="box-title">
                    <h3 class="box-title-title"><i class="fa fa-align-justify" aria-hidden="true"></i>&nbsp;&nbsp;Equipe</h3>
                </div>
                <div class="box-content">
        			<div class="panel-body content table-responsive table-full-width" style="background-color:#FFFFFF; color:#000000;">
                        <table id="example" class="display" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>tipo</th>
                                    <th>nome</th>
                                    <th>e-mail</th>
                                    <th>&nbsp;</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    foreach ($dados as $item) {

                                        $tipo = "";
                                        if($item->tipo == 1) {
                                            $tipo = "Sócio";
                                        } else if($item->tipo == 2) {
                                            $tipo = "Advogado";
                                        } else {
                                            $tipo = "Equipe";
                                        }
                                ?>
                                <tr>
					                <td>
                                    	<?= $tipo ?>
                               		</td>
					                <td>
                                    	<?= $item->nome ?>
                               		</td>
					                <td>
                                    	<?= $item->email ?>
                               		</td>
                                    <td>
                                        <center>
                                            <a href="<?= caminhoSite ?>/equipe/editar-integrante/<?= $item->id ?>"><button type="button" class="btn btn-default btn-editar"><span class="glyphicon glyphicon-edit"></span>&nbsp;&nbsp;Editar</button></a>
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
                text: "Você tem certeza que deseja excluir este item?",
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
                    swal("Removido!", "Item removido com sucesso!", "success");
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