<?php if(!defined("__XE__"))exit;?><!--#Meta:modules/menu/tpl/css/themes/classic/style.css--><?php $__tmp=array('modules/menu/tpl/css/themes/classic/style.css','','','11');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:modules/menu/tpl/css/sitemap.css--><?php $__tmp=array('modules/menu/tpl/css/sitemap.css','','','11');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:modules/menu/tpl/js/_lib/jquery.cookie.js--><?php $__tmp=array('modules/menu/tpl/js/_lib/jquery.cookie.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:modules/menu/tpl/js/jquery.scrollTo-1.4.2.js--><?php $__tmp=array('modules/menu/tpl/js/jquery.scrollTo-1.4.2.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<?php if($__Context->XE_VALIDATOR_MESSAGE){ ?><div class="message <?php echo $__Context->XE_VALIDATOR_MESSAGE_TYPE ?>">
	<p><?php echo $__Context->XE_VALIDATOR_MESSAGE ?></p>
</div><?php } ?>
<div class="_quick_help x_alert">
	<p class="_quick_help_msg">msg</p>
	<label><input class="_quick_help_nomore" type="checkbox"/> <?php echo $__Context->lang->do_not_display_again ?></label>
</div>
<?php if($__Context->act == 'dispMenuAdminSiteMap'){ ?>
<div id="site" class="_siteMap" style="word-wrap:normal">
<?php } ?>
<?php if($__Context->act == 'dispMenuAdminSiteDesign'){ ?>
<div id="site" class="_siteDesign">
<?php } ?>
<?php if($__Context->act == 'dispMenuAdminSiteMap'){ ?>
	<div class="col map" id="site_map">
		<h1><?php echo $__Context->lang->menu_gnb_sub['siteMap'] ?> <a class="x_icon-question-sign" href="./admin/help/index.html#UMAN_site_menu" target="_blank"><?php echo $__Context->lang->help ?></a></h1>
		<div class="cnt">
			<section class="mapi" id="siteMapTree">
				<script id="tmpl_menuTree" type="text/x-jquery-tmpl">
					<ul>
						{{html Nodes}}
					</ul>
				</script>
				<script id="tmpl_menuTreeNode" type="text/x-jquery-tmpl">
					<li id="menu${MenuId}">
						<a href="#" data-param='{ "sMenuId":"${MenuId}" }'>${MenuTitleWithHome}</a>
						{{html SubTree}}
					</li>
				</script>
				<script id="tmpl_menuSelector_menuTree" type="text/x-jquery-tmpl">
					<ul>
						{{html Nodes}}
					</ul>
				</script>
				<script id="tmpl_menuSelector_menuTreeNode" type="text/x-jquery-tmpl">
					<li>
						<a href="#" class="_nodeType_${NodeType} _menu_url_${MenuUrl}" data-param='{ "sMenuId":"${MenuId}", "sMenuUrl":"${MenuUrl}", "sMenuTitle":"${MenuTitle}" }'>${MenuTitle}</a>
						{{html SubTree}}
					</li>
				</script>
			</section>
			<button type="button" class="x_btn x_btn-link _addSiteMap1" data-admin-show="#add_sitemap" style="position:absolute;right:5px;bottom:7px;color:#000"><i class="x_icon-plus-sign"></i> <?php echo $__Context->lang->add_new_sitemap ?></button>
		</div>
	</div>
	<div class="col" id="add_sitemap" style="display:none">
		<section>
			<h1>
				<?php echo $__Context->lang->add_new_sitemap ?>
				<a class="x_icon-question-sign" href="./admin/help/index.html#UMAN_terminology_sitemap" target="_blank"><?php echo $__Context->lang->help ?></a>
			</h1>
			<div class="cnt">
				<ul class="_itemList">
					<li>
						<label for="sitemapName"><?php echo $__Context->lang->sitemap_name ?></label>
						<input id="sitemapName" class="_sitemapName" type="text" required>
					</li>
				</ul>
				<div class="btnBoth">
					<button type="reset" class="x_btn x_pull-left" data-admin-hide="#sitemap_general"><?php echo $__Context->lang->cmd_cancel ?></button>
					<button type="button" class="x_btn x_btn-primary x_pull-right _save"><?php echo $__Context->lang->cmd_confirm ?></button>
				</div>
			</div>
		</section>
		<button type="button" class="x_close" data-admin-hide="#add_sitemap">&times;</button>
	</div>
	<div class="col" id="propertiesRoot" style="display:none">
		<section>
			<h1 class="title"><!--사이트맵 이름--></h1>
			<div class="cnt">
				<ul class="nav">
					<li><a href="#sitemap_general" data-admin-show="#sitemap_general"><?php echo $__Context->lang->edit_sitemap ?> <i class="x_icon-circle-arrow-right"></i></a></li>
					<li><a href="#add" data-admin-show="#add"><?php echo $__Context->lang->add_menu ?> <i class="x_icon-circle-arrow-right"></i></a></li>
					<li><button type="button"  class="_edit_paste" disabled><?php echo $__Context->lang->paste ?></button></li>
					<li><button class="_delSiteMap" type="button"><?php echo $__Context->lang->cmd_delete ?></button></li>
					<li><button class="_renameSiteMap" type="button"><?php echo $__Context->lang->change_name ?></button></li>
				</ul>
			</div>
		</section>
		<button type="button" class="x_close" data-admin-hide="#propertiesRoot">&times;</button>
	</div>
	<div class="col" id="sitemap_general" style="display:none">
		<section>
			<h1><?php echo $__Context->lang->edit_sitemap ?></h1>
			<div class="cnt">
				<ul class="_itemList">
					<li>
						<label for="sitemapName2"><?php echo $__Context->lang->sitemap_name ?></label>
						<input id="sitemapName2" class="_sitemapName" type="text" required>
					</li>
				</ul>
				<div class="btnBoth">
					<button type="reset" class="x_btn x_pull-left" data-admin-hide="#sitemap_general"><?php echo $__Context->lang->cmd_cancel ?></button>
					<button type="button" class="x_btn x_btn-primary x_pull-right _save"><?php echo $__Context->lang->cmd_confirm ?></button>
				</div>
			</div>
		</section>
		<button type="button" class="x_close" data-admin-hide="#sitemap_general">&times;</button>
	</div>
	<div class="col prop-general" id="properties" style="display:none;">
		<section>
			<h1><a href="" target="_blank" class="title"><!--메뉴 이름--></a></h1>
			<div class="cnt">
				<ul>
					<li class="type"><strong><?php echo $__Context->lang->menu_type ?></strong>: <span class="module_type"></span></li>
					<li><a href="#default" data-admin-show="#default"><?php echo $__Context->lang->general_settings ?> <i class="x_icon-circle-arrow-right"></i></a></li>
					<!--li><strong><?php echo $__Context->lang->menu_id ?></strong>: <span class="url"></span></li-->
					<li><a href="#add" data-admin-show="#add"><?php echo $__Context->lang->add_menu ?> <i class="x_icon-circle-arrow-right"></i></a></li>
					<li><button type="button" class="_edit_cut"><?php echo $__Context->lang->cut ?></button></li>
					<li class="ex"><button type="button" class="_edit_copy"><?php echo $__Context->lang->copy ?></button></li>
					<li class="ex"><button type="button" class="_edit_paste" disabled><?php echo $__Context->lang->paste ?></button></li>
					<li class="ex"><button type="button" class="_deleteMenu"><?php echo $__Context->lang->cmd_delete ?></button></li>
					<li class="homepage">
						<label style="padding:0 0 0 8px;margin:0">
							<input type="checkbox" class="_chkUseAsHome" hidden>
							<span><?php echo $__Context->lang->set_as_homepage ?>|<?php echo $__Context->lang->has_been_set_as_homepage ?></span>
							<a class="x_icon-question-sign" href="./admin/help/index.html#UMAN_setting_startpage" target="_blank" style="padding:0;margin:0;background-color:transparent"><?php echo $__Context->lang->help ?></a>
						</label>
					</li>
					<li><a href="#imgbtn" data-admin-show="#imgbtn"><?php echo $__Context->lang->menu_img_btn ?> <i class="x_icon-circle-arrow-right"></i></a></li>
					<li class="design"><a href="#design" data-admin-show="#design"><?php echo $__Context->lang->design ?> <i class="x_icon-circle-arrow-right"></i></a></li>
					<li><a href="#auth" data-admin-show="#auth"><?php echo $__Context->lang->grant ?> <i class="x_icon-circle-arrow-right"></i></a></li>
					<li class="_hasFullSetupX details"><a href="#" class="_openFullSetup"><?php echo $__Context->lang->full_settings ?> <i class="x_icon-cog"></i></a></li>
					<li class="_hasFullSetupO details"><a href="#fullSetup" data-admin-show="#fullSetup"><?php echo $__Context->lang->full_settings ?> <i class="x_icon-circle-arrow-right"></i></a></li>
				</ul>
			</div>
		</section>
		<button type="button" class="x_close" data-admin-hide="#properties">&times;</button>
	</div>
	<div class="col" id="add" style="display:none">
		<section>
			<h1><?php echo $__Context->lang->add_menu ?></h1>
			<div class="cnt">
				<ul class="nav _itemList">
					<script id="tmpl_menuTypeItem" type="text/x-jquery-tmpl">
						<li><a href="#add_menu" data-admin-show="#add_menu" data-param='{ "moduleName" : "${ModuleName}", "moduleTitle": "${ModuleTitle}" }'>${ModuleTitle} <i class="x_icon-circle-arrow-right"></i></a></li>
					</script>
				</ul>
				<a href="#download" class="x_btn x_btn-link" data-admin-show="#download" style="position:absolute;right:5px;bottom:7px;color:#000"><i class="x_icon-plus-sign"></i> <?php echo $__Context->lang->install_other_menu_types ?></a>
			</div>
		</section>
		<button type="button" class="x_close" data-admin-hide="#add">&times;</button>
	</div>
	<div class="col url" id="add_menu" style="display:none">
		<fieldset>
			<h1 class="_title"></h1>
			<div class="cnt">
				<p class="desc"><dfn class="_description"></dfn> <a class='_link x_icon-share'><?php echo $__Context->lang->details ?></a></p>
				<ul>
					<li>
						<div class="multilingual x_input-append">
							<label for="lang_menuName2"><?php echo $__Context->lang->menu_name ?></label>
							<input id="menuName2" class="_menuName lang_code" type="text" required>
						</div>
					</li>
					<li class="typePage">
						<label for="mid1"><?php echo $__Context->lang->menu_id ?> <a href="#help_menuId" class="x_icon-question-sign" data-admin-toggle="#mid1_help"><?php echo $__Context->lang->help ?></a></label>
						<div id="mid1_help" class="x_alert x_alert-info" style="display:none;width:169px">
							<button type="button" class="x_close" data-admin-hide="#mid1_help">×</button>
							<p><?php echo $__Context->lang->about_menu_id ?> <?php echo $__Context->lang->about_new_menu_id ?></p>
						</div>
						<input id="mid1" class="_mid" type="text" required placeholder="<?php echo $__Context->lang->skip_menu_id ?>" />
					</li>
					<li class="typeUrl">
						<div class="x_tabbable">
							<ul class="x_nav x_nav-tabs">
								<li class="x_active"><a href="#add_linkUrl"><?php echo $__Context->lang->url_link ?></a></li>
								<li><a href="#add_linkMenu"><?php echo $__Context->lang->menu_link ?></a></li>
							</ul>
							<div class="x_tab-content">
								<div class="x_tab-pane x_active" id="add_linkUrl">
									<input type="url" class="_linkUrl" required title="<?php echo $__Context->lang->url_link ?>" />
								</div>
								<div class="x_tab-pane" id="add_linkMenu">
									<input type="text" class="_linkMenuTitle" title="<?php echo $__Context->lang->menu_link ?>" disabled placeholder="<?php echo $__Context->lang->about_menu_link ?>" />
									<input type="hidden" class="_linkMenuSrl" />
									<div class="_menuSelector_menuTreeContainer clone">
									</div>
								</div>
							</div>
						</div>
					</li>
				</ul>
				<div class="x_btn-group">
					<button type="button" class="x_btn x_btn-primary _save"><?php echo $__Context->lang->cmd_confirm ?></button>
				</div>
			</div>
		</fieldset>
		<button type="button" class="x_close" data-admin-hide="#add_menu">&times;</button>
	</div>
	<div class="col download" id="download" style="display:none">
		<section>
			<h1><?php echo $__Context->lang->install_other_menu_types ?></h1>
			<div class="cnt">
				<div class="list">
				</div>
				<div class="_pagination"></div>
			</div>
		</section>
		<button type="button" class="x_close" data-admin-hide="#download">&times;</button>
	</div>
	<div class="col url" id="default" style="display:none">
		<fieldset>
			<h1><?php echo $__Context->lang->general_settings ?></h1>
			<div class="cnt">
				<ul>
					<li>
						<div class="multilingual x_input-append">
							<label for="lang_menuName"><?php echo $__Context->lang->menu_name ?></label>
							<input id="menuName" class="_menuName lang_code" type="text" required>
						</div>
					</li>
					<li style="padding:6px 0 0 0">
						<label><input type="checkbox" class="_newWindow" title="<?php echo $__Context->lang->menu_open_window ?>"> <?php echo $__Context->lang->menu_open_window ?></label>
					</li>
					<li style="padding:0 0 6px 0">
						<label><input type="checkbox" class="_leaveUnfolded" title="<?php echo $__Context->lang->menu_expand ?>"> <?php echo $__Context->lang->menu_expand ?></label>
					</li>
					<li class="typePage" style="border-top:1px solid #DDD">
						<label for="lang_pageTitle"><?php echo $__Context->lang->browser_title ?> <a href="#help_menuName" class="x_icon-question-sign" data-admin-toggle="#help_menuName"><?php echo $__Context->lang->help ?></a></label>
						<div id="help_menuName" class="x_alert x_alert-info" style="display:none;width:169px">
							<button type="button" class="x_close" data-admin-hide="#help_menuName">×</button>
							<p><?php echo $__Context->lang->about_browser_title ?></p>
						</div>
						<input id="pageTitle" class="_browserTitle lang_code" type="text">
						<label for="mid2"><?php echo $__Context->lang->menu_id ?> <a href="#help_menuId" class="x_icon-question-sign" data-admin-toggle="#mid2_help"><?php echo $__Context->lang->help ?></a></label>
						<div id="mid2_help" class="x_alert x_alert-info" style="display:none;width:169px">
							<button type="button" class="x_close" data-admin-hide="#mid2_help">×</button>
							<p><?php echo $__Context->lang->about_menu_id ?></p>
						</div>
						<input type="text" id="mid2" class="_mid">
					</li>
					<li class="typeUrl">
						<div class="x_tabbable">
							<ul class="x_nav x_nav-tabs">
								<li class="x_active"><a href="#fix_linkUrl"><?php echo $__Context->lang->url_link ?></a></li>
								<li><a href="#fix_linkMenu"><?php echo $__Context->lang->menu_link ?></a></li>
							</ul>
							<div class="x_tab-content">
								<div class="x_tab-pane x_active" id="fix_linkUrl">
									<input type="text" class="_url_link" title="<?php echo $__Context->lang->url_link ?>" />
								</div>
								<div class="x_tab-pane" id="fix_linkMenu">
									<input type="text" class="_linkMenuTitle" title="<?php echo $__Context->lang->menu_link ?>" disabled placeholder="<?php echo $__Context->lang->about_menu_link ?>" />
									<input type="hidden" class="_linkMenuSrl"  />
									<div class="_menuSelector_menuTreeContainer clone">
									</div>
								</div>
							</div>
						</div>
					</li>
					<li>
						<p id="menuTypeHelpInDefault" style="width:220px"><?php echo $__Context->lang->about_menu_type_in_default ?></p>
					</li>
				</ul>
				<div class="btnBoth">
					<button type="reset" class="x_btn x_pull-left" data-admin-hide="#default"><?php echo $__Context->lang->cmd_cancel ?></button>
					<button type="button" class="x_btn x_btn-primary x_pull-right _save"><?php echo $__Context->lang->cmd_confirm ?></button>
				</div>
			</div>
		</fieldset>
		<button type="button" class="x_close" data-admin-hide="#default">&times;</button>
	</div>
	<div class="col" id="imgbtn" style="display:none">
		<fieldset>
			<h1><?php echo $__Context->lang->menu_img_btn ?></h1>
			<div class="cnt">
				<p style="border-bottom:1px solid #ddd;width:220px;padding-bottom:10px"><?php echo $__Context->lang->about_imgbtn ?></p>
				<form action="?module=menu&act=procMenuAdminButtonUpload" class="_btn_normal" target="submitTarget" method="post" enctype="multipart/form-data"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="act" value="<?php echo $__Context->act ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
					<input name="menu_item_srl" type="hidden" value=""/>
					<input name="xe_js_callback" type="hidden" value="top.onBtnImgUploaded"/>
					<input name="isNormalDelete" type="hidden" value="Y"/>
					<figure>
						<figcaption><?php echo $__Context->lang->menu_normal_btn ?></figcaption>
						<p class="noImg"><?php echo $__Context->lang->menu_no_img_btn ?></p>
						<img class="_thumbnail" src="/michellu/xe/common/img/blank.gif" alt="<?php echo $__Context->lang->about_menu_normal_btn ?>">
					</figure>
					<div class="btnBoth">
						<button type="submit" class="delete x_btn x_pull-left"><?php echo $__Context->lang->cmd_delete ?></button>
						<span class="fileBtn x_btn x_pull-right">
							<span class="modify"><?php echo $__Context->lang->menu_change_btn ?></span>
							<span class="upload"><?php echo $__Context->lang->menu_upload_btn ?></span>
							<input type="file" title="<?php echo $__Context->lang->menu_change_btn ?>/<?php echo $__Context->lang->menu_upload_btn ?>" name="menu_normal_btn">
						</span>
					</div>
				</form>
				<form action="?module=menu&act=procMenuAdminButtonUpload" class="_btn_hover" target="submitTarget" method="post" enctype="multipart/form-data"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="act" value="<?php echo $__Context->act ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
					<input name="menu_item_srl" type="hidden" value=""/>
					<input name="xe_js_callback" type="hidden" value="top.onBtnImgUploaded"/>
					<input name="isHoverDelete" type="hidden" value="Y"/>
					<figure>
						<figcaption><?php echo $__Context->lang->menu_hover_btn ?></figcaption>
						<p class="noImg"><?php echo $__Context->lang->menu_no_img_btn ?></p>
						<img class="_thumbnail" src="/michellu/xe/common/img/blank.gif" alt="<?php echo $__Context->lang->about_menu_hover_btn ?>">
					</figure>
					<div class="btnBoth">
						<button type="submit" class="delete x_btn x_pull-left"><?php echo $__Context->lang->cmd_delete ?></button>
						<span class="fileBtn x_btn x_pull-right">
							<span class="modify"><?php echo $__Context->lang->menu_change_btn ?></span>
							<span class="upload"><?php echo $__Context->lang->menu_upload_btn ?></span>
							<input type="file" title="<?php echo $__Context->lang->menu_change_btn ?>/<?php echo $__Context->lang->menu_upload_btn ?>" name="menu_hover_btn">
						</span>
					</div>
				</form>
				<form action="?module=menu&act=procMenuAdminButtonUpload" class="_btn_selected" target="submitTarget" method="post" enctype="multipart/form-data"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="act" value="<?php echo $__Context->act ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
					<input name="menu_item_srl" type="hidden" value=""/>
					<input name="xe_js_callback" type="hidden" value="top.onBtnImgUploaded"/>
					<input name="isActiveDelete" type="hidden" value="Y"/>
					<figure>
						<figcaption><?php echo $__Context->lang->menu_active_btn ?></figcaption>
						<p class="noImg"><?php echo $__Context->lang->menu_no_img_btn ?></p>
						<img class="_thumbnail" src="/michellu/xe/common/img/blank.gif" alt="<?php echo $__Context->lang->about_menu_active_btn ?>">
					</figure>
					<div class="btnBoth">
						<button type="submit" class="delete x_btn x_pull-left"><?php echo $__Context->lang->cmd_delete ?></button>
						<span class="fileBtn x_btn x_pull-right">
							<span class="modify"><?php echo $__Context->lang->menu_change_btn ?></span>
							<span class="upload"><?php echo $__Context->lang->menu_upload_btn ?></span>
							<input type="file" title="<?php echo $__Context->lang->menu_change_btn ?>/<?php echo $__Context->lang->menu_upload_btn ?>" name="menu_active_btn">
						</span>
					</div>
				</form>
			</div>
		</fieldset>
		<button type="button" class="x_close" data-admin-hide="#imgbtn">&times;</button>
	</div>
	<?php } ?>
	<?php if($__Context->act == 'dispMenuAdminSiteMap'){ ?>
	<div class="col" id="design"  style="display:none">
	<?php } ?>
	<?php if($__Context->act == 'dispMenuAdminSiteDesign'){ ?>
	<div class="col" id="design">
	<?php } ?>
		<fieldset>
			<h1 class="_item"><?php echo $__Context->lang->design ?></h1>
			<h1 class="_site"><?php echo $__Context->lang->menu_gnb_sub['siteDesign'] ?> <a class="x_icon-question-sign" href="./admin/help/index.html#UMAN_site_design" target="_blank"><?php echo $__Context->lang->help ?></a></h1>
			<div class="cnt">
				<form action="./" target="xe_preview" class="_preview_form" method="post"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="act" value="<?php echo $__Context->act ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
					<input type="hidden" name="skin_vars" value="{}"/>
					<div class="x_tabbable">
						<ul class="x_nav x_nav-tabs">
							<li class="x_active"><a href="#pc">PC</a></li>
							<li><a href="#mobile"><?php echo $__Context->lang->mobile ?></a></li>
						</ul>
						<div class="x_tab-content">
							<div class="x_tab-pane x_active" id="pc">
								<div class="shadow">
									<iframe name="_pc_preview_ifr" src="about:_blank"></iframe><i class="mask"><span></span></i>
									<input type="submit" class="x_icon-zoom-in x_icon-white _pc_preview_open" value="<?php echo $__Context->lang->view_zoom ?>" />
								</div>
							</div>
							<div class="x_tab-pane" id="mobile">
								<label class="mvOption"><input type="checkbox" name="use_mobile" value="Y"> <?php echo $__Context->lang->use_mobile_view ?></label>
								<div class="shadow">
									<iframe name="_mobile_preview_ifr" src="about:_blank"></iframe><i class="mask"><span></span></i>
									<input type="submit" class="x_icon-zoom-in x_icon-white _mobile_preview_open" value="<?php echo $__Context->lang->view_zoom ?>" />
								</div>
							</div>
						</div>
					</div>
				</form>
				<ul class="nav _itemList">
					<script id="tmpl_layoutItem" type="text/x-jquery-tmpl">
					<li><a href="#layout" data-admin-show="#layout"><?php echo $__Context->lang->layout ?> [<span class="themeName _layoutName">${LayoutName}</span>] <i class="x_icon-circle-arrow-right"></i></a></li>
					</script>
					<script id="tmpl_skinItem" type="text/x-jquery-tmpl">
					<li><a href="#skin" data-admin-show="#skin" data-param='{ "moduleType" : "${ModuleType}"}'>${ModuleTypeTitle} [<span class="themeName _skinTitle">{{if SkinTitle}}${SkinTitle}{{else}}<?php echo $__Context->lang->no_skin ?>{{/if}}</span>] <i class="x_icon-circle-arrow-right"></i></a></li>
					</script>
				</ul>
				<div class="btnBoth siteDesignUI">
					<button type="reset" class="x_btn x_pull-left _btn_cancel"><?php echo $__Context->lang->cmd_cancel ?></button>
					<button type="button" class="x_btn x_btn-primary x_pull-right _btn_save">
						<span class="langDesktop"><?php echo $__Context->lang->desktop_settings ?></span>
						<span class="langMobile"><?php echo $__Context->lang->mobile_settings ?></span>
						<?php echo $__Context->lang->cmd_save ?>
					</button>
				</div>
			</div>
		</fieldset>
		<button type="button" class="x_close" data-admin-hide="#design">&times;</button>
	</div>
	<div class="col theme" id="layout" style="display:none">
		<form action=""><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="act" value="<?php echo $__Context->act ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
			<h1>
				<?php echo $__Context->lang->layout ?>
				<a class="x_icon-question-sign" href="./admin/help/index.html#UMAN_terminology_layout" target="_blank"><?php echo $__Context->lang->help ?></a>
			</h1>
			<div class="cnt">
				<label style="white-space:nowrap;cursor:pointer;width:100%">
					<?php echo $__Context->lang->use_site_design ?><input type="checkbox" class="_chkUseDefaultLayout switch" title="<?php echo $__Context->lang->use_site_default_layout ?>"><i style="float:right"></i>
				</label>
				<div class="list">
					<ul class="_layout_list">
						<script id="tmpl_layout_list_item_no_layout" type="text/x-jquery-tmpl">
						<li class="${Selected} _layoutItem">
							<label>
								<input type="radio" name="layout_item" title="<?php echo $__Context->lang->no_use_layout ?>"><i></i> <?php echo $__Context->lang->no_use_layout ?>
							</label>
						</li>
						</script>
						<script id="tmpl_layout_list_item_add_new" type="text/x-jquery-tmpl">
						<li data-admin-show="#downloadLayout">
							<label><i class="x_icon-plus-sign"></i> <?php echo $__Context->lang->install_other_layouts ?></label>
							<button type="button" class="item _btnScreenshot">
								<img src="/michellu/xe/modules/menu/tpl/modules/layout/tpl/img/download.png" class="_thumbnail" alt="<?php echo $__Context->lang->install_other_layouts ?>">
							</button>
						</li>
						</script>
						<script id="tmpl_layout_list_item" type="text/x-jquery-tmpl">
						<li class="${Selected} _layoutItem">
							<label><input type="radio" name="layout_item" title="${Title}"> ${Title}</label>
							<button type="button" class="item _btnScreenshot" title="<?php echo $__Context->lang->about_apply_layout ?>">
								<img src="${ScreenShotURL}" class="_thumbnail" alt="${Title}">
							</button>
							<ul class="_edit_menu">
								<li><a href="#layoutSetup" data-admin-show="#layoutSetup" data-param='{ "sLayoutSrl":"${LayoutSrl}"}'><?php echo $__Context->lang->full_settings ?> <i class="x_icon-circle-arrow-right"></i></a></li>
								<li><a href="#layoutMarkupSetup" data-admin-show="#layoutMarkupSetup" data-param='{ "sLayoutSrl":"${LayoutSrl}"}'>HTML/CSS <i class="x_icon-circle-arrow-right"></i></a></li>
								<li><button type="button" class="_duplicateLayout"><?php echo $__Context->lang->make_copy ?></button></li>
								<li><button type="button" class="_deleteLayout"><?php echo $__Context->lang->cmd_delete ?></button></li>
							</ul>
						</li>
						</script>
					</ul>
					<i class="mask"></i>
				</div>
				<!--
				<a href="#downloadLayout" data-admin-show="#downloadLayout" class="x_btn x_btn-link" style="position:absolute;right:5px;bottom:7px;color:#000"><i class="x_icon-plus-sign"></i> <?php echo $__Context->lang->install_other_layouts ?></a>
				-->
			</div>
			<div class="x_btn-group siteMapUI">
				<button type="button" class="x_btn x_btn-primary x_pull-right _save"><?php echo $__Context->lang->cmd_save ?></button>
			</div>
		</form>
		<button type="button" class="x_close" data-admin-hide="#layout">&times;</button>
	</div>
	<div class="col layoutSetup" id="layoutSetup" style="display:none">
		<section>
			<h1><?php echo $__Context->lang->layout_settings ?></h1>
			<div class="cnt">
				<div class="_contents"></div>
			</div>
		</section>
		<button type="button" class="x_close" data-admin-hide="#layoutSetup">&times;</button>
	</div>
	<div class="col layoutMarkupSetup" id="layoutMarkupSetup" style="display:none">
		<section>
			<h1><?php echo $__Context->lang->layout_html_css_settings ?></h1>
			<div class="cnt">
				<div class="_contents"></div>
			</div>
		</section>
		<button type="button" class="x_close" data-admin-hide="#layoutMarkupSetup">&times;</button>
	</div>
	<div class="col download" id="downloadLayout" style="display:none">
		<section>
			<h1><?php echo $__Context->lang->install_other_layouts ?></h1>
			<div class="cnt">
				<div class="list">
				</div>
				<div style="margin-top:-10px" class="x_clearfix">
					<div class="_pagination"></div>
				</div>
				<script id="tmpl_pagination" type="text/x-jquery-tmpl">
				<div class="x_pagination" style="float:left">
					<ul class="_list">
					</ul>
				</div>
				<div class="search x_input-append x_pull-right">
					<input type="search" value="" title="Search" name="search_keyword">
					<button class="x_btn x_btn-inverse _search">검색</button>
					<a class="x_btn _cancel" href="#">취소</a>
				</div>
				</script>
				<script id="tmpl_pagination_list" type="text/x-jquery-tmpl">
					<li class='${ActiveClass}'><a  href="#" class="_toPage" data-param='{ "page": "${Page}"}' title='${Page}' onclick="return false">${PageText}</a></li>
				</script>
				<script id="tmpl_pagination_jump" type="text/x-jquery-tmpl">
					<li>
						<a href="#goTo" data-admin-toggle="#goTo" title="${GoText}" onclick="return false">&hellip;</a>
						<span id="goTo" class="x_input-append">
							<input type="number" min="1" max="${LastPage}" required name="page" title="${GoText}" />
							<button type="input" class="x_add-on _jumpTo">Go</button>
						</span>
					</li>
				</script>
			</div>
		</section>
		<button type="button" class="x_close" data-admin-hide="#downloadLayout">&times;</button>
	</div>
	<div class="col theme" id="skin" style="display:none">
		<form action=""><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="act" value="<?php echo $__Context->act ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
			<h1><?php echo $__Context->lang->skin ?></h1>
			<div class="cnt">
				<label style="cursor:pointer">
					<!--
					<input type="checkbox" class="_chkUseDefault" title="<?php echo $__Context->lang->use_site_default_skin ?>"> <?php echo $__Context->lang->use_site_default_skin ?>
					<a href="?module=admin&act=dispMenuAdminSiteDesign" class="x_icon-cog _siteDesignSetupLink"><?php echo $__Context->lang->site_default_skin_settings ?></a>
					<label class="" style="white-space: nowrap; cursor: pointer; width: 100%; font-weight: normal;" for="i6">
					사이트 기본 레이아웃 사용
					<input id="i6" class="_chkUseDefaultLayout switch" type="checkbox" title="사이트 기본 레이아웃 사용">
					<i style="float:right"></i>
					-->
					<?php echo $__Context->lang->use_site_design ?>
					<input type="checkbox" class="_chkUseDefault switch" title="<?php echo $__Context->lang->use_site_default_skin ?>">
					<i style="float:right"></i>
					</label>
				</label>
				<div class="list">
					<ul class="_list">
						<script id="tmpl_skin_list_item_no_skin" type="text/x-jquery-tmpl">
						<li class="_item ${Selected}">
							<label>
								<input type="radio" name="skin_item" title="스킨 사용 안 함"> 스킨 사용 안 함
							</label>
						</li>
						</script>
						<script id="tmpl_skin_list_item_add_new" type="text/x-jquery-tmpl">
						<li data-admin-show="#downloadSkin">
							<label><i class="x_icon-plus-sign"></i> <?php echo $__Context->lang->install_other_skins ?></label>
							<button type="button" class="item _btnScreenshot">
								<img src="/michellu/xe/modules/menu/tpl/modules/layout/tpl/img/download.png" class="_thumbnail" alt="<?php echo $__Context->lang->install_other_skins ?>">
							</button>
						</li>
						</script>
						<script id="tmpl_skin_list_item" type="text/x-jquery-tmpl">
						<li class="_item ${Selected}">
							<label><input type="radio" name="skin_item" title="${Title}"> ${Title}</label>
							<button type="button" class="item _btnScreenshot" title="<?php echo $__Context->lang->about_apply_skin ?>">
								<img src="${ScreenShotURL}">
							</button>
							<!--
							<ul>
								<li><a href="#skinSetup" data-admin-show="#skinSetup" data-param='{ "sSkinName":"${SkinName}"}'><?php echo $__Context->lang->cmd_setup ?> <i class="x_icon-circle-arrow-right"></i></a></li>
							</ul>
							-->
						</li>
						</script>
					</ul>
					<i class="mask"></i>
					<!--
					<a href="#downloadSkin" data-admin-show="#downloadSkin" class="x_btn x_btn-link" style="position:absolute;right:5px;bottom:7px;color:#000"><i class="x_icon-plus-sign"></i> <?php echo $__Context->lang->install_other_skins ?></a>
					-->
				</div>
			</div>
			<div class="x_btn-group siteMapUI">
				<button type="button" class="x_btn x_btn-primary x_pull-right _save"><?php echo $__Context->lang->cmd_save ?></button>
			</div>
		</form>
		<button type="button" class="x_close" data-admin-hide="#skin">&times;</button>
	</div>
	<div class="col skinSetup" id="skinSetup" style="display:none">
		<section>
			<h1>스킨 설정</h1>
			<div class="cnt">
				<div class="_contents"></div>
			</div>
		</section>
		<button type="button" class="x_close" data-admin-hide="#skinSetup">&times;</button>
	</div>
	<div class="col download" id="downloadSkin" style="display:none">
		<section>
			<h1><?php echo $__Context->lang->install_other_skins ?></h1>
			<div class="cnt">
				<div class="list">
					<script id="tmpl_noDownloadableItem" type="text/x-jquery-tmpl">
						<p style="margin:15px 0"><?php echo $__Context->lang->no_downloadable_item ?></p>
					</script>
					<script id="tmpl_downloadableItem" type="text/x-jquery-tmpl">
						<div class="item ${IsInstalled} ${IsUpToDate}">
							<img src="http://${ScreenShotURL}" alt="">
							<h2><a target="_blank" href="${URL}">${MenuType}</a></h2>
							<p>${MenuTypeDesc}</p>
							<p><i class="starRating score${Score}"><i></i></i> <b class="x_badge">${Score}/${TotalVotes}</b> <?php echo $__Context->lang->package_update ?>: <time title="${LastUpdatedWithTime}">${LastUpdated}</time> <i>|</i> <?php echo $__Context->lang->package_downloaded_count ?>: ${TotalDownloads}</p>
							<div class="_install">
								<button type="button" class="x_icon-download-alt x_icon-white _install_this"><?php echo $__Context->lang->install ?></button>
							</div>
							<div class="_already_installed">
								<div class="_already_up_to_date">
									<button type="button" class="done"><i class="x_icon-ok-sign x_icon-white"></i> <?php echo $__Context->lang->installed ?></button>
								</div>
								<div class="_need_to_update">
									<button type="button" class="update _install_this"><i class="x_icon-refresh x_icon-white"></i> <?php echo $__Context->lang->update ?></button>
								</div>
							</div>
						</div>
					</script>
				</div>
				<div class="_pagination" style="float:left"></div>
			</div>
		</section>
		<button type="button" class="x_close" data-admin-hide="#downloadSkin">&times;</button>
	</div>
	<div class="col" id="auth" style="display:none">
		<fieldset>
			<h1><?php echo $__Context->lang->grant ?></h1>
			<div class="cnt">
				<ul class="_list">
					<script id="tmpl_permItem" type="text/x-jquery-tmpl">
					<li>
						<label for="auth${PermId}">${PermTitle}</label>
						<select id="auth${PermId}">
							<option class="_group_all" value="0"><?php echo $__Context->lang->grant_to_all ?></option>
							<option class="_group_loggedin" value="-1"><?php echo $__Context->lang->grant_to_login_user ?></option>
							<option class="_group_signedup" value="-2"><?php echo $__Context->lang->grant_to_site_user ?></option>
							<option class="_group_manager" value="-3"><?php echo $__Context->lang->grant_to_admin ?></option>
							<option class="_group_selected" value="-10"><?php echo $__Context->lang->grant_to_group ?></option>
						</select>
						<div class="selected x_hide _groups _groups_${PermId}">
						</div>
					</li>
					</script>
					<script id="tmpl_perm_groupItem" type="text/x-jquery-tmpl">
							<label><input type="checkbox" value="${ID}" title="${Title}"> ${Title}</label>
					</script>
				</ul>
				<div class="x_btn-group">
					<button type="button" class="x_btn x_btn-primary _save"><?php echo $__Context->lang->cmd_confirm ?></button>
				</div>
			</div>
		</fieldset>
		<button type="button" class="x_close" data-admin-hide="#auth">&times;</button>
	</div>
	<!--상세설정-->
	<div class="col" id="fullSetup" style="display:none">
		<fieldset>
			<h1><?php echo $__Context->lang->full_settings ?></h1>
			<div class="cnt _setupHTML">
			</div>
			<div class="x_btn-group">
				<button type="button" class="x_btn x_btn-primary _save"><?php echo $__Context->lang->cmd_confirm ?></button>
			</div>
		</fieldset>
		<button type="button" class="x_close" data-admin-hide="#fullSetup">&times;</button>
	</div>
	<div class="col" id="html" style="display:none">
		<!--HTML/CSS-->
		<button type="button" class="x_close" data-admin-hide="#html">&times;</button>
	</div>
