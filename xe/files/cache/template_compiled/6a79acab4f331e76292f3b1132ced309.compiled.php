<?php if(!defined("__XE__"))exit;?>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('layouts/flat_series','_init.php') ?>
<?php Context::loadLang('layouts/flat_series/lang'); ?>
<?php if($__Context->li->lib_fa != 'N' && $__Context->li->lib_fa_cdn != 'N' && __DEBUG__){ ?><!--#Meta:///netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.css--><?php $__tmp=array('///netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.css','','','');Context::loadFile($__tmp);unset($__tmp);
} ?>
<?php if($__Context->li->lib_fa != 'N' && $__Context->li->lib_fa_cdn != 'N' && !__DEBUG__){ ?><!--#Meta:///netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css--><?php $__tmp=array('///netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css','','','');Context::loadFile($__tmp);unset($__tmp);
} ?>
<?php if($__Context->li->lib_fa != 'N' && $__Context->li->lib_fa_cdn == 'N'){ ?><!--#Meta:layouts/flat_series/css/libs/font-awesome.css--><?php $__tmp=array('layouts/flat_series/css/libs/font-awesome.css','','','');Context::loadFile($__tmp);unset($__tmp);
} ?>
<?php if($__Context->li->use_camera_slide == 'Y' && $__Context->li->camera_slide_image_1){ ?><!--#Meta:layouts/flat_series/css/libs/camera.css--><?php $__tmp=array('layouts/flat_series/css/libs/camera.css','','','');Context::loadFile($__tmp);unset($__tmp);
} ?>
<!--#Meta:layouts/flat_series/css/stylesheet.css--><?php $__tmp=array('layouts/flat_series/css/stylesheet.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<?php if($__Context->li->lib_cufon != 'N'){ ?><!--#Meta:layouts/flat_series/js/libs/cufon.yui.js--><?php $__tmp=array('layouts/flat_series/js/libs/cufon.yui.js','','','');Context::loadFile($__tmp);unset($__tmp);
} ?>
<?php if($__Context->li->lib_cufon != 'N' && $__Context->li->lib_cufon_font == '400'){ ?><!--#Meta:layouts/flat_series/fonts/cufon.ng.400.js--><?php $__tmp=array('layouts/flat_series/fonts/cufon.ng.400.js','','','');Context::loadFile($__tmp);unset($__tmp);
} ?>
<?php if($__Context->li->lib_cufon != 'N' && $__Context->li->lib_cufon_font != '400'){ ?><!--#Meta:layouts/flat_series/fonts/cufon.ng.600.js--><?php $__tmp=array('layouts/flat_series/fonts/cufon.ng.600.js','','','');Context::loadFile($__tmp);unset($__tmp);
} ?>
<?php if($__Context->li->lib_jq_cookie != 'N'){ ?><!--#Meta:layouts/flat_series/js/libs/jquery.cookie.js--><?php $__tmp=array('layouts/flat_series/js/libs/jquery.cookie.js','body','','');Context::loadFile($__tmp);unset($__tmp);
} ?>
<?php if($__Context->li->lib_jq_easing != 'N'){ ?><!--#Meta:layouts/flat_series/js/libs/jquery.easing.js--><?php $__tmp=array('layouts/flat_series/js/libs/jquery.easing.js','body','','');Context::loadFile($__tmp);unset($__tmp);
} ?>
<?php if($__Context->li->lib_jq_placeholder != 'N'){ ?><!--#Meta:layouts/flat_series/js/libs/jquery.placeholder.js--><?php $__tmp=array('layouts/flat_series/js/libs/jquery.placeholder.js','body','IE','');Context::loadFile($__tmp);unset($__tmp);
} ?>
<?php if($__Context->li->lib_camera_slide != 'N' && $__Context->li->use_camera_slide == 'Y' && $__Context->li->camera_slide_image_1){ ?><!--#Meta:layouts/flat_series/js/libs/camera.js--><?php $__tmp=array('layouts/flat_series/js/libs/camera.js','body','','');Context::loadFile($__tmp);unset($__tmp);
} ?>
<!--#Meta:layouts/flat_series/js/script.js--><?php $__tmp=array('layouts/flat_series/js/script.js','body','','');Context::loadFile($__tmp);unset($__tmp); ?>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('layouts/flat_series','_inline.html') ?>