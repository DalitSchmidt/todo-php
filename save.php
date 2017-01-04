<?php

/**
 * Loading file 'functions.php' that contains all the main functions and guidelines to make the necessary actions in accordance with the CRUD (Create, Read, Update, Delete) operations using the command 'require'
**/
require 'functions.php';

/**
 * Activation function 'saveTask' which collects the data of the task are data.json file using the command: '( $_POST )'.
**/
saveTask( $_POST );