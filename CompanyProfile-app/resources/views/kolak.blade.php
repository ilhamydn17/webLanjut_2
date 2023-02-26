@extends('layout.main')

@section('jumbotron')
    <div class="p-5 rounded"
        style="
            margin-top:124px;
            height:280px;
            background-image:url({{ asset("img/jumbotron/$img")  }});
            background-size:cover;
            background-repeat:no-repeat;
            background-position:0px -210px;
        ">

        <div class="container text-center mt-5" style="width:700px">
        <h1 class="fw-bolder" style="color: rgb(88, 125, 227)"> {{ $titleTron  }}  </h1>
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
        <img src="{{ asset('img/products/kolak/alfabet.jpg')  }}" class="card-img-top" alt="...">
        <div class="card-body text-center">
          <p>Kids Song Alphabet</p>
        </div>
      </div>

      <div class="card mx-4 my-2  product" style="width: 14rem;">
        <img src="{{ asset('img/products/kolak/boat.jpg')  }}" class="card-img-top" alt="...">
        <div class="card-body text-center">
          <p>Kids Song Alphabet</p>
        </div>
      </div>

      <div class="card mx-4 my-2  product" style="width: 14rem;">
        <img src="{{ asset('img/products/kolak/bus.jpg')  }}" class="card-img-top" alt="...">
        <div class="card-body text-center">
          <p>Kids Song Row Your Boat</p>
        </div>
      </div>

      <div class="card mx-4 my-2  product" style="width: 14rem;">
        <img src="{{ asset('img/products/kolak/gosok-gigi.jpg') }}" class="card-img-top" alt="...">
        <div class="card-body text-center">
          <p>Lagu Anak Gosok Gigi</p>
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
        <img src="{{ asset('img/products/kolak/kak-zepe.jpg')  }}" class="card-img-top" alt="...">
        <div class="card-body text-center">
          <p>Lagu Anak Kak Zepe</p>
        </div>
      </div>

      <div class="card mx-4 my-2 product" style="width: 14rem;">
        <img src="{{ asset('img/products/kolak/little-dog.jpg')  }}" class="card-img-top" alt="...">
        <div class="card-body text-center">
          <p>Kids Song Where My Little Dog</p>
        </div>
      </div>

      <div class="card mx-4 my-2 product" style="width: 14rem;">
        <img src="{{ asset('img/products/kolak/mcdonald.jpg')  }}" class="card-img-top" alt="...">
        <div class="card-body text-center">
          <p>Kids Song Old Mc Donald</p>
        </div>
      </div>

      <div class="card mx-4 my-2 product" style="width: 14rem;">
        <img src="{{ asset('img/products/kolak/twinkle.jpg')  }}" class="card-img-top" alt="...">
        <div class="card-body text-center">
          <p>Kids Song Twinkle Little Star</p>
        </div>
      </div>
    </div>
  </div>
</div>

</div>
@endsection
