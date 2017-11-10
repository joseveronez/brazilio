<?php
    $data_hora_atual = date("Y:m:d H:i:s");

    if(isset($_GET["newsletter"])) {

        $email_disparo_newsletter = $_POST["email_disparo"];

        if($_POST["email"] == NULL OR $_POST["email"] == "") {
            echo "
            <script type='text/javascript'>
                 swal({
                    title: 'Aviso!',
                    text: 'Por favor, preencha o campo da newsletter com o seu e-mail antes de continuar. Obrigado!',
                    type: 'warning',
                    confirmButtonColor: '#38a2a8',
                    confirmButtonText: 'OK!',
                    closeOnConfirm: false
                }, function(){
                    window.history.go(-1);
                });
            </script>
            ";
            exit();
        }

        $headers = "MIME-Version: 1.1\r\n";
        $headers .= "Content-type: text/plain; charset=iso-8859-1\r\n";
        $headers .= "From: ".$_POST['email']."\r\n"; // remetente
        $headers .= "Return-Path: ".$email_disparo_newsletter."\r\n"; // return-path

        $assunto = "BRAZILIO BACELLAR | NEWSLETTER";

        $Msg = "
Novo e-mail para newsletter:
E-mail: ".$_POST['email']."";

        if(mail($email_disparo_newsletter, $assunto, $Msg, $headers)){

            $formularioNewsletter = new FormularioNewsletter();
            $formularioNewsletter->email = $_POST['email'];
            $formularioNewsletter->email_disparo = $email_disparo_newsletter;
            $formularioNewsletter->data_hora_registro = $data_hora_atual;
            $formularioNewsletter->save();
?>
            <script type="text/javascript">
                 swal({
                    title: "Sucesso!",
                    text: "E-mail cadastrado com sucesso. Obrigado!",
                    type: "success",
                    confirmButtonColor: "#38a2a8",
                    confirmButtonText: "OK!",
                    closeOnConfirm: false
                }, function(){
                    window.location = '<?= RAIZSITE ?>';
                });
            </script>
<?php
        }
    }

    if(isset($_GET["contato"])) {

        $email_disparo_contato = $_POST["email_disparo"];

        if($_POST["nome"] == NULL OR $_POST["nome"] == "" AND $_POST["email"] == NULL OR $_POST["email"] == "" AND $_POST["telefone"] == NULL OR $_POST["telefone"] == "" AND $_POST["mensagem"] == NULL OR $_POST["mensagem"] == "") {
            echo "
            <script type='text/javascript'>
                 swal({
                    title: 'Aviso!',
                    text: 'Por favor, preencha todos os campos antes de continuar. Obrigado!',
                    type: 'warning',
                    confirmButtonColor: '#38a2a8',
                    confirmButtonText: 'OK!',
                    closeOnConfirm: false
                }, function(){
                    window.history.go(-1);
                });
            </script>
            ";
            exit();
        }
        
        $headers = "MIME-Version: 1.1\r\n";
        $headers .= "Content-type: text/plain; charset=iso-8859-1\r\n";
        $headers .= "From: ".$_POST['email']."\r\n"; // remetente
        $headers .= "Return-Path: ".$email_disparo_contato."\r\n"; // return-path

        $assunto = "BRAZILIO BACELLAR | FORMULÁRIO DE CONTATO";

        $Msg = "
Novo contato:
Nome: ".$_POST['nome']."
E-mail: ".$_POST['email']."
Telefone: ".$_POST['telefone']."
Mensagem: ".$_POST['mensagem']."";

        if(mail($email_disparo_contato, $assunto, $Msg, $headers)){

            $formularioContato = new FormularioContato();
            $formularioContato->nome = $_POST['nome'];
            $formularioContato->email = $_POST['email'];
            $formularioContato->telefone = $_POST['telefone'];
            $formularioContato->mensagem = $_POST['mensagem'];
            $formularioContato->email_disparo = $email_disparo_contato;
            $formularioContato->data_hora_registro = $data_hora_atual;
            $formularioContato->save();
?>
            <script type="text/javascript">
                 swal({
                    title: "Sucesso!",
                    text: "Contato enviado com sucesso. Obrigado!",
                    type: "success",
                    confirmButtonColor: "#38a2a8",
                    confirmButtonText: "OK!",
                    closeOnConfirm: false
                }, function(){
                    window.location = '<?= RAIZSITE ?>';
                });
            </script>
<?php
        }
    }

    if(isset($_GET["trabalhe"])) {

        $email_disparo_trabalhe_conosco = $_POST["email_disparo"];

        $formularioTrabalheConosco = new FormularioTrabalheConosco();
        $formularioTrabalheConosco->nome = $_POST['nome'];
        $formularioTrabalheConosco->email = $_POST['email'];
        $formularioTrabalheConosco->telefone = $_POST['telefone'];
        $formularioTrabalheConosco->curriculo = $_FILES['curriculo']['name'];
        $formularioTrabalheConosco->mensagem = $_POST['mensagem'];
        $formularioTrabalheConosco->email_disparo = $email_disparo_trabalhe_conosco;
        $formularioTrabalheConosco->data_hora_registro = $data_hora_atual;
        $formularioTrabalheConosco->save();

        $ano = date("Y");

        move_uploaded_file($_FILES['curriculo']['tmp_name'], RAIZ . '/curriculos/BRA'.$ano.'CU'.$formularioTrabalheConosco->id.'.pdf');

        $atualizarForm = FormularioTrabalheConosco::sql("SELECT * FROM formulario_trabalhe_conosco WHERE id = ".$formularioTrabalheConosco->id, SimpleOrm::FETCH_ONE);
        $atualizarForm->curriculo = "BRA".$ano."CU".$formularioTrabalheConosco->id.".pdf";
        $atualizarForm->save();


        die();

        if($_POST["nome"] == NULL OR $_POST["nome"] == "" AND $_POST["email"] == NULL OR $_POST["email"] == "" AND $_POST["telefone"] == NULL OR $_POST["telefone"] == "" AND $_POST["mensagem"] == NULL OR $_POST["mensagem"] == "") {
            echo "
            <script type='text/javascript'>
                 swal({
                    title: 'Aviso!',
                    text: 'Por favor, preencha todos os campos antes de continuar. Obrigado!',
                    type: 'warning',
                    confirmButtonColor: '#38a2a8',
                    confirmButtonText: 'OK!',
                    closeOnConfirm: false
                }, function(){
                    window.history.go(-1);
                });
            </script>
            ";
            exit();
        }

        move_uploaded_file($_FILES['curriculo']['tmp_name'], RAIZ . '/uploads/'.$_FILES['curriculo']['name']);
        
        $headers = "MIME-Version: 1.1\r\n";
        $headers .= "Content-type: text/plain; charset=iso-8859-1\r\n";
        $headers .= "From: ".$_POST['email']."\r\n"; // remetente
        $headers .= "Return-Path: ".$email_disparo_trabalhe_conosco."\r\n"; // return-path

        $assunto = "BRAZILIO BACELLAR | TRABALHE CONOSCO";

        $Msg = "
Novo contato:
Nome: ".$_POST['nome']."
E-mail: ".$_POST['email']."
Telefone: ".$_POST['telefone']."
Mensagem: ".$_POST['mensagem']."

Visualizar currículo: ".RAIZSITE."/uploads/".$_FILES['curriculo']['name'];

        if(mail($email_disparo_trabalhe_conosco, $assunto, $Msg, $headers)){

            $formularioTrabalheConosco = new FormularioTrabalheConosco();
            $formularioTrabalheConosco->nome = $_POST['nome'];
            $formularioTrabalheConosco->email = $_POST['email'];
            $formularioTrabalheConosco->telefone = $_POST['telefone'];
            $formularioTrabalheConosco->curriculo = $_FILES['curriculo']['name'];
            $formularioTrabalheConosco->mensagem = $_POST['mensagem'];
            $formularioTrabalheConosco->email_disparo = $email_disparo_trabalhe_conosco;
            $formularioTrabalheConosco->data_hora_registro = $data_hora_atual;
            $formularioTrabalheConosco->save();
?>
            <script type="text/javascript">
                 swal({
                    title: "Sucesso!",
                    text: "Contato enviado com sucesso. Obrigado!",
                    type: "success",
                    confirmButtonColor: "#38a2a8",
                    confirmButtonText: "OK!",
                    closeOnConfirm: false
                }, function(){
                    window.location = '<?= RAIZSITE ?>';
                });
            </script>
<?php
        }
    }
?>