<?php
    $dados = $_SESSION["parametrosView"];
?>
<div class="col-md-9 pull-right conteudo">
    <div class="fluid content">
        <section>
            <h1><i class="fa fa-handshake-o" aria-hidden="true"></i>&nbsp;Áreas de Atuação - Gerenciar serviços</h1>
            <h4 class="sub-title">Gerenciar serviços cadastrados</h4>

            <div class="box">
                <div class="box-title">
                    <h3 class="box-title-title"><i class="fa fa-align-justify" aria-hidden="true"></i>&nbsp;&nbsp;Serviços</h3>
                </div>
                <div class="box-content">
        			<div class="panel-body content table-responsive table-full-width" style="background-color:#FFFFFF; color:#000000;">
                        <table id="example" class="display" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>título</th>
                                    <th>descrição</th>
                                    <th>&nbsp;</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    foreach ($dados as $item) {
                                ?>
                                <tr>
					                <td>
                                    	<?= $item->titulo ?>
                               		</td>
					                <td>
                                    	<?= $item->descricao ?>
                               		</td>
                                    <td>
                                        <center>
                                            <a href="<?= caminhoSite ?>/areas-atuacao/editar-servico/<?= $item->id ?>"><button type="button" class="btn btn-default btn-editar"><span class="glyphicon glyphicon-edit"></span>&nbsp;&nbsp;Editar</button></a>
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