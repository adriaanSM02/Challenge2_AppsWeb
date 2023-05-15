<nav>
 
  
 <img src="{{asset('img/halconLogo.png')}}">

   <ul>
       <li><a href="{{ route('sales.create') }}">Create a Order</a></li>
       <li><a href="{{ route('sales.delete') }}">Delete Order</a></li>
       <li><a href="{{ route('sales.edit') }}">Edit Order</a></li>

   </ul>

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