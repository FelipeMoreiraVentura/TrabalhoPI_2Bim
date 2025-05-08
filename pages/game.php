<body class="bg-slate-950 text-white">
    <?php
    include "utils/games.php";

    $favoriteList = isset($_COOKIE["favoriteList"]) ? json_decode($_COOKIE["favoriteList"], true) : [];

    $id = $_GET["id"];
    $game = getGame($id);

    if ($_GET["favorite"]) {
        $favoriteList[] = $id;

        setcookie("favoriteList", json_encode($favoriteList));
        header("Location: index.php?page=game&id=$id");
        exit;
    }

    if ($_GET["removeFavorite"]) {
        $index = array_search($id, $favoriteList);
        unset($favoriteList[$index]);

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
            <a href="index.php?page=home">
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="none" stroke="white"
                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                    <line x1="19" y1="12" x2="5" y2="12" />
                    <polyline points="12 19 5 12 12 5" />
                </svg>
            </a>
            <div class="flex justify-between">
                <?php
                echo '<h2 class="text-3xl font-bold text-blue-500">' . $game["name"] . '</h2>';
                if (in_array($id, $favoriteList)) {
                    echo '<a href="index.php?page=game&id=' . $id . '&removeFavorite=1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#facc15" viewBox="0 0 24 24">
                                <path d="M12 .587l3.668 7.431 8.2 1.192-5.934 5.782 1.4 8.172L12 18.896l-7.334 3.868 1.4-8.172L.132 9.21l8.2-1.192z"/>
                            </svg>
                          </a>';
                } else {
                    echo '<a href="index.php?page=game&id=' . $id . '&favorite=1">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-yellow-400 stroke-current fill-none" stroke-width="2" stroke="yellow" viewBox="0 0 24 24">
                                <path d="M12 .587l3.668 7.431 8.2 1.192-5.934 5.782 1.4 8.172L12 18.896l-7.334 3.868 1.4-8.172L.132 9.21l8.2-1.192z"/>
                            </svg>
                          </a>';
                }

                ?>
            </div>
            <div class="w-full flex flex-col justify-center items-center gap-4 mt-10">
                <?php
                echo '
                <img class="h-96 w-96" src="' . $game["img"] . '" alt="">
                <p class="whitespace-pre-line p-4 bg-slate-800 rounded-lg">' . $game["description"] . '</p>'
                    ?>
            </div>

        </div>
    </div>
</body>