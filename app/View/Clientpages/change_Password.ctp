<div class="users form">
<?php echo $this->Form->create('User'); ?>
	<fieldset>
		<legend><?php echo __('Change Password'); ?></legend>
	<?php
		echo $this->Form->input('id');
                echo $this->Form->input('old_password', array('type' => 'password'));
                echo $this->Form->input('password');
		echo $this->Form->input('password_confirm', array('type' => 'password'));
        
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Back'), array('action' => 'index')); ?></li>
	</ul>
</div>
