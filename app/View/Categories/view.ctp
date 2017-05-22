<div class="x_panel">
	<div class="x_title">
		<h2>Category</h2>
		<ul class="nav navbar-right panel_toolbox">
			<li><a href="<?= $this->base ?>/categories"><i class="fa fa-list"></i></a></li>
		</ul>
		<div class="clearfix"></div>
	</div>
	<div class="x_content">
        <dl class="dl-horizontal">
            <dt><?php echo __('Name'); ?></dt>
            <dd>
                <?php echo h($category['Category']['name']); ?>
                &nbsp;
            </dd>
            <dt><?php echo __('Status'); ?></dt>
            <dd>
                <?php echo h($category['Category']['status']); ?>
                &nbsp;
            </dd>
            <dt><?php echo __('Created'); ?></dt>
            <dd>
                <?php echo h($category['Category']['created']); ?>
                &nbsp;
            </dd>
            <dt><?php echo __('Modified'); ?></dt>
            <dd>
                <?php echo h($category['Category']['modified']); ?>
                &nbsp;
            </dd>
        </dl>
	</div>
</div>