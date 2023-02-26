@extends('layout.main')

@section('jumbotron')
    <div class="p-5 rounded"
        style="
            margin-top:60px;
            background-size:cover;
            background-repeat:no-repeat;
            background-position:0px -300px;
        ">



    </div>
@endsection

@section('container')
<div class="container m-5">
    <h2>Judul Berita dengan ID {{ $idNews }} </h2>
</div>
@endsection
