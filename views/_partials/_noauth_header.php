<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<button class="navbar-toggler sidebar-toggler d-lg-none mr-auto" type="button" data-toggle="sidebar-show">
    <span class="navbar-toggler-icon"></span>
</button>
<a class="navbar-brand" href="#">
    <img class="navbar-brand-full" src="<?php echo base_url('assets/img/brand/logo.svg'); ?>" width="89" height="25" alt="CoreUI Logo">
    <img class="navbar-brand-minimized" src="<?php echo base_url('assets/img/brand/sygnet.svg'); ?>" width="30" height="30" alt="CoreUI Logo">
</a>
<ul class="nav navbar-nav d-md-down-none">
    <li class="nav-item px-3">
        <?php if ($this->smarty_acl->logged_in(FALSE)) : ?>
    <li class="nav-item px-3">
        <a class="nav-link" href=<?php echo base_url("account"); ?>>Account</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href=<?php echo base_url("logout"); ?>>Logout</a>
    </li>
<?php else : ?>
    <li class="nav-item px-3">
        <a class="nav-link" href=<?php echo base_url("login"); ?>>Login</a>
    </li>
    <li class="nav-item px-3">
        <a class="nav-link" href=<?php echo base_url("register"); ?>>Register</a>
    </li>
<?php endif; ?>

<span class="navbar-text px-3">|</span>

<li class="nav-item">
    <a class="nav-link" href="/admin">Admin</a>
</li>
<?php if ($this->smarty_acl->logged_in()) : ?>
    <?php if ($this->smarty_acl->module_authorized('roles')) : ?>
        <li class="nav-item px-3">
            <a class="nav-link" href="/admin/roles">Roles</a>
        </li>
    <?php endif; ?>
    <?php if ($this->smarty_acl->module_authorized('modules')) : ?>
        <li class="nav-item px-3">
            <a class="nav-link" href="/admin/modules">Modules</a>
        </li>
    <?php endif; ?>
    <?php if ($this->smarty_acl->module_authorized('admins')) : ?>
        <li class="nav-item px-3">
            <a class="nav-link" href="/admin/admins">Admins</a>
        </li>
    <?php endif; ?>
    <?php if ($this->smarty_acl->module_authorized('users')) : ?>
        <li class="nav-item px-3">
            <a class="nav-link" href="/admin/users">Users</a>
        </li>
    <?php endif; ?>
    <li class="nav-item px-3">
        <a class="nav-link" href="/admin/logout">Logout</a>
    </li>
<?php endif; ?>

</ul>