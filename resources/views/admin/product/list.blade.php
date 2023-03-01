@extends('layout.admin')
@section('title', $viewData['title'])



@section('content')

<div class="card">
    <div class="card-header text-center">
        <div class="row col justify-content-between">
            <div class="col-10 ps-4 fs-2">Produsts List</div>
            <div class="col-2 row align-item-center">
                <a href="{{route('admin.product.add')}}" class="btn btn-success">New Product</a>
            </div>
        </div>

    </div>
    <div class="card-body">
        <table class="mt-1 table table-bordered table-striped">
            <thead>
                <tr>
                    <th class="col text-center">ID</th>
                    <th class="col text-center">Image</th>
                    <th class="col text-center">Name</th>
                    <th class="col text-center">Edit</th>
                    <th class="col text-center">Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach($viewData['products'] as $product)
                <tr>
                    <th class="text-center">{{$product->getId()}} </th>
                    <th class="d-flex justify-content-center"><img class="img-product col"
                            src="{{asset('/storage/'.$product->getImage())}}" alt="..."></th>
                    <th class="text-center">{{$product->getName()}} </th>
                    <th class="text-center">
                        <a href="{{ route('admin.product.edit',['id'=>$product->getId()])}}">
                            <i class="fa fa-pencil"></i>
                        </a>
                    </th>
                    <th class="text-center">
                        <form action="{{ route('admin.product.delete',$product->getId()) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger">
                                <i class="fa fa-trash"></i>
                            </button>
                        </form>

                    </th>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection