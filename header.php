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
    <div class="header">
      <div class="header-contents ClearFix">
        <h1>
          <a class="header__logo header-contents__block" href="<?php echo home_url('/'); ?>">
              <img src="<?php echo get_template_directory_uri(); ?>\img\hotel_logo.png">
          </a>
        </h1>
        <div class="header__tel header-contents__block">

          <img src="<?php echo get_template_directory_uri(); ?>\img\image_tel.png" alt="">
        </div>
      </div>

      <div class="navi object-outside">
        <div class="navi_contents ClearFix">
          <a class="header-contents__block object__blocked" href="<?php echo home_url('/'); ?>"><span>トップページ</span></a>
          <a class="header-contents__block object__blocked<?php if( is_page('room') ) echo ' current'; ?>" href="<?php echo home_url('/'); ?>room" ><span>客室のご案内</span></a>
          <a class="header-contents__block object__blocked<?php if( is_page('access') ) echo ' current'; ?>" href="<?php echo home_url('/'); ?>access" ><span>アクセス</span></a>
          <a class="header-contents__block object__blocked<?php if( is_page('hotel_info') ) echo ' current'; ?>" href="<?php echo home_url('/'); ?>hotel_info" ><span>サービスのご案内</span></a>
        </div>
      </div>
    </div>
    <div class="header__image">
          <?php if(is_page('top') ): ?>
          <!--会社情報ページとアクセス情報に表示させたい内容-->
          <img class="object-outside" src="<?php echo get_template_directory_uri(); ?>\img\header__image_1.jpg" ; ?>
        <?php elseif(is_page( 'room' ) ): ?>
          <img class="object-outside" src="<?php echo get_template_directory_uri(); ?>\img\semi-doubleRoom_1.jpg" ; ?>
          <?php elseif(is_page( 'hotel_info' ) ): ?>
          <img class="object-outside" src="<?php echo get_template_directory_uri(); ?>\img\header__image_1.jpg" ; ?>
          <?php elseif(is_page( 'access' ) ): ?>
          <img class="object-outside" src="<?php echo get_template_directory_uri(); ?>\img\access.jpg" ; ?>
          <?php else: ?>
          <!--それ以外に表示させたい内容(入れる内容がない場合は空)-->
          <?php endif; ?>
        </div>
		<div id="Wrap">

      <!-- headerとcontentsの間に入れる画像を挿入 -->
