
<?php
echo $this->Html->script(array('jquery-1.8.3', 'jquery.fastLiveFilter'));
?>
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

        <table cellpadding = "0" >
            <!-- //table header
            <tr>
                <td>Body Part</td>
                <td>Category</td>
                <td>Equipment</td>
            </tr>
            -->
            <tr>
                <td><ul id="search_list">
                        <?php
                        //for loop for body parts
                        foreach ($exercise_bodyparts as $eb) {
                            echo 
                            "<li>" . $eb['BodyPart']['body_part'] . "</li>";
                        }
                        ?>

                <!-- <li><?php
                        echo $this->Form->input('BodyPart', array(
                            'multiple' => 'checkbox'));
                        ?></li>
                    </ul></td>
                    
                <ul id="search_list">
                        <li><?php
                        echo $this->Form->input('Category', array(
                            'multiple' => 'checkbox'));
                        ?></li>
                    </ul></td>
                <td><ul id="search_list">
                        <li><?php
                        echo $this->Form->input('Equipment', array(
                            'multiple' => 'checkbox'));
                        ?></li>
                    </ul></td>-->
            </tr>



            <!--<tr>//initial listing

                <td><?php
                        echo $this->Form->input('BodyPart', array(
                            'multiple' => 'checkbox'));
                        ?></td>
                <td> <?php
                        echo $this->Form->input('Category', array(
                            'multiple' => 'checkbox'));
                        ?></td>
                <td> <?php
                        echo $this->Form->input('Equipment', array(
                            'multiple' => 'checkbox'));
                        ?> </td>
            </tr>-->

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
