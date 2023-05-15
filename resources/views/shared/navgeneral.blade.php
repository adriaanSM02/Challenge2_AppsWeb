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
      margin-left: 10px;
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
    nav a {
      color: white;
      text-decoration: none;
      padding: 10px;
    }
    
    /* Estilos para el buscador */
    #search {
      margin-right: 10px;
    }
    #search input[type="text"] {
      border-radius: 4px;
      padding: 6px;
      border: none;
      width: 200px;
    }
    #search button {
      background-color: #167CA5;
      color: white;
      border-radius: 4px;
      border: none;
      padding: 6px 10px;
      cursor: pointer;
    }
    #search button:hover {
      background-color: darkblue;
    }
    #logout {
background-color: #167CA5;
}
  </style>

<nav>
 
  
 <img src="{{asset('img/halconLogo.png')}}">

   <div>
     <form method="POST" action="{{ route('logout') }}">
         @csrf
         <button type="submit" class="logout-button">Cerrar sesión</button>
     </form>
 </div>
 
 <style>
     .logout-button {
         background-color: #167CA5;
         color: white;
         border: none;
         padding: 8px 12px;
         border-radius: 4px;
         transition: background-color 0.3s;
     }
     
     .logout-button:hover {
         background-color: red;
     }
 </style>
 

 </nav>