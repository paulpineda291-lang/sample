<?php
$school = "HOLY ANGEL UNIVERSITY";
$name   = "Paul Christian Pineda"; 
$text   = "   Welcome to Holy Angel University   ";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP String Built-in Functions</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>

<h2>PHP Built-in String Functions</h2>

<table>
    <tr>
        <th colspan="2">Changing the Case of Characters</th>
    </tr>
    <tr>
        <td>Lowercase</td>
        <td><?php echo strtolower($school); ?></td>
    </tr>
    <tr>
        <td>Uppercase</td>
        <td><?php echo strtoupper($school); ?></td>
    </tr>
    <tr>
        <td>Capitalize</td>
        <td><?php echo ucwords(strtolower($school)); ?></td>
    </tr>

    <tr>
        <th colspan="2">Counting Characters and Words</th>
    </tr>
    <tr>
        <td>Number of Characters</td>
        <td><?php echo strlen($name); ?></td>
    </tr>
    <tr>
        <td>Number of Words</td>
        <td><?php echo str_word_count($name); ?></td>
    </tr>

    <tr>
        <th colspan="2">Removing and Replacing Characters</th>
    </tr>
    <tr>
        <td>Remove whitespaces from left</td>
        <td>"<?php echo ltrim($text); ?>"</td>
    </tr>
    <tr>
        <td>Remove whitespaces from right</td>
        <td>"<?php echo rtrim($text); ?>"</td>
    </tr>
    <tr>
        <td>Remove whitespaces from left and right</td>
        <td>"<?php echo trim($text); ?>"</td>
    </tr>
    <tr>
        <td>String replace</td>
        <td><?php echo str_replace("University", "College", $school); ?></td>
    </tr>
    <tr>
        <td>String repeat</td>
        <td><?php echo str_repeat("HAU ", 3); ?></td>
    </tr>

    <tr>
        <th colspan="2">Other Built-in Functions</th>
    </tr>
    <tr>
        <td>String length</td>
        <td><?php echo strlen($school); ?></td>
    </tr>
    <tr>
        <td>Substring</td>
        <td><?php echo substr($school, 0, 10); ?></td>
    </tr>
    <tr>
        <td>Find position of word</td>
        <td><?php echo strpos($school, "ANGEL"); ?></td>
    </tr>
    <tr>
        <td>Reverse string</td>
        <td><?php echo strrev($name); ?></td>
    </tr>
    <tr>
        <td>String shuffle</td>
        <td><?php echo str_shuffle("Candy Store"); ?></td>
    </tr>
    <tr>
        <td>Compare strings</td>
        <td><?php echo strcmp($school, "HOLY ANGEL UNIVERSITY"); ?></td>
    </tr>
    <tr>
        <td>Uppercase first character</td>
        <td><?php echo ucfirst(strtolower($school)); ?></td>
    </tr>
    <tr>
        <td>Lowercase first character</td>
        <td><?php echo lcfirst($school); ?></td>
    </tr>
    <tr>
        <td>String pad</td>
        <td><?php echo str_pad("HAU", 10, "*"); ?></td>
    </tr>
</table>

</body>
</html>
</html>