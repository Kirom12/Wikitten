<div class="breadcrumbs">    

	<ul class="breadcrumb">
		<li>
			<a href="<?php echo BASE_URL; ?>"><i class="glyphicon glyphicon-home glyphicon-white"></i> /wiki</a>
		</li>

		<li>
			<a href="<?php echo BASE_URL; ?>/404"><i class="glyphicon glyphicon-exclamation-sign glyphicon-white"></i> Error</a>
		</li>
	</ul>
</div>
<h1>Uh oh!</h1>
<p>
	An <strong>error</strong> ocurred: <code><?php echo $error ?></code>
	<?php if ($page_url && ENABLE_EDITING): ?>
		<?php $url = BASE_URL . "/" . $page_url ?>
		Create <a href="<?php echo $url . "/?a=create" ?>"><?php echo $page_url; ?></a>
	<?php endif ?>
</p>
