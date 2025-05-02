<body class="bg-slate-950 text-white">
    <?php
    include "utils/games.php";

    $id = $_GET["id"];
    $game = getGame($id);

    if ($_GET["favorite"]) {
        $favoriteList = isset($_COOKIE["favoriteList"]) ? json_decode($_COOKIE["favoriteList"], true) : [];

        if (!in_array($id, $favoriteList)) {
            $favoriteList[] = $id;
        }

        setcookie("favoriteList", json_encode($favoriteList));
        header("Location: index.php?page=game&id=$id");
        exit;
    }


    ?>

    <div>
        <header class="fixed top-0 left-0 w-full z-50 bg-slate-900 p-4 flex justify-between items-center">
            <h1 class="font-bold text-5xl text-amber-500">GameView</h1>
            <a href="index.php?page=config"
                class="bg-slate-800 p-2 rounded-full hover:p-[10px] hover:bg-slate-850 transition-all">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-amber-500" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2">
                    <path d="M12 12c2.7 0 5-2.3 5-5s-2.3-5-5-5-5 2.3-5 5 2.3 5 5 5z" />
                    <path d="M4 20c0-4 4-6 8-6s8 2 8 6" />
                </svg>
            </a>
        </header>
        <div class="p-2 flex flex-col mt-20 p-5">
            <?php
            echo '
            <div class="flex justify-between">
                <h2 class="text-3xl font-bold text-blue-500">' . $game["name"] . '</h2>
                <a href="index.php?page=game&id=' . $id . '&favorite=1">+ Favoritar</a>
            </div>
            <img class="h-96 w-96" src="' . $game["img"] . '" alt="">
            <p>' . $game["description"] . '</p>'
                ?>
        </div>
    </div>
</body>