<? if (!empty($error)): ?> 
	<p><?=$error;?></p> 
	<?=$form->input('Post.content', array('label'=>'Content','rows'=>'15','cols'=>'75'));?> 
<? else: ?> 
	<p>Upload successful</p> 
	<?=$form->input('Post.content',array('label'=>'CurrentText','value'=>$text,'rows'=>'15','cols'=>'75'));?> 
<? endif;?> 
<?=$form->input('Post.upload_text',array('label'=>'Upload Text File ','type'=>'file'));?> 
<?=$form->button('Upload Text',array('onClick'=>'$(\'#postAddForm\').ajaxSubmit({target: \'#postTextUpload\',url: \"'.$html->url('/posts/text').'\'}); return false;'));?>