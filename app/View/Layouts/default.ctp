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

        echo $this->Html->script(array('/js/foundation/jquery', '/js/foundation/foundation.min', '/js/foundation/app', '/js/foundation/modernizr.foundation'));
        echo $this->Html->script(array('jquery-1.3.2.min.js'));
        echo $this->Html->script(array('webwidget_menu_glide.js'));
        echo $this->Html->css(array('webwidget_menu_glide'));
        echo $this->Html->css(array('/css/foundation/foundation.min', '/css/foundation/foundation'));
        ?>
        <script language="javascript" type="text/javascript">
            $(function() {
                $("#webwidget_menu_glide").webwidget_menu_glide({menu_width:"100", menu_height:"23", menu_text_size:"12", menu_text_color:"#FFF", menu_sprite_color:"#86C7EF", menu_background_color:"#0F67A1", menu_margin:"2", sprite_speed:"normal", container:"webwidget_menu_glide" });
            });
        </script>

    </head>
    <body>

        <!-- Heading -->

        <div class="row">
            <div class="twelve columns">
                <img src="http://lifestylebreakthrough.com.au/templates/lifestyle/images/logo.jpg" width="200" height="200" alt ="logo" align ="left"  >
            </div>

            <div class="row">
                <div class="twelve columns">

                    <div id="webwidget_menu_glide" class="webwidget_menu_glide">
                        <!--<div class="webwidget_menu_glide_sprite"></div>-->
                        <ul>
                            <li class="current"><?php echo $this->Html->link(__('Home'),array('controller' => 'users', 'action' => 'index')); ?></li>
                            <li><?php echo $this->Html->link(__('Clients'), array('controller' => 'Clients', 'action' => 'index')); ?> </li>
                            <li><?php echo $this->Html->link(__('Exercises'), array('controller' => 'exercises', 'action' => 'index')); ?></li>
                            <li><?php echo $this->Html->link(__('Programs'), array('controller' => 'programs', 'action' => 'index')); ?></li>
                            <li><?php echo $this->Html->link(__('Reports'), array('controller' => 'reports', 'action' => 'index')); ?> </li>
                            <li><?php echo $this->Html->link(__('Newsletters'), array('controller' => 'newsletters', 'action' => 'index')); ?></li>
                        </ul>
                        <div style="clear: both"></div>

                    </div>           
                </div>
            </div>
        </div>

        <!-- End -->

        <!-- Content -->
        <div class="row">
            <div class="twelve columns">

                <?php echo $this->Session->flash(); ?>

                <?php echo $this->fetch('content'); ?>


            </div>
        </div>

        <!-- End -->

        <!-- Footer -->
        <div class="row">
            <div class="twelve columns">
                <div class ="footer" style="border-top:#999999 1px solid; " align ="left">
                    <div align ="left">
                        Chinglish Dev Team
                    </div>
                    <div align ="right">
                        Logged in as: 
                        <?php echo AuthComponent::user('username'); ?>
                    </div>
                </div>
            </div>
        </div>

        <!-- End -->

    </body>
</html>


