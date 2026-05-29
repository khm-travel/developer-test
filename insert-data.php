<?php

/**
 * Validate the request by conditionally redirecting the user.
 * @TODO: Replace all `true` values on lines 10-12 with your logic:
 *      Line 10: the HTTP request type is POST
 *      Line 11: the submit button value matches the expected value in index.php
 *      Line 12: $_POST['tv-show'] is non-empty, alphanumeric, and free of HTML/SQL injection attempts
 */
$is_post_request = true;
$is_expected_submission_action = true;
$has_valid_data = true;

$valid = $is_post_request && $is_expected_submission_action && $has_valid_data;

if (!$valid) {
    // @TODO: Pass a meaningful error message back to index.php so the user knows what went wrong.
    header('Location: index.php') && die();
}

/**
 * Optionally validate the show exists via the TVmaze API (Task 4).
 * If rest-api.php is present, it will be used to verify the submission before saving.
 * See rest-api.php for implementation details.
 */
$task_four_completed = false;

if ($task_four_completed && file_exists('rest-api.php')) {
    require_once 'rest-api.php';
}

/**
 * Save the validated show name to the database.
 * Table schema for reference:
 * CREATE TABLE `tv_shows` (`name` VARCHAR(20) PRIMARY KEY UNIQUE NOT NULL, `count` INT NOT NULL DEFAULT 0);
 *
 * @TODO: Insert the validated show name into the `tv_shows` table.
 *      - Use a try/catch block and display a meaningful error message to the user if an exception occurs.
 *      - If the show name already exists, increment its `count` rather than inserting a duplicate.
 */

$pdo = new \PDO('sqlite:tv_shows.db');


/**
 * Display all stored shows and their submission counts.
 * Four entries were initially provided — no need to modify this block.
 */
foreach ($pdo->query("SELECT `name`, `count` FROM tv_shows ORDER BY `count` DESC") as $row) {
    echo '<li>' . htmlspecialchars($row['name']) . ' (' . $row['count'] . ')</li>';
}
