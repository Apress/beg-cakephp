<?
class Comment extends AppModel {
	var $name = 'Comment';
	var $belongsTo = array('Post');
	
	function vote($type=null,$id=null) { 
		if (!$id) { 
			return "-"; 
		} else { 
			$votes = $this->read(null,$id); 
			$votes = ($type == 'up' ? $votes['Comment']['votes']+1 : $votes['Comment']['votes']-1); 
			$this->id = $id; 
			$this->saveField('votes',$votes); 
			return $votes; 
		} 
	}
}
?>