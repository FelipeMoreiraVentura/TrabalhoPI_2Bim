<?php
$games = [
    [
        "id" => "123",
        "name" => "The Last of Us",
        "img" => "https://i0.wp.com/ovicio.com.br/wp-content/uploads/2023/01/20230117-tlou-ovicio.jpg?resize=555%2C555&ssl=1",
        "description" => "The Last of Us é um jogo eletrônico de ação-aventura e sobrevivência desenvolvido pela Naughty Dog e lançado para PlayStation. A trama acompanha Joel e Ellie atravessando um mundo pós-apocalíptico infestado por criaturas infectadas, explorando temas de sobrevivência e laços humanos."
    ],
    [
        "id" => "124",
        "name" => "Ghost of Tsushima",
        "img" => "https://sm.ign.com/ign_br/cover/g/ghost-of-t/ghost-of-tsushima-the-movie_8n9r.jpg",
        "description" => "Ghost of Tsushima é um jogo de ação-aventura da Sucker Punch lançado para PlayStation 4. Ambientado no Japão feudal, acompanha Jin Sakai, um samurai que deve escolher entre honra e táticas furtivas para libertar Tsushima da invasão mongol."
    ],
    [
        "id" => "125",
        "name" => "Fortnite",
        "img" => "https://seeklogo.com/images/F/fortnite-logo-EA06026AAF-seeklogo.com.png",
        "description" => "Fortnite é um jogo online multiplayer da Epic Games que mistura construção, tiro em terceira pessoa e sobrevivência. É conhecido principalmente pelo modo Battle Royale, onde 100 jogadores competem entre si em um mapa que vai se fechando ao longo do tempo."
    ],
    [
        "id" => "126",
        "name" => "Brawl Stars",
        "img" => "https://upload.wikimedia.org/wikipedia/pt/a/a4/Brawl_Stars_iOS_%C3%ADcone.jpg",
        "description" => "Brawl Stars é um jogo de ação e combate em arena da Supercell, onde os jogadores escolhem personagens (Brawlers) com habilidades únicas e competem em partidas rápidas e intensas, em modos como combate, futebol e coleta de gemas."
    ],
    [
        "id" => "127",
        "name" => "Skyrim",
        "img" => "https://blog.logomyway.com/wp-content/uploads/2021/08/skyrim-logo-history.jpg",
        "description" => "The Elder Scrolls V: Skyrim é um RPG de mundo aberto da Bethesda ambientado em uma terra nórdica fantástica. O jogador assume o papel do Dragonborn, destinado a enfrentar dragões e explorar um mundo vasto repleto de missões, magias e liberdade de escolhas."
    ],
    [
        "id" => "128",
        "name" => "Red Dead Redemption 2",
        "img" => "https://i.pinimg.com/736x/4f/44/bf/4f44bf0259b481ca82aa280506f57c3b.jpg",
        "description" => "Red Dead Redemption 2 é um jogo de ação e aventura em mundo aberto da Rockstar Games, ambientado no Velho Oeste americano. Os jogadores controlam Arthur Morgan, um fora-da-lei membro da gangue Van der Linde, e devem lidar com confrontos, caçadas, assaltos e decisões morais em um ambiente realista e imersivo."
    ],
    [
        "id" => "129",
        "name" => "God of War: Ragnarök",
        "img" => "https://ovicio.com.br/wp-content/uploads/2022/09/20220913-god-of-war-ragnarok_e6hh.jpg",
        "description" => "God of War: Ragnarök é a sequência do premiado reboot da franquia God of War. Lançado para PlayStation 4 e 5, o jogo continua a história de Kratos e seu filho Atreus, explorando mitologia nórdica enquanto enfrentam deuses como Thor e Odin em combates intensos e emocionantes."
    ],
    [
        "id" => "130",
        "name" => "Minecraft",
        "img" => "https://play-lh.googleusercontent.com/27O5tpaYE82W6m30rJ_MX3-UvshlDM6O8oXDxb6GseYW2T7P8UNT19727MGmz-0q3w",
        "description" => "Minecraft é um jogo sandbox da Mojang em que os jogadores podem explorar, construir e sobreviver em mundos gerados aleatoriamente feitos de blocos. Com modos criativo e sobrevivência, o jogo permite criar estruturas complexas, explorar cavernas e enfrentar criaturas como Creepers e Endermen."
    ],
    [
        "id" => "131",
        "name" => "Hollow Knight",
        "img" => "https://images.squarespace-cdn.com/content/v1/606d159a953867291018f801/1619987722169-VV6ZASHHZNRBJW9X0PLK/Key_Art_02_layeredjpg.jpg?format=1500w",
        "description" => "Hollow Knight é um metroidvania 2D da Team Cherry com arte desenhada à mão. O jogador controla um cavaleiro silencioso que explora o reino subterrâneo de Hallownest, enfrentando insetos corrompidos e chefes desafiadores em combates com mecânicas refinadas e atmosfera sombria."
    ],
    [
        "id" => "132",
        "name" => "Valorant",
        "img" => "https://www.gamersoft.net/wp-content/uploads/2023/05/valorant.webp",
        "description" => "Valorant é um jogo de tiro tático gratuito da Riot Games que mistura combate estilo Counter-Strike com habilidades únicas dos agentes. Dois times de cinco jogadores se enfrentam em rodadas onde estratégia, mira precisa e trabalho em equipe são essenciais para vencer."
    ],
    [
        "id" => "135",
        "name" => "Elden Ring",
        "img" => "https://seeklogo.com/images/E/elden-ring-logo-0A08D276EC-seeklogo.com.png",
        "description" => "Elden Ring é um RPG de ação em mundo aberto desenvolvido pela FromSoftware, com direção de Hidetaka Miyazaki e colaboração de George R. R. Martin. O jogo combina combate desafiador estilo Dark Souls com exploração livre em um vasto reino arruinado e cheio de segredos, chefes colossais e lore profundo."
    ],
    [
        "id" => "136",
        "name" => "The Legend of Zelda",
        "img" => "https://m.media-amazon.com/images/I/51KpP-+S1OL._AC_UF1000,1000_QL80_.jpg",
        "description" => "Breath of the Wild é um jogo de aventura da Nintendo que revolucionou a franquia Zelda com seu mundo aberto expansivo e liberdade de exploração. Os jogadores controlam Link em sua jornada para salvar Hyrule de Ganon, resolvendo puzzles, enfrentando inimigos e interagindo com um mundo vivo e dinâmico."
    ]

];


function getGamesMenu()
{
    global $games;

    $gamesMenu = [];

    foreach ($games as $game) {
        $gamesMenu[] = [
            "id" => $game["id"],
            "name" => $game["name"],
            "img" => $game["img"]
        ];
    }

    return $gamesMenu;
}

function getGame($id)
{
    global $games;

    $selectGame = null;

    foreach ($games as $game) {
        if ((string) $game["id"] === $id) {
            $selectGame = $game;
            break;
        }
    }
    return $selectGame;
}

function getFavoriteList()
{
    global $games;
    $favoriteList = json_decode($_COOKIE["favoriteList"], true);

    $gamesList = [];
    foreach ($favoriteList as $favorite) {
        foreach ($games as $game) {
            if ($favorite == $game["id"]) {
                $gamesList[] = $game;
            }
        }
    }

    return $gamesList;
}

?>