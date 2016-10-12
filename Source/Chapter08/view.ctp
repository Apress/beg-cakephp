<?=$html->link('<h1>'.$post['Post']['name'].'</h1>','/posts/view/'.$post['Post']['id'],null,null,false);?> 
<p>Author: <?=$post['User']['firstname'];?> <?=$post['User']['lastname'];?></p> 
<p>Date Published: <?=$post['Post']['date'];?></p> 
<hr/> 
<p><?=$post['Post']['content'];?></p>
<hr/>
<h2>Comments</h2>
<div id="comments">
<? foreach($comments as $comment): ?> 
	<div class="comment">
		<div id="vote_<?=$comment['Comment']['id'];?>"> 
			<div class="cast_vote"> 
				<ul> 
					<?=$ajax->link('<li>up</li>','/comments/vote/up/'.$comment['Comment']['id'],array('update'=>'vote_'.$comment['Comment']['id']),null,false);?> 
					<?=$ajax->link('<li>down</li>','/comments/vote/down/'.$comment['Comment']['id'],array('update'=>'vote_'.$comment['Comment']['id']),null,false);?> 
				</ul> 
			</div> 
			<div class="vote"><?=$comment['Comment']['votes'];?></div> 
		</div>
		<p><b><?=$comment['Comment']['name'];?></b></p> 
		<p><?=$comment['Comment']['content'];?></p> 
	</div> 
<? endforeach;?>
<?=$ajax->form('/comments/add','post',array('update'=>'comments'));?> 
<?=$form->input('Comment.name');?> 
<?=$form->input('Comment.content');?> 
<?=$form->input('Comment.post_id',array('type'=>'hidden','value'=>$post['Post']['id']));?> 
<?=$form->end('Add Comment');?>
</div>