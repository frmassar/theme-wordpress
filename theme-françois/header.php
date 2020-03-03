<!DOCTYPE html>
<html>
<head>
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  
<header>
  
    <?php wp_nav_menu(
      array(
        'theme_location' => 'top-menu',
        // 'menu_class' => 'navigation',
        'container_class' => 'custom-menu-class'
      )
      );?>
</header>