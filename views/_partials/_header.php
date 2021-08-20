
            <button class="navbar-toggler sidebar-toggler d-lg-none mr-auto" type="button" data-toggle="sidebar-show">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="#">
                <img class="navbar-brand-full" src="<?php echo base_url('assets/img/brand/logo.svg'); ?>" width="89" height="25" alt="CoreUI Logo">
                <img class="navbar-brand-minimized" src="<?php echo base_url('assets/img/brand/sygnet.svg'); ?>" width="30" height="30" alt="CoreUI Logo">
            </a>
            <button class="navbar-toggler sidebar-toggler d-md-down-none" type="button" data-toggle="sidebar-lg-show">
                <span class="navbar-toggler-icon"></span>
            </button>
            <ul class="nav navbar-nav d-md-down-none">
                <li class="nav-item px-3">
                <?php if ($this->smarty_acl->logged_in(FALSE)): ?>
                    <li class="nav-item px-3">
                        <a class="nav-link" href="/account">Account</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/logout">Logout</a>
                    </li>
                <?php else: ?>
                    <li class="nav-item px-3">
                        <a class="nav-link" href="/login">Login</a>
                    </li>
                    <li class="nav-item px-3">
                        <a class="nav-link" href="/register">Register</a>
                    </li>
                <?php endif; ?>
                <span class="navbar-text px-3">|</span>
                <li class="nav-item">
                    <a class="nav-link" href="/admin">Admin</a>
                </li>
            <?php if ($this->smarty_acl->logged_in()): ?>
                <?php if ($this->smarty_acl->module_authorized('roles')): ?>
                    <li class="nav-item px-3">
                        <a class="nav-link" href="/admin/roles">Roles</a>
                    </li>
                <?php endif; ?>
                <?php if ($this->smarty_acl->module_authorized('modules')): ?>
                    <li class="nav-item px-3">
                        <a class="nav-link" href="/admin/modules">Modules</a>
                    </li>
                <?php endif; ?>
                <?php if ($this->smarty_acl->module_authorized('admins')): ?>
                    <li class="nav-item px-3">
                        <a class="nav-link" href="/admin/admins">Admins</a>
                    </li>
                <?php endif; ?>
                <?php if ($this->smarty_acl->module_authorized('users')): ?>
                    <li class="nav-item px-3">
                        <a class="nav-link" href="/admin/users">Users</a>
                    </li>
                <?php endif; ?>
                <li class="nav-item px-3">
                    <a class="nav-link" href="/admin/logout">Logout</a>
                </li>
            <?php endif; ?>






            </ul>
            <ul class="nav navbar-nav ml-auto">
                <li class="nav-item d-md-down-none">
                    <a class="nav-link" href="#">
                        <i class="icon-bell"></i>
                        <span class="badge badge-pill badge-danger">5</span>
                    </a>
                </li>
                <li class="nav-item d-md-down-none">
                    <a class="nav-link" href="#">
                        <i class="icon-list"></i>
                    </a>
                </li>
                <li class="nav-item d-md-down-none">
                    <a class="nav-link" href="#">
                        <i class="icon-location-pin"></i>
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                        <span class="hidden-xs px-2">
                            <li class="text-white"><?php echo $this->smarty_acl->get_admin()['name']; ?> <small>(<?php echo $this->smarty_acl->get_admin()['group_name']; ?>)</small></li>
                        </span>
                        <img class="img-avatar" src="<?php echo base_url('assets/img/avatars/6.jpg'); ?>" alt="admin@bootstrapmaster.com">
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <div class="dropdown-header text-center">
                            <strong>Account</strong>
                        </div>
                        <a class="dropdown-item" href="#">
                            <i class="fa fa-bell-o"></i> Updates
                            <span class="badge badge-info">42</span>
                        </a>
                        <a class="dropdown-item" href="#">
                            <i class="fa fa-envelope-o"></i> Messages
                            <span class="badge badge-success">42</span>
                        </a>
                        <a class="dropdown-item" href="#">
                            <i class="fa fa-tasks"></i> Tasks
                            <span class="badge badge-danger">42</span>
                        </a>
                        <a class="dropdown-item" href="#">
                            <i class="fa fa-comments"></i> Comments
                            <span class="badge badge-warning">42</span>
                        </a>
                        <div class="dropdown-header text-center">
                            <strong>Settings</strong>
                        </div>
                        <a class="dropdown-item" href="#">
                            <i class="fa fa-user"></i> Profile</a>
                        <a class="dropdown-item" href="#">
                            <i class="fa fa-wrench"></i> Settings</a>
                        <a class="dropdown-item" href="#">
                            <i class="fa fa-usd"></i> Payments
                            <span class="badge badge-secondary">42</span>
                        </a>
                        <a class="dropdown-item" href="#">
                            <i class="fa fa-file"></i> Projects
                            <span class="badge badge-primary">42</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">
                            <i class="fa fa-shield"></i> Lock Account</a>
                        <a class="dropdown-item" href="#">
                            <i class="fa fa-lock"></i> Logout</a>
                    </div>
                </li>
            </ul>
            <button class="navbar-toggler aside-menu-toggler d-md-down-none" type="button" data-toggle="aside-menu-lg-show">
                <span class="navbar-toggler-icon"></span>
            </button>
            <button class="navbar-toggler aside-menu-toggler d-lg-none" type="button" data-toggle="aside-menu-show">
                <span class="navbar-toggler-icon"></span>
            </button>
