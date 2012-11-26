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
        <table cellpadding = "0" cellspacing = "0">          
            <tr>
                <th> <?php echo $this->Form->input('client_id'); ?> </th>
                <th> <?php echo $this->Form->input('name'); ?> </th> 
            </tr>
        </table>

        <table cellpadding = "0" cellspacing = "0">          
            <tr>
                <th> <?php echo $this->Form->input('start_date', array('dateFormat' => 'DMY', 'minYear' => date('Y'), 'maxYear' => date('Y') + 50)); ?> </th>
                <th> <?php echo $this->Form->input('end_date', array('dateFormat' => 'DMY', 'minYear' => date('Y'), 'maxYear' => date('Y') + 50)); ?></th> 
            </tr>
        </table>     
        <input id="search_input" placeholder="Type to filter">
        <ul id="search_list" style="list-style-type: none">
            <table border="0" cellpadding = "0" >   
                <tr> 
                    <th>Exercise</th>
                    <!--<th>Image</th>-->
                    <th>Sets</th>
                    <th>Reps</th>
                    <th>Rest</th>
                </tr>
                <tr>
                    <?php
                    $i = 0;
                    //for loop for body parts
                    foreach ($exercises as $eb){
                        ?> 
                        <td> 
                            <?php 
                            echo $this->Form->input("Exercise.Exercise.", array(
                                'type' => 'checkbox',
                                'label' => $eb['Exercise']['name'],
                                'value' => $eb['Exercise']['id'],
                                'before' => '<li>',
                                'after' => '</li>',
                                'hiddenField' => false,
                                'div' => false,
                                'style' => 'display:inline'
                            ));
                            ?>
                            
                        </td>   
                            <?php /*foreach ($eb['Instruction'] as $instruction){ //debug($instruction)?>
                            <td>
                                <?php
                                if ($instruction['image'] != NULL) {
                                    //echo $instruction['image']."<br /><br />"; 
                                    echo $this->Html->image('files/' . $instruction['image'], array('width' => 50, 'height' => 50));
                                } 
                                if ($instruction['image'] == NULL || isset($instruction['image']) === FALSE){
                                    echo "no image available";
                                }
                                /// echo "no image available"; 
                                break;
                                ?>
                                &nbsp;
                            </td>
                            <?php }*/ ?>
                        <td> 
                            <?php
                            echo $this->Form->input("Exercise.Exercise.$i.program.", array(
                                'type' => 'select',
                                'label' => 'Sets:',
                                'options' => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17),
                                'default' => 5,
                                'before' => '<li>',
                                'after' => '</li>',
                                'hiddenField' => false,
                                'div' => false
                            ));
                            ?>
                        </td>
                        <td> 
                            <?php
                            echo $this->Form->input("Exercise.Exercise.$i.program.", array(
                                'type' => 'select',
                                'label' => 'Reps:',
                                'options' => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17),
                                'default' => 5,
                                'before' => '<li>',
                                'after' => '</li>',
                                'hiddenField' => false,
                                'div' => false
                            ));
                            ?>
                        </td>
                        <td> 
                            <?php
                            echo $this->Form->input("Exercise.Exercise.$i.program.", array(
                                'type' => 'select',
                                'label' => 'Rest:',
                                'options' => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17),
                                'default' => 5,
                                'before' => '<li>',
                                'after' => '</li>',
                                'hiddenField' => false,
                                'div' => false
                            ));
                            ?>
                        </td>
                    </tr>
    <?php $i++; 
    }
     ?>
            </table>
        </ul>
<?php echo $this->Form->end(__('Submit')); ?>
    </fieldset>

</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>
        <li><?php echo $this->Html->link(__('List Programs'), array('action' => 'index')); ?></li>
        <li><?php echo $this->Form->submit(__('Use Template', true), array('name' => 'Cancel', 'div' => false)); ?></li>
    </ul>
</div>

