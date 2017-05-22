<div class="x_panel">
	<div class="x_title">
		<h2>Product</h2>
		<ul class="nav navbar-right panel_toolbox">
			<li><a href="<?= $this->base ?>/products"><i class="fa fa-list"></i></a></li>
		</ul>
		<div class="clearfix"></div>
	</div>
	<div class="x_content">
        <dl class="dl-horizontal">
            <dt><?php echo __('Name'); ?></dt>
            <dd>
                <?php echo h($product['Product']['name']); ?>
                &nbsp;
            </dd>
            <dt><?php echo __('Description'); ?></dt>
            <dd>
                <?php echo h($product['Product']['description']); ?>
                &nbsp;
            </dd>
            <dt><?php echo __('Category'); ?></dt>
            <dd>
                <?php echo h($product['Category']['category_id']); ?>
                &nbsp;
            </dd>
            <dt><?php echo __('Price'); ?></dt>
            <dd>
                <?php echo h($product['Product']['price']); ?>
                &nbsp;
            </dd>
             <dt><?php echo __('Ranking'); ?></dt>
             <dd>
                  <?php echo h($product['Product']['ranking']); ?>
                  &nbsp;
             </dd>
             <dt><?php echo __('Weight'); ?></dt>
             <dd>
                  <?php echo h($product['Product']['weight']); ?>
                  &nbsp;
              </dd>
            <dt><?php echo __('Status'); ?></dt>
            <dd>
                <?php echo h($product['Product']['status']); ?>
                &nbsp;
            </dd>
            <dt><?php echo __('Created'); ?></dt>
            <dd>
                <?php echo h($product['Product']['created']); ?>
                &nbsp;
            </dd>
            <dt><?php echo __('Modified'); ?></dt>
            <dd>
                <?php echo h($product['Product']['modified']); ?>
                &nbsp;
            </dd>
        </dl>
	</div>
</div>