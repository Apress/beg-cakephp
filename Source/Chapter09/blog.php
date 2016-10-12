<?
class BlogHelper extends AppHelper {
	var $helpers = array('Ajax');
	
	function comments($comments=null,$options=array()) {
		if (!empty($comments)) {
			$out = null;
			
			if (isset($options['link'])) {
				$up = $down = $options['link'];
			}
			
			if (isset($options['upLink'])) {
				$up = $options['upLink'];
			}
			
			if (isset($options['downLink'])) {
				$down = $options['downLink'];
			}
			
			if (isset($options['text'])) {
				$upText = $downText = $options['text'];
			} else {
				$upText = 'up';
				$downText = 'down';
			}
			
			if (isset($options['upText'])) {
				$upText = $options['upText'];
			}
			
			if (isset($options['downText'])) {
				$downText = $options['downText'];
			}
			
			if (isset($options['update'])) {
				$update = $options['update'];
			}
			
			foreach($comments as $comment) {
				if (empty($update) || !isset($options['update'])) {
					$update = 'vote_'.$comment['Comment']['id'];
				}
				$out .= '<div class="comment">
					<div id="vote_'.$comment['Comment']['id'].'">
					<div class="cast_vote">
						<ul>';
				$out .= $this->voteUpLink($comment['Comment']['id'],array('upLink'=>$up,'text'=>$upText,'update'=>$update));
				$out .= $this->voteDownLink($comment['Comment']['id'],array('downLink'=>$down,'text'=>$downText,'update'=>$update));
				$out .= '</ul>
					</div>
					<div class="vote">'.$comment['Comment']['votes'].'</div>
				</div>
				<p><b>'.$comment['Comment']['name'].'</b></p>
				<p>'.$comment['Comment']['content'].'</p>
				</div>';
			}
			return $this->output($out);
		} else {
			trigger_error(sprintf('No comments found', get_class($this)), E_USER_NOTICE);
		}
	}
	
	function voteUpLink($id=null,$options=array()) {
		if (isset($options['text'])) {
			$text = $options['text'];
		} else {
			$text = 'up';
		}
		
		if (isset($options['update'])) {
			$update = $options['update'];
		} else {
			$update = 'vote_'.$id;
		}
		
		$up = $options['upLink'].$id;
		return $this->output($this->Ajax->link(sprintf($this->tags['vote'],$text),$up,array('update'=>$update),null,false));
	}
	
	function voteDownLink($id=null,$options=array()) {
		if (isset($options['text'])) {
			$text = $options['text'];
		} else {
			$text = 'down';
		}
		
		if (isset($options['update'])) {
			$update = $options['update'];
		} else {
			$update = 'vote_'.$id;
		}
		
		$down = $options['downLink'].$id;
		return $this->output($this->Ajax->link($text,$down,array('update'=>$update),null,false));
	}
}
?>