<h1>Login Here</h1>
<?php
  echo $this->Form->create('User');
  echo $this->Form->input('UserName');
  echo $this->Form->input('Password');
  echo $this->Form->input('Email');
  echo $this->Form->end(_('Login'));
?>

