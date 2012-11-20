<div class="templates index">
	<h2><?php echo __('Templates'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>            
                        <th><?php echo $this->Paginator->sort('template_name'); ?></th>
                        <th><?php echo $this->Paginator->sort('program name'); ?></th>
			
			<th><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($templates as $template): ?>
	<tr>    
            
                <td><?php echo h($template['Template']['template_name']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($template['Program']['name'], array('controller' => 'programs', 'action' => 'view', $template['Program']['id'])); ?>
		</td>
		
		<td>
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $template['Template']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $template['Template']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $template['Template']['id']), null, __('Are you sure you want to delete # %s?', $template['Template']['template_name'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>

	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Template'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('Back'), array('controller' => 'programs', 'action' => 'index')); ?> </li>
		
	</ul>
</div>
