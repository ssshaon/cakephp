<div class="x_panel">
	<div class="x_title">
		<h2>Client Edit</h2>
		<ul class="nav navbar-right panel_toolbox">
			<li><a href="<?= $this->base ?>/clients"><i class="fa fa-list"></i></a></li>
		</ul>
		<div class="clearfix"></div>
	</div>
	<div class="x_content">
		<?php echo $this->Form->create('Client'); ?>

		<?php
        echo $this->Form->input('id');
        echo $this->Form->input('name',['class' => 'form-control']);
        echo $this->Form->input('description',['class' => 'form-control']);
        echo $this->Form->input('phone',['class' => 'form-control']);
        echo $this->Form->input('email',['class' => 'form-control']);
        echo $this->Form->input('fax',['class' => 'form-control']);
        echo $this->Form->input('contact_person',['class' => 'form-control']);
        echo $this->Form->input('other',['class' => 'form-control']);

        ?>
		<br/>
		<span type="submit" class="btn btn-primary">Submit</span>
		<?php echo $this->Form->end(); ?>
	</div>
</div>