<div class="invoices view">
<h2><?php echo __('Invoice'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($invoice['Invoice']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Company'); ?></dt>
		<dd>
			<?php echo $this->Html->link($invoice['Company']['name'], array('controller' => 'companies', 'action' => 'view', $invoice['Company']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Invoice Type'); ?></dt>
		<dd>
			<?php echo $this->Html->link($invoice['InvoiceType']['name'], array('controller' => 'invoice_types', 'action' => 'view', $invoice['InvoiceType']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Invoice Number Int'); ?></dt>
		<dd>
			<?php echo h($invoice['Invoice']['invoice_number_int']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Invoice Number Ext'); ?></dt>
		<dd>
			<?php echo h($invoice['Invoice']['invoice_number_ext']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Amount Excl'); ?></dt>
		<dd>
			<?php echo h($invoice['Invoice']['amount_excl']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('VAT'); ?></dt>
		<dd>
			<?php echo h($invoice['Invoice']['VAT']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Amount Incl'); ?></dt>
		<dd>
			<?php echo h($invoice['Invoice']['amount_incl']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date'); ?></dt>
		<dd>
			<?php echo h($invoice['Invoice']['date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date Exp'); ?></dt>
		<dd>
			<?php echo h($invoice['Invoice']['date_exp']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Paydate'); ?></dt>
		<dd>
			<?php echo h($invoice['Invoice']['paydate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Virtual'); ?></dt>
		<dd>
			<?php echo h($invoice['Invoice']['virtual']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Paid'); ?></dt>
		<dd>
			<?php echo h($invoice['Invoice']['paid']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Workmonth'); ?></dt>
		<dd>
			<?php echo h($invoice['Invoice']['workmonth']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hourrate'); ?></dt>
		<dd>
			<?php echo h($invoice['Invoice']['hourrate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hours'); ?></dt>
		<dd>
			<?php echo h($invoice['Invoice']['hours']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Days'); ?></dt>
		<dd>
			<?php echo h($invoice['Invoice']['days']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descr'); ?></dt>
		<dd>
			<?php echo h($invoice['Invoice']['descr']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($invoice['Invoice']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($invoice['Invoice']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Invoice'), array('action' => 'edit', $invoice['Invoice']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Invoice'), array('action' => 'delete', $invoice['Invoice']['id']), array(), __('Are you sure you want to delete # %s?', $invoice['Invoice']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Invoices'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Invoice'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Companies'), array('controller' => 'companies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Company'), array('controller' => 'companies', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Invoice Types'), array('controller' => 'invoice_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Invoice Type'), array('controller' => 'invoice_types', 'action' => 'add')); ?> </li>
	</ul>
</div>
