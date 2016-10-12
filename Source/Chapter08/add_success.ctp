<? foreach ($comments as $comment): ?> 
<divclass="comment"> 
<p><b><?=$comment['Comment']['name'];?></b></p> 
<p><?=$comment['Comment']['content'];?></p> 
</div> 
<?endforeach;?>