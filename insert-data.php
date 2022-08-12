<?php

/**
 * Validate the request by conditionally redirecting the user.
 * @TODO: Replace all `true` values with your logic on lines 10-12
 *      Line 10: the http request type is POST
 *      Line 11: the submit button doesn't match the value in index.html
 *      Line 12: $_POST['tv-show'] contains a meaningful value (not null, is alphanumeric, no HTML/script/SQL)
 */
$is_post_request = true;
$is_expected_submission_action = true;
$has_valid_data = true;

$valid = $is_post_request && $is_expected_submission_action && $has_valid_data;

if (!$valid) {
    header('Location: /index.html') && die();
}

/**
 * Save validated $_POST['tv-show'] value to the database.
 * Table schema for reference: create table `tv_shows` (`name` VARCHAR(20) primary key unique not null, `count` int not null default 0);
 * @TODO: Insert validated submission data into the `tv_shows` table on line 26
 *      Optionally use a try catch block, and display error messages to the user.
 *      Optionally increment the show `count` if the name is already stored.
 */
$pdo = new \PDO('sqlite:tv_shows.db');

/**
 * Display stored data, four entries were inititally provided.
 * No need to modify.
 */
foreach ($pdo->query("select `name` from tv_shows") as $row) {
    echo '<li>' . $row['name'] . '</li>';
}

/**
 * @TODO: Provide user with appropriate feedback.
 */
die('foo');
