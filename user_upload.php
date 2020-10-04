<?php

require("includes/messages.php");
require("includes/commands.php");

$commands = new CommandLineDirectives();
$commands->readCommandLineDirectives($argv);