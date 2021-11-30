<?php
require_once 'Model.php';
require_once 'UserDetails.php';

class User extends Model implements UserDetails
{
    public array $user = [];

    public function getName()
    {
        return $this->user['name'];
    }

    public function getEmail()
    {
        return $this->user['email'];
    }

    public function getPhone()
    {
        return $this->user['phone'];
    }

    public function find($params)
    {
        $key = array_keys(array_column($this->attributes, 'id'), $params);
        $this->user = $this->attributes[$key[0]];
        return $this;
    }
}


