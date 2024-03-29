<?php if ( ! isset($_POST['data']) ) return;

use knute\model\UsersModel;

// Get the data from javascript.
$data = $_POST['data'];
$login = $data[0];
$pass = $data[1];

if ( empty($login) || empty($pass) )
    die('no data');

if ( strlen($login) < 5 )
    die('login len');

if ( strlen($pass) < 8 )
    die('pass len');

if ( ! empty(UsersModel::getUserByLogin($login)) )
    die('login exists');

$insertID = UsersModel::addUser($login, $pass);
echo '/';

$key = $login . ',' . bin2hex( openssl_random_pseudo_bytes(15) );
echo $key;

UsersModel::addToAuth($insertID, $key);
