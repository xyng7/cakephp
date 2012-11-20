<?php
App::uses('AppModel', 'Model');
/**
 * BodyPart Model
 *
 * @property Exercise $Exercise
 */
class BodyPart extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
var $displayField = 'body_part';
    public $validate = array(
		'body_part' => array(
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
                                'message' => 'Body part must be unique'),
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
			'joinTable' => 'body_parts_exercises',
			'foreignKey' => 'body_part_id',
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
