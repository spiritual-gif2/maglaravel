@extends('layout.app')
@section('title',$viewData['title'])
@section('subtitle',$viewData['subtitle'])
@section('content')

<!-- Product section-->
<section class="masthead">
    <div class="container px-4 px-lg-5 my-5">
        <div class="row gx-4 gx-lg-5 align-items-center">
            <div class="col-md-6"><img class="card-img-top mb-5 mb-md-0"
                    src="{{ asset('/assets/img/'.$viewData['product']->getImage())}}" alt="..." /></div>
            <div class="col-md-6">
                <h1 class="display-5 fw-bolder"> {{$viewData['product']->getName()}} </h1>
                <div class="fs-5 mb-5">
                    <span>${{$viewData['product']->getPrice()}} </span>
                </div>
                <p class="lead"> {{$viewData['product']->getDescription()}} <br> Lorem ipsum dolor sit amet consectetur
                    adipisicing elit. Fugit ipsa error nemo, iusto magnam vitae! </p>
                <div class="d-flex">
                    <input class="form-control text-center me-3" id="inputQuantity" type="num"
                        value="{{ $viewData['product']->getQuantity()}}" style="max-width: 3rem" />
                    <button class="btn btn-outline-dark flex-shrink-0" type="button">
                        <i class="bi-cart-fill me-1"></i>
                        Add to cart
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>