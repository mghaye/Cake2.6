<div class="invoices index">
	<h2><?php echo __('Invoices'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('company_id'); ?></th>
			<th><?php echo $this->Paginator->sort('invoice_type_id'); ?></th>
			<th><?php echo $this->Paginator->sort('invoice_number_int'); ?></th>
			<th><?php echo $this->Paginator->sort('invoice_number_ext'); ?></th>
			<th><?php echo $this->Paginator->sort('amount_excl'); ?></th>
			<th><?php echo $this->Paginator->sort('VAT'); ?></th>
			<th><?php echo $this->Paginator->sort('amount_incl'); ?></th>
			<th><?php echo $this->Paginator->sort('date'); ?></th>
			<th><?php echo $this->Paginator->sort('date_exp'); ?></th>
			<th><?php echo $this->Paginator->sort('paydate'); ?></th>
			<th><?php echo $this->Paginator->sort('virtual'); ?></th>
			<th><?php echo $this->Paginator->sort('paid'); ?></th>
			<th><?php echo $this->Paginator->sort('workmonth'); ?></th>
			<th><?php echo $this->Paginator->sort('hourrate'); ?></th>
			<th><?php echo $this->Paginator->sort('hours'); ?></th>
			<th><?php echo $this->Paginator->sort('days'); ?></th>
			<th><?php echo $this->Paginator->sort('descr'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($invoices as $invoice): ?>
	<tr>
		<td><?php echo h($invoice['Invoice']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($invoice['Company']['name'], array('controller' => 'companies', 'action' => 'view', $invoice['Company']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($invoice['InvoiceType']['name'], array('controller' => 'invoice_types', 'action' => 'view', $invoice['InvoiceType']['id'])); ?>
		</td>
		<td><?php echo h($invoice['Invoice']['invoice_number_int']); ?>&nbsp;</td>
		<td><?php echo h($invoice['Invoice']['invoice_number_ext']); ?>&nbsp;</td>
		<td><?php echo h($invoice['Invoice']['amount_excl']); ?>&nbsp;</td>
		<td><?php echo h($invoice['Invoice']['VAT']); ?>&nbsp;</td>
		<td><?php echo h($invoice['Invoice']['amount_incl']); ?>&nbsp;</td>
		<td><?php echo h($invoice['Invoice']['date']); ?>&nbsp;</td>
		<td><?php echo h($invoice['Invoice']['date_exp']); ?>&nbsp;</td>
		<td><?php echo h($invoice['Invoice']['paydate']); ?>&nbsp;</td>
		<td><?php echo h($invoice['Invoice']['virtual']); ?>&nbsp;</td>
		<td><?php echo h($invoice['Invoice']['paid']); ?>&nbsp;</td>
		<td><?php echo h($invoice['Invoice']['workmonth']); ?>&nbsp;</td>
		<td><?php echo h($invoice['Invoice']['hourrate']); ?>&nbsp;</td>
		<td><?php echo h($invoice['Invoice']['hours']); ?>&nbsp;</td>
		<td><?php echo h($invoice['Invoice']['days']); ?>&nbsp;</td>
		<td><?php echo h($invoice['Invoice']['descr']); ?>&nbsp;</td>
		<td><?php echo h($invoice['Invoice']['created']); ?>&nbsp;</td>
		<td><?php echo h($invoice['Invoice']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $invoice['Invoice']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $invoice['Invoice']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $invoice['Invoice']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $invoice['Invoice']['id']))); ?>
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
		<li><?php echo $this->Html->link(__('New Invoice'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Companies'), array('controller' => 'companies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Company'), array('controller' => 'companies', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Invoice Types'), array('controller' => 'invoice_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Invoice Type'), array('controller' => 'invoice_types', 'action' => 'add')); ?> </li>
	</ul>
</div>
