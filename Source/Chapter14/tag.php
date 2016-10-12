<?
class Tag extends AppModel {
	var $name = 'Tag';
	var $actsAs = array('Tree'=>array('left'=>'left','right'=>'right'));
	var $hasAndBelongsToMany = array('Post');
}
?>