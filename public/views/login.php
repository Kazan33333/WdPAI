<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="public/css/style.css">
    <title>LOGIN</title>
</head>
<body>
<div class="logo">
    <h1>
        <svg xmlns="http://www.w3.org/2000/svg" width="679" height="195" viewBox="0 0 679 195"
             preserveAspectRatio="none">
            <text id="LALIGAF" fill="#fff" font-size="140" font-family="ArialNarrow-BoldItalic, Arial" font-weight="700"
                  font-style="italic" letter-spacing="0.05em">
                <tspan y="159">LALIGAF</tspan>
            </text>
        </svg>
    </h1>
</div>
<div class="login-form">
    <form class="login" action="login" method="POST">
        <div class="message">
            <?php if (isset($messages)) {
                foreach ($messages as $message) {
                    echo $message;
                }
            }
            ?>
        </div>
        <input name="email" type="text" placeholder="Email">
        <input name="password" type="password" placeholder="Password">
        <button class="button-78" type="submit">Log in</button>
        <button class="button-78" id="register"><a href="/register">Register</a></button>
    </form>
</div>
</body>
</html>
