<?php if(!defined("__XE__"))exit;?><!--#Meta:layouts/rkt002/css/bootstrap.css--><?php $__tmp=array('layouts/rkt002/css/bootstrap.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:layouts/rkt002/js/bootstrap.min.js--><?php $__tmp=array('layouts/rkt002/js/bootstrap.min.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation" style="height: 80px;">
	<div class="container" style="margin-top: 15px;">
		<div class="navbar-header">
			<a class="navbar-brand" href="#"><?php echo $__Context->layout_info->text_logo ?></a>
		</div>
		<div class="collapse navbar-collapse">
			<ul class="nav navbar-nav navbar-right">
				<?php if($__Context->main_menu->list&&count($__Context->main_menu->list))foreach($__Context->main_menu->list as $__Context->key1=>$__Context->val1){;
if($__Context->val1['text']){ ?><li>
				<?php if($__Context->val1['link']!="||||"){ ?>
				<li<?php if($__Context->val1['list'] || $__Context->val1['selected']){ ?> class="<?php if($__Context->val1['list']){ ?>dropdown <?php };
if($__Context->val1['selected']){ ?>active<?php } ?>"<?php } ?>>
					<a href="<?php echo $__Context->val1['href'] ?>"<?php if($__Context->val1['list']){ ?> class="dropdown-toggle" data-toggle="dropdown" <?php };
if($__Context->val1['open_window']=='Y'){ ?> target="_blank"<?php } ?>><?php echo $__Context->val1['link'];
if($__Context->val1['list']){ ?> <span class="caret"></span><?php } ?></a>
					<?php if($__Context->val1['list']){ ?><ul class="dropdown-menu">
						<?php if($__Context->val1['list']&&count($__Context->val1['list']))foreach($__Context->val1['list'] as $__Context->key2=>$__Context->val2){;
if($__Context->val2['link']){ ?><li>
						<?php if(strpos($__Context->val2['href'],'dropdown-header')!== false){ ?>
						<li class="dropdown-header"><?php echo $__Context->val2['link'] ?></li>
						<?php }elseif($__Context->val2['link']!="----"){ ?>
						<li<?php if($__Context->val2['list'] || $__Context->val2['selected']){ ?> class="<?php if($__Context->val2['list']){ ?>dropdown-submenu <?php };
if($__Context->val2['selected']){ ?>active<?php } ?>"<?php } ?>>
							<a tabindex="-1" href="<?php echo $__Context->val2['href'] ?>"<?php if($__Context->val2['open_window']=='Y'){ ?> target="_blank"<?php } ?>><?php echo $__Context->val2['link'] ?></a>
						</li>
						<?php }else{ ?>
						<li class="divider"></li>
						<?php } ?>
						</li><?php }} ?>
					</ul><?php } ?>
				</li>
				<?php }else{ ?>
				<li class="divider"></li>
				<?php } ?>
				</li><?php }} ?>
			</ul>
		</div>
	</div>
</nav>
<div class="jumbotron text-center" style="margin-bottom: 0;">
	<br><br>
	<h1 style="color: #fff;margin-bottom: 50px;"><?php echo $__Context->layout_info->banner_content ?></h1>
	<span style="font-size: 204pt;color: #fff;" class="glyphicon glyphicon-globe"></span>
</div>
<div class="well" style="margin-top: 0;">
	<div class="container">
		<?php echo $__Context->content ?>
	</div>
</div>
<div class="jumbotron-copyright">
	<div class="container">
		<?php echo $__Context->layout_info->copyright ?>
	</div>
</div>
