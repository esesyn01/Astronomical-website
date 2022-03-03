<?php
require '../../vendor/autoload.php';
use MongoDB\BSON\ObjectID;

function get_db()
{
   $mongo = new MongoDB\Client(
       "mongodb://localhost:27017/wai",
       [
           'username'=>'wai_web',
           'password' => 'w@i_w3b',
       ]
       );
       $db=$mongo->wai;
       return $db;
}
function findall()
{
    $db=get_db();
    return $db->finales->find()->toArray();
}
function finduser($login)
{
    $db=get_db();
    $user=$db->users->findOne(['login' => $login]);
    return $user;
}
function adduser($login,$email,$hash)
{
    $db=get_db();
    $db->users->insertOne([
        'login' => $login,
        'password' => $hash,
        'email' => $email
    ]);
    $ifok=finduser($login);
    if($ifok==true)
    {
        return true;
    }
    else
    {
        return false;
    }
}
function loggedview($usr)
{
    $db=get_db();
    return $db->finales->find([
        '$or' => [
            ['private' => 'false'],
            ['sentby' => $usr, 'private' => 'true'],
        ]
        ])->toArray();
}
function loggedopts($opts,$usr)
{
    $db=get_db();
    return $db->finales->find([
        '$or' => [
            ['private' => 'false'],
            ['sentby' => $usr, 'private' => 'true'],
        ]
        ],$opts)->toArray();
}
function unloggedopts($opts)
{
    $db=get_db();
    return $db->finales->find([
        'private' => 'false'
    ], $opts)->toArray();
}
function unloggedview()
{
    $db=get_db();
    return $db->finales->find([
        'private' => 'false'
    ])->toArray();
}
function addimage($raw)
{
    $db=get_db();
    $db->finales->insertOne($raw);
    $test=$db->finales->findOne($raw);
    if($test!==null)
    {
        return true;
    }
    else
    {
        return false;
    }
}