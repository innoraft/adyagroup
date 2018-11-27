<?php
// $Id: page.tpl.php,v 1.1.2.1 2009/02/24 15:34:45 dvessel Exp $
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language ?>" lang="<?php print $language->language ?>" dir="<?php print $language->dir ?>">

<head>
  <title><?php print $head_title; ?></title>
  <?php print $head; ?>
  <?php print $styles; ?>
 
 <!--[if lte IE 7]>
        <link rel="stylesheet" type="text/css" href="/sites/all/themes/ninesixty/styles/ie.css" />
<![endif]-->
<!--[if lte IE 6]>
        <link rel="stylesheet" type="text/css" href="/sites/all/themes/ninesixty/styles/ie5.css" />	
<![endif]-->
  <?php print $scripts; ?>
</head>

<body class="<?php print $body_classes; ?> show-grid">
  <div id="page" class="container-16 clearfix">
<div id="inno-top-header"><div id="inno-header-width"><span class = "company_name">ADYA GROUP</span> <span class="slogan">building a better Kolkata...</span><span class="search" ><?php print l('Contact Us', 'contact', array('attributes' => array('class' => 'automodal'))); ?></span><span class="call">Call : 09903050932</span></div></div>
   <div id="inno-site-header">
    <div id="site-header" class="clear-block">
      <div id="branding" class="grid-4 clear-block">
      <?php if ($linked_logo_img): ?>
        <span id="logo" class="grid-1 alpha"><?php print $linked_logo_img; ?></span>
      <?php endif; ?>
      <?php if ($linked_site_name): ?>
        <h1 id="site-name" class="grid-3 omega"><?php print $linked_site_name; ?></h1>
      <?php endif; ?>
      <?php if ($site_slogan): ?>
        <div id="site-slogan" class="grid-3 omega"><?php print $site_slogan; ?></div>
      <?php endif; ?>
      </div>

    <?php if ($main_menu_links || $secondary_menu_links): ?>
      <div id="site-menu" class="grid-12">
        <?php //print $main_menu_links; ?>
        <?php print $secondary_menu_links; ?>
      </div>
    <?php endif; ?>

    <?php if ($search_box): ?>
      <div id="search-box" class="grid-6 prefix-10"><?php print $search_box; ?></div>
    <?php endif; ?>
    </div>

<div id="wrap-site-subheader">
    <div id="site-subheader" class="prefix-1 suffix-1 clear-block">
    <?php if ($mission): ?>
      <div id="mission" class="<?php print ns('grid-14', $header, 7); ?>">
        <?php print $mission; ?>
      </div>
    <?php endif; ?>

    <?php if ($header): ?>
      <div id="header-region" class="region <?php print ns('grid-14', $mission, 7); ?> clear-block">
        <?php print $header; ?>
      </div>
    <?php endif; ?>
    </div>
</div>
   </div>

    <div id="main" class="column <?php print ns('grid-16', $left, 4, $right, 3) . ' ' . ns('push-4', !$left, 4); ?>">
      <?php //print $breadcrumb; ?>
      <?php if ($title): ?>
        <h1 class="title" id="page-title"><?php print $title; ?></h1>
      <?php endif; ?>
      <?php if ($tabs): ?>
        <div class="tabs"><?php print $tabs; ?></div>
      <?php endif; ?>
      <?php print $messages; ?>
      <?php print $help; ?>

      <div id="main-content" class="region clear-block">
        <?php print $content; ?>
      </div>

      <?php //print $feed_icons; ?>
    </div>

  <?php if ($left): ?>
    <div id="sidebar-left" class="column sidebar region grid-4 <?php print ns('pull-12', $right, 3); ?>">
      <?php print $left; ?>
    </div>
  <?php endif; ?>

  <?php if ($right): ?>
    <div id="sidebar-right" class="column sidebar region grid-3">
      <?php print $right; ?>
    </div>
  <?php endif; ?>


  <div id="footer" class="prefix-1 suffix-1">
<div id="footer_inner_width">
<div id='adya_bottomline'>Your <strong>SEARCH</strong> for a <strong>PERFECT HOME</strong> ends <strong>HERE</strong> !!!</div>
<div id = 'adya_addressbottom'><strong>CONTACT US</strong><br />Adya Groups,<br />35 A, Espace Building,<br />Dr Sarat Banarjee Road,<br />Kolkata - 29<br /><strong>CALL:</strong> 033-24669365</div>
<div id = 'adya_bottompic'></div>
<div class="social_network">
<div class="facebook">
               <a href="https://www.facebook.com/pages/Adya-Group/110514025713449" target="_blank">facebook</a></div>
<div class="twitter">
               <a href="http://twitter.com/#!/adyagroup" target="_blank">twitter</a></div>
</div>
<div id = 'bottom_rite'><span class='adya_bottom'><b>ADYA GROUP</b>, All rights reserved</span>    <span class='inno_bottom'> developed by <a href='http://www.innoraft.com'><b>INNORAFT SOLUTIONS</b></a></span></div>
    <?php if ($footer): ?>
      <div id="footer-region" class="region grid-14 clear-block">
        <?php print $footer; ?>
      </div>
    <?php endif; ?>

    <?php if ($footer_message): ?>
      <div id="footer-message" class="grid-14">

        <?php print $footer_message; ?>
      </div>
    <?php endif; ?>
  </div>
</div>


  </div>
  <?php print $closure; ?>
<!--[if lte IE 7]>
<script type="text/javascript" src="/sites/all/themes/ninesixty/custom.js"></script>
<![endif]-->
</body>
</html>
