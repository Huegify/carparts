<?php
session_start();

error_reporting(1);

$uri_path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$uri_segments = explode('/', $uri_path);

$ccc = count($uri_segments) - 1; // getting the element of the array
$url = $uri_segments[$ccc];

$ccc_ = count($uri_segments) - 2; // getting the element of the array
$url_ = $uri_segments[$ccc_];

// include $_SERVER['DOCUMENT_ROOT'].'/new/core/controller.php';

// $controller = new Controller();

// $activeCategory = json_decode($controller->activeCategory(), true);

$ip = $_SERVER['REMOTE_ADDR'];
if ($ip == 'localhost' or $ip == '::1') :
    //$root = $_SERVER['DOCUMENT_ROOT'] . '/new/';
    $base_url = 'http://localhost/timothy/';
    $title = $uri_segments[2];
else :
    $title = $uri_segments[1];
    $base_url = $_SERVER['DOCUMENT_ROOT'] . '/timothy/';
    // $base_url = 'http://' . $_SERVER['SERVER_NAME'] . '/'; //or you hardcode your domain name here
endif;

define('root', $base_url);

if ($title == 'search') :
    $title = str_replace('-', ' ', $url);
    $title = str_replace('%20', ' ', $title);
    $title = 'search result for ' . $title;
elseif ($title == 'sign-up') :
    $title = 'Sign Up';
elseif ($title == 'product') :
    // $title = $controller->SelectOne("product_list", "item_id", base64_decode($url),"item_name");
else :
    $title = str_replace('-', ' ', $url);
    $title = str_replace('%20', ' ', $title);
endif;

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<meta name="format-detection" content="telephone=no">
	<title><?php echo (($title == 'index') OR ($title == null)) ? 'Home':ucfirst($title)?>  — Franco Spare Parts</title>
	<link rel="icon" type="image/png" href="images/favicon.png"><!-- fonts -->
	<link rel="stylesheet" href="../../css?family=Roboto:400,400i,500,500i,700,700i"><!-- css -->
	<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" href="vendor/owl-carousel/assets/owl.carousel.min.css">
	<link rel="stylesheet" href="vendor/photoswipe/photoswipe.css">
	<link rel="stylesheet" href="vendor/photoswipe/default-skin/default-skin.css">
	<link rel="stylesheet" href="vendor/select2/css/select2.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/style.header-spaceship-variant-one.css" media="(min-width: 1200px)">
	<link rel="stylesheet" href="css/style.mobile-header-variant-one.css" media="(max-width: 1199px)">
	<!-- font - fontawesome -->
	<link rel="stylesheet" href="vendor/fontawesome/css/all.min.css">
	<script async="" src="../../gtag/js?id=UA-97489509-8"></script>
	<script>window.dataLayer = window.dataLayer || []; function gtag() { dataLayer.push(arguments); } gtag("js", new Date()); gtag("config", "UA-97489509-8");</script>
</head>
