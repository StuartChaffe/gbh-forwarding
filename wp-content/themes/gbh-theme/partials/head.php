<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="/favicon.png">
    <title><?php wp_title(''); ?></title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:500,500i,700,700i" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/styles.css">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>