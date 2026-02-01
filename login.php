<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Form | Tahreem's</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      
    }

    body {
      background: url(burger.png) no-repeat center center/cover;
      
    }
    .con{
        background-image: url(clouds_2.png);
        background-repeat: repeat-x;
           background-position: 0 0;
           height: 100vh;
            background-size: cover;
            background-repeat: repeat-x;
            animation: smoke linear infinite 15s;
    }
        @keyframes smoke{
            to{
                background-position-x: -500px;
            }
        }
    .container {
   
      background: rgba(0, 0, 0, 0.55);
      overflow: hidden;
      color: white;
      position: relative;
         display: flex;
         flex-wrap: wrap;
         flex-direction: column;
      justify-content: center;
      align-items: center;
      overflow: hidden;
      height: 100vh;
      animation: fadeIn 1.2s ease;
    }

    @keyframes fadeIn {
      from {opacity: 0; transform: translateY(20px);}
      to {opacity: 1; transform: translateY(0);}
    }

    .tabs {
      display: flex;
      justify-content: space-around;
      background: rgb(197, 157, 95);
    }
@media screen and (max-width:320px) {
    .form{
            width: 309px !important;
    }
}
    .tabs button {
      flex: 1;
      padding: 12px;
      background: transparent;
      border: none;
      font-weight: bold;
      color: white;
      cursor: pointer;
      transition: 0.3s;
    }

    .tabs button.active {
      background: black;
      color: rgb(197, 157, 95);
    }

    .form {
      padding: 25px;
      display: none;
    }

    .form.active {
      display: block;
          width: 366px;
      animation: slideIn 0.6s ease;
    }

    @keyframes slideIn {
      from {opacity: 0; transform: translateY(20px);}
      to {opacity: 1; transform: translateY(0);}
    }

    .form h2 {
      text-align: center;
      margin-bottom: 15px;
      color: rgb(197, 157, 95);
    }

    .form input {
      width: 100%;
      padding: 10px;
      margin: 8px 0;
      border-radius: 8px;
      border: none;
      outline: none;
    }

    .form button {
      width: 100%;
      padding: 10px;
      border: none;
      border-radius: 8px;
      background: rgb(197, 157, 95);
      color: white;
      font-weight: bold;
      margin-top: 10px;
      cursor: pointer;
      transition: 0.3s;
    }

    .form button:hover {
      background: black;
     
    }

    .form p {
      text-align: center;
      margin-top: 10px;
      font-size: 14px;
    }

    .form a {
      color: rgb(197, 157, 95);
      text-decoration: none;
      font-weight: bold;
    }
  </style>
</head>
<body>
 <div class="con">
     <div class="container">
    <div class="tabs">
      <button id="loginTab" class="active">Login</button>
      <button id="signupTab">Signup</button>
    </div>

<form action= "login1.php" method="post">
    <div id="loginForm" class="form active">
      <h2>Login</h2>
      <input type="email" name="email" placeholder="Email" required />
      <input type="password" name="password" placeholder="Password" required />
      <button type="submit">Login</button>
      <p>Don’t have an account? <a href="#" id="goSignup">Signup</a></p>
    </div>
</form>
  <form action="add.php" method="post">
    <div id="signupForm" class="form">
      <h2>Signup</h2>
      <input type="text" name="name" placeholder="Full Name" required />
      <input type="email" name="email" placeholder="Email" required />
      <input type="password" name="password" placeholder="Password" required />
      <button type="submit" name="submit">Signup</button>
      <p>Already have an account? <a href="#" id="goLogin">Login</a></p>
    </div>
    </form>
  </div>

 </div>
  <script>
    const loginTab = document.getElementById("loginTab");
    const signupTab = document.getElementById("signupTab");
    const loginForm = document.getElementById("loginForm");
    const signupForm = document.getElementById("signupForm");
    const goSignup = document.getElementById("goSignup");
    const goLogin = document.getElementById("goLogin");

   
    loginTab.addEventListener("click", () => {
      loginForm.classList.add("active");
      signupForm.classList.remove("active");
      loginTab.classList.add("active");
      signupTab.classList.remove("active");
    });

    signupTab.addEventListener("click", () => {
      signupForm.classList.add("active");
      loginForm.classList.remove("active");
      signupTab.classList.add("active");
      loginTab.classList.remove("active");
    });

   
    goSignup.addEventListener("click", (e) => {
      e.preventDefault();
      signupTab.click();
    });

    goLogin.addEventListener("click", (e) => {
      e.preventDefault();
      loginTab.click();
    });
  </script>
</body>
</html>