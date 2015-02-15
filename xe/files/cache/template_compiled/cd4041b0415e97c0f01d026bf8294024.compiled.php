<?php if(!defined("__XE__"))exit;
if($__Context->li->body_color){ ?>
header {background-color:<?php echo $__Context->li->body_color ?>}
.body {background-color:<?php echo $__Context->li->body_color ?>}
<?php if(!$__Context->li->footer_widget){ ?>
.footer.arrow:after {border-top-color:<?php echo $__Context->li->body_color ?>}
<?php } ?>
<?php } ?>
<?php if($__Context->li->body_img){ ?>
.body {background-image:url(<?php echo $__Context->li->body_img ?>); background-position:<?php echo $__Context->li->body_img_position ?>; background-attachment:<?php echo $__Context->li->body_img_attach;
if($__Context->li->body_img_size != 'default'){ ?>; background-size:<?php echo $__Context->li->body_img_size;
} ?>}
<?php } ?>
<?php if(($__Context->li->expand_sitemap == 'Y' && $__Context->_COOKIE['disp_fs_sitemap'] == 'N') || ($__Context->li->expand_sitemap != 'Y' && $__Context->_COOKIE['disp_fs_sitemap'] != 'Y')){ ?>
header .sitemap-wrap {display:none}
<?php } ?>
<?php if($__Context->li->container_size){ ?>
.fs-wrap {width:<?php echo $__Context->li->container_size ?>}
<?php } ?>
<?php if($__Context->li->content_size && !in_array($__Context->li->layout_type, array('mainpage', 'onepage'))){ ?>
body.leftside .content,
body.rightside .content,
body.totalside .content {width:<?php echo $__Context->li->content_size ?>}
<?php } ?>
<?php if($__Context->li->leftside_size){ ?>
.body .left-sidebar {width:<?php echo $__Context->li->leftside_size ?>}
<?php } ?>
<?php if($__Context->li->rightside_size){ ?>
.body .right-sidebar {width:<?php echo $__Context->li->rightside_size ?>}
<?php } ?>