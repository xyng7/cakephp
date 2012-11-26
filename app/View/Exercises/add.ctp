<?php echo $this->Html->script(array('jquery-1.8.3', 'jquery.fastLiveFilter')); ?>
<style>
    label{
        display:inline
    }
</style>
<script>
    $(function() {
        $('#search_input').fastLiveFilter('#search_list');
    });
</script>

<div class="exercises form">
    <?php echo $this->Form->create('Exercise', array('enctype' => 'multipart/form-data')); ?>
    <fieldset>
        <legend><?php echo __('New Exercise'); ?></legend>
        <?php echo $this->Form->input('name'); ?>

        <?php echo $this->Form->input('videos', array('label' => 'Video: enter Youtube embedded link below')); ?>

        <input id="search_input" placeholder="Type to filter">
<<<<<<< HEAD

        <table border="1" cellpadding = "0" >            
            <tr>
                
                <td>
                    <ul id="search_list">
=======
        <ul id="search_list" style="list-style-type: none">
            <table border="0" cellpadding = "0" >            
                <tr>
                    <th>Body Part</th>
                    <th>Category</th>
                    <th>Equipment</th>
                </tr>
                <tr>
                    <td>
>>>>>>> 825852f504d58620594cc4be8b290745fa09c7dc
                        <?php
                        //for loop for body parts
                        foreach ($exercise_bodyparts as $eb) {
                            echo $this->Form->input('BodyPart.BodyPart.', array(
                                'type' => 'checkbox',
                                'label' => $eb['BodyPart']['body_part'],
                                'value' => $eb['BodyPart']['id'],
                                'before' => '<li>',
                                'after' => '</li>',
                                'hiddenField' => false,
                                'div' => false,
                                //'style'=>'display:inline'
                            ));
                        }
                        ?>
<<<<<<< HEAD
                    </ul>
                </td>

                <td>             
                    <ul id="search_list">
=======
                        </ul>
                    </td>
                    <td>
>>>>>>> 825852f504d58620594cc4be8b290745fa09c7dc
                        <?php
                        //for loop for categories
                        foreach ($exercise_categories as $ec) {
                            echo $this->Form->input('Category.Category.', array(
                                'type' => 'checkbox',
                                'label' => $ec['Category']['category'],
                                'value' => $ec['Category']['id'],
                                'before' => '<li>',
                                'after' => '</li>',
                                'hiddenField' => false,
                                'div' => false
                            ));
                        }
                        ?>
<<<<<<< HEAD
                    </ul>
                </td>

                <td>               
                    <ul id="search_list">
                <?php
                //for loop for equipment
                foreach ($exercise_equipment as $ee) {
                    echo $this->Form->input('Equipment.Equipment.', array(
                        'type' => 'checkbox',
                        'label' => $ee['Equipment']['equipment'],
                        'value' => $ee['Equipment']['id'],
                        'before' => '<li>',
                        'after' => '</li>',
                        'hiddenField' => false,
                        'div' => false
                    ));
                }
                ?>
                </ul>
                </td>
            </tr>
        </table>
=======
                    </td>
                    <td>
                        <?php
                        //for loop for equipment
                        foreach ($exercise_equipment as $ee) {
                            echo $this->Form->input('Equipment.Equipment.', array(
                                'type' => 'checkbox',
                                'label' => $ee['Equipment']['equipment'],
                                'value' => $ee['Equipment']['id'],
                                'before' => '<li>',
                                'after' => '</li>',
                                'hiddenField' => false,
                                'div' => false
                            ));
                        }
                        ?>
                    </td>
                </tr>
            </table>
        </ul>
>>>>>>> 825852f504d58620594cc4be8b290745fa09c7dc

        <?php echo $this->Form->end(__('Submit')); ?>
    </fieldset>

</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>

        <li><?php echo $this->Html->link(__('List Exercises'), array('action' => 'index')); ?></li>

    </ul>
</div>
