<?php

abstract class Model
{
    public static int $index = 0;
    public array $attributes = [];

    public function create(array $attributes)
    {
        $attributes['id'] = ++self::$index;
        $this->attributes[] = $attributes;
    }

    public function all() {
        return $this->attributes;
    }

    public function update($id, array $attributes)
    {
        $attributes['id'] = $id;
        $key = array_keys(array_column($this->attributes, 'id'), $id);
        return $this->attributes[$key[0]] = $attributes;
    }

    public function delete($id)
    {
        $key = array_keys(array_column($this->attributes, 'id'), $id);
        unset($this->attributes[$key[0]]);
    }
}