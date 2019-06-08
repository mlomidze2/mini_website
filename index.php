<?php
define('__ROOT__',__DIR__);
include 'Routes/router.php';

router('/',['controller.php','home']);
router('/register',['controller.php','register']);

