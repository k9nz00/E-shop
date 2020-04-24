<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/app/config/dbConnect.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/app/helpers/sqlHelpers.php';

$createTableCategories = mysqli_query(connectToDb(), "
CREATE TABLE IF NOT EXISTS `categories` (
    `id` int unsigned not null auto_increment,
    `name` varchar(255) NOT NULL,
    PRIMARY KEY  (`id`)
)");
getCreationTableInfo('категории', $createTableCategories);

$createTableProducts = mysqli_query(connectToDb(), "
CREATE TABLE IF NOT EXISTS `products` (
    `id` int unsigned not null auto_increment,
    `name` varchar(255) NOT NULL,
    `price` int NOT NULL,
    `img_name` varchar(255) NOT NULL,
    `caterogy_id` int NOT NULL,
    `new` boolean default false not null,    
    `sale` boolean default false not null,    
    PRIMARY KEY  (`id`)
)");
getCreationTableInfo('товары', $createTableCategories);








