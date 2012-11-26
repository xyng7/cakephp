<?php
App::uses('AppModel', 'Model');
/**
 * ExercisesProgram Model
 *
 * @property Program $Program
 * @property Exercise $Exercise
 */
class ExercisesProgram extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Program' => array(
			'className' => 'Program',
			'foreignKey' => 'program_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Exercise' => array(
			'className' => 'Exercise',
			'foreignKey' => 'exercise_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
