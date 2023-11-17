<?php

/**
 * A simple "Hello, World!" program in PHP.
 *
 * @author Your Name
 * @version 1.0
 */

function greet($name = 'World') {
    return "Hello, $name!";
}

$name = isset($_GET['name']) ? $_GET['name'] : null;

echo greet($name);

?>
