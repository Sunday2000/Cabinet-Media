<?php

namespace App\Validation;

class Validator {

    private $data;
    private $errors;

    public function __construct(array $data){
        $this->data = $data;
    }

    public function validate(array $rules): ?array{
        foreach ($rules as $name => $rulesArray){

            if (array_key_exists($name, $this->data)){
                foreach($rulesArray as $rule){
                    switch($rule){
                        case 'required':
                            $this->required($name, $this->data[$name]);
                        break;
                        case substr($rule, 0, 3) === 'min':
                            $this->min($name, $this->data[$name], $rule);
                        break;
                        case 'email':
                            $this->email($name, $this->data[$name]);
                        break;
                        case 'string':
                            $this->string($name, $this->data[$name]);
                        break;
                    }
                }
            }

        }

        return $this->getErrors();
    }

    private function required(string $name, string $value){

        $value = trim($value);
        if( !isset($value) || is_null($value) || empty($value)){
            $this->errors[$name][] = "{$name} est requis";
        }
    }

    public function string(string $name, string $value){
        $value = trim($value);
        if( !is_string($value) ){
            $this->errors[$name][] = "{$name} dois être une chaine de caractère";
        }
    }

    public function email(string $name, string $value){
        $value = trim($value);
        if ( !filter_var($value, FILTER_VALIDATE_EMAIL)){
            $this->errors[$name][] = "{$name} dois être une adresse email valide";
        }
    }

    private function min(string $name, string $value, string $rule){

        preg_match_all('/(\d+)/', $rule, $matches);
        $limit = (int) $matches[0][0];

        if(strlen($value) < $limit){
            $this->errors[$name][] = "{$name} doit contenir minimum {$limit} caractères";
        }
    }

    private function getErrors(): ?array{
        return $this->errors;
    }
}