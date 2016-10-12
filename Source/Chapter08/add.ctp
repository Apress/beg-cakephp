<div class="posts form"> 
<?=$form->create('Post',array('name'=>'postAddForm','id'=>'postAddForm','type'=>'file'));?> 
	<fieldset> 
		<legend>AddPost</legend> 
		<?=$form->input('name');?> 
		<?=$form->input('date');?> 
		<?=$form->input('content');?> 
	<div id="postTextUpload"> 
		<?=$form->input('content', array('label'=>'Content ','rows'=>'15','cols'=>'75'));?> 
		<?=$form->input('upload_text',array('label'=>'Upload Text File ','type'=>'file'));?> 
		<?=$form->button('UploadText',array('onClick'=>'$(\'#postAddForm\').ajaxSubmit({target: \'#postTextUpload\',url:\"'.$html->url('/posts/text').'\'});return false;'));?> 
	</div> 
	<?=$form->input('User');?> 
	<?=$form->input('Tag',array('type'=>'select','multiple'=>'checkbox'));?> 
	</fieldset> 
<?=$form->end('Submit');?> 
</div>