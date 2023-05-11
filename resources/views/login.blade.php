<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<style>
    body {
        background-image: url("{{asset('img/BackGroundLogin.jpg')}}");
        background-size: cover;
        background-repeat: no-repeat;
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
    }
    #login-form {
        background-color: #fff;
        width: 300px;
        padding: 20px;
        margin: 50px auto;
        border-radius: 5px;
        box-shadow: 0px 0px 10px #ccc;
      }
      #login-form h2 {
        margin-top: 0px;
        margin-bottom: 20px;
        text-align: center;
      }
      #login-form label {
        display: block;
        margin-bottom: 5px;
      }
      #login-form input[type="text"],
      #login-form input[type="password"] {
        width: 100%;
        padding: 10px;
        margin-bottom: 20px;
        border-radius: 5px;
        border: 1px solid #ccc;
        font-size: 16px;
        box-sizing: border-box;
      }
      #login-form button[type="submit"] {
        display: block;
        width: 100%;
        padding: 10px;
        border-radius: 5px;
        background-color:#051644;
        color: #fff;
        font-size: 16px;
        border: none;
        cursor: pointer;
      }
      #login-form button[type="submit"]:hover {
        background-color: #167CA5;
      }
      #login-form .form-error {
        color: red;
        margin-top: 10px;
        text-align: center;
      }

      
    </style>
<body>
    <div style="text-align: center; margin-top: 100px;">
        <img src="{{asset('img/halconLogo.png')}}" style="max-width: 10%; height: auto;">
      </div>
      <br/>
      
      <form id="login-form">
        <h2>Login</h2>
        <label for="username">Email</label>
        <input type="text" id="username" name="username" required>
        <label for="password">Password</label>
        <input type="password" id="password" name="password" required>
        <button type="submit" >Ingresar</button>
        <div class="form-error"></div>
      
    
</body>
</html>