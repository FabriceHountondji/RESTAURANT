<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Shop</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('storage/VITRINE_2/css/style.css') }}">
</head>

<body>

    <section id="header">
        @include('layouts.partials.vitrine2.header')
    </section>
    <br>

    <section id="prodetails" class="section-p1">
        
        <div class="single-pro-image">
            <img src="{{ asset($photo)}}" width="100%" id="MainImg" alt="">

            <div class="small-img-group">
                <div class="small-img-col">
                    <img src="{{ asset('storage/VITRINE_2/img/products/f1.jpg') }}" width="100%" class="small-img" alt="">
                </div>
                <div class="small-img-col">
                    <img src="{{ asset('storage/VITRINE_2/img/products/f2.jpg') }}" width="100%" class="small-img" alt="">
                </div>
                <div class="small-img-col">
                    <img src="{{ asset('storage/VITRINE_2/img/products/f3.jpg') }}" width="100%" class="small-img" alt="">
                </div>
                <div class="small-img-col">
                    <img src="{{ asset('storage/VITRINE_2/img/products/f4.jpg') }}" width="100%" class="small-img" alt="">
                </div>
            </div>
        </div>

        <div class="single-pro-details">
            <h6>{{$category}}</h6>
            <h4>{{$name}}</h4>
            <h2>{{$prix}} Fcfa</h2>
            <select>
              <option>Select Size</option>
              <option>XL</option>
              <option>XXL</option>
              <option>Small</option>
              <option>Large</option>
            </select>
            
            <input type="number" value="1">

            <br>
            <br>

            <form action="{{ route('panier.store') }}" method="post">
                @csrf

                <input type="hidden" name="id" value="{{$produit}}">
                <input type="hidden" name="name" value="{{$name}}">
                <input type="hidden" name="prix" value="{{$prix}}">

                <button type="submit" class="normal">Ajouter au panier</button>

            </form>
            

            <h4>Product Details</h4>
            <span>The Gildan Ultra Cotton T-shirt is made from a substantial 6.0 oz. per sq. yd. fabric constructed from 100% cotton, this classic fit preshrunk jersey knit provides unmatched comfort with each wear. Featuring a taped neck and shoulder, and a seamless double-needle collar, and available in a range of colors, it offers it all in the ultimate head-turning package.</span>
        </div>
    </section>

    <footer class="section-p1">
        @include('layouts.partials.vitrine2.footer')
    </footer>

    <script>
        var MainImg = document.getElementById("MainImg");
        var smallimg = document.getElementsByClassName("small-img");

        smallimg[0].onclick = function() {
            MainImg.src = smallimg[0].src;
        }
        smallimg[1].onclick = function() {
            MainImg.src = smallimg[1].src;
        }
        smallimg[2].onclick = function() {
            MainImg.src = smallimg[2].src;
        }
        smallimg[3].onclick = function() {
            MainImg.src = smallimg[3].src;
        }
    </script>


    <script src="{{ asset('storage/VITRINE_2/js/script.js') }}"></script>
</body>

</html>