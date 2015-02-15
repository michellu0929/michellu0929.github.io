<?php if(!defined("__XE__"))exit;
if(__DEBUG__){ ?>
	<!--#Meta:modules/editor/components/image_gallery/tpl/gallery.js--><?php $__tmp=array('modules/editor/components/image_gallery/tpl/gallery.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
	<!--#Meta:modules/editor/components/image_gallery/tpl/list_gallery.js--><?php $__tmp=array('modules/editor/components/image_gallery/tpl/list_gallery.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<?php }else{ ?>
	<!--#Meta:modules/editor/components/image_gallery/tpl/gallery.min.js--><?php $__tmp=array('modules/editor/components/image_gallery/tpl/gallery.min.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
	<!--#Meta:modules/editor/components/image_gallery/tpl/list_gallery.min.js--><?php $__tmp=array('modules/editor/components/image_gallery/tpl/list_gallery.min.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<?php } ?>
<script>
(function(){
var gallery = xe.getApp('gallery')[0];
// Add images
<?php if($__Context->gallery_info->images_list&&count($__Context->gallery_info->images_list))foreach($__Context->gallery_info->images_list as $__Context->img){ ?>
gallery.cast('ADD_IMAGE', [<?php echo $__Context->gallery_info->srl ?>, '<?php echo $__Context->img ?>']);
<?php } ?>
gallery.cast('SET_STYLE', [<?php echo $__Context->gallery_info->srl ?>, 'list']);
})();
</script>
<div align="<?php echo $__Context->gallery_info->gallery_align ?>">
    <div id="zone_list_gallery_<?php echo $__Context->gallery_info->srl ?>" style="width:<?php echo $__Context->gallery_info->width ?>px;background-color:#<?php echo $__Context->gallery_info->bg_color ?>;border:<?php echo $__Context->gallery_info->border_thickness ?>px solid #<?php echo $__Context->gallery_info->border_color ?>;text-align:left;"><p style="text-align:center">Loading images...</p></div>
</div>
