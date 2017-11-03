<?php
    $dados = $_SESSION["parametrosView"];
    $recuperacao = Recuperacao::sql("SELECT * FROM recuperacao");
?>
<div class="col-md-9 pull-right conteudo">
    <div class="fluid content">
        <section>
            <h1><i class="fa fa-university" aria-hidden="true"></i>&nbsp;Recuperação Judicial - Gerenciar</h1>
            <h4 class="sub-title">gerenciar Recuperações Judiciais</h4>

            <div class="box">
                <div class="box-title">
                    <h3 class="box-title-title"><i class="fa fa-university" aria-hidden="true"></i>&nbsp;&nbsp;Recuperação Judicial </h3>
                </div>
                <div class="box-content">
        			<div class="panel-body content table-responsive table-full-width" style="background-color:#FFFFFF; color:#000000;">
                        <table id="example" class="display" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                	
                                    <th>Titulo</th>
                                    <th>Recuperação Judicial</th>
                                    <th>&nbsp;</th>
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
                                    	<?php 
                                            foreach ($recuperacao as $rec){
                                                if($rec->id == $item->id_recuperacao){
                                                    echo $rec->titulo;
                                                }
                                            }
                                        ?>
                               		</td>
                                    <td>
                                        <center>
                                            <a href="<?= caminhoSite ?>/recuperacao_arquivos/editar-dados/<?= $item->id ?>"><button type="button" class="btn btn-default btn-editar"><span class="glyphicon glyphicon-edit"></span>&nbsp;&nbsp;Editar</button></a>
                                        </center>
                                    </td>
					                <td>
                                        <center>
                                            <a href="<?= caminhoSite ?>/recuperacao_arquivos/excluir-dados/<?= $item->id ?>" class="btnDeleteAjax"><button type="button" class="btn btn-default btn-excluir"><span class="glyphicon glyphicon-trash"></span>&nbsp;&nbsp;Excluir</button></a>
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