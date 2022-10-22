<section class="search-form-container">

    <form action="">
        <input type="search" name="" placeholder="search here..." id="search-box">
        <label for="search-box" class="fas fa-search"></label>
    </form>

</section>

<!-- shopping-cart section  -->

<section class="shopping-cart-container">

    <div class="products-container">

        <h3 class="title">your products</h3>

        <div class="box-container">

            @foreach(Cart::content() as $menu)
                <div class="box">

                    <form action="{{ route('panier.delete', $menu->rowId) }}" method="post">
                        @csrf
                        @method('DELETE')

                        <button type="submit">
                            <i class="fas fa-times"></i>
                        </button>
                    </form>

                    <img src="{{ asset($menu->model->photo) }}" alt="">
                    <div class="content">
                        <h3>{{ $menu->model->name }}</h3>
                        <span> quantity : </span>
                        <input type="number" name="" value="1" id="">
                        <br>
                        <span> Prix : </span>
                        <span class="price"> {{ $menu->model->prix }} Fcfa </span>
                    </div>
                </div>
            @endforeach

            <!-- <div class="box">
                <i class="fas fa-times"></i>
                <img src="{{ asset('storage/VITRINE_3/image/menu-2.png') }}" alt="">
                <div class="content">
                    <h3>delicious food</h3>
                    <span> quantity : </span>
                    <input type="number" name="" value="1" id="">
                    <br>
                    <span> price : </span>
                    <span class="price"> $40.00 </span>
                </div>
            </div>

            <div class="box">
                <i class="fas fa-times"></i>
                <img src="{{ asset('storage/VITRINE_3/image/menu-3.png') }}" alt="">
                <div class="content">
                    <h3>delicious food</h3>
                    <span> quantity : </span>
                    <input type="number" name="" value="1" id="">
                    <br>
                    <span> price : </span>
                    <span class="price"> $40.00 </span>
                </div>
            </div>

            <div class="box">
                <i class="fas fa-times"></i>
                <img src="{{ asset('storage/VITRINE_3/image/menu-4.png') }}" alt="">
                <div class="content">
                    <h3>delicious food</h3>
                    <span> quantity : </span>
                    <input type="number" name="" value="1" id="">
                    <br>
                    <span> price : </span>
                    <span class="price"> $40.00 </span>
                </div>
            </div>

            <div class="box">
                <i class="fas fa-times"></i>
                <img src="{{ asset('storage/VITRINE_3/image/menu-5.png') }}" alt="">
                <div class="content">
                    <h3>delicious food</h3>
                    <span> quantity : </span>
                    <input type="number" name="" value="1" id="">
                    <br>
                    <span> price : </span>
                    <span class="price"> $40.00 </span>
                </div>
            </div> -->

        </div>

    </div>

    <div class="cart-total">

        <h3 class="title"> cart total </h3>

        <div class="box">

            <h3 class="subtotal"> tax : <span>{{ Cart::tax() }} Fcfa</span> </h3>
            <h3 class="total"> total : <span>{{ Cart::total() }} Fcfa</span> </h3>

            <button class="btn btn-success pay"
                    data-transaction-amount="{{Cart::total()}}"
                    data-transaction-description="Achat repas E-Restaurant">
                    Passer au paiement
            </button>

        </div>

    </div>

</section>

<!-- login-form  -->

<div class="login-form-container">

    <form action="{{ route('authenticate') }}" method="post">
        @csrf

        @if (session('error'))
            <div class="alert alert-danger">
                <strong>Attention !</strong> {{ session('error') }}
            </div>
        @endif

        <h3>Connexion</h3>
        <input type="email" name="email" placeholder="enter your email" id="" class="box" required>
        <input type="password" name="password" placeholder="enter your password" id="" class="box" required>

        <input type="submit" value="Connexion" class="btn">
        <p>forget password? <a href="#">click here</a></p>
        <p>don't have an account? <a href="#">create one</a></p>
    </form>

</div>

<!-- home section starts  -->

<section class="home" id="home">

    <div class="content">
        <span>welcome foodies</span>
        <h3>different spices for the different tastes 😋</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis unde dolores temporibus hic quam debitis tenetur harum nemo.</p>
        <a href="#" class="btn">order now</a>
    </div>

    <div class="image">
        <img src="{{ asset('storage/VITRINE_3/image/home-img.png') }}" alt="" class="home-img">
        <img src="{{ asset('storage/VITRINE_3/image/home-parallax-img.png') }}" alt="" class="home-parallax-img">
    </div>

</section>

<!-- home section ends  -->

<!-- category section starts  -->

