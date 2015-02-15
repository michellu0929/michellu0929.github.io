<?php if(!defined("__XE__"))exit;?><link rel="stylesheet" href="./modules/install/script/welcome_content/welcome.css" />
<article class="welcomeXE">
	<h1>XE core '<?php echo $__Context->version ?>' has been successfully installed!</h1>
	<section class="i1">
		<h1>Change the site title</h1>
		<p>After login as administrator, you can change the 'site title' as '<a href="<?php echo geturl('','module','admin','act','dispAdminConfigGeneral') ?>">Admin &gt; Settings &gt; General &gt; Primary...</a>' progress.</p>
		<a href="<?php echo geturl('','module','admin','act','dispAdminConfigGeneral') ?>">Settings</a>
	</section>
	<section class="i2">
		<h1>Change the menu structure</h1>
		<p>After login as administrator, you can change the 'menu structure' as '<a href="<?php echo geturl('','module','admin','act','dispMenuAdminSiteMap') ?>">Admin &gt; Menu &gt; Menu Editor...</a>' progress.</p>
		<a href="<?php echo geturl('','module','admin','act','dispMenuAdminSiteMap') ?>">Settings</a>
	</section>
	<section class="i3">
		<h1>Change the layout design</h1>
		<p>After login as administrator, you can change the 'layout design' as '<a href="<?php echo geturl('','module','admin','act','dispMenuAdminSiteDesign') ?>">Admin &gt; Menu &gt; Site Design...</a>' progress.</p>
		<a href="<?php echo geturl('','module','admin','act','dispMenuAdminSiteDesign') ?>">Settings</a>
	</section>
	<section class="i4">
		<h1>Main page replacement</h1>
		<p>After login as administrator, you can change the 'main page' as '<a href="<?php echo geturl('','module','admin','act','dispMenuAdminSiteMap') ?>">Admin &gt; Menu &gt; Menu Editor...</a>' progress.</p>
		<a href="<?php echo geturl('','module','admin','act','dispMenuAdminSiteMap') ?>">Settings</a>
	</section>
	<section class="i5">
		<h1>Main page decoration</h1>
		<p>After login as administrator, you can edit the 'main page' by click the '<a href="<?php echo geturl('', 'mid', $__Context->mid, 'act','dispPageAdminContentModify') ?>">Modify...</a>' button.</p>
		<a href="<?php echo geturl('', 'mid', $__Context->mid, 'act','dispPageAdminContentModify') ?>">Settings</a>
	</section>
	<section class="i6">
		<h1>Module installation</h1>
		<p>After login as administrator, you can install the 'module' as '<a href="<?php echo geturl('','module','admin','act','dispAutoinstallAdminIndex') ?>">Admin &gt; Advanced &gt; Easy install...</a>' progress.</p>
		<a href="<?php echo geturl('','module','admin','act','dispAutoinstallAdminIndex') ?>">Settings</a>
	</section>
</article>
