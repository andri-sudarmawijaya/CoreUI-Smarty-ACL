<?php
defined('BASEPATH') or exit('No direct script access allowed');
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

                    <div class="card _content">
                        <?php //$this->load->view('_partials/_content');
                        ?>

                        <form action="<?php echo $form_action; ?>" method="post">
                            <div class="card-header">
                                <div class="d-flex justify-content-between bd-highlight">
                                    <div class="p-2 bd-highlight">
                                        <h4 class="card-title mb-0"><?php echo $title; ?></h4>
                                    </div>
                                    <div class="p-2 bd-highlight">
                                        <h5><?php echo isset($item) ? 'Edit' : 'Create'; ?> Admins</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">

                                <div class="form-group">
                                    <label>Username</label>
                                    <input type="text" name="username" value="<?php echo $item->username ?? set_value('username'); ?>" placeholder="Username" class="form-control" />
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" name="email" value="<?php echo $item->email ?? set_value('email'); ?>" placeholder="Email" class="form-control" />
                                </div>
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" name="name" value="<?php echo $item->name ?? set_value('name'); ?>" placeholder="Name" class="form-control" />
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" name="password" placeholder="<?php echo isset($item) ? 'Leave blank to do not change' : 'Password'; ?>" class="form-control" />
                                </div>
                                <div class="form-group">
                                    <label>Status</label>
                                    <select name="status" class="form-control">
                                        <option value="">-- SELECT --</option>
                                        <option value="active" <?php if (isset($item) && $item->status === 'active') {
                                                                    echo 'selected';
                                                                } ?>>Active</option>
                                        <option value="inactive" <?php if (isset($item) && $item->status === 'inactive') {
                                                                        echo 'selected';
                                                                    } ?>>Inactive</option>
                                        <option value="banned" <?php if (isset($item) && $item->status === 'banned') {
                                                                    echo 'selected';
                                                                } ?>>Banned</option>
                                    </select>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="d-flex justify-content-between bd-highlight">
                                    <div class="p-2 bd-highlight">
                                        <button type="submit" class="btn btn-primary"><?php echo isset($item) ? 'Update' : 'Create'; ?></button>
                                    </div>
                                    <div class="p-2 bd-highlight">
                                        <a href="<?php echo site_url('admin/users') ?>" class="btn btn-default">Batal</a>
                                    </div>
                                </div>
                            </div>
                        </form>

                    </div>
                    <!-- /.card-->
                    <div class="row _top">
                        <?php // $this->load->view('_partials/_top');
                        ?>
                    </div>
                    <!-- /.row-->
                    <div class="row _bottom">
                        <?php // $this->load->view('_partials/_bottom');
                        ?>
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