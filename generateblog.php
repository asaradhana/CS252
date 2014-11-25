<? php

$blogtitle=$_POST['blogtitle'];


$cmd="mkdir ".$blogtitle;
$output = shell_exec($cmd);

$generate_index="php index.php > ".$blogtitle."/index.html";
$output = shell_exec($cmd);

$generate_index="php aboutme.php > ".$blogtitle."/aboutme.html";
$generate_contact="php contactme.php > ".$blogtitle."/contactme.html";
// $generate_aboutme="php blog/aboutme.php > ".$blogtitle."/aboutme.html";
$output = shell_exec($generate_index);
$output = shell_exec($generate_contact);
$output = shell_exec($generate_aboutme);









?>