<?php

require_once '../App/autoload.php';

use Lib\Router;
use Lib\ViewRenderer;

$viewRenderer = ViewRenderer::getInstance();

$viewRenderer
        ->setViewDir('../view/')
        ->setLayoutPath('../view/Layout.view.php');

$router = Router::getInstance();

$router
        ->setPrefix('/web/')
        ->addRoute('home', 'utilisateurs', 'user', 'list')
        ->addRoute('user_edit', 'utilisateurs/edition', 'user', 'edit')
        ->run();


