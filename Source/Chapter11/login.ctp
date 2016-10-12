<h1>Log In</h1>
<? if ($session->check('Message.auth')) $session->flash('auth');?>
<?=$form->create('User',array('action'=>'login'));?>
<?=$form->input('username');?>
<?=$form->input('password',array('type'=>'password'));?>
<?=$form->end('Login');?>