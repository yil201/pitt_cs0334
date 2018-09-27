<!DOCTYPE html>
<html>
<head>
    <title>The Queen of Hearts</title>
    <style>
        h1, h2 {
            text-align: center;
        }
    </style>
</head>

<body>
<h1>The Queen of Hearts</h1>

<?php
$food = filter_input(INPUT_POST, "food");
$adjective1 = filter_input(INPUT_POST, "adjective1");
$adjective2 = filter_input(INPUT_POST, "adjective2");
$verb1 = filter_input(INPUT_POST, "verb1");
$verb2 = filter_input(INPUT_POST, "verb2");
print <<<HERE

<h2>
The Queen of Hearts she made some $food all on a $adjective1 day;<br />
The Knave of Hearts he stole the $food and $verb1 them $adjective2 away.<br />
The King of Hearts called for the $food and beat the Knave full sore;<br />
The Knave of Hearts brought back the $food and<br />
vowed he'd $verb2 no more.<br />
</h2>

HERE;
?>

</body>
</html>