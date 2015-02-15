<?php if(!defined("__XE__"))exit;?>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('layouts/flat_series','_header.html') ?>
<header>
	<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('layouts/flat_series/obj','_camera_slide.html') ?>
	
	<div class="menu-wrap">
		<div class="fs-wrap fs-wrap-extend">
			<div class="clear">
				<?php if($__Context->li->header_logo){ ?><div class="logo">
					<?php if($__Context->li->header_logo_src){ ?><a href="<?php echo $__Context->li->header_logo_src ?>"><img src="<?php echo $__Context->li->header_logo ?>"<?php if($__Context->li->header_logo_desc){ ?> alt="<?php echo $__Context->li->header_logo_desc ?>"<?php } ?> /></a><?php } ?>
					<?php if(!$__Context->li->header_logo_src){ ?><img src="<?php echo $__Context->li->header_logo ?>"<?php if($__Context->li->header_logo_desc){ ?> alt="<?php echo $__Context->li->header_logo_desc ?>"<?php } ?> /><?php } ?>
				</div><?php } ?>
				<?php if($__Context->top_menu){ ?><ul class="menu">
					<?php if($__Context->top_menu->list&&count($__Context->top_menu->list))foreach($__Context->top_menu->list as $__Context->key=>$__Context->val){ ?><li id="mid-<?php echo $__Context->val['node_srl'] ?>"<?php if($__Context->val['selected']){ ?> class="active"<?php } ?>>
						<a href="<?php echo $__Context->val['href'] ?>" class="cufon-normal"<?php if($__Context->val['open_window'] == 'Y'){ ?> target="_blank"<?php } ?>><?php echo $__Context->val["link"] ?></a>
					</li><?php } ?>
				</ul><?php } ?>
			</div>
		</div>
	</div>
	<?php if($__Context->li->layout_type != 'mainpage' || $__Context->li->lib_camera_slide == 'N' || $__Context->li->use_camera_slide != 'Y' || !$__Context->li->camera_slide_image_1){ ?><div class="submenu-wrap">
		<div class="fs-wrap">
			<div class="clear">
				<?php if($__Context->main_menu){ ?><ul class="breadcrumb">
					<li class="first-child"><a href="<?php echo getUrl('') ?>"><i class="fa fa-home"></i></a></li>
					<?php if($__Context->main_menu->list&&count($__Context->main_menu->list))foreach($__Context->main_menu->list as $__Context->key1=>$__Context->val1){;
if($__Context->val1['selected']){ ?><li>
						<a href="<?php echo $__Context->val1['href'] ?>"<?php if($__Context->val1['open_window'] == 'Y'){ ?> target="_blank"<?php } ?>><?php echo $__Context->val1["link"] ?></a>
						<?php if($__Context->val1['list']){;
if($__Context->val1['list']&&count($__Context->val1['list']))foreach($__Context->val1['list'] as $__Context->key2=>$__Context->val2){ ?>
							<?php if($__Context->val2['selected']){ ?><li>
								<a href="<?php echo $__Context->val2['href'] ?>"<?php if($__Context->val2['open_window'] == 'Y'){ ?> target="_blank"<?php } ?>><?php echo $__Context->val2["link"] ?></a>
							</li><?php } ?>
						<?php }} ?>
					</li><?php }} ?>
				</ul><?php } ?>
				<?php if($__Context->top_menu){ ?><ul class="submenu">
					<?php if($__Context->top_menu->list&&count($__Context->top_menu->list))foreach($__Context->top_menu->list as $__Context->key1=>$__Context->val1){ ?><li id="pid-<?php echo $__Context->val1['node_srl'] ?>"<?php if($__Context->val1['selected']){ ?> class="active"<?php } ?>>
						<?php if($__Context->val1['list']){;
if($__Context->val1['list']&&count($__Context->val1['list']))foreach($__Context->val1['list'] as $__Context->key2=>$__Context->val2){ ?><a href="<?php echo $__Context->val2['href'] ?>"<?php if($__Context->val2['selected']){ ?> class="active"<?php };
if($__Context->val2['open_window'] == 'Y'){ ?> target="_blank"<?php } ?>><?php echo $__Context->val2["link"] ?></a><?php }} ?>
					</li><?php } ?>
				</ul><?php } ?>
			</div>
		</div>
	</div><?php } ?>
	<?php if($__Context->li->layout_type != 'mainpage' || $__Context->li->lib_camera_slide == 'N' || $__Context->li->use_camera_slide != 'Y' || !$__Context->li->camera_slide_image_1){ ?><div class="sitemap-btn-wrap">
		<div class="fs-wrap">
			<a class="sitemap-btn"><i class="fa fa-angle-<?php if(($__Context->li->expand_sitemap == 'Y' && $__Context->_COOKIE['disp_fs_sitemap'] != 'N') || $__Context->_COOKIE['disp_fs_sitemap'] == 'Y'){ ?>up<?php }else{ ?>down<?php } ?>"></i> <?php echo $__Context->lang->fs_sitemap ?></a>
		</div>
	</div><?php } ?>
	<?php if($__Context->li->layout_type != 'mainpage' || $__Context->li->lib_camera_slide == 'N' || $__Context->li->use_camera_slide != 'Y' || !$__Context->li->camera_slide_image_1){ ?><div class="sitemap-wrap">
		<div class="fs-wrap fs-wrap-extend">
			<?php if($__Context->main_menu){ ?><ul class="sitemap">
				<?php if($__Context->main_menu->list&&count($__Context->main_menu->list))foreach($__Context->main_menu->list as $__Context->key1=>$__Context->val1){ ?><li<?php if($__Context->val1['selected']){ ?> class="active"<?php } ?>>
					<a href="<?php echo $__Context->val1['href'] ?>" class="cufon-normal"<?php if($__Context->val1['open_window'] == 'Y'){ ?> target="_blank"<?php } ?>><?php echo $__Context->val1["link"] ?></a>
					<?php if($__Context->val1['list']){ ?><ul class="sub-sitemap">
						<?php if($__Context->val1['list']&&count($__Context->val1['list']))foreach($__Context->val1['list'] as $__Context->key2=>$__Context->val2){ ?><li<?php if($__Context->val2['selected']){ ?> class="active"<?php } ?>>
							<a href="<?php echo $__Context->val2['href'] ?>"<?php if($__Context->val2['open_window'] == 'Y'){ ?> target="_blank"<?php } ?>><?php echo $__Context->val2["link"] ?></a>
						</li><?php } ?>
					</ul><?php } ?>
				</li><?php } ?>
			</ul><?php } ?>
		</div>
	</div><?php } ?>
