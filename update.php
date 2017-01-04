<?php

/**
 * Loading file 'functions.php' that contains all the main functions and guidelines to make the necessary actions in accordance with the CRUD (Create, Read, Update, Delete) operations using the command 'require'
**/
require 'functions.php';

/**
 * The variable '$task_id' gathers the id of the task using the command: '$_GET['id']'.
 * Activating 'getTask' and bringing the mission by using its '( $id ).
**/
$task_id = $_GET['id'];
$task = getTask( $id );
?>

<!--
Bringing the form to update the task, with full data form which want to update the inventory data values ​​brought by the command: value="<?php// echo $task['title' or 'date' or 'description']; ?>"
-->
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Title</title>
    </head>
    <body>
        <form method="post" action="save.php">
            <input type="text" name="title" placeholder="Title" value="<?php echo $task['title']; ?>"><br>
            <input type="date" name="date" value="<?php echo $task['date']; ?>"><br>
            <textarea name="description" id="description" cols="30" rows="10"><?php echo $task['description']; ?></textarea><br>
            <button>Update</button>
        </form>
    </body>
</html>