<section class="category">

    <a href="#" class="box">
        <img src="{{ asset('storage/VITRINE_3/image/cat-1.png') }}" alt="">
        <h3>combo</h3>
    </a>

    <a href="#" class="box">
        <img src="{{ asset('storage/VITRINE_3/image/cat-2.png') }}" alt="">
        <h3>pizza</h3>
    </a>

    <a href="#" class="box">
        <img src="{{ asset('storage/VITRINE_3/image/cat-3.png') }}" alt="">
        <h3>burger</h3>
    </a>

    <a href="#" class="box">
        <img src="{{ asset('storage/VITRINE_3/image/cat-4.png') }}" alt="">
        <h3>chicken</h3>
    </a>

    <a href="#" class="box">
        <img src="{{ asset('storage/VITRINE_3/image/cat-5.png') }}" alt="">
        <h3>dinner</h3>
    </a>

    <a href="#" class="box">
        <img src="{{ asset('storage/VITRINE_3/image/cat-6.png') }}" alt="">
        <h3>coffee</h3>
    </a>

</section>

<!-- category section ends -->


<!-- about section starts  -->

<section class="about" id="about">

    <div class="image">
        <img src="{{ asset('storage/VITRINE_3/image/about-img.png') }}" alt="">
    </div>

    <div class="content">
        <span>why choose us?</span>
        <h3 class="title">what's make our food delicious!</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos ut explicabo, numquam iusto est a ipsum assumenda tempore esse corporis?</p>
        <a href="#" class="btn">read more</a>
        <div class="icons-container">
            <div class="icons">
                <img src="{{ asset('storage/VITRINE_3/image/serv-1.png') }}" alt="">
                <h3>fast delivery</h3>
            </div>
            <div class="icons">
                <img src="{{ asset('storage/VITRINE_3/image/serv-2.png') }}" alt="">
                <h3>fresh food</h3>
            </div>
            <div class="icons">
                <img src="{{ asset('storage/VITRINE_3/image/serv-3.png') }}" alt="">
                <h3>best quality</h3>
            </div>
            <div class="icons">
                <img src="{{ asset('storage/VITRINE_3/image/serv-4.png') }}" alt="">
                <h3>24/7 support</h3>
            </div>
        </div>
    </div>

</section>

<!-- about section ends -->

<!-- popular section starts  -->

<section class="popular" id="popular">

    <div class="heading">
        <span>popular food</span>
        <h3>our special dishes</h3>
    </div>


    <div class="box-container">
        @foreach($menus as $index => $menu)

            <div class="box">
                <div class="image">
                    <img src="{{ asset($menu->photo) }}" alt="">
                </div>
                <div class="content">
                    <h3>{{ $menu->name }}</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                        <span> (50) </span>
                    </div>
                    <div class="price">{{ $menu->prix }} Fcfa <span>{{ $menu->prix }} Fcfa</span></div>

                    <form action="{{ route('panier.store') }}" method="post">
                        @csrf

                        <input type="hidden" name="id" value="{{$menu->id}}">
                        <input type="hidden" name="name" value="{{$menu->name}}">
                        <input type="hidden" name="prix" value="{{$menu->prix}}">

                        <button type="submit" class="btn">Ajouter au panier</button>

                    </form>
                    <!-- <a href="#" class="btn">add to cart</a> -->
                </div>
            </div>

        @endforeach

        <!-- <div class="box">
            <a href="#" class="fas fa-heart"></a>
            <div class="image">
                <img src="{{ asset('storage/VITRINE_3/image/food-2.png') }}" alt="">
            </div>
            <div class="content">
                <h3>delicious food</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                    <span> (50) </span>
                </div>
                <div class="price">$40.00 <span>$50.00</span></div>
                <a href="#" class="btn">add to cart</a>
            </div>
        </div>

        <div class="box">
            <a href="#" class="fas fa-heart"></a>
            <div class="image">
                <img src="{{ asset('storage/VITRINE_3/image/food-3.png') }}" alt="">
            </div>
            <div class="content">
                <h3>delicious food</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                    <span> (50) </span>
                </div>
                <div class="price">$40.00 <span>$50.00</span></div>
                <a href="#" class="btn">add to cart</a>
            </div>
        </div>

        <div class="box">
            <a href="#" class="fas fa-heart"></a>
            <div class="image">
                <img src="{{ asset('storage/VITRINE_3/image/food-4.png') }}" alt="">
            </div>
            <div class="content">
                <h3>delicious food</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                    <span> (50) </span>
                </div>
                <div class="price">$40.00 <span>$50.00</span></div>
                <a href="#" class="btn">add to cart</a>
            </div>
        </div>

        <div class="box">
            <a href="#" class="fas fa-heart"></a>
            <div class="image">
                <img src="{{ asset('storage/VITRINE_3/image/food-5.png') }}" alt="">
            </div>
            <div class="content">
                <h3>delicious food</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                    <span> (50) </span>
                </div>
                <div class="price">$40.00 <span>$50.00</span></div>
                <a href="#" class="btn">add to cart</a>
            </div>
        </div>

        <div class="box">
            <a href="#" class="fas fa-heart"></a>
            <div class="image">
                <img src="{{ asset('storage/VITRINE_3/image/food-6.png') }}" alt="">
            </div>
            <div class="content">
                <h3>delicious food</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                    <span> (50) </span>
                </div>
                <div class="price">$40.00 <span>$50.00</span></div>
                <a href="#" class="btn">add to cart</a>
            </div>
        </div>

        <div class="box">
            <a href="#" class="fas fa-heart"></a>
            <div class="image">
                <img src="{{ asset('storage/VITRINE_3/image/food-7.png') }}" alt="">
            </div>
            <div class="content">
                <h3>delicious food</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                    <span> (50) </span>
                </div>
                <div class="price">$40.00 <span>$50.00</span></div>
                <a href="#" class="btn">add to cart</a>
            </div>
        </div> -->

        <!-- <div class="box">
            <a href="#" class="fas fa-heart"></a>
            <div class="image">
                <img src="{{ asset('storage/VITRINE_3/image/food-8.png') }}" alt="">
            </div>
            <div class="content">
                <h3>delicious food</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                    <span> (50) </span>
                </div>
                <div class="price">$40.00 <span>$50.00</span></div>
                <a href="#" class="btn">add to cart</a>
            </div>
        </div> -->

    </div>

