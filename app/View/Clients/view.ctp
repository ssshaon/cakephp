<div class="x_panel">
	<div class="x_title">
		<h2>Clients</h2>
		<ul class="nav navbar-right panel_toolbox">
			<li><a href="<?= $this->base ?>/clients"><i class="fa fa-list"></i></a></li>
		</ul>
		<div class="clearfix"></div>
	</div>
	<div class="x_content">
        <dl class="dl-horizontal">
            <dt><?php echo __('Name'); ?></dt>
            <dd>
                <?php echo h($client['Client']['name']); ?>
                &nbsp;
            </dd>
            <dt><?php echo __('Description'); ?></dt>
            <dd>
                <?php echo h($client['Client']['description']); ?>
                &nbsp;
            </dd>
            <dt><?php echo __('Phone'); ?></dt>
            <dd>
                <?php echo h($client['Client']['phone']); ?>
                &nbsp;
            </dd>
            <dt><?php echo __('Email'); ?></dt>
            <dd>
                <?php echo h($client['Client']['email']); ?>
                &nbsp;
            </dd>
            <dt><?php echo __('Fax'); ?></dt>
            <dd>
                <?php echo h($client['Client']['fax']); ?>
                 &nbsp;
            </dd>
             <dt><?php echo __('Contact_Person'); ?></dt>
             <dd>
                   <?php echo h($client['Client']['contact_person']); ?>
                   &nbsp;
             </dd>
             <dt><?php echo __('Other'); ?></dt>
             <dd>
                   <?php echo h($client['Client']['other']); ?>
                   &nbsp;
             </dd>
            <dt><?php echo __('Status'); ?></dt>
            <dd>
                <?php echo h($client['Client']['status']); ?>
                &nbsp;
            </dd>
            <dt><?php echo __('Created'); ?></dt>
            <dd>
                <?php echo h($client['Client']['created']); ?>
                &nbsp;
            </dd>
            <dt><?php echo __('Modified'); ?></dt>
            <dd>
                <?php echo h($client['Client']['modified']); ?>
                &nbsp;
            </dd>
        </dl>
	</div>
</div>