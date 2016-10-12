/* Add this function to the current Post model */
	function feed() {
		$posts = $this->findAll(null,null,'date DESC',5);
		$out = array();
		foreach ($posts as $post) {
			foreach ($post as $key=>$val) {
				if ($key == 'Post') {
					$out[$val['id']]['pubDate'] = date('D, d M Y H:i:s +O',strtotime($val['date']));
					$out[$val['id']]['title'] = $val['name'];
					$out[$val['id']]['description'] = $val['content'];
					$out[$val['id']]['content'] = $val['content'];
				}
			}
		}
		return $out;
	}