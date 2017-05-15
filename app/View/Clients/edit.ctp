<div class="clients form">
<?php echo $this->Form->create('Client'); ?>
	<fieldset>
		<legend><?php echo __('Edit Client'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('description');
		echo $this->Form->input('phone');
		echo $this->Form->input('email');
		echo $this->Form->input('fax');
		echo $this->Form->input('contact_person');
		echo $this->Form->input('other');
		echo $this->Form->input('status');
		echo $this->Form->input('is_active');
		echo $this->Form->input('is_delete');
		echo $this->Form->input('created_by');
		echo $this->Form->input('modified_by');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Client.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('Client.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Clients'), array('action' => 'index')); ?></li>
	</ul>
</div>
