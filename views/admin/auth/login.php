<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>

<html lang="en">

<head>
    <?php //$this->load->view('_partials/_head');?>
    <link href="https://cdn.jsdelivr.net/npm/@coreui/coreui@3.4.0/dist/css/coreui.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css" rel="stylesheet">
</head>

<body class="c-app flex-row align-items-center">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
              <?php $this->load->view('_partials/_alerts');?>
                <div class="card-group">
                    <div class="card text-white bg-primary p-4">
                        <div class="card-body">
                            <form action="<?php echo base_url('admin/login'); ?>" method="post">
                                <h1>Login</h1>
                                <p class="text-muted">Sign In to your account</p>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="fa fa-user"></i>
                                        </span>
                                    </div>
                                    <input class="form-control" type="text" name="username" placeholder="Username">
                                </div>
                                <div class="input-group mb-4">
                                    <div class="input-group-prepend">

                                        <span class="input-group-text">
                                            <i class="fa fa-lock"></i>
                                        </span>
                                    </div>
                                    <input class="form-control" type="password" name="password" placeholder="Password">
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <button class="btn btn-success px-4" type="button"><i class="fa fa-sign-in" aria-hidden="true"></i>
 Login</button>
                                    </div>
                                    <div class="col-6 text-right">
                                        <button type="submit" class="btn btn-light p-1 btn-link px-0" type="button">Forgot password?</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="card py-5 d-md-down-none" style="width:44%">
                        <div class="card-body text-center">
                            <div>
                                <h2>Sign up</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                <a href="<?php echo base_url('admin/register'); ?>" class="btn btn-lg btn-outline-dark mt-3" type="button"><i class="fa fa-user-plus" aria-hidden="true"></i> Register Now!</a>
                            </div>
                        </div>
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
