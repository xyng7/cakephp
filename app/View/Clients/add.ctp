<?php echo $this->Html->script(array('jquery.jeditable.mini','jquery.min.js')); ?>

<div class="clients form">   
<?php echo $this->Form->create('Client'); ?>
    <fieldset>
        <legend><?php echo __('Add Client'); ?></legend>

        <table cellpadding = "0" cellspacing = "0">          
            <tr>
                <th><?php echo $this->Form->input('first_name'); ?></th>
                <th><?php echo $this->Form->input('last_name'); ?></th>                     
                <th><?php echo $this->Form->input('dob', array('dateFormat' => 'DMY', 'minYear' => date('Y') - 100, 'maxYear' => date('Y'))); ?></th>
            </tr>
        </table>
        
        <table cellpadding = "0" cellspacing = "0">  
            <tr>
                <th><?php echo $this->Form->input('email'); ?></th>
            </tr>
        </table>
        
        <table cellpadding = "0" cellspacing = "0">    
            <tr>
                <th><?php echo $this->Form->input('phone'); ?></th>
                <th><?php echo $this->Form->input('mobile'); ?></th>                     
            </tr>
            <tr>
                <th><?php echo $this->Form->input('suburb'); ?></th>
                <th><?php echo $this->Form->input('postal', array('label' => 'Postcode')); ?></th>                     
            </tr>
        </table>
        
        <table cellpadding = "0" cellspacing = "0">  
            <tr>
                <th><?php echo $this->Form->input('address'); ?></th>
            </tr>
        </table>

    </fieldset>

    <h6>
<?php echo __('Adding a client will automatically generate client username (as email) and password (as date)'); ?>
    </h6>
<?php echo $this->Form->end(__('Submit')); ?>
</div>

        <script type="text/javascript">
            function search(){
                var postcode = $('#ClientPostal').val();
                console.log(postcode);
                $.get('http://localhost:8888/cakephp_github/postcodes/search/'+postcode,
                    function(data){
                        console.log(data);
                        $('#ClientSuburb').val(data);
                    }
                );
            }
            $('#ClientPostal').change(function(event){
                console.log('key pressed');
                search();
            });
        </script>



