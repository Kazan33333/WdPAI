<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="public/css/style.css">
    <link rel="stylesheet" type="text/css" href="public/css/register.css">
    <script type="text/javascript" src="public/js/register.js" defer></script>
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
    <form class="login" action="register" method="POST">
        <input name="name" type="text" placeholder="Name">
        <input name="surname" type="text" placeholder="Surname">
        <input name="email" type="text" placeholder="Email">
        <input name="password" type="password" placeholder="Password">
        <input name="confirmPassword" type="password" placeholder="Repeat password">
        <button class="button-78" type="submit" id="register">Register</button>
        <button class="button-78"><a href="/login">Back</a></button>
    </form>
</div>
</body>
</html>
