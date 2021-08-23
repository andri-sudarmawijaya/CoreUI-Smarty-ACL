<?php
defined('BASEPATH') or exit('No direct script access allowed');

$_SESSION['token']['key'] = bin2hex(random_bytes(32));
$_SESSION['token']['value'] = time() . bin2hex(random_bytes(32));

$token_key = $_SESSION['token']['key'];
$token_val = $_SESSION['token']['value'];

?>
<!DOCTYPE html>
<!--
* CoreUI - Free Bootstrap Admin Template
* @version v2.1.12
* @link https://coreui.io
* Copyright (c) 2018 creativeLabs Łukasz Holeczek
* Licensed under MIT (https://coreui.io/license)
-->

<html lang="en">

<head>
  <?php $this->load->view('_partials/_head'); ?>
</head>

<body class="app header-fixed sidebar-fixed aside-menu-fixed sidebar-lg-show">
  <header class="app-header navbar _header">
    <?php $this->load->view('_partials/_header'); ?>
  </header>
  <div class="app-body" id="pjax-container">
    <div class="sidebar _sidebar">
      <?php $this->load->view('_partials/_sidebar'); ?>
    </div>
    <main class="main">
      <!-- Breadcrumb-->
      <ol class="breadcrumb">
        <?php $this->load->view('_partials/_breadcrumb'); ?>
      </ol>
      <div class="container-fluid">
        <div class="animated fadeIn">
          <div class="row _highlight">
            <?php $this->load->view('_partials/_highlight'); ?>
          </div>
          <!-- /.row-->
          <?php $this->load->view('_partials/_alerts'); ?>
          <div class="card-group _content">
            <?php //$this->load->view('_partials/_content');
            ?>
            <div class="card p-4 bg-success text-white">
              <div class="card-body">
                <form action="<?php echo base_url('login'); ?>" method="post">
                  <h1>Login</h1>
                  <p class="text-muted">Sign In to your account</p>
                  <div role="group" class="form-group">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <i class="fa fa-user"></i>
                        </span>
                      </div>
                      <input id="uid-uw5lvwq9md" type="text" placeholder="Username" name="username" autocomplete="username" class="form-control" value="">
                    </div>
                  </div>
                  <div role="group" class="form-group">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <i class="fa fa-lock"></i>
                        </span>
                      </div>
                      <input id="uid-u0rbnzin5y9" type="password" placeholder="Password" name="password" autocomplete="current-password" class="form-control">
                    </div>
                  </div>
                  <div role="group" class="form-group">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="remember" id="remember" value="1">
                      <label class="form-check-label" for="remember"> Remember Me </label>
                    </div>
                  </div>
                  <div class="row">
                    <div class="text-left col-5">
                      <input type="hidden" name="token_key" value="<?php echo $token_key; ?>">
                      <input type="hidden" name="token_val" value="<?php echo $token_val; ?>">
                      <button type="submit" class="btn px-4 btn-success"><span><i class="fa fa-sign-in" aria-hidden="true"></i></span> Login</button>
                    </div>
                    <div class="text-right align-items-center col-7">
                      <a class="text-white" href="<?php echo base_url('forgot_password'); ?>">Forgot your password?</a>
                      <a class="btn d-lg-none bg-light btn-link" href="<?php echo base_url('register'); ?>"> Register now!</a>
                    </div>
                  </div>
                </form>
              </div>
            </div>
            <div class="card text-center d-md-down-none">
              <div class="card-body">
                <div class="card-body">
                  <h2>Sign up</h2>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                  <p>Don't have an account?&nbsp; <br />
                    <a class="btn btn-outline-dark" href="<?php echo base_url('register'); ?>"><span><i class="fa fa-user-plus" aria-hidden="true"></i></span> Sign Up</a>
                  </p>
                </div>
              </div>
            </div>




          </div>
          <!-- /.card-->
          <div class="row _top">
            <?php $this->load->view('_partials/_top'); ?>
          </div>
          <!-- /.row-->
          <div class="row _bottom">
            <?php $this->load->view('_partials/_bottom'); ?>
          </div>
          <!-- /.row-->
        </div>
      </div>
    </main>
    <aside class="aside-menu _aside">
      <?php $this->load->view('_partials/_aside'); ?>
    </aside>
  </div>
  <footer class="app-footer _footer">
    <?php $this->load->view('_partials/_footer'); ?>
  </footer>
  <!-- CoreUI and necessary plugins-->
  <?php $this->load->view('_partials/_script'); ?>

  <!-- Page necessary plugins-->

  <script type="text/javascript">
    $(function() {
      $(document).ajaxComplete(function() {
        Pace.restart()
      });
      if ($.support.pjax) {
        $(document).pjax('a[data-pjax]', '#pjax-container')
      }
    });
  </script>
</body>

</html>
