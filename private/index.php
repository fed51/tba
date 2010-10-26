<?php

    include 'config.php';
    include 'database.php';

    if(isset($_GET['todo_submit'])) {
        
        if(strlen($_GET['todo_txt']) > 0) {
            $db = new Database();
            $db->insert('todo', $_GET['author'] . ' - ' . $_GET['todo_txt']);
        }
    } else if (isset($_GET['news_submit'])) {
        
        if(strlen($_GET['news_txt']) > 0) {
            $db = new Database();
            $db->insert('news', $_GET['author'] . ' - ' . $_GET['news_txt']);
        }        
    }
    

?>

<html>
    <head>
        <title>Private</title>
    </head>
    <body>
    
        <form action="index.php" method="GET">
            <label for="author" style="display:block;">Author</label>
            <input type="text" name="author" value="" />
        
            <label for="todo_txt" style="display:block;">Todo</label>
            <input type="text" name="todo_txt" value="" />
            <input type="submit" name="todo_submit" value="Submit" />
        
            <label for="news_txt" style="display:block;">News</label>
            <input type="text" name="news_txt" value="" />
            <input type="submit" name="news_submit" value="Submit" />
        </form>        
    
    </body>
</html>