<?php
echo $this->Html->script(array('jquery-1.8.3', 'jquery.fastLiveFilter'));
?>
<script>
    $(function() {
        $('#search_input').fastLiveFilter('#search_list');
    });
</script>

<div class="programs form">
<?php echo $this->Form->create('Program'); ?>
	<fieldset>
		<legend><?php echo __('Add Program'); ?></legend>
	<?php
		echo $this->Form->input('client_id');
		echo $this->Form->input('name');
		echo $this->Form->input('start_date', array('dateFormat' => 'DMY', 'minYear' =>date('Y'),'maxYear'=>date('Y')+50));
		echo $this->Form->input('end_date', array('dateFormat' => 'DMY', 'minYear' =>date('Y'),'maxYear'=>date('Y')+50));
		
               //echo $this->Form->input('Exercise', array('type' => 'select','multiple' => 'checkbox')); ?>
	<input id="search_input" placeholder="Type to filter">

        <table border="1" cellpadding = "0" >  
            
                        <ul id="search_list">
                    <?php 
                        //for loop for body parts
                        foreach ($exercises as $eb) {
                            echo $this->Form->input('Exercise.Exercise.', array(
                                'type' => 'checkbox',
                                //'multiple' => 'checkbox',
                                'label' => $eb['Exercise']['name'],
                                'value' => $eb['Exercise']['id'],
                               'before' => '<li>',
                               'after' => '</li>',
                                'hiddenField' => false,
                                'div' => false
                            ));
                           // debug($eb['Exercise']['name']);
                        }
                        ?>
                       
                   </ul>
                
        </table>
        <?php echo $this->Form->end(__('Submit')); ?>
	</fieldset>

</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Programs'), array('action' => 'index')); ?></li>
		
	</ul>
</div>
