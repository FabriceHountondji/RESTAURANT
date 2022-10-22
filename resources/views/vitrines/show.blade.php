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
        <a href="{{ asset('/') }}"><img src="{{ asset('storage/VITRINE_2/img/logo.png') }}" class="logo" alt=""></a>

        <div>
            <ul id="navbar">
                <li><a class="active" href="{{ asset('/') }}">Home</a></li>
                <li><a href="{{ route('login') }}">Login</a></li>
                <li id="lg-bag"><a href=" {{ route('panier') }} "><i class="far fa-shopping-bag"></i></a>
                </li>
                <!-- <span class="translate-middle badge rounded-pill bg-success">
                    {{ Cart::count() }}
                </span> -->

                <a href="#" id="close"><i class="far fa-times"></i></a>
            </ul>
        </div>
        <div id="mobile">
            <a href="{{ route('panier') }}"><i class="far fa-shopping-bag"></i></a>

            <i id="bar" class="fas fa-outdent"></i>
        </div>
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

                <input type="hidden" name="id" value="{{$menu}}">
                <input type="hidden" name="name" value="{{$name}}">
                <input type="hidden" name="prix" value="{{$prix}}">

                <button type="submit" class="normal">Ajouter au panier</button>

            </form>


            <h4>Product Details</h4>
            <span>The Gildan Ultra Cotton T-shirt is made from a substantial 6.0 oz. per sq. yd. fabric constructed from 100% cotton, this classic fit preshrunk jersey knit provides unmatched comfort with each wear. Featuring a taped neck and shoulder, and a seamless double-needle collar, and available in a range of colors, it offers it all in the ultimate head-turning package.</span>
        </div>
    </section>

    <footer class="section-p1">
        <div class="col">
            <a href="{{ asset('/') }}">
                <img class="logo" src="{{ asset('storage/VITRINE_2/img/logo.png') }}" alt="">
            </a>

            <h4>Contact</h4>
            <p><strong>Address: </strong> 562 Wellington Road, Street 32, San Francisco</p>
            <p><strong>Phone:</strong> +01 2222 365 /(+91) 01 2345 6789</p>
            <p><strong>Hours:</strong> 10:00 - 18:00, Mon - Sat</p>
            <div class="follow">
                <h4>Follow Us</h4>
                <div class="icon">
                    <i class="fab fa-facebook-f"></i>
                    <i class="fab fa-twitter"></i>
                    <i class="fab fa-instagram"></i>
                    <i class="fab fa-pinterest-p"></i>
                    <i class="fab fa-youtube"></i>
                </div>
            </div>
        </div>

        <div class="col">
            <h4>About</h4>
            <a href="#">About Us</a>
            <a href="#">Delivery Information</a>
            <a href="#">Privacy Policy</a>
            <a href="#">Terms & Conditions</a>
            <a href="#">Contact Us</a>
        </div>

        <div class="col">
            <h4>My Account</h4>
            <a href="#">Sign In</a>
            <a href="#">View Cart</a>
            <a href="#">My Wishlist</a>
            <a href="#">Track My Order</a>
            <a href="#">Help</a>
        </div>

        <div class="col install">
            <h4>Install App</h4>
            <p>From App Store or Google Play</p>
            <div class="row">
                <img src="{{ asset('storage/VITRINE_2/img/pay/app.jpg') }}" alt="">
                <img src="{{ asset('storage/VITRINE_2/img/pay/play.jpg') }}" alt="">
            </div>
            <p>Secured Payment Gateways </p>
            <img src="{{ asset('storage/VITRINE_2/img/pay/pay.png') }}" alt="">
        </div>

        <div class="copyright">
            <p>© 2022, E-Restaurant</p>
        </div>
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
