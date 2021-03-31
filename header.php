<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php
        // Sur l'accueil: Agence Plaza
        // Sur A propos: A propos - Agence Plaza
        // Sur Demande devis: Demande devis - Agence Plaza
        wp_title('-', true, 'right').bloginfo('name'); ?>
    </title>

    <!-- Ajoute les CSS de WordPress et des plugins -->
    <?php wp_head(); ?>
</head>
<body>
    <div class="container">
