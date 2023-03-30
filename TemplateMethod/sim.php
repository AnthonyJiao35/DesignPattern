<?php
require_once 'templateMethod.php';
$bookWriter = new BookWriter();
$bookWriter->write();

$softwareWriter = new SoftwareWriter();
$softwareWriter->write();
