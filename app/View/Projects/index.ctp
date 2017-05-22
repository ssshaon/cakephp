<div class="x_panel">
	<div class="x_title">
		<h2>Projects</h2>
		<ul class="nav navbar-right panel_toolbox">
			<li><a href="<?= $this->base ?>/projects/add"><i class="fa fa-plus"></i></a></li>
		</ul>
		<div class="clearfix"></div>
	</div>
	<div class="x_content">
        <table class="table table-striped">
            <thead>
            <tr>
            <tr>
                <th><?php echo $this->Paginator->sort('name'); ?></th>
                <th><?php echo $this->Paginator->sort('client_id','Client'); ?></th>
                <th><?php echo $this->Paginator->sort('description'); ?></th>
                <th><?php echo $this->Paginator->sort('weight'); ?></th>
                <th><?php echo $this->Paginator->sort('status'); ?></th>
                <th class="actions"><?php echo __('Actions'); ?></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($projects as $project): ?>
            <tr>
                <td><?php echo h($user['Project']['name']); ?>&nbsp;</td>
                <td><?php echo h($user['Client']['client_id']); ?>&nbsp;</td>
                <td><?php echo h($user['Project']['description']); ?>&nbsp;</td>
                <td><?php echo h($user['Project']['weight']); ?>&nbsp;</td>

                <td class="actions">
                    <?php echo $this->Html->link(__('View'), array('action' => 'view', $project['Project']['id'])); ?>
                    <?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $project['Project']['name'])); ?>
                    <?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $project['Project']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $project['Project']['id']))); ?>
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

