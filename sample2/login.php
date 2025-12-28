<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="login-style.css">
        <title>Document</title>
    </head>
    <body>
        <header>
            <nav>
                <h1>MASTERLISTING SYSTEM</h1>
            </nav>
        </header>
        <section>
            <div class="login-container">
                <form action="login_process.php" method="POST" autocomplete="off">
                    <h1>Login</h1>
                    <input type="text" id="username" name="username" placeholder="Username" autocomplete="off" required><br>
                    <input type="password" id="password" name="password" placeholder="Password"  autocomplete="off" required><br>
                    <button type="submit" name="login">Enter</button>
                </form>
            </div>
        </section>
    </body>
</html>