<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <title>{:glob_title:}</title>
  <meta name="theme-color" content="#dddddd">

  <meta name="description" content="" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="format-detection" content="telephone=no" />
  <!--favicon-->
  <link rel="shortcut icon" href="/img/favicon/favicon.ico" />
  <link rel="icon" sizes="16x16 32x32 64x64" href="/img/favicon/favicon.ico" />
  <link rel="icon" type="image/png" sizes="196x196" href="/img/favicon/favicon-192.png" />
  <link rel="icon" type="image/png" sizes="160x160" href="/img/favicon/favicon-160.png" />
  <link rel="icon" type="image/png" sizes="96x96" href="/img/favicon/favicon-96.png" />
  <link rel="icon" type="image/png" sizes="64x64" href="/img/favicon/favicon-64.png" />
  <link rel="icon" type="image/png" sizes="32x32" href="/img/favicon/favicon-32.png" />
  <link rel="icon" type="image/png" sizes="16x16" href="/img/favicon/favicon-16.png" />
  <link rel="apple-touch-icon" href="/img/favicon/favicon-57.png" />
  <link rel="apple-touch-icon" sizes="114x114" href="/img/favicon/favicon-114.png" />
  <link rel="apple-touch-icon" sizes="72x72" href="/img/favicon/favicon-72.png" />
  <link rel="apple-touch-icon" sizes="144x144" href="/img/favicon/favicon-144.png" />
  <link rel="apple-touch-icon" sizes="60x60" href="/img/favicon/favicon-60.png" />
  <link rel="apple-touch-icon" sizes="120x120" href="/img/favicon/favicon-120.png" />
  <link rel="apple-touch-icon" sizes="76x76" href="/img/favicon/favicon-76.png" />
  <link rel="apple-touch-icon" sizes="152x152" href="/img/favicon/favicon-152.png" />
  <link rel="apple-touch-icon" sizes="180x180" href="/img/favicon/favicon-180.png" />
  <meta name="msapplication-TileColor" content="#FFFFFF" />
  <meta name="msapplication-TileImage" content="/img/favicon/favicon-144.png" />
  <meta name="msapplication-config" content="/img/favicon/browserconfig.xml" />
  <!--favicon end-->
  <!--inject:css-->
  <link rel="stylesheet" href="/css/libs/bootstrap.css?v=e46c3a130e1243916d6e632f3eea3ead">
  <link rel="stylesheet" href="/css/libs/ion.rangeSlider.css?v=e46c3a130e1243916d6e632f3eea3ead">
  <link rel="stylesheet" href="/css/libs/jquery.formstyler.css?v=e46c3a130e1243916d6e632f3eea3ead">
  <link rel="stylesheet" href="/css/libs/slick-theme.css?v=e46c3a130e1243916d6e632f3eea3ead">
  <link rel="stylesheet" href="/css/libs/slick.css?v=e46c3a130e1243916d6e632f3eea3ead">
<!--  <link rel="stylesheet" href="/css/libs/awesome.min.css">-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
  <!--endinject-->
<?php

    $d = __DIR__;
    $d = dirname($d);
    $f = "css/style.css";
    $f2 = $d."/".$f;
    $t = filemtime($f2);

    print "<link rel=\"stylesheet\" href=\"/$f?$t\" />";
//  <link rel="stylesheet" href="css/style.css?v=e46c3a130e1243916d6e632f3eea3ead" />

?>

  <link rel="stylesheet" href="/css/style.responsive.css?v=e46c3a130e1243916d6e632f3eea3ead" />
  <!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js?v=e46c3a130e1243916d6e632f3eea3ead"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js?v=e46c3a130e1243916d6e632f3eea3ead"></script>
<![endif]-->
<?php
print "<script src=\"//ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>";
?>

</head>

<body class="white">
