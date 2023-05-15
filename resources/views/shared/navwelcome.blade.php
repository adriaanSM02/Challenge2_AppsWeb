
<nav>
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