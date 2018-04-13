<?php
require __DIR__.'/../src/bootstrap.php';
Router::load('../config/routes.php')
    ->direct(Request::uri(), Request::method());