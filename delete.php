<?php

/**
 * Loading file 'functions.php' that contains all the main functions and guidelines to make the necessary actions in accordance with the CRUD (Create, Read, Update, Delete) operations using the command 'require'
**/
require 'functions.php';

/**
 * Command '$id = $_GET['id']' allows to collect the data of the mission by its id
**/
$id = $_GET['id'];

/**
 * Activation function 'deleteTask' which receives the parameter '( $id )', and this function allows deleting the mission by its id
**/
deleteTask( $id );