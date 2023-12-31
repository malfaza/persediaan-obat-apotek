@include('layout.header')
@include('layout.navbar')
@include('layout.sidebar')
  <!-- START FORM -->
<div class="content-wrapper">
<form action='{{url('types/'.$data->id)}}' method='post'>
    @csrf
    @method('PUT')
    <div class="my-3 p-3 bg-body rounded shadow-sm">
        <a href="{{url('types')}}" class="btn btn-secondary">Kembali</a>
        <div class="mb-3 row">
            <label for="name" class="col-sm-2 col-form-label">ID</label>
            <div class="col-sm-10">
            000{{$data->id}}
            </div>
        </div>
        <div class="mb-3 row">
            <label for="name" class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='name' value="{{$data->name}}" id="name">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="description" class="col-sm-2 col-form-label">Deskripsi</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='description' value="{{$data->description}}" id="description">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="types" class="col-sm-2 col-form-label"></label>
            <div class="col-sm-10"><button type="submit" class="btn btn-primary" name="submit">SIMPAN</button></div>
        </div>
    </div>
</form>
</div>
@include('layout.footer')