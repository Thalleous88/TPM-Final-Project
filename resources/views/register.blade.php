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
    <style> 
    body {
        font-family: 'Montserrat', sans-serif;
        background-color: #cce7ff;
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 115vh;
        flex-direction: column;
    }

    .container {
        background-color: #F9F9F9;
        border-radius: 10px;
        border: 2px solid black;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        max-width: 1000px; 
        width: 95%;
        padding: 20px;
        position: relative;
        margin: 20px auto;
    }

    .header {
        display: flex;
        align-items: center;
        justify-content: center; 
        padding: 1rem;
    }

    .header img {
        margin-top: 13px;
        width: 70px; 
        height: 60px;
    }

    .header h1 {
        font-size: 40px; 
        font-weight: 700;
        text-align: center;
        font-style: italic;
    }

    .header h1 span {
        font-weight: 800;
    }

    .title-container {
        background: linear-gradient(to right, #FFFCC8, #D4FFC8, #D7ECFF, #E9D7FF, #FFCCCD);
        border-radius: 10px;
        text-align: center;
        margin-bottom: 0;
        font-size: 30px;
        position: relative;
    }

    .title-container h2 {
        font-weight: 850;
        padding: 10px;
        margin-top: 0px;
        margin-bottom: 5px;
        border: 2px solid black;
        border-radius: 10px 10px 5px 5px;
    }


    .close-button-container {
        position: absolute;
        top: 15px;
        right: 15px; 
        display: flex;
        justify-content: center;
        align-items: center;
        width: 40px;
        height: 40px;
        border: 2px solid #fff;
        border-radius: 50%;
        background-color: white;
        cursor: pointer;
    }

    .close-button-container span {
        font-size: 24px;
        color: black;
    }

    .content {
        display: flex;
        flex-direction: row;
        border: 0.25px dashed black;
        border-top: none;
        border-radius: 0 0 10px 10px;
        padding: 20px;
    }

    .sidebar {
        width: 20%;
        padding: 20px;
        border-right: 1px solid #ddd;
    }

    .sidebar .step {
        display: flex;
        align-items: center;
        margin-bottom: 20px;
        position: relative;
    }

    .sidebar .step .circle {
        width: 50px;
        height: 50px;
        border-radius: 50%;
        background: linear-gradient(75deg, #FFFCC8, #D4FFC8);
        display: flex;
        justify-content: center;
        align-items: center;
        font-size: 20px;
        font-weight: 800;
        color: #33BB0E;
        margin-right: 10px;
        z-index: 1;
        box-sizing: border-box;
    }

    .sidebar .step .text {
        font-size: 15px;
        color: #33BB0E;
        font-weight: 700;
    }

    .sidebar .step.inactive .circle {
        background: linear-gradient(75deg, #E0E0E0, #CBCBCB);
        color: #A4A4A4;
    }

    .sidebar .step.inactive .text {
        color: #A4A4A4;
    }

    .sidebar .step::after {
        content: '';
        position: absolute;
        left: 25px;
        top: 75%;
        transform: translateY(-50%);
        width: 4px;
        height: calc(100% + 20px); 
        background-color: #ccc; 
        z-index: 0;
    }

    .sidebar .step.active::after {
        background-color: #4caf50;
    }

    .sidebar .step:last-child::after {
        display: none;
    }

    .sidebar .step.completed .circle {
        background: linear-gradient(75deg, #B8E994, #33BB0E);
        color: white;
    }

    .sidebar .step.completed .text {
        color: #33BB0E;
    }

    .sidebar .step.completed + .step::after {
        background-color: #4caf50;
    }

    .form-container {
        width: 70%;
        padding: 20px;
        background-color: #FFFCC8;
        border-radius: 15px;
        margin-left: 20px;
    }

    .form-container h2 {
        font-size: 24px;
        font-weight: 700;
        margin-bottom: 20px;
    }

    .form-group {
        margin-bottom: 20px;
    }

    .form-group label {
        display: block;
        font-weight: 700;
        margin-bottom: 5px;
    }

    .form-group input[type="text"],
    .form-group input[type="password"] {
        width: calc(100% - 13px);
        padding: 7px;
        border: 1px solid #000000;
        border-radius: 20px;
        font-size: 13px;
    }

    .form-group input[type="text"] {
        background-color: #FFCCCD;
    }

    .form-group input[type="password"] {
        background-color: #FFF699;
    }

    .form-group .requirements {
        font-size: 13px;
        color: #ff0000;
        margin-top: 5px;
    }

    .form-group .status {
        display: flex;
        align-items: center;
    }

    .form-group .status input {
        margin-right: 10px;
    }

    .form-group .status label {
        margin-right: 20px;
    }

    .form-group .confirm-password {
        background-color: #FF787A;
    }

    .form-group .next-button {
        display: flex;
        justify-content: flex-end;
    }

    .next-button button {
        font-weight: 800;
        padding: 10px 20px;
        background-color: #D7ECFF;
        color: black;
        border: 2px solid black;
        border-radius: 30px;
        font-size: 16px;
        cursor: pointer;
        display: flex;
        align-items: center;
        font-family: 'Montserrat', sans-serif;
        transition: all 0.3s ease;
    }

    .circle-icon {
        display: inline-flex;
        justify-content: center;
        align-items: center;
        width: 20px;
        height: 20px;
        background-color: white;
        color: black;
        border-radius: 30px;
        border: 2px solid black;
        margin-left: 10px;
        font-size: 18px;
        transition: all 0.3s ease;
    }
    
    .next-button button:hover {
        background-color: #4CAF50; 
        border-color: #4CAF50; 
        color: white; 
    }

    .next-button button:hover .circle-icon {
        background-color: #4CAF50; 
        border-color: #4CAF50; 
        color: white; 
    }

    .form-row {
        padding-top: 20px;
        display: flex;
        justify-content: space-between;
    }

    .form-row .form-group {
        flex: 1;
        margin-right: 20px;
    }

    .form-row .form-group:last-child {
        margin-right: 0;
    }

    @media (max-width: 768px) {
        .content {
            flex-direction: column;
        }

        .sidebar {
            width: 100%;
            border-right: none;
            border-bottom: 1px solid #ddd;
        }

        .form-container {
            width: 100%;
            margin-left: 0;
        }
    }
    </style>
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
