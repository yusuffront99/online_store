@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
            <h4 class="text-success">Data Products</h4>
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-auto">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Title</th>
                                        <th scope="col">Description</th>
                                        <th scope="col">Price</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php $no = 0; ?>
                                    @foreach ($products as $product)
                                        <?php $no++; ?>
                                        <tr>
                                            <th scope="row">{{$no}}</th>
                                            <td>{{$product->title}}</td>
                                            <td>{{$product->description}}</td>
                                            <td>Rp{{number_format($product->price,2,",",".")}}</td>
                                            <td>
                                                <button class="btn btn-sm btn-info text-white">Edit</button>
                                                <button class="btn btn-sm btn-danger">Delete</button>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                                {{-- {{ $products->links() }} --}}
                            </table>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>
@endsection
