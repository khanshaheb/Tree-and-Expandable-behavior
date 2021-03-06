<div class="customFields form">
<?php echo $this->Form->create('CustomField'); ?>
	<fieldset>
		<legend><?php echo __('Edit Custom Field'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('category_id');
		echo $this->Form->input('name');
		echo $this->Form->input('required');
		echo $this->Form->input('tooltip');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('CustomField.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('CustomField.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Custom Fields'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Categories'), array('controller' => 'categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Category'), array('controller' => 'categories', 'action' => 'add')); ?> </li>
	</ul>
</div>
