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
        <link rel="stylesheet" href="{{ asset('css/edit_team.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/register_leader1.css') }}" />
    </head>
    <body>
        <div class="header">
            <img
                src="{{ asset('assets/technoscape_logo.png') }}"
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
                        <a href="/admin/participant">
                            <img src="{{ asset('assets/close.png') }}" alt="Close" />
                        </a>
                    </div>
                </h2>
            </div>

            
            <div class="content">
                <div class="form-container">
                    <form id="registration-form" action="{{ route('participantUpdate', $group_id) }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="form-row">
                            <div class="form-group">
                                <label for="full-name"><i class="fas fa-user"></i> Full Name</label>
                                <input
                                    type="text"
                                    name="name"
                                    id="full-name"
                                    value="{{ old('name') }}"
                                    placeholder="Enter your full name"
                                />
                                @error('name')
                                    <div class="error-message">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="github-id"><i class="fab fa-github"></i> GitHub/GitLab ID</label>
                                <input
                                    type="text"
                                    name="github_id"
                                    id="github-id"
                                    value="{{ old('github_id') }}"
                                    placeholder="Enter your GitHub/GitLab ID"
                                />
                                @error('github_id')
                                    <div class="error-message">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group">
                                <label for="email"><i class="fas fa-envelope"></i> Email</label>
                                <input
                                    type="email"
                                    name="email"
                                    id="email"
                                    value="{{ old('email') }}"
                                    placeholder="Enter your email"
                                />
                                @error('email')
                                    <div class="error-message">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="birth-place"><i class="fas fa-map-marker-alt"></i> Birth Place</label>
                                <input
                                    type="text"
                                    name="birth_place"
                                    id="birth-place"
                                    value="{{ old('birth_place') }}"
                                    placeholder="Enter your birth place"
                                />
                                @error('birth_place')
                                    <div class="error-message">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group">
                                <label for="whatsapp"><i class="fas fa-phone"></i> WhatsApp Number</label>
                                <input
                                    type="text"
                                    name="wa_number"
                                    id="whatsapp"
                                    value="{{ old('wa_number') }}"
                                    placeholder="Enter your WhatsApp number"
                                />
                                @error('wa_number')
                                    <div class="error-message">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="birth-date"><i class="fas fa-calendar-alt"></i> Birth Date</label>
                                <input type="date" name="birth_date" id="birth-date" value="{{ old('birth_date') }}" />
                                @error('birth_date')
                                    <div class="error-message">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group">
                                <label for="line-id"><i class="fab fa-line"></i> LINE ID</label>
                                <input
                                    type="text"
                                    name="line_id"
                                    id="line-id"
                                    value="{{ old('line_id') }}"
                                    placeholder="Enter your LINE ID"
                                />
                                @error('line_id')
                                    <div class="error-message">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-row">
                                <div class="next-button">
                                    <button id="next-button" type="submit" class="submit-button">
                                        EDIT
                                        <span class="material-icons circle-icon">arrow_forward</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>

        <div id="toast-container"></div>
    </body>
</html>