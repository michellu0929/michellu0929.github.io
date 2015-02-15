<?php if(!defined("__XE__"))exit;?>//<![CDATA[
var li = new Object();
li.layout_type = "<?php echo $__Context->li->layout_type ?>";
li.menu_colorset = "<?php echo $__Context->li->menu_colorset ?>";
li.expand_sitemap = <?php echo $__Context->li->expand_sitemap != 'Y' ? 'false' : 'true' ?>;
li.use_camera_slide = <?php echo $__Context->li->use_camera_slide != 'Y' ? 'false' : 'true' ?>;
li.use_camera_slide_thumb = <?php echo $__Context->li->use_camera_slide_thumb != 'Y' ? 'false' : 'true' ?>;
li.camera_slide_alignment = "<?php echo $__Context->li->camera_slide_alignment ?>";
li.camera_slide_advance = <?php echo $__Context->li->camera_slide_image_2 ? 'true' : 'false' ?>;
//]]>