<div class="x_panel">
	<div class="x_title">
		<h2>Image</h2>
		<ul class="nav navbar-right panel_toolbox">
			<li><a href="<?= $this->base ?>/images"><i class="fa fa-list"></i></a></li>
		</ul>
		<div class="clearfix"></div>
	</div>
	<div class="x_content">
        <dl class="dl-horizontal">
            <dt><?php echo __('Name'); ?></dt>
            <dd>
                <?php echo h($image['Image']['name']); ?>
                &nbsp;
            </dd>
            <dt><?php echo __('URL'); ?></dt>
            <dd>
                <?php echo h($image['Image']['url']); ?>
                &nbsp;
            </dd>
            <dt><?php echo __('Image_Type'); ?></dt>
            <dd>
                <?php echo h($image['Image']['image_type']); ?>
                &nbsp;
            </dd>
            <dt><?php echo __('Type_No'); ?></dt>
            <dd>
                <?php echo h($image['Image']['type_no']); ?>
                &nbsp;
            </dd>
            <dt><?php echo __('Status'); ?></dt>
            <dd>
                <?php echo h($image['Image']['status']); ?>
                &nbsp;
            </dd>
            <dt><?php echo __('Created'); ?></dt>
            <dd>
                <?php echo h($image['Image']['created']); ?>
                &nbsp;
            </dd>
            <dt><?php echo __('Modified'); ?></dt>
            <dd>
                <?php echo h($image['Image']['modified']); ?>
                &nbsp;
            </dd>
        </dl>
	</div>
</div>