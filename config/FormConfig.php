<?php


class FormConfig
{
    public $form;

    public function __construct()
    {
        config_form([
            'request'       => 'POST',
            'error_type'    => false,
            'csrf_token'    => true,
            'class'         => [
                'error'     => 'form__error',
                'success'   => 'form__success'
            ]
        ]);

        $this ->form = form();
    }

    public function validateform()
    {
        $this->form->submit([
            "string:name"   => 'Name require',
            "int:age:<:18"   => 'Age require',
            "email:email"   => 'Please enter a valid email address',
            "array:activities" => 'Select at least one Activity',
            "string:password" => 'Retype password',
            "string:re_password:!=:{$this->form->old('password')}" => 'Password not match'
        ])->error(function($response){
            
        })->success(function($response){
            $param = $response->param;
            $response -> message = "form submited";
            // header("location: main.php");
        });
    }
    public function validateCheckbox($parent = 'activities', $key = null)
    {
        if(isset($this->form->old($parent)[$key])){
            return 'checked';
        }
    }

}
