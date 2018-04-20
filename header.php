<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <title><?php bloginfo( 'title' ); ?></title>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--CSS-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
    <!--  Scripts-->
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<div class="custom-header">


    <?php get_template_part( 'template/site', 'branding' ); ?>

</div><!-- .custom-header -->

<?php get_template_part( 'template/navbar', 'top' ); ?>
