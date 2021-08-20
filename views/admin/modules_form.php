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
                                        <h5><?php echo isset($item) ? 'Edit' : 'Create'; ?> Modules</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">

                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" name="name" placeholder="Name" class="form-control" value="<?php echo $item->name ?? set_value('name'); ?>" />
                                </div>
                                <div class="form-group">
                                    <label>Controller Name</label>
                                    <input type="text" name="controller" placeholder="Controller Name" class="form-control" value="<?php echo $item->controller ?? set_value('controller'); ?>" />
                                </div>
                                <div class="form-group">
                                    <label>Permissions(methods) List</label>
                                    <input type="text" name="permissions" placeholder="Permissions" class="form-control" value="<?php echo isset($item) ? implode(',', json_decode($item->permissions, 0)) : set_value('permissions'); ?>" />
                                    <small class="form-text">Comma separated</small>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="d-flex justify-content-between bd-highlight">
                                    <div class="p-2 bd-highlight">
                                        <button type="submit" class="btn btn-primary"><?php echo isset($item) ? 'Update' : 'Create'; ?></button>
                                    </div>
                                    <div class="p-2 bd-highlight">
                                        <a href="<?php echo site_url('admin/modules') ?>" class="btn btn-default">Batal</a>
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