<?php
$mem = new Memcache;
$mem->connect("127.0.0.1", 11211);
// $mem->delete('key', 2);
$mem->flush();
$val = $mem->get('key');
echo $val or 'deleted!';