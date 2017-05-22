<div class="x_panel">
	<div class="x_title">
		<h2>Images</h2>
		<ul class="nav navbar-right panel_toolbox">
			<li><a href="<?= $this->base ?>/images/add"><i class="fa fa-plus"></i></a></li>
		</ul>
		<div class="clearfix"></div>
	</div>
	<div class="x_content">
        <table class="table table-striped">
            <thead>
            <tr>
            <tr>
                <th><?php echo $this->Paginator->sort('name'); ?></th>
                <th><?php echo $this->Paginator->sort('url'); ?></th>
                <th><?php echo $this->Paginator->sort('image_type'); ?></th>
                <th><?php echo $this->Paginator->sort('type_no'); ?></th>
                <th><?php echo $this->Paginator->sort('status'); ?></th>
                <th class="actions"><?php echo __('Actions'); ?></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($images as $image): ?>
            <tr>
                <td><?php echo h($image['Image']['name']); ?>&nbsp;</td>
                <td><?php echo h($image['Image']['url']); ?>&nbsp;</td>
                <td><?php echo h($image['Image']['image_type']); ?>&nbsp;</td>
                <td><?php echo h($image['Image']['type_no']); ?>&nbsp;</td>
                <td><?php echo h($image['Image']['status']); ?></td>
                <td class="actions">
                    <?php echo $this->Html->link(__('View'), array('action' => 'view', $image['Image']['id'])); ?>
                    <?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $image['Image']['id'])); ?>
                    <?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $image['Image']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $image['Image']['id']))); ?>
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

