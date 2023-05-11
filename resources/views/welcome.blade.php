<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-8LTjviI3r7qZ0bNMT4V8WTu/fJi0L9cKRy6IVeU1Ih8zjv45i1LZ/iBSjy5c+2RObzpbas5DItfNjVt/OHTRw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Welcome</title>
    <style>
      /* Estilos para la barra de navegación */

      body{
        margin:0;
      }
      nav {
    
        background-color: #051644;
        overflow: hidden;
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 10px;
      }
      nav img {
        height: 50px;
        margin-right: 10px;
      }
      nav ul {
        display: flex;
        list-style-type: none;
        margin: 0;
        padding: 0;
      }
      nav li {
        margin-right: 10px;
      }
      
      
    
      #logout {
  background-color: #167CA5;
}

#main-container {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  height: 40vh;
}

#search {
    padding: 10px 40px;
  font-size: 20px;
  border: none;
  border-radius: 100px;
  cursor: pointer;
  margin-top: 80px;
  
}

    </style>
  </head>
  <body>
    <nav>
   
    <img src="{{asset('img/halconLogo.png')}}">
      <a href="/login">
    <div style="display: flex; justify-content: space-between; align-items: center;">
        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="white" class="bi bi-person-circle" viewBox="0 0 16 16">
          <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
          <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
        </svg>
      </div>
    </a>
      

    </nav>
    

</head>
<style>
		body {
			background-image: url("{{asset('img/BackgroundWelcome.png')}}");
			background-size: cover;
			background-repeat: no-repeat;
		}
	</style>
<body>
    
<div id="main-container">

    <h1>HALCON</h1>
    
    <h1>Material Distributor</h1>
    
    
    <img src="img/materialSimbol.png">
    <p>Check the status of your productos</p>
    <style> 
    
    .new-order-input {
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 10px;
    width: 100%;
    margin-right: 10px;
  }
  
  </style>


</div>

    <div class="new-order-input">
    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="white" class="bi bi-person" viewBox="0 0 16 16">
        <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z"/>
      </svg>
    <input type="text" placeholder="Number of Rows" style="height: 40px; width: 400px;">
    </div>

    <div style="text-align: center;">
  <button id="search" style="background-color: #167CA5; color: white;">Search</button>
</div>

</body>
</html>