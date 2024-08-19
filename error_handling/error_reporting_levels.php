<?php
// Set error reporting level to report all errors except notices
error_reporting(E_ALL & ~E_NOTICE);

// Example code that triggers different types of errors
echo $undefined_variable; // Notice: Undefined variable
trigger_error("Custom user error", E_USER_ERROR); // User-generated error