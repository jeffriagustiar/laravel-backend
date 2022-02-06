@extends('layouts.default')

@section('content')
<div class="card">
    <div class="card-header">
        <strong>Tambah Foto Barang</strong>
    </div>
    <div class="card-body card-block">
        <form action="{{ route('product-galleries-store') }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('post')
            <div class="from-group">
                <label for="name" class="from-control-label">Nama Barang</label>
                <select name="products_id" class="form-control @error('products_id')
                            is-invalid
                        @enderror">
                        @foreach ($products as $p)
                            <option value="{{ $p->id }}">{{ $p->name }}</option>
                        @endforeach
                </select>
                        @error('products_id')
                            <div class="text-mute">{{ $message }}</div>
                        @enderror
            </div>

            <div class="from-group">
                <label for="photo" class="from-control-label">Foto Barang</label>
                <input type="file" name="photo" 
                        value="{{ old('photo') }}"
                        {{-- accept="image/*" --}}
                        class="form-control @error('photo')
                            is-invalid
                        @enderror">
                        @error('photo')
                            <div class="text-mute">{{ $message }}</div>
                        @enderror
                        
            </div>

            <div class="from-group">
                <label for="is_default" class="from-control-label">Jadikan Default</label>
                <br>
                <label>
                    <input type="radio" name="is_default" 
                            value="1"
                            class="form-control @error('is_default')
                                is-invalid
                            @enderror"> Ya
                </label>
                &nbsp;
                <label>
                    <input type="radio" name="is_default" 
                            value="0"
                            class="form-control @error('is_default')
                                is-invalid
                            @enderror"> Tidak
                </label>
                        @error('is_default')
                            <div class="text-mute">{{ $message }}</div>
                        @enderror
                        
            </div>

            <div class="from-group">
                <button class="btn btn-primary btn-block" type="submit">
                    Tambah Foto Barang
                </button>
            </div>

        </form>
    </div>
</div>
@endsection