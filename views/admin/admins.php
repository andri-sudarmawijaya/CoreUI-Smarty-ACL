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
                        <?php //$this->load->view('_partials/_content'); ?>

                        <div class="card-header">
                            <div class="d-flex justify-content-between bd-highlight">
                                <div class="p-2 bd-highlight"><a href="<?php echo base_url($URI . '/create'); ?>" class="btn btn-success btn-sm"> Create</a></div>
                                <div class="p-2 bd-highlight">
                                    <h5><?php echo $title; ?></h5>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-5">
                                    <h4 class="card-title mb-0"><?php echo $title; ?></h4>
                                    <div class="small text-muted">November 2017</div>
                                </div>
                                <!-- /.col-->
                                <div class="col-sm-7 d-none d-md-block">
                                    <button class="btn btn-primary float-right" type="button">
                                        <i class="icon-cloud-download"></i>
                                    </button>
                                    <div class="btn-group btn-group-toggle float-right mr-3" data-toggle="buttons">
                                        <label class="btn btn-outline-secondary">
                                            <input id="option1" type="radio" name="options" autocomplete="off"> Day
                                        </label>
                                        <label class="btn btn-outline-secondary active">
                                            <input id="option2" type="radio" name="options" autocomplete="off" checked=""> Month
                                        </label>
                                        <label class="btn btn-outline-secondary">
                                            <input id="option3" type="radio" name="options" autocomplete="off"> Year
                                        </label>
                                    </div>
                                </div>
                                <!-- /.col-->
                            </div>
                            <!-- /.row-->
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped" id="mytable">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Status</th>
                                            <th>Role</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if (count($items) > 0) : foreach ($items as $item) : ?>
                                                <tr>
                                                    <td><?php echo $item->name; ?></td>
                                                    <td><?php echo ucfirst($item->status); ?></td>
                                                    <td><?php echo $item->group_name; ?></td>
                                                    <td>
                                                        <form action="<?php echo base_url($URI . '/delete/' . $item->id); ?>" method="post" onsubmit="return confirm('Are you sure?');">
                                                            <div class="btn-group btn-group-sm">
                                                                <a href="<?php echo base_url($URI . '/edit/' . $item->id); ?>" class="btn btn-info"> Edit</a>
                                                                <button type="submit" class="btn btn-danger" <?php if ($item->id === $this->smarty_acl->get_admin()['id']) {
                                                                                                                    echo 'disabled';
                                                                                                                } ?>> Delete</button>
                                                            </div>
                                                        </form>
                                                    </td>
                                                </tr>
                                            <?php endforeach;
                                        else : ?>
                                            <tr>
                                                <td colspan="4" class="text-center">No results found!</td>
                                            </tr>
                                        <?php endif; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="card-footer">
                        </div>
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