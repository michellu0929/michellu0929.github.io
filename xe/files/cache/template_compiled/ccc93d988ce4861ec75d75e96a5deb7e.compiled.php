<?php if(!defined("__XE__"))exit;
Context::loadLang('modules/editor/components/image_gallery/lang'); ?>
<?php if(__DEBUG__){ ?>
	<!--#Meta:modules/editor/components/image_gallery/tpl/gallery.js--><?php $__tmp=array('modules/editor/components/image_gallery/tpl/gallery.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
	<!--#Meta:modules/editor/components/image_gallery/tpl/slide_gallery.js--><?php $__tmp=array('modules/editor/components/image_gallery/tpl/slide_gallery.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
	<!--#Meta:modules/editor/components/image_gallery/tpl/slide_gallery.css--><?php $__tmp=array('modules/editor/components/image_gallery/tpl/slide_gallery.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<?php }else{ ?>
	<!--#Meta:modules/editor/components/image_gallery/tpl/gallery.min.js--><?php $__tmp=array('modules/editor/components/image_gallery/tpl/gallery.min.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
	<!--#Meta:modules/editor/components/image_gallery/tpl/slide_gallery.min.js--><?php $__tmp=array('modules/editor/components/image_gallery/tpl/slide_gallery.min.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
	<!--#Meta:modules/editor/components/image_gallery/tpl/slide_gallery.min.css--><?php $__tmp=array('modules/editor/components/image_gallery/tpl/slide_gallery.min.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<?php } ?>
<script>
(function(){
var gallery = xe.getApp('gallery')[0];
// Add images 
<?php if($__Context->gallery_info->images_list&&count($__Context->gallery_info->images_list))foreach($__Context->gallery_info->images_list as $__Context->img){ ?>
gallery.cast('ADD_IMAGE', [<?php echo $__Context->gallery_info->srl ?>, '<?php echo $__Context->img ?>']);
<?php } ?>
gallery.cast('SET_STYLE', [<?php echo $__Context->gallery_info->srl ?>, 'slide']);
})();
</script>
<div id="zone_slide_gallery_<?php echo $__Context->gallery_info->srl ?>" align="<?php echo $__Context->gallery_info->gallery_align ?>">
    <div class="slide_gallery_navigator_box">
        <a href="#" class="__prev"><img src="/michellu/xe/modules/editor/components/image_gallery/tpl/images/prev.gif" alt="<?php echo $__Context->lang->cmd_gallery_prev ?>" title="<?php echo $__Context->lang->cmd_gallery_prev ?>" border="0" /></a>
        <span class="zone_gallery_navigator_status" title="<?php echo $__Context->lang->cmd_gallery_thumbnail ?>" id="zone_gallery_navigator_status_<?php echo $__Context->gallery_info->srl ?>">1/1</span>
        <a href="#" class="__next"><img src="/michellu/xe/modules/editor/components/image_gallery/tpl/images/next.gif" alt="<?php echo $__Context->lang->cmd_gallery_next ?>" title="<?php echo $__Context->lang->cmd_gallery_next ?>" border="0" /></a>
    </div>
    <div style="width:<?php echo $__Context->gallery_info->width ?>px;background-color:<?php echo $__Context->gallery_info->bg_color ?>;border:<?php echo $__Context->gallery_info->border_thickness ?>px solid <?php echo $__Context->gallery_info->border_color ?>;text-align:left;">
        <div class="slide_gallery_thumbnail_image_box" style="display:none"></div>
        <div class="slide_gallery_loading_text">Loading images...</div>
		<div class="slide_gallery_placeholder"></div>
        <img border="0" style="display:none" alt="slide_gallery" src="/michellu/xe/modules/editor/components/image_gallery/tpl/images/blank.gif" />
    </div>
    <div class="slide_gallery_filename"></div>
</div>
