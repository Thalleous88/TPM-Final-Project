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
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        />
        <link rel="stylesheet" href="admin_login.css" />
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
                        <img src="close.png" alt="Close">
                    </div>
                </h2>
            </div>
            <div class="content">
                <div class="form-group">
                <div class="form-container">
                    <div class="form-row">
                        <div class="form-group">
                            <label for="group-name"
                                ><i class="fas fa-users"></i> Group Name</label
                            >
                            <input
                                type="text"
                                id="group-name"
                                placeholder="Enter group name"
                            />
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group">
                            <label for="password"
                                ><i class="fas fa-lock"></i> Password</label
                            >
                            <input
                                type="password"
                                id="password"
                                placeholder="Enter password"
                            />
                        </div>
                    </div>
                </div>
                    <div class="login-button">
                        <button>
                            LOG IN
                        </button>
                    </div>
                    <div class="footer">
                        Don't have an admin account? <a href="admin_register.html">Make Account</a>
                      </div>

                </div>
            </div>
        </div>

        <script src="admin_login.js"></script>
    </body>
</html>
