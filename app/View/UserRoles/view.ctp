<div class="x_panel">
	<div class="x_title">
		<h2>User Role</h2>
		<ul class="nav navbar-right panel_toolbox">
			<li><a href="<?= $this->base ?>/user_roles"><i class="fa fa-list"></i></a></li>
		</ul>
		<div class="clearfix"></div>
	</div>
	<div class="x_content">
        <dl class="dl-horizontal">
            <dt><?php echo __('Role'); ?></dt>
            <dd>
                <?php echo h($user_role['User Role']['role']); ?>
                &nbsp;
            </dd>

            <dt><?php echo __('Status'); ?></dt>
            <dd>
                <?php echo h($user_role['User Role']['status']); ?>
                &nbsp;
            </dd>
            <dt><?php echo __('Created'); ?></dt>
            <dd>
                <?php echo h($user_role['User Role']['created']); ?>
                &nbsp;
            </dd>
            <dt><?php echo __('Modified'); ?></dt>
            <dd>
                <?php echo h($user_role['User Role']['modified']); ?>
                &nbsp;
            </dd>
        </dl>
	</div>
</div>