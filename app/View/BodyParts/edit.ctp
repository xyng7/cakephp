<div class="bodyParts form">
<?php echo $this->Form->create('BodyPart'); ?>
	<fieldset>
		<legend><?php echo __('Edit Body Part'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('body_part');
		echo $this->Form->input('Exercise');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('BodyPart.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('BodyPart.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Body Parts'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Exercises'), array('controller' => 'exercises', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Exercise'), array('controller' => 'exercises', 'action' => 'add')); ?> </li>
	</ul>
</div>
