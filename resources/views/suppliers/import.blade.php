@include('layout.header')
@include('layout.navbar')
@include('layout.sidebar')
<div class="content-wrapper">
    <div class="container-fluid">
        <form action="{{}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="card-body">
            <div>
                <label for="exampleInputEmail1">file</label>
                <input type="file" class="form-control" name="file" id="suppliers">
                @error('file')
                    <small>{{$message}}</small>
                @enderror
            </div>
        </div>
       </form>
    </div>
</div>
@include('layout.footer')