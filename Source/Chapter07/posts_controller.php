<?php 
class PostsController extends AppController { 
	var $name = 'Posts'; 
	var $helpers = array('Html', 'Form'); 

	function index() { 
		$this->Post->recursive = 0; 
		$this->set('posts', $this->paginate()); 
	} 

	function view($id = null) { 
		if (!$id){ 
			$this->Session->setFlash(__('Invalid Post.', true)); 
			$this->redirect(array('action'=>'index')); 
		} 
		$this->set('post',$this->Post->read(null, $id)); 
	} 

	function add() { 
		if (!empty($this->data)){ 
			$this->Post->create(); 
			if ($this->Post->save($this->data)) { 
				$this->Session->setFlash(__('The Post has been saved', true)); 
				$this->redirect(array('action'=>'index')); 
			} else { 
				$this->Session->setFlash(__('The Post could not be saved. Please try again.', true)); 
			} 
		} 
		$tags = $this->Post->Tag->find('list'); 
		$users=$this->Post->User->find('list'); 
		$this->set(compact('tags', 'users')); 
	} 

	function edit($id = null) { 
		if (!$id && empty($this->data)){ 
			$this->Session->setFlash(__('Invalid Post', true)); 
			$this->redirect(array('action'=>'index')); 
		} 
		if (!empty($this->data)){ 
			if ($this->Post->save($this->data)) { 
				$this->Session->setFlash(__('The Post has been saved', true)); 
				$this->redirect(array('action'=>'index')); 
			} else { 
				$this->Session->setFlash(__('The Post could not be saved. Please try again.', true)); 
			} 
		} 
		if (empty($this->data)){ 
			$this->data=$this->Post->read(null, $id); 
		} 
		$tags = $this->Post->Tag->find('list'); 
		$users=$this->Post->User->find('list'); 
		$this->set(compact('tags','users')); 
	} 

	function delete($id = null) { 
		if (!$id){ 
			$this->Session->setFlash(__('Invalid id for Post', true)); 
			$this->redirect(array('action'=>'index')); 
		}
		if ($this->Post->del($id)) { 
			$this->Session->setFlash(__('Post deleted', true)); 
			$this->redirect(array('action'=>'index')); 
		} 
	}
	
	function read($year=null) { 
		if(!$year){ 
			$this->Session->setFlash('Please supply a year'); 
			$this->redirect(array('action'=>'index')); 
		} 
		$this->set('posts',$this->Post->findByYear($year)); 
	}
}
?>