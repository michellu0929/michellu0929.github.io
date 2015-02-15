<?php if(!defined("__XE__"))exit;?>
<!--#Meta:layouts/ZICODE1/css/layout.css--><?php $__tmp=array('layouts/ZICODE1/css/layout.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:layouts/ZICODE1/css/layout@official.css--><?php $__tmp=array('layouts/ZICODE1/css/layout@official.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:layouts/ZICODE1/css/content.css--><?php $__tmp=array('layouts/ZICODE1/css/content.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<?php  $__Context->_lang_code = substr($__Context->lang_type,0,2)  ?>
<?php if(!in_array($__Context->_lang_code,array('en','jp','zh','ko'))){;
$__Context->_lang_code='en';
} ?>
<?php Context::addBodyClass($__Context->_lang_code) ?>
<?php $__Context->_colorset_list = array('black','blue','sky','cyan','purple','orange') ?>
<?php if(!in_array($__Context->layout_info->colorset,$__Context->_colorset_list)){;
$__Context->layout_info->colorset='black';
} ?>
<?php if($__Context->layout_info->layout_background=='Y'){;
Context::addBodyClass('gradBG'.$__Context->layout_info->colorset);
} ?>
<div id="xe" class="fixed <?php echo $__Context->layout_info->colorset ?>">
	<div id="container" class="<?php echo $__Context->layout_info->layout_type ?>">
		<div id="header"> <a href="#content" class="skipToContent">Skip to content</a>
			<ul class="account">
                
				<li class="log">
                    
                <?php if($__Context->is_logged){ ?>
                    <a href="<?php echo getUrl('act','dispMemberLogout') ?>"><img src="/michellu/xe/layouts/ZICODE1/img/buttonLogout.gif"  alt="LOGOUT" /></a>
                <?php }else{ ?>
    <?php  $__Context->member_config = MemberModel::getMemberConfig();  ?>
    <?php require_once('./classes/xml/XmlJsFilter.class.php');$__xmlFilter=new XmlJsFilter('layouts/ZICODE1/filter','login.xml');$__xmlFilter->compile(); ?>
    <?php if($__Context->member_config->enable_openid=='Y'){;
require_once('./classes/xml/XmlJsFilter.class.php');$__xmlFilter=new XmlJsFilter('layouts/ZICODE1/filter','openid_login.xml');$__xmlFilter->compile();
} ?>
    <!-- loginWindow -->
    <!-- class="loginWindow" | class="loginWindow open" -->
		<?php if($__Context->XE_VALIDATOR_MESSAGE){ ?><div class="message <?php echo $__Context->XE_VALIDATOR_MESSAGE_TYPE ?>">
			<p><?php echo $__Context->XE_VALIDATOR_MESSAGE ?></p>
		</div><?php } ?>
        <div id="loginLayer" style="padding: 5px 0 0 0;">
        <!-- class="loginLayer loginTypeA" | class="loginLayer loginTypeB" -->
            <?php Context::addJsFile("./files/ruleset/login.xml", FALSE, "", 0, "body", TRUE, "") ?><form action="" method="post" class="typeA" id="commonLogin"  ><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" /><input type="hidden" name="ruleset" value="@login" />
				<input type="hidden" name="success_return_url" value="<?php echo getRequestUriByServerEnviroment() ?>" />
				<input type="hidden" name="act" value="procMemberLogin" />
                <fieldset>
                    <legend>XE Login</legend>
                    <dl>
                        <dt><label for="uid">ID - </label>
                            <input name="user_id" type="text" style="background: transparent;"  id="uid" />
                     <label for="upw">PW - </label>
                            <input name="password" type="password" class="inputText" id="upw" />
                    <input name="keep_signed" type="checkbox" id="keepA" value="Y" class="inputCheck" onclick="if(this.checked) return confirm('<?php echo $__Context->lang->about_keep_signed ?>');"/><label for="keepA"></label>
                    <span class="loginButton"><input name="" type="image" src="/michellu/xe/layouts/ZICODE1/img/buttonLogin.gif" border="0"></span>
</dt></dl>
                    	
                </fieldset>
            </form>
            <?php if($__Context->member_config->enable_openid=='Y'){ ?>
            <form action="./" method="post" class="typeB" id="openidLogin" onsubmit="return procFilter(this, openid_login)"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="act" value="<?php echo $__Context->act ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
                <fieldset>
                    <legend>OpenID Login</legend>
                <label for="oid">Open ID</label>
              <input name="openid" type="text" class="inputText" id="oid" />
                    <span class="loginButton"><input name="" type="submit"  /><img src="/michellu/xe/layouts/ZICODE1/img/buttonLogin.gif" width="25" height="5" alt="LOGIN" /></span>
                </fieldset>
            </form>
            <?php } ?>
            <ul class="help">
                <li class="find"><a href="<?php echo getUrl('act','dispMemberFindAccount') ?>"><?php echo $__Context->lang->cmd_find_member_account ?></a></li>
                <li class="find"><a href="<?php echo getUrl('act','dispMemberResendAuthMail') ?>"><?php echo $__Context->lang->cmd_resend_auth_mail ?></a></li>
                <?php if($__Context->member_config->enable_openid=='Y'){ ?>
                <li class="typeA"><a href="#openidLogin" onclick="document.getElementById('loginLayer').className='loginLayer loginTypeB'">OpenID</a></li>
                <li class="typeB"><a href="#commonLogin" onclick="document.getElementById('loginLayer').className='loginLayer loginTypeA'">OpenID</a></li>
                <?php } ?>
            </ul>
    <!-- /loginWindow -->
                <?php } ?>
                </li>
                <?php if(!$__Context->is_logged){ ?>
				<li class="register"><a href="<?php echo getUrl('act','dispMemberSignUpForm') ?>"><span>JOIN US</span></a></li>
                <?php }else{ ?>
                
				<li class="profile">
					<button type="button" onclick="jQuery('#memberProfile').toggleClass('active');"><span>ABOUT</span></button>
					<!-- memberProfile -->
					<div id="memberProfile" class="memberProfile">
					<!-- class="memberProfile" | class="memberProfile active" -->
						<button type="button" class="close" onclick="jQuery('#memberProfile').toggleClass('active');" accesskey="X"><span>CLOSE</span></button>
						<h2 class="authorName"><?php echo $__Context->logged_info->nick_name ?></h2>
						<ul>
                            <?php if($__Context->logged_info->menu_list&&count($__Context->logged_info->menu_list))foreach($__Context->logged_info->menu_list as $__Context->key => $__Context->val){ ?>
                            <li><a href="<?php echo getUrl('act',$__Context->key,'member_srl','') ?>"><?php echo Context::getLang($__Context->val) ?></a></li>
                            <?php } ?>
						</ul>
						<button type="button" class="close" onclick="jQuery('#memberProfile').toggleClass('active');" accesskey="X"><span>CLOSE</span></button>
					</div>
					<!-- /memberProfile -->
				</li>
                <?php } ?>
					</ul>
				</li>
			</ul>
		
				</fieldset>
			</form>
		</div>
	</div>
