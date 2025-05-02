<body class="bg-slate-950 text-white">
    <header class="fixed top-0 left-0 w-full z-50 bg-slate-900 p-4 flex justify-between items-center">
        <h1 class="font-bold text-5xl text-amber-500">GameView</h1>
        <a href="index.php?page=config" class="bg-slate-800 p-2 rounded-full">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-amber-500" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2">
                <path d="M12 12c2.7 0 5-2.3 5-5s-2.3-5-5-5-5 2.3-5 5 2.3 5 5 5z" />
                <path d="M4 20c0-4 4-6 8-6s8 2 8 6" />
            </svg>
        </a>
    </header>
    <div class="p-2">
        <div class="mt-20 p-5 border rounded-lg border-blue-500 h-full">
            <h2 class="text-3xl font-bold text-blue-500">Jogos:</h2>
            <div class="flex flex-wrap justify-between">

                <?php
                include 'utils/games.php';
                $gamesMenu = getGamesMenu();
                foreach ($gamesMenu as $game) {
                    echo '
                    <a href="index.php?page=game&id=' . $game["id"] . '" class="block">
                        <div class="my-4 mx-2 p-4 w-96 h-96 bg-slate-800 rounded-lg shadow flex flex-col justify-center items-center hover:w-[400px] hover:h-[400px] hover:my-2 hover:mx-0 hover:bg-slate-900 transition-all hover:pt-0">
                            <img src="' . $game["img"] . '" alt="' . $game["name"] . '" class="w-80 h-80 object-cover rounded mb-2">
                            <h3 class="text-xl font-bold text-amber-400">' . $game["name"] . '</h3>
                        </div>
                    </a> ';
                }
                ?>

            </div>
        </div>
    </div>

</body>