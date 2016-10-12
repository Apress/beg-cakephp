<div class="calendar_events form">
<?=$form->create('CalendarEvent',array('url'=>'/calendar/events/add'));?>
	<fieldset>
 		<legend>Add Calendar Event</legend>
		<?=$form->input('name');?>
		<?=$form->input('date');?>
		<?=$form->input('details');?>
	</fieldset>
<?=$form->end('Submit');?>
</div>