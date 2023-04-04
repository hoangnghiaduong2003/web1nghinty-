<!DOCTYPE html>
<html lang="en">
<head>
  <base href="{{asset('')}}">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Alkatra&family=Montserrat:wght@400;500;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/app.css"> 
  <link rel="stylesheet" href="css/reset.css"> 
</head>
<body>

<main class="main">


  <div class="header">
    <div class="header-top">
    <img src="https://images-platform.99static.com//HKgh2RhyieA8m-1vZzXsPP8rfIg=/121x0:841x720/fit-in/500x500/99designs-contests-attachments/6/6931/attachment_6931515" alt="Logo-Soundcloud" class="header-logo">
    </div>
    <div class="header-action"> 
      <a href="#!" class ="btn btn-signin">Sign In</a>
      <a href="#!" class="btn">Create account</a>
  </div>
</div>





<div class="action">
<a class="btn btn-success" href="{{ route('products.index') }}"> Management Song</a> or <a class="btn btn-success" href="{{ route('products.create') }}"> Create New Song</a>
  </div>



<div class="desc">
  <p>Hear what is trending for free in the JuKeFox community</p>
</div>  
 
<div class="list-product-subtitle">

  <p>List product description</p>

</div>
<div class="product-group">

  <div class="row">

  @foreach($products as $key => $product)

      <div class="col-md-3 col-sm-6 col-12">

        <div class="card card-product mb-3">

<img src="{{ asset('image/product/'.$product->product_image) }}" alt=""  class="images-detail img" >

<div class="card-body">

      <h5 class="card-title">{{ $product->name }}</h5>

      <p class="card-text">{{ $product->price }}</p>

      <a class="btn btn-info" href="{{ route('products.show',$product->product_id) }}">Show</a>
    

</div>

<audio controls controlsList="nodownload" style="width: 250px;" ontimeupdate="myAudio(this)">
                <source src="{{ asset('audio/product/'.$product->audio) }}" type="audio/mpeg">
                </audio>
                <script type="text/javascript">
                    function myAudio(event){
                        if(event.currentTime>10){
                            event.currentTime=0;
                            event.pause();
                            alert("Bạn phải trả phí để nghe cả bài")
                        }
                    }
                </script>

                


        </div>
            <div class="form-group">
                <strong>Details:</strong>
                {{ $product->product_description }}
            </div>
           

</div>

@endforeach

</div>

</div>


  
</main>









</body>
</html>