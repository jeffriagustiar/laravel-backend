@extends('layouts.default')

@section('content')
    <div class="orders">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="box-title">Daftar Barang</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-stats order-table ov-h">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th id="">#</th>
                                        <th id="">Name</th>
                                        <th id="">Type</th>
                                        <th id="">Price</th>
                                        <th id="">Quantity</th>
                                        <th id="">Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                        @forelse ($items as $i)
                                        <tr>
                                            <td>{{ $i->id }}</td>
                                            <td>{{ $i->name }}</td>
                                            <td>{{ $i->type }}</td>
                                            <td>{{ $i->price }}</td>
                                            <td>{{ $i->quantity }}</td>
                                            <td>
                                                <a href="{{ route('products-gallery',$i->id) }}" class="btn btn-info btn-sm">
                                                    <i class="fa fa-picture-o "></i>
                                                </a>
                                                <a href="{{ route('products-edit',$i->id) }}" class="btn btn-primary btn-sm">
                                                    <i class="fa fa-pencil"></i>
                                                </a>
                                                <form action="{{ route('products-delete',$i->id) }}" method="POST" class="d-inline" enctype="multipart/form-data">
                                                    @csrf
                                                    @method('delete')
                                                    <button class="btn btn-danger btn-sm">
                                                        <i class="fa fa-trash"></i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                        @empty
                                        <tr>
                                            <td colspan="6" class="text-center p-5">
                                                Kosong
                                            </td>
                                        </tr>
                                        @endforelse

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection