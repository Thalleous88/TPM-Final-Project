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
        <link rel="stylesheet" href="register_new_member1.css" />
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
                <h2>Group Registration
                    <div class="close-button-container">
                        <a href="landingpage.html">
                            <img src="assets/close.png" alt="Close" />
                        </a>
                    </div>
                </h2>
            </div>
            <div class="content">
                <div class="sidebar">
                    <p class="member-number">Member 2</p>
                    <div class="step active" id="step1">
                        <div class="circle">1</div>
                        <div class="text">Group Information</div>
                    </div>
                    <div class="step active" id="step2">
                        <div class="line"></div>
                        <div class="circle">2</div>
                        <div class="text">Leader Information</div>
                    </div>
                    <div class="step active" id="step3">
                        <div class="line"></div>
                        <div class="circle">3</div>
                        <div class="text">Member Information</div>
                    </div>
                    <div class="step inactive">
                        <div class="line"></div>
                        <div class="circle">
                            <i class="fas fa-check"></i>
                        </div>
                        <div class="text">Finish</div>
                    </div>
                </div>
                <div class="form-container">
                    <form id="registration-form">
                        <div class="form-row">
                            <div class="form-group">
                                <label for="full-name"
                                    ><i class="fas fa-user"></i> Full
                                    Name</label
                                >
                                <input
                                    type="full-name"
                                    id="full-name"
                                    placeholder="Enter your full name"
                                />
                            </div>
                            <div class="form-group">
                                <label for="github-id"
                                    ><i class="fab fa-github"></i> GitHub/GitLab
                                    ID</label
                                >
                                <input
                                    type="github-id"
                                    id="github-id"
                                    placeholder="Enter your GitHub/GitLab ID"
                                />
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="email"
                                    ><i class="fas fa-envelope"></i>
                                    Email</label
                                >
                                <input
                                    type="email"
                                    id="email"
                                    placeholder="Enter your email"
                                />
                            </div>
                            <div class="form-group">
                                <label for="birth-place"
                                    ><i class="fas fa-map-marker-alt"></i> Birth
                                    Place</label
                                >
                                <input
                                    type="birth-place"
                                    id="birth-place"
                                    placeholder="Enter your birth place"
                                />
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="whatsapp"
                                    ><i class="fas fa-phone"></i> WhatsApp
                                    Number</label
                                >
                                <input
                                    type="no-wa"
                                    id="whatsapp"
                                    placeholder="Enter your WhatsApp number"
                                />
                            </div>
                            <div class="form-group">
                                <label for="birth-date"
                                    ><i class="fas fa-calendar-alt"></i> Birth
                                    Date</label
                                >
                                <input type="date" id="birth-date"/>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="line-id"
                                    ><i class="fab fa-line"></i> LINE ID</label
                                >
                                <input
                                    type="line-id"
                                    id="line-id"
                                    placeholder="Enter your LINE ID"
                                />
                            </div>
                            <div class="form-group">
                                <div class="form-row">
                                <div class="back-button">
                                    <button>
                                        <span class="material-icons circle-icon"
                                            >arrow_back</span
                                        >
                                        BACK
                                    </button>
                                </div>
                                <div class="next-button">
                                    <button id="next-button">
                                        NEXT
                                        <span class="material-icons circle-icon"
                                            >arrow_forward</span
                                        >
                                    </button>
                                </div>
                            </div>
                            </div>
                        </div>
                    </form>
                    <div id="toast-container"></div>
                </div>
            </div>
        </div>
        <script src="register_new_member1.js"></script>
    </body>
</html>
