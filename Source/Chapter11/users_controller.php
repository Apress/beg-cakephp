<?
class UsersController extends AppController {
	var $name = 'Users';
	var $components = array('Auth');
	
	function beforeFilter() {
		$this->Auth->allow('*');
	}
	
	function login() {
		
	}
	
	function logout() {
		$this->redirect($this->Auth->logout());
	}
	
	function password() {
		if ($this->data) {
			$this->set('password',$this->Auth->password($this->data['User']['password']));
		}
	}
}
?>