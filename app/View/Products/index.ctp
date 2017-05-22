<div class="x_panel">
	<div class="x_title">
		<h2>Products</h2>
		<ul class="nav navbar-right panel_toolbox">
			<li><a href="<?= $this->base ?>/products/add"><i class="fa fa-plus"></i></a></li>
		</ul>
		<div class="clearfix"></div>
	</div>
	<div class="x_content">
        <table class="table table-striped">
            <thead>
            <tr>
            <tr>
                <th><?php echo $this->Paginator->sort('name'); ?></th>
                <th><?php echo $this->Paginator->sort('description'); ?></th>
                <th><?php echo $this->Paginator->sort('category_id','Category'); ?></th>
                <th><?php echo $this->Paginator->sort('tag_id','Tag' ); ?></th>
                <th><?php echo $this->Paginator->sort('ranking'); ?></th>
                 <th><?php echo $this->Paginator->sort('weight'); ?></th>
                  <th><?php echo $this->Paginator->sort('status'); ?></th>
                <th class="actions"><?php echo __('Actions'); ?></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($products as $product): ?>
            <tr>
                <td><?php echo h($product['Product']['name']); ?>&nbsp;</td>
                <td><?php echo h($product['Product']['description']); ?>&nbsp;</td>
                <td><?php echo h($product['Category']['category_id']); ?>&nbsp;</td>
                <td><?php echo h($product['Tag']['tag_id']); ?>&nbsp;</td>
                <td><?php echo h($product['Product']['ranking']); ?></td>
                <td><?php echo h($product['Product']['weight']); ?></td>
                <td class="actions">
                    <?php echo $this->Html->link(__('View'), array('action' => 'view', $product['Product']['id'])); ?>
                    <?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $product['Product']['weight'])); ?>
                     <?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $product['Product']['ranking'])); ?>
                      <?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $product['Tag']['tag_id'])); ?>
                    <?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $product['Product']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $product['Product']['id']))); ?>
                </td>
            </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
        <p>
            <?php
                    echo $this->Paginator->counter(array(
                    'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
                    ));
            ?>
        </p>
        <div class="paging">
            <?php
                    echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
                    echo $this->Paginator->numbers(array('separator' => ''));
                    echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
            ?>
        </div>
	</div>
</div>

