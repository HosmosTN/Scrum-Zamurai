<?php
/**
 * StoryFixture
 *
 */
class StoryFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'sprint_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'description' => array('type' => 'text', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'status' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'priority' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'estimate' => array('type' => 'integer', 'null' => true, 'default' => null),
		'result' => array('type' => 'integer', 'null' => true, 'default' => null),
		'begin' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'end' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'order' => array('type' => 'integer', 'null' => true, 'default' => '0'),
		'parent_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => array('id', 'sprint_id'), 'unique' => 1),
			'fk_stories_sprints_idx' => array('column' => 'sprint_id', 'unique' => 0)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'created' => '2001-01-01 00:00:00:00',
			'modified' => '2001-01-01 00:00:01',
			'sprint_id' => 1,
			'description' => 'description 1',
			'status' => 'open',
			'priority' => 'high',
			'estimate' => 1,
			'result' => 1,
			'begin' => '2012-10-12 16:14:48',
			'end' => '2012-10-12 16:14:48',
			'order' => 1,
			'parent_id' => 0
		),
	);

}
