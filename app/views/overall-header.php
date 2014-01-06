<!doctype html>
<!--[if IE 8]><html class="ie8" dir="ltr" lang="en"><![endif]-->
<!--[if IE 9]><html class="ie9" dir="ltr" lang="en"><![endif]-->
<!--[if gt IE 9]><!--> <html dir="ltr" lang="en"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta name="author" content="Storm Creative" />
        <title><?php echo SITE_NAME; ?> | <?php echo $title; ?></title>
        <meta name="keywords" content="<?php echo $meta_keywords; ?>">
        <meta name="description" content="<?php echo $meta_desc; ?>">
        <script src="<?php echo DIRECTORY; ?>assets/scripts/utils/modernizr.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <?php foreach ( $stylesheets as $style ): ?>
            <link rel="stylesheet" href="<?php echo $style; ?>">
        <?php endforeach; ?>
    </head>
    <body>
        <?php require "assets/includes/ie-notification.php"; flush(); ?>
        <?php include "assets/includes/navigation.php"; ?>
