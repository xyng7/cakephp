<?php
App::uses('AppModel', 'Model');
/**
 * Category Model
 *
 * @property Exercise $Exercise
 */
class Category extends AppModel {

var $displayField = 'category';
    public $validate = array(
		'category' => array(
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
                                'message' => 'Category must be unique'),
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
			'joinTable' => 'categories_exercises',
			'foreignKey' => 'category_id',
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
