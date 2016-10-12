<h2><?=date('M').' '.date('Y');?></h2>
<?=$calendar->render($events,date('m'),date('Y'));?>