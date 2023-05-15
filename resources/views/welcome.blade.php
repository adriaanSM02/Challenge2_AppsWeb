<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-8LTjviI3r7qZ0bNMT4V8WTu/fJi0L9cKRy6IVeU1Ih8zjv45i1LZ/iBSjy5c+2RObzpbas5DItfNjVt/OHTRw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Welcome</title>
  </head>
  
</head>
<style>
		body {
			background-image: url("{{asset('img/BackgroundWelcome.png')}}");
			background-size: cover;
			background-repeat: no-repeat;
		}
	</style>
<body>
  @include('shared.navwelcome')
    
<div id="main-container">
    <br/>
    <h1>HALCON</h1>
    <br/>
    <h2>Material Distributor</h2>
    <br/><br/>

    
    <img src="img/materialSimbol.png">
    <p>Check the status of your products</p>
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

<section class="d-flex align-items-center">     
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-9 col-lg-6">
                    <form action="{{ route('clientsresult') }}" method="post">
                        @csrf

                        <div class="mb-3">
                            <label for="uuid" class="form-label">UUID</label>
                            <input type="text" name="uuid" id="uuid" class="form-control">
                        </div>

                        <div class="reset-button" style="text-align: center;">
                            <button type="submit" class="btn btn-primary" style="background-color: #167CA5;">View Orders</button>
                        </div>

                        
                     </form>
                </div>
            </div>
        </div>
    </section>

</body>
</html>