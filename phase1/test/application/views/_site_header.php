<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html" charset="utf-8">
	<meta name="author" content="Lucien Lee">
	<link rel="stylesheet" href="<?=base_url("/css/bootstrap.min.css")?>" />
	<link rel="stylesheet" href="<?=base_url("/css/bootstrap-responsive.min.css")?>">
	<link rel="stylesheet" href="<?=base_url("/css/customstyle.css")?>" />
	<title>RD training tutorial</title>
</head>
<body>
	<div class="container-narrow">
		<div class="masthead">
			<?php if( isset($category) ){
				_render_category($category);
			}?>
	        <h2 class="muted"><a href="<?= site_url('category/index')?>">PHP Board</a></h2>
	    </div>
      <hr>