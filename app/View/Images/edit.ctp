<div class="x_panel">
	<div class="x_title">
		<h2>Image Edit</h2>
		<ul class="nav navbar-right panel_toolbox">
			<li><a href="<?= $this->base ?>/images"><i class="fa fa-list"></i></a></li>
		</ul>
		<div class="clearfix"></div>
	</div>
	<div class="x_content">
		<?php echo $this->Form->create('Image'); ?>

		<?php
        echo $this->Form->input('id');
        echo $this->Form->input('name',['class' => 'form-control']);
        echo $this->Form->input('url',['class' => 'form-control']);
        echo $this->Form->input('image_type',['class' => 'form-control']);
        echo $this->Form->input('type_no',['class' => 'form-control']);
        ?>
		<br/>
		<span type="submit" class="btn btn-primary">Submit</span>
		<?php echo $this->Form->end(); ?>
	</div>
</div>