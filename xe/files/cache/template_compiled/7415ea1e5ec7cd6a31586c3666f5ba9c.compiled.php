<?php if(!defined("__XE__"))exit;
Context::loadLang('layouts/xe_cafe_site/lang'); ?>
<!--#Meta:layouts/xe_cafe_site/js/layout.js--><?php $__tmp=array('layouts/xe_cafe_site/js/layout.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:layouts/xe_cafe_site/css/framework.css--><?php $__tmp=array('layouts/xe_cafe_site/css/framework.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:layouts/xe_cafe_site/css/cafe.css--><?php $__tmp=array('layouts/xe_cafe_site/css/cafe.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:widgets/content/skins/default/css/widget.css--><?php $__tmp=array('widgets/content/skins/default/css/widget.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<?php if($__Context->layout_info->content_position == "right"){;
$__Context->_posClass = "ec";
}else{;
$__Context->_posClass = "ce";
} ?>
<?php if(!$__Context->layout_info->index_url){ ?>
    <?php if($__Context->site_module_info){ ?>
        <?php $__Context->layout_info->index_url = getFullSiteUrl($__Context->site_module_info->domain) ?>
    <?php }else{ ?>
        <?php $__Context->layout_info->index_url = Context::getRequestUri() ?>
    <?php } ?>
<?php } ?>
<?php if($__Context->layout_info->logo_background_image){ ?>
<style> #header, .header {background-image:url("<?php echo $__Context->layout_info->logo_background_image ?>") !important; } </style>
<?php } ?>
<div id="xe">
    <div class="fixed">
        <div id="container" class="<?php echo $__Context->_posClass ?>">
            <!-- #header -->
            <div id="header">
				<div class="header">
					<a href="#content" class="skipToContent">Skip to content.</a>
					<div class="menu">
						
						<ul class="menu_lst">
						<?php if($__Context->cafe_xe_top_menu->list&&count($__Context->cafe_xe_top_menu->list))foreach($__Context->cafe_xe_top_menu->list as $__Context->key1=>$__Context->val1){ ?><li<?php if(count($__Context->cafe_xe_top_menu->list) == $__Context->i+1){ ?> class="last"<?php } ?>><?php $__Context->i++;
if($__Context->val1['href']){ ?><a href="<?php echo $__Context->val1['href'] ?>"<?php if($__Context->val1['open_window']=='Y'){ ?> target="_blank"<?php } ?>><?php echo $__Context->val1['link'] ?></a><?php } ?></li><?php } ?>
						</ul>
						<ul class="menu_r">
						<li><?php if($__Context->logged_info){ ?><a href="<?php echo getUrl('act','dispMemberLogout') ?>">Sign Out</a><?php } ?></li>
						<?php if($__Context->logged_info){ ?>
							<li id="profile" class="sub"><a href="#">Porfile</a>
							<img class="zbxe_widget_output" widget="login_info" skin="cafe_site" /></li>
						<?php } ?>
						<li class="sub last">
						<img class="zbxe_widget_output" widget="language_select" skin="cafe_site" />
						</li>
						</ul>
						</div>
					<?php if($__Context->layout_info->logo_image){ ?>
					<a href="<?php echo $__Context->layout_info->index_url ?>" class="logo"><img src="<?php echo $__Context->layout_info->logo_image ?>" title="<?php echo $__Context->layout_info->logo_text ?>" /></a>
					<?php } ?>
					<?php if($__Context->layout_info->logo_text){ ?>
					<h1><a href="<?php echo $__Context->layout_info->index_url ?>"><?php echo $__Context->layout_info->logo_text ?></a><span class="url"><a href="<?php echo $__Context->layout_info->index_url ?>"><?php echo $__Context->layout_info->index_url ?></a></span></h1>
					<?php }else{ ?>
					<h1><a href="<?php echo getFullUrl('mid') ?>">Cafe<sup>XE</sup></a></h1>
					<?php } ?>
                    <?php if(Context::get('is_homepage')){ ?>
                    <ul class="topMenu">
                    <?php if($__Context->grant->manager){ ?>
                        <li class="setup"><a href="<?php echo getUrl('act','dispHomepageManage') ?>"><?php echo $__Context->lang->cmd_cafe_setup ?></a></li>
                    <?php } ?>
                    <?php if(Context::getDefaultUrl()){ ?>
                        <li class="homepage"><a href="<?php echo getUrl('') ?>">Home</a></li>
                    <?php } ?>
                    </ul>
                    <?php } ?>
					<form action="<?php echo getUrl() ?>" method="post" class="search"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" />
						<fieldset>
							<input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
							<input type="hidden" name="act" value="dispHomepageIS" />
							<input type="hidden" name="search_target" value="title" />
							<!--<legend><?php echo $__Context->lang->cmd_search ?></legend>-->
							<input type="text" value="" name="is_keyword" class="inputText">
							<input type="image" alt="search" src="/michellu/xe/layouts/xe_cafe_site/img/btn_search.gif" class="buttonSearch">
						</fieldset>
					</form>
				</div>
            </div>
            <!-- /#header -->
            <hr class="hr" />
            <!-- #body -->
            <div id="body">
                <div id="content" class="content">
	                    <?php echo $__Context->content ?>
                </div>
                <hr class="hr" />
                <div class="extension e1 ow_e1">
					<?php if(!$__Context->logged_info){ ?>
						<div id="info" class="info cafe">
						
								
								<div class="section memberInfo">
									<img class="zbxe_widget_output" widget="login_info" skin="cafe_site" />
								</div>
						</div>
					<?php } ?>
					<?php if($__Context->logged_info){ ?>
						 <ul class="widgetTab">
						 <li id='cafe_info' class="cafe_info on"><a href="#">Cafe Info</a></li>
						 <li id='member_info' class="member_info"><a href="#">Member Info</a></li>
						 </ul>
						 <!--calculate article count -->
						 <?php  $__Context->oHomepageModel = &getModel('homepage');
							$__Context->homepageInfo = $__Context->oHomepageModel->getHomepageInfo($__Context->module_info->site_srl);
							$__Context->oMuduleModel = &getModel('module');
							$__Context->modules  = $__Context->oMuduleModel->getModulesInfoByLayout($__Context->module_info->layout_srl);
							$__Context->articleCount = 0;
						  ?>
						<?php if(count($__Context->modules)>0){ ?>
							<?php if($__Context->modules&&count($__Context->modules))foreach($__Context->modules as $__Context->key => $__Context->module){ ?>
							<?php  $__Context->oDocumentModel = &getModel('document');
							   $__Context->documentCount = $__Context->oDocumentModel->getDocumentCount($__Context->module->module_srl);
							   $__Context->module_srl_array[$__Context->key] = $__Context->module->module_srl;
							   $__Context->articleCount += $__Context->documentCount;
							 ?>
							<?php } ?>
						<?php } ?>
						<?php 
							$__Context->oModuleModel = &getModel('module');
							$__Context->siteAminInfo = $__Context->oModuleModel->getSiteAdmin($__Context->homepageInfo->site_srl);
						 ?>
						 <ul id='cafe_info_area' class="widgetMyInfo cafe_info">
						 <li><span>Cafe Admin</span><b><?php echo $__Context->siteAminInfo[0]->nick_name ?></b></li>
						 <li><span>Article</span><em><?php echo $__Context->articleCount ?></em></li>
						 <li><span>Create&nbsp;Date</span><?php echo zdate($__Context->homepageInfo->regdate,'Y.m.d') ?></li>
						 </ul>
						<!--calculate comment and reply count -->
						<?php  $__Context->arg->search_target = 'member_srl';
						   $__Context->arg->search_keyword = $__Context->logged_info->member_srl;
						   $__Context->arg->module_srl = $__Context->module_srl_array;
						   $__Context->oCommentModel = &getModel('comment');
						   $__Context->memberComments = $__Context->oCommentModel->getTotalCommentList($__Context->arg);
						   $__Context->comment_count = 0;
						   $__Context->reply_count = 0;
						 ?>
						<?php if(count($__Context->memberComments->data)>0){ ?>
							<?php if($__Context->memberComments->data&&count($__Context->memberComments->data))foreach($__Context->memberComments->data as $__Context->key => $__Context->comment){ ?>
								<?php if($__Context->comment->parent_srl == 0){ ?>
									<?php $__Context->comment_count++; ?>
								<?php }else{ ?>
									<?php $__Context->reply_count++; ?>
								<?php } ?>
							<?php } ?>
						<?php } ?>
						 <ul id="member_info_area" class="widgetMyInfo member_info" style="display:none">
						 <li><span class="b"><?php echo $__Context->logged_info->nick_name ?></span><a href="<?php echo getUrl('act','dispMemberModifyInfo') ?>"><img src="/michellu/xe/layouts/xe_cafe_site/img/btn_edit.gif" width="26" height="13" alt="edit"></a></li>
						 <li><span>Comment</span><em><?php echo $__Context->comment_count ?></em><span>Reply</span><em><?php echo $__Context->reply_count ?></em></li>
						 <li><span>Join&nbsp;Date</span><?php echo zdate($__Context->logged_info->regdate,'Y.m.d') ?></li>
						 </ul>
					 <?php } ?>
					 <?php  $__Context->group_count = count($__Context->logged_info->group_list); ?>
					 <?php if($__Context->logged_info){ ?>
						 <?php if(!$__Context->group_count){ ?>
							<div class="btn_out_site_info" style="display:none"><input type="button" onclick="doSiteSignUp(); return false;"  value="<?php echo $__Context->lang->cmd_site_signup ?>" ></div>
						 <?php }else{ ?>
							<div class="btn_out_site_info" style="display:none"><input type="button" onclick="doSiteLeave('<?php echo $__Context->lang->confirm_leave ?>'); return false;" value="<?php echo $__Context->lang->cmd_leave ?>"></div>
						 <?php } ?>
						<div class="btn_out" style="display:none"><input type="button" onclick="location.href='<?php echo getUrl('act','dispMemberLogout') ?>';return false;" value="<?php echo $__Context->lang->cmd_logout ?>" /></div>
					 <?php } ?>
					<?php if($__Context->site_module_info->site_srl>0){ ?>
					<div class="cafeMenu">
						<h2><?php echo $__Context->lang->menu ?></h2>
						<img class="zbxe_widget_output" widget="navigator" skin="tree" />
					</div>
					<div id="info" class="info cafe">
						<div class="section memberInfo">
							<img class="zbxe_widget_output" widget="site_info" skin="xe_cafe_site" />
						</div>
					</div>
					<div class="section visitorStat">
						<h2><?php echo $__Context->lang->counter ?></h2>
						<img class="zbxe_widget_output" widget="counter_status" skin="default" />
					</div>
				<span class="top"></span>
				<span class="btm"></span>
                </div>
                <hr class="hr" />
				<?php } ?>
				<?php if($__Context->mid=='home'){ ?>
				<div class="extension e2">
					<div class="section newMember">
						<h2><?php echo $__Context->lang->new_members ?></h2>
						<img class="zbxe_widget_output" widget="member_group" skin="default" list_count="5" />
					</div>
					<div class="section docRank">
						<h2><?php echo $__Context->lang->document_ranking ?></h2>
						<img class="zbxe_widget_output" widget="rank_count" rankby="document" skin="default" list_count="5" />
					</div>
					<div class="section replyRank">
						<h2><?php echo $__Context->lang->comment_ranking ?></h2>
						<img class="zbxe_widget_output" widget="rank_count" rankby="comment" skin="default" list_count="5" />
					</div>
					<div class="section onMember">
						<h2><?php echo $__Context->lang->logged_users ?></h2>
						<img class="zbxe_widget_output" widget="logged_members" skin="default" list_count="99999" />
					</div>
				</div>
				<?php } ?>
				<span class="end top"></span>
				<span class="end btm"></span>
            </div>
            <!-- /#body -->
            <hr class="hr" />
            <!-- #footer -->
            <div id="footer">
				<address>Powered&nbsp;by&nbsp;XE.</address>
					<!-- 언어 선택 위젯 -->
            </div>
            <!-- /#footer -->
        </div>
    </div>
</div>
<script>
jQuery(function($){
	$('#profile>a').click(function(){
		$(this).parent().toggleClass('on');
		if($('#profile').hasClass('on')){
			$('.profile_info').show();
		}else{
			$('.profile_info').hide();
		}
	});
	if($('#cafe_info_area').is(':visible')){
		$('.btn_out_site_info').show();
		$('.btn_out').hide();
	}else{
		$('.btn_out_site_info').hide();
		$('.btn_out').show();
	}
	$('#cafe_info>a').click(function(){
		$(this).parent().addClass('on');
		$('#member_info').removeClass('on');
		$('#cafe_info_area').show();
		$('#member_info_area').hide();
		$('.btn_out_site_info').show();
		$('.btn_out').hide();
	});
	$('#member_info>a').click(function(){
		$(this).parent().addClass('on');
		$('#cafe_info').removeClass('on');
		$('#member_info_area').show();
		$('#cafe_info_area').hide();
		$('.btn_out_site_info').hide();
		$('.btn_out').show();
	});
});
</script>
