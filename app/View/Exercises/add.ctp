<div class="exercises form">
<?php echo $this->Form->create('Exercise'); ?>
	<fieldset>
		<legend><?php echo __('Add Exercise'); ?></legend>
	<?php
		echo $this->Form->input('name');
                ?>
                <td class="heading" width="30%"><h5 align="left"> &nbsp; Image </h5></td> 
	<?php	echo $this->Form->file('image', array('label' =>'','size'=>'50'));
		echo $this->Form->input('videos');
		echo $this->Form->input('instructions', array('type' => 'textarea', 'escape' => false));
		echo $this->Form->input('BodyPart', array('type' => 'select','multiple' => 'checkbox'));
		echo $this->Form->input('Category', array('type' => 'select','multiple' => 'checkbox'));
		echo $this->Form->input('Equipment', array('type' => 'select','multiple' => 'checkbox'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Exercises'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Body Parts'), array('controller' => 'body_parts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Body Part'), array('controller' => 'body_parts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Categories'), array('controller' => 'categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Category'), array('controller' => 'categories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Equipment'), array('controller' => 'equipment', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Equipment'), array('controller' => 'equipment', 'action' => 'add')); ?> </li>
	</ul>
</div>
