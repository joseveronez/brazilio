<?php
    if(isset($_GET["newsletter"])) {
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
        $headers .= "Return-Path: nicolas@comberweb.com.br\r\n"; // return-path

        $assunto = "BRAZILIO BACELLAR | NEWSLETTER";

        $Msg = "
Novo e-mail para newsletter:
E-mail: ".$_POST['email']."";

        if(mail("nicolas@comberweb.com.br", $assunto, $Msg, $headers)){
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
        $headers .= "Return-Path: nicolas@comberweb.com.br\r\n"; // return-path

        $assunto = "BRAZILIO BACELLAR | FORMULÁRIO DE CONTATO";

        $Msg = "
Novo contato:
Nome: ".$_POST['nome']."
E-mail: ".$_POST['email']."
Telefone: ".$_POST['telefone']."
Mensagem: ".$_POST['mensagem']."";

        if(mail("nicolas@comberweb.com.br", $assunto, $Msg, $headers)){
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
        $headers .= "Return-Path: nicolas@comberweb.com.br\r\n"; // return-path

        $assunto = "BRAZILIO BACELLAR | TRABALHE CONOSCO";

        $Msg = "
Novo contato:
Nome: ".$_POST['nome']."
E-mail: ".$_POST['email']."
Telefone: ".$_POST['telefone']."
Mensagem: ".$_POST['mensagem']."

Visualizar currículo: ".RAIZSITE."/uploads/".$_FILES['curriculo']['name'];

        if(mail("nicolas@comberweb.com.br", $assunto, $Msg, $headers)){
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