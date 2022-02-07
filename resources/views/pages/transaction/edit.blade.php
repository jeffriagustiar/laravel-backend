@extends('layouts.default')

@section('content')
<div class="card">
    <div class="card-header">
        <strong>Ubah Transaksi</strong>
        <small>{{ $item->uuid }}</small>
    </div>
    <div class="card-body card-block">
        {{-- {{ route('products/update/'),$item->id }} --}}
        <form action="{{ route('transactions-update',$item->id) }}" method="post" enctype="multipart/form-data">
            @method('post')
            @csrf
            <div class="from-group">
                <label for="name" class="from-control-label">Nama Pemesan</label>
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
                <label for="email" class="from-control-label">Email</label>
                <input type="text" name="email" 
                        value="{{ old('email') ? old('email') : $item->email }}"
                        class="form-control @error('email')
                            is-invalid
                        @enderror">
                        @error('email')
                            <div class="text-mute">{{ $message }}</div>
                        @enderror
                        
            </div>

            <div class="from-group">
                <label for="number" class="from-control-label">Nomor HP</label>
                <input type="text" name="number" 
                        value="{{ old('number') ? old('number') : $item->number }}"
                        class="form-control @error('number')
                            is-invalid
                        @enderror">
                        @error('number')
                            <div class="text-mute">{{ $message }}</div>
                        @enderror
                        
            </div>

            <div class="from-group">
                <label for="address" class="from-control-label">Alamat Pemesan</label>
                <input type="text" name="address" 
                        value="{{ old('address') ? old('address') : $item->address }}"
                        class="form-control @error('address')
                            is-invalid
                        @enderror">
                        @error('address')
                            <div class="text-mute">{{ $message }}</div>
                        @enderror
                        
            </div>

            <div class="from-group">
                <button class="btn btn-primary btn-block" type="submit">
                    Ubah Transaksi
                </button>
            </div>

        </form>
    </div>
</div>
@endsection