<?php if(!defined("__XE__"))exit;?><!--#Meta:layouts/simple_is_best/css/style.css--><?php $__tmp=array('layouts/simple_is_best/css/style.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<div class="layout">
<div class="leftHeader">
    <div class="logo"><a<?php if($__Context->layout_info->logo_url){ ?> href="<?php echo $__Context->layout_info->logo_url ?>"<?php };
if(!$__Context->layout_info->logo_url){ ?> href="<?php echo getUrl('') ?>"<?php } ?>><img src="<?php echo $__Context->layout_info->logo_img ?>" alt="Logo" /></a></div>
    <div class="leftBanner"><?php echo $__Context->layout_info->left_banner ?></div>
</div>
<div class="rightContent">
<div class="topBanner"><?php echo $__Context->layout_info->top_banner ?></div>
<!--Content Start-->
<?php echo $__Context->content ?>
<!--Content End-->
</div>
<div class="cf"></div>
</div>