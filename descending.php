<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
    <title>Comments</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php
$asc = file("comments.txt");
rsort($asc);
$count = count($asc);
$index = 1; // Move the $index initialization before the loop.

for ($i = 0; $i < $count; $i++) {
    $Field = explode(",", $asc[$i]);
    echo "<p>$index. ";
    echo "Name: <a href='mailto:$Field[1]'>$Field[0]</a><br/>";
    echo "Comments: $Field[2]</p>";
    echo "------------";
    $index++; // Increment $index for each comment.
}
?>
<br/>
<p><a href="ascending.php">Sort in Ascending Order</a></p>

<a href="viewComments.php">Back to Comments Book</a><br/>
<p><a href="comment.php">Add more comments?</a></p>
</body>
</html>
