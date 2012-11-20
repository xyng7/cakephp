<?php
App::uses('AppModel', 'Model');
/**
 * Exercise Model
 *
 * @property Instruction $Instruction
 * @property BodyPart $BodyPart
 * @property Category $Category
 * @property Equipment $Equipment
 * @property Program $Program
 */
class Exercise extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'name' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Instruction' => array(
			'className' => 'Instruction',
			'foreignKey' => 'exercise_id',
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


/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'BodyPart' => array(
			'className' => 'BodyPart',
			'joinTable' => 'body_parts_exercises',
			'foreignKey' => 'exercise_id',
			'associationForeignKey' => 'body_part_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		),
		'Category' => array(
			'className' => 'Category',
			'joinTable' => 'categories_exercises',
			'foreignKey' => 'exercise_id',
			'associationForeignKey' => 'category_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		),
		'Equipment' => array(
			'className' => 'Equipment',
			'joinTable' => 'equipments_exercises',
			'foreignKey' => 'exercise_id',
			'associationForeignKey' => 'equipment_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		),
		'Program' => array(
			'className' => 'Program',
			'joinTable' => 'exercises_programs',
			'foreignKey' => 'exercise_id',
			'associationForeignKey' => 'program_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		)
	);

}
