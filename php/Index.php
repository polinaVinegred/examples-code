<?php
require_once 'JsonRoutines.php';
require_once 'GoodsAPI.php';

if (isset($_GET['iphone'])) {
    echo JsonRoutines::JsonOutput(GoodsAPI::GetNameProductsQuery());
    die();
}

if (isset($_GET['img'])) {
    echo JsonRoutines::JsonOutput(GoodsAPI::GetURLPictures());
    die();
}
