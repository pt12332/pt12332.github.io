<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
    <title>Comments</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h1>Huh?</h1>
    <div class="description">
         <p>
            According to a study conducted by Krischer and Karpinski:<br>
            Students who used social networking sites while studying scored 20% lower on tests
            compared to non-users. Additionally, the study found that social media users had an average GPA of 3.06,
            while non-users had an average GPA of 3.82.<br>
            Source: Paul A. Kirschner and Aryn C. Karpinski, "Facebook and Academic Performance," Computers in Human Behavior, Nov. 2010
        </p>
    </div>
    <h2>Add Comments</h2>
    <hr>
    <form action="addComment.php" method="post">
        <p>
            <label for="name">Name:</label>
            <input type="text" name="name" id="name">
        </p>
        <p>
            <label for="email">Email:</label>
            <input type="text" name="email" id="email">
        </p>
        <p>
            <label for="comment">Comments:</label>
            <textarea name="comment" id="comment" rows="3" cols="60"></textarea>
        </p>
        <p>
            <input type="submit" name="submit" value="Sign">
            <input type="reset" name="reset" value="Reset form">
        </p>
    </form>
    <br>
    <a href="viewComments.php">View Posted Comments</a>
    <br>
    <a href="index.php">Return to Homepage</a>
    <br>
</body>
</html>