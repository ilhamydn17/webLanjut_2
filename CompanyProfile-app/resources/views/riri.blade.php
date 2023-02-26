@extends('layout.main')

@section('jumbotron')
    <div class="p-5 rounded"
        style="
            margin-top:124px;
            height:280px;
            background-image:url({{ asset("img/jumbotron/$img")  }});
            background-size:cover;
            background-repeat:no-repeat;
            background-position:0px -500px;
        ">

        <div class="container text-center mt-5" style="width:700px">
        <h1 class="fw-bolder" style="color: rgb(66, 66, 66)"> {{ $titleTron  }}  </h1>
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
        <img src="{{ asset('img/products/riri/bangau.jpg')  }}" class="card-img-top" alt="...">
        <div class="card-body text-center">
          <p>Bangau yang Angkuh</p>
        </div>
      </div>

      <div class="card mx-4 my-2  product" style="width: 14rem;">
        <img src="{{ asset('img/products/riri/kancil-buaya.jpg')  }}" class="card-img-top" alt="...">
        <div class="card-body text-center">
          <p>Kancil dan Buaya</p>
        </div>
      </div>

      <div class="card mx-4 my-2  product" style="width: 14rem;">
        <img src="{{ asset('img/products/riri/kancil-merak.jpg')  }}" class="card-img-top" alt="...">
        <div class="card-body text-center">
          <p>Kancil dan Burung Merak</p>
        </div>
      </div>

      <div class="card mx-4 my-2  product" style="width: 14rem;">
        <img src="{{ asset('img/products/riri/kancil-siput.jpg') }}" class="card-img-top" alt="...">
        <div class="card-body text-center">
          <p>Kancil dan Siput</p>
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
        <img src="{{ asset('img/products/riri/keledai.jpg')  }}" class="card-img-top" alt="...">
        <div class="card-body text-center">
          <p>Keledai yang Dungu</p>
        </div>
      </div>

      <div class="card mx-4 my-2 product" style="width: 14rem;">
        <img src="{{ asset('img/products/riri/kelelawar-cerdik.jpg')  }}" class="card-img-top" alt="...">
        <div class="card-body text-center">
          <p>Kelelawar dan Musang</p>
        </div>
      </div>

      <div class="card mx-4 my-2 product" style="width: 14rem;">
        <img src="{{ asset('img/products/riri/kerbau-kancil.jpg')  }}" class="card-img-top" alt="...">
        <div class="card-body text-center">
          <p>Kerbau, Kancil, dan Ular</p>
        </div>
      </div>

      <div class="card mx-4 my-2 product" style="width: 14rem;">
        <img src="{{ asset('img/products/riri/landak-ular.jpg')  }}" class="card-img-top" alt="...">
        <div class="card-body text-center">
          <p>Landak yang Tidak Tahu Berterima Kasih</p>
        </div>
      </div>
    </div>
  </div>
</div>

</div>
@endsection
