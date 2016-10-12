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
	
	var $validate = array( 
		'name'=>array( 
			'alphaNumeric'=>array( 
				'rule'=>'alphaNumeric', 
				'required'=>true, 
				'message'=>'TheTitlemaynotcontainanysymbols' 
			), 
			'maxLength'=>array( 
			'rule'=>array('maxLength',80), 
			'message'=>'TheTitlemustnotexceed80characters'
			) 
		), 
		'date'=>array( 
			'rule'=>'date', 
			'required'=>true, 
			'message'=>'You must supply a valid date' 
		), 
		'content'=>array( 
			'required'=>true 
		) 
	); 
}
?>

