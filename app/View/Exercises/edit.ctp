<div class="exercises form">
<?php echo $this->Form->create('Exercise'); ?>
	<fieldset>
		<legend><?php echo __('Edit Exercise'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('videos', array('label' => 'Video: enter Youtube embedded link below')); ?>
                
               
                <table cellpadding = "0" cellspacing = "0">
                <tr>
                       
                      <td><?php echo $this->Form->input('BodyPart', array(
                            'multiple' => 'checkbox')); ?></td>
                      <td> <?php echo $this->Form->input('Category', array(
                            'multiple' => 'checkbox')); ?></td>
                      <td> <?php echo $this->Form->input('Equipment', array(
                            'multiple' => 'checkbox')); ?> </td>
                </tr>
                
                </table>
		
	
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
                <li><?php echo $this->Html->link(__('Back'), array('action' => 'view', $exercise['Exercise']['id'])); ?></li>
		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Exercise.id')), null, __('Are you sure you want to delete # %s? This exercise may be related to many programs', $this->Form->value('Exercise.name'))); ?></li>
		
        </ul>
</div>
