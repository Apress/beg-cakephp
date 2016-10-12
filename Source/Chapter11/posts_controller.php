/* Add these lines to the current Posts controller */
var $components = array('Auth');

	function beforeFilter() {
		$this->Auth->loginAction = array('controller'=>'users','action'=>'login');
		$this->Auth->allow('index','view');
		$this->Auth->redirectLogin = array('controller'=>'posts','action'=>'add');
		$this->Auth->authorize = 'controller';
	}