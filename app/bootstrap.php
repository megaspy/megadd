<?php
if (!defined('MEGADD')) die ('Error 404 Not Found');
use megadd\classes\core;
//Modules
core::load_module('test');
core::load_module('db');

//Dir
core::router()->set_dir('admin/dd');
core::router()->set_dir('admin');


?>