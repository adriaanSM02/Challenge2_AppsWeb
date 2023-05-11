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
</head>
<body>
  <nav>
 
  
  <img src="{{asset('img/halconLogo.png')}}">

    <ul>
      <li><a href="#">Sales</a></li>
      <li><a href="#">Purchasing</a></li>
      <li><a href="#">Warehouse</a></li>
      <li><a href="#">Route</a></li>
      <li><a href="#">Check Package</a></li>
    </ul>

    <div id="search">
      <input type="text" placeholder="Buscar...">
      <button type="submit">Search</button>
    </div>

  </nav>
  