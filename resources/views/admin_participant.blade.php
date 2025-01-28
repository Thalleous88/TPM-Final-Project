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
        <link rel="stylesheet" href="admin_participant.css" />
    </head>
    <body>
        <div class="header">
            <img
                src="technoscape_logo.png"
                alt="TechnoScape logo"
                width="50"
                height="50"
            />
            <h1>Techno<span>Scape</span></h1>
        </div>
        <div class="container">
            <div class="title-container">
                <h2>
                    ADMIN PANEL
                    <div class="close-button-container">
                        <img src="close.png" alt="Close" />
                    </div>
                </h2>
            </div>
            <div class="content">
                <div class="search-bar">
                    <div class="search-wrapper">
                        <input type="text" id="group-search" placeholder="Group's Name" />
                        <button id="filter-btn">
                            <span class="material-icons">search</span>
                        </button>
                    </div>
                    <div class="sort-container">
                        <span class="material-icons sort-icon" id="sort-name" title="Sort by Name">
                            sort_by_alpha
                        </span>
                        <span class="material-icons sort-icon" id="sort-time" title="Sort by Registration Time">
                            access_time
                        </span>
                    </div>
                </div>
                
                <div class="group-container" id="group-container">
                    // dynamic card
                </div>
            </div>
        </div>

        <script src="admin_participant.js"></script>
    </body>
</html>
