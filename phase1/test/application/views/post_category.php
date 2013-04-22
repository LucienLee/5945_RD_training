<?php include("_site_header.php"); ?> 


<ul class="nav nav-tabs nav-stacked">
	<?php foreach($posts as $item){?>
	<li><a href="<?=site_url("post/category/$item->CategoryID")?>"><?= $item->CategoryName?></a></li>
	<?php } ?>
</ul>

<?php include("_site_footer.php"); ?> 