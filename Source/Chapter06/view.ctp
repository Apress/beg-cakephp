<div class="posts view"> 
<h2><?php  __('Post');?></h2> 
	<dl><?php $i=0; $class='class="altrow"'; ?> 
		<dt<?php if ($i%2==0) echo $class; ?>><?php __('Id');?></dt> 
		<dd<?php if ($i++%2==0) echo $class; ?>> 
			<?php echo $post['Post']['id']; ?> 
			&nbsp; 
		</dd> 
		<dt<?php if ($i%2==0) echo $class; ?>><?php __('Name');?></dt> 
		<dd<?php if ($i++%2==0) echo $class; ?>> 
			<?php echo $post['Post']['name']; ?> 
			&nbsp; 
		</dd> 
		<dt<?php if ($i % 2 == 0) echo $class; ?>><?php __('Date'); ?></dt> 
		<dd<?php if ($i++%2==0) echo $class; ?>> 
			<?php echo $post['Post']['date']; ?> 
			&nbsp; 
		</dd> 
		<dt<?php if ($i%2==0) echo $class; ?>><?php __('Content');?></dt> 
		<dd<?php if ($i++%2==0) echo $class; ?>> 
			<?php echo $post['Post']['content']; ?> 
			&nbsp; 
		</dd> 
		<dt<?php if ($i % 2 == 0) echo $class; ?>><?php __('User'); ?></dt> 
		<dd<?php if ($i++%2==0) echo $class; ?>> 
			<?php echo $html->link($post['User']['name'],array('controller'=>'users', 'action'=>'view', $post['User']['id'])); ?> 
			&nbsp; 
		</dd> 
	</dl> 
</div>