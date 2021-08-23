<?php
$_SESSION['token']['key'] = bin2hex(random_bytes(32));
$_SESSION['token']['value'] = time() . bin2hex(random_bytes(32));

$token_key = $_SESSION['token']['key'];
$token_val = $_SESSION['token']['value'];
?>

<html lang="en">

<head>
  <base href="./">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
  <meta name="author" content="Łukasz Holeczek">
  <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard">
  <title>CoreUI Free Bootstrap Admin Template</title>
  <!-- Icons-->
  <link href="<?php echo base_url('node_modules/@coreui/icons/css/coreui-icons.min.css'); ?>" rel="stylesheet">
  <link href="<?php echo base_url('node_modules/font-awesome/css/font-awesome.min.css'); ?>" rel="stylesheet">
  <!-- Main styles for this application-->
  <link href="<?php echo base_url('assets/css/style.css'); ?>" rel="stylesheet">
</head>

<body>
  <noscript>
    <strong>We're sorry but this app doesn't work properly without JavaScript enabled. Please enable it to continue.</strong>
  </noscript>
  <div class="c-app flex-row align-items-center">
    <div class="container h-100">
      <div class="row h-100 justify-content-center align-items-center">
        <?php $this->load->view('_layouts/alerts');?>
        <div class="col-md-8">
          <div class="card-group">
            <div class="card text-center p-4">
              <div class="card-body">
                <form action="<?php echo base_url('register'); ?>" method="post">
                  <h1>Buat Akun</h1>
                  <p class="text-muted">Isi Form dibawah ini untuk membuat akun</p>
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
                          <i class="fa fa-user"></i>
                        </span>
                      </div>
                      <input id="uid-uw1pvwq9md" type="text" placeholder="Nama Lengkap" name="name" autocomplete="name" class="form-control" value="">
                    </div>
                  </div>
                  <div role="group" class="form-group">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <i class="fa fa-envelope"></i>
                        </span>
                      </div>
                      <input id="uid-uw1pvx89md" type="text" placeholder="Email" name="email" autocomplete="email" class="form-control" value="">
                    </div>
                  </div>
                  <div role="group" class="form-group">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <i class="fa fa-lock"></i>
                        </span>
                      </div>
                      <input id="uid-u0rbnzin5y9" type="password" placeholder="Password" name="password" autocomplete="new-password" class="form-control">
                    </div>
                  </div>
                  <div class="row">
                    <input type="hidden" name="token_key" value="<?php echo $token_key; ?>">
                    <input type="hidden" name="token_val" value="<?php echo $token_val; ?>">
                  </div>
                  <div class="d-flex justify-content-around bd-highlight mb-3">
                    <div class="row">

                      <div class="col-sm-12 col-md-6 p-2 bd-highlight">
                        <button type="submit" class="btn px-4 btn-success btn-block"><span><i class="fa fa-user-plus" aria-hidden="true"></i></span> Sign up</button>
                      </div>
                      <div class="col-sm-12 col-md-6 p-2 bd-highlight">
                        <a href="<?php echo base_url('forgot_password'); ?>">Forgot your password?</a>
                        <a class="d-lg-none btn btn-outline-dark" href="<?php echo base_url('login'); ?>"><span><i class="fa fa-sign-in" aria-hidden="true"></i></span> Log in!</a>

                      </div>

                    </div>
                  </div>
                </form>
              </div>
            </div>
            <div class="card text-center bg-success text-white align-items-center d-md-down-none">
              <div class="card-body">
                <h2>Log in</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                <p>Sudah memiliki akun ?&nbsp; <br />
                  <a class="btn btn-outline-dark btn-lg" href="<?php echo base_url('login'); ?>"><span><i class="fa fa-sign-in" aria-hidden="true"></i></span> Log in</a>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- CoreUI and necessary plugins-->
  <script src="<?php echo base_url('node_modules/jquery/dist/jquery.min.js'); ?>"></script>
  <script src="<?php echo base_url('node_modules/bootstrap/dist/js/bootstrap.min.js'); ?>"></script>
  <script src="<?php echo base_url('node_modules/@coreui/coreui/dist/js/coreui.min.js'); ?>"></script>
</body>

</html>