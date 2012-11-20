<div class="exercises form">
<?php echo $this->Form->create('Exercise', array('enctype' => 'multipart/form-data')); ?>
    <fieldset>
		<legend><?php echo __('New Exercise'); ?></legend>
                <?php
		echo $this->Form->input('name'); ?>
              
		<?php echo $this->Form->input('videos', array('label' => 'Video: enter Youtube embedded link below')); ?>
                
               
                <table cellpadding = "0" >
                <tr>
                       
                      <td><?php echo $this->Form->input('BodyPart', array(
                            'multiple' => 'checkbox')); ?></td>
                      <td> <?php echo $this->Form->input('Category', array(
                            'multiple' => 'checkbox')); ?></td>
                      <td> <?php echo $this->Form->input('Equipment', array(
                            'multiple' => 'checkbox')); ?> </td>
                </tr>
                
                </table>
                
                <?php echo $this->Form->end(__('Submit')); ?>
    </fieldset>

</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Exercises'), array('action' => 'index')); ?></li>
		
	</ul>
</div>
