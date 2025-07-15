<?php
$frutti = ["mela", "banana", "arancia", "kiwi", "fragola"];

$da_cercare = "kiwi";

if (in_array($da_cercare, $frutti)) {
    echo "$da_cercare è presente nell'array.";
} else {
    echo "$da_cercare NON è presente nell'array.";
}
?>