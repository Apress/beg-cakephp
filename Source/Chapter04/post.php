<?
class Post extends AppModel {
	var $name = 'Post';
	var $belongsTo = array(
		'User'=>array(
			'className'=>'User',
			'foreignKey'=>'user_id',
			'conditions'=>null,
			'fields'=>null
		)
	);
	var $hasAndBelongsToMany = array('Tag');
}
?>