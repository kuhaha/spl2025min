<?php
/**
 * Model: base class of models, instantiation forbidden
 */    
abstract class Model
{
    static protected $table;
}

/**
 * UserModel: model class for user accounts 
 */
class UserModel extends Model
{
    static protected $table = 'tb_user';

    public function getList(){
        return [
            ['name'=>'abe', 'sex'=>'femle', 'age'=>20],
            ['name'=>'tom', 'sex'=>'male', 'age'=>18],
        ];
    }
}