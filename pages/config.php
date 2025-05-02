<body class="bg-slate-950 text-white">
    <?php
    include "utils/games.php";

    if ($_GET['clear_cookie']) {
        setcookie("login", "", time() - 3600, "/");
        header("Location: index.php?page=login");
    }

    $favoriteList = getFavoriteList();
    ?>

    <header class="fixed top-0 left-0 w-full z-50 bg-slate-900 p-4 flex justify-between items-center">
        <h1 class="font-bold text-5xl text-amber-500">GameView</h1>
        <a href="/index.php?page=config&clear_cookie=1" class="flex items-center hover:text-red-500">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                stroke="currentColor" class="w-6 h-6 text-white transition cursor-pointer">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6A2.25 2.25 0 005.25 5.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15M18.75 12h-9m0 0l3-3m-3 3l3 3" />
            </svg>
            <p>Sair da conta</p>
        </a>
    </header>
    <div class="mt-20 p-5 border rounded-lg border-blue-500 h-full">
        <h1 class="text-3xl font-bold text-blue-500">Games Favoritos</h1>
        <div class="flex flex-wrap">
            <?php
            if (empty($favoriteList)) {
                echo '<p class="text-2xl">Nenhum jogo favoritado</p>';
            } else {
                foreach ($favoriteList as $favorite) {
                    echo '
        <a href="index.php?page=game&id=' . $favorite["id"] . '" class="block">
            <div class="my-4 mx-2 p-4 w-96 h-96 bg-slate-800 rounded-lg shadow flex flex-col justify-center items-center hover:w-[400px] hover:h-[400px] hover:my-2 hover:mx-0 hover:bg-slate-900 transition-all hover:pt-0">
                <img src="' . $favorite["img"] . '" alt="' . $favorite["name"] . '" class="w-80 h-80 object-cover rounded mb-2">
                <h3 class="text-xl font-bold text-amber-400">' . $favorite["name"] . '</h3>
            </div>
        </a>';
                }
            }
            ?>
        </div>
    </div>

</body>