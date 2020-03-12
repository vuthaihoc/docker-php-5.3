<?php
$mc = new Memcached();
$mc->addServer("memcached", 11211);

$mc->set("foo", "Hello!");
$mc->set("bar", "Memcached...");

$arr = array(
   $mc->get("foo"),
   $mc->get("bar")
);
var_dump($arr);
?>