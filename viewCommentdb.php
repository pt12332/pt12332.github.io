<!DOCTYPE html>
<html>
<head>
    <title>Ascending Order Comments</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h1>Comments Book</h1>
    <?php
    $asc = file("comments.txt");
    sort($asc);
    $count = count($asc);
    $index = 1;

    for ($i = 0; $i < $count; $i++) {
        $field = explode(",", $asc[$i]);
        echo "<p>$index. ";
        echo "Name: <a href='mailto:$field[1]'>$field[0]</a><br/>";
        echo "Comments: $field[2]</p>";
        echo "------------";
        $index++;
    }
    ?>

    <br/>
    <p><a href="ascending.php">Sort in Ascending Order</a></p>
    <p><a href="descending.php">Sort in Descending Order</a></p>
    <p><a href="viewComments.php">Back to Comments Book</a><p>
    <a href="comment.php">Add more comments?</a>

</body>
</html>
