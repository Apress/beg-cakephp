	/* Add this action to the existing Posts Controller */
	
	function feed() {
		$this->set('posts',$this->Post->feed());
	}