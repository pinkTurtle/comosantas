<?php
/*
Template Name: Pagina inicial
*/
?>

<head>
  <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" />
</head>
<body class="init pages">

  <div class="init pages">
  <?php wp_nav_menu( array( 'theme_location' => 'primario', 'menu_class' => 'nav-menu' ) ); ?>
    <div class="init logo">
    <a href="<?php echo get_bloginfo('url'); ?>"></a>
    </div>

    <div class="site_logo">
    </div>
    <ul class="contact_menu">
      <li class="fb">
        <a href="#">facebook
        </a>
      </li>
      <li class="ma">
        <a href="#">mail
        </a>
      </li>
      <li class="te">
        <a href="#">phone
        </a>
      </li>
    </ul>
  </div>

</body>
