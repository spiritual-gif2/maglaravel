@extends('layout.admin')
@section('title', $viewData['title'])


@section('content')

<div class="card">
    <div class="card-header text-center fs-2">Edit Product</div>
    <div class="card-body">
        @if($errors->any())
        <ul class="alert alert-danger list-unstyled">
            @foreach($errors->all() as $error)
            <li> - {{$error}} </li>
            @endforeach
        </ul>
        @endif


        <form action="{{route('admin.product.update', ['id'=>$viewData['product']->getId()])}}" method="post" class="form" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-12">
                    <div class="row mx-1 mb-3 form-group">
                        <label for="name" class="col-form-label">Name</label>
                        <input value="{{ $viewData['product']->getName() }}" class="form-control" type="text" name="name">
                    </div>
                </div>
                <div class="col-12">
                    <div class="row mx-1 mb-3 form-group">
                        <label for="image" class="col-form-label">Image</label>
                        <input value="{ $viewData['product']->getImage() }}" class="form-control" type="file" name="image">
                    </div>
                    <div class="col">
                        &nbsp;
                    </div>
                </div>
                <div class="row justify-content-between">
                    <div class="col-lg-6 col-12">
                        <div class="row mb-3 form-group">
                            <label for="price" class="col-form-label col-md-2 col-12">Price</label>
                            <input value="{{ $viewData['product']->getPrice() }}" class="form-control col-md-8 col-12" type="number"
                                name="price">
                        </div>
                    </div>
                    <div class="col-lg-6 col-12">
                        <div class="row mb-3 form-group">
                            <label for="quantity" class="col-form-label col-md-3 col-12">Quantity</label>
                            <input value="{{ $viewData['product']->getQuantity() }}" class="form-control col-md-8 col-12" type="number"
                                name="quantity">
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="row mb-3 form-group">
                        <label for="description" class="col-form-label">Description</label>


                        <textarea class="form-control" name="description"
                            id="description" cols="30" rows="8">{{ $viewData['product']->getDescription() }}</textarea>
                            
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-success">Edit</button>
        </form>
    </div>
</div>

@endsection