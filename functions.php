<?php
/**
 * Command define('FILENAME', 'data.json'); makes it not be possible to change the file name
**/
define('FILENAME', 'data.json');

/**
 * The function 'getAllTasks' takes all tasks
**/
function getAllTasks() {
    /**
     * The function 'file_get_contents' reads a string, that command transfers all data (triggering of all tasks) data.json file exists (called 'FILENAME' with this in mind we set up that can be renamed).
     * The function returns the data are data.json file and submits them to the system using the command: return json_decode($tasks, true);
    **/
    $tasks = file_get_contents(FILENAME);
    return json_decode($tasks, true);
}

/**
 * The function 'saveTask ( $task )' saves a new task through a function call 'getAllTasks()'.
**/
function saveTask( $task ) {
    $tasks = getAllTasks();

    /**
     * The function 'file_put_contents' writes a string to a file, that the command adds the newly created data file 'data.json' (called FILENAME with this in mind we set up that can be renamed) and using the function getAllTasks($tasks);
    **/
    return file_put_contents(FILENAME, $tasks);
}

/**
 * The function 'getTask ( $index )' saves a new task through a function call 'getAllTasks()'.
**/
function getTask( $index ) {
    $tasks = getAllTasks();

    /**
     * The function returns the data are 'data.json' file and submits them to the system using the command: return json_encode( $tasks[ $index ] );
     **/
    return json_encode( $tasks[ $index ] );
}

/**
 * The function 'deleteTask( $index )' allows you to delete an existing task
**/
function deleteTask( $index ) {
    $tasks = getAllTasks();

    /**
     * Since the client is interested in wiping out the task function 'unset()' "destroying" the variables which '( $tasks[ $index ] )'.
    **/
    unset( $tasks[ $index ] );
}