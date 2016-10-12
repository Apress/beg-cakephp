<?=$html->link('<h1>'.$post['Post']['name'].'</h1>','/posts/view/'.$post['Post']['id'],null,null,false);?> 
<p>Author: <?=$post['User']['firstname'];?> <?=$post['User']['lastname'];?></p> 
<p>Date Published: <?=$post['Post']['date'];?></p> 
<hr/> 
<p><?=$post['Post']['content'];?></p>