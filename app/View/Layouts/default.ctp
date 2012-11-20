<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       Cake.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 *  <?php echo $this->element('sql_dump'); ?> 
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework :)');
$homedir = __d('cake_dev', 'CakePHP: the rapid development php framework :D');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
	
                
                <?php echo __('LSBT - Admin page'); ?>
               
        </title>
	<?php
		echo $this->Html->meta('icon');
                echo $this->Html->css('cake.generic');
                echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>

 	
    
    
    <div id="container">
		<div id="header">
			
                        <div class="actions">
                        
                        <li>
                                <?php echo $this->Html->link(__('Home'), array('controller' => 'pages', 'action' => 'display', 'home')); ?>
                                <?php echo $this->Html->link(__('Clients'), array('controller' => 'Clients', 'action' => 'index')); ?> 
                                <?php echo $this->Html->link(__('Exercises'), array('controller' => 'exercises', 'action' => 'index')); ?>
                                <?php echo $this->Html->link(__('Programs'), array('controller' => 'programs', 'action' => 'index')); ?>
                                <?php echo $this->Html->link(__('Reports'), array('controller' => 'reports', 'action' => 'index')); ?> 
                                <?php echo $this->Html->link(__('Newsletters'), array('controller' => 'newsletters', 'action' => 'index')); ?> 
                        </li>
		
                        </div>
		</div>
		<div id="content">

			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>
		<div id="footer">
                        
                    <li>
                    Chinglish Dev Team
			</li>
                    <li><p> Logged in as: 
    <?php echo AuthComponent::user('username'); ?>
                        </p></li>
		</div>
	</div>

        
</body>
</html>
 
    
   