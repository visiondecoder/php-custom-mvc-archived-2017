<?php

require_once '../config/bootstrap.php';

$allports = $PortController->FetchPorts();

while ($port = $allports->fetch_assoc()) {
	echo $port['port_name'];
}