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
        <div class="col-md-6 col-sm-12">
          <?php $this->load->view('_layouts/alerts'); ?>
          <div class="card">
            <div class="card-header">
              <h5>Admin Reset Password</h5>
            </div>
            <div class="card-body">
              <form action="<?php echo base_url('admin/reset_password/' . $code); ?>" method="post">
                <div class="form-group">
                  <label>Email</label>
                  <input type="email" name="email" value="<?php echo set_value('email'); ?>" placeholder="Email" class="form-control" />
                </div>
                <div class="form-group">
                  <label>Password</label>
                  <input type="password" name="password" placeholder="Password" class="form-control" />
                </div>
                <div class="form-group">
                  <label>Password Confirmation</label>
                  <input type="password" name="password_confirmation" placeholder="Password Confirmation" class="form-control" />
                </div>
                <input type="hidden" name="token_key" value="<?php echo $token_key; ?>">
                <input type="hidden" name="token_val" value="<?php echo $token_val; ?>">
                <div class="row">
                  <div class="col-12">
                    <button type="submit" class="btn btn-primary"><span><i class="fa fa-user-secret" aria-hidden="true"></i></span> Resend Activation Link</button>
                    <a class="btn btn-outline-dark" href="<?php echo base_url('admin/login'); ?>"><span><i class="fa fa-sign-in" aria-hidden="true"></i></span> Log in</a>
                  </div>
                </div>
              </form>
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