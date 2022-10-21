<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Shop</title>

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
    <script src="https://cdn.fedapay.com/checkout.js?v=1.1.7"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('storage/VITRINE_2/css/style.css') }}">
</head>

<body>

    <section id="header">
        @include('layouts.partials.vitrine2.header')
    </section>

    

    @if(Cart::count() > 0)

        <section id="page-header" class="about-header">

            <h2>Contenu de mon panier</h2>

        </section>

        <section id="cart" class="section-p1">
            <table width="100%">
                <thead>
                    <tr>
                        <td>Retirer</td>
                        <td>Image</td>
                        <td>Produit</td>
                        <td>Prix</td>
                        <td>Quantité(s)</td>
                        <td>Total</td>
                    </tr>
                </thead>

                <tbody>
                    @foreach(Cart::content() as $produit)
                        <tr>
                            <td>

                                <form action="{{ route('panier.delete', $produit->rowId) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                            <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                        </svg>
                                    </button>

                                </form>       
                            
                            </td>
                            <td><img src="{{ asset($produit->model->photo) }}" alt=""></td>
                            <td>{{ $produit->model->name }}</td>
                            <td>{{ $produit->model->prix }} Fcfa</td>
                            <td><input type="number" value="1" name="" id=""></td>
                            <td>{{ Cart::subtotal() }} Fcfa</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </section>

        <section id="cart-add" class="section-p1">
            <div id="cuopon">
                <h3>Apply Coupon</h3>
                <div>
                    <input type="text" name="" id="" placeholder="Enter Your Coupon">
                    <button class="normal">Apply</button>
                </div>
            </div>

            <div id="subtotal">
                <h3>Cart Totals</h3>
                <table>
                    <tr>
                        <td>Total HT</td>
                        <td>{{ Cart::subtotal() }} Fcfa</td>
                    </tr>
                    <tr>
                        <td>Taxe</td>
                        <td>{{ Cart::tax() }} Fcfa</td>
                    </tr>
                    <tr>
                        <td><strong>Total TTC</strong></td>
                        <td><strong>{{ Cart::total() }} Fcfa</strong></td>
                    </tr>
                </table>

                <button class="normal"
                    data-transaction-amount=" {{ Cart::total() }} "
                    data-transaction-description="Achat produit E-Shop"> Passer au paiement </button>
            </div>
        </section>

    @else


        <section id="page-header" class="about-header">

            <h2>Votre panier est vide</h2>

        </section>

    @endif

    <footer class="section-p1">
        @include('layouts.partials.vitrine2.footer');
    </footer>


    <script src="{{ asset('storage/VITRINE_2/js/script.js') }}"></script>

    <script type="text/javascript">
        FedaPay.init('.normal', { public_key: 'pk_live_eYfQNSRbnjB1q7aL_llfWtrR' });
    </script>

</body>

</html>