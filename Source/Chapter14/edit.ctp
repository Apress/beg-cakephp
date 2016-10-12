<div class="tags form">
<?php echo $form->create('Tag');?>
	<fieldset>
 		<legend><?php __('Edit Tag');?></legend>
	<?php
		echo $form->input('id');
		echo $form->input('name');
		echo $form->input('Post',array('multiple'=>'checkbox'));
		echo $form->input('parent_id',array('label'=>'Parent Tag','type'=>'select','options'=>$tags,'empty'=>'- No Parent Tag -'));
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action'=>'delete', $form->value('Tag.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('Tag.id'))); ?></li>
		<li><?php echo $html->link(__('List Tags', true), array('action'=>'index'));?></li>
		<li><?php echo $html->link(__('List Posts', true), array('controller'=> 'posts', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Post', true), array('controller'=> 'posts', 'action'=>'add')); ?> </li>
	</ul>
</div>
<? debug($this->data);?>
