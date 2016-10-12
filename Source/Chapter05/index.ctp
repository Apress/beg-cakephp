<h2>Blog Posts</h2> 
<table cellpadding="0" cellspacing="0"> 
<tr> 
	<th>ID</th> 
	<th>Name</th> 
	<th>Date</th> 
	<th>Content</th> 
	<th>User</th> 
	<th>Actions</th> 
</tr> 
<? foreach($posts as $post): ?> 
<tr> 
	<td><?=$post['Post']['id'];?></td> 
	<td><?=$post['Post']['name'];?></td> 
	<td><?=$post['Post']['date'];?></td> 
	<td><?=$post['Post']['content'];?></td> 
	<td><?=$post['User']['name'];?></td> 
	<td class="actions"> 
		<?=$html->link('View','/posts/view/'.$post['Post']['id']);?> 
		<?=$html->link('Edit','/posts/edit/'.$post['Post']['id']);?> 
		<?=$html->link('Delete','/posts/delete/'.$post['Post']['id'],null,'Are you sure you want to delete #'.$post['Post']['id']);?> 
	</td> 
</tr> 
<? endforeach;?> 
</table> 
<div class="actions"> 
	<ul><li><?=$html->link('NewPost','/posts/add');?></li></ul> 
</div> 