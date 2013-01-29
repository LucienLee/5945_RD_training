<?php include("_site_header.php"); ?> 

       <?php foreach( $posts as $item ){?>
       		<table class="table table-bordered">
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
				    	<td colspan="4"><?= htmlspecialchars( $item->Content) ?></td>
				    </tr>
			    </tbody>
       		</table>
       <?php }?>

<?php include("_site_footer.php"); ?> 