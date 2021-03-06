<?php
defined('BASEPATH') or exit('No direct script access allowed');
?><!DOCTYPE html>
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

<body class="app">
    <header class="app-header navbar _header">
        <?php $this->load->view('_partials/_noauth_header'); ?>
    </header>
    <div class="app-body" id="pjax-container">
        <main class="main">
            <div class="container-fluid">
                <div class="animated fadeIn">
                    <div class="row pt-3 _highlight">
                        <?php $this->load->view('_partials/_highlight'); ?>
                    </div>
                    <!-- /.row-->
                    <?php $this->load->view('_partials/_alerts');?>
                    <div class="card _content">
                        <?php $this->load->view('_partials/_content'); ?>
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
    </div>
    <footer class="app-footer _footer">
        <?php $this->load->view('_partials/_footer'); ?>
    </footer>
    <!-- CoreUI and necessary plugins-->
    <?php $this->load->view('_partials/_script'); ?>
    <script src="<?php echo base_url('assets/js/main.js'); ?>"></script>

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