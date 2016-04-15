<div class="widgets view">
<h2><?php echo __('Widget'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($widget['Widget']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($widget['Widget']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Href'); ?></dt>
		<dd>
			<?php echo h($widget['Widget']['href']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Widget'); ?></dt>
		<dd>
			<?php echo h($widget['Widget']['widget']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Parent Widget'); ?></dt>
		<dd>
			<?php echo $this->Html->link($widget['ParentWidget']['name'], array('controller' => 'widgets', 'action' => 'view', $widget['ParentWidget']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Lft'); ?></dt>
		<dd>
			<?php echo h($widget['Widget']['lft']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rght'); ?></dt>
		<dd>
			<?php echo h($widget['Widget']['rght']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($widget['Widget']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($widget['Widget']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Type'); ?></dt>
		<dd>
			<?php echo h($widget['Widget']['type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Position'); ?></dt>
		<dd>
			<?php echo h($widget['Widget']['position']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Widget'), array('action' => 'edit', $widget['Widget']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Widget'), array('action' => 'delete', $widget['Widget']['id']), array(), __('Are you sure you want to delete # %s?', $widget['Widget']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Widgets'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Widget'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Widgets'), array('controller' => 'widgets', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Parent Widget'), array('controller' => 'widgets', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Widgets'); ?></h3>
	<?php if (!empty($widget['ChildWidget'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Href'); ?></th>
		<th><?php echo __('Widget'); ?></th>
		<th><?php echo __('Parent Id'); ?></th>
		<th><?php echo __('Lft'); ?></th>
		<th><?php echo __('Rght'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Type'); ?></th>
		<th><?php echo __('Position'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($widget['ChildWidget'] as $childWidget): ?>
		<tr>
			<td><?php echo $childWidget['id']; ?></td>
			<td><?php echo $childWidget['name']; ?></td>
			<td><?php echo $childWidget['href']; ?></td>
			<td><?php echo $childWidget['widget']; ?></td>
			<td><?php echo $childWidget['parent_id']; ?></td>
			<td><?php echo $childWidget['lft']; ?></td>
			<td><?php echo $childWidget['rght']; ?></td>
			<td><?php echo $childWidget['created']; ?></td>
			<td><?php echo $childWidget['modified']; ?></td>
			<td><?php echo $childWidget['type']; ?></td>
			<td><?php echo $childWidget['position']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'widgets', 'action' => 'view', $childWidget['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'widgets', 'action' => 'edit', $childWidget['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'widgets', 'action' => 'delete', $childWidget['id']), array(), __('Are you sure you want to delete # %s?', $childWidget['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Child Widget'), array('controller' => 'widgets', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