</section>

<!-- popular section ends -->

<!-- banner section starts  -->

<section class="banner">

    <div class="row-banner">
        <div class="content">
            <span>double cheese</span>
            <h3>burger</h3>
            <p>with cococola and fries</p>
            <a href="#" class="btn">order now</a>
        </div>
    </div>

    <div class="grid-banner">
        <div class="grid">
            <img src="{{ asset('storage/VITRINE_3/image/banner-1.png') }}" alt="">
            <div class="content">
                <span>special offer</span>
                <h3>upto 50% off</h3>
                <a href="#" class="btn">order now</a>
            </div>
        </div>
        <div class="grid">
            <img src="{{ asset('storage/VITRINE_3/image/banner-2.png') }}" alt="">
            <div class="content center">
                <span>special offer</span>
                <h3>upto 25% extra</h3>
                <a href="#" class="btn">order now</a>
            </div>
        </div>
        <div class="grid">
            <img src="{{ asset('storage/VITRINE_3/image/banner-3.png') }}" alt="">
            <div class="content">
                <span>limited offer</span>
                <h3>100% cashback</h3>
                <a href="#" class="btn">order now</a>
            </div>
        </div>
    </div>

</section>

<!-- banner section ends -->

<!-- menu section starts  -->

<section class="menu" id="menu">

    <div class="heading">
        <span>our menu</span>
        <h3>our top dishes</h3>
    </div>

    <div class="box-container">

        <a href="#" class="box">
            <img src="{{ asset('storage/VITRINE_3/image/menu-1.png') }}" alt="">
            <div class="content">
                <h3>delicious food</h3>
                <div class="price">$40.00</div>
            </div>
        </a>

        <a href="#" class="box">
            <img src="{{ asset('storage/VITRINE_3/image/menu-2.png') }}" alt="">
            <div class="content">
                <h3>delicious food</h3>
                <div class="price">$40.00</div>
            </div>
        </a>

        <a href="#" class="box">
            <img src="{{ asset('storage/VITRINE_3/image/menu-3.png') }}" alt="">
            <div class="content">
                <h3>delicious food</h3>
                <div class="price">$40.00</div>
            </div>
        </a>

        <a href="#" class="box">
            <img src="{{ asset('storage/VITRINE_3/image/menu-4.png') }}" alt="">
            <div class="content">
                <h3>delicious food</h3>
                <div class="price">$40.00</div>
            </div>
        </a>

        <a href="#" class="box">
            <img src="{{ asset('storage/VITRINE_3/image/menu-5.png') }}" alt="">
            <div class="content">
                <h3>delicious food</h3>
                <div class="price">$40.00</div>
            </div>
        </a>

        <a href="#" class="box">
            <img src="{{ asset('storage/VITRINE_3/image/menu-6.png') }}" alt="">
            <div class="content">
                <h3>delicious food</h3>
                <div class="price">$40.00</div>
            </div>
        </a>

    </div>

