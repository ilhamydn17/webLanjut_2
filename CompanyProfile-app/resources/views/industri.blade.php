@extends('layout.main')

@section('jumbotron')
    <div class="p-5 rounded"
        style="
            margin-top:124px;
            height:280px;
            background-image:url({{ asset("img/jumbotron/$img")  }});
            background-size:cover;
            background-repeat:no-repeat;
            background-position:0px -158px;
        ">

        <div class="container text-center mt-5" style="width:600px">
        <h1 class="fw-bolder p-2 bg-white" style="color: rgb(104, 104, 104)"> {{ $titleTron  }}  </h1>
        </div>

    </div>
@endsection

@section('container')
<div class="container">
    {{-- baris pertama --}}
    <div class="row">
        <div class="col text-center mt-5 mb-4">
            <h2 class="fw-bold text-warning">Manfaat Kunjungan Industri</h2>
            <p id="p-industri">Educa Studio sangat terbuka dalam menerima Kunjungan Industri dari SMK, LPK, maupun Perguruan Tinggi.    Di Kunjungan Industri<br> Educa Studio, para peserta akan memperoleh manfaat yang dapat dirasakan langsung dan nyata berupa:</p>
        </div>
    </div>

    {{-- baris kedua --}}
    <div class="row">
        <div class="col mb-5">
            <ul class="list-group list-group-flush" style="font-size:14px">
                <li class="list-group-item"><i class="fa-solid fa-circle-check me-1 text-warning"></i><span class="fw-bold">Seminar tentang perkembangan industri terbaru</span> terutama terkait dengan industri kreatif game, animasi, komik, dan IP <span class="fst-italic">(Intellectual Property)</span></li>
                <li class="list-group-item"><i class="fa-solid fa-circle-check me-1 text-warning"></i><span class="fw-bold">Motivasi</span> tentang potensi lapangan kerja maupun wirausaha di bidang kreatif</li>
                <li class="list-group-item"><i class="fa-solid fa-circle-check me-1 text-warning"></i><span class="fw-bold">Melihat langsung proses produksi</span> baik produk digital maupun produk merchandise dari Educa Studio</li>
                <li class="list-group-item"><i class="fa-solid fa-circle-check me-1 text-warning"></i><span class="fw-bold">Dapat bertanya secara langsung</span>, terkait dengan perkembangan industri, proses produksi, proses distribusi dan berbagai hal yang berhubungan <span style="margin-left:17px">dengan</span> industri kreatif</li>
                <li class="list-group-item"><i class="fa-solid fa-circle-check me-1 text-warning"></i><span class="fw-bold">Dapat mencoba langsung </span>produk-produk Educa Studio sebagai gambaran hasil jadi ( output ) industri kreatif</li>
              </ul>
        </div>
    </div>
</div>
@endsection
