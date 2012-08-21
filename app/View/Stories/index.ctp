<h2>Stories</h2>

<table>
	<?php
		echo $this->Html->tableHeaders(array(
			'id', 'description', 'status', 'actions'
		));

		foreach ($stories as $row) {
			$s = $row['Story'];
			echo $this->Html->tableCells(array(array(
				$this->Html->link($s['id'], array('action' => 'edit', $s['id'])),
				$s['description'],
				$s['status'],
				'Edit Delete'
			)));
		}
	?>
</table>

<div class="actions">
	<?php echo $this->Html->link('Add new story', array('action' => 'add')); ?>
</div>