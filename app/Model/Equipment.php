<?php
App::uses('AppModel', 'Model');
/**
 * Equipment Model
 *
 * @property Exercise $Exercise
 */
class Equipment extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
var $displayField = 'equipment';	
    public $useTable = 'equipments';

/**
 * Validation rules
 *
 * @var array
 */
	
       public $validate = array(
		'equipment' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
                       //is unique
                        'unique' => array(
                                'rule' => array('isUnique'),
                                'message' => 'Equipment must be unique'),
		),  
             
             
            
       
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'Exercise' => array(
			'className' => 'Exercise',
			'joinTable' => 'equipments_exercises',
			'foreignKey' => 'equipment_id',
			'associationForeignKey' => 'exercise_id',
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
