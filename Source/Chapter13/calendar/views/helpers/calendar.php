<?
class CalendarHelper extends Helper {
	var $helpers = array('Html');
	var $Details = null;
	
	function render($events=array(), $month=null, $year=null) {
		//Initialize variables for this function =>
		$firstdate = mktime(0, 0, 0, $month, 1, $year);
		$lastdate = mktime(0, 0, 0, $month+1, 0, $year); 
		$firstday = strftime("%a", $firstdate);
		$day = 1;
		$days_array = array(
			1=>'Sun', 2=>'Mon', 3=>'Tue', 4=>'Wed', 5=>'Thu', 6=>'Fri', 7=>'Sat',
			8=>'Sun', 9=>'Mon',10=>'Tue',11=>'Wed',12=>'Thu',13=>'Fri',14=>'Sat',
			15=>'Sun',16=>'Mon',17=>'Tue',18=>'Wed',19=>'Thu',20=>'Fri',21=>'Sat',
			22=>'Sun',23=>'Mon',24=>'Tue',25=>'Wed',26=>'Thu',27=>'Fri',28=>'Sat',
			29=>'Sun',30=>'Mon',31=>'Tue',32=>'Wed',33=>'Thu',34=>'Fri',35=>'Sat',
			36=>'Sun',37=>'Mon',38=>'Tue',39=>'Wed',40=>'Thu',41=>'Fri',42=>'Sat'
		);
		$out = '<table class="calendar" cellspacing="0">';
		$out .= $this->Html->tableHeaders(array('Sun','Mon','Tue','Wed','Thu','Fri','Sat'));

		/*** WEEK ONE ***/
		$out .= '<tr>';
		for ($i=1; $i<=7; $i++) {
			if ($day<=1 && $firstday != $days_array[$i]) {
				$out .= '<td>&nbsp;</td>';
			} else {
				$out .= '<td>'.$day.'<br/>';
				$out .= $this->events($month,$day,$year,$events);
				$out .= '</td>';
				$day++;
			}
		}
		$out .= '</tr>';
		
		/*** WEEK TWO ***/
		$out .= '<tr>';
		for ($i=8; $i<=14; $i++) {
			$out .= '<td>'.$day.'<br/>';
			$out .= $this->events($month,$day,$year,$events);
			$out .= '</td>';
			$day++;
		}
		$out .= '</tr>';
		
		/*** WEEK THREE ***/
		$out .= '<tr>';
		for ($i=15; $i<=21; $i++) {
			$out .= '<td>'.$day.'<br/>';
			$out .= $this->events($month,$day,$year,$events);
			$out .= '</td>';
			$day++;
		}
		$out .= '</tr>';
		
		/*** WEEK FOUR ***/
		$out .= '<tr>';
		for ($i=22; $i<=28; $i++) {
			if (strftime("%d",$lastdate) < $day) {
				$out .= '<td>&nbsp;</td>';
			} else {
				$out .= '<td>'.$day.'<br/>';
				$out .= $this->events($month,$day,$year,$events);
				$out .= '</td>';
				$day++;
			}
		}
		$out .= '</tr>';
		
		/*** WEEK FIVE ***/
		if ($day < strftime("%d",$lastdate)) { /* check if there is a fifth line */
			$out .= '<tr>';
			for ($i=29; $i<=35; $i++) {
				if (strftime("%d",$lastdate) < $day) {
					$out .= '<td>&nbsp;</td>';
				} else {
					$out .= '<td>'.$day.'<br/>';
					$out .= $this->events($month,$day,$year,$events);
					$out .= '</td>';
					$day++;
				}
			}
			$out .= '</tr>';
		}
		
		/*** WEEK SIX ***/
		if ($day < strftime("%d",$lastdate)) { /* check if there is a sixth line */
			$out .= '<tr>';
			for ($i=22; $i<=28; $i++) {
				if (strftime("%d",$lastdate) < $day) {
					$out .= '<td>&nbsp;</td>';
				} else {
					$out .= '<td>'.$day.'<br/>';
					$out .= $this->events($month,$day,$year,$events);
					$out .= '</td>';
					$day++;
				}
			}
			$out .= '</tr>';
		}
		
		$out .= '</table>';
		
		/*** RENDER EVENT DETAILS ***/
		if (isset($this->Details)) {
			foreach ($this->Details as $id=>$detail) {
				$out .= '<div id="event_details_'.$id.'" style="display: none;" class="_cal_event_detail">';
				$out .= '<b>'.$detail['name'].'</b>';
				$out .= '<p>'.date('g:i a',strtotime($detail['date'])).'</p>';
				$out .= '<p>'.$detail['details'].'</p>';
				$out .= '</div>';
			}
		}
		return $this->output($out);
	}
	
	function events($month=null, $day=null, $year=null, $events=array()) {
		$stamp = mktime(0,0,0,$month,$day,$year);
		$out = '<ul>';
		foreach($events as $event) {
			$event_stamp = strtotime($event['date']);
			$event_stamp = mktime(0,0,0,date('m',$event_stamp),date('d',$event_stamp),date('Y',$event_stamp));
			if ($event_stamp == $stamp) {
				$out .= '<a href="#" onClick="$(\'event_details_'.$event['id'].'\').style.display = \'inline\';">';
				$out .= '<li>'.$event['name'].'</li></a>';
				$this->Details[$event['id']] = $event;
			}
		}
		$out .= '</ul>';
		return $this->output($out);
	}
}
?>