<?php

/**
 * Loading file 'functions.php' that contains all the main functions and guidelines to make the necessary actions in accordance with the CRUD (Create, Read, Update, Delete) operations using the command 'require'
 **/
require 'functions.php';

// request/api.php?action=XXX&id=XXX

/**
 * Data collection of form with the command: '$_GET['action']' (the actual data gathered from Save.php)
**/
$action = $_GET['action'];

/**
 * Presentation of information available is based on data gathered from these save.php ( '$action' ), and the more information there is and act accordingly by procedures below:
 if ( $action == 'getTask' ) {
$id = $_GET['id'];
echo getTask( $id );
} elseif ( $action == 'getAllTasks' ) {
echo getAllTasks();
} elseif ( $action == 'deleteTask' ) {
$id = $_GET['id'];
deleteTask( $id );
}
**/
if ( $action == 'getTask' ) {
    $id = $_GET['id'];
    echo getTask( $id );
} elseif ( $action == 'getAllTasks' ) {
    echo getAllTasks();
} elseif ( $action == 'deleteTask' ) {
    $id = $_GET['id'];
    deleteTask( $id );
}