<div class="menu">
	<ul>
		<?=$html->link('<li>Home</li>','/',null,null,false);?>
		<?=$html->link('<li>Posts</li>',array('controller'=>'posts','action'=>'index'),null,null,false);?>
		<?=$html->link('<li>Tags</li>',array('controller'=>'tags','action'=>'index'),null,null,false);?>
		<? if (!$session->check('User')): ?>
			<?=$html->link('<li>Log In</li>',array('controller'=>'users','action'=>'login'),null,null,false);?>
		<? else: ?>
			<?=$html->link('<li>Add Post</li>',array('controller'=>'posts','action'=>'admin_add'),null,null,false);?>
			<?=$html->link('<li>Edit Posts</li>',array('controller'=>'posts','action'=>'admin_index'),null,null,false);?>
			<?=$html->link('<li>Log Out</li>',array('controller'=>'users','action'=>'logout'),null,null,false);?>
		<? endif;?>
	</ul>
</div>