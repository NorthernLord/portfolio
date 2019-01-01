@extends('layouts.app')

@section('content')

    <div class="jumbotron text-center">
        <h1>Berend Kalberg</h1>
        <p>This project has been created to complete the PRG5 course at Hogeschool Rotterdam</p>
        <p><a class="btn btn-primary btn-lg" href="/login" role="button">Login</a> <a class="btn btn-success btn-lg" href="/register" role="button">Register</a></p>
    </div>

    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading -->
        <h1 class="my-4">Uitgelichte projecten</h1>
  
        <!-- Project One -->
        <div class="row">
            <div class="col-md-7">
                <a href="#">
                    <img class="img-fluid rounded mb-3 mb-md-0" src="storage/portfolio_cover_images/fietsenmakerij_homepage.jpg" alt="">
                </a>
            </div>
            <div class="col-md-5">
                <h3>Project One</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium veniam exercitationem expedita laborum at voluptate. Labore, voluptates totam at aut nemo deserunt rem magni pariatur quos perspiciatis atque eveniet unde.</p>
                <a class="btn btn-primary" href="#">View Project</a>
            </div>
        </div>
  
        <hr>
  
        <!-- Project Two -->
        <div class="row">
            <div class="col-md-7">
                <a href="#">
                <img class="img-fluid rounded mb-3 mb-md-0" src="http://placehold.it/700x300" alt="">
                </a>
            </div>
          <div class="col-md-5">
                <h3>Project Two</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut, odit velit cumque vero doloremque repellendus distinctio maiores rem expedita a nam vitae modi quidem similique ducimus! Velit, esse totam tempore.</p>
                <a class="btn btn-primary" href="#">View Project</a>
            </div>
        </div>
  
        <hr>
  
        <!-- Project Three -->
        <div class="row">
            <div class="col-md-7">
                <a href="#">
                <img class="img-fluid rounded mb-3 mb-md-0" src="http://placehold.it/700x300" alt="">
                </a>
            </div>
            <div class="col-md-5">
                <h3>Project Three</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis, temporibus, dolores, at, praesentium ut unde repudiandae voluptatum sit ab debitis suscipit fugiat natus velit excepturi amet commodi deleniti alias possimus!</p>
                <a class="btn btn-primary" href="#">View Project</a>
            </div>
        </div>
  
        <hr>

        <!-- Project Four -->
        <div class="row">
  
            <div class="col-md-7">
                <a href="#">
                <img class="img-fluid rounded mb-3 mb-md-0" src="http://placehold.it/700x300" alt="">
                </a>
            </div>
            <div class="col-md-5">
                <h3>Project Four</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo, quidem, consectetur, officia rem officiis illum aliquam perspiciatis aspernatur quod modi hic nemo qui soluta aut eius fugit quam in suscipit?</p>
                <a class="btn btn-primary" href="#">View Project</a>
            </div>
        </div>
  
        <hr>

    </div>
  
    <!-- Footer -->
    <footer class="py-5 bg-dark">
        <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2018</p>
        </div>
    </footer>
@endsection
