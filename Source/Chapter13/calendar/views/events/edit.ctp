<div class="calendar_events form">
<?=$form->create('CalendarEvent',array('url'=>'/calendar/events/edit'));?>
	<fieldset>
 		<legend>Edit Calendar Event</legend>
 		<?=$form->input('id',array('type'=>'hidden'));?>
		<?=$form->input('name');?>
		<?=$form->input('date');?>
		<?=$form->input('details');?>
	</fieldset>
<?=$form->end('Submit');?>
</div>