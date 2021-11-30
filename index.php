<?php

require __DIR__.'/vendor/autoload.php';
require_once 'User.php';
require_once 'Model.php';

$createData = [
    'name'  => 'Rakib',
    'email' => 'rakib@gmail.com',
    'phone' => '01749147777'
];

$updateData = [
    'name'  => 'Md. Al-Mosabbir Rakib',
    'email' => 'mrakib50.cse@gmail.com',
    'phone' => '01308323255'
];

$user  = new User();

$user->create($createData);
$user->create($createData);
$user->create($createData);
$user->create($createData);

$user->update(1, $updateData);
$user->delete(4);

echo "<pre>";
print_r($user->all());
echo "</pre>";

echo 'Name:' .$user->find(1)->getName();
echo "<br>";
echo 'Email:' .$user->find(1)->getEmail();
echo "<br>";
echo 'Phone:' .$user->find(1)->getPhone();