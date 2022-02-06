@extends('layouts.default')

@section('content')
<div class="card">
    <div class="card-header">
        <strong>Ubah Barang</strong>
        <small>{{ $item->name }}</small>
    </div>
    <div class="card-body card-block">
        {{-- {{ route('products/update/'),$item->id }} --}}
        <form action="{{ route('products-update',$item->id) }}" method="post" enctype="multipart/form-data">
            @method('post')
            @csrf
            <div class="from-group">
                <label for="name" class="from-control-label">Nama Barang</label>
                <input type="text" name="name" 
                        value="{{ old('name') ? old('name') : $item->name }}"
                        class="form-control @error('name')
                            is-invalid
                        @enderror">
                        @error('name')
                            <div class="text-mute">{{ $message }}</div>
                        @enderror
            </div>

            <div class="from-group">
                <label for="type" class="from-control-label">Tipe Barang</label>
                <input type="text" name="type" 
                        value="{{ old('type') ? old('type') : $item->type }}"
                        class="form-control @error('type')
                            is-invalid
                        @enderror">
                        @error('type')
                            <div class="text-mute">{{ $message }}</div>
                        @enderror
                        
            </div>

            <div class="from-group">
                <label for="descrription" class="from-control-label">Deskripsi Barang</label>
                <textarea name="description" 
                           class="ckeditor form-control @error('description')
                            is-invalid
                        @enderror">{{ old('description') ? old('description') : $item->description }}</textarea>
                        
                        @error('descrription')
                            <div class="text-mute">{{ $message }}</div>
                        @enderror
            </div>

            <div class="from-group">
                <label for="price" class="from-control-label">Harga Barang</label>
                <input type="number" name="price" 
                        value="{{ old('price') ? old('price') : $item->price }}"
                        class="form-control @error('price')
                            is-invalid
                        @enderror">
                        @error('price')
                            <div class="text-mute">{{ $message }}</div>
                        @enderror
                        
            </div>

            <div class="from-group">
                <label for="quantity" class="from-control-label">kuantitas Barang</label>
                <input type="number" name="quantity" 
                        value="{{ old('type') ? old('quantity') : $item->quantity }}"
                        class="form-control @error('quantity')
                            is-invalid
                        @enderror">
                        @error('quantity')
                            <div class="text-mute">{{ $message }}</div>
                        @enderror
                        
            </div>

            <div class="from-group">
                <button class="btn btn-primary btn-block" type="submit">
                    Tambah Barang
                </button>
            </div>

        </form>
    </div>
</div>
@endsection