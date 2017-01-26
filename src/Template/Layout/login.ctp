<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php echo isset($theme['title']) ? $theme['title'] : 'AdminLTE 2 | Log in'; ?></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.5 -->
  <?php echo $this->Html->css('AdminLTE./bootstrap/css/bootstrap'); ?>
  <!-- Font Awesome -->
  <?php echo $this->Html->css('AdminLTE./plugins/font-awesome/css/font-awesome.min'); ?>
  <!-- Ionicons -->
  <?php echo $this->Html->css('AdminLTE./plugins/ionicons/css/ionicons.min'); ?>
  <!-- Theme style -->
  <?php echo $this->Html->css('AdminLTE.style.min'); ?>
  <!-- iCheck -->
  <?php echo $this->Html->css('AdminLTE./plugins/iCheck/square/blue'); ?>

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <?php echo $this->Html->script('AdminLTE.html5shiv.min'); ?>
  <?php echo $this->Html->script('AdminLTE.respond.min'); ?>
  <![endif]-->
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="<?php echo $this->Url->build(array('controller' => 'pages', 'action' => 'display', 'home')); ?>"><?php echo $theme['logo']['large'] ?></a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg"><?php echo __('Sign in to start your session') ?></p>
    <p> <?php echo $this->Flash->render(); ?> </p>
    <p> <?php echo $this->Flash->render('auth'); ?> </p>

<?php echo $this->fetch('content'); ?>

    <?php
    if (isset($theme['login']['show_social']) && $theme['login']['show_social']) {
        ?>
        <div class="social-auth-links text-center">
          <p>- <?php echo __('OR') ?> -</p>
          <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> <?php echo __('Sign in using Facebook') ?></a>
          <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> <?php echo __('Sign in using Google+') ?></a>
        </div>
        <?php
    }
    ?>

    <?php
    if (isset($theme['login']['show_remember']) && $theme['login']['show_remember']) {
        ?>
        <a href="#"><?php echo __('I forgot my password') ?></a><br>
        <?php
    }
    if (isset($theme['login']['show_register']) && $theme['login']['show_register']) {
        ?>
        <a href="#" class="text-center"><?php echo __('Register a new membership') ?></a>
        <?php
    }
    ?>

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 2.1.4 -->
<?php echo $this->Html->script('/plugins/jQuery/jQuery-2.1.4.min'); ?>
<!-- Bootstrap 3.3.5 -->
<?php echo $this->Html->script('/bootstrap/js/bootstrap'); ?>
<!-- iCheck -->
<?php echo $this->Html->script('/plugins/iCheck/icheck.min'); ?>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>
</body>
</html>
