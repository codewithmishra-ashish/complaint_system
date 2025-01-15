<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>myMANIT</title>
    <link
      rel="shortcut icon"
      href="https://upload.wikimedia.org/wikipedia/en/4/4f/Maulana_Azad_National_Institute_of_Technology_Logo.png"
      type="image/x-icon"
    />
    <style>
      body {
        margin: 0;
        font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", "Roboto",
          "Oxygen", "Ubuntu", "Cantarell", "Fira Sans", "Droid Sans",
          "Helvetica Neue", sans-serif;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
        background-color: #050a30;
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
      }

      .container {
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        padding: 20px;
        width: 90%; /* Adjusts for mobile screens */
        max-width: 250px;
      }

      @media (min-width: 760px) {
        .container {
          width: 100%;
          max-width: 400px; /* Adjusts the max-width for larger screens */
        }
      }

      .logo {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        text-align: center;
        margin-bottom: 20px;
      }

      .logo img {
        width: 100px;
        height: 100px;
      }

      .logo h1 {
        font-size: 24px;
        font-weight: bold;
      }

      .entry_input {
        display: flex;
        align-items: center;
        margin-bottom: 10px;
      }

      .form-label {
        margin-right: 10px;
        font-weight: bold;
      }

      .scholar-input {
        width: 100%;
        padding: 5px;
        border: 1px solid black;
        border-radius: 5px;
      }

      .submit_button {
        background-color: #4caf50;
        color: white;
        padding: 10px 20px;
        border: none;
        margin-top: 5px;
        border-radius: 5px;
        cursor: pointer;
        font-size: 15px;
        font-weight: bold;
        transition: background-color 0.3s ease;
      }

      .submit_button:hover {
        background-color: #45a049;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <div class="logo">
        <img
          src="https://upload.wikimedia.org/wikipedia/en/4/4f/Maulana_Azad_National_Institute_of_Technology_Logo.png"
          alt="Logo"
        />
        <h1>
          <span>myMANIT</span>
        </h1>
      </div>

      <form method="post">
        <div class="scholar-no" id="scholarSection">
          <div class="entry_input">
            <label for="full_name" class="form-label">Full Name:</label>
            <input
              type="text"
              class="scholar-input"
              name="fullname"
              placeholder="John Doe"
              id="fullname"
            />
          </div>

          <div class="entry_input">
            <label for="username" class="form-label">Username:</label>
            <input
              type="text"
              class="scholar-input"
              name="username"
              placeholder="johndoe12"
              id="username"
            />
          </div>

          <div class="entry_input">
            <label for="scholar-num" class="form-label">Scholar No:</label>
            <input
              type="number"
              class="scholar-input"
              name="scholar-number"
              placeholder="23112011706"
              id="scholar-number"
            />
          </div>

          <div class="entry_input">
            <label for="stu_email" class="form-label">Student-Email:</label>
            <input
              type="email"
              class="scholar-input"
              name="stu-email"
              placeholder="24112011106@stu.manit.ac.in"
              id="stu-email"
            />
          </div>

          <button id="submit" class="submit_button" name="submit">
            Continue
          </button>
        </div>
      </form>
    </div>
  </body>
</html>
