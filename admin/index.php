<?php
session_start();

if ($_SERVER['REQUEST_URI'] === '/admin/') {
    if (
        isset($_SESSION['isAuth']) &&
        isset($_SESSION['isAdmin']) &&
        $_SESSION['isAuth'] &&
        $_SESSION['isAdmin'] == 1
    ) {
        header('location: /admin/orders/');
    }
} elseif (
    $_SERVER['REQUEST_URI'] !== '/admin/' && !isset($_SESSION['isAdmin']) ||
    $_SERVER['REQUEST_URI'] !== '/admin/' && !$_SESSION['isAdmin']
) {
    header('location: /admin/');
}

include $_SERVER['DOCUMENT_ROOT'] . '/app/assets/html/basicTemplates/header.php';

if ($_SERVER['REQUEST_URI'] == '/admin/orders/') {
    include $_SERVER['DOCUMENT_ROOT'] . '/app/assets/html/admin/orders/index.php';
}

elseif ($_SERVER['REQUEST_URI'] == '/admin/products/') {
    include $_SERVER['DOCUMENT_ROOT'] . '/app/assets/html/admin/products/index.php';
}

elseif ($_SERVER['REQUEST_URI'] == '/admin/products/add/') {
    include $_SERVER['DOCUMENT_ROOT'] . '/app/assets/html/admin/products/add/index.php';
}

else{
    include $_SERVER['DOCUMENT_ROOT'] . '/app/assets/html/admin/authorization/index.php';
}

include $_SERVER['DOCUMENT_ROOT'] . '/app/assets/html/basicTemplates/footer.php';