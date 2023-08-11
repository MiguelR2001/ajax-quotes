<?php
// Array of quotes
$quotes = [
    "The road to success and the road to failure are almost exactly the same. — Colin R. Davis",
    "Success usually comes to those who are too busy looking for it. — Henry David Thoreau",
    "The pessimist sees difficulty in every opportunity. The optimist sees opportunity in every difficulty. — Winston Churchill",
    "Don’t let yesterday take up too much of today. — Will Rogers",
    "I never dreamed about success. I worked for it. —Estée Lauder",
];

// Get a random index
$randomIndex = array_rand($quotes);

// Return the random quote
echo $quotes[$randomIndex];
?>
