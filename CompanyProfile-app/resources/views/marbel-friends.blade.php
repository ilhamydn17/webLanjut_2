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
        <img src="{{ asset('img/products/marbel-friends/marbel-doctor.jpg')  }}" class="card-img-top" alt="...">
        <div class="card-body text-center">
          <p>Marbel Ear Doctor</p>
        </div>
      </div>

      <div class="card mx-4 my-2  product" style="width: 14rem;">
        <img src="{{ asset('img/products/marbel-friends/marbel-ear-pets.jpg')  }}" class="card-img-top" alt="...">
        <div class="card-body text-center">
          <p>Marbel Ear Doctor For Pets </p>
        </div>
      </div>

      <div class="card mx-4 my-2  product" style="width: 14rem;">
        <img src="{{ asset('img/products/marbel-friends/marbel-eyes.jpg')  }}" class="card-img-top" alt="...">
        <div class="card-body text-center">
          <p>Marbel Eye Center</p>
        </div>
      </div>

      <div class="card mx-4 my-2  product" style="width: 14rem;">
        <img src="{{ asset('img/products/marbel-friends/marbel-fun-vegetable.jpg') }}" class="card-img-top" alt="...">
        <div class="card-body text-center">
          <p>Marbel Fun Vegetable And Fruits</p>
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
        <img src="{{ asset('img/products/marbel-friends/marbel-number.jpg')  }}" class="card-img-top" alt="...">
        <div class="card-body text-center">
          <p>Marbel Fun Number</p>
        </div>
      </div>

      <div class="card mx-4 my-2 product" style="width: 14rem;">
        <img src="{{ asset('img/products/marbel-friends/marbel-penyelamat.png')  }}" class="card-img-top" alt="...">
        <div class="card-body text-center">
          <p>Marbel Penyelamat Hewan</p>
        </div>
      </div>

      <div class="card mx-4 my-2 product" style="width: 14rem;">
        <img src="{{ asset('img/products/marbel-friends/marbel-peternakan.png')  }}" class="card-img-top" alt="...">
        <div class="card-body text-center">
          <p>Marbel Peternakan</p>
        </div>
      </div>

      <div class="card mx-4 my-2 product" style="width: 14rem;">
        <img src="{{ asset('img/products/marbel-friends/marbel-polisi.png')  }}" class="card-img-top" alt="...">
        <div class="card-body text-center">
          <p>Marbel Polisi</p>
        </div>
      </div>
    </div>
  </div>
</div>

</div>
@endsection
