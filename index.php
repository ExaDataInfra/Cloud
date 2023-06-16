<?php
// Initialise an empty array, not strictly necessary but good practice
$cards = [];

// A deck of cards is split into 4 types of cards, we use this
// when building the names of every card, in other words, each
// card is named "X of Y".
$card_suffixes = [
    'of Clubs',
    'of Spades',
    'of Diamonds',
    'of Hearts'
];

// Build the cards loop, loop over each card type, adding the 12 cards of that type 
foreach ($card_suffixes as $card_suffix) {
    // Start by adding Ace (because 1 is called Ace), "Ace of Y"
    $cards[] = "Ace $card_suffix";

    // Populate the next 9 numeric cards, "i of Y"
    for ($i = 2; $i <= 10; $i++) {
        $cards[] = "$i $card_suffix";
    }

    // Add the 3 remaining "non-numeric" cards, "Something of Y"
    $cards[] = "Jack $card_suffix";
    $cards[] = "Queen $card_suffix";
    $cards[] = "King $card_suffix";
}

// We now have an array with 52 card names
// Get two random numbers and make sure they are both unique
$rand1 = rand(0, 51);
$rand2 = rand(0, 51);
while ($rand1 == $rand2) {
    $rand2 = rand(0, 51);
}

echo '<br>';

echo '<h1>Bienvenido a las cartas locas!<h1>';
echo '<h2>' . $cards[$rand1] . '<h2>';
echo '<h2>' . $cards[$rand2] . '<h2>';

// Refresh link, because browser caching is a bitch
$now = time();
echo "<br><a href=\"?t=$now\">Get new cards</a>";
