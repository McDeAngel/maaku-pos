# Maaku POS

Maaku POS is a four-page CodeIgniter 4 application created for IT0049 Technical Formative Assessment 1. It presents a blue, water-inspired interface for an anime and Studio Ghibli collectible shop.

## Student Information

- **Student:** Marc Ramon Emmanuel C. De Angel
- **Section:** BSIT WMA 3rd Year - TW33
- **Professor:** John Benedic Enriquez
- **Activity type:** Individual

## Required Pages

- `/` - landing page
- `/about` - store concept and creator information
- `/customers` - five customer records from a static PHP array
- `/users` - five staff records from a static PHP array

## Run Locally with PHP 8.3

1. Open a terminal in the project directory.
2. Run `/opt/homebrew/opt/php@8.3/bin/php spark serve`.
3. Visit `http://localhost:8080/`.

## Run with XAMPP

The configured XAMPP copy is located at `/Applications/XAMPP/xamppfiles/htdocs/Maaku`. Start Apache, then visit `http://localhost/Maaku/`.

## Render Deployment

This repository includes a `Dockerfile`. Create a new Render Web Service from the repository, select the Docker runtime, and set these environment variables:

- `CI_ENVIRONMENT=production`
- `app_baseURL=https://YOUR-RENDER-SERVICE.onrender.com/`

The application uses static arrays only. No database is required for this assessment.

## Original Framework Notes

# CodeIgniter 4 Framework

## What is CodeIgniter?

CodeIgniter is a PHP full-stack web framework that is light, fast, flexible and secure.
More information can be found at the [official site](https://codeigniter.com).

This repository holds the distributable version of the framework.
It has been built from the
[development repository](https://github.com/codeigniter4/CodeIgniter4).

More information about the plans for version 4 can be found in [CodeIgniter 4](https://forum.codeigniter.com/forumdisplay.php?fid=28) on the forums.

You can read the [user guide](https://codeigniter.com/user_guide/)
corresponding to the latest version of the framework.

## Important Change with index.php

`index.php` is no longer in the root of the project! It has been moved inside the *public* folder,
for better security and separation of components.

This means that you should configure your web server to "point" to your project's *public* folder, and
not to the project root. A better practice would be to configure a virtual host to point there. A poor practice would be to point your web server to the project root and expect to enter *public/...*, as the rest of your logic and the
framework are exposed.

**Please** read the user guide for a better explanation of how CI4 works!

## Repository Management

We use GitHub issues, in our main repository, to track **BUGS** and to track approved **DEVELOPMENT** work packages.
We use our [forum](http://forum.codeigniter.com) to provide SUPPORT and to discuss
FEATURE REQUESTS.

This repository is a "distribution" one, built by our release preparation script.
Problems with it can be raised on our forum, or as issues in the main repository.

## Contributing

We welcome contributions from the community.

Please read the [*Contributing to CodeIgniter*](https://github.com/codeigniter4/CodeIgniter4/blob/develop/CONTRIBUTING.md) section in the development repository.

## Server Requirements

PHP version 8.1 or higher is required, with the following extensions installed:

- [intl](http://php.net/manual/en/intl.requirements.php)
- [mbstring](http://php.net/manual/en/mbstring.installation.php)

> [!WARNING]
> - The end of life date for PHP 7.4 was November 28, 2022.
> - The end of life date for PHP 8.0 was November 26, 2023.
> - If you are still using PHP 7.4 or 8.0, you should upgrade immediately.
> - The end of life date for PHP 8.1 will be December 31, 2025.

Additionally, make sure that the following extensions are enabled in your PHP:

- json (enabled by default - don't turn it off)
- [mysqlnd](http://php.net/manual/en/mysqlnd.install.php) if you plan to use MySQL
- [libcurl](http://php.net/manual/en/curl.requirements.php) if you plan to use the HTTP\CURLRequest library
