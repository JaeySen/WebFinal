<?php

class Validator {
    public $errors = [];

    private $data;
    private static $fields = ['username', 'email', 'password', 'confirm-password'];
    private static $login_fields = ['username', 'password'];

    public function __construct($post_data) {
        $this->data = $post_data;
    }

    public function validateLoginForm() {  
        $this->checkFieldsPresence(self::$login_fields);

        $this->validateUsername();
        $this->validatePasswords();
    
        return $this->errors;
    
    }

    public function validateCreateForm() {
        $this->checkFieldsPresence(self::$fields);

        $this->validateUsername();
        $this->validateEmail();
        $this->validatePasswords();

        return $this->errors;
    }

    private function checkFieldsPresence($fields) {
        foreach($fields as $field) {
            if(!array_key_exists($field, $this->data)) {
            //   trigger_error("$field is not present in data");
              $this->addError("$field", "$field is not present in data");
              return;
      
            }
        }
    }

    private function validateUsername() {
        if (!isset($this->errors['username'])) {
            $val = trim($this->data['username']);

            if (empty($val)) {
                $this->addError('username', 'username cannot be empty');
            }
            else {
                if (!preg_match('/^[a-zA-Z0-9]{6,20}$/', $val)) {
                    $this->addError('username', 'username must be between 6-20 chars & alphanumeric');
                }
            }
        }
        return; 
    }

    private function validateEmail() {
        $val = trim($this->data['email']);

        if (empty($val)) {
            $this->addError('email', 'email cannot be empty');
        }
        else {
            if (!filter_var($val, FILTER_VALIDATE_EMAIL)) {
            $this->addError('email', 'email must be a valid email');
            }
        }
    }

    private function validatePasswords() {
        if (!isset($this->errors['password'])){
            $val = trim($this->data['password']);

            if (empty($val)) {
                $this->addError('password', 'password cannot be empty');
            }
            else {
                if (!preg_match('/^[a-zA-Z0-9]{6,20}$/', $val)) {
                    $this->addError('password', 'password must be between 6-20 chars & alphanumeric');
                }
            }
        }
        return; 

    }

    private function addError($key, $val) {
        $this->errors[$key] = $val;
    }

}