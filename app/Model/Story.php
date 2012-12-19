<?php
App::uses('AppModel', 'Model');
/**
 * Story Model
 *
 * @property Story $ParentStory
 * @property Sprint $Sprint
 * @property Story $ChildStory
 */
class Story extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = [
		'name' => [
			'notempty' => [
				'rule' => ['notempty'],
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			],
		],
		'sprint_id' => [
			'numeric' => [
				'rule' => ['numeric'],
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			],
		],
		'priority' => [
			'rule' => ['custom', '/p[01234]/'],
			'message' => 'Priority must be  p0, p1, ..., or p4.',
		],
		'status' => [
			'rule' => ['inList', ['not started', 'in progress', 'completed', 'blocked']],
			'message' => "Status must be 'not started', 'in progress', 'completed' or 'blocked'.",
		],
		'estimate' => [
			'rule' => ['numeric'],
			'message' => 'Estimate must be a number.',
			'allowEmpty' => true,
		],
		'record' => [
			'rule' => ['numeric'],
			'message' => 'Record must be a number.',
			'allowEmpty' => true,
		],
	];

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'ParentStory' => array(
			'className' => 'Story',
			'foreignKey' => 'parent_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Sprint' => array(
			'className' => 'Sprint',
			'foreignKey' => 'sprint_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'ChildStory' => array(
			'className' => 'Story',
			'foreignKey' => 'parent_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

}
