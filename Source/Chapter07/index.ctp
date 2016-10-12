<? foreach($posts as $post): ?> 
<div class="story"> 
<?=$html->link('<h1>'.$post['Post']['name'].'</h1>','/posts/view/'.$post['Post']['id'],null,null,false);?> 
<p>Posted<?=date('MjSY,g:ia',strtotime($post['Post']['date']));?></p> 
<p><b>By<?=$post['User']['firstname'];?> <?=$post['User']['lastname'];?></b> </p> 
<br/> 
<p><?=$post['Post']['content'];?></p> 
</div> 
<?endforeach; ?> 