</div>
		<div id="body">
    <center><img src="/michellu/xe/layouts/ZICODE1/img/big_logo.png" ></center>
    <div style="position:absolute;width:100px;height:100px;z-indent:2;left:0;top:0;">
        
    </div>
</div>
<div id="xe" class="fixed <?php echo $__Context->layout_info->colorset ?>">
	<div id="container" class="<?php echo $__Context->layout_info->layout_type ?>">
			<div id="content">
                <?php if($__Context->layout_info->title_main && ($__Context->layout_info->title_display!='main' || $__Context->_menu_depth==1)){ ?>
				<div class="contentHeader">
					<div class="title">
						<?php if($__Context->layout_info->title_sub){ ?><h2><?php echo $__Context->layout_info->title_sub ?></h2><?php } ?>
					</div>
					<div class="summary">
						<?php if($__Context->layout_info->title_image){ ?><img src="<?php echo $__Context->layout_info->title_image ?>" class="thumb" alt="<?php echo htmlspecialchars($__Context->layout_info->title) ?>" /><?php } ?>
                        <div class="description"><?php echo $__Context->layout_info->title_description ?></div>
					</div>
				</div>
                <?php } ?>
                <?php echo $__Context->content ?>
			</div>
            <?php if($__Context->layout_info->layout_type=='ce'){ ?>
			<div class="extension e1">
				<div class="lnb">
                    
         
                    <?php if($__Context->category && is_array($__Context->category)){ ?>
                        <?php if($__Context->category&&count($__Context->category))foreach($__Context->category as $__Context->key => $__Context->val){ ?>
                        <h3><?php echo $__Context->val->title ?> (<?php echo $__Context->val->count ?>)</h3>
                        <?php if($__Context->val->childs){ ?>
                        <ul>
                            <?php if($__Context->val->childs&&count($__Context->val->childs))foreach($__Context->val->childs as $__Context->k => $__Context->v){ ?>
                            <li<?php if($__Context->dir_srl==$__Context->v->project_dir_srl){ ?> class="active"<?php } ?>><a href="<?php echo getUrl('dir_srl', $__Context->v->project_dir_srl) ?>"><?php echo $__Context->v->title ?> (<?php echo $__Context->v->count ?>)</a></li>
                            <?php } ?>
                        </ul>
                        <?php } ?>
                        <?php } ?>
                    <?php }else{ ?>
                        <?php if($__Context->main_menu->list&&count($__Context->main_menu->list))foreach($__Context->main_menu->list as $__Context->key => $__Context->val){;
if($__Context->val['link']){ ?>
                        <?php if($__Context->val['selected']&&$__Context->val['list']){ ?>
                        <ul>
                            <?php if($__Context->val['list']&&count($__Context->val['list']))foreach($__Context->val['list'] as $__Context->k => $__Context->v){;
if($__Context->val['link']){ ?>
                            <li <?php if($__Context->v['selected']){ ?>class="active"<?php } ?>><a href="<?php echo $__Context->v['href'] ?>" <?php if($__Context->v['open_window']=='Y'){ ?>onclick="window.open(this.href);return false;"<?php } ?>><?php echo $__Context->v['text'] ?></a></li>
                        <?php };
} ?>
                        </ul>
                        <?php } ?>
                        <?php };
} ?>
                    <?php } ?>
				</div>
                <?php if($__Context->layout_info->banner_image_1){ ?>
				<div class="dLink">
					<a href="<?php echo $__Context->layout_info->banner_url_1 ?>"><img src="<?php echo $__Context->layout_info->banner_image_1 ?>" alt="" /></a>
				</div>
                <?php } ?>
                <?php if($__Context->layout_info->banner_image_2){ ?>
				<div class="dLink">
					<a href="<?php echo $__Context->layout_info->banner_url_2 ?>"><img src="<?php echo $__Context->layout_info->banner_image_2 ?>" alt="" /></a>
				</div>
                <?php } ?>
                <?php if($__Context->layout_info->banner_image_3){ ?>
				<div class="dLink">
					<a href="<?php echo $__Context->layout_info->banner_url_3 ?>"><img src="<?php echo $__Context->layout_info->banner_image_3 ?>" alt="" /></a>
				</div>
                <?php } ?>
                <?php if($__Context->layout_info->banner_image_4){ ?>
				<div class="dLink">
					<a href="<?php echo $__Context->layout_info->banner_url_4 ?>"><img src="<?php echo $__Context->layout_info->banner_image_4 ?>" alt="" /></a>
				</div>
                <?php } ?>
                <?php if($__Context->layout_info->banner_image_5){ ?>
				<div class="dLink">
					<a href="<?php echo $__Context->layout_info->banner_url_5 ?>"><img src="<?php echo $__Context->layout_info->banner_image_5 ?>" alt="" /></a>
				</div>
                <?php } ?>
                <?php if($__Context->layout_info->banner_image_6){ ?>
				<div class="dLink">
					<a href="<?php echo $__Context->layout_info->banner_url_6 ?>"><img src="<?php echo $__Context->layout_info->banner_image_6 ?>" alt="" /></a>
				</div>
                <?php } ?>
                <?php if($__Context->layout_info->banner_image_6){ ?>
				<div class="dLink">
					<a href="<?php echo $__Context->layout_info->banner_url_6 ?>"><img src="<?php echo $__Context->layout_info->banner_image_6 ?>" alt="" /></a>
				</div>
                <?php } ?>
			</div>
            <?php } ?>
		</div>
		
<footer>
			<?php if($__Context->rss_url){ ?><p class="rss"><a href="<?php echo $__Context->rss_url ?>">RSS</a></p><?php } ?>
			<img src="/michellu/xe/layouts/ZICODE1/img/footer.png">
</footer>
	</div>
</div>
