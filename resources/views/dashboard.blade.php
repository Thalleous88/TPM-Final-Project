<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>DASHBOARD</title>
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
        <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}" />
        <script type="module" src="{{ asset('js/dashboard.js') }}"></script>
        <script src="{{ asset('js/dashboard.js') }}"></script>
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
                    Dashboard
                    <div class="close-button-container">
                        <a href="/">
                            <img src="{{ asset('assets/close.png') }}" alt="Close" />
                        </a>
                    </div>
                </h2>
            </div>
            <div class="content">
                <!-- Column 1 -->
                <div class="form-section">
                    <div class="form-group">
                        <label for="group-name">Group Name</label>
                        <div class="editable-input">
                            <input type="text" id="group-name" value="{{ $group->group_name }}" readonly />
                        </div>

                        <label for="full-name">Full Name</label>
                        <input type="text" id="full-name" value="{{ $leader->name }}" readonly/>

                        <label for="email">Email</label>
                        <input type="email" id="email" value="{{ $leader->email }}" readonly />

                        <label for="whatsapp-number">WhatsApp Number</label>
                        <input type="text" id="whatsapp-number" value="{{ $leader->wa_number }}" readonly />
                        
                        <label for="line-id">LINE ID</label>
                        <input type="text" id="line-id" value="{{ $leader->line_id }}" readonly />
                    </div>
                </div>

                <!-- Column 2 -->
                <div class="form-section">
                    <label for="github-id">Github/Gitlab ID</label>
                    <input type="text" id="github-id" value="{{ $leader->github_id }}" readonly />

                    <label for="birth-place">Birth Place</label>
                    <input type="text" id="birth-place" value="{{ $leader->birth_place }}" readonly />

                    <label for="birth-date">Birth Date</label>
                    <input type="date" id="birth-date" value="{{ $leader->birth_date }}" readonly />

                    <label for="view-cv">View CV</label>
                    <button class="view-cv" data-cv="{{ Storage::url('cards/' . $leader->cv) }}}}">
                        View CV
                    </button>

                    <label for="view-idcard">View ID Card / Flazz Card</label>
                    <button class="view-idcard" data-idcard="{{  Storage::url('cards/' . ($leader->binusian_flazz_card ?? $leader->non_binusian_card)) }}">
                        View ID Card
                    </button>
                </div>

                <!-- Column 3 -->
                <div class="timeline">
                    <h3>Timeline</h3>
                    <div class="sidebar">
                        <div class="step active" id="step1">
                            <div class="circle">1</div>
                            <div class="text">Open Registration</div>
                        </div>
                        <div class="step inactive" id="step2">
                            <div class="line"></div>
                            <div class="circle">2</div>
                            <div class="text">Close Registration</div>
                        </div>
                        <div class="step inactive" id="step3">
                            <div class="line"></div>
                            <div class="circle">3</div>
                            <div class="text">Technical Meeting</div>
                        </div>
                        <div class="step inactive">
                            <div class="line"></div>
                            <div class="circle">4</div>
                            <div class="text">Competition Day</div>
                        </div>
                    </div>
                </div>

                <ul>
                    <li><a href="https://CompetitionDay" target="_blank">https://CompetitionDay</a></li>
                </ul>

                <div class="contact">
                    <h4>Contact Person</h4>
                    <div class="contact-container">

                        <div class="contact-item">
                            <div class="name">
                                <i class="fas fa-user"></i> Andy
                            </div>
                            <div class="username">
                                <i class="fab fa-line"></i> Andy123
                            </div>
                            <div class="phone">
                                <i class="fab fa-whatsapp"></i> 08456845345
                            </div>
                        </div>
                
                        <div class="divider"></div>
                
                        <div class="contact-item">
                            <div class="name">
                                <i class="fas fa-user"></i> Thomas
                            </div>
                            <div class="username">
                                <i class="fab fa-line"></i> ThomasWijaya
                            </div>
                            <div class="phone">
                                <i class="fab fa-whatsapp"></i> 083458239586
                            </div>
                        </div>

                        <div class="logout">
                            <button id="logout-btn">LOG OUT</button>
                        </div>
                    </div>
                </div>


                    
                </div>

                
                
                                <!-- Modal Logout -->
                <div id="logout-modal" class="modal">
                    <div class="modal-content-logout">
                        <img src="assets/warning.png" alt="Warning Icon" class="warning-icon">
                        <h2>Are you sure you want to log out?</h2>
                        <div class="modal-buttons">
                            <button id="cancel-logout" class="btn-cancel">No</button>
                            <button id="confirm-logout" class="btn-confirm">Yes</button>
                        </div>
                    </div>
                </div>

                <!-- Modal untuk CV -->
                <div id="cv-modal" class="modal">
                    <div class="modal-content">
                        <span class="close close-cv">&times;</span>
                        <iframe id="cv-viewer" src="" width="100%" height="500px"></iframe>
                        <a id="cv-download" href="" download>
                            <button>Download CV</button>
                        </a>
                    </div>
                </div>

                <!-- Modal untuk ID Card -->
                <div id="idcard-modal" class="modal">
                    <div class="modal-content">
                        <span class="close close-idcard">&times;</span>
                        <img id="idcard-viewer" src="" alt="ID Card" width="100%" />
                        <a id="idcard-download" href="" download>
                            <button>Download ID Card</button>
                        </a>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </body>
</html>
