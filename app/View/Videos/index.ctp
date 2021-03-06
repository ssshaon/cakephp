<div class="x_panel">
	<div class="x_title">
		<h2>Videos</h2>
		<ul class="nav navbar-right panel_toolbox">
			<li><a href="<?= $this->base ?>/videos/add"><i class="fa fa-plus"></i></a></li>
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
            <?php foreach ($videos as $video): ?>
            <tr>
                <td><?php echo h($videos['Video']['name']); ?>&nbsp;</td>
                <td><?php echo h($videos['Video']['url']); ?>&nbsp;</td>
                <td><?php echo h($videos['Video']['image_type']); ?>&nbsp;</td>
                <td><?php echo h($videos['Video']['type_no']); ?>&nbsp;</td>
                <td><?php echo h($videos['Video']['status']); ?></td>
                <td class="actions">
                    <?php echo $this->Html->link(__('View'), array('action' => 'view', $video['Video']['id'])); ?>
                    <?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $video['Video']['id'])); ?>
                    <?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $video['Video']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $video['Video']['id']))); ?>
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

