<div class="posts form"> 
	<?php echo $form->create('Post');?> 
	<fieldset> 
	<legend><?php __('AddPost');?></legend> 
	<?php 
		echo $form->input('name'); 
		echo $form->input('date'); 
		echo $form->input('content'); 
		echo $form->input('user_id'); 
		echo $form->input('Tag'); 
	?> 
	</fieldset> 
	<?php echo $form->end('Submit');?> 
</div> 
<div class="actions"> 
	<ul>
		<li><?php echo $html->link(__('ListPosts',true),array('action'=>'index'));?></li> 
		<li><?php echo $html->link(__('ListUsers',true),array('controller'=> 'users', 'action'=>'index')); ?> </li> 
		<li><?php echo $html->link(__('NewUser',true),array('controller'=> 'users', 'action'=>'add')); ?> </li> 
		<li><?php echo $html->link(__('ListTags',true),array('controller'=> 'tags', 'action'=>'index')); ?> </li> 
		<li><?php echo $html->link(__('NewTag',true),array('controller'=>'tags', 'action'=>'add')); ?> </li> 
	</ul> 
</div>