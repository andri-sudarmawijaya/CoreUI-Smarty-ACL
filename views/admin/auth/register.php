<!DOCTYPE html>

<html lang="en">

<head>
    <?php //$this->load->view('_partials/_head');
    ?>
    <link href="https://cdn.jsdelivr.net/npm/@coreui/coreui@3.4.0/dist/css/coreui.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css" rel="stylesheet">

</head>

<body class="c-app flex-row align-items-center">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card-group">
                    <div class="card p-4">
                        <form action="<?php echo base_url('admin/register'); ?>" method="post">
                            <div class="row">
                                <div class="col-10">
                                    <h1>Register</h1>
                                </div>
                                <div class="col-2">
                                    <a class="btn btn-lin btn-light" href="<?php echo base_url('/'); ?>" title="Back to Home"><i class="fa fa-home"></i></a>
                                </div>
                            </div>
                            <p class="text-muted">Please fullfil this form to create an account</p>
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
                                    <input id="uid-uw1pvwq9md" type="text" placeholder="Full name" name="name" autocomplete="name" class="form-control" value="">
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

                            </div>
                            <div class="d-flex justify-content-around bd-highlight mb-3">
                                <div class="row">

                                    <div class="col-sm-12 col-md-6 p-2 bd-highlight">
                                        <button type="submit" class="btn px-4 btn-primary btn-block"><i class="fa fa-user-plus" aria-hidden="true"></i> Sign up</button>
                                    </div>
                                    <div class="col-sm-12 col-md-6 p-2 bd-highlight">
                                        <a href="<?php echo base_url('admin/forgot_password'); ?>">Forgot your password?</a>
                                        <a class="d-lg-none btn btn-outline-dark" href="<?php echo base_url('admin/login'); ?>"><span><i class="fa fa-sign-in" aria-hidden="true"></i></span> Log in!</a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="card text-white bg-primary py-5 d-md-down-none" style="width:44%">
                        <div class="card-body text-center">
                            <div class="align-items-center">
                                <h2>Have an account ?</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                <a href="<?php echo base_url('admin/login'); ?>" class="btn btn-lg btn-outline-light mt-3" type="button"><i class="fa fa-sign-in" aria-hidden="true"></i>
 Sign In !</a>
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
