<?php

if (rex::isBackend()) {
    $container->addRoute('/image/index', '\Tinymce4\Controller\ImageController:indexAction');
    $container->addRoute('/file/index', '\Tinymce4\Controller\FileController:indexAction');
    $container->addRoute('/link/index', '\Tinymce4\Controller\DataController:indexAction');
    $container->addRoute('/media/index', '\Tinymce4\Controller\MediaController:indexAction');
    $container->addRoute('/asset_js', '\Tinymce4\Controller\AssetController:jsAction');
    $container->addRoute('/profile/index', '\Tinymce4\Controller\ProfileController:indexAction');
    $container->addRoute('/profile/edit', '\Tinymce4\Controller\ProfileController:editAction');
    $container->addRoute('/profile/remove', '\Tinymce4\Controller\ProfileController:removeAction');
}
