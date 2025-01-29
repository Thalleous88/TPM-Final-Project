<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Group Registration</title>
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
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        />
        <link rel="stylesheet" href="edit_team.css" />
    </head>
    <body>
        <div class="header">
            <img
                src="assets/technoscape_logo.png"
                alt="TechnoScape Logo"
                class="logo"
                width="50"
                height="50"
            />
            <h1>Techno<span>Scape</span></h1>
        </div>

        <div class="container">
            <div class="title-container">
                <h2>
                    EDIT TEAM
                    <div class="close-button-container">
                        <a href="admin_participant.html">
                            <img src="assets/close.png" alt="Close" />
                        </a>
                    </div>
                </h2>
            </div>

            <div class="content">
                <form id="edit-form">
                    <!-- <label for="team-name"
                        ><i class="fas fa-users"></i> Team Name</label
                    >
                    <input
                        type="text"
                        id="team-name"
                        name="team-name"
                        placeholder="Enter team name"
                    /> -->

                    <p id="team-name" class="team-name"><i class="fas fa-users"></i> <span id="team-name-text"></span></p>

                    <!-- <h3>Members</h3> -->
                    <div class="members-wrapper">
                        <!-- <button id="prev-member" type="button">◀</button> -->
                        <div id="members-container"></div>
                        <!-- <button id="next-member" type="button">▶</button> -->
                    </div>
                </form>
                <div class="button-container">
                    <button type="button" id="back-button">
                        <span class="material-icons circle-icon">arrow_back</span>
                        BACK
                    </button>
                    <button type="submit" id="save-button" form="edit-form">
                        SAVE <span class="material-icons circle-icon">arrow_forward</span>
                    </button>
                </div>
            </div>
        </div>

        <div id="toast-container"></div>
        <script type="module" src="edit_team.js"></script>
    </body>
</html>
