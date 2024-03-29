<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>
<!DOCTYPE html>
<html id="theme" data-theme="dark" lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AzuriaPlanning</title>
    <link href="/views/content/css/output.css" rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="./views/content/images/icon.ico" />
</head>

<body>
    <div class="md:absolute navbar bg-primary text-primary-content">
        <div class="navbar-start">
            <div class="dropdown lg:hidden md:hidden">
                <label tabindex="0" class="btn btn-ghost btn-circle">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7" />
                    </svg>
                </label>
                <ul tabindex="0" class="menu menu-compact dropdown-content mt-3 p-2 shadow bg-base-100 rounded-box w-52">
                    <li>
                        <?php if (isset($_SESSION['userEmailAddress'])) : ?>
                            <div class="text-black tooltip tooltip-right text-left" data-tip=<?= ($_SESSION['teacher'] == '1') ? 'Enseignant' : 'Élève'; ?>>
                                <?= $_SESSION['firstname'] . ' ' . $_SESSION['lastname'] ?>
                            </div>
                        <?php endif; ?>
                    </li>
                    <li>
                        <?php if (isset($_SESSION['userEmailAddress']) && $_SESSION['teacher'] == '1') : ?>
                            <a href="/trip" class="text-black">Planifier voyage</a>
                        <?php endif; ?>
                    </li>
                    <li>
                        <?php if (isset($_SESSION['userEmailAddress']) && $_SESSION['teacher'] == '1') : ?>
                            <a href="#" class="text-black">Importer élèves</a>
                        <?php endif; ?>
                    </li>
                    <li>
                        <?php if (!isset($_SESSION['userEmailAddress'])) : ?>
                            <a href="/login" class="text-black">Se connecter</a>
                        <?php else : ?>
                            <a href="/logout" class="text-black">Se déconnecter</a>
                        <?php endif; ?>
                    </li>
                </ul>
            </div>
            <a href="/" class="hidden md:flex btn btn-ghost normal-case text-xl"><img class="hidden md:flex h-11" src="./views/content/images/icon_text.png" /></a>
            <?php if (isset($_SESSION['userEmailAddress'])) : ?>
                <div class="hidden lg:hidden md:flex text-md tooltip tooltip-bottom btn btn-ghost normal-case lg:text-xl" data-tip=<?= ($_SESSION['teacher'] == '1') ? 'Enseignant' : 'Élève'; ?>>
                    <?= $_SESSION['firstname'] . ' ' . $_SESSION['lastname'] ?>
                </div>
            <?php endif; ?>
        </div>
        <div class="navbar-center">
            <?php if (isset($_SESSION['userEmailAddress'])) : ?>
                <div class="hidden lg:flex text-md tooltip tooltip-bottom btn btn-ghost normal-case lg:text-xl" data-tip=<?= ($_SESSION['teacher'] == '1') ? 'Enseignant' : 'Élève'; ?>>
                    <?= $_SESSION['firstname'] . ' ' . $_SESSION['lastname'] ?>
                </div>
            <?php endif; ?>
            <a href="/" class="md:hidden btn btn-ghost normal-case text-xl"><img class="md:hidden h-8" src="./views/content/images/icon.png" /></a>
        </div>
        <div class="navbar-end">
            <?php if (isset($_SESSION['userEmailAddress']) && $_SESSION['teacher'] == '1') : ?>
                <a href="/trip" class="hidden md:flex btn btn-ghost normal-case lg:text-xl md:text-sm">Planifier voyage</a>
            <?php endif; ?>
            <?php if (isset($_SESSION['userEmailAddress']) && $_SESSION['teacher'] == '1') : ?>
                <a href="/addNewStudents" class="hidden md:flex btn btn-ghost normal-case lg:text-xl md:text-sm">Importer élèves</a>
            <?php endif; ?>
            <?php if (isset($_SESSION['userEmailAddress']) && $_SESSION['teacher'] == '1') : ?>
                <a href="/addActivitie" class="hidden md:flex btn btn-ghost normal-case lg:text-xl md:text-sm">Ajouter activité</a>
            <?php endif; ?>
            <?php if (!isset($_SESSION['userEmailAddress'])) : ?>
                <a href="/login" class="hidden md:flex btn btn-ghost normal-case lg:text-xl md:text-sm">Se connecter</a>
            <?php else : ?>
                <a href="/logout" class="hidden md:flex btn btn-ghost normal-case lg:text-xl md:text-sm">Se déconnecter</a>
            <?php endif; ?>
            <label class="btn btn-ghost swap swap-rotate">

                <!-- this hidden checkbox controls the state -->
                <input onclick="changeTheme()" type="checkbox" checked />

                <!-- sun icon -->
                <svg class="swap-on fill-current w-10 h-10" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path d="M5.64,17l-.71.71a1,1,0,0,0,0,1.41,1,1,0,0,0,1.41,0l.71-.71A1,1,0,0,0,5.64,17ZM5,12a1,1,0,0,0-1-1H3a1,1,0,0,0,0,2H4A1,1,0,0,0,5,12Zm7-7a1,1,0,0,0,1-1V3a1,1,0,0,0-2,0V4A1,1,0,0,0,12,5ZM5.64,7.05a1,1,0,0,0,.7.29,1,1,0,0,0,.71-.29,1,1,0,0,0,0-1.41l-.71-.71A1,1,0,0,0,4.93,6.34Zm12,.29a1,1,0,0,0,.7-.29l.71-.71a1,1,0,1,0-1.41-1.41L17,5.64a1,1,0,0,0,0,1.41A1,1,0,0,0,17.66,7.34ZM21,11H20a1,1,0,0,0,0,2h1a1,1,0,0,0,0-2Zm-9,8a1,1,0,0,0-1,1v1a1,1,0,0,0,2,0V20A1,1,0,0,0,12,19ZM18.36,17A1,1,0,0,0,17,18.36l.71.71a1,1,0,0,0,1.41,0,1,1,0,0,0,0-1.41ZM12,6.5A5.5,5.5,0,1,0,17.5,12,5.51,5.51,0,0,0,12,6.5Zm0,9A3.5,3.5,0,1,1,15.5,12,3.5,3.5,0,0,1,12,15.5Z" />
                </svg>

                <!-- moon icon -->
                <svg class="swap-off fill-current w-10 h-10" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path d="M21.64,13a1,1,0,0,0-1.05-.14,8.05,8.05,0,0,1-3.37.73A8.15,8.15,0,0,1,9.08,5.49a8.59,8.59,0,0,1,.25-2A1,1,0,0,0,8,2.36,10.14,10.14,0,1,0,22,14.05,1,1,0,0,0,21.64,13Zm-9.5,6.69A8.14,8.14,0,0,1,7.08,5.22v.27A10.15,10.15,0,0,0,17.22,15.63a9.79,9.79,0,0,0,2.1-.22A8.11,8.11,0,0,1,12.14,19.73Z" />
                </svg>
            </label>
        </div>
    </div>
    <?= $content; ?>
</body>

</html>

<script>
    function changeTheme() {
        const container = document.getElementById('theme');
        if (localStorage.getItem("theme") === "light") {
            localStorage.setItem("theme", "dark");
            container.setAttribute('data-theme', localStorage.getItem("theme"));
        } else {
            localStorage.setItem("theme", "light");
            container.setAttribute('data-theme', localStorage.getItem("theme"));
        }
    }

    window.addEventListener('DOMContentLoaded', loadTheme, false);

    function loadTheme() {
        if (localStorage.getItem("theme") === null) {
            localStorage.setItem("theme", "light");
        }
        const container = document.getElementById('theme');
        container.setAttribute('data-theme', localStorage.getItem("theme"));
    }
</script>