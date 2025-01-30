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
        <link rel="stylesheet" href="{{ asset('css/register_leader2.css') }}" />
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
                    <div class="step active" id="step2">
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
                    <div id="toast-container"></div>
                    <form id="registration-form">
                    <div class="form-row">
                        <div class="upload-section">
                            <h3>Upload Flazz Card Binusian</h3>
                            <div class="upload-box" id="uploadBoxBinusian">
                                <i class="fas fa-upload"></i>
                                <input type="file" id="fileBinusian">  
                            </div>
                            <p class="file-type-note">*pdf, jpg, jpeg, png</p>
                            <p class="file-type-note">*Khusus <span class="highlight">Binusian</span></p>
                        </div>
                        <div class="upload-section">
                            <h3>Upload CV</h3>
                            <div class="upload-box" id="uploadBoxCV">
                                <i class="fas fa-upload"></i>
                                <input type="file" id="fileCV">
                            </div>
                            <p class="file-type-note">*pdf, jpg, jpeg, png</p>
                        </div>
                    </div>
                    <div class="form-row">
                    <div class="upload-section">
                        <h3>Upload ID Card Non-binusian</h3>
                        <div class="upload-box" id="uploadBox">
                            <i class="fas fa-upload"></i>
                            <input type="file" id="fileNonBinusian">
                        </div>
                        <p class="file-type-note">*pdf, jpg, jpeg, png</p>
                        <p class="file-type-note">*Khusus <span class="highlight">Non-binusian</span></p>
                    </div>
                </form>
                </div>
                    <div class="form-group">
                        <div class="button-group">
                            <div class="back-button">
                                <button id="back-button">
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
        </div>
        <script src="register_leader2.js"></script>
    </body>
</html>
