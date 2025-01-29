<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>ADMIN PANEL REGISTER</title>
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
        <link rel="stylesheet" href="admin_register.css" />
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
                    ADMIN PANEL
                    <div class="close-button-container">
                        <a href="landingpage.html">
                            <img src="assets/close.png" alt="Close" />
                        </a>
                    </div>
                </h2>
            </div>
            <div class="content">
                <div class="form-group">
                    <div class="form-container">
                        <div class="form-row">
                            <div class="form-group">
                                <label for="group-name"
                                    ><i class="fas fa-users"></i> Group
                                    Name</label
                                >
                                <input
                                    type="group-name"
                                    id="group-name"
                                    placeholder="Enter group name"
                                />
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="password"><i class="fas fa-lock"></i> Password</label>
                                <div class="password-container">
                                    <input type="password" id="password" placeholder="Enter password" />
                                    <button type="button" id="toggle-password" class="toggle-password">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                </div>
                            </div>
                            
                        </div>                        
                        <div id="toast-container"></div>  
                        <div class="register-button">
                            <button>
                                <a href="admin_login.html">REGISTER</a>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="admin_register.js"></script>
    </body>
</html>
