<?php
    switch (@parse_url($_SERVER['REQUEST_URI'])['path']) {
        case '/':
            require 'home.php';
            break;
        case '/wiki':
            require 'download.php';
            break;
        case '/wiki/download':
            require 'download.php';
            break;
            
        case '/wiki/contact-us':
            require 'contact-us.php';
            break;
            
        case '/wiki/installation':
            require 'installation.php';
            break;
            
        case '/wiki/vidoo-interface':
            require 'vidoo-interface.php';
            break;
            
        case '/wiki/vidoo-login':
            require 'vidoo-login.php';
            break;
            
        case '/wiki/virtual-box-installation':
            require 'virtual-box-installation.php';
            break;

        default:
            //http_response_code(404);
            //exit('Not Found');
            
            require 'home.php';
            break;
    }
?>