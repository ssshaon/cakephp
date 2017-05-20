<h1>Login Here</h1>
<?php
  echo $this->Form->create('User');
  echo $this->Form->input('username');
  echo $this->Form->input('password',['type' => 'password']);
  echo $this->Form->end(_('Login'));
?>
