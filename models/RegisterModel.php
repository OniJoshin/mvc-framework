<?php

namespace app\models;

use app\core\Model;

/** @package app\models */
class RegisterModel extends Model{
    public string $firstname;
    public string $lastname;
    public string $email;
    public string $password;
    public string $confirmPassword;

    public function rules(): array {
        $rules = [
            'firstname'         => [self::RULE_REQUIRED],
            'lastname'          => [self::RULE_REQUIRED],
            'email'             => [self::RULE_REQUIRED, self::RULE_EMAIL],
            'password'          => [self::RULE_REQUIRED, [self::RULE_MIN, 'min' => 8]],
            'confirmPassword'   => [self::RULE_REQUIRED, [self::RULE_MATCH, 'match' => 'password']],
        ];

        return $rules;
    }


    public function register(){
        echo "Creating New User";
    }

}