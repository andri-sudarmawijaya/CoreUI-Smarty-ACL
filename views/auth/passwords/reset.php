<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$_SESSION['token']['key'] = bin2hex(random_bytes(32));
$_SESSION['token']['value'] = time() . bin2hex(random_bytes(32));

$token_key = $_SESSION['token']['key'];
$token_val = $_SESSION['token']['value'];
?><!DOCTYPE html>

<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/@coreui/coreui@3.4.0/dist/css/coreui.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css" rel="stylesheet">
</head>

<body class="c-app flex-row align-items-center">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
              <?php $this->load->view('_partials/_alerts');?>
                <div class="card">
                  <div class="card-header bg-warning">
                    <div class="row">
                      <div class="col-10">
                        <h5>Admin Reset Password</h5>
                      </div>
                      <div class="col-2">
                          <a class="btn btn-lin btn-light" href="<?php echo base_url('/'); ?>" title="Back to Home"><i class="fa fa-home"></i></a>
                      </div>
                    </div>
                  </div>
                  <div class="card-body">
                    <form action="<?php echo base_url('reset_password/' . $code); ?>" method="post">
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
                          <a class="btn btn-outline-dark" href="<?php echo base_url('login'); ?>"><span><i class="fa fa-sign-in" aria-hidden="true"></i></span> Log in</a>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@coreui/coreui@3.4.0/dist/js/coreui.bundle.js"></script>
    <!--[if IE]><!-->
    <script src="https://cdn.jsdelivr.net/npm/svgxuse@1.2.6/svgxuse.min.js" integrity="sha256-+xblFIDxgSu6OfR6TdLhVHZzVrhw8eXiVk8PRi9ACY8=" crossorigin="anonymous"></script>
    <!--<![endif]-->
</body>

</html>
