<<<<<<< HEAD
<div class="clients index">
    <?php
    echo $this->Html->script('datatables/jquery.dataTables.min'); #no need to specify js directory and extension
    echo $this->Html->css('jquery.dataTables');
    ?>
    <script>
           $(document).ready(function(){
                   $('#js-datatable').dataTable();
                   document.getElementById('showTable').style.display = 'block';
           });
    </script>
=======
<div class="actions">	
	<h4><?php echo __('Clients'); ?></h4>
</div>

<div class="actions">
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <ul>
		<li><?php echo $this->Html->link(__('New Client'), array('action' => 'add')); ?></li>
	</ul>
</div>

<div>
	
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('first_name'); ?></th>
			<th><?php echo $this->Paginator->sort('last_name'); ?></th>
			<th><?php echo $this->Paginator->sort('email'); ?></th>
			<th><?php echo $this->Paginator->sort('dob'); ?></th>
			<th><?php echo $this->Paginator->sort('phone'); ?></th>
			<th><?php echo $this->Paginator->sort('mobile'); ?></th>
			<th><?php echo $this->Paginator->sort('address'); ?></th>
			<th><?php echo $this->Paginator->sort('suburb'); ?></th>
			<th><?php echo $this->Paginator->sort('postal'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($clients as $client): ?>
	<tr>
                <td><?php echo h($client['Client']['first_name']); ?>&nbsp;</td>
		<td><?php echo h($client['Client']['last_name']); ?>&nbsp;</td>
		<td><?php echo h($client['Client']['email']); ?>&nbsp;</td>
		<td><?php echo $this->Time->format('d-m-Y', h($client['Client']['dob'])); ?>&nbsp;</td>
		<td><?php echo h($client['Client']['phone']); ?>&nbsp;</td>
		<td><?php echo h($client['Client']['mobile']); ?>&nbsp;</td>
		<td><?php echo h($client['Client']['address']); ?>&nbsp;</td>
		<td><?php echo h($client['Client']['suburb']); ?>&nbsp;</td>
		<td><?php echo h($client['Client']['postal']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $client['Client']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $client['Client']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $client['Client']['id']), null, __('Are you sure you want to delete # %s?', $client['Client']['first_name'])); ?>
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
>>>>>>> 4cba349

    <h2><?php echo __('Clients'); ?></h2>
    <table id="js-datatable" cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?php echo h('First Name'); ?></th>
                <th><?php echo h('Last Name'); ?></th>
                <th><?php echo h('Email'); ?></th>
                <th><?php echo h('Dob'); ?></th>
                <th><?php echo h('Phone'); ?></th>
                <th><?php echo h('Mobile'); ?></th>
                <th><?php echo h('Address'); ?></th>
                <th><?php echo h('Suburb'); ?></th>
                <th><?php echo h('Postal'); ?></th>
                <th class="actions"><?php echo __('Actions'); ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($clients as $client): ?>
                <tr>
                    <td><?php echo h($client['Client']['first_name']); ?>&nbsp;</td>
                    <td><?php echo h($client['Client']['last_name']); ?>&nbsp;</td>
                    <td><?php echo h($client['Client']['email']); ?>&nbsp;</td>
                    <td><?php echo $this->Time->format('d-m-Y', h($client['Client']['dob'])); ?>&nbsp;</td>
                    <td><?php echo h($client['Client']['phone']); ?>&nbsp;</td>
                    <td><?php echo h($client['Client']['mobile']); ?>&nbsp;</td>
                    <td><?php echo h($client['Client']['address']); ?>&nbsp;</td>
                    <td><?php echo h($client['Client']['suburb']); ?>&nbsp;</td>
                    <td><?php echo h($client['Client']['postal']); ?>&nbsp;</td>
                    <td>
                        <?php echo $this->Html->link(__('View'), array('action' => 'view', $client['Client']['id'])); ?>
                        <?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $client['Client']['id'])); ?>
                        <?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $client['Client']['id']), null, __('Are you sure you want to delete # %s?', $client['Client']['first_name'])); ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
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
<<<<<<< HEAD
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>
        <li><?php echo $this->Html->link(__('New Client'), array('action' => 'add')); ?></li>
    </ul>
</div>
=======

>>>>>>> 4cba349
