<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>ADMIN PANEL PARTICIPANT</title>
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
            href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Montserrat:wght@100..900&family=Ubuntu:wght@300..700&display=swap"
            rel="stylesheet"
        />
        <link
            href="https://fonts.googleapis.com/icon?family=Material+Icons"
            rel="stylesheet"
        />

        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        />
        <link rel="stylesheet" href="view_details.css" />
    </head>
    <body>
        <div class="header">
            <img
                src="assets/technoscape_logo.png"
                alt="TechnoScape logo"
                width="50"
                height="50"
            />
            <h1>Techno<span>Scape</span></h1>
        </div>
        <div class="container">
            <div class="title-container">
                <h2>
                    TEAMS DETAIL
                    <div class="close-button-container">
                        <a href="admin_participant.html">
                            <img src="assets/close.png" alt="Close" />
                        </a>
                    </div>
                </h2>
            </div>
            <div class="content">
                <div class="form-container">
                    <h3 id="group-name">Group Name</h3>
                    <div id="member-list">
                        <!-- nama anggota akan masuk di sini -->
                    </div>
                    <p id="registration-time"></p>
                </div>
            </div>
        </div>

        <script type="module" src="view_details.js"></script>
        <script src="view_details.js"></script>
    </body>
</html>
