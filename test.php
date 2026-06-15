<?php
// Simple PHP example
echo "Hello, World!" . PHP_EOL;

$name = "Alice";
function greet($name) {
    return "Hello, $name!";
}
echo greet($name) . PHP_EOL;

for ($i = 1; $i <= 3; $i++) {
    echo "Count: $i" . PHP_EOL;
}
?>