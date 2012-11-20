<?php

App::uses('AuthComponent', 'Controller/Component');

class User extends AppModel {
    public $name = 'User';
    public $validate = array(
        'username' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'A username is required'
            ),
            'unique' => array(
                'rule' => array('isUnique'),
                'message' => 'Username has already been taken')
        ),
        'password' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'A password is required'
            )
        ),
        'role' => array(
            'valid' => array(
                'rule' => array('inList', array('admin', 'client', 'superadmin')),  //Client, superadmin and admin roles
                'message' => 'Please enter a valid role',
                'allowEmpty' => false
            )
        ),
        'password_confirm' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'A password is required'
                
            
        )
        ));
    
    
    public function beforeSave($options = array()) {
    if (isset($this->data[$this->alias]['password'])) {
        $this->data[$this->alias]['password'] = AuthComponent::password($this->data[$this->alias]['password']);
    }
    return true;
    }
    
}