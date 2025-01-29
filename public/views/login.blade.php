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
        <link rel="stylesheet" href="login.css" />
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
                    Log In
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
                        <form id="registration-form">
                        <div class="form-row">
                            <div class="form-group">
                                <label for="group-name"
                                    ><i class="fas fa-users"></i> Group
                                    Name</label
                                >
                                <input
                                    type="text"
                                    id="group-name"
                                    placeholder="Enter group name" 
                                >
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="password"><i class="fas fa-lock"></i> Password</label>
                                <div class="password-container">
                                    <input
                                        type="password"
                                        id="password"
                                        placeholder="Enter password"
                                    >
                                    <button type="button" id="toggle-password" class="toggle-password">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                </div>
                            </div>
                        </div> 
                        <div id="toast-container"></div>                         
                    </div>
                    <div class="login-button">
                        <button>
                            <a href="dashboard.html">LOG IN</a>
                        </button>
                    </div>
                    <div class="footer">
                        Don't have an account?
                        <a href="register_group.html">Sign Up</a>
                    </div>
                </div>
            </div>
        </div>

        <script src="login.js"></script>
    </body>
</html>
