<h2>Edit Story</h2>
<?php
	$inputs = array(
		array('id', array('type' => 'hidden')),
	);

	echo $this->Form->create('Story', array('action' => 'edit'));
	echo $this->Form->input('id', array('type' => 'hidden'));
	echo $this->Form->input('sprint_id', array('type' => 'hidden', 'type' => 'select'));
	echo $this->Form->input('description', array('row' => '4'));
//	foreach ($inputs as $input) {
//		echo $this->Form->input($input);
//	}
?>
