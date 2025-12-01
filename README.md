# ClassConnect — Website Administration Project

This repository contains a small front-end (HTML/CSS/JS) and two PHP endpoints for account creation and login backed by a MySQL database.

## Features
- Static pages: `ClassConnect.html`, `courses.html`, `groups.html`, `about.html`
- Simple account creation: `createAccount.php`
- Simple login: `login.php`
- Database schema: `CLASSCONNECT DATABASE.sql`
- Styles in `style.css` and minimal client JS in `script.js`

## Requirements
- PHP 7.0+ (for the PHP endpoints and built-in server)
- MySQL / MariaDB (or compatible) for the `classconnect` database
- A modern browser for testing

The PHP endpoints currently echo plain text responses such as `Account created successfully (success)` or `Invalid username or password.` The front-end checks for the word `success` to determine successful operations.

## File layout

- `ClassConnect.html` — main/home page
- `courses.html`, `groups.html`, `about.html` — other pages
- `style.css` — global styles
- `script.js` — client-side interactions (popups, simple logic)
- `createAccount.php`, `login.php` — server endpoints
- `CLASSCONNECT DATABASE.sql` — SQL schema to create `classconnect` DB and tables

# Created by:
-Aiden
-Dustin
-Levi
-Rolan
