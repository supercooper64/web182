<?php
include 'functions/utility-functions.php';
include 'functions/name-functions.php';
$fileName = 'names-short-list.txt';
$fullNames = load_full_names($fileName);
$firstNames = load_first_names($fullNames);
$lastNames = load_last_names($fullNames);

// Get valid names
for($i = 0; $i < sizeof($fullNames); $i++) {
    // jam the first and last name together without a comma, then test for alpha-only characters
    if(ctype_alpha($lastNames[$i].$firstNames[$i])) {
        $validFirstNames[$i] = $firstNames[$i];
        $validLastNames[$i] = $lastNames[$i];
        $validFullNames[$i] = $validLastNames[$i] . ", " . $validFirstNames[$i];
    }
}

// ~~~~~~~~~~~~ Display results ~~~~~~~~~~~~ //

echo '<h1>Names - Results</h1>';

echo '<h2>All Names</h2>';
echo "<p>There are " . sizeof($fullNames) . " total names</p>";
echo '<ul style="list-style-type:none">';    
    foreach($fullNames as $fullName) {
        echo "<li>$fullName</li>";
    }
echo "</ul>";

echo '<h2>All Valid Names</h2>';
echo "<p>There are " . sizeof($validFullNames) . " valid names</p>";
echo '<ul style="list-style-type:none">';    
    foreach($validFullNames as $validFullName) {
        echo "<li>$validFullName</li>";
    }
echo "</ul>";

echo '<h2>Unique Names</h2>';
$uniqueValidNames = (array_unique($validFullNames));
echo ("<p>There are " . sizeof($uniqueValidNames) . " Unique names</p>");
echo '<ul style="list-style-type:none">';    
    foreach($uniqueValidNames as $uniqueValidNames) {
        echo "<li>$uniqueValidNames</li>";
    }

?>








