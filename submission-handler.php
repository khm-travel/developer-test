<?php

/* Testing, remove before submitting */
var_dump($_POST['tv-show']);

/* Do not modify. */
$redirect = '/index.html';

/**
 * Validate the request by replacing `true` with your logic on lines 14, 16 and 18
 */
// the http request type is POST
$is_post_request = true;
// the submit button doesn't match the value in index.html
$is_expected_submission_action = true;
// $_POST['tv-show'] does not contain a meaningful value
$has_valid_data = true;

$valid = $is_post_request && $is_expected_submission_action && $has_valid_data;

if (!$valid) {
    header('Location: ' . $redirect) && die();
}

/* Store the submission data */

/* Provide user with feedback */