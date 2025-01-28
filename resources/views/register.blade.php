<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Group Registration</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <title>Group Registration</title>
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
    <link rel="stylesheet" href="{{ asset('css/register_lomba.css') }}">
    <script src="{{ asset('js/register_lomba1.js') }}"></script>
  </head>
  <body>
    <div class="header">
      <img src="{{ asset('/landingpage_assets/technoscape_logo.png') }}" alt="TechnoScape logo" width="50" height="50" />
      <h1>Techno<span>Scape</span></h1>
    </div>
    <div class="container">
      <div class="title-container">
        <h2>Group Registration
            <div class="close-button-container">
                <span class="material-icons">close</span>
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
            <div class="circle"><i class="fas fa-check"></i></div>
            <div class="text">Finish</div>
          </div>
        </div>
        <div class="form-container">
        <form action="{{ route('register') }}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="form-row">
              <div class="form-group">
                <label for="group-name"><i class="fas fa-users"></i> Group Name</label>
                <input
                  type="text"
                  id="group-name"
                  name="group_name"
                  placeholder="Enter group name"
                  required
                />
              </div>
              <div class="form-group">
                <label for="status"><i class="fas fa-graduation-cap"></i> Status</label>
                <div class="status">
                  <input
                    type="radio"
                    id="binusian"
                    name="status"
                    value="binusian"
                    required
                  />
                  <label for="binusian">Binusian</label>
                  <input
                    type="radio"
                    id="non-binusian"
                    name="status"
                    value="non-binusian"
                    required
                  />
                  <label for="non-binusian">Non-binusian</label>
                </div>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group">
              <label for="password"><i class="fas fa-lock"></i> Password</label>
                <input
                  type="password"
                  id="password"
                  name="password"
                  placeholder="Enter password"
                  required
                />
              </div>
              <div class="form-group">
              <label for="confirm-password"><i class="fas fa-key"></i> Confirm Password</label>
                <input
                  type="password"
                  id="confirm-password"
                  name="password_confirmation"
                  placeholder="Re-enter password"
                  required
                />
              </div>
            </div>
            <div class="form-row">
              <div class="form-group">
                
              </div>
            </div>
            <div class="form-group">
                <div class="next-button">
                <button type="submit" class="submit-button">
                    NEXT
                    <span class="material-icons circle-icon">arrow_forward</span>
                </button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </body>
</html>
