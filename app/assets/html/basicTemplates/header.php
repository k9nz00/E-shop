<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/app/bootstrap.php' ?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <title>Fashion</title>
    <meta name="description" content="Fashion - интернет-магазин">
    <meta name="keywords" content="Fashion, интернет-магазин, одежда, аксессуары">
    <meta name="theme-color" content="#393939">
    <link rel="preload" href="/app/assets/img/intro/coats-2018.jpg" as="image">
    <link rel="preload" href="/app/assets/fonts/opensans-400-normal.woff2" as="font">
    <link rel="preload" href="/app/assets/fonts/roboto-400-normal.woff2" as="font">
    <link rel="preload" href="/app/assets/fonts/roboto-700-normal.woff2" as="font">
    <link rel="icon" href="/app/assets/img/favicon.png">
    <link rel="stylesheet" href="/app/assets/css/style.min.css">
</head>
<body>
<header class="page-header">
    <a class="page-header__logo" href="/">
        <img src="/app/assets/img/logo.svg" alt="Fashion">
    </a>
    <nav class="page-header__menu">
        <ul class="main-menu main-menu--header">
            <li>
                <a class="main-menu__item" href="/">Главная</a>
            </li>
            <li>
                <a class="main-menu__item" href="/?filter=new">Новинки</a>
            </li>
            <li>
                <a class="main-menu__item active" href="/?filter=sale">Sale</a>
            </li>
            <li>
                <a class="main-menu__item" href="/delivery">Доставка</a>
            </li>
        </ul>
    </nav>
</header>