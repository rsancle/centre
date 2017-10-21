@extends('layouts.basic')

@section('content')


<nav class="navbar" id="navbar_active">
    <div class="container-fluid">

        <div class="navbar-header" id="logo_zone">
            <div>
                
            </div>    
        </div>

        <ul class="nav navbar-nav" id="menu_list">
          <li><a href="#">Calendari</a></li>
          <li><a href="#">Cursos i tallers</a></li>
          <li><a href="#">Activitats</a></li>
          <li><a href="#">Galeria</a></li>
          <li><a href="#">Contacte</a></li>
        </ul>

        <div class="navbar-right">
            <div id="soci">
                <p>Vull fer-me<br>soci</p>
            </div>
        </div>

    </div>
</nav>


<div>

    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->

        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1" ></li>
            <li data-target="#myCarousel" data-slide-to="2" ></li>
        </ol>


      <!-- Wrapper for slides -->
      <div class="carousel-inner">
        <div class="item active">
          <img src="{{ asset('images/asd.png') }}" alt="Los Angeles" width="100%">
        </div>

        <div class="item">
          <img src="{{ asset('images/asd.png') }}" alt="Los Angeles" width="100%">
        </div>

        <div class="item">
          <img src="{{ asset('images/asd.png') }}" alt="Los Angeles" width="100%">
        </div>
      </div>

    </div>

</div>


<div class="col-xs-12 col-md-12 col-md-12 col-lg-12">

    <div class="col-xs-0 col-md-0 col-md-1 col-lg-1">
        
    </div>

    <div class="col-xs-12 col-md-12 col-md-10 col-lg-10 head">
        <div class="col-lg-2">
            <h1>TEMPORADA</h1>
        </div>
        <div class="col-lg-10 temp_list">
            <a href="#">TEATRE</a></li>
            <a href="#">LECTURES</a></li>
            <a href="#">CAVA-CONCERT</a></li>
            <a href="#">TERTÚLIES</a></li>
            <a href="#">VIDA CMC</a></li>
        </div>
    </div>

    <div class="col-xs-0 col-md-0 col-md-1 col-lg-1">
        
    </div>


    <div>
    </div>

<div>

@stop