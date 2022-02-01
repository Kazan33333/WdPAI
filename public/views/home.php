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
                <div class="scoreboxes-left">
                    <div class="scorebox">
                        <span>Overall points:</span> 
                        <span class="box-number">271</span> 
                    </div>
                    <div class="scorebox">
                        <span>Last Weekday:</span> 
                        <span class="box-number">43</span> 
                    </div>
                </div>
                <div class="scoreboxes-right">
                    <!-- username -->
                    <span>John Doe</span> 
                    <span><i class="fas fa-user-circle"></i></span>
                </div>
            </header>
            <section class="projects">
                <div class="project-box">
                    <div class="project-box-image">
                        <!-- do dodania zdjecie + usuniecie tła -->
                    </div>
                    <div class="project-box-info">
                        <div class="box">
                            <h2>Weekday X best player</h2>
                            <p>NAME</p>
                            <div><span class="box-number-small">22</span>points</div>
                        </div>
                    </div>
                </div>
                <div class="project-box-2">
                    <div class="project-box-images">
                        <!-- do dodania zdjecie + usuniecie tła -->
                    </div>
                    <div class="project-box-info">
                        <div class="box">
                            <p>Compete with your</p>
                            <div class="button-red">Friends</div>
                        </div> 
                    </div>
                </div>
            </section>
            <section class="best-players">
                <div class="best-players-header">
                    <span>My weekday 12 best players</span>
                    <div class="back">
                        <span>Go to</span>
                        <div class="button-red">My team</div>
                    </div>
                </div>
                <div class="best-players-list">
                    <div class="best-player">
                        <div class="best-player-image">
                            <!-- do dodania zdjecie + usuniecie tła -->
                        </div>
                        <div class="best-player-info">
                            <p>Benzema</p>
                            <div><span class="box-number-small">22</span>points</div>
                        </div>
                    </div>
                    <div class="best-player">
                        <div class="best-player-image">
                            <!-- do dodania zdjecie + usuniecie tła -->
                        </div>
                        <div class="best-player-info">
                            <p>Benzema</p>
                            <div><span class="box-number-small">22</span>points</div>
                        </div>
                    </div>
                    <div class="best-player">
                        <div class="best-player-image">
                            <!-- do dodania zdjecie + usuniecie tła -->
                        </div>
                        <div class="best-player-info">
                            <p>Benzema</p>
                            <div><span class="box-number-small">22</span>points</div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    </div>
</body>