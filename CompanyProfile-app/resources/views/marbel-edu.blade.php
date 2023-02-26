@extends('layout.main')

@section('jumbotron')
    <div class="p-5 rounded"
        style="
            margin-top:124px;
            height:280px;
            background-image:url({{ asset("img/jumbotron/$img")  }});
            background-size:cover;
            background-repeat:no-repeat;
            background-position:0px -150px;
        ">

        <div class="container text-center mt-5" style="width:600px">
        <h1 class="text-white fw-bolder text-warning"> {{ $titleTron  }}  </h1>
        </div>

    </div>
@endsection

@section('linkOS')
  @include('partials.coreLinkOS')
@endsection

@section('container')
{{-- row pertama --}}
<div class="row">
  <div class="col">
    <div class="d-flex justify-content-center">
      <div class="card mx-4 my-2 product" style="width: 14rem;">
        <img src="{{ asset('img/products/marbel-edu/marbel-edu-bing.png')  }}" class="card-img-top" alt="...">
        <div class="card-body text-center">
          <p>Marbel Belajar Bahasa Inggris</p>
        </div>
      </div>

      <div class="card mx-4 my-2  product" style="width: 14rem;">
        <img src="{{ asset('img/products/marbel-edu/marbel-edu-doaAnak.jpg')  }}" class="card-img-top" alt="...">
        <div class="card-body text-center">
          <p>Marbel Doa Anak Muslim</p>
        </div>
      </div>

      <div class="card mx-4 my-2  product" style="width: 14rem;">
        <img src="{{ asset('img/products/marbel-edu/marbel-edu-juzAmma.jpg')  }}" class="card-img-top" alt="...">
        <div class="card-body text-center">
          <p>Marbel Juz Amma</p>
        </div>
      </div>

      <div class="card mx-4 my-2  product" style="width: 14rem;">
        <img src="{{ asset('img/products/marbel-edu/marbel-edu-lakiPerempuan.png')  }}" class="card-img-top" alt="...">
        <div class="card-body text-center">
          <p>Marbel Laki dan Perempuan</p>
        </div>
      </div>
    </div>
  </div>
</div>

{{-- row kedua --}}
<div class="row mb-4">
  <div class="col">
    <div class="d-flex justify-content-center">

      <div class="card mx-4 my-2  product" style="width: 14rem;">
        <img src="{{ asset('img/products/marbel-edu/marbel-edu-piano.png')  }}" class="card-img-top" alt="...">
        <div class="card-body text-center">
          <p>Marbel Piano</p>
        </div>
      </div>

      <div class="card mx-4 my-2 product" style="width: 14rem;">
        <img src="{{ asset('img/products/marbel-edu/marbel-edu-premium.png')  }}" class="card-img-top" alt="...">
        <div class="card-body text-center">
          <p>Marbel Premium</p>
        </div>
      </div>

      <div class="card mx-4 my-2 product" style="width: 14rem;">
        <img src="{{ asset('img/products/marbel-edu/marbel-edu-tangram.png')  }}" class="card-img-top" alt="...">
        <div class="card-body text-center">
          <p>Marbel Tangram</p>
        </div>
      </div>

      <div class="card mx-4 my-2 product" style="width: 14rem;">
        <img src="{{ asset('img/products/marbel-edu/marbel-edu-teliti.png')  }}" class="card-img-top" alt="...">
        <div class="card-body text-center">
          <p>Marbel Teliti Mencari Perbedaan</p>
        </div>
      </div>
    </div>
  </div>
</div>

</div>
@endsection
