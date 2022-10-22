<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Restaurant</title>

    <script src="https://cdn.fedapay.com/checkout.js?v=1.1.7"></script>


    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="{{ asset('storage/VITRINE_3/css/style.css') }} ">

</head>
<body>

<!-- header section starts  -->

<header class="header">
    @include('layouts.partials.vitrine2.header')

</header>

<!-- header section ends  -->

<!-- search-form  -->

@include('layouts.partials.vitrine2.body')

<!-- footer section starts  -->

<section class="footer">

    @include('layouts.partials.vitrine2.footer')

</section>

<!-- footer section ends -->

<!-- custom js file link  -->
<script src="{{ asset('storage/VITRINE_3/js/script.js') }} "></script>

<script type="text/javascript">
    FedaPay.init('.pay', { public_key: 'pk_live_eYfQNSRbnjB1q7aL_llfWtrR' });
</script>

</body>
</html>
