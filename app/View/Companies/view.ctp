<div class="companies view">
<h2><?php echo __('Company'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($company['Company']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($company['Company']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($company['Company']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($company['Company']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Company'), array('action' => 'edit', $company['Company']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Company'), array('action' => 'delete', $company['Company']['id']), array(), __('Are you sure you want to delete # %s?', $company['Company']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Companies'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Company'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Invoices'), array('controller' => 'invoices', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Invoice'), array('controller' => 'invoices', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Invoices'); ?></h3>
	<?php if (!empty($company['Invoice'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Company Id'); ?></th>
		<th><?php echo __('Invoice Type Id'); ?></th>
		<th><?php echo __('Invoice Number Int'); ?></th>
		<th><?php echo __('Invoice Number Ext'); ?></th>
		<th><?php echo __('Amount Excl'); ?></th>
		<th><?php echo __('VAT'); ?></th>
		<th><?php echo __('Amount Incl'); ?></th>
		<th><?php echo __('Date'); ?></th>
		<th><?php echo __('Date Exp'); ?></th>
		<th><?php echo __('Paydate'); ?></th>
		<th><?php echo __('Virtual'); ?></th>
		<th><?php echo __('Paid'); ?></th>
		<th><?php echo __('Workmonth'); ?></th>
		<th><?php echo __('Hourrate'); ?></th>
		<th><?php echo __('Hours'); ?></th>
		<th><?php echo __('Days'); ?></th>
		<th><?php echo __('Descr'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($company['Invoice'] as $invoice): ?>
		<tr>
			<td><?php echo $invoice['id']; ?></td>
			<td><?php echo $invoice['company_id']; ?></td>
			<td><?php echo $invoice['invoice_type_id']; ?></td>
			<td><?php echo $invoice['invoice_number_int']; ?></td>
			<td><?php echo $invoice['invoice_number_ext']; ?></td>
			<td><?php echo $invoice['amount_excl']; ?></td>
			<td><?php echo $invoice['VAT']; ?></td>
			<td><?php echo $invoice['amount_incl']; ?></td>
			<td><?php echo $invoice['date']; ?></td>
			<td><?php echo $invoice['date_exp']; ?></td>
			<td><?php echo $invoice['paydate']; ?></td>
			<td><?php echo $invoice['virtual']; ?></td>
			<td><?php echo $invoice['paid']; ?></td>
			<td><?php echo $invoice['workmonth']; ?></td>
			<td><?php echo $invoice['hourrate']; ?></td>
			<td><?php echo $invoice['hours']; ?></td>
			<td><?php echo $invoice['days']; ?></td>
			<td><?php echo $invoice['descr']; ?></td>
			<td><?php echo $invoice['created']; ?></td>
			<td><?php echo $invoice['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'invoices', 'action' => 'view', $invoice['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'invoices', 'action' => 'edit', $invoice['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'invoices', 'action' => 'delete', $invoice['id']), array(), __('Are you sure you want to delete # %s?', $invoice['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Invoice'), array('controller' => 'invoices', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
