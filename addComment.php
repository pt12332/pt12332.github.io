<!DOCTYPE html>
<html>
<head>
    <title>Add Comment</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h1>Add Comments</h1>
    <hr>

    <?php
    if (!empty($_POST["name"]) && !empty($_POST["email"]) && !empty($_POST["comment"])) {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $comment = $_POST["comment"];
        $newEntry = $name . "," . $email . "," . addslashes($comment) . "\n";

        $file = fopen("comments.txt", "a"); 
        if (fwrite($file, $newEntry) !== false) {
            echo "<p>Comment added successfully</p>";
        } else {
            echo "<p>Failed to add comment</p>";
        }
        fclose($file);
    } else {
        echo "<p>Please enter all the details</p>";
    }
    ?>

    <br/>
    <a href="viewComments.php">View Posted Comments</a>
    <br/>
    <a href="index.php">Return to Homepage</a>
</body>
</html>
