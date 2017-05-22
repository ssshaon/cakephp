<div class="x_panel">
	<div class="x_title">
		<h2>Project</h2>
		<ul class="nav navbar-right panel_toolbox">
			<li><a href="<?= $this->base ?>/projects"><i class="fa fa-list"></i></a></li>
		</ul>
		<div class="clearfix"></div>
	</div>
	<div class="x_content">
        <dl class="dl-horizontal">
            <dt><?php echo __('Name'); ?></dt>
            <dd>
                <?php echo h($project['Project']['name']); ?>
                &nbsp;
            </dd>
            <dt><?php echo __('Client Id'); ?></dt>
            <dd>
                <?php echo h($project['Client']['client_id']); ?>
                &nbsp;
            </dd>
            <dt><?php echo __('Description'); ?></dt>
            <dd>
                <?php echo h($project['Project']['description']); ?>
                &nbsp;
            </dd>
            <dt><?php echo __('Weight'); ?></dt>
            <dd>
                <?php echo h($project['Project']['weight']); ?>
                &nbsp;
            </dd>
            <dt><?php echo __('Status'); ?></dt>
            <dd>
                <?php echo h($project['Project']['status']); ?>
                &nbsp;
            </dd>
            <dt><?php echo __('Created'); ?></dt>
            <dd>
                <?php echo h($project['Project']['created']); ?>
                &nbsp;
            </dd>
            <dt><?php echo __('Modified'); ?></dt>
            <dd>
                <?php echo h($project['Project']['modified']); ?>
                &nbsp;
            </dd>
        </dl>
	</div>
</div>