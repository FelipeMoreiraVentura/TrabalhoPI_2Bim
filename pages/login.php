<body class="text-blue-400 font-bold">

    <?php
    $mockUsersNames = ["sofia@ideia.com", "felipe@ideia.com", "lucas@ideia.com", "vinicius@ideia.com"];
    $mockPassword = "ideia";
    $error = 0;

    $login = $_COOKIE["login"];
    if (in_array($login, $mockUsersNames)) {
        header("Location: index.php?page=home");
    }


    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $email = $_POST["email"] ?? '';
        $password = $_POST["password"] ?? '';

        if (empty($email) || empty($password)) {
            $error = 1;
        } elseif (!in_array($email, $mockUsersNames) || $password !== $mockPassword) {
            $error = 2;
        } else {
            setcookie("login", $email);
            header("Location: index.php?page=home");
            exit;
        }
    }
    ?>

    <div
        class="w-screen h-screen flex flex-col justify-center items-center bg-[url('/assets/img/LoginBackground.png')] bg-no-repeat bg-cover">
        <h1 class="text-7xl text-amber-500 mb-5">LOGIN</h1>
        <form method="post" id="form">
            <div class="p-2 w-96 h-96 bg-slate-950 rounded-xl">
                <div
                    class="flex flex-col gap-4 border rounded-lg border-blue-500 p-6 h-full justify-center items-center">
                    <div class="flex flex-col w-full">
                        <label class="text-2xl" for="email">Email</label>
                        <input class="bg-transparent border border-purple-600 rounded-lg px-3 h-12" type="text"
                            id="email" name="email">
                    </div>
                    <div class="flex flex-col w-full">
                        <label class="text-2xl" for="password">Senha</label>
                        <input class="bg-transparent border border-purple-600 rounded-lg px-3 h-12" type="text"
                            id="password" name="password">
                    </div>

                    <?php
                    if ($error == 1) {
                        echo "<p>Preencha todos os campos</p>";
                    } elseif ($error == 2) {
                        echo "<p>Usuario não existente</p>";
                    }
                    ?>

                    <button
                        class="bg-transparent border border-blue-500 rounded-lg w-28 h-12 hover:bg-blue-600 transition-all"
                        type="submit">Entrar</button>
                </div>
            </div>
        </form>
    </div>
</body>