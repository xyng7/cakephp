<h3><?php echo __('Welcome! Please login to continue'); ?></h3>


      
    <div style="margin-left: 100px; margin-top: 50px;">
    <?php 
    echo $this->Html->image('lsbtlogo.jpeg', array('alt'=>'Lsbt logo', 'border'=>'0'));  
    ?> 

    <div style="float: right; width: 70%; margin-right: 100px;">   
    <?php echo $this->Session->flash('auth'); ?>
    <?php echo $this->Form->create('User'); ?>	
  
    <ul>
    <fieldset style="width: 50%;">
    <?php
        echo $this->Form->input('username');
        echo $this->Form->input('password');
    ?>
    
    <?php echo $this->Form->end(__('Login')); ?>
    <?php echo $this->Html->link(__('Fogot password?'), array('controller' => 'forgotpassword', 'action' => 'index')); ?>
    </fieldset>
    </ul>
    </div>
        
    </div>


