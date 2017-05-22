<div class="x_panel">
	<div class="x_title">
		<h2>User Role Add</h2>
		<ul class="nav navbar-right panel_toolbox">
			<li><a href="<?= $this->base ?>/user_roles"><i class="fa fa-list"></i></a></li>
		</ul>
		<div class="clearfix"></div>
	</div>
	<div class="x_content">
        <?php echo $this->Form->create('User Role'); ?>
            <?php
            echo $this->Form->input('role',['class' => 'form-control']);

            ?>
            <br/>
            <button type="submit" class="btn btn-primary">Submit</button>
        <?php echo $this->Form->end(); ?>
	</div>
</div>