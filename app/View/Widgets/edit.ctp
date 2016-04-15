<div class="widgets form">
<?php echo $this->Form->create('Widget'); ?>
	<fieldset>
		<legend><?php echo __('Edit Widget'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('href');
		echo $this->Form->input('widget');
		echo $this->Form->input('parent_id');
		echo $this->Form->input('lft');
		echo $this->Form->input('rght');
		echo $this->Form->input('type');
		echo $this->Form->input('position');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Widget.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Widget.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Widgets'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Widgets'), array('controller' => 'widgets', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Parent Widget'), array('controller' => 'widgets', 'action' => 'add')); ?> </li>
	</ul>
</div>
