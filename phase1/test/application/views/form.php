<?php include('_site_header.php');?>
<?php function sub_section(){ ?> 
	<? die( var_dump($GLOBALS['category'])); ?>
    <? _render_category($category); ?>
<?php } ?>


<?php echo validation_errors(); ?>
<?php echo form_open($form_action, array( 'class'=>'form-custom')); ?>

		<label class="control-label" for="name">名字</label>
		<input type="text" name="name" id="name" value="<?php if( isset($post) ){ echo htmlspecialchars($post->UserName); }?>"/>
		<label for="email">信箱</label>
		<input type="email" name="email" id="email" value="<?php if( isset($post) ){echo htmlspecialchars($post->UserEmail); }?>" />
		<label for="text">留言內容</label>
		<textarea name="text" rows="4" id="text"><?php if( isset($post) ){ echo htmlspecialchars($post->Content); }?></textarea>
		<br>
	
		<input class="btn" type="submit" value="送出" />
		<input class="btn" type="<?php if(isset($post)){ 
										'post/category'.$post->Category; 
										}else{ $category->CategoryID; } ?>" value="取消" />
</form>

<?php include('_site_footer.php');?>
<script>
	checkForm();
</script>