</div>
<iframe name="submitTarget" src="about:_blank" style="position:absolute; top:-10000px; left:-10000px; width:1025px;height:769px"></iframe>
<script>
	xe.lang.shortcut = '<?php echo $__Context->lang->shortcut ?>';
	xe.lang.msg_target_is_sub_of_origin = '<?php echo $__Context->lang->msg_target_is_sub_of_origin ?>';
	xe.lang.confirm_sitemap_delete = '<?php echo $__Context->lang->confirm_sitemap_delete ?>';
	xe.lang.confirm_menu_delete = '<?php echo $__Context->lang->confirm_menu_delete ?>';
	xe.lang.confirm_delete_all_contents = '<?php echo $__Context->lang->confirm_delete_all_contents ?>';
	xe.lang.confirm_shortcut_delete = '<?php echo $__Context->lang->confirm_shortcut_delete ?>';
	xe.lang.confirm_shortcut_desc = '<?php echo $__Context->lang->confirm_shortcut_desc ?>';
	xe.lang.confirm_delete_all_item = '<?php echo $__Context->lang->confirm_delete_all_item ?>';
	xe.lang.confirm_delete_all_sub_items_title = '<?php echo $__Context->lang->confirm_delete_all_sub_items_title ?>';
	xe.lang.confirm_delete_all_sub_items = '<?php echo $__Context->lang->confirm_delete_all_sub_items ?>';
	xe.lang.target_of_view_menu = '<?php echo $__Context->lang->target_of_view_menu ?>';
	xe.lang.success_saved = '<?php echo $__Context->lang->success_saved ?>';
	xe.lang.first_page = '<?php echo $__Context->lang->first_page ?>';
	xe.lang.last_page = '<?php echo $__Context->lang->last_page ?>';
	xe.lang.cmd_go_to_page = '<?php echo $__Context->lang->cmd_go_to_page ?>';
	xe.lang.input_new_layout_name = '<?php echo $__Context->lang->input_new_layout_name ?>';
	xe.lang.skip_new_layout_name = '<?php echo $__Context->lang->skip_new_layout_name ?>';
	xe.lang.confirm_delete = '<?php echo $__Context->lang->confirm_delete ?>';
	xe.lang.need_to_ftp_setup = '<?php echo $__Context->lang->need_to_ftp_setup ?>';
	xe.lang.go_to_ftp_setup = '<?php echo $__Context->lang->go_to_ftp_setup ?>';
	xe.lang.installation_completed = '<?php echo $__Context->lang->installation_completed ?>';
	xe.lang.go_to_site_design_setup = '<?php echo $__Context->lang->go_to_site_design_setup ?>';
	xe.lang.how_to_modify_menu = '<?php echo $__Context->lang->how_to_modify_menu ?>';
	xe.lang.can_drag_menu = '<?php echo $__Context->lang->can_drag_menu ?>';
	xe.lang.good_to_duplicate_layout = '<?php echo $__Context->lang->good_to_duplicate_layout ?>';
	xe.lang.img_uploaded = '<?php echo $__Context->lang->img_uploaded ?>';
	xe.lang.img_deleted = '<?php echo $__Context->lang->img_deleted ?>';
	xe.lang.no_use_layout = '<?php echo $__Context->lang->no_use_layout ?>';
	xe.lang.shortcut_desc = '<?php echo $__Context->lang->shortcut_desc ?>';
	xe.lang.msg_cannot_delete_homemenu = '<?php echo $__Context->lang->msg_cannot_delete_homemenu ?>';
	xe.lang.set_as_homepage = '<?php echo $__Context->lang->set_as_homepage ?>';
	xe.lang.has_been_set_as_homepage = '<?php echo $__Context->lang->has_been_set_as_homepage ?>';
	xe.lang.need_ftp_password = '<?php echo $__Context->lang->need_ftp_password ?>';
	xe.lang.need_ftp_password_title = '<?php echo $__Context->lang->need_ftp_password_title ?>';
	xe.lang.need_core_update = '<?php echo $__Context->lang->need_core_update ?>';
	xe.lang.need_core_update_continue = '<?php echo $__Context->lang->need_core_update_continue ?>';
	xe.lang.password = '<?php echo $__Context->lang->password ?>';
	xe.lang.not_found_module = '<?php echo $__Context->lang->not_found_module ?>';
