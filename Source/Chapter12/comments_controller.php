/* Add the following lines to the current Comments controller */
	function add() {
		App::import('Vendor','akismet',array('file'=>'Zend/Service/Akismet.php'));
		$akismet =& new Zend_Service_Akismet('************','http://localhost/blog');
		ini_set('include_path', CAKE_CORE_INCLUDE_PATH.PATH_SEPARATOR.ROOT.DS.APP_DIR.DS.PATH_SEPARATOR.ini_get('include_path'));
		if (!empty($this->data)) {
			$this->data['akismet'] = array(
				'user_ip' => $_SERVER['REMOTE_ADDR'],
				'user_agent' => $_SERVER['HTTP_USER_AGENT'],
				'comment_type' => 'blog',
				'comment_author' => $this->data['Comment']['name'],
				'comment_content' => $this->data['Comment']['content']
			);
			
			if ($akismet->isSpam($this->data['akismet'])) {
				$this->render('add_spam','ajax');
				exit();
			}
			
			$this->Comment->create();
			if ($this->Comment->save($this->data)) {
				$comments = $this->Comment->find('all',array('conditions'=>array('post_id'=>$this->data['Comment']['post_id']),'recursive'=>-1));
				$this->set(compact('comments'));
				$this->render('add_success','ajax');
			} else {
				$this->render('add_failure','ajax');
			}
		}
	}