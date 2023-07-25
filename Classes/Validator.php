<?php

class Validator {
    public $errors = [];

    private $data;
    private static $fields = ['username', 'email', 'password', 'password-confirm'];
    private static $login_fields = ['username', 'password'];

    public function __construct($post_data) {
        $this->data = $post_data;
    }

    public function validateLoginForm() {  
        $this->checkFieldsPresence(self::$login_fields);

        $this->validateUsername();
        $this->validatePasswords('login');
    
        return $this->errors;
    
    }

    public function validateCreateForm() {
        $this->checkFieldsPresence(self::$fields);

        $this->validateUsername();
        $this->validateEmail();
        $this->validatePasswords('create');

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
                $this->addError('username', 'Username cannot be empty');
            }
            else {
                if (!preg_match('/^[a-zA-Z0-9]{6,20}$/', $val)) {
                    $this->addError('username', 'Username must be between 6-20 chars & alphanumeric');
                }
            }
        }
        return; 
    }

    private function validateEmail() {
        $val = trim($this->data['email']);

        if (empty($val)) {
            $this->addError('email', 'Email cannot be empty');
        }
        else {
            if (!filter_var($val, FILTER_VALIDATE_EMAIL)) {
                $this->addError('email', 'Email must be a valid email');
            }
        }
    }

    private function validatePasswords($http_method) {
        $val = trim($this->data['password']);
        if (empty($val)) {
            $this->addError('password', 'Password cannot be empty');
        } 
        else {
            if (!preg_match('/^[a-zA-Z0-9]{6,20}$/', $val)) {
                $this->addError('password', 'Password must be between 6-20 chars & alphanumeric');
            }
        }
        if ($http_method === 'login') {
            return; 
        }
        else {
            $confirm_password = trim($this->data['password-confirm']);
            if ($confirm_password !== $val) {
                $this->addError('password-confirm', 'Confirm password not match');
            }
            return; 
        }
    }

    private function addError($key, $val) {
        $this->errors[$key] = $val;
    }

}