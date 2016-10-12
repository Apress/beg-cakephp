<?=$rss->channel(null,array('title'=>'Extensive Blog','description'=>'My Blog','language'=>'en-us'));?>
<? foreach($posts as $post): ?>
<?=$rss->item(null,$post);?>
<? endforeach;?>
</channel>