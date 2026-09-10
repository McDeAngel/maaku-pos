<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Maaku POS customer and staff account portal for anime collectibles.">
    <title><?= esc($title) ?> | Maaku POS</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/maaku.css') ?>">
</head>
<body>
    <header class="site-header">
        <nav class="nav-shell" aria-label="Main navigation">
            <a class="brand" href="<?= base_url('/') ?>" aria-label="Maaku POS home">
                <span class="brand-mark" aria-hidden="true">波</span>
                <span>
                    <strong>Maaku POS</strong>
                    <small>Anime treasures by the tide</small>
                </span>
            </a>

            <div class="nav-links">
                <a class="<?= $activePage === 'home' ? 'active' : '' ?>" href="<?= base_url('/') ?>">Home</a>
                <a class="<?= $activePage === 'about' ? 'active' : '' ?>" href="<?= base_url('about') ?>">About</a>
                <a class="<?= $activePage === 'customers' ? 'active' : '' ?>" href="<?= base_url('customers') ?>">Customers</a>
                <a class="<?= $activePage === 'users' ? 'active' : '' ?>" href="<?= base_url('users') ?>">Users</a>
            </div>
        </nav>
    </header>

    <main>
