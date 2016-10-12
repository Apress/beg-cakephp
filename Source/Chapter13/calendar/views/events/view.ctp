<h2><?=date('M',mktime(0,0,0,$month,1,$year)).' '.$year;?></h2>
<?=$calendar->render($events,$month,$year);?>