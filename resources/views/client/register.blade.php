<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Design by foolishdeveloper.com -->
  <title>ShoppE</title>
 
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
  <!--Stylesheet-->
  <style media="screen">
    *,
    *:before,
    *:after {
      padding: 0;
      margin: 0;
      box-sizing: border-box;
    }
    body {
      background-color: #080710;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      overflow: hidden;
    }
    .background {
      width: 100%;
      height: 100%;
      position: absolute;
      top: 0;
      left: 0;
      overflow: hidden;
    }
    .background .shape {
      height: 200px;
      width: 200px;
      position: absolute;
      border-radius: 50%;
    }
    .shape:first-child {
      background: linear-gradient(
        #1845ad,
        #23a2f6
      );
      left: -80px;
      top: -80px;
    }
    .shape:last-child {
      background: linear-gradient(
        to right,
        #ff512f,
        #f09819
      );
      right: -30px;
      bottom: -80px;
    }
    form {
      height: auto;
      width: 90%;
      max-width: 400px;
      background-color: rgba(255, 255, 255, 0.13);
      position: relative;
      border-radius: 10px;
      backdrop-filter: blur(10px);
      border: 2px solid rgba(255, 255, 255, 0.1);
      box-shadow: 0 0 40px rgba(8, 7, 16, 0.6);
      padding: 50px 35px;
    }
    form * {
      font-family: 'Poppins', sans-serif;
      color: #ffffff;
      letter-spacing: 0.5px;
      outline: none;
      border: none;
    }
    form h3 {
      font-size: 32px;
      font-weight: 500;
      line-height: 42px;
      text-align: center;
    }
    label {
      display: block;
      margin-top: 30px;
      font-size: 16px;
      font-weight: 500;
    }
    input {
      display: block;
      height: 50px;
      width: 100%;
      background-color: rgba(255, 255, 255, 0.07);
      border-radius: 3px;
      padding: 0 10px;
      margin-top: 8px;
      font-size: 14px;
      font-weight: 300;
    }
    ::placeholder {
      color: #e5e5e5;
    }
    button {
      margin-top: 50px;
      width: 100%;
      background-color: #ffffff;
      color: #080710;
      padding: 15px 0;
      font-size: 18px;
      font-weight: 600;
      border-radius: 5px;
      cursor: pointer;
    }
    .social {
      margin-top: 30px;
      display: flex;
      justify-content: space-between;
    }
    .social div {
      width: 48%;
      border-radius: 3px;
      padding: 5px 10px;
      background-color: rgba(255, 255, 255, 0.27);
      color: #eaf0fb;
      text-align: center;
    }
    .social div:hover {
      background-color: rgba(255, 255, 255, 0.47);
    }
    .social i {
      margin-right: 4px;
    }

    @media (max-width: 600px) {
      .background .shape {
        height: 150px;
        width: 150px;
      }
      .shape:first-child {
        left: -50px;
        top: -50px;
      }
      .shape:last-child {
        right: -20px;
        bottom: -50px;
      }
      form {
        padding: 30px 20px;
      }
      form h3 {
        font-size: 24px;
      }
      label {
        margin-top: 20px;
      }
      button {
        margin-top: 30px;
      }
    }
  </style>
</head>
<body>
  <div class="background">
    <div class="shape"></div>
    <div class="shape"></div>
  </div>
  <form action="{{ route('client.register.post') }}" method="post"> 
    @csrf
    <h3>Register Here</h3>
    @if (session('status'))
        <div style="color: green;">{{ session('status') }}</div>
    @endif
    <label for="name">Nom</label>
    <input type="text" placeholder="Entrer votre nom" id="nom" name="nom" required>
    <label for="prenom">Prenom</label>
    <input type="text" placeholder="Entrer votre prenom" id="prenom" name="prenom" required>
    <label for="email">Email</label>
    <input type="email" placeholder="Entrer votre email" id="email" name="email" required>
    <label for="password">Password</label>
    <input type="password" placeholder="Entrer votre mot de passe" id="password" name="password" required>
    <button type="submit">Register</button>
    <a href="{{ route('client.login') }}" class="bottom-text-w3ls">Se connecter</a>
</form>

</body>
</html>
