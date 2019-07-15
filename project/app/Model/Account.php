<?php

namespace App\Model;


/**
 * @property integer $id
 * @property string $username
 * @property string $password
 * @property string $name
 
 */
class Account extends BaseModel
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'account';

    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['username', 'password', 'name'];
}