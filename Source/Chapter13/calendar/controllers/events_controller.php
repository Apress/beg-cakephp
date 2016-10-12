<?
class EventsController extends CalendarAppController {
	var $name = 'Events';
	var $uses = array('CalendarEvent');
	var $helpers = array('Calendar');
	
	function add() {
		if (!empty($this->data)) {
			$this->CalendarEvent->create();
			if ($this->CalendarEvent->save($this->data)) {
				$this->Session->setFlash(__('The Calendar Event has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Calendar Event could not be saved. Please, try again.', true));
			}
		}
	}
	
	function edit($id=null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid Calendar Event', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->CalendarEvent->save($this->data)) {
				$this->Session->setFlash(__('The Calendar Event has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Calendar Event could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->CalendarEvent->read(null, $id);
		}
	}
	
	function index() {
		$events = Set::extract($this->CalendarEvent->findAll(array('MONTH(CalendarEvent.date)'=>date('m'),'YEAR(CalendarEvent.date)'=>date('Y'))),'{n}.CalendarEvent');
		$this->set(compact('events'));
	}
	
	function view($month=null,$year=null) {
		if (!$month || !$year) {
			$month = date('m');
			$year = date('Y');
		}
		if ($month > 12 || $month < 1) {
			$month = date('m');
		}
		$events = Set::extract($this->CalendarEvent->findAll(array('MONTH(CalendarEvent.date)'=>$month,'YEAR(CalendarEvent.date)'=>$year)),'{n}.CalendarEvent');
		$this->set(compact('events','month','year'));
	}
}
?>