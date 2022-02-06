@extends('layouts.default')

@section('content')
    <div class="orders">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="box-title">Daftar Foto Barang <small>{{ $product->name }}</small></h4>
                    </div>
                    <div class="card-body">
                        <div class="table-stats order-table ov-h">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th id="">#</th>
                                        <th id="">Nama Barang</th>
                                        <th id="">Photo</th>
                                        <th id="">Default</th>
                                        <th id="">Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                        @forelse ($items as $i)
                                        <tr>
                                            <td>{{ $i->id }}</td>
                                            <td>{{ $i->product->name }}</td>
                                            <td><img src="{{ url($i->photo) }}"></td>
                                            <td>{{ $i->is_default ? 'Ya' : 'Tidak'}}</td>
                                            <td>
                                                <form action="{{ route('product-galleries-delete',$i->id) }}" method="POST" class="d-inline" enctype="multipart/form-data">
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