<?php 
    include('../includes/class-autoloader.inc.php');
?> 
<html lang="en" class="light-theme">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../public/css/style.css">
    <!-- <link rel="icon" href="../../public/img/logoContacts.png"> -->
    <title>Doodle Contacts</title>
</head>
<body>
    <header>
        <div class="header">
            <div class="head">
                <div class="hamburger-menu hover-effect circle">
                    <img src="../../public/img/hamburger.png" alt="Menu">
                </div>
                <div>
                    <a href="./index.php" class="home">
                        <img src="../../public/img/logoContacts.png" alt="Logo">
                        <span>Contacts</span>
                    </a>
                </div>
            </div>
            <div class="search">
                <form action="" class="search-box">
                    <button type="button" class="hover-effect circle search-button">
                        <img src="../../public/img/search.png" alt="search button" class="circle">
                    </button>
                    <input type="text" class="search-area" placeholder="Search">
                </form>
            </div>
        </div>

        <div class="profile-side">
            <div class="theme"></div>
            <div class="apps hover-effect circle">
                <img src="../../public/img/9dots.png" alt="Google Apps">
            </div>
            <div class="profile hover-effect circle">
                <img src="../../public/img/toothless.png" alt="profile picture" class="circle">
            </div>
        </div>
    </header>

    <aside>
        <div class="create ">
            <a href="./create.php" class="create-button">
                <img src="../../public/img/plus.png" alt="create contacts">
                <span>Create Contact</span> 
            </a>    
        </div>
        <div class="navbar">
            <div>
                <a href="./index.php" class="links active">
                    <img src="../../public/img/user.png" alt="Contacts">
                    <span>
                        <span>Contacts</span>
                        <span class="number">200</span>
                    </span>
                </a>
            </div>
            <div>
                <a href="./favourite.php" class="links">
                    <img src="../../public/img/star.png" alt="Favourites">
                    <span>Favourites</span>
                    <span class="number">20</span>
                </a>
            </div>         
        </div>
        <div class="navbar">
            <div>
                <a href="" class="links">
                    <img src="../../public/img/import.png" alt="Import">
                    <span>
                        <span>Import</span>
                    </span>
                </a>
            </div>
            <div>
                <a href="" class="links">
                    <img src="../../public/img/export.png" alt="Export">
                    <span>Export</span>
                </a>
            </div>         
        </div>
        <div class="navbar">
            <div>
                <a href="./trash.php" class="links">
                    <img src="../../public/img/dustbin.png" alt="Trash">
                    <span>Trash</span>
                </a>
            </div>       
        </div>
    </aside>