<body class="bg-slate-950 text-white p-5">
    <?php
    if ($_GET['clear_cookie']) {
        setcookie("login", "", time() - 3600, "/");
        header("Location: index.php?page=login");
    }
    ?>

    <div class="flex items-center justify-between">
        <h1 class="font-bold text-5xl text-amber-500">Games Favoritos</h1>

        <a href="/index.php?page=config&clear_cookie=1" class="flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                stroke="currentColor" class="w-6 h-6 text-white hover:text-red-500 transition cursor-pointer">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6A2.25 2.25 0 005.25 5.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15M18.75 12h-9m0 0l3-3m-3 3l3 3" />
            </svg>
            <p>Sair da conta</p>
        </a>

    </div>

</body>