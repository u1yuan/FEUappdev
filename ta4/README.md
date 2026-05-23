# Technical Assessment 4 — PHP Predefined Functions

A small PHP + HTML/CSS site built for **FEU — Pre-Summative Assessment 4 (PSA4)**.
It demonstrates PHP `include` / `require` for shared layout, plus common
string functions applied to a list of names.

## Features

- **Shared layout** via `header.php` and `footer.php`
  - `require('header.php')` on each page (fatal-error on missing file)
  - `include('footer.php')` (continues on missing file)
- **MP1 — Short Stories** (`mp1.php`)
  - 5 illustrated short stories laid out as adjacent poster cards
  - Posters use a fixed `1400 / 2100` aspect ratio (tall portrait)
- **MP2 — String Functions Table** (`mp2.php`)
  - Array of 20 player names
  - Demonstrates `strlen`, `ucfirst`, `str_ireplace`, `strpos`, `strrev`
