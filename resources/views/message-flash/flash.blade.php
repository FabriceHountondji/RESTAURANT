
@if ($message = Session::get('success'))
<div class="alert alert-success alert-block">
    <div class="header-container-p container">
        <strong>Opération réussie!</strong> {{ $message }}
    </div>
</div>
@endif
  
@if ($message = Session::get('error'))
<div class="alert alert-danger alert-block">
    <div class="header-container-p container">
        <strong>Opération échouée!</strong> {{ $message }}
    </div>
</div>
@endif
   
@if ($message = Session::get('warning'))
<div class="alert alert-warning alert-block">
    <div class="header-container-p container">
        <strong>Avertissement!</strong> {{ $message }}
    </div>
</div>
@endif
   
@if ($message = Session::get('info'))
<div class="alert alert-info alert-block">
    <div class="header-container-p container">
        <strong>Info!</strong> {{ $message }}
    </div>
</div>
@endif