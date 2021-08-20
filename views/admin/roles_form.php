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

<form action="<?php echo $form_action ;?>" method="post">
                                <div class="card-header">
                                    <div class="d-flex justify-content-between bd-highlight">
                                        <div class="p-2 bd-highlight">
                                            <h4 class="card-title mb-0"><?php echo $title; ?></h4>
                                        </div>
                                        <div class="p-2 bd-highlight"><h5><?php echo isset($item) ? 'Edit' : 'Create' ;?> Roles</h5></div>
                                    </div>
                                </div>
                                <div class="card-body">

                                    <div class="d-flex justify-content-center bd-highlight">
                                        <div class="p-2 bd-highlight">
                                            <div class="form-group">
                                                <label>Name</label>
                                                <input type="text" name="name" placeholder="Name" class="form-control"
                                                    value="<?php echo $item->name ?? set_value('name'); ?>"/>
                                            </div>
                                        </div>
                                        <div class="p-2 bd-highlight">
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
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-center bd-highlight">

                                        <div class="row">
                                            <div class="col-md-12">
                                                <h4>Permissions </h4>

                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input toggle-checkbox" data-toggle-checkbox="permissions" id="checkbox-all">
                                                    <label for="checkbox-all">Check All</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="d-flex justify-content-center bd-highlight">
                                        <div class="container fluid">
                                            <div class="row">
                                                <div class="col-md-12">
                                                <?php foreach ($modules as $module): $m_permissions = json_decode($module->permissions); ?>
                                                    <dl class="row">
                                                        <dt class="col-3"><?php echo $module->name; ?></dt>
                                                        <dd class="col-9">
                                                            <?php foreach ($m_permissions as $pk => $pname):
                                                                if(isset($module_permissions[$module->id]) && in_array($pname,$module_permissions[$module->id])){
                                                                    $checked = 'checked';
                                                                }else{ $checked = ''; }
                                                                ?>
                                                                <div class="form-check form-check-inline">
                                                                    <input class="form-check-input permissions" type="checkbox" name="modules[<?php echo $module->id; ?>][]"
                                                                        value="<?php echo $pname; ?>" <?php echo $checked; ?> id="<?php echo $module->id.$pk; ?>">
                                                                    <label class="form-check-label"
                                                                        for="<?php echo $module->id.$pk; ?>"><?php echo $pname; ?></label>
                                                                </div>
                                                            <?php endforeach; ?>
                                                        </dd>
                                                    </dl>
                                                <?php endforeach; ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <div class="d-flex justify-content-between bd-highlight">
                                        <div class="p-2 bd-highlight">
                                                <button type="submit" class="btn btn-primary"><?php echo isset($item) ? 'Update' : 'Create' ;?></button>
                                        </div>
                                        <div class="p-2 bd-highlight">
                                            <a href="<?php echo site_url('admin/roles') ?>" class="btn btn-default">Batal</a>
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