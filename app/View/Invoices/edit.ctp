<div class="invoices form">
<?php echo $this->Form->create('Invoice'); ?>
	<fieldset>
		<legend><?php echo __('Edit Invoice'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('company_id');
		echo $this->Form->input('invoice_type_id');
		echo $this->Form->input('invoice_number_int');
		echo $this->Form->input('invoice_number_ext');
		echo $this->Form->input('amount_excl');
		echo $this->Form->input('VAT');
		echo $this->Form->input('amount_incl');
		echo $this->Form->input('date');
		echo $this->Form->input('date_exp');
		echo $this->Form->input('paydate');
		echo $this->Form->input('virtual');
		echo $this->Form->input('paid');
		echo $this->Form->input('workmonth');
		echo $this->Form->input('hourrate');
		echo $this->Form->input('hours');
		echo $this->Form->input('days');
		echo $this->Form->input('descr');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Invoice.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Invoice.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Invoices'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Companies'), array('controller' => 'companies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Company'), array('controller' => 'companies', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Invoice Types'), array('controller' => 'invoice_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Invoice Type'), array('controller' => 'invoice_types', 'action' => 'add')); ?> </li>
	</ul>
</div>
