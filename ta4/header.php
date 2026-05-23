<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Technical Assessment 4-Whitty</title>
    <style>
        *, *::before, *::after {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Helvetica, sans-serif;
            font-size: 16px;
            line-height: 1.6;
            color: #1a1a1a;
            background-color: #fafafa;
        }

        .site-header {
            background-color: #fff;
            border-bottom: 1px solid #e0e0e0;
        }

        .site-header-inner {
            max-width: 1100px;
            margin: 0 auto;
            padding: 1rem 1.5rem;
            display: flex;
            align-items: center;
            justify-content: space-between;
            flex-wrap: wrap;
            gap: 1rem;
        }

        .site-title {
            margin: 0;
            font-size: 1.125rem;
            font-weight: 600;
            color: #1a1a1a;
        }

        nav a {
            color: #555;
            text-decoration: none;
            font-size: 0.9375rem;
            padding: 0.25rem 0;
            border-bottom: 2px solid transparent;
        }

        nav a:hover {
            color: #1a1a1a;
            border-bottom-color: #1a1a1a;
        }

        nav a + a {
            margin-left: 1.5rem;
        }

        .content {
            max-width: 1100px;
            margin: 0 auto;
            padding: 2rem 1.5rem;
        }

        .content h2 {
            margin: 0 0 1.5rem;
            font-size: 1.375rem;
            font-weight: 600;
            color: #1a1a1a;
        }

        /* MP1 story cards */
        .story-grid {
            display: flex;
            flex-wrap: wrap;
            gap: 1.25rem;
        }

        .story-card {
            flex: 1 1 180px;
            max-width: calc(20% - 1rem);
            background: #fff;
            border: 1px solid #e0e0e0;
            border-radius: 4px;
            overflow: hidden;
        }

        .story-card h3 {
            margin: 0;
            padding: 0.75rem 1rem 0.5rem;
            font-size: 0.9375rem;
            font-weight: 600;
            color: #1a1a1a;
        }

        .story-card img {
            display: block;
            width: 100%;
            height: 160px;
            object-fit: cover;
        }

        .story-card p {
            margin: 0;
            padding: 0.75rem 1rem 1rem;
            font-size: 0.875rem;
            color: #555;
        }

        @media (max-width: 900px) {
            .story-card {
                max-width: calc(33.333% - 0.85rem);
            }
        }

        @media (max-width: 640px) {
            .story-card {
                max-width: calc(50% - 0.625rem);
            }
        }

        @media (max-width: 420px) {
            .story-card {
                max-width: 100%;
            }
        }

        /* MP2 table */
        .table-wrap {
            overflow-x: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background: #fff;
            border: 1px solid #e0e0e0;
            font-size: 0.875rem;
        }

        th, td {
            padding: 0.625rem 0.875rem;
            text-align: left;
            border-bottom: 1px solid #e0e0e0;
        }

        th {
            background-color: #f5f5f5;
            font-weight: 600;
            color: #1a1a1a;
            white-space: nowrap;
        }

        tr:last-child td {
            border-bottom: none;
        }

        tbody tr:hover {
            background-color: #fafafa;
        }

        .site-footer {
            border-top: 1px solid #e0e0e0;
            padding: 1.5rem;
            text-align: center;
            font-size: 0.8125rem;
            color: #888;
        }

        .site-footer p {
            margin: 0;
        }
    </style>
</head>
<body>

<header class="site-header">
    <div class="site-header-inner">
        <p class="site-title">Technical Assessment 4-Whitty</p>
        <nav>
            <a href="mp1.php">MP1</a>
            <a href="mp2.php">MP2</a>
        </nav>
    </div>
</header>

<main class="content">
