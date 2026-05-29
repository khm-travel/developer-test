# developer-test

A technical skills proficiency for prospective dev team candidates.

> Thank you for taking the time to demonstrate your coding skills. We have created this test to get an idea of your level of proficiency in the LAMP web stack.

## Objective

Please spend no more than 1-2 hours completing select tasks of your choice. Prioritize producing clean, error-free, well documented code over completing everything. You are not expected to finish 

Fork this repo, make your changes and send a link to your public forked repository to development@khmtravel.com

In your email, describe your changes, detailing what's still left incompleted.

## Tasks

1. Complete the server-side validation in `insert-data.php`:
   - Confirm the request is a POST
   - Confirm `$_POST['tv-show']` is non-empty, alphanumeric, and free of HTML/SQL injection attempts
   - Return the user to the form with a clear error message if validation fails

2. Save the validated show name to the database.  [Resource](https://phptherightway.com/#pdo_extension).
   - Increment the `count` if the show name already exists
   - Display a success confirmation to the user after saving

3. Style the resulting output from `insert-data.php` after separating the database interaction from the user view. 

4. Validate the show exists via the [TVmaze API](https://www.tvmaze.com/api) in `rest-api.php`:
   - Use [Composer](https://getcomposer.org/) to install [GuzzleHttp](https://docs.guzzlephp.org/) (`guzzlehttp/guzzle`)
   - Make a server-side GET request to `https://api.tvmaze.com/search/shows?q={tv-show}`, for example: [https://api.tvmaze.com/search/shows?q=deadwood](https://api.tvmaze.com/search/shows?q=deadwood)
   - If the API returns no results, reject the submission and return the user to the form with a clear error message
   - Handle request failures (network errors, unexpected responses) gracefully using Guzzle's exception handling
   - `rest-api.php` is loaded automatically by `insert-data.php` when it is present and the `$task_four_completed` variable is set to true — no other wiring required


## Setup

### Requirements

- PHP 7.4+
- [Composer](https://getcomposer.org/download/) (required for Task 4 only)

### Running the project

Start PHP's built-in web server from the project root:

```bash
php -S localhost:8000
```

Then open [http://localhost:8000](http://localhost:8000) in your browser.

### Installing dependencies (Task 4 only)

Once you have [Composer](https://getcomposer.org/) installed, run the following from the project root:

```bash
composer require guzzlehttp/guzzle
```

This will create a `composer.json`, `composer.lock`, and `vendor/` directory. Please commit `composer.json` and `composer.lock` but **not** the `vendor/` directory — it is already in `.gitignore`.

### Database

The [SQLite database](https://www.sqlite.org/index.html) (`tv_shows.db`) is included and works with PHP out of the box via PDO. The `tv_shows` table schema for reference:

```sql
CREATE TABLE `tv_shows` (
    `name` VARCHAR(20) PRIMARY KEY UNIQUE NOT NULL,
    `count` INT NOT NULL DEFAULT 0
);
```

You can optionally install the SQLite CLI to inspect the database directly.

## Evaluation criteria

- Code works for the tasks you chose (error-free)
- Code is readable, well structured and follows language conventions (clean)
- Code has clear and meaningful comments and meaningful variable/function names (well documented)
- Good user experience (changes contribute to usability of the form)
- Thoughtful error handling — we're particularly interested in how you handle failures and communicate them to the user

## Run into issues?

[Create a new issue](https://github.com/khm-travel/developer-test/issues) on the original repo & we'll help to resolve them. Send any questions to development@khmtravel.com.
