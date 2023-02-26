@extends('layout.main')

@section('jumbotron')
    <div class="p-5 rounded"
        style="
            margin-top:124px;
            height:280px;
            background-image:url({{ asset("img/jumbotron/$img")  }});
            background-size:cover;
            background-repeat:no-repeat;
            background-position:0px -300px;
        ">

        <div class="container text-center mt-5" style="width:200px">
        <h1 class="fw-bolder p-2 bg-white" style="color: rgb(104, 104, 104)"> {{ $titleTron  }}  </h1>
        </div>

    </div>
@endsection

@section('container')

{{-- row input --}}
<div class="row my-4">
    <div class="col">
        <div class="input-group container">
            <input type="text" class="form-control" aria-label="Dollar amount (with dot and two decimal places)" placeholder="cari berita yang ingin anda baca disini">
            <button class="btn btn-outline-secondary bg-warning" type="button" id="button-addon2">Cari</button>
          </div>
    </div>
</div>

{{-- row pertama --}}
<div class="row">
  <div class="col">
    <div class="d-flex flex-wrap justify-content-center">

      <div class="card mx-4 my-4  product" style="width: 22em;">
        <img src="{{ asset('img/programs/karir/php-engineer.png')  }}" class="card-img-top" alt="...">
        <div class="card-body">
            <a href="/news/1" class="text-decoration-none text-warning"><p class="fs-5">Berita 1</p></a>
            <p>23 Oktober 2021 | by author</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi, repellat.</p>
        </div>
      </div>

      <div class="card mx-4 my-4  product" style="width: 22em;">
        <img src="{{ asset('img/programs/karir/php-programer.png')  }}" class="card-img-top" alt="...">
        <div class="card-body">
            <a href="/news/2" class="text-decoration-none text-warning"><p class="fs-5">Berita 2</p></a>
            <p>23 Oktober 2021 | by author</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi, repellat.</p>
        </div>
      </div>

      <div class="card mx-4 my-4  product" style="width: 22em;">
        <img src="{{ asset('img/programs/karir/bisnis-develop.png') }}" class="card-img-top" alt="...">
        <div class="card-body">
            <a href="/news/3" class="text-decoration-none text-warning"><p class="fs-5">Berita 3</p></a>
            <p>23 Oktober 2021 | by author</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi, repellat.</p>
        </div>
      </div>
      <div class="card mx-4 my-4  product" style="width: 22em;">
        <img src="{{ asset('img/programs/karir/b2b.png') }}" class="card-img-top" alt="...">
        <div class="card-body">
            <a href="/news/4" class="text-decoration-none text-warning"><p class="fs-5">Berita 4</p></a>
            <p>23 Oktober 2021 | by author</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi, repellat.</p>
        </div>
      </div>

      <div class="card mx-4 my-4  product" style="width: 22em;">
        <img src="{{ asset('img/programs/karir/kurikulum.png') }}" class="card-img-top" alt="...">
        <div class="card-body">
            <a href="/news/5" class="text-decoration-none text-warning"><p class="fs-5">Berita 5</p></a>
            <p>23 Oktober 2021 | by author</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi, repellat.</p>
        </div>
      </div>

      <div class="card mx-4 my-4  product" style="width: 22em;">
        <img src="{{ asset('img/programs/karir/uiux.png') }}" class="card-img-top" alt="...">
        <div class="card-body">
            <a href="/news/6" class="text-decoration-none text-warning"><p class="fs-5">Berita 6</p></a>
            <p>23 Oktober 2021 | by author</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi, repellat.</p>
        </div>
      </div>

     </div>
    </div>
</div>

<div class="row my-5">
    <div class="col">
        <div class="container text-center">
            <a id="lamarLink" href="" class="p-1">Tampilkan lebih banyak</a>
        </div>
    </div>
</div>


@endsection
