<?php include('_site_header.php');?>

<?php echo validation_errors(); ?>
<?php echo form_open('post/create'); ?>

<table>
	<tr>
		<td>名字</td>
		<td>
			<input type="text" name="name" value="<?php echo set_value('name'); ?>"/>
		</td>
	</tr>
	<tr>
		<td>
			信箱
		</td>
		<td>
			<input type="email" name="email" value="<?php echo set_value('email'); ?>" />
		</td>
		<td></td>
	</tr>
	<tr>
		<td>
			留言內容
		</td>
		<td>
			<textarea name="text" rows="4" value="<?php echo set_value('text'); ?>">
			</textarea>
		</td>
	</tr>
	<tr>
		<td colspan="2">
			<input class="btn" type="submit" value="送出" />
		</td>
	</tr>
</table>
</form>

<?php include('_site_footer.php');?>
<script>
	checkForm();
</script>