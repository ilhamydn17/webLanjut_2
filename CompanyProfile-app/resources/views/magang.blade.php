@extends('layout.main')

@section('jumbotron')
    <div class="p-5 rounded"
        style="
            margin-top:124px;
            height:280px;
            background-image:url({{ asset("img/jumbotron/$img")  }});
            background-size:cover;
            background-repeat:no-repeat;
            background-position:0px -190px;
        ">

        <div class="container text-center mt-5" style="width:300px">
        <h1 class="fw-bolder p-2 bg-white" style="color: rgb(104, 104, 104)"> {{ $titleTron  }}  </h1>
        </div>

    </div>
@endsection

@section('container')

{{-- row pertama --}}
<div class="row mt-4">
  <div class="col">
    <div class="d-flex flex-wrap justify-content-center">

      <div class="card mx-4 my-4  product" style="width: 22em;">
        <img src="{{ asset('img/programs/karir/php-engineer.png')  }}" class="card-img-top" alt="...">
        <div class="card-body">
          <p>Senior PHP Engineer</p>
          <ul class="list-group list-group-flush">
            <li class="list-group-item"><i class="fa-solid fa-bag-shopping me-1"></i>Internship</li>
            <li class="list-group-item"><i class="fa-solid fa-user me-1"></i>Siswa SMK, Mahasiswa</li>
            <li class="list-group-item"><i class="fa-solid fa-location-dot me-1"></i>Online</li>
          </ul>
          <a id="lamarLink" href="" class="p-1 text-center">Daftar Magang</a>
        </div>
      </div>

      <div class="card mx-4 my-4  product" style="width: 22em;">
        <img src="{{ asset('img/programs/karir/php-programer.png')  }}" class="card-img-top" alt="...">
        <div class="card-body">
          <p>Fullstack PHP Programmer</p>
          <ul class="list-group list-group-flush">
            <li class="list-group-item"><i class="fa-solid fa-bag-shopping me-1"></i>Internship</li>
            <li class="list-group-item"><i class="fa-solid fa-user me-1"></i>Siswa SMK, Mahasiswa</li>
            <li class="list-group-item"><i class="fa-solid fa-location-dot me-1"></i>Online</li>
          </ul>
          <a id="lamarLink" href="" class="p-1 text-center">Daftar Magang</a>
        </div>
      </div>

      <div class="card mx-4 my-4  product" style="width: 22em;">
        <img src="{{ asset('img/programs/karir/bisnis-develop.png') }}" class="card-img-top" alt="...">
        <div class="card-body">
          <p>Bussiness Development Government Relation</p>
          <ul class="list-group list-group-flush">
            <li class="list-group-item"><i class="fa-solid fa-bag-shopping me-1"></i>Internship</li>
            <li class="list-group-item"><i class="fa-solid fa-user me-1"></i>Siswa SMK, Mahasiswa</li>
            <li class="list-group-item"><i class="fa-solid fa-location-dot me-1"></i>Online</li>
          </ul>
          <a id="lamarLink" href="" class="p-1 text-center">Daftar Magang</a>
        </div>
      </div>
      <div class="card mx-4 my-4  product" style="width: 22em;">
        <img src="{{ asset('img/programs/karir/b2b.png') }}" class="card-img-top" alt="...">
        <div class="card-body">
          <p>Bussiness Development B2B</p>
          <ul class="list-group list-group-flush">
            <li class="list-group-item"><i class="fa-solid fa-bag-shopping me-1"></i>Internship</li>
            <li class="list-group-item"><i class="fa-solid fa-user me-1"></i>Siswa SMK, Mahasiswa</li>
            <li class="list-group-item"><i class="fa-solid fa-location-dot me-1"></i>Online</li>
          </ul>
          <a id="lamarLink" href="" class="p-1 text-center">Daftar Magang</a>
        </div>
      </div>

      <div class="card mx-4 my-4  product" style="width: 22em;">
        <img src="{{ asset('img/programs/karir/kurikulum.png') }}" class="card-img-top" alt="...">
        <div class="card-body">
          <p>Pengembangan Kurikulum dan Program</p>
          <ul class="list-group list-group-flush">
            <li class="list-group-item"><i class="fa-solid fa-bag-shopping me-1"></i>Internship</li>
            <li class="list-group-item"><i class="fa-solid fa-user me-1"></i>Siswa SMK, Mahasiswa</li>
            <li class="list-group-item"><i class="fa-solid fa-location-dot me-1"></i>Online</li>
          </ul>
          <a id="lamarLink" href="" class="p-1 text-center">Daftar Magang</a>
        </div>
      </div>

      <div class="card mx-4 my-4  product" style="width: 22em;">
        <img src="{{ asset('img/programs/karir/uiux.png') }}" class="card-img-top" alt="...">
        <div class="card-body">
          <p>UI/UX Designer</p>
          <ul class="list-group list-group-flush">
            <li class="list-group-item"><i class="fa-solid fa-bag-shopping me-1"></i>Internship</li>
            <li class="list-group-item"><i class="fa-solid fa-user me-1"></i>Siswa SMK, Mahasiswa</li>
            <li class="list-group-item"><i class="fa-solid fa-location-dot me-1"></i>Online</li>
          </ul>
          <a id="lamarLink" href="" class="p-1 text-center">Daftar Magang</a>
        </div>
      </div>

     </div>
    </div>
</div>
<div class="row my-5">
    <div class="col">
        <div class="container text-center">
            <a id="lamarLink" href="" class="p-1 text-center">Tampilkan lebih banyak</a>
        </div>
    </div>
</div>


@endsection
