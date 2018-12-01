<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('stylesheet_url'); ?>" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>
  <?php global $page, $paged;
if (is_search()):
wp_title('', true, 'left' );
echo ' | ';
else:
  wp_title('|', true ,'right' );
endif;
bloginfo('name');
if (is_front_page()) :
echo " | ";
bloginfo('description');
endif;
if ($paged >= 2 || $page >= 2) :
echo ' | ' . sprintf('%sページ',
  max($paged,$page));
  endif;
  ?>
</title>
<meta charset="utf-8">
<meta name="description" content="ホテルアクセスイン新宿">
<meta name="viewport" content="width=device-width, initial-scale=1">

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/jquery.pjax.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/myPjax.js"></script>


<link rel="shortcut icon" href="">
	<?php wp_head(); ?>
	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-110145736-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-110145736-1');
</script>
</head>
	<body>
		<div id="Wrap">
				<!-- <header id="Header" class="">

				</header>
 -->