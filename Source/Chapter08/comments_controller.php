<?
class CommentsController extends AppController {
	var $name = 'Comments';
	
	function add() { 
		if(!empty($this->data)){ 
			$this->Comment->create(); 
			if($this->Comment->save($this->data)) { 
				$comments=$this->Comment->find('all',array('conditions'=>array('post_id'=>$this->data['Comment']['post_id']),'recursive'=>-1); 
				$this->set(compact('comments')); 
				$this->render('add_success','ajax'); 
			}else{ 
				$this->render('add_failure','ajax'); 
			} 
		} 
	}
	
	function vote($type=null,$id=null) { 
		if($id){ 
			$votes=$this->Comment->vote($type,$id); 
			$this->set(compact('votes')); 
			$this->render('votes','ajax'); 
		} 
	}
}
?>