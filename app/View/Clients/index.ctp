<div class="x_panel">
	<div class="x_title">
		<h2>Client</h2>
		<ul class="nav navbar-right panel_toolbox">
			<li><a href="<?= $this->base ?>/clients/add"><i class="fa fa-plus"></i></a></li>
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
                <th><?php echo $this->Paginator->sort('phone'); ?></th>
                <th><?php echo $this->Paginator->sort('email'); ?></th>
                <th><?php echo $this->Paginator->sort('fax'); ?></th>
                <th><?php echo $this->Paginator->sort('contact_person'); ?></th>
                <th><?php echo $this->Paginator->sort('other'); ?></th>
                <th><?php echo $this->Paginator->sort('status'); ?></th>
                <th class="actions"><?php echo __('Actions'); ?></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($clients as $client): ?>
            <tr>
                <td><?php echo h($client['Client']['name']); ?>&nbsp;</td>
                <td><?php echo h($client['Client']['description']); ?>&nbsp;</td>
                <td><?php echo h($client['Clinet']['phone']); ?>&nbsp;</td>
                <td><?php echo h($client['Client']['email']); ?>&nbsp;</td>
                <td><?php echo h($client['Client']['fax']); ?>&nbsp;</td>
                <td><?php echo h($client['Client']['contact_person']); ?>&nbsp;</td>
                <td><?php echo h($client['Client']['other']); ?>&nbsp;</td>
                <td><?php echo h($clinet['Clinet']['status']); ?></td>
                <td class="actions">
                    <?php echo $this->Html->link(__('View'), array('action' => 'view', $client['Clinet']['id'])); ?>
                    <?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $client['Clinet']['id'])); ?>
                    <?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $client['Client']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $clinet['Client']['id']))); ?>
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