</header>
<div class="body">
	<div class="clear">
		<?php if($__Context->li->body_header){ ?><div class="body-header">
			<?php echo $__Context->li->body_header ?>
		</div><?php } ?>
		<?php if($__Context->li->layout_type == 'mainpage'){ ?><div<?php if($__Context->act || $__Context->li->use_content != 'N'){ ?> class="fs-wrap fs-wrap-extend"<?php } ?>>
			<div id="content" class="content">
				<?php echo $__Context->li->content_header ?>
				<div class="clear"><?php echo $__Context->content ?></div>
				<?php echo $__Context->li->content_footer ?>
			</div>
		</div><?php } ?>
		<?php if($__Context->li->layout_type != 'mainpage'){ ?><div class="fs-wrap fs-wrap-extend">
			<div class="clear">
				<?php if(in_array($__Context->li->layout_type, array('totalside', 'leftside'))){ ?><div class="left-sidebar">
					<?php if(in_array('search', $__Context->li->leftside_option)){;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('layouts/flat_series/obj','_search.html');
} ?>
					<?php if(in_array('login_form', $__Context->li->leftside_option)){;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('layouts/flat_series/obj','_login_form.html');
} ?>
					<?php if(in_array('category', $__Context->li->leftside_option)){;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('layouts/flat_series/obj','_category.html');
} ?>
					<div class="clear"><?php echo $__Context->li->body_left_sidebar ?></div>
				</div><?php } ?>
				<?php if(in_array($__Context->li->layout_type, array('totalside', 'rightside'))){ ?><div class="right-sidebar">
					<?php if(in_array('search', $__Context->li->rightside_option)){;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('layouts/flat_series/obj','_search.html');
} ?>
					<?php if(in_array('login_form', $__Context->li->rightside_option)){;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('layouts/flat_series/obj','_login_form.html');
} ?>
					<?php if(in_array('category', $__Context->li->rightside_option)){;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('layouts/flat_series/obj','_category.html');
} ?>
					<div class="clear"><?php echo $__Context->li->body_right_sidebar ?></div>
				</div><?php } ?>
				<div id="content" class="content">
					<?php echo $__Context->li->content_header ?>
					<div class="clear"><?php echo $__Context->content ?></div>
					<?php echo $__Context->li->content_footer ?>
				</div>
			</div>
		</div><?php } ?>
		<?php if($__Context->li->body_footer){ ?><div class="body-footer">
			<?php echo $__Context->li->body_footer ?>
		</div><?php } ?>
	</div>
