<?
class AppController extends Controller {
	var $helpers = array('Html','Form','Ajax','Javascript','Blog'); 
	var $components = array('RequestHandler'); 

	function beforeFilter(){ 
		$this->RequestHandler->setContent('rss','application/rss+xml'); 
	} 
}
?>