</script>
<!--[if IE 7]>
<script>
jQuery(function($){
// IE .col width bug fix
	$('.col').each(function(){
		var $this = $(this);
		setTimeout(function(){
			var childW = $this.children().width();
			$this.width(220);
		},0);
	});
});
</script>
<![endif]-->
<script>
//<![CDATA[
/*
시작 모듈 지정 module_srl이 아닌 page_srl로
메뉴 복사 API에서 menu_srl 제거
메뉴 타입 노출
복사한 메뉴 삭제되면 붙여넣기 비활성화
*/
jQuery._xeAdminVar = {
	htLayoutName : {},
	htMLayoutName : {}
};
<?php if($__Context->act == 'dispMenuAdminSiteMap'){ ?>
function showMenuSelector($container, sSelectedModule){
	var $ = jQuery;
	var aMenuList = $._xeAdminVar.aMenuList;
	$container.html(createTreeMarkup(aMenuList, 0, "menuSelector_menuTree", "menuSelector_menuTreeNode"));
	var htInfo = htNodeInfo[$._xeAdminVar.sSelectedMenuSrl];
	// disable sitemap labels and shortcuts.
	$container.find('._nodeType_1, ._nodeType_3').parent('li').addClass('x_disabled');
	if(sSelectedModule){
		$container.find('._menu_url_'+sSelectedModule).click();
	}
}
function onSiteMapReceived(htData){
	var $ = jQuery;
	var aMenuList = htData.menuList;
	$._xeAdminVar.aMenuList = aMenuList;
	$("#siteMapTree").html(createTreeMarkup(aMenuList, 0));
	if($._xeAdminVar.sCopySourceMenuSrl){
		$('._edit_paste').attr('disabled', 'disabled');
		$('#siteMapTree ._isCut').removeClass('_isCut');
		$._xeAdminVar.sCopySourceMenuSrl = null;
		$._xeAdminVar.bCut = false;
	}
	var sInitiallyOpen = [];
	$("#siteMapTree")
		.jstree({
			// the `plugins` array allows you to configure the active plugins on this instance
			"plugins" : ["themes","html_data","ui","crrm","dnd"],
			//"themes","json_data","ui","crrm","cookies","dnd","search","types","hotkeys","contextmenu"
			// each plugin you have included can have its own config object
			"crrm" : {
				"move" : {
					"check_move" : function (m) {
						var p = this._get_parent(m.o);
						// root is not draggable
						if(p === -1) return false;
						// a menu cann't be dragged to a root position
						p = this._get_parent(m.np);
						if(!p) return false;
						return true;
					}
				}
			},
			"core" : {  }
			//"core" : { "initially_open" : [ "nhtml_1" ] }
			// it makes sense to configure a plugin only if overriding the defaults
		})
		.bind("loaded.jstree", function (event, data) {
			data.inst.open_all();
			var sRenameId = $._xeAdminVar.sRenameOnload;
			$._xeAdminVar.sRenameOnload = null;
			var sSelectOnload = $._xeAdminVar.sSelectOnload;
			$._xeAdminVar.sSelectOnload = null;
			if(sRenameId){
				//console.log('renaming', sRenameId);
				$("#siteMapTree").jstree("rename", $("#menu"+sRenameId));
				$("#menu"+sRenameId)[0].scrollIntoView(true);
			}
			if(sSelectOnload){
				//console.log('selecting', sSelectOnload);
				var el = $("#menu"+sSelectOnload)[0];
				if(el){
					$("#siteMapTree").jstree("select_node", $(el));
					el.scrollIntoView(true);
				}
			}
		})
		.bind("rename.jstree", function(event, data){
			$("#siteMapTree").removeClass("_node_renaming");
		})
		.bind("rename_node.jstree", function(event, data){
			var sTitle = data.args[1];
			var htOldInfo = htNodeInfo[$._xeAdminVar.sSelectedMenuSrl];
			if(htOldInfo.sText === sTitle) return;
			var sMenuSrl = $._xeAdminVar.sSelectedMenuSrl;
			renameSitemap(sMenuSrl, sTitle);
		})
		.bind("create_node.jstree", function (event, data) {
		})
		.bind("select_node.jstree", function(event, data){
			$("#siteMapTree input").blur();
			//console.log($("#siteMapTree input"));
			var sSelectedMenuSrl = data.rslt.obj.attr("id").replace("menu", "");
			$._xeAdminVar.sSelectedMenuSrl = sSelectedMenuSrl;
			showProp(sSelectedMenuSrl);
		})
		.bind("move_node.jstree", function(event, data){
			//console.log(event, data);
			/*
				._get_move ()
				Returns the lastly prepared move. The returned object contains:
				.o - the node being moved
				.r - the reference node in the move
				.ot - the origin tree instance
				.rt - the reference tree instance
				.p - the position to move to (may be a string - "last", "first", etc)
				.cp - the calculated position to move to (always a number)
				.np - the new parent
				.oc - the original node (if there was a copy)
				.cy - boolen indicating if the move was a copy
				.cr - same as np, but if a root node is created this is -1
				.op - the former parent
				.or - the node that was previously in the position of the moved node
			*/
			var aMoveInfo = data.args[0];
			var aSource = aMoveInfo.o;
			var aTargetPosRef = aMoveInfo.r;
			var sTargetPos = aMoveInfo.p;
			var aNewParent = aMoveInfo.np;
			//console.log(aSource, aTargetPosRef, sTargetPos, aNewParent);
			//console.log(aSource[0], aTargetPosRef[0], sTargetPos, aNewParent[0]);
			var aNode, htParentInfo, htTargetInfo, htData, sMenuSrl, sTargetSrl, sParentSrl, nIdx;
			//htData = $.parseJSON($(htSource).attr('data-param');
			//console.log(sTargetPos);
			sMenuSrl = aSource[0].id.replace("menu", "");
			sParentSrl = aNewParent[0].id.replace("menu", "");
			sTargetSrl = aTargetPosRef[0].id.replace("menu", "");
			/*
console.log(123, aTargetPosRef);
console.log(sTargetSrl);
console.log(htNodeInfo);
*/
			switch(sTargetPos){
				case "after":
					// use the values as-is
				break;
				case "before":
					htTargetInfo = htNodeInfo[sTargetSrl];
					htParentInfo = htNodeInfo[htTargetInfo.sParentSrl];
					//console.log(htParentInfo);
					aNode = htParentInfo.aNode;
					for(var i=0, nLen=aNode.length; i<nLen; i++){
						//console.log(aNode[i].sText, aNode[i].sNodeSrl, "->", sTargetSrl);
						if(aNode[i].sNodeSrl == sTargetSrl){
							//console.log('found');
							break;
						}
					}
					//console.log(999, i);
					if(i === 0){
						sTargetSrl = 0;
					}else{
						sTargetSrl = aNode[i - 1].sNodeSrl;
					}
				break;
				case "first":
					sTargetSrl = 0;
				break;
				case "last":
					htParentInfo = htNodeInfo[sParentSrl];
					//console.log(222, htParentInfo, sParentSrl);
					aNode = htParentInfo.aNode;
					if(aNode.length == 0){
						sTargetSrl = 0;
					}else{
						sTargetSrl = aNode[aNode.length - 1].sNodeSrl;
					}
				break;
				default:
				break;
			}
			var params = {};
			params['mode'] = 'move';
			// 위치를 이동 할 메뉴의 srl
			params['target_srl'] = sMenuSrl;
			// 어느 부모 밑으로 이동 할지
			params['parent_srl'] = sParentSrl;
			// parent_srl 하위의 어느 노드 뒤에 삽입 할지.
			// 0: parent_srl 바로 밑에.
			// 다른 값: 해당 srl을 가진 노드 밑에
			params['source_srl'] = sTargetSrl;
			//exec_xml("menu","procMenuAdminMoveItem", params, completeTmp);
			$.exec_json("menu.procMenuAdminMoveItem", params, function(htData){
				// select the newly created menu
				//$._xeAdminVar.sSelectOnload = htData.menu_item_srl;
				// select currently selected menu
				$._xeAdminVar.sSelectOnload = sMenuSrl;
				loadSiteMap();
			});
		});
	$('#site_map').nextAll().hide();
}
var htNodeInfo = {};
// return html
function createTreeMarkup(aNode, sParentSrl, sMenuTree, sMenuTreeNode){
	sMenuTree = sMenuTree || "menuTree";
	sMenuTreeNode = sMenuTreeNode || "menuTreeNode";
	var $ = jQuery;
	if(aNode.length == 0){
		return "";
	}
	var sActiveBtn, sNormalBtn, sHoverBtn, sExpand, sLink, aSubNodes, sNodeSrl, sOpenWindow, sParentSrl, nSelected, sText, sURL, sIsStartModule, aSubNode, sModuleType;
	// 1: Sitemap node, 2: Menu node
	var nNodeType;
	var sResult = "";
	var sTargetPanel;
	for(var i=0, nLen=aNode.length; i<nLen; i++){
		aNode[i].sParentSrl = sParentSrl;
		// Only sitemap node has menuSrl
		if(aNode[i].menuSrl){
			nNodeType = 1;
		}else{
			nNodeType = 2;
		}
		sURL = "";
		switch(nNodeType){
			/*
				list: Array[1]
				menuSrl: "59"
				title: "welcome_menu"
			*/
			case 1:
			sText  = aNode[i].title;
			sNodeSrl  = aNode[i].menuSrl;
			aSubNode  = aNode[i].menuItems.list;
			sTargetPanel = "#propertiesRoot";
			break;
			/*
				active_btn: ""
				expand: "N"
				hover_btn: ""
				href: ""
				link: "menu1"
				list: Array[1]
				node_srl: "60"
				normal_btn: ""
				open_window: "N"
				parent_srl: "0"
				selected: 0
				text: "menu1"
				url: ""
				is_start_module: 1 or true
			*/
			case 2:
			sText  = aNode[i].text;
			sLink  = aNode[i].link;
			sURL  = aNode[i].url;
			sNodeSrl  = aNode[i].node_srl;
			//sParentSrl  = aNode[i].parent_srl;
			sExpand  = aNode[i].expand;
			sOpenWindow  = aNode[i].open_window;
			nSelected  = aNode[i].selected;
			sActiveBtn  = aNode[i].active_btn;
			sNormalBtn  = aNode[i].normal_btn;
			sHoverBtn = aNode[i].hover_btn;
			sIsStartModule = aNode[i].is_start_module;
			aSubNode  = aNode[i].list;
			sModuleType = aNode[i].module_type;
			sModule = aNode[i].module;
			sTargetPanel = "#properties";
			if(aNode[i].is_shortcut === "Y"){
				sModuleType = "_SHORTCUT";
				sURL = "";
				aNode[i].bShortCut = true;
			}else{
				aNode[i].bShortCut = false;
			}
			break;
			default:
		}
		htNodeInfo[sNodeSrl] = aNode[i];
		htNodeInfo[sNodeSrl].aNode = aSubNode || [];
		htNodeInfo[sNodeSrl].nNodeType = nNodeType;
		htNodeInfo[sNodeSrl].sNodeSrl = sNodeSrl;
		htNodeInfo[sNodeSrl].sText = sText;
		htNodeInfo[sNodeSrl].sMenuNameKey = htNodeInfo[sNodeSrl].menu_name_key;
		htNodeInfo[sNodeSrl].sModuleType = sModuleType;
		sSubTree = "";
		if(aSubNode && aSubNode.length>0){
			//sSubTree = createTreeMarkup(aSubNode, aNode[i], sMenuTree, sMenuTreeNode);
			sSubTree = createTreeMarkup(aSubNode, sNodeSrl, sMenuTree, sMenuTreeNode);
		}
		/*
		if(sMenuType === "shortcut"){
			sText = sText + " ${s}";
		}
		*/
		var sTextWithIcons = sText;
		if(sIsStartModule){
			sTextWithIcons += " ${h}";
		}
		if(htNodeInfo[sNodeSrl].sModuleType === "_SHORTCUT"){
			sTextWithIcons += " ${s}";
			nNodeType = 3;
		}
		sResult += $.tmpl( sMenuTreeNode, {MenuTitleWithHome:sTextWithIcons,MenuTitle:sText,MenuId:sNodeSrl,MenuUrl:sURL,NodeType:nNodeType,SubTree:sSubTree,Target:sTargetPanel} ).get()[0].outerHTML.replace("${h}", "<i class='x_icon-home' title='Home Page'>[HOME]</i>").replace("${s}", "<i class='x_icon-share' title='Shortcut'></i>");
	}
	return $.tmpl( sMenuTree, {Nodes:sResult} ).get()[0].outerHTML;
}
function renameSitemap(sMenuSrl, sTitle){
	var $ = jQuery;
	var params = {};
	params.title = sTitle;
	params.menu_srl = sMenuSrl;
	$.exec_json("menu.procMenuAdminUpdate", params, function(htData){
		$._xeAdminVar.sSelectOnload = sMenuSrl;
		loadSiteMap();
		return;
	});
}
function showProp(sMenuId){
	var $ = jQuery;
	$._htMarkupActionParam = {sMenuId: sMenuId};
	if(htNodeInfo[sMenuId].nNodeType === 1){
		$("#propertiesRoot").show(null, null, null, {bOpeningProp: true});
	}else{
		$("#properties").show(null, null, null, {bOpeningProp: true});
	}
}
function loadSiteMap(){
	var $ = jQuery;
	var params = {};
	var response_tags = new Array('menuList');
	params['menu_srl'] = 0;
	$.exec_json("menu.getMenuAdminSiteMap", params, onSiteMapReceived);
}
<?php } ?>
function clearInputs($elm){
	var $ = jQuery;
	$elm.find('input').val("");
}
function setItemTypes(htTypes){
	var $ = jQuery;
	$.test=htTypes;
	$._xeAdminVar.htItemTypes = htTypes || {};
	$._xeAdminVar.htItemTypes._SHORTCUT = {
		title: xe.lang.shortcut,
		moduleName:'',
		description : xe.lang.shortcut_desc
	}
	//console.log($._xeAdminVar.htItemTypes);
}
function setAllModules(htModules){
	var $ = jQuery;
	$.test = htModules;
	$._xeAdminVar.htAllModules = htModules || {};
	$._xeAdminVar.htAllModules._SHORTCUT = {
		title: xe.lang.shortcut,
		moduleName:'',
		description : xe.lang.shortcut_desc
	}
}
jQuery(function($){
	$.fn.outerHTML = function(){
		// IE, Chrome & Safari will comply with the non-standard outerHTML, all others (FF) will have a fall-back for cloning
		return (!this.length) ? this : (this[0].outerHTML || (
		  function(el){
			  var div = document.createElement('div');
			  div.appendChild(el.cloneNode(true));
			  var contents = div.innerHTML;
			  div = null;
			  return contents;
		})(this[0]));
	}
	$.fn.prevUntilAnd = function(){
		var $result = $.fn.prevUntil.apply(this, arguments);
		var $match = ($result.length>0?$result.last():$(this)).prev();
		if($match.length>0) $.merge($result, $match);
		return $result;
	}
	<?php if($__Context->act == 'dispMenuAdminSiteMap'){ ?>
	$( "#tmpl_menuTree" ).template( "menuTree" );
	$( "#tmpl_menuTreeNode" ).template( "menuTreeNode" );
	$( "#tmpl_menuSelector_menuTree" ).template( "menuSelector_menuTree" );
	$( "#tmpl_menuSelector_menuTreeNode" ).template( "menuSelector_menuTreeNode" );
	loadSiteMap();
	$.exec_json("menu.getMenuAdminInstalledMenuType", {}, function(htData){
		setItemTypes(htData.menu_types);
		setAllModules(htData.all_modules);
	});
	<?php } ?>
	<?php if($__Context->act == 'dispMenuAdminSiteDesign'){ ?>
	$._xeAdminVar.bSiteDesignMode = true;
	//$('#design').nextAll().hide();
	setTimeout(function(){$('#design').show();},0);
	<?php } ?>
	$._xeAdminVar.htPrevSetting = {};
	$("#tmpl_noDownloadableItem").template( "noDownloadableItem" );
	$("#tmpl_downloadableItem").template( "downloadableItem" );
	$("#tmpl_pagination").template( "pagination" );
	$("#tmpl_pagination_list").template( "paginationList" );
	$("#tmpl_pagination_jump").template( "paginationJump" );
	function createPagination(htOptions){
		var $PlaceHolder = htOptions.$PlaceHolder;
		var fnCallback = htOptions.fnCallback;
		var nCurPage = htOptions.nCurPage;
		var nTotalPages = htOptions.nTotalPages;
		var sToFirstText = htOptions.sToFirstText;
		var sToLastText = htOptions.sToLastText;
		var sToText = htOptions.sToText;
		var sSearchKeyword = htOptions.sSearchKeyword;
		$PlaceHolder.addClass('_pagination');
		$PlaceHolder.data('search_keyword', sSearchKeyword);
		nCurPage = parseInt(nCurPage);
		nTotalPages = parseInt(nTotalPages);
		var nMaxList = 5;
		var $Result = $.tmpl( "pagination", {});
		var nStart = nCurPage - parseInt(nMaxList/2);
		if(nStart <= 0) nStart = 1;
		// -1 because it starts from "nStart", not "after nStart".
		var nLast = nStart + nMaxList - 1;
		if(nLast > nTotalPages){
			nLast = nTotalPages;
			if(nLast >= nMaxList) nStart = nLast - nMaxList + 1;
		}
		var sActiveClass, sListHTML = "";
		var sPageJump = $.tmpl("paginationJump", {GoText: sToText, LastPage:nTotalPages})[0].outerHTML
		if(nCurPage === 1) sActiveClass = "x_disabled";
		sListHTML +=  $.tmpl("paginationList", {Page: 1, PageText: sToFirstText, ActiveClass:sActiveClass})[0].outerHTML;
		if(nCurPage > nTotalPages/2 && nTotalPages > nMaxList){
			sListHTML +=  sPageJump;
		}
		for(var i=nStart; i<=nLast; i++){
			sActiveClass = "";
			if(i === nCurPage) sActiveClass = "x_active";
			sListHTML +=  $.tmpl("paginationList", {Page: i, PageText:i, ActiveClass:sActiveClass})[0].outerHTML;
		}
		if(!(nCurPage > nTotalPages/2) && nTotalPages > nMaxList){
			sListHTML +=  sPageJump;
		}
		if(nCurPage === nTotalPages) sActiveClass = "x_disabled";
		sListHTML +=  $.tmpl("paginationList", {Page: nTotalPages, PageText: sToLastText, ActiveClass:sActiveClass})[0].outerHTML;
		$Result.find('._list').html(sListHTML);
		$PlaceHolder.html("");
		$PlaceHolder.append($Result);
		if(sSearchKeyword){
			$PlaceHolder.find('input[name=search_keyword]').val(sSearchKeyword);
		}
		$.data($PlaceHolder[0], "fnCallback", fnCallback);
	}
	$(document.body).on('click', '._pagination ._search', function(ev){
		ev.preventDefault();
		var sSearchKeyword = $(this).closest('._pagination').find('input[name=search_keyword]').val();
		$.data($(this).closest('._pagination')[0], "fnCallback")({
			page: 1,
			search_keyword: sSearchKeyword
		});
	});
	$(document.body).on('click', '._pagination ._cancel', function(ev){
		ev.preventDefault();
		$.data($(this).closest('._pagination')[0], "fnCallback")({
			page: 1,
			search_keyword: ""
		});
	});
	$(document.body).on('click', '._pagination ._toPage', function(ev){
		var sSearchKeyword = $(this).closest('._pagination').data('search_keyword');
		htParam = $.parseJSON($(this).attr('data-param'));
		$.data($(this).parents('._pagination')[0], "fnCallback")({
			page: htParam.page,
			search_keyword: sSearchKeyword
		});
	});
	$(document.body).on('click', '.x_pagination ._jumpTo', function(ev){
		var sSearchKeyword = $(this).closest('._pagination').data('search_keyword');
		htParam = $.parseJSON($(this).attr('data-param'));
		//console.log($(this).parent().find('input[name=page]'));
		var nPage = parseInt($(this).parent().find('input[name=page]').val());
		$.data($(this).parents('._pagination')[0], "fnCallback")({
			page: nPage,
			search_keyword: sSearchKeyword
		});
	});
	//$.jstree._themes = "PATH/TO/FOLDER/";
	//$.jstree._themes = "/maserati/modules/menu/tpl/css/themes/";
	$.jstree._themes = '<?php echo getNotEncodedFullUrl("") ?>/modules/menu/tpl/css/themes/';
	$(document.body).on("click", ".x div.col a, .x div.col button", function(ev){
		// FF keeps the focus, making the button highlighted even after the panel is closed.
		$(this).blur();
	});
	// Prepare parms
	$(document.body).on("click", ".x [data-param]", function(ev){
		$._htMarkupActionParam = $.parseJSON($(this).attr('data-param'));
		return false;
	});
	// TARGET toggle
	$(document.body).on("click", ".x [data-admin-toggle]", function(ev){
		$($(this).attr('data-admin-toggle')).toggle();
		ev.preventDefault();
	});
	// TARGET show
	$(document.body).on("click", ".x [data-admin-show]", function(ev){
		var $anchor = $(this);
		var $target = $($(this).attr('data-admin-show'));
		showTargetClicked($anchor, $target);
		ev.preventDefault();
	});
	function showTargetClicked($anchor, $target){
		$anchor.parents('.col').next().hide();
		// change selected status of the navigation li
		if($anchor.find('i.x_icon-circle-arrow-right').length > 0){
			$anchor.parent('li').addClass('active').siblings('li').removeClass('active');
		}
		$target.show();
	}
	// TARGET hide
	$(document.body).on("click", ".x [data-admin-hide]", function(ev){
		var $target = $($(this).attr('data-admin-hide'));
		$target.hide();
	});
	$(document.body).on("click", ".x .showProp", function(ev){
		var sMenuId = $._htMarkupActionParam.sMenuId;
		$("#siteMapTree").jstree("deselect_all");
		$("#siteMapTree").jstree("select_node", "#menu"+sMenuId);
	});
	$(document.body).on("click", '._menuSelector_menuTreeContainer a', function(){
		if($(this).hasClass('_nodeType_1')){
			$.xeMsgBox.alert(xe.msg_no_root);
			return;
		}
		if($(this).hasClass('_nodeType_3')){
			$.xeMsgBox.alert(xe.msg_no_shortcut);
			return;
		}
		$(this).closest('._menuSelector_menuTreeContainer').prevAll('input._linkMenuTitle').val($._htMarkupActionParam.sMenuTitle);
		//$(this).closest('.clone').prev('input[type="text"]').val($._htMarkupActionParam.sMenuTitle + " ["+$._htMarkupActionParam.sMenuUrl+"]");
		$(this).closest('._menuSelector_menuTreeContainer').prev('input._linkMenuSrl').val($._htMarkupActionParam.sMenuId);
		$(this).closest('._menuSelector_menuTreeContainer').find('li.x_selected').removeClass('x_selected');
		$(this).closest('li').addClass('x_selected');
	});
	function scrollToRight(){
		$('#site').scrollTo($('#site')[0].scrollWidth, 0, {duration: 0 } );
	}
	function scrollToTop($Area){
		$Area.scrollTo(0, 0, {duration: 0 } );
	}
	<?php if($__Context->act == 'dispMenuAdminSiteMap'){ ?>
	$("#site_map ._addSiteMap").click(function(){
		$("#siteMapTree").jstree("deselect_all");
		$("#siteMapTree").jstree("create", null, "first", { data: "New Sitemap" }, null, true);
	});
	$('#propertiesRoot').bind("show", function(ev, htOpt){
		$('#site_map').next().hide(null, null, null, htOpt);
		var sMenuId = $._htMarkupActionParam.sMenuId;
		var htInfo = htNodeInfo[sMenuId];
		$(ev.target).find('.title').text(htInfo.sText);
	});
	$('#propertiesRoot').bind("hide", function(ev, htOpt){
		if(htOpt && htOpt.bOpeningProp) return;
		if($('#properties').is(':visible')) return;
		$("#siteMapTree").jstree("deselect_all");
	});
	$('#properties ._edit_cut').click(function(){
		//console.log(1, $._xeAdminVar.sSelectedMenuSrl);
		$('._edit_paste').removeAttr('disabled');
		$('#site_map li._isCut').removeClass('_isCut');
		$._xeAdminVar.sCopySourceMenuSrl = $._xeAdminVar.sSelectedMenuSrl;
		$._xeAdminVar.bCut = true;
		$('#menu'+$._xeAdminVar.sCopySourceMenuSrl).addClass('_isCut');
	});
	$('#add_sitemap').bind('hide', function(){
		var $panel = $(this);
		$panel.find('INPUT._sitemapName').val('');
	});
	$('#add_sitemap ._save').click(function(){
		var $panel = $('#add_sitemap');
		var sTitle = $panel.find('INPUT._sitemapName').val();;
		var params = {};
		params['title'] = sTitle;
		$.exec_json("menu.procMenuAdminInsert", params, function(htData){
			//$._xeAdminVar.sRenameOnload = htData.menu_srl;
			//$._xeAdminVar.sSelectedMenuSrl = htData.menu_srl;
			$._xeAdminVar.sSelectOnload = htData.menu_srl;
			loadSiteMap();
			return;
		});
	});
	$('#sitemap_general').bind('show', function(){
		var sMenuId = $._xeAdminVar.sSelectedMenuSrl;
		var htInfo = htNodeInfo[sMenuId];
		var $panel = $(this);
		$panel.find('INPUT._sitemapName').val(htInfo.title);
	});
	$('#sitemap_general ._save').click(function(){
		var sTitle = $('#sitemap_general INPUT._sitemapName').val();
		renameSitemap($._xeAdminVar.sSelectedMenuSrl, sTitle);
		/*
		$.exec_json("menu.procMenuAdminUpdateItem", params, function(htData){
			if(htData.error !== 0){
				alert(htData.message);
				return;
			}
			// select currently selected menu
			$._xeAdminVar.sSelectOnload = $._xeAdminVar.sSelectedMenuSrl;
			loadSiteMap();
		});
		*/
	});
	$('#properties ._edit_copy').click(function(){
		//console.log(2, $._xeAdminVar.sSelectedMenuSrl);
		$('._edit_paste').removeAttr('disabled');
		$('#site_map li._isCut').removeClass('_isCut');
		$._xeAdminVar.sCopySourceMenuSrl = $._xeAdminVar.sSelectedMenuSrl;
		$._xeAdminVar.bCut = false;
	});
	$('._edit_paste').click(function(){
		//console.log($._xeAdminVar.sCopySourceMenuSrl);
		if(!$._xeAdminVar.sCopySourceMenuSrl) return;
		var params = {};
		if($._xeAdminVar.bCut){
			// can't paste into a child menu of the source menu
			var sParentSrl = $._xeAdminVar.sSelectedMenuSrl;
			 do{
				if(sParentSrl == $._xeAdminVar.sCopySourceMenuSrl){
					$.xeMsgBox.alert(xe.lang.msg_target_is_sub_of_origin);
					return;
				}
				sParentSrl = htNodeInfo[sParentSrl].sParentSrl;
			 }while(sParentSrl)
			$('._edit_paste').attr('disabled', 'disabled');
			params['mode'] = 'move';
			// 위치를 이동 할 메뉴의 srl
			params['target_srl'] = $._xeAdminVar.sCopySourceMenuSrl;
			// 어느 부모 밑으로 이동 할지
			params['parent_srl'] = $._xeAdminVar.sSelectedMenuSrl;
			// parent_srl 하위의 어느 노드 뒤에 삽입 할지.
			// 0: parent_srl 바로 밑에.
			// 다른 값: 해당 srl을 가진 노드 밑에
			params['source_srl'] = 0;
			$.exec_json("menu.procMenuAdminMoveItem", params, function(htData){
				// select currently selected menu
				$._xeAdminVar.sSelectOnload = params['target_srl'];
				loadSiteMap();
				//showQuickHelp('can_drag_menu');
			});
			$._xeAdminVar.sCopySourceMenuSrl = null;
		}else{
			//params['menu_srl'] = '61';
			params['parent_srl'] = $._xeAdminVar.sSelectedMenuSrl;
			params['menu_item_srl'] = $._xeAdminVar.sCopySourceMenuSrl;
			$.exec_json("menu.procMenuAdminCopyItem", params, function(htData){
				// select currently selected menu
				$._xeAdminVar.sSelectOnload = params['menu_item_srl'];
				loadSiteMap();
			});
		}
	});
	$("._delSiteMap").click(function(){
		$.xeMsgBox.confirmDialog({
			sTitle : xe.lang.confirm_sitemap_delete,
			sText : '<label><input type="checkbox"> ' + xe.lang.confirm_delete_all_item  + '</label>',
			bDanger : true,
			fnOnOK : function(){
				if(!$.xeMsgBox.$msgBox.find('input[type="checkbox"]').attr('checked')) return true;
				var sSelectedMenuSrl = $._xeAdminVar.sSelectedMenuSrl;
				var params = {};
				params['menu_srl'] = sSelectedMenuSrl;
				$.exec_json("menu.procMenuAdminDelete", params, function(htData){
					loadSiteMap();
				});
			},
			fnOnShow : function(){
				$.xeMsgBox.$msgBox.find("._ok").addClass("x_disabled");
				$.xeMsgBox.$msgBox.find('input[type="checkbox"]').click(function(){
					if($(this).attr('checked')){
						$.xeMsgBox.$msgBox.find("._ok").removeClass("x_disabled");
					}else{
						$.xeMsgBox.$msgBox.find("._ok").addClass("x_disabled");
					}
				});
			},
			fnOnHide : function(){
				$.xeMsgBox.$msgBox.find("._ok").removeClass("x_disabled");
			}
		});
	});
	$("._renameSiteMap").click(function(){
		$("#siteMapTree").jstree("rename");
		/*
		var sSelectedMenuSrl = $._xeAdminVar.sSelectedMenuSrl;
		var $node = $('#menu'+sSelectedMenuSrl);
		$node.addClass('_node_renaming');
		*/
		$("#siteMapTree").addClass('_node_renaming');
	});
	$('#properties').bind("show", function(ev, htOpt){
		if(ev.target != this) return;
		if(typeof($._xeAdminVar.htAllModules) == 'undefined') return;
		$('#site_map').next().hide(null, null, null, htOpt);
		var sMenuId = $._htMarkupActionParam.sMenuId;
		var htInfo = htNodeInfo[sMenuId];
		$(ev.target).find('.title').text(htInfo.sText);
		$(ev.target).find('.title').attr('href', htInfo.href);
		var title = htInfo.sModuleType;
		if($._xeAdminVar.htAllModules[htInfo.sModuleType]){
			title = $._xeAdminVar.htAllModules[htInfo.sModuleType].title;
		}
		if(!$._xeAdminVar.htAllModules[htInfo.sModuleType]){
			$(ev.target).find('.module_type').text(htInfo.sModuleType + '(' + xe.lang.not_found_module +')');
		}else{
			$(ev.target).find('.module_type').text($._xeAdminVar.htAllModules[htInfo.sModuleType].title);
		}
		if(htInfo.bShortCut){
			$(ev.target).removeClass('prop-general');
			$(ev.target).addClass('prop-shortcut');
		}else{
			$(ev.target).addClass('prop-general');
			$(ev.target).removeClass('prop-shortcut');
		}
		if(htInfo.is_start_module){
			$(ev.target).find('._chkUseAsHome').attr('checked', 'checked').attr('disabled', 'disabled').next('span').text(xe.lang.has_been_set_as_homepage);
		}else{
			$(ev.target).find('._chkUseAsHome').removeAttr('disabled').removeAttr('checked').next('span').text(xe.lang.set_as_homepage);
		}
		if(!htInfo.bShortCut){
			loadFullSetup();
		}
	});
	function loadFullSetup(){
		$.exec_json("menu.getMenuAdminDetailSetup", {
			menu_item_srl : htNodeInfo[$._xeAdminVar.sSelectedMenuSrl].sNodeSrl
		}, function(htData){
			$('#properties ._hasFullSetupX, #properties ._hasFullSetupO').hide();
			$('#properties').removeClass('_hasFullSetup');
			if(htData.simpleSetupHtml){
				$('#properties').addClass('_hasFullSetup');
				$('#fullSetup').find('._setupHTML').html(htData.simpleSetupHtml);
				var $form = $('#fullSetup form');
				$form.attr('target', 'submitTarget');
				$form.append($("<INPUT>").attr("type", "hidden").attr("name", "xe_js_callback").attr("value", "top.fullSetupSaved"));
				$('#properties ._hasFullSetupO').show();
			}else if(htData.setupUrl){
				$._xeAdminVar.sFullSetupUrl = htData.setupUrl;
				$('#properties ._hasFullSetupX').show();
			}
		});
	}
	top.fullSetupSaved = function(htData){
		$('#fullSetup').hide();
		loadFullSetup();
	};
	$('#properties').bind("hide", function(ev, htOpt){
		if(ev.target != this) return;
		if(htOpt && htOpt.bOpeningProp) return;
		if($('#propertiesRoot').is(':visible')) return;
		$("#siteMapTree").jstree("deselect_all");
	});
	$('#properties ._chkUseAsHome').click(function(){
		if($(this).attr('checked')){
			var params = {
				menu_item_srl : $._xeAdminVar.sSelectedMenuSrl,
				index_module_srl : htNodeInfo[$._xeAdminVar.sSelectedMenuSrl].module_srl
			};
			$.exec_json("admin.procInstallAdminUpdateIndexModule", params, function(htData){
				// select currently selected menu
				$._xeAdminVar.sSelectOnload =  $._xeAdminVar.sSelectedMenuSrl;
				loadSiteMap();
			});
		}
	});
	$('#add').bind("hide", function(){
	});
	$('#download').bind("show", function(ev){
	// ignore bubbled show events
		if(this !== ev.target){
			return;
		}
	//index.php?act=getAutoinstallAdminMenuPackageList
		$('#add').nextAll().hide();
		drawDownloadableList('download');
	});
	$('#download').bind("after-show", function(ev){
		scrollToRight();
	});
	$('#download').bind("hide", function(ev){
	// ignore bubbled show events
		if(this !== ev.target){
			return;
		}
		$('#download ._pagination').html("");
	});
	$('#add_menu').bind("show", function(ev){
		// ignore bubbled show events
		if(this !== ev.target){
			return;
		}
		$._xeAdminVar.sSelectedModuleName = $._htMarkupActionParam.moduleName;
		$._xeAdminVar.sSelectedModuleTitle = $._htMarkupActionParam.moduleTitle;
		var $description = $(this).find('._description');
		var $title = $(this).find("._title");
		$title.text($._xeAdminVar.sSelectedModuleTitle);
		var htItemType = $._xeAdminVar.htAllModules[$._xeAdminVar.sSelectedModuleName];
		var $link = $(this).find("._link");
		$description.text(htItemType.description || "");
		if(htItemType.package_srl && htItemType.url){
			$link.show();
			$link.attr('target', '_blank');
			$link.attr('href', htItemType.url);
		}else{
			$link.hide();
			$link.removeAttr('target');
			$link.removeAttr('href');
		}
		if($._xeAdminVar.sSelectedModuleName === "_SHORTCUT"){
			$(this).removeClass("page");
			$(this).addClass("url");
		}else{
			$(this).addClass("page");
			$(this).removeClass("url");
		}
		// Insert help link
		if($._xeAdminVar.sSelectedModuleName === "ARTICLE"){
			$title.append(' <a class="x_icon-question-sign" href="./admin/help/index.html#UMAN_faq_article" target="_blank"><?php echo $__Context->lang->help ?></a>');
		} else if($._xeAdminVar.sSelectedModuleName === "WIDGET"){
			$title.append(' <a class="x_icon-question-sign" href="./admin/help/index.html#UMAN_faq_widget" target="_blank"><?php echo $__Context->lang->help ?></a>');
		} else if($._xeAdminVar.sSelectedModuleName === "OUTSIDE"){
			$title.append(' <a class="x_icon-question-sign" href="./admin/help/index.html#UMAN_faq_opage" target="_blank"><?php echo $__Context->lang->help ?></a>');
		} else if($._xeAdminVar.sSelectedModuleName === "_SHORTCUT"){
			$title.append(' <a class="x_icon-question-sign" href="./admin/help/index.html#UMAN_faq_shortcut" target="_blank"><?php echo $__Context->lang->help ?></a>');
		}
		$(this).find('.lang_code').trigger('reload-multilingual');
		showMenuSelector($(this).find('._menuSelector_menuTreeContainer'));
	});
	$('#add_menu').bind("after-show", function(ev){
		scrollToRight();
	});
	$('#add_menu').bind("hide", function(ev){
		if(this !== ev.target) return;
		clearInputs($('#add_menu'));
		 $('#add_menu .x_active ._linkUrl').val('http://');
	});
	$('#add_menu ._save').bind("click", function(){
		var sMenuName = $('#add_menu ._menuName').val();
		var sUrl = $('#add_menu ._mid').val();
		var sTargetKey = "module_id";
		var sSelectedModuleName = $._xeAdminVar.sSelectedModuleName;
		var sSelectedMenuSrl = $._xeAdminVar.sSelectedMenuSrl;
		//console.log($._xeAdminVar, sSelectedModuleName, sSelectedMenuSrl, sMenuName, sUrl);
		var isShortCut = "N";
		var $labels;
		// URL?
		if($._xeAdminVar.sSelectedModuleName === "_SHORTCUT"){
			isShortCut = "Y";
			sSelectedModuleName = "";
			$labels = $('#add_menu .x_nav-tabs li');
			for(var nSelectedTabIdx=0, nLen=$labels.length; nSelectedTabIdx<nLen; nSelectedTabIdx++){
				if($($labels[nSelectedTabIdx]).hasClass("x_active")) break;
			}
			if(nSelectedTabIdx === 0){
				sUrl = $('#add_menu .x_active ._linkUrl').val();
				if(!sUrl || sUrl === "http://"){
					$.xeMsgBox.alert('URL is required');
					return;
				}
				//if(!sUrl.match(/^http:\/\//)){
				//	sUrl = "http://"+sUrl;
				//}
			}else{
				sUrl = $('#add_menu .x_active ._linkMenuSrl').val();
/*
				if(!sUrl){
					alert("Target mid is required");
					return;
				}
*/
			}
			sTargetKey = 'shortcut_target';
		}
		var params = {};
		var response_tags = new Array('menu_item_srl');
		params['ruleset'] = "insertMenuItem";
		params['act'] = "procMenuAdminInsertItem";
		params['menu_name_key'] = "";
		params['menu_name'] = sMenuName;
		params['module_type'] = sSelectedModuleName;
		params['menu_open_window'] = "N";
		params['menu_expand'] = "N";
		params['is_shortcut'] = isShortCut;
		params['parent_srl'] = sSelectedMenuSrl;
		params[sTargetKey] = sUrl;
		/*
		Array
		(
			[error] => "0"
			[message] => "등록했습니다."
			[menu_item_srl] => "2"
		)
		*/
		$.exec_json("menu.procMenuAdminInsertItem", params, function(htData){
			// select the newly created menu
			//$._xeAdminVar.sSelectOnload = htData.menu_item_srl;
			// select currently selected menu
			$._xeAdminVar.sSelectOnload = $._xeAdminVar.sSelectedMenuSrl;
			loadSiteMap();
			showQuickHelp('how_to_modify_menu');
		});
	});
	$('#default').bind("show", function(ev){
		if(this !== ev.target) return;
		var htInfo = htNodeInfo[$._xeAdminVar.sSelectedMenuSrl];
		if(htInfo.sModuleType === "_SHORTCUT"){
			$(this).addClass('url');
			$(this).removeClass('page');
		}else{
			$(this).removeClass('url');
			$(this).addClass('page');
		}
		//$(this).find('#menuName').val(htInfo.sText);
		$(this).find('#menuName').val(htInfo.sMenuNameKey);
		//menu_name_key
		$(this).find('#mid2').val(htInfo.url);
		//console.log(htInfo);
		if(htInfo.sModuleType === "_SHORTCUT"){
		//console.log(htInfo);
			//if(htInfo.module){
			if(htInfo.href !== htInfo.url){
				// Menu shortcut
				$(this).find('a[href="#fix_linkMenu"]').click();
				//$(this).find('._menu_link').val();
				showMenuSelector($(this).find('._menuSelector_menuTreeContainer'), htInfo.url);
			}else{
				// URL shortcut
					var htInfo_url = htInfo.url;
					htInfo_url = htInfo_url.replace(/&amp;/g, '&');
					htInfo.url = htInfo_url;
				$(this).find('a[href="#fix_linkUrl"]').click();
				$(this).find('._url_link').val($('<div />').text(htInfo.url).text());
				showMenuSelector($(this).find('._menuSelector_menuTreeContainer'));
			}
		}else{
			$(this).find('._browserTitle').val(htInfo.browser_title);
		}
		if(htInfo.open_window === "N"){
			$(this).find('._newWindow').removeAttr("checked");
		}else{
			$(this).find('._newWindow').attr("checked", "checked");
		}
		if(htInfo.expand === "N"){
			$(this).find('._leaveUnfolded').removeAttr("checked");
		}else{
			$(this).find('._leaveUnfolded').attr("checked", "checked");
		}
		$(this).find('.lang_code').trigger('reload-multilingual');
	});
	$('#default').bind("after-show", function(ev){
		scrollToRight();
	});
	$('#default').bind("hide", function(ev){
		if(this !== ev.target) return;
		$(this).find('._url_link').val('');
	});
	$('#default ._save').click(function(){
		var htInfo = htNodeInfo[$._xeAdminVar.sSelectedMenuSrl];
		var sMenuName = $('#default ._menuName').val();
		var sMID;
		var sNewWindow = $('#default ._newWindow').attr("checked")?"Y":"N";
		var sLeaveUnfolded = $('#default ._leaveUnfolded').attr("checked")?"Y":"N";
		var sBrowserTitle = $('#default ._browserTitle').val();
		var sSelectedModuleName = $._xeAdminVar.sSelectedModuleName;
		var sSelectedMenuSrl = $._xeAdminVar.sSelectedMenuSrl;
		var params = {};
		if(htInfo.sModuleType === "_SHORTCUT"){
			if($('#fix_linkMenu').css("display") === "none"){
				sMID = $('#default ._url_link').val();
			}else{
				sMID = $('#default ._linkMenuSrl').val();
			}
			params['shortcut_target'] = sMID;
		}else{
			sMID = $('#default ._mid').val();
			params['module_id'] = sMID;
		}
		params['menu_item_srl'] = sSelectedMenuSrl;
		params['menu_name'] = sMenuName;
		params['menu_open_window'] = sNewWindow;
		params['menu_expand'] = sLeaveUnfolded;
		params['browser_title'] = sBrowserTitle;
//console.log(params);return;
		$.exec_json("menu.procMenuAdminUpdateItem", params, function(htData){
			// select currently selected menu
			$._xeAdminVar.sSelectOnload = $._xeAdminVar.sSelectedMenuSrl;
			loadSiteMap();
		});
	});
	top.onBtnImgUploadedTO = function(htData){
		$._xeAdminVar.nBtnUploaded = null;
		if($._xeAdminVar.bBtnUploadCompleted){
			top.onBtnImgUploaded();
		}
	};
	top.onBtnImgUploaded = function(htData){
		$._xeAdminVar.bBtnUploadCompleted = true;
		if($._xeAdminVar.nBtnUploaded){
			return;
		}
		$('#imgbtn').show();
		/*
		if(htData.normal_btn || htData.hover_btn || htData.active_btn){
			showQuickHelp('img_uploaded');
		}else{
			showQuickHelp('img_deleted');
		}
		*/
	}
	var $imgBtnForms = $("#imgbtn form");
	$imgBtnForms.find('input[name=act]').val('procMenuAdminButtonUpload');
	$imgBtnForms.find('input[name=mid]').remove();
	$imgBtnForms.find('input[name=vid]').remove();
	$('#imgbtn').on('show', function(ev){
		if(this !== ev.target) return;
		// http://code.google.com/p/xe-core/wiki/Menu_Button_load
		$.exec_json("menu.getMenuAdminItemInfo", {
			menu_item_srl : htNodeInfo[$._xeAdminVar.sSelectedMenuSrl].sNodeSrl
		}, BtnInfoReceived);
	});
	$('#imgbtn').bind("after-show", function(){
		scrollToRight();
	});
	function BtnInfoReceived(htData){
		$('#imgbtn input[name=menu_item_srl]').val(htNodeInfo[$._xeAdminVar.sSelectedMenuSrl].sNodeSrl);
		// reset the file inputs
		$('#imgbtn input[type=file]').each(function(){
			($($(this).outerHTML())).insertAfter($(this));
			$(this).remove();
		});
		$('#imgbtn input[type=file]').change(function(){
			var $form = $(this).closest('form');
			$form.find('IMG._thumbnail').attr('src', 'common/img/msg.loading.gif');
			$form.addClass('_imgUploaded');
			$._xeAdminVar.bBtnUploadCompleted = false;
			if($._xeAdminVar.nBtnUploaded) clearTimeout($._xeAdminVar.nBtnUploaded);
			$._xeAdminVar.nBtnUploaded = setTimeout(top.onBtnImgUploadedTO, 5000);
			$form.submit();
		});
		if(htData.menu_item.normal_btn){
			$('#imgbtn form._btn_normal img').attr('src', htData.menu_item.normal_btn);
			$('#imgbtn form._btn_normal').addClass('_imgUploaded');
		}else{
			$('#imgbtn form._btn_normal').removeClass('_imgUploaded');
		}
		if(htData.menu_item.hover_btn){
			$('#imgbtn form._btn_hover img').attr('src', htData.menu_item.hover_btn);
			$('#imgbtn form._btn_hover').addClass('_imgUploaded');
		}else{
			$('#imgbtn form._btn_hover').removeClass('_imgUploaded');
		}
		if(htData.menu_item.active_btn){
			$('#imgbtn form._btn_selected img').attr('src', htData.menu_item.active_btn);
			$('#imgbtn form._btn_selected').addClass('_imgUploaded');
		}else{
			$('#imgbtn form._btn_selected').removeClass('_imgUploaded');
		}
		/*
		[normal_btn] =>
		[hover_btn] =>
		[active_btn] =>
		*/
	}
	/*
	$('#details').on('show', function(ev){
		if(this !== ev.target) return;
		$.exec_json("menu.getMenuAdminDetailSetup", {
			menu_item_srl : htNodeInfo[$._xeAdminVar.sSelectedMenuSrl].sNodeSrl
		}, function(htData){
			$.ajax({
			  url: htData.setupUrl,
			  context: document.body
			}).done(function(sData) {
//			  console.log(999, sData);
			});
			//htData.setupUrl
		});
	});
	*/
	$('#auth').on('show', function(ev){
		if(this !== ev.target) return;
		// https://code.google.com/p/xe-core/wiki/MenuPerm?ts=1350276450&updated=MenuPerm
		$.exec_json("menu.getMenuAdminItemInfo", {
			menu_item_srl : htNodeInfo[$._xeAdminVar.sSelectedMenuSrl].sNodeSrl
		}, PermAReceived);
	});
	$('#auth').bind('after-show', function(ev){
		scrollToRight();
	});
	function PermAReceived(htData){
		//console.log(1, htData);
		/*
		{
		   "message_type":"",
		   "menu_item":{
			  "group_srls":[
			  ],
			  "moduleType":"",
			  "groupList":[
				 {
					"group_srl":"1",
					"title":"관리그룹",
					"isChecked":false
				 },
				 {
					"group_srl":"2",
					"title":"준회원",
					"isChecked":false
				 },
				 {
					"group_srl":"3",
					"title":"정회원",
					"isChecked":false
				 }
			  ],
			  "name_key":"",
			  "name":""
		   },
		   "error":0,
		   "message":"success"
		}
		*/
		var aUserGroups = $._xeAdminVar.aUserGroups = [];
		var htUserGroups = $._xeAdminVar.htUserGroups = {};
		var htNode = htNodeInfo[$._xeAdminVar.sSelectedMenuSrl];
		var aPerms =  htNode.aPerms = [];
		var htTmp;
		for(var i=0, nLen=htData.menu_item.groupList.length; i<nLen; i++){
			htTmp = htData.menu_item.groupList[i];
			aUserGroups[i] = htTmp;
			htUserGroups[htTmp.group_srl] = htTmp;
		}
		//console.log($._xeAdminVar.aUserGroups, $._xeAdminVar.htUserGroups);
		aPerms[0] = {
			sKey : 'target',
			sTitle : xe.lang.target_of_view_menu,
			sDefault : 'guest',
			sGrant : htData.menu_item.grant || 'all',
			aGroup : htData.menu_item.group_srls
		};
		if(htNode.sModuleType === "_SHORTCUT"){
			PermBReceived({
				grantList : {}
			});
		}else{
			var params = {
				target_module : htNode.sModuleType,
				module_srl : htNode.module_srl
			};
			$.exec_json("module.getModuleAdminGrant", params, PermBReceived);
		}
	}
	function PermBReceived(htData){
		//console.log(2, htData);
		var htNode = htNodeInfo[$._xeAdminVar.sSelectedMenuSrl];
		var aPerms =  htNode.aPerms;
		/*
		  "write_document":{
			 "title":"글 작성",
			 "default":"guest",
			 "grant":"group",
			 "group":{
				 1, 2, 3
			 }
		  },
	  */
		for(var sPerm in htData.grantList){
			htTmp = htData.grantList[sPerm];
//console.log(11, htTmp);
			aPerms.push({
				sKey : sPerm,
				sTitle : htTmp.title,
				// IE7 takes 'default' as a keyword. So use this array form to access the value
				sDefault : htTmp['default'],
				sGrant : htTmp.grant || "",
				aGroup : htTmp.group_srls || []
			});
		}
		drawPermSetupScreen(aPerms);
	}
	$("#tmpl_permItem").template( "permItem");
	$("#tmpl_perm_groupItem").template( "perm_groupItem");
	function drawPermSetupScreen(aPerms){
		//console.log(aPerms);
		var $List = $('#auth ._list');
		$List.html("");
		var aUserGroups = $._xeAdminVar.aUserGroups;
		var htInfo, sDefault, $node, $groupNode, aGroup, sGrant;
		for(var i=0, nLen=aPerms.length; i<nLen; i++){
			htInfo = aPerms[i];
			//console.log(3, i, nLen, htInfo);
			/*
			<li>
				<label for="auth${PermId}">${PermTitle}</label>
				<select id="auth${PermId}">
					<option class="_group_all" value="0">모든 사용자</option>
					<option class="_group_loggedin" value="-1">로그인 사용자</option>
					<option class="_group_signedup" value="-2">가입한 사용자</option>
					<option class="_group_manager" value="-3">관리자만</option>
					<option class="_group_selected" value="-10">선택그룹 사용자</option>
				</select>
				<div class="selected x_hide">
				</div>
			</li>
			*/
			sDefault = htInfo.sDefault;
			//aGroup = htInfo.aGroup;
			aGroup = [];
			// The comparison target "htInfo.group_srl" is always string where htInfo.aGroup can be either string OR integer. For easier comparison, conver aGroup to string.
			for(var n=0, nLen2=htInfo.aGroup.length; n<nLen2; n++){
				aGroup[n] = "" + htInfo.aGroup[n];
			}
			sGrant = htInfo.sGrant;
			$node = $.tmpl("permItem", {
				PermId : htInfo.sKey,
				PermTitle : htInfo.sTitle
			});
			$node.find('select').data('key', htInfo.sKey);
			//console.log($node.find('select').data('key'));
			var htGrantStrToSelectValMap = {
				'all': '0',
				'member': '-1',
				'site': '-2',
				'manager': '-3',
				'group': '-10'
			};
			if(htInfo.sGrant){
				$node.find('select').val(htGrantStrToSelectValMap[htInfo.sGrant]);
			}
			// Add groups
			//<label><input type="checkbox" value="${ID}" title="${Title}"> ${Title}</label>
			for(var ii=0, nLen2=aUserGroups.length; ii<nLen2; ii++){
				htInfo = aUserGroups[ii];
				//console.log(222, htInfo.group_srl, aGroup);
				sChecked = null;
				if(sGrant === 'group'){
					$node.find('._groups').show();
					if(aGroup && $.inArray("" + htInfo.group_srl, aGroup) !== -1){
						sChecked = "checked";
					}
				}
				$groupNode = $.tmpl("perm_groupItem", {
							Title : htInfo.title ,
							ID : htInfo.group_srl
						});
				$groupNode.find('input[type=checkbox]').attr('checked', sChecked);
				$node.find('._groups').append($groupNode);
			}
			if(i === 0){
				$node.find('._group_signedup').remove();
				//$node.find('._group_manager').remove();
			}else{
				/*
					guest : 모든 옵션 사용 가능, 항상 권한 있음.
					member : '모든 사용자' 제외하고 사용 가능, 로그인 정보가 있을 경우 true
					site : '모든 사용자' 제외하고 사용 가능, 가상 사이트일 경우에는 가입된 그룹 정보가 있어야 하며, 가상 사이트가 아닐 경우에는 'member'와 동일.
					manager : '관리자만','선택그룹 사용자' 옵션만 사용가능, 관리자일 경우에만 true
					root : manager와 동일.
				*/
				switch(sDefault){
					case 'guest':
						//
					break;
					case 'member':
						$node.find('._group_all').remove();
					break;
					case 'site':
						$node.find('._group_all').remove();
					break;
					case 'manager':
					case 'root':
					default:
						$node.find('._group_all').remove();
						$node.find('._group_loggedin').remove();
						$node.find('._group_signedup').remove();
				}
			}
			//console.log(22, $node);
			$List.append($node);
			$('#auth select').trigger('change');
		}
		$('label[for="authtarget"]').append(' <a class="x_icon-question-sign" href="./admin/help/index.html#UMAN_faq_exposure_target" target="_blank"><?php echo $__Context->lang->help ?></a>');
	}
// Auth
	$('#auth').on('change', 'select', function(){
		var $this = $(this);
		var sKey = $this.data('key');
		var $selected = $('#auth ._groups_'+sKey);
		if($this.val() == '-10'){
			$selected.show();
		} else {
			$selected.hide();
		}
	});
	$('#auth ._save').click(function(){
		// create json from the form values
		var $select = $('#auth').find('select');
		var vDisplay = readPermValue($($select[0]));
		if(vDisplay === '0') vDisplay = "";
		var htPerm = {};
		var $node, sKey;
		for(var i=1, nLen=$select.length; i<nLen; i++){
			$node = $($select[i]);
			sKey = $node.data('key');
			htPerm[sKey] = readPermValue($node);
		}
		var htParam = {
			menu_item_srl : htNodeInfo[$._xeAdminVar.sSelectedMenuSrl].sNodeSrl,
			exposure : vDisplay,
			htPerm : htPerm
		};
		jQuery.exec_json("menu.procMenuAdminUpdateAuth", htParam, function(htData){
			//alert(xe.lang.success_saved);//.//
			$.xeMsgBox.alert(xe.lang.success_saved);
			$('#auth').hide();
		});
	});
	function readPermValue($select){
		var sKey, $node, $chkbox, aGroup, vValue, $groups;
		$node = $($select);
		sKey = $node.data('key');
		vValue = $node.val();
		if(vValue === '-10'){
			vValue = [];
			var $groups = $('#auth ._groups_'+sKey+' input[type=checkbox]');
			for(var ii=0, nLen2=$groups.length; ii<nLen2; ii++){
				$chkbox = $($groups[ii]);
				if($chkbox.attr('checked')){
					vValue.push($chkbox.val());
				}
			}
		}
		// Output of $.param function used in exec_json does not have a representation for an empty array. So, use "[]" (string) instead.
		if(vValue.length === 0) vValue = '';
		return vValue.toString();
	}
	<?php } ?>
	$('#downloadLayout').bind("show", function(ev){
	// ignore bubbled show events
		if(this !== ev.target){
			return;
		}
		//index.php?act=getAutoinstallAdminMenuPackageList
		$('#layout').nextAll().hide();
		var sMode = $._xeAdminVar.htPrevSetting.bMobilePreviewTabOpen?"M":"P";
		drawDownloadableList('downloadLayout', { 'type': sMode});
	});
	$('#downloadLayout').bind("after-show", function(ev){
		scrollToRight();
	});
	$('#downloadSkin').bind("show", function(ev){
	// ignore bubbled show events
		if(this !== ev.target){
			return;
		}
	//index.php?act=getAutoinstallAdminMenuPackageList
		$('#skin').nextAll().hide();
		var sMode = $._xeAdminVar.htPrevSetting.bMobilePreviewTabOpen?"M":"P";
		<?php if($__Context->act == 'dispMenuAdminSiteMap'){ ?>
		drawDownloadableList('downloadSkin', {
			parent_program : htNodeInfo[$._xeAdminVar.sSelectedMenuSrl].sModuleType,
			type: sMode
		});
		<?php } ?>
		<?php if($__Context->act == 'dispMenuAdminSiteDesign'){ ?>
		drawDownloadableList('downloadSkin', {
			parent_program : $._xeAdminVar.htSelectedMenuDesign.sModuleName,
			type: sMode
		});
		<?php } ?>
	});
	$('#downloadSkin').bind("after-show", function(ev){
		scrollToRight();
	});
	//function drawMenuModuleList(nPage){
	// sItemType : download, downloadLayout, downloadSkin
	// htParams : download/{page}, downloadLayout/{page, type}, downloadSkin/{page, type, parent_program}
	// https://code.google.com/p/xe-core/wiki/DownloadAvailableList_GET_API
	function drawDownloadableList(sItemType, htParams){
		var htDownloadableListAction = {
			download:'menu.getAutoinstallAdminMenuPackageList',
			downloadLayout:'menu.getAutoinstallAdminLayoutPackageList',
			downloadSkin:'menu.getAutoinstallAdminSkinPackageList'
		};
		htParams = htParams || {};
		htParams.page = htParams.page || 1;
		htParams.search_keyword = htParams.search_keyword || "";
		var $Panel = $('#'+sItemType);
		var sAction = htDownloadableListAction[sItemType];
		//var params = {};
		//params['page'] = nPage;
		//"menu.getAutoinstallAdminMenuPackageList"
		$.exec_json(sAction, htParams, function(htData){
			//console.log(htData);
			//var sResult = "";
			$Panel.find('.list').html("");
			var item;
			var $node, sIsInstalled, sIsUpToDate;
			if(htData.item_list){
				for(var i=0, nLen=htData.item_list.length; i<nLen; i++){
					item = htData.item_list[i];
					if(item.current_version){
						sIsInstalled = "installed";
						if(item.need_update === "N"){
							sIsUpToDate = "up_to_date";
						}else{
							sIsUpToDate = "";
						}
					}else{
						sIsInstalled = "";
					}
					var sScreenshot = item.item_screenshot_url.replace(/^http:\/\//, "");
					$node = $.tmpl( "downloadableItem", {
						MenuType: item.title,
						MenuTypeDesc: item.package_description,
						ScreenShotURL: sScreenshot,
						Score: item.package_star,
						TotalVotes: item.package_voted,
						LastUpdatedWithTime: formatUpdatedDateWithTime(item.item_regdate),
						LastUpdated: formatUpdatedDate(item.item_regdate),
						TotalDownloads: item.package_downloaded,
						URL: item.url,
						IsUpToDate: sIsUpToDate,
						IsInstalled: sIsInstalled
					} ).data('sItemType', sItemType).data('sPackageSrl', item.package_srl);
					$Panel.find('.list').append($node);
				}
				var htInfo = htData.page_navigation;
				var fnCallback = function(htNewParams){
					htParams.page = htNewParams.page || htParams.page;
					htParams.search_keyword = typeof htNewParams.search_keyword === "string" ? htNewParams.search_keyword : htParams.search_keyword;
					return drawDownloadableList(sItemType, htParams);
				}
				//createPagination($('#download ._pagination'), drawMenuModuleList, htInfo.cur_page, htInfo.total_page, "&laquo; 첫 페이지", "끝 페이지 &raquo;", "페이지 직접 이동")
				createPagination({
					$PlaceHolder : $Panel.find('._pagination'),
					fnCallback : fnCallback,
					nCurPage : htInfo.cur_page,
					nTotalPages : htInfo.total_page,
					sToFirstText : "&laquo;",
					sToLastText : "&raquo;",
					sToText : xe.lang.cmd_go_to_page,
					sSearchKeyword : htParams.search_keyword
				});
			}else{
				$node = $.tmpl( "noDownloadableItem", {
				} );
				$Panel.find('.list').append($node);
			}
			scrollToTop($Panel.find('.cnt'));
			scrollToRight();
		});
	}
	$( "#tmpl_layoutItem" ).template( "design_layoutItem" );
	$( "#tmpl_skinItem" ).template( "deisgn_skinItem" );
	// remove automatically added fields.
	var $previewForm = $("#design  ._preview_form");
	$previewForm.find('input[name=act]').remove();
	$previewForm.find('input[name=mid]').remove();
	$previewForm.find('input[name=vid]').remove();
	$('#design .x_tabbable').on('tab_change', function(ev, nIdx, $el){
		ev.preventDefault();
		$('#design').nextAll().hide();
		//console.log('on "tab_change"', ev, nIdx, $el);
		var htDesign = $._xeAdminVar.htSelectedMenuDesign;
		if(nIdx === 0){
			// PC
			$._xeAdminVar.htPrevSetting.bMobilePreviewTabOpen = false;
			$._xeAdminVar.sOpenDeisgnWith = "P";
			$('#design').addClass('_pcMode');
			$('#design').removeClass('_mobileMode');
		}else{
			// mobile
			$._xeAdminVar.htPrevSetting.bMobilePreviewTabOpen = true;
			$._xeAdminVar.sOpenDeisgnWith = "M";
			$('#design').removeClass('_pcMode');
			$('#design').addClass('_mobileMode');
		}
		var sMode = $._xeAdminVar.htPrevSetting.bMobilePreviewTabOpen?"M":"P";
		var $panel = $("#design");
		<?php if($__Context->act == 'dispMenuAdminSiteMap'){ ?>
		var sMenuId = $._xeAdminVar.sSelectedMenuSrl;
		var htInfo = htNodeInfo[sMenuId];
		// also preview here
		var params = {
			menu_item_srl : htInfo.sNodeSrl
		};
//-----------------------------------
		$.exec_json("module.getModuleInfoByMenuItemSrl", params, function(htData){
			var htTmp = htData.module_info_by_menu_item_srl;
			var sLayoutTitle, sLayoutSrl;
			var sSkinTitle, sSkinName;
			if(htTmp.module == 'page'){
				htTmp.module = htTmp.page_type;
			}
			if(sMode === "P"){
				sLayoutSrl = htTmp.layout_srl;
				sLayoutTitle = htData.module_info_by_menu_item_srl.designSettings.layout.pc;
				if(htData.module_info_by_menu_item_srl.is_skin_fix == "Y"){
					sSkinTitle = htData.module_info_by_menu_item_srl.designSettings.skin.pc;
					sSkinName = htTmp.skin;
				}else{
					sSkinTitle = "";
					sSkinName = "";
				}
			}else{
				sLayoutSrl = htTmp.mlayout_srl;
				sLayoutTitle = htData.module_info_by_menu_item_srl.designSettings.layout.mobile;
				if(htData.module_info_by_menu_item_srl.is_mskin_fix == "Y"){
					sSkinTitle = htData.module_info_by_menu_item_srl.designSettings.skin.mobile;
					sSkinName = htTmp.mskin;
				}else{
					sSkinTitle = "";
					sSkinName = "";
				}
			}
			// module=모듈이름&mid=모듈ID&layout_srl=레이아웃srl&skin=스킨이름
			var htDesign = $._xeAdminVar.htSelectedMenuDesign = {
				sModuleName : htTmp.module,
				sMID : htTmp.mid,
				sUseMobile : htTmp.use_mobile,
				sLayoutSrl : sLayoutSrl,
				sLayoutTitle : sLayoutTitle,
				sSkinName : sSkinName,
				sSkinTitle : sSkinTitle,
				sTmpSkinName : "",
				htData : {}
			};
			var $itemList = $panel.find('._itemList');
			$itemList.html("");
			$itemList.append($.tmpl( "design_layoutItem", {
				LayoutName: sLayoutTitle
			}));
			// if the module type has no skin support, do not even display the option.
			if($._xeAdminVar.htAllModules[htInfo.sModuleType] && $._xeAdminVar.htAllModules[htInfo.sModuleType].no_skin !== "Y"){
				$itemList.append($.tmpl( "deisgn_skinItem", {
						ModuleType : htInfo.sModuleType,
						ModuleTypeTitle : $._xeAdminVar.htAllModules[htInfo.sModuleType].title,
						SkinTitle : sSkinTitle
					}
				));
			}
			// If mobile view is disabled for the menu, display the mobile setup screen accordingly
			if(htDesign.sUseMobile !== 'Y'){
				$('#design').addClass('_mobile_view_disabled').find('.mvOption>:checkbox').removeAttr('checked');
			}else{
				$('#design').removeClass('_mobile_view_disabled').find('.mvOption>:checkbox').attr('checked','checked');
			}
			updateSelectedDesign(htDesign);
		});
		<?php } ?>
		<?php if($__Context->act == 'dispMenuAdminSiteDesign'){ ?>
		if(!$._xeAdminVar.htSiteDefaultLayout || !$._xeAdminVar.htSiteDefaultLayout[sMode]){
			var $this = $(this);
			setTimeout(function(){
				$this.trigger('tab_change', [nIdx, $el]);
			}, 10);
			return false;
		}
		$.exec_json("menu.getMenuAdminInstalledMenuType", {}, function(htData){
			setItemTypes(htData.menu_types);
			setAllModules(htData.all_modules);
			var sLayoutTitle = $._xeAdminVar.htSiteDefaultLayout[sMode].title;
			$list = $('#design').find('._itemList');
			$list.html("").append($.tmpl( "design_layoutItem", {LayoutName: sLayoutTitle}));
			var item;
			var sModuleTitle;
			var sSkinName, sSkinTitle;
			for(var sModuleName in $._xeAdminVar.htItemTypes){
				if(! $._xeAdminVar.htItemTypes.hasOwnProperty(sModuleName)) continue;
				if(sModuleName === "_SHORTCUT") continue;
				item = $._xeAdminVar.htAllModules[sModuleName];
				if(!item) continue;
				if(item.no_skin === "Y") continue;
				sModuleTitle = item.title;
				if(nIdx === 0){
					// PC
					sSkinName = item.defaultSkin.skin;
					sSkinTitle = item.defaultSkin.title;
				}else{
					// mobile
					sSkinName = item.defaultMobileSkin.skin;
					sSkinTitle = item.defaultMobileSkin.title;
				}
				$list.append($.tmpl( "deisgn_skinItem", {
					ModuleType : sModuleName,
					ModuleTypeTitle : sModuleTitle,
					//SkinName : sSkinName.
					SkinTitle : sSkinTitle
				}));
			}
			jQuery.exec_json("layout.getLayoutAdminSiteDefaultLayout", {
				site_srl : 0,
				type : sMode
			}, function(htData){
				$._xeAdminVar.htSiteDefaultLayout[sMode].layout_srl = htData.layout_srl;
				$._xeAdminVar.htSiteDefaultLayout[sMode].title = htData.title;
				var htDesign = $._xeAdminVar.htSelectedMenuDesign = {
					sModuleName : "",
					sMID : "",
					sLayoutSrl : $._xeAdminVar.htSiteDefaultLayout[sMode].layout_srl,
					sLayoutTitle : $._xeAdminVar.htSiteDefaultLayout[sMode].title,
					sSkinName : "",
					sSkinTitle : "",
					htData : {}
				};
				//htDesign.sLayoutSrl = htDesign.htLayoutSrl[sMode];
				//htDesign.sSkinName = htDesign.htSkin[sMode];
				//.//
				//updatePreview(htDesign);
				updateSelectedDesign(htDesign);
				//scrollToRight();
			});
		});
		<?php } ?>
	});
	function loadLayoutInfo(){
		// Site Default Layout Info
		$._xeAdminVar.htSiteDefaultLayout = {};
		jQuery.exec_json("layout.getLayoutAdminSiteDefaultLayout", {
			site_srl : 0,
			type : "P"
		}, function(htData){
			$._xeAdminVar.htSiteDefaultLayout.P = {
				layout_srl : htData.layout_srl,
				title : htData.layout_srl > 0 ? htData.title : xe.lang.no_use_layout
			}
		});
		jQuery.exec_json("layout.getLayoutAdminSiteDefaultLayout", {
			site_srl : 0,
			type : "M"
		}, function(htData){
			$._xeAdminVar.htSiteDefaultLayout.M = {
				layout_srl : htData.layout_srl,
				title : htData.layout_srl > 0 ? htData.title : xe.lang.no_use_layout
			}
		});
	}
	loadLayoutInfo();
	<?php if($__Context->act == 'dispMenuAdminSiteMap'){ ?>
	$('#design').bind('show', function(ev){
		if(this !== ev.target) return;
		if($._xeAdminVar.sOpenDeisgnWith && $._xeAdminVar.sOpenDeisgnWith === "M"){
			$('#design .x_tabbable a[href="#mobile"]').click();
		}else{
			$('#design .x_tabbable a[href="#pc"]').click();
		}
		$._xeAdminVar.sOpenDeisgnWith = "P";
	});
	$('#design').bind("after-show", function(){
		scrollToRight();
	});
	$('#design .mvOption>:checkbox').change(function(){
		//var $design = $('#design');
		var  sYN_useMobile;
		if($(this).is(':checked')){
			sYN_useMobile = "Y";
			//$design.removeClass('_mobile_view_disabled').find('.nav').show();
		} else {
			sYN_useMobile = "N";
			//$design.addClass('_mobile_view_disabled').find('.nav').hide();
		}
		jQuery.exec_json("module.procModuleAdminUpdateUseMobile", {
			menu_item_srl : $._xeAdminVar.sSelectedMenuSrl,
			use_mobile : sYN_useMobile
		}, function(htData){
			$._xeAdminVar.sOpenDeisgnWith = "M";
			$('#design').show();
		});
	});
	$('#layout ._save').click(function(ev){
		ev.preventDefault();
		var sMode = $._xeAdminVar.htPrevSetting.bMobilePreviewTabOpen?"M":"P";
		var sMenuId = $._xeAdminVar.sSelectedMenuSrl;
		var htInfo = htNodeInfo[sMenuId];
		var htDesign = $._xeAdminVar.htSelectedMenuDesign;
		var htParam = {
			target_module_srl : htInfo.module_srl,
			skin_type : sMode,
			layout_srl : htDesign.sLayoutSrl
		};
		jQuery.exec_json("module.procModuleAdminSetDesignInfo", htParam, function(htData){
			$.xeMsgBox.alert(xe.lang.success_saved);
			var sMode = $._xeAdminVar.htPrevSetting.bMobilePreviewTabOpen?"M":"P";
			$._xeAdminVar.sOpenDeisgnWith = sMode;
			$('#design').show();
		});
	});
	$('#skin ._save').click(function(ev){
		ev.preventDefault();
		var sMode = $._xeAdminVar.htPrevSetting.bMobilePreviewTabOpen?"M":"P";
		var sMenuId = $._xeAdminVar.sSelectedMenuSrl;
		var htInfo = htNodeInfo[sMenuId];
		var htDesign = $._xeAdminVar.htSelectedMenuDesign;
		var sSkinName = htDesign.sSkinName;
		var ynSkinFix = (sSkinName === "")?"N":"Y";
		var htParam = {
			target_module_srl : htInfo.module_srl,
			skin_type : sMode,
			is_skin_fix : ynSkinFix,
			skin_name : sSkinName,
			skin_vars : "{}"
		};
		jQuery.exec_json("module.procModuleAdminSetDesignInfo", htParam, function(htData){
			$.xeMsgBox.alert(xe.lang.success_saved);
			var sMode = $._xeAdminVar.htPrevSetting.bMobilePreviewTabOpen?"M":"P";
			$._xeAdminVar.sOpenDeisgnWith = sMode;
			$('#design').show();
		});
	});
	<?php } ?>
	<?php if($__Context->act == 'dispMenuAdminSiteDesign'){ ?>
	$('#design').bind('show', function(ev){
		if(this !== ev.target) return;
		//$('#design').addClass('_mobile_view_disabled').find('.mvOption>:checkbox').removeAttr('checked');
		//loadInstalledLayoutList("P", function(){
			if($._xeAdminVar.sOpenDeisgnWith && $._xeAdminVar.sOpenDeisgnWith === "M"){
				$('#design .x_tabbable a[href="#mobile"]').click();
			}else{
				$('#design .x_tabbable a[href="#pc"]').click();
			}
		//});
	});
	$('#design ._btn_save').click(function(ev){
		ev.preventDefault();
		var sMode = $._xeAdminVar.htPrevSetting.bMobilePreviewTabOpen?"M":"P";
		//var sLayoutSrl = $._xeAdminVar.htSelectedMenuDesign.htLayoutSrl[sMode];
		var htDesign = $._xeAdminVar.htSelectedMenuDesign;
		var htSkins = {};
		var item;
		for(var sModuleName in $._xeAdminVar.htItemTypes){
			if(! $._xeAdminVar.htItemTypes.hasOwnProperty(sModuleName)) continue;
			if(sModuleName === "_SHORTCUT") continue;
			item = $._xeAdminVar.htAllModules[sModuleName];
			sModuleTitle = item.title;
			htSkins[sModuleName] = (sMode === "P") ? item.defaultSkin.skin : item.defaultMobileSkin.skin;
		}
		var htParam = {
			site_srl : 0,
			layout_srl : htDesign.sLayoutSrl?htDesign.sLayoutSrl:"0",
			target_type : sMode,
			module_skin : $.stringify(htSkins)
		};
		//console.log(htParam);
		jQuery.exec_json("admin.procAdminInsertDefaultDesignInfo", htParam, function(htData){
			$.xeMsgBox.alert(xe.lang.success_saved);
			$('#design').show();
		});
	});
	<?php } ?>
	$("#tmpl_menuTypeItem").template( "menuTypeItem" );
	$('#add').bind("show", function(){
		fillInInstalledMenuList();
	});
	$('#add').bind("after-show", function(){
		scrollToRight();
	});
	function fillInInstalledMenuList(){
		$.exec_json("menu.getMenuAdminInstalledMenuType", {}, function(htData){
			//console.log(htData);
			var sResult = "";
			setItemTypes(htData.menu_types);
			setAllModules(htData.all_modules);
			//$._xeAdminVar.htItemTypes = htData.menu_types;
			var item;
			var sModuleTitle;
			for(var sModuleName in $._xeAdminVar.htItemTypes){
				//item = htData.menu_types[i];
				if(!$._xeAdminVar.htItemTypes.hasOwnProperty(sModuleName)) continue;
				item = $._xeAdminVar.htAllModules[sModuleName];
				if(!item){
					continue;
				}
				sModuleTitle = item.title;
				//console.log(item);
				sResult += $.tmpl( "menuTypeItem", {
					ModuleName : sModuleName,
					ModuleTitle : sModuleTitle
				} ).get()[0].outerHTML;
			}
			//sResult += '<li><a href="#add_menu" data-admin-show="#add_menu"  data-param=\'{ "moduleName":"", "moduleTitle":"URL 링크" }\'>URL 링크 <i class="x_icon-circle-arrow-right"></i></a></li>';
			$('#add ._itemList').html(sResult);
		});
	}
	$('#design ._btn_cancel').click(function(ev){
		ev.preventDefault();
		$('#design').show();
	});
	$('#design').bind('hide', function(e){
		if(e.target == this){
			$._xeAdminVar.htPrevSetting = {};
		}
	});
	function updateSelectedDesign(htDesign){
		var sMode = $._xeAdminVar.htPrevSetting.bMobilePreviewTabOpen?"M":"P";
		/*
		$._xeAdminVar.htSiteDefaultLayout.P = {
			layout_srl : htData.layout_srl,
			title : htData.title
		}
		*/
		var sLayoutTitle;
		switch(htDesign.sLayoutSrl){
			case -1:
			case "-1":
				sLayoutTitle = $._xeAdminVar.htSiteDefaultLayout[sMode].title;
			break;
			case "":
			case 0:
			case "0":
				sLayoutTitle = xe.lang.no_use_layout;
			break;
			default:
				sLayoutTitle = htDesign.sLayoutTitle;
		}
		var sSkinTitle = htDesign.sSkinTitle;
		var sSkinName = htDesign.sSkinName;
		if(sSkinName == ""){
			var sModuleType = htDesign.sModuleName==="page"?"ARTICLE":htDesign.sModuleName;
			if($._xeAdminVar.htAllModules[sModuleType]){
				if(sMode === "P"){
					sSkinTitle = $._xeAdminVar.htAllModules[sModuleType].defaultSkin.title;
				}else{
					sSkinTitle = $._xeAdminVar.htAllModules[sModuleType].defaultMobileSkin.title;
				}
			}
		}
		if(!sSkinTitle){
			sSkinTitle = '<?php echo $__Context->lang->no_skin ?>';
		}
		$('#design ._layoutName').text(sLayoutTitle);
		<?php if($__Context->act == 'dispMenuAdminSiteMap'){ ?>
		$('#design ._skinTitle').text(sSkinTitle);
		<?php } ?>
		<?php if($__Context->act == 'dispMenuAdminSiteDesign'){ ?>
		$('#design .active ._skinTitle').text(sSkinTitle);
		<?php } ?>
		updatePreview(htDesign);
	}
	function updatePreview(htParam){
		var sMode = $._xeAdminVar.htPrevSetting.bMobilePreviewTabOpen?"M":"P";
		if(!$._xeAdminVar.bSiteDesignMode && (sMode === "M" && $._xeAdminVar.htSelectedMenuDesign.sUseMobile !== 'Y')) return;
		// ?act=dispLayoutPreviewWithModule&module_name=모듈이름&target_mid=모듈ID&layout_srl=레이아웃srl&skin=스킨이름&skin_type=M/P
		var sURL = './?act=dispLayoutPreviewWithModule&module_name='+htParam.sModuleName+'&target_mid='+htParam.sMID+'&layout_srl='+htParam.sLayoutSrl+'&skin='+htParam.sSkinName+'&skin_type='+sMode;
		$('._preview_form').attr('action', sURL);
		var sTarget = (sMode === "P")?"_pc_preview_ifr":"_mobile_preview_ifr";
		// somehow, Firefox doesn't recognize the visibility change of the iframe without this line and opens up a new window to submit
		var tmp = ($("iframe[name="+sTarget+"]").is(':visible'));
		$('._preview_form').attr('target', sTarget);
		$('._preview_form').submit();
		$('._preview_form').attr('target', "xe_preview");
		var $iframe = $("iframe[name="+sTarget+"]");
		var $container = $iframe.next('i');
		var $text = $container.children('span');
		var $zoom = $container.next('input');
		$text.hide();
		$container.removeClass('on_message');
		$zoom.hide();
		$container.addClass('loading');
	}
	$('iframe[name=_pc_preview_ifr], iframe[name=_mobile_preview_ifr]').bind("load", function(){
		var $this = $(this);
		var $errElm = $('#preview_error', $this.contents());
		var message = $errElm.text();
		var $container = $this.next('i');
		var $text = $container.children('span');
		var $zoom = $container.next('input');
		if($errElm.length){
			$text.text(message).show();
			$container.addClass('on_message');
			$container.removeClass('loading');
		}else{
			$zoom.show();
			$container.removeClass('loading');
		}
	});
	$('._pc_preview_open').click(function(ev){
		window.open($('input[name=_pc_preview_ifr]').attr('src'), "xe_preview", "resizable=yes,width=" + jQuery('body').width() + ",height=" + jQuery('body').height());
		//ev.preventDefault();
		//
	});
	$('._mobile_preview_open').click(function(ev){
		window.open($('input[name=_mobile_preview_ifr]').attr('src'), "xe_preview", "resizable=yes,width=480,height=800");
		//ev.preventDefault();
		//
	});
	$('#layout ._chkUseDefaultLayout').click(function(){
		var $this = $(this);
		if($this.is(':checked')){
			$this.attr('checked','checked').parent().css('fontWeight','bold');
		} else {
			$this.removeAttr('checked').parent().css('fontWeight','normal');
		}
		updateLayoutListDisplayStatus();
	});
	$('input[type=checkbox].switch').change(function(ev){
		var $this = $(this);
		if($this.is(':checked')){
			$this.attr('checked','checked');
		} else {
			$this.removeAttr('checked');
		}
	});
	$("#tmpl_layout_list_item_no_layout").template( "layoutListItem_nolayout" );
	$("#tmpl_layout_list_item").template( "layoutListItem" );
	$("#tmpl_layout_list_item_add_new").template( "layoutListItemAddNew" );
	$('#layout').on('show', function(ev){
		if(this !== ev.target){
			return;
		}
		$('#layout .list').show();
		var htDesign = $._xeAdminVar.htSelectedMenuDesign;
		var sMode = $._xeAdminVar.htPrevSetting.bMobilePreviewTabOpen?"M":"P";
		if(htDesign.sLayoutSrl == -1){
			$('._chkUseDefaultLayout').attr('checked', 'checked').parent().css('fontWeight','bold');
		}else{
			$('._chkUseDefaultLayout').removeAttr('checked').parent().css('fontWeight','normal');
		}
		//updateLayoutListDisplayStatus();
		//loadInstalledLayoutList("P");
	});
	$('#layout').bind("after-show", function(ev){
		scrollToRight();
	});
	$('#layout .list').on('show', function(){
		fillInInstalledLayoutList();
	});
	$('#layout').on('hide', function(ev){
		if(this !== ev.target) return;
	});
	function fillInInstalledLayoutList(){
		var sMode = $._xeAdminVar.htPrevSetting.bMobilePreviewTabOpen?"M":"P";
		loadInstalledLayoutList(sMode);
	}
	function updateLayoutListDisplayStatus(){
		var sMode = $._xeAdminVar.htPrevSetting.bMobilePreviewTabOpen?"M":"P";
		var htDesign = $._xeAdminVar.htSelectedMenuDesign;
		$ChkBox = $('#layout ._chkUseDefaultLayout');
		if($ChkBox.attr('checked')){
			$('#layout .list').addClass('disabled').find(':radio').attr('disabled','disabled');
			htDesign.sLayoutSrl = -1;
			updateSelectedDesign(htDesign);
		}else{
			$('#layout .list').removeClass('disabled').find(':radio').removeAttr('disabled');
			var $allRadio = $('#layout .list :radio');
			var $selected = $('#layout .list :radio[checked]');
			// when the layer was first shown, the list is not yet available
			if($allRadio.length){
				if($selected.length){
					$selected.click();
				}else{
					$($('#layout .list :radio')[0]).click();
				}
			}
		}
	}
	// sType: "P", "M" (PC/Mobile)
	function loadInstalledLayoutList(sType, fnCallback){
		var params = {
			site_srl : 0,
			layout_type : sType
		};
		// https://code.google.com/p/xe-core/wiki/LayoutInfo_GET_API
		$.exec_json("layout.getLayoutInstanceListForJSONP", params, function(htData){
			var $elItem, fnTmp;
			var sResult = "";
			var $List = $('#layout ._layout_list');
			$List.html("");
			var sSelected = "";
			var sSelectedSrl = -1;
			//var htDesign = $._xeAdminVar.htSelectedMenuDesign || {htLayoutSrl:{}};
			var htDesign = $._xeAdminVar.htSelectedMenuDesign;
			if(htDesign.sLayoutSrl == 0){
				sSelectedSrl = "0";
				sSelected = "selected";
			}
			$List.append($.tmpl("layoutListItem_nolayout", {
				Selected : sSelected
			}).data('LayoutSrl', "0"));
			$elItem = $.tmpl("layoutListItemAddNew", {
			});
			$List.append($elItem);
			$._xeAdminVar.htLayoutName = {};
			for(var i=0, nLen=htData.layout_list.length; i<nLen; i++){
				htInfo = htData.layout_list[i];
				$._xeAdminVar.htLayoutName[htInfo.layout_srl] = htInfo.title;
				sSelected = "";
				if(htDesign.sLayoutSrl == htInfo.layout_srl){
					sSelectedSrl = htInfo.layout_srl;
					sSelected = "selected";
				}
				$elItem = $.tmpl("layoutListItem", {
					Title : htInfo.title,
					ScreenShotURL : htInfo.thumbnail,
					Selected : sSelected,
					LayoutSrl : htInfo.layout_srl
				}).data('LayoutSrl', htInfo.layout_srl).data('LayoutTitle', htInfo.title);
				$List.append($elItem);
			}
			$List.find('.selected input').attr('checked', 'checked');
			updateLayoutListDisplayStatus();
			if(typeof fnCallback === "function") fnCallback();
		});
	/*
	<li class="${Selected}">
		<label><input type="radio" name="layout_item" title="${Title}"> ${Title}</label>
		<button type="button" class="item" title="클릭하면 레이아웃이 적용됩니다.">
			<img src="http://${ScreenShotURL}">
		</button>
		<ul>
			<li><a href="#layoutSetup">설정 <i class="x_icon-circle-arrow-right"></i></a></li>
			<li><a href="#layoutHTML">HTML/CSS <i class="x_icon-circle-arrow-right"></i></a></li>
			<li><button type="button" onClick="alert('\'엔터프라이즈[2]\' 레이아웃이 생성 됐습니다.')">복사본 생성</button></li>
			<li><button type="button" onClick="confirm('\'엔터프라이즈\' 레이아웃을 정말 삭제하시겠습니까? \'고급기능\'에서 다시 생성할 수 있습니다.')">삭제</button></li>
		</ul>
	</li>
	*/
	}
	$('#layout').on('click', 'button._duplicateLayout', function(){
		var sLayoutSrl = $(this).closest('li._layoutItem').data('LayoutSrl');
		var htNames = $._xeAdminVar.htLayoutName;
		var htNamesAsKey = {};
		var sName = htNames[sLayoutSrl].replace(/\(\d+\)$/, '');
		for(var sKey in htNames){
			if(!htNames.hasOwnProperty(sKey)) continue;
			htNamesAsKey[htNames[sKey]] = true;
		}
		var sCurName;
		for(var i=2; i<9999999; i++){
			sCurName = sName+"("+i+")";
			if(!htNamesAsKey[sCurName]) break;
		}
		$.xeMsgBox.confirmDialog({
			sTitle : xe.lang.input_new_layout_name,
			sText : '<input type="text" name="layout_name" style="width: 95%"/><br/><div style="text-align:right">* ' + xe.lang.skip_new_layout_name + '</div>',
			bSmall: true,
			fnOnOK : function(){
				var sTitle = $.xeMsgBox.$msgBox.find('input[type="text"]').val();
				$.exec_json("layout.procLayoutAdminCopyLayout", {
					layout_srl : sLayoutSrl,
					title : sTitle.split(',')
				}, function(htData){
					fillInInstalledLayoutList();
				});
			},
			fnOnShow : function(){
				setTimeout(function(){
					$.xeMsgBox.$msgBox.find('input[type="text"]').val(sCurName).focus().select();
				}, 10);
			}
		});
	});
	$('#layout').on('click', 'button._deleteLayout', function(){
		var $item = $($(this).closest('li._layoutItem'));
		var sLayoutSrl = $item.data('LayoutSrl');
		var $thumbnail = $item.find('img._thumbnail').clone();
		var $label = $item.find('label');
		$thumbnail.css('width', '110px');
		$thumbnail.css('height', '78px');
		$thumbnail.css('border', '1px solid #888');
		$thumbnail.css('padding', '3px');
		var $text = $('<div style="float:right;width:240px;text-align:left"></div>');
		$text.text($label.text());
		$.xeMsgBox.confirmDialog({
			sTitle : xe.lang.confirm_delete,
			sText : $thumbnail.outerHTML() + $text.html(),
			bSmall: true,
			bDanger: true,
			fnOnOK : function(){
				$.exec_json("layout.procLayoutAdminDelete", {
					layout_srl : sLayoutSrl
				}, function(htData){
					fillInInstalledLayoutList();
				});
			}
		});
	});
	$('#layout').on('click', 'button._btnScreenshot', function(){
		$(this).closest('li').find('input[name=layout_item]').click();
	});
	$('#layout ul._layout_list').on('click', 'li._layoutItem', function(ev){
		$(ev.target).find('input[name=layout_item]').click();
	});
	$('#layout').on('click', 'input[name=layout_item]', function(){
		$('#layout').nextAll().hide();
		$('#layout').find('li.selected').removeClass('selected').find('input[name="layout_item"]').removeAttr('checked');
		$(this).attr('checked','checked').closest('li').addClass('selected');
		var sMode = $._xeAdminVar.htPrevSetting.bMobilePreviewTabOpen?"M":"P";
		var htDesign = $._xeAdminVar.htSelectedMenuDesign;
		var sLayoutSrl = $(this).closest('li').data('LayoutSrl');
		var sLayoutTitle = $(this).closest('li').data('LayoutTitle');
		htDesign.sLayoutSrl = sLayoutSrl;
		htDesign.sLayoutTitle = sLayoutTitle;
		//htDesign.sModuleName = '';
		updateSelectedDesign(htDesign);
	})
	$('#layoutSetup').on('show', function(ev){
		if(this !== ev.target)  return;
		showQuickHelp('good_to_duplicate_layout');
		//console.log($._htMarkupActionParam.sLayoutSrl);
		var sLayoutSrl = $._htMarkupActionParam.sLayoutSrl;
		$.exec_json("layout.getLayoutAdminSetInfoView", {layout_srl: sLayoutSrl}, function(htData){
			//console.log(htData);
			//console.log(htData.html.match(/<script[^>]*>/));
			//htData.html = htData.html.replace(/<script[^>]*><\/script>/, "");
			$('#layoutSetup').find('._contents').html(htData.html);
			$('#layoutSetup').find('.lang_code').xeApplyMultilingualUI();
			var $configForm = $('#config_form');
			$configForm.on('submit', function(ev){
				ev.preventDefault();
				var sUrl = $('#config_form').attr('action');
				$.post( sUrl, $(this).serialize(),
					function( strRes ) {
						var htData = $.parseJSON(strRes);
						$('#layout').show();
						//console.log(999, strRes, htData);
					}
				);
			})
			scrollToRight();
		});
	})
	$('#layoutSetup').bind('after-show', function(ev){
		scrollToRight();
	});
	top.refreshLayoutList = function(htData){
		$('#layout').show();
	}
	top.refreshLayoutMarkupSetup = function(htData){
		$('#layoutMarkupSetup').show();
	}
	$('#layoutMarkupSetup').on('show', function(ev){
		var sLayoutSrl = $._htMarkupActionParam.sLayoutSrl;
		$.exec_json("layout.getLayoutAdminSetHTMLCSS", {layout_srl: sLayoutSrl}, function(htData){
			//console.log(htData);
			$contents = $('#layoutMarkupSetup ._contents');
			$contents.html(htData.html);
			$allForms = $('#layoutMarkupSetup form');
			$fileChest = $contents.find('form[enctype="multipart/form-data"]');
			$markup = $contents.find('#fo_layout');
			$fileDelete = $allForms.not($fileChest).not($markup);
			/*
			$fileChest.append($("<INPUT>").attr("type", "hidden").attr("name", "xe_js_callback").attr("value", "top.refreshLayoutMarkupSetup"));
			$fileChest.attr('target', 'submitTarget');
			*/
			$fileChest.add($fileDelete).append($("<INPUT>").attr("type", "hidden").attr("name", "xe_js_callback").attr("value", "top.refreshLayoutMarkupSetup"));
			$markup.append($("<INPUT>").attr("type", "hidden").attr("name", "xe_js_callback").attr("value", "top.refreshLayoutList"));
			$allForms.attr('target', 'submitTarget');
			var $configForm = $('#config_form');
			$configForm.on('submit', function(ev){
				var htData = {};
				var sKey, sValue;
				$(this).find('input').each(function(){
					sKey = $(this).attr('name');
					sValue = $(this).val();
					htData[sKey] = sValue;
				});
				ev.preventDefault();
				var sUrl = $('#config_form').attr('action');
				$.post( sUrl, htData,
					function( strRes ) {
						var htData = $.parseJSON(strRes);
						$('#layoutSetup').hide();
						//console.log(999, strRes, htData);
					}
				);
			})
			scrollToRight();
		});
	});
	$('#layoutMarkupSetup').on('after-show', function(ev){
		scrollToRight();
	});
	function doDelete(sMenuSrl, bForce, sSelectOnload){
		var params = {
			menu_item_srl : sMenuSrl,
			is_force : bForce ? 'Y' : 'N'
		};
		$.exec_json("menu.procMenuAdminDeleteItem", params, function(htData){
			if(htData.error === -1001){
				$.xeMsgBox.confirmDialog({
					sTitle : xe.lang.confirm_delete_all_sub_items_title,
					sText : xe.lang.confirm_delete_all_sub_items,
					bSmall : true,
					bDanger : true,
					fnOnOK : function(){
						doDelete(sMenuSrl, true, sSelectOnload);
					}
				});
				return;
			}
			// select the parent of the menu being deleted
			$._xeAdminVar.sSelectOnload = sSelectOnload;
			loadSiteMap();
		});
	}
	$('._deleteMenu').click(function(){
		var htInfo = htNodeInfo[$._xeAdminVar.sSelectedMenuSrl];
		if(htInfo.is_start_module){
			alert(xe.lang.msg_cannot_delete_homemenu);
			return;
		}
		var tmpTitle = '';
		var tmpText = '';
		if(htInfo.is_shortcut == 'Y')
		{
			tmpTitle = xe.lang.confirm_shortcut_delete;
			tmpText = xe.lang.confirm_shortcut_desc;
		}
		else
		{
			tmpTitle = xe.lang.confirm_menu_delete;
			tmpText = xe.lang.confirm_delete_all_contents;
		}
		$.xeMsgBox.confirmDialog({
			sTitle : tmpTitle,
			sText : '<label><input type="checkbox"> ' + tmpText + '</label>',
			bDanger : true,
			fnOnOK : function(){
				if(!$.xeMsgBox.$msgBox.find('input[type="checkbox"]').attr('checked')) return true;
				var sSelectedMenuSrl = $._xeAdminVar.sSelectedMenuSrl;
				var sParentSrl = htNodeInfo[sSelectedMenuSrl].parent_srl;
				doDelete(sSelectedMenuSrl, false, sParentSrl);
			},
			fnOnShow : function(){
				$.xeMsgBox.$msgBox.find("._ok").addClass("x_disabled");
				$.xeMsgBox.$msgBox.find('input[type="checkbox"]').click(function(){
					if($(this).attr('checked')){
						$.xeMsgBox.$msgBox.find("._ok").removeClass("x_disabled");
					}else{
						$.xeMsgBox.$msgBox.find("._ok").addClass("x_disabled");
					}
				});
			},
			fnOnHide : function(){
				$.xeMsgBox.$msgBox.find("._ok").removeClass("x_disabled");
			}
		});
	});
	$("#tmpl_skin_list_item").template( "skinListItem");
	$("#tmpl_skin_list_item_no_skin").template( "skinListItem_noskin");
	$("#tmpl_skin_list_item_add_new").template( "skinListItemAddNew" );
	$('#skin').on('show', function(ev){
		if(this !== ev.target){
			return;
		}
		var sMode = $._xeAdminVar.htPrevSetting.bMobilePreviewTabOpen?"M":"P";
		var htDesign = $._xeAdminVar.htSelectedMenuDesign;
		htDesign.sModuleName = $._htMarkupActionParam.moduleType;
		<?php if($__Context->act == 'dispMenuAdminSiteDesign'){ ?>
		if(sMode == "P"){
			htDesign.sSkinName = $._xeAdminVar.htAllModules[$._htMarkupActionParam.moduleType].defaultSkin.skin;
			htDesign.sSkinTitle = $._xeAdminVar.htAllModules[$._htMarkupActionParam.moduleType].defaultSkin.title;
		}else{
			htDesign.sSkinName = $._xeAdminVar.htAllModules[$._htMarkupActionParam.moduleType].defaultMobileSkin.skin;
			htDesign.sSkinTitle = $._xeAdminVar.htAllModules[$._htMarkupActionParam.moduleType].defaultMobileSkin.title;
		}
		<?php } ?>
		$ChkBox = $('#skin ._chkUseDefault');
		if($._xeAdminVar.htSelectedMenuDesign.sSkinName == ""){
			$ChkBox.attr('checked', 'checked');
		}else{
			$ChkBox.removeAttr('checked');
		}
		$('#skin .list').show();
		//updateSkinListDisplayStatus();
	});
	$('#skin').on('after-show', function(ev){
		scrollToRight();
	});
	$('#skin').on('hide', function(ev){
		if(this !== ev.target){
			return;
		}
	});
	$('#skin .list').on('show', function(){
		fillInInstalledSkinList();
	});
	function fillInInstalledSkinList(){
		var sMode = $._xeAdminVar.htPrevSetting.bMobilePreviewTabOpen?"M":"P";
		loadInstalledSkinList(sMode);
	}
	$('#skin ._chkUseDefault').click(function(){
		updateSkinListDisplayStatus();
	});
	function updateSkinListDisplayStatus(){
		$ChkBox = $('#skin ._chkUseDefault');
		var htDesign = $._xeAdminVar.htSelectedMenuDesign;
		if($ChkBox.is(':visible') && $ChkBox.attr('checked')){
			htDesign.sTmpSkinName = htDesign.sSkinName;
			htDesign.sSkinName = "";
			htDesign.sSkinTitle = "";
			$('#skin .list').addClass('disabled');
			$ChkBox.parent().css('fontWeight','bold');
			updateSelectedDesign(htDesign);
		}else{
			$('#skin .list').removeClass('disabled');
			$ChkBox.parent().css('fontWeight','normal');
			$('#skin .list .selected').click();
		}
	}
	// sType: "P", "M" (PC/Mobile)
	function loadInstalledSkinList(sType){
		//params['module_name'] = 모듈이름;
		//getModuleSkinInfoList
		var params = {
			//module_name : htNodeInfo[$._xeAdminVar.sSelectedMenuSrl].sModuleType,
			module_type : $._xeAdminVar.htSelectedMenuDesign.sModuleName,
			skin_type : sType
		};
		// https://code.google.com/p/xe-core/wiki/ModuleSkinInfo_GET_API
		$.exec_json("module.getModuleSkinInfoList", params, function(htData){
			//console.log(htData);
			//skin_info_list: Object
			var sResult = "";
			var $List = $('#skin ._list');
			$List.html("");
			var sSelected = "";
			var sSelectedSkinName = "";
			var sSelectedSkinTitle = "";
			var htDesign = $._xeAdminVar.htSelectedMenuDesign;
			/*
			$List.append($.tmpl("skinListItem_noskin", {
				Selected : sSelected
			}).data('SkinName', ""));
			*/
			//console.log(htDesign.sSkinName);
			$elItem = $.tmpl("skinListItemAddNew", {
			});
			$List.append($elItem);
			var sTmpName;
			for(var sName in htData.skin_info_list){
				if(!htData.skin_info_list.hasOwnProperty(sName)) continue;
				if(sName == '/USE_DEFAULT/') continue;
				//$._xeAdminVar.htItemTypes[sType][sName].S = htInfo.title;
				//console.log(htDesign.sSkinName);
				// if nothing is selected, select the first one.
				//sTmpName = htDesign.sTmpSkinName || sName;
				//console.log(22, sTmpName);
				//if(!htDesign.sSkinName){
				//	htDesign.sSkinName = sTmpName;
				//}
				htInfo = htData.skin_info_list[sName];
			//for(var i=0, nLen=htData.skin_info_list.length; i<nLen; i++){
				htInfo.sName = sName;
				htInfo.sTitle = htInfo.title;
				sSelected = "";
				//console.log(33, sTmpName, sName, htDesign.sSkinName, htInfo.sName);
				var sSkinName = htDesign.sSkinName;
				if(!sSkinName){
					sSkinName = sType == 'P' ? $._xeAdminVar.htAllModules[htDesign.sModuleName].defaultSkin.skin : $._xeAdminVar.htAllModules[htDesign.sModuleName].defaultMobileSkin.skin;
				}
				if(sSkinName == htInfo.sName){
					//htDesign.sTmpSkinName = "";
					sSelectedSkinName = htInfo.sName;
					sSelectedSkinTitle = htInfo.sTitle;
					sSelected = "selected";
				}
//				console.log(htInfo.title);
				$List.append($.tmpl("skinListItem", {
					Title : htInfo.title,
					ScreenShotURL : htInfo.thumbnail?htInfo.thumbnail:'./modules/layout/tpl/img/noThumbnail.png',
					Selected : sSelected,
					SkinName : htInfo.sName
				}).data('SkinName', htInfo.sName).data('SkinTitle', htInfo.sTitle));
			}
			//console.log(sSelectedSkinName);
			$List.find('.selected input').attr('checked', 'checked');
			//console.log(sSelectedSrl);
			htDesign.sSkinName = sSelectedSkinName;
			htDesign.sSkinTitle = sSelectedSkinTitle;
			htDesign.htSkinData = {};
			updateSelectedDesign(htDesign);
			updateSkinListDisplayStatus();
		});
	}
	$('#skin').on('click', 'button._btnScreenshot', function(){
		$(this).closest('li').find('input[name=skin_item]').click();
	});
	$('#skin ul._list').on('click', 'li._item', function(ev){
		$(ev.target).find('input[name=skin_item]').click();
	});
	$('#skin').on('click', 'input[name=skin_item]', function(){
		$('#skin').find('li.selected').removeClass('selected');
		var sMode = $._xeAdminVar.htPrevSetting.bMobilePreviewTabOpen?"M":"P";
		var $item = $(this).closest('li');
		$item.addClass('selected');
		var sSkinName = $item.data('SkinName');
		var sSkinTitle = $item.data('SkinTitle');
		var htDesign = $._xeAdminVar.htSelectedMenuDesign;
		<?php if($__Context->act == 'dispMenuAdminSiteDesign'){ ?>
		if(sMode == "P"){
			$._xeAdminVar.htAllModules[$._htMarkupActionParam.moduleType].defaultSkin.skin = sSkinName;
			$._xeAdminVar.htAllModules[$._htMarkupActionParam.moduleType].defaultSkin.title = sSkinTitle;
		}else{
			$._xeAdminVar.htAllModules[$._htMarkupActionParam.moduleType].defaultMobileSkin.skin = sSkinName;
			$._xeAdminVar.htAllModules[$._htMarkupActionParam.moduleType].defaultMobileSkin.title = sSkinTitle;
		}
		<?php } ?>
		htDesign.sSkinName = sSkinName;
		htDesign.sSkinTitle = sSkinTitle;
		updateSelectedDesign(htDesign);
	});
	$('#skinSetup').on('show', function(ev){
		if(this !== ev.target)  return;
		scrollToRight();
	});
	$('#fullSetup').on('show', function(ev){
		if(this !== ev.target)  return;
		$(this).find('.lang_code').xeApplyMultilingualUI();
// 		console.log($(this).find('.lang_code'));
	});
	$('#fullSetup').bind("after-show", function(ev){
		scrollToRight();
	});
	//.//
	$('#fullSetup ._save').click(function(ev){
		$('#fullSetup form').submit();
	});
	var d365 = new Date();
	d365.setTime(d365.getTime() + 60*60*24*356);
	var $quickHelp = $("._quick_help");
	var htQuickHelpMsg = {
		'how_to_modify_menu' : xe.lang.how_to_modify_menu,
		'can_drag_menu' : xe.lang.can_drag_menu,
		'good_to_duplicate_layout' : xe.lang.good_to_duplicate_layout,
		'img_uploaded' : xe.lang.img_uploaded,
		'img_deleted' : xe.lang.img_deleted
	};
	function showQuickHelp(sMsgCode){
		$quickHelp.find('._quick_help_nomore').removeAttr('checked');
		if($quickHelp.closeTimer) clearTimeout($quickHelp.closeTimer);
		if(getCookie('__xe_admin_quick_help_'+sMsgCode)) return;
		var sMsg = htQuickHelpMsg[sMsgCode];
		$quickHelp.find('._quick_help_msg').html(sMsg);
		$quickHelp.data('code', sMsgCode);
		$quickHelp.fadeIn();
		$quickHelp.closeTimer = setTimeout(closeQuickHelp, 10000);
	}
	function closeQuickHelp(bNoMore){
		var sMsgCode = $quickHelp.data('code');
		if(bNoMore){
			setCookie('__xe_admin_quick_help_'+sMsgCode, "true", d365);
		}
		$quickHelp.fadeOut(1000);
	}
	$quickHelp.on('click', '._quick_help_nomore', function(){
		closeQuickHelp(true);
	});
	$('#download,#downloadLayout,#downloadSkin').on('click', '._install_this', function(ev){
		var $item = $(this).closest('.item');
		var sPackageSrl = $item.data('sPackageSrl');
		var sPackageType = $item.data('sItemType');
		installPackage(sPackageSrl, sPackageType, $item);
	});
	// sPackageType = menu/layout/skin
	function installPackage(sPackageSrl, sPackageType, $item){
		//act=getAutoinstallAdminIsAuthed
		$.exec_json("admin.getAutoinstallAdminIsAuthed", {}, function(htData){
			// FTP 비밀번호 뿐만 아니라 정보가 전혀 없을 경우?
			switch(htData.is_authed){
				case -1:
				$.xeMsgBox.confirmDialog(
					{
						sTitle : xe.lang.need_to_ftp_setup,
						sText : xe.lang.go_to_ftp_setup,
						bSmall : true,
						fnOnOK : function(){
							var sSuccessReturnURL = current_url.setQuery('continue_install_package', sPackageSrl).setQuery('continue_install_package_type', sPackageType);
							window.location.href="./?module=admin&act=dispAdminConfigFtp&success_return_url="+Base64.encode(sSuccessReturnURL);
						}
					}
				);
				return;
				break;
				case 0:
				$.xeMsgBox.confirmDialog(
					{
						sTitle : xe.lang.need_ftp_password,
						sText :  xe.lang.password + ': <input type="password"/>',
						bSmall : true,
						fnOnOK : function(){
							var sPw = $.xeMsgBox.$msgBox.find('input[type="password"]').val();
							setTimeout(function(){
								getInstallInfo(sPackageSrl, sPackageType, sPw, $item);
							}, 0);
						},
						fnOnCancel: function(){
							if($._xeAdminVar.isFromFtpSetup){
								window.location = current_url.setQuery('continue_install_package', '').setQuery('continue_install_package_type', '');
								$._xeAdminVar.isFromFtpSetup = false;
							}
						}
					}
				);
				return;
				break;
				default:
				break;
			}
			getInstallInfo(sPackageSrl, sPackageType, ".", $item);
		});
	}
	function getInstallInfo(sPackageSrl, sPackageType, sPw, $item){
		// get install info
		$.exec_json('autoinstall.getAutoInstallAdminInstallInfo', {
			package_srl: sPackageSrl
		}, function(htData){
			if(!htData) return;
			// check contain core.
			if(htData.package.contain_core){
				$.xeMsgBox.confirmDialog(
					{
						sTitle : xe.lang.need_core_update,
						sText : xe.lang.need_core_update_continue,
						bSmall : true,
						fnOnOK : function(){
							setTimeout(function(){
								doInstallPackage(htData.package.package_srl, sPackageType, sPw, $item);
							}, 0);
						}
					}
				);
				return;
			}
			// pass all packagesrls
			doInstallPackage(htData.package.package_srl, sPackageType, sPw, $item);
		});
		return;
	}
	function doInstallPackage(sPackageSrl, sPackageType, sPw, $item){
		var htFunc = {
			download: fillInInstalledMenuList,
			downloadLayout: fillInInstalledLayoutList,
			downloadSkin: fillInInstalledSkinList
		};
		//showFoggy();
		$.xeFoggy.show(true);
		$.exec_json("admin.procAutoinstallAdminPackageinstall", {
			package_srl : sPackageSrl,
			ftp_password : sPw
		}, function(htData){
			//hideFoggy();
			$.xeFoggy.hide();
			if($item){
				$item.addClass('installed');
				$item.addClass('up_to_date');
				htFunc[sPackageType]();
			}
			$.xeMsgBox.alertDialog({
				sText: xe.lang.installation_completed,
				bNobody : true,
				bSmall: true,
				fnOnShow: function(){
					if($._xeAdminVar.isFromFtpSetup){
						setTimeout(function(){ window.location = current_url.setQuery('continue_install_package', '').setQuery('continue_install_package_type', ''); }, 500);
						$._xeAdminVar.isFromFtpSetup = false;
					}else{
						setTimeout(function(){ $.xeMsgBox.$msgBox.find("._ok").trigger('click') }, 500);
					}
				}
			});
		}, function(htData){
			$.xeMsgBox.htOptions.fnOnHide = function(){
				if($._xeAdminVar.isFromFtpSetup){
					window.location = current_url.setQuery('continue_install_package', '').setQuery('continue_install_package_type', '');
					$._xeAdminVar.isFromFtpSetup = false;
				}
			}
			$.xeFoggy.hide();
		});
	}
	top.fullSetupDone = function(htData){
		jQuery('#properties').show();
	}
	$('a._openFullSetup').click(function(ev){
		if($._xeAdminVar.oSetupWin){
			$._xeAdminVar.oSetupWin.close();
		}
		$._xeAdminVar.oSetupWin = window.open($._xeAdminVar.sFullSetupUrl, "xe_fullSetup");
		ev.preventDefault();
		var t = this;
		setTimeout(function(){
			$(t).blur();
		}, 0);
		/*
		$.exec_json("menu.getMenuAdminDetailSetup", {
			menu_item_srl : htNodeInfo[$._xeAdminVar.sSelectedMenuSrl].sNodeSrl
		}, function(htData){
			//window.open(htData.setupUrl, "xe_fullSetup", "resizable=yes");
			$._xeAdminVar.oSetupWin = window.open(htData.setupUrl, "xe_fullSetup");
		});
		*/
	});
	$('a._siteDesignSetupLink').attr('title', xe.lang.go_to_site_design_setup).click(function(){
		$.xeMsgBox.alert(xe.lang.go_to_site_design_setup);
	});
	// Set #site height fix
	<?php if(Mobile::isMobileCheckByAgent()){ ?>
		$._xeAdminVar.prevColumn = new Array();
		$._xeAdminVar.prevColumn.push($('#site_map'));
		$('#site').css({ 'display': 'inline-block', 'min-width': '100%'});
		$('#site_map').css('display', 'inline-block');
		$('#site > .col').css({
			'box-sizing': 'border-box',
			'-moz-box-sizing': 'border-box',
			'-webkit-box-sizing': 'border-box',
			'width': '100%',
			'margin': 0
		});
		$('#site > .col .cnt').css('margin-bottom', '25px');
		$('#properties, #propertiesRoot, #imgbtn, #layoutSetup, #layoutMarkupSetup, #skinSetup').find('.cnt').css('margin-bottom', '25px');
		var wHeigh = $(window).height();
		<?php if($__Context->act == 'dispMenuAdminSiteMap'){ ?>
		//$('#design').find('.cnt').height(wHeigh - 75);
		<?php } ?>
		<?php if($__Context->act == 'dispMenuAdminSiteDesign'){ ?>
		//$('#layout, #skin').find('.cnt').height(wHeigh - 75);
		<?php } ?>
		$('#site > .col').bind('show', function(ev){
			if(ev.target != this) return;
			$(this).css('display', 'inline-block').siblings().css('display', 'none');
			$._xeAdminVar.prevColumn.push(this);
		});
		$('#site > .col').bind('after-show', function(ev){
			if(ev.target != this) return;
		});
		$('#site > .col').bind('hide', function(ev){
			if(ev.target != this) return;
			if($._xeAdminVar.prevColumn[$._xeAdminVar.prevColumn.length - 1] != this) return;
			$._xeAdminVar.prevColumn.pop();
			var $prev = $($._xeAdminVar.prevColumn[$._xeAdminVar.prevColumn.length - 1]);
			$prev.css('display', 'inline-block');
		});
	<?php }else{ ?>
		$(window).resize(function(){
			var wHeigh = $(window).height();
			$('#site').height(wHeigh - 147).find('>.col').height(wHeigh - 185).find('.cnt').height(wHeigh - 252);
			$('#properties, #propertiesRoot, #imgbtn, #layoutSetup, #layoutMarkupSetup, #skinSetup').find('.cnt').height(wHeigh - 222);
			<?php if($__Context->act == 'dispMenuAdminSiteMap'){ ?>
			$('#design').find('.cnt').height(wHeigh - 222);
			<?php } ?>
			<?php if($__Context->act == 'dispMenuAdminSiteDesign'){ ?>
			$('#layout, #skin').find('.cnt').height(wHeigh - 222);
			<?php } ?>
		}).resize();
	<?php } ?>
	var sPackageSrl = getParameterByName('continue_install_package');
	var sPackageType = getParameterByName('continue_install_package_type');
	if(sPackageSrl && sPackageType)
	{
		$._xeAdminVar.isFromFtpSetup = true;
		installPackage(sPackageSrl, sPackageType, null);
	}
});
function getParameterByName(name){
	name = name.replace(/[\[]/, "\\\[").replace(/[\]]/, "\\\]");
	var regexS = "[\\?&]" + name + "=([^&#]*)";
	var regex = new RegExp(regexS);
	var results = regex.exec(window.location.search);
	if(results == null)
	{
		return "";
	}
	else
	{
		return decodeURIComponent(results[1].replace(/\+/g, " "));
	}
}
function formatUpdatedDateWithTime(sDate){
	//20120106184020
	//2012-01-06 18:40:20
	return sDate.replace(/(....)(..)(..)(..)(..)(..)/, function(all, year, mon, day, hour, min, sec){
		//return year+"-"+mon+"-"+day+" "+hour+":"+min+":"+sec;
		return year+"-"+mon+"-"+day+" "+hour+":"+min;
	});
}
function formatUpdatedDate(sDate){
	//20120106184020
	//2012-01-06 18:40:20
	return sDate.replace(/(....)(..)(..)(..)(..)(..)/, function(all, year, mon, day, hour, min, sec){
		//return year+"-"+mon+"-"+day+" "+hour+":"+min+":"+sec;
		return year+"-"+mon+"-"+day;
	});
}
top.fullSetupWinLoaded = function(){
	var oWin = jQuery._xeAdminVar.oSetupWin;
	var $ = oWin.jQuery;
	var $body = $(oWin.document.body);
	var $form = $body.find('form[enctype="multipart/form-data"]');
	//<iframe name="submitTarget" src="about:_blank" style="position:absolute; top:-10000px; left:-10000px; width:1025px;height:769px"></iframe>
	var $target = $("<iframe>").attr('name', 'submitTarget').attr('src', 'about:_blank').attr('style', 'position:absolute; top:-10000px; left:-10000px; width:1025px;height:769px');
	$form.append($target);
	$form.append($("<INPUT>").attr("type", "hidden").attr("name", "xe_js_callback").attr("value", "top.opener.top.fullSetupDone();top.window.close();var dummy="));
	$form.attr('target', 'submitTarget');
	//console.log(oWin);
	/*
	oWin.blur();
	setTimeout(oWin.focus, 0);
	*/
};
jQuery.extend({
	stringify  : function stringify(obj) {
		if ("JSON" in window) {
			return JSON.stringify(obj);
		}
		var t = typeof (obj);
		if (t != "object" || obj === null) {
			// simple data type
			if (t == "string") obj = '"' + obj + '"';
			return String(obj);
		} else {
			// recurse array or object
			var n, v, json = [], arr = (obj && obj.constructor == Array);
			for (n in obj) {
				v = obj[n];
				t = typeof(v);
				if (obj.hasOwnProperty(n)) {
					if (t == "string") {
						v = '"' + v + '"';
					} else if (t == "object" && v !== null){
						v = jQuery.stringify(v);
					}
					json.push((arr ? "" : '"' + n + '":') + String(v));
				}
			}
			return (arr ? "[" : "{" )
				+ String(json)
				+ (arr ? "]" : "}" );
		}
	}
});
//]]>
</script>
