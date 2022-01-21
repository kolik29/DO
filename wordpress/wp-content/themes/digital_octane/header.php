<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

    <?php wp_head(); ?>
</head>
<body>
    <header>
        <div class="logo">
            <?php $img = get_field('logo', get_option('page_on_front')) ?>
            <img src="<?php echo $img['sizes']['medium'] ?>" width="<?php echo $img['sizes']['medium-width'] ?>" height="<?php echo $img['sizes']['medium-height'] ?>">
        </div>
        <?php wp_nav_menu(); ?>
    </header>