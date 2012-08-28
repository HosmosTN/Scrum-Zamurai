<h2>Stories</h2>

<table class="table table-striped">
	<?php
		echo $this->Html->tableHeaders(array(
			'id', 'description', 'sprint', 'status', 'actions'
		));

		foreach ($stories as $row) {
			$s = $row['Story'];
			echo $this->Html->tableCells(array(array(
				$this->Html->link($s['id'], array('action' => 'edit', $s['id'])),
				$s['description'],
				$row['Sprint']['name'],
				$s['status'],
				$this->Html->link('Edit', array('action' => 'edit', $s['id']), array('class' => 'btn'))
					. ' ' . $this->Html->link('<i class="icon-remove"></i>', array('action' => 'delete', $s['id']), array('class' => 'btn btn-danger', 'escape' => false))
			)));
		}
	?>
</table>

<div class="actions">
	<?php echo $this->Html->link('Add new story', array('action' => 'add'), array('class' => 'btn btn-primary')); ?>
</div>