<?php
/*
Template Name: Manifesto
*/
?>

<head>
  <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" />

</head>
<?php

global $wp_query;
$post_id = $wp_query->post->ID;
$post = get_post( $post_id );
$slug = $post->post_name;

?>
<body class="pages">
<div class="pages <?php echo $slug; ?>">
  <div class="logo <?php echo $slug; ?>">
    <a href="<?php echo get_bloginfo('url'); ?>"></a>
  </div>

  <?php
    echo $post->post_content;
  ?> 

</div>

</body>
