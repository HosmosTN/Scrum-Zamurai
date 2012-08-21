<h2>Add new story</h2>

<?php
	echo $this->Form->create('Story');
	echo $this->Form->input('sprint_id', array('type' => 'select'));
	echo $this->Form->input('description');
	echo $this->Form->input('status');
	echo $this->Form->input('priority');
	echo $this->Form->input('record');
	echo $this->Form->end('Add story');
?>