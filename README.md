# CoreUI-Smarty-ACL
Them Core UI for CodeIgniter with Auth by Smarty ACL

## How to Use

### Install CodeIgniter

```
$ composer create-project andri-sudarmawijaya/codeigniter-composer-installer codeigniter
```

### Install this package

```
$ cd /path/to/codeigniter
$ nano bin/install.php
```
add package as array
```
            'coreui-smarty-acl' => array(
                'site'  => 'github',
                'user'  => 'andri-sudarmawijaya',
                'repos' => 'coreui-smarty-acl',
                'name'  => 'CoreUI-Smarty-ACL',
                'dir'   => array('controllers','models', 'views'),
                'msg'   => 'See https://github.com/andri-sudarmawijaya/coreui-smarty-acl/',
                'example_branch' => 'master',
            ),
```
run the installer
```
$ bin/install.php coreui-smarty-acl
```

copy folder assets to public
```
$ cp -Rv vendor/andri-sudarmawijaya/coreui-smarty-acl/public/assets public