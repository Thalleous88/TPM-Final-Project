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
        <link rel="stylesheet" href="register_group.css" />
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
                    Group Registration
                  <div class="close-button-container">
                    <a href="landingpage.html">
                        <img src="assets/close.png" alt="Close" />
                    </a>
                </div>
                </h2>
            </div>
            <div class="content">
                <div class="sidebar">
                    <div class="step active" id="step1">
                        <div class="circle">1</div>
                        <div class="text">Group Information</div>
                    </div>
                    <div class="step inactive" id="step2">
                        <div class="line"></div>
                        <div class="circle">2</div>
                        <div class="text">Leader Information</div>
                    </div>
                    <div class="step inactive" id="step3">
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
                                <label for="group-name">
                                    <i class="fas fa-users"></i> Group Name
                                </label>
                                <input
                                    type="text"
                                    id="group-name"
                                    placeholder="Enter group name"
                                />
                            </div>
                            <div class="form-group">
                                <label for="status">
                                    <i class="fas fa-graduation-cap"></i> Status
                                </label>
                                <div class="status">
                                    <input
                                        type="radio"
                                        id="binusian"
                                        name="status"
                                        value="binusian"
                                    />
                                    <label for="binusian">Binusian</label>
                                    <input
                                        type="radio"
                                        id="non-binusian"
                                        name="status"
                                        value="non-binusian"
                                    />
                                    <label for="non-binusian"
                                        >Non-binusian</label
                                    >
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="password">
                                    <i class="fas fa-lock"></i> Password
                                </label>
                                <div class="password-container">
                                    <input
                                        type="password"
                                        id="password"
                                        placeholder="Enter password"
                                    />
                                    <button
                                        type="button"
                                        id="toggle-password"
                                        class="toggle-password"
                                    >
                                        <i class="fas fa-eye"></i>
                                    </button>
                                </div>
                                <div
                                    class="requirements"
                                    id="password-requirements"
                                >
                                    <ul>
                                        <li id="length">
                                            *Minimum length of 8 characters
                                        </li>
                                        <li id="uppercase">
                                            *Must include an uppercase letter
                                        </li>
                                        <li id="lowercase">
                                            *Must include a lowercase letter
                                        </li>
                                        <li id="number">
                                            *Must include a number
                                        </li>
                                        <li id="symbol">
                                            *Must include a symbol
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="confirm-password">
                                    <i class="fas fa-key"></i> Confirm Password
                                </label>
                                <div class="password-container">
                                    <input
                                        type="confirm-password"
                                        id="confirm-password"
                                        class="confirm-password"
                                        placeholder="Re-enter password"
                                    />
                                    <button
                                        type="button"
                                        id="toggle-confirm-password"
                                        class="toggle-confirm-password"
                                    >
                                        <i class="fas fa-eye"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="next-button">
                                <button>
                                    NEXT
                                    <span class="material-icons circle-icon">
                                        arrow_forward
                                    </span>
                                </button>
                            </div>
                        </div>
                    </form>
                    <div id="toast-container"></div>
                </div>
            </div>
        </div>
        <script src="register_group.js"></script>
    </body>
</html>
