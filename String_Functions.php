<?php 
    #Case Character (hau)
    $hau = "Holy Angel University";

    #Counting Characters and Words (d3)
    $d3 = " Dohn Diehllon Djan Montoya "; // Added spaces to demonstrate trim functions
    
    #Removing and Replacing characters (d3)
    $search = "Dohn";
    $replace = "Don";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Built-in Functions Mod5</title>    
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse; 
            padding: 8px;
        }
        h1, h3 { margin-bottom: 5px; }
    </style>
</head>
<body>

    <h1> Changing the Case of Characters </h1>
    <h3> Sample used: <?php echo $hau; ?> </h3>
    <table style="width:100%">
        <tr>
            <td><strong>Lowercase</strong></td>
            <td><?= strtolower($hau); ?></td>
            <td><code>strtolower($string)</code></td>
        </tr>
        <tr>
            <td><strong>Uppercase</strong></td>
            <td><?= strtoupper($hau); ?></td>
            <td><code>strtoupper($string)</code></td>
        </tr>
        <tr>
            <td><strong>Capitalized</strong></td>
            <td><?= ucwords($hau); ?></td>
            <td><code>ucwords($string)</code></td>
        </tr>
    </table>

    <hr>

    <h1> Counting Characters and Words </h1>
    <h3> Sample used: <?php echo trim($d3); ?> </h3>
    <table style="width:100%">
        <tr>
            <td><strong>Number of Characters</strong></td>
            <td><?= strlen(trim($d3)); ?></td>
            <td><code>strlen($string)</code></td>
        </tr>
        <tr>
            <td><strong>Number of Words</strong></td>
            <td><?= str_word_count($d3); ?></td>
            <td><code>str_word_count($string)</code></td>
        </tr>
    </table>

    <hr>

    <h1> Removing and Replacing Characters </h1>
    <h3> Sample used: "<?= $d3; ?>" (with extra spaces) </h3>
    <table style="width:100%">
        <tr>
            <td><strong>Remove whitespaces from left</strong></td>
            <td>"<?= ltrim($d3); ?>"</td>
            <td><code>ltrim($string)</code></td>
        </tr>
        <tr>
            <td><strong>Remove whitespaces from right</strong></td>
            <td>"<?= rtrim($d3); ?>"</td>
            <td><code>rtrim($string)</code></td>
        </tr>
        <tr>
            <td><strong>Remove whitespace from both sides</strong></td>
            <td>"<?= trim($d3); ?>"</td>
            <td><code>trim($string)</code></td>
        </tr>
        <tr>
            <td><strong>String replace (Dohn -> Don)</strong></td>
            <td><?= str_replace($search, $replace, $d3); ?></td>
            <td><code>str_replace($search, $replace, $subject)</code></td>
        </tr>
        <tr>
            <td><strong>String ireplace (Case-insensitive)</strong></td>
            <td><?= str_ireplace("dohn", "Don", $d3); ?></td>
            <td><code>str_ireplace($search, $replace, $subject)</code></td>
        </tr>
        <tr>
            <td><strong>Number of Repeat</strong></td>
            <td><?= str_repeat("Dohn ", 2); ?></td>
            <td><code>str_repeat($string, $multiplier)</code></td>
        </tr>
    </table>

    <hr>

    <!--- OTHER STRING MANIPULATIONS! --->
    <h1> Other String Manipulations </h1>
    <h3> Sample used: <?= trim($d3); ?> </h3>
    <table style="width:100%">
        <tr>
            <td><strong>Reverse String</strong></td> <!--- Google search --->
            <td><?= strrev(trim($d3)); ?></td>
            <td><code>strrev($string)</code></td>
        </tr>
        <tr>
            <td><strong>Extract Substring (First 4 chars)</strong></td>
            <td><?= substr(trim($d3), 0, 4); ?></td>
            <td><code>substr($string, start, length)</code></td>
        </tr>
        <tr>
            <td><strong>Find Position of "Djan"</strong></td>
            <td><?= strpos($d3, "Djan"); ?></td>
            <td><code>strpos($haystack, $needle)</code></td>
        </tr>
        <tr>
            <td><strong>Shuffle Characters</strong></td> <!--- Gogle search --->
            <td><?= str_shuffle(trim($hau)); ?></td>
            <td><code>str_shuffle($string)</code></td>
        </tr>
    </table>

    <hr>

</body>

</html>
