<?php

header('Cache-control: private'); // IE 6 FIX

if(isset($_GET['lang']))
{
 $lang = $_GET['lang'];



setcookie('lang', $_GET['lang'], time() + (3600 * 24 * 30));

}

else if(isset($_COOKIE['lang']))
{
$lang = $_COOKIE['lang'];
}
else
{
$lang = 'de';
}

switch ($lang) {
  case 'gb':
  $lang_file = 'lang.en.php';
     
  break;

  case 'de':
  $lang_file = 'lang.de.php';
  break;

}

include $lang_file;
?>