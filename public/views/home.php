<!DOCTYPE html>
<head>
    <link rel="stylesheet" type="text/css" href="public/css/style.css">
    <link rel="stylesheet" type="text/css" href="public/css/home.css">

    <script src="https://kit.fontawesome.com/6f835e1e5c.js" crossorigin="anonymous"></script>
    <title>HOME</title>
</head>

<body>
    <div class="base-container">
        <nav>
            <svg xmlns="http://www.w3.org/2000/svg" width="319" height="235" viewBox="0 0 319 235" preserveAspectRatio="none">
            <text id="LALIGAF" fill="#fff" font-size="61" font-family="ArialNarrow-BoldItalic, Arial" font-weight="700" font-style="italic" letter-spacing="0.05em"><tspan x="10" y="65">LALIGAF</tspan></text>
          </svg>
            <ul>
                <li>
                    <i class="fas fa-home"></i>
                    <a href="/home" class="button">Home</a>
                </li>
                <li>
                    <i class="far fa-futbol"></i>
                    <a href="/my_team" class="button">My team</a>
                </li>
                <li>
                    <i class="fas fa-table"></i>
                    <a href="/laliga_table" class="button">LaLiga table</a>
                </li>
                <li>
                    <i class="fas fa-user-friends"></i>
                    <a href="/friends" class="button">Friends</a>
                </li>
                <?php include 'admin_stuff.php'; ?>
                <li>
                    <i class="fas fa-cog"></i>
                    <a href="/settings" class="button">Settings</a>
                </li>
            </ul>
        </nav>
        <main>
            <header>
                <div class="scorebox">
                <div>Overall points:

                </div>
                <div>Last weekday:</div>
                    <i class="fas fa-user-circle"></i>
                    <!-- username -->
                </div>
            </header>
            <section class="projects">
                <div id="project-1">
                    <div>
                        <h2>Weekday X best player</h2>
                        <p>NAME</p>
                        <div class="social-section">
                        </div>
                    </div>
                </div>
                <div>Compete with your
                    
                </div>
            </section>
        </main>
    </div>
</body>