</section>

<!-- menu section ends -->

<!-- order section starts  -->

<section class="order" id="order">

    <div class="heading">
        <span>order now</span>
        <h3>fastest home delivery</h3>
    </div>

    <div class="icons-container">

        <div class="icons">
            <img src="{{ asset('storage/VITRINE_3/image/icon-1.png') }}" alt="">
            <h3>7:00am to 10:30pm</h3>
        </div>

        <div class="icons">
            <img src="{{ asset('storage/VITRINE_3/image/icon-2.png') }}" alt="">
            <h3>+123-456-7890</h3>
        </div>

        <div class="icons">
            <img src="{{ asset('storage/VITRINE_3/image/icon-3.png') }}" alt="">
            <h3>mumbai, india - 400104</h3>
        </div>

    </div>

    <form action="">

        <div class="flex">
            <div class="inputBox">
                <span>your name</span>
                <input type="text" placeholder="customer's name" name="" id="">
            </div>
            <div class="inputBox">
                <span>your number</span>
                <input type="number" placeholder="customer's number" name="" id="">
            </div>
        </div>

        <div class="flex">
            <div class="inputBox">
                <span>your order</span>
                <input type="text" placeholder="food you want" name="" id="">
            </div>
            <div class="inputBox">
                <span>how much</span>
                <input type="number" placeholder="number or orders" name="" id="">
            </div>
        </div>

        <div class="flex">
            <div class="inputBox">
                <span>your details</span>
                <input type="text" placeholder="your message" name="" id="">
            </div>
            <div class="inputBox">
                <span>pick up time</span>
                <input type="datetime-local">
            </div>
        </div>

        <div class="flex">
            <div class="inputBox">
                <textarea placeholder="your address" id="" cols="30" rows="10"></textarea>
            </div>
            <div class="inputBox">
                <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30153.788252261566!2d72.82321484621745!3d19.141690214227783!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b63aceef0c69%3A0x2aa80cf2287dfa3b!2sJogeshwari%20West%2C%20Mumbai%2C%20Maharashtra%20400047!5e0!3m2!1sen!2sin!4v1634657187694!5m2!1sen!2sin" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>

        <input type="submit" value="proceed to order" class="btn">

    </form>

</section>

<!-- order section ends -->

<!-- blogs section starts  -->

<section class="blogs" id="blogs">

    <div class="heading">
        <span>our blogs</span>
        <h3>our daily stories</h3>
    </div>

    <div class="box-container">

        <div class="box">
            <div class="image">
                <h3> <i class="fas fa-calendar"></i> 21st may, 2021 </h3>
                <img src="{{ asset('storage/VITRINE_3/image/blog-1.jpg') }}" alt="">
            </div>
            <div class="content">
                <div class="tags">
                    <a href="#"> <i class="fas fa-tag"></i> food / </a>
                    <a href="#"> <i class="fas fa-tag"></i> burger / </a>
                    <a href="#"> <i class="fas fa-tag"></i> pizza  </a>
                </div>
                <h3>blog title goes here...</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Autem, earum.</p>
                <a href="#" class="btn">read more</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <h3> <i class="fas fa-calendar"></i> 21st may, 2021 </h3>
                <img src="{{ asset('storage/VITRINE_3/image/blog-2.jpg') }}" alt="">
            </div>
            <div class="content">
                <div class="tags">
                    <a href="#"> <i class="fas fa-tag"></i> food / </a>
                    <a href="#"> <i class="fas fa-tag"></i> burger / </a>
                    <a href="#"> <i class="fas fa-tag"></i> pizza  </a>
                </div>
                <h3>blog title goes here...</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Autem, earum.</p>
                <a href="#" class="btn">read more</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <h3> <i class="fas fa-calendar"></i> 21st may, 2021 </h3>
                <img src="{{ asset('storage/VITRINE_3/image/blog-3.jpg') }}" alt="">
            </div>
            <div class="content">
                <div class="tags">
                    <a href="#"> <i class="fas fa-tag"></i> food / </a>
                    <a href="#"> <i class="fas fa-tag"></i> burger / </a>
                    <a href="#"> <i class="fas fa-tag"></i> pizza  </a>
                </div>
                <h3>blog title goes here...</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Autem, earum.</p>
                <a href="#" class="btn">read more</a>
            </div>
        </div>

    </div>

</section>

<!-- blogs section ends -->
