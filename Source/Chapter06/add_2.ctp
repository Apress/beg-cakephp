<div class="posts form"> 
<?=$form->create('Post');?> 
	<fieldset> 
		<legend>Add Post</legend> 
	<? 
		e($form->input('name')); 
		e($form->input('date')); 
		e($form->input('content')); 
		e($form->input('User')); 
		e($form->input('Tag')); 
	?> 
	</fieldset> 
<?=$form->end('Submit');?> 
</div>