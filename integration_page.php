<?php
if (!class_exists('System')) exit;

include_once('check.php');

$page->headhtml.= '
<link href="/modules/test-redirect/style.css" rel="stylesheet">
'; 

$return = '
<form class="form-signin" action="" method="post">
<img src="/modules/test-redirect/img/logo.svg" alt="" width="116" height="80">
<h2>Проверка настройки зеркал домена</h2>';

if(isset($_REQUEST['Domain']))
{	
$return .= '<p><input type="text" id="inputDomain" name="Domain" required autofocus value="'.$_POST["Domain"].'"></p>
<p><button class="btn-lg" type="submit">Проверить</button></p>
'.check_redirect ($_POST["Domain"]).'';
} else {
$return .= '<p><input type="text" id="inputDomain" name="Domain" placeholder="Введите домен" required autofocus></p>
<p><button class="btn-lg" type="submit">Проверить</button></p>';
}

$return .= '

        </form>';

return $return;
?>