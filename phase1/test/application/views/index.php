<?php include("_site_header.php"); ?>
	<a class="btn pull-right" href="<?=site_url("post/new_/".$category->CategoryID ) ?>" >留言</a>
	<h3><?= $category->CategoryName ?></h3>
	   <?php if($posts==null) echo "<p class='well'>暫無資料</p>"?>
       <?php foreach( (array)$posts as $item ){?>
   			<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				  <div class="modal-header">
				    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				    <h3 id="myModalLabel">刪除留言</h3>
				  </div>
				  <div class="modal-body">
				    <p>確定刪除留言嗎？</p>
				  </div>
				  <div class="modal-footer">
				    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
				    <a class="btn btn-danger" href="<?=site_url("post/delete/".$item->PostID)?>"> Delete Post</a>
				  </div>
			</div>

       		<table class="table table-bordered">
       			<div class="btn-group pull-right">
				  <a class="btn btn-info" href="<?=site_url("post/edit/".$item->PostID)?>" ><i class="icon-pencil icon-white"></i> Edit</a>
				  <a class="btn btn-danger" data-toggle="modal" role="button" href="#myModal" ><i class="icon-trash icon-white"></i> Delete</a>
				</div>


       			<thead>
				    <tr>
				      <th>Name</th>
				      <th>Email</th>
				      <th>Create Date</th>
				      <th>Modify Date</th>
				    </tr>
				</thead>
				<tbody>
				    <tr>
				      <td><?= htmlspecialchars( $item->UserName )?></td>
				      <td><?= htmlspecialchars( $item->UserEmail )?></td>
				      <td><?= htmlspecialchars( $item->CreateDate )?></td>
				      <td><?= htmlspecialchars( $item->ModifyDate )?></td>
				    </tr>
				    <tr>
				    	<td colspan="4"><?= htmlspecialchars($item->Content) ?></td>
				    </tr>
			    </tbody>
       		</table>

       <?php }?>

<?php include("_site_footer.php"); ?>