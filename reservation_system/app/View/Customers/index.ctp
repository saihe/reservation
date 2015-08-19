<div class="customers index">
	<h2><?php echo __('Customers'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('affiliation_id'); ?></th>
			<th><?php echo $this->Paginator->sort('primary_id'); ?></th>
			<th><?php echo $this->Paginator->sort('customer_name'); ?></th>
			<th><?php echo $this->Paginator->sort('tel'); ?></th>
			<th><?php echo $this->Paginator->sort('email'); ?></th>
			<th><?php echo $this->Paginator->sort('ticket_id'); ?></th>
			<th><?php echo $this->Paginator->sort('answer_id'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($customers as $customer): ?>
	<tr>
		<td><?php echo h($customer['Customer']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($customer['Affiliation']['affiliation_type'], array('controller' => 'affiliations', 'action' => 'view', $customer['Affiliation']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($customer['Primary']['primary_type'], array('controller' => 'primaries', 'action' => 'view', $customer['Primary']['id'])); ?>
		</td>
		<td><?php echo h($customer['Customer']['customer_name']); ?>&nbsp;</td>
		<td><?php echo h($customer['Customer']['tel']); ?>&nbsp;</td>
		<td><?php echo h($customer['Customer']['email']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($customer['Ticket']['name'], array('controller' => 'answers', 'action' => 'view', $customer['Answer']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($customer['Answer']['type'], array('controller' => 'answers', 'action' => 'view', $customer['Answer']['id'])); ?>
		</td>
		<td><?php echo h($customer['Customer']['created']); ?>&nbsp;</td>
		<td><?php echo h($customer['Customer']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $customer['Customer']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $customer['Customer']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $customer['Customer']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $customer['Customer']['id']))); ?>
		</td>
	</tr>
<?php endforeach; ?>
		<?php
			echo __('Join Total');
			echo __(count($serch_answer));
			echo __('UnJoin Total'); 
			echo __('Un Total');
			echo $this->Form->input(__('serch_tickets'), array(
					'type' => 'select', 
					'tOptions' => $select
					//'selected' => $selected  // �K��l��value�Ŏw��
					//'div' => false           // div�e�v�f�̗L��(true/false)
					//'size' => 5              // �����ݒ�(���X�g�{�b�N�X�Ƃ��ĕ\��)
					//'empty' => true          // �󔒂�����
				//$this->Form->end(__('Submit'));
));
		?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
		'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('List Customers'), array('controller' => 'customers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Customer'), array('controller' => 'customers', 'action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Affiliations'), array('controller' => 'affiliations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Affiliation'), array('controller' => 'affiliations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tickets'), array('controller' => 'tickets', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ticket'), array('controller' => 'tickets', 'action' => 'add')); ?></li>
	</ul>
</div>