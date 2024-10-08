<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="simple.css">
    <title>Document</title>
</head>
<body>
    <pre><?php
        var_dump($_GET);
        var_dump($_POST);
    ?></pre>
     
    
   <!-- <form action="form.php" method="post">
    <input type="text" name="username" value="<?php if(!empty($_POST['username'])) echo $_POST['username'] ?>">
    <input type="password" name="password" id="">
    <input type="submit" value="Login!">
   </form> -->

   <!-- test  -->
   <form action="form.php" method="POST">
    <label for="articleTitle">Title:</label>
    <input type="text" id="articleTitle" name="articleTitle" />

    <label for="articleContent">Content:</label>
    <textarea id="articleContent" name="articleContent"></textarea>

    <input type="submit" name="action" value="Save Draft" />
    <input type="submit" name="action" value="Publish" />
    <?php
    
if ($_POST['action'] === 'Save Draft') {
    echo 'Saved as draft';
} else if ($_POST['action'] === 'Publish') {
    echo 'Article published';
}
    ?>
</form>    
</body>
</html>