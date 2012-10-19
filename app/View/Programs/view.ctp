<div class="programs view">
<h2><?php  echo __('Program'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($program['Program']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($program['Program']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Start Date'); ?></dt>
		<dd>
			<?php echo h($program['Program']['start_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('End Date'); ?></dt>
		<dd>
			<?php echo h($program['Program']['end_date']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Program'), array('action' => 'edit', $program['Program']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Program'), array('action' => 'delete', $program['Program']['id']), null, __('Are you sure you want to delete # %s?', $program['Program']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Programs'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Program'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Templates'), array('controller' => 'templates', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Template'), array('controller' => 'templates', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Clients'), array('controller' => 'clients', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Client'), array('controller' => 'clients', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Exercises'), array('controller' => 'exercises', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Exercise'), array('controller' => 'exercises', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Templates'); ?></h3>
	<?php if (!empty($program['Template'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Program Id'); ?></th>
		<th><?php echo __('Template Name'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($program['Template'] as $template): ?>
		<tr>
			<td><?php echo $template['id']; ?></td>
			<td><?php echo $template['program_id']; ?></td>
			<td><?php echo $template['template_name']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'templates', 'action' => 'view', $template['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'templates', 'action' => 'edit', $template['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'templates', 'action' => 'delete', $template['id']), null, __('Are you sure you want to delete # %s?', $template['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Template'), array('controller' => 'templates', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Clients'); ?></h3>
	<?php if (!empty($program['Client'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('First Name'); ?></th>
		<th><?php echo __('Last Name'); ?></th>
		<th><?php echo __('Email'); ?></th>
		<th><?php echo __('Dob'); ?></th>
		<th><?php echo __('Phone'); ?></th>
		<th><?php echo __('Mobile'); ?></th>
		<th><?php echo __('Address'); ?></th>
		<th><?php echo __('Suburb'); ?></th>
		<th><?php echo __('Postal'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($program['Client'] as $client): ?>
		<tr>
			<td><?php echo $client['id']; ?></td>
			<td><?php echo $client['first_name']; ?></td>
			<td><?php echo $client['last_name']; ?></td>
			<td><?php echo $client['email']; ?></td>
			<td><?php echo $client['dob']; ?></td>
			<td><?php echo $client['phone']; ?></td>
			<td><?php echo $client['mobile']; ?></td>
			<td><?php echo $client['address']; ?></td>
			<td><?php echo $client['suburb']; ?></td>
			<td><?php echo $client['postal']; ?></td>
			<td><?php echo $client['user_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'clients', 'action' => 'view', $client['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'clients', 'action' => 'edit', $client['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'clients', 'action' => 'delete', $client['id']), null, __('Are you sure you want to delete # %s?', $client['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Client'), array('controller' => 'clients', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Exercises'); ?></h3>
	<?php if (!empty($program['Exercise'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Images'); ?></th>
		<th><?php echo __('Videos'); ?></th>
		<th><?php echo __('Instructions'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($program['Exercise'] as $exercise): ?>
		<tr>
			<td><?php echo $exercise['id']; ?></td>
			<td><?php echo $exercise['name']; ?></td>
			<td><?php echo $exercise['images']; ?></td>
			<td><?php echo $exercise['videos']; ?></td>
			<td><?php echo $exercise['instructions']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'exercises', 'action' => 'view', $exercise['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'exercises', 'action' => 'edit', $exercise['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'exercises', 'action' => 'delete', $exercise['id']), null, __('Are you sure you want to delete # %s?', $exercise['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Exercise'), array('controller' => 'exercises', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