</div>
<footer>
	<?php if($__Context->li->footer_widget){ ?><div class="widget arrow arrow-top">
		<div class="fs-wrap fs-wrap-extend">
			<div class="clear"><?php echo $__Context->li->footer_widget ?></div>
		</div>
	</div><?php } ?>
	<div class="footer arrow arrow-top">
		<div class="fs-wrap fs-wrap-extend">
			<div class="clear">
				<?php if($__Context->li->footer_logo){ ?><div class="logo">
					<?php if($__Context->li->footer_logo_src){ ?><a href="<?php echo $__Context->li->footer_logo_src ?>"><img src="<?php echo $__Context->li->footer_logo ?>"<?php if($__Context->li->footer_logo_desc){ ?> alt="<?php echo $__Context->li->footer_logo_desc ?>"<?php } ?> /></a><?php } ?>
					<?php if(!$__Context->li->footer_logo_src){ ?><img src="<?php echo $__Context->li->footer_logo ?>"<?php if($__Context->li->footer_logo_desc){ ?> alt="<?php echo $__Context->li->footer_logo_desc ?>"<?php } ?> /><?php } ?>
				</div><?php } ?>
				<div class="container">
					<ul class="menu clear">
						<?php if($__Context->footer_menu){;
if($__Context->footer_menu->list&&count($__Context->footer_menu->list))foreach($__Context->footer_menu->list as $__Context->key=>$__Context->val){ ?>
							<li<?php if($__Context->val['class']){ ?> class="<?php echo $__Context->val['class'] ?>"<?php } ?>>
								<a href="<?php echo $__Context->val['href'] ?>"<?php if($__Context->val['open_window'] == 'Y'){ ?> target="_blank"<?php } ?>><?php echo $__Context->val["link"] ?></a>
							</li>
						<?php }} ?>
					</ul>
					<?php if($__Context->li->footer_license){ ?>
						<hr class="footer-divider" />
						<div class="license">
							<div class="clear"><?php echo $__Context->li->footer_license ?></div>
						</div>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
</footer>
<?php if($__Context->grant->manager){ ?><ul class="follow-menu clear">
	<li><a href="<?php echo getUrl('', 'module', 'admin') ?>" target="_blank"><?php echo $__Context->lang->cmd_management ?></a></li>
	<li><a href="<?php echo getUrl('', 'module', 'admin', 'act', 'dispLayoutAdminModify', 'layout', $__Context->li->layout, 'layout_srl', $__Context->li->layout_srl) ?>" target="_blank"><?php echo $__Context->lang->cmd_layout_setup ?></a></li>
</ul><?php } ?>
<a class="top-btn"><i class="fa fa-chevron-up"></i></a>