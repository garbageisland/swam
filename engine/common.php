<?php
############################################
##            LICENSE AFL3.0              ##
## Copyright (c) 2015-2016 Nicola Bombaci ##
############################################


include("workit.php");
include("debug.php");
include("parser.php");

$workit	= new workit();
$debug 	= new debug($workit);
$parser = new swam($workit);