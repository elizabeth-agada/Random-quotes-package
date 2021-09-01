<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>random quotes</title>

    </head>
    <body>
    <h2>Random quotes</h2>
<?php 

require_once './src/RandomQuotes.php';

$quote = new \RandomQuotes\RandomQuotes();

print_r($quote->generate());

echo "\n";
?>
</body>
</html>