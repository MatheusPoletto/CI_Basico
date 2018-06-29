<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $titulo; ?></title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="<?php echo base_url(); ?>favi.ico">

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/normalize.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/themify-icons.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/flag-icon.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/cs-skin-elastic.css">
    <!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/scss/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

</head>
<body class="bg-light">
    <?php //echo password_hash('DBAMB' . 'MBSISTEMAS', PASSWORD_DEFAULT) . '<BR>'; 
    //$hash1 = '$2y$10$BwI07LPrZcER5bxPp.lkIOqZ5sdsMUexp0KyzImmHjS7T0bI/UcCa';
    //var_dump(password_verify('DBAMB' . 'MBSISTEMAS', $hash1));

    ?>

    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                <div class="login-logo">
                    <a href="index.html">
                        <img class="align-content" src="<?php echo base_url(); ?>images/logo.png" style='width:50%;' border="0" alt="Null">
                    </a>
                </div>
                <br>
                <?php if(isset($usuarioIncorreto)) $this->load->view('alertas/login_usuario_incorreto');  ?>
                
                <div class="login-form">
                    <?php echo form_open(site_url('Portal/acessar')); ?>
                        <div class="form-group">
                            <label style="color: #000;  ">Usuário</label>
                            <input type="text" name="inputUsuario" class="form-control" placeholder="Digite seu nome de usuário" required>
                        </div>
                        <div class="form-group">
                            <label style="color: #000;">Senha</label>
                            <input type="password" name="inputSenha" class="form-control" placeholder="Digite sua senha" required>
                        </div>
                        <button type="submit" class="btn btn-success btn-flat m-b-30 m-t-30">Entrar</button>

                        <hr>
                        <div class="register-link m-t-15 text-center">
                            <p>Esqueceu a senha? <a href="#"> Recupere aqui</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <script src="assets/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>


</body>
</html>
