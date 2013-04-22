<?function _render_category($category){ ?>
	<ul class="nav nav-pills pull-right">
      <li<?php if($category->CategoryName == '一般留言')echo ' class="active"' ?>><a href="<?=site_url("post/category/0")?>">一般留言</a></li>
      <li<?php if($category->CategoryName == '公布欄')echo ' class="active"' ?>><a href="<?=site_url("post/category/1")?>">公布欄</a></li>
    </ul>
<?} ?>