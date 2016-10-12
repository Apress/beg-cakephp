<?=$html->docType('xhtml-strict');?>
<head>
<title>My Cake Blog Application</title>
<?=$html->charset('UTF-8');?>
    <?=$html->meta('icon');?>
    <?=$html->css(array('cake.generic','styles'));?>
<?=($this->params['controller'] == 'posts' && $this->params['action'] == 'add' ? $javascript->link(array('jquery.js','jquery.form.js')) : $javascript->link('prototype'));?>
</head>
<body>
<?=$html->div(null,$session->flash().$html->div(null,$content_for_layout,array('id'=>'content')),array('id'=>'container'));?>
</body>
</html>