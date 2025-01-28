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
        <link rel="stylesheet" href="{{ asset('css/login.css') }}">
        <script src="{{ asset('js/login.js') }}"></script>
    </head>
    <body>
        <div class="header">
            <img
                src="{{ asset('assets/technoscape_logo.png') }}"
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
                        <img src="{{ asset('assets/technoscape_logo.png') }}" alt="Close">
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
                            <div
                                class="requirements"
                                id="password-requirements"
                            ></div>
                        </div>
                    </div>
                </div>
                    <div class="login-button">
                        <button>
                            <a href="dashboard.html">LOG IN</a>
                        </button>
                    </div>
                    <div class="footer">
                        Don't have an account? <a href="{{ route('getRegister') }}">Sign Up</a>
                      </div>

                </div>
            </div>
        </div>

        <script src="login.js"></script>
    </body>
</html>


<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="container">
        <div class="title">
            <img src="login_assets/logo.png" alt="logo-technoscape">
            <h1 id="title-1">Techno</h1>
            <h1 id="title-2">Scape</h1>
        </div>
    
        <div class="outer-box">
            <div class="inner-box">
                <div class="header">
                    <h1>Log In</h1>
                    <a class="close-login" href="index.html">
                        <img src="login_assets/close.png" alt="close">
                    </a>
                </div>
    
                <form id="login-form">
                    
                </form>
    
                <div class="footer">
    
                </div>
            </div>
        </div>
    </div>

    <script src="login.js"></script>
</body>
</html> -->