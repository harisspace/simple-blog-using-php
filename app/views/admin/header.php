<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />
    <link rel="stylesheet" href="<?= BASE_URL; ?>/css/style.css">
    <title>Home</title>
</head>

<body>
    <!-- header admin -->
    <div class="wrapper">
        <nav class="nav">
            <div class="nav-brand">
                <h1><a href="<?= BASE_URL; ?>/home" class="is-white">Myspace</a></h1>
            </div>
            <div class="container-list">
                <ul class="list">
                    <li><a href="<?= BASE_URL; ?>/home" class="is-white"><i class="fas fa-globe"></i>Public</a></li>
                    <li class="topics-container">
                        <a href="#" class="is-white topics">Manage</a>
                        <div class="topics-content">
                            <a href="<?= BASE_URL; ?>/manage_article" class="topic">Manage Articles</a>
                            <a href="<?= BASE_URL; ?>/manage_account" class="topic">Manage Account</a>
                            <a href="<?= BASE_URL; ?>/manage_topics" class="topic">Manage Topics</a>
                        </div>
                    </li>
                    <li class="topics-container">
                        <a href="#" class="is-white topics">Username</a>
                        <div class="topics-content">
                            <a href="<?= BASE_URL; ?>/logout" class="topic"><i class="fas fa-sign-out-alt"></i>Logout</a>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="nav-toggle">
                <i></i>
                <i></i>
                <i></i>
            </div>
        </nav>
    </div>