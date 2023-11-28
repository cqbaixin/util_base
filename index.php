<?php
require './vendor/autoload.php';

$ip = new \App\Ip\IpGeo();

$ip->getGeoByIp('113.204.236.26');