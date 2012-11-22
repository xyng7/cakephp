     
        <div class="programs view">
            <h3><?php echo __('Clients Home Page'); ?></h3>

<br>
<div class="related">
	<h3><?php echo __('Programs'); ?></h3>
	<?php if (!empty($client['Program'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>    
                <th><?php echo __('Number'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 1;
		foreach ($client['Program'] as $programs): ?>
		<tr>
                        <td><?php echo $i; ?></td>
			<td><?php echo $programs['name']; ?></td>
			<td>
				<?php echo $this->Html->link(__('View'), array('action' => 'viewProgram', $programs['id'])); ?>
				
			</td>
		</tr>
                <?php $i++; ?>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

</div>
</div>
        
        


<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
        <ul>
        <li><?php echo $this->Html->link(__('Change Password'), array('action' => 'changePassword', AuthComponent::user('id'))); ?> </li>
        <li><?php echo $this->Html->link(__('Logout'), array('controller' => 'users', 'action' => 'logout')); ?> </li>
        </ul>  
</div>