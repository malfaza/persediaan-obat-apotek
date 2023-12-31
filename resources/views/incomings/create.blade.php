@include('layout.header')
@include('layout.navbar')
@include('layout.sidebar')
  <!-- START FORM -->
<div class="content-wrapper">
<form action='{{url('incomings')}}' method='post'>
    @csrf
    <div class="my-3 p-3 bg-body rounded shadow-sm">
        <a href="{{url('incomings')}}" class="btn btn-secondary">Kembali</a>
        <div class="mb-3 row">
            <label for="product_id" class="col-sm-2 col-form-label">Produk</label>
            <div class="col-sm-10">
                <select class="form-control" name="product_id" id="product_id">
                    <option value="">Pilih Produk</option>
                    @foreach ($products as $product)
                        <option value="{{ $product->id }}">{{ $product->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>        
        <div class="mb-3 row">
            <label for="quantity" class="col-sm-2 col-form-label">Quantity</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" name='quantity' value="{{Session::get('quantity')}}" id="quantity">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="expire" class="col-sm-2 col-form-label">Tanggal Expired</label>
            <div class="col-sm-10">
                <input type="date" class="form-control" name='expire' value="{{Session::get('expire')}}" id="expire">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="description" class="col-sm-2 col-form-label">Deskripsi</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='description' value="{{Session::get('description')}}" id="description">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="product" class="col-sm-2 col-form-label"></label>
            <div class="col-sm-10"><button type="submit" class="btn btn-primary" name="submit">SIMPAN</button></div>
        </div>
        </form>
    </div>
</div>
@include('layout.footer')
