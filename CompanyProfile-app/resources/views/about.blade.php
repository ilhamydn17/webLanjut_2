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

        <div class="container text-center mt-5" style="width:400px">
        <h1 class="fw-bolder p-2 bg-white" style="color: rgb(104, 104, 104)"> {{ $titleTron  }}  </h1>
        </div>

    </div>
@endsection

@section('container')
<div class="row mt-5">
    <div class="col text-center text-warning">
        <h1 class="fw-bold">Sejarah Educa Studio</h1>
    </div>
</div>

<div class="row">
    <div class="col text-center">
        <img src="{{ asset('img/history.png')  }}" alt="">
    </div>
</div>

<div class="row mb-4">
    <div class="col">
        <div class="container">
            <p>It was started by two PC game products, they were Marbel and Shoot Empire (as the first winner of Game Competition 2008). Later on, the founder decided to take it more professional by establishing Educa Studio on 1st April 2012. At that moment, we only focused on Edu PC Games. Later, in 2012, we plunged into Mobile Apps and Games. In 2013, we expanded into broader mobile platforms such as Windows Phone and Apple Store (iOS). We have a lot of sucessul IP such as Marbel for Educational Games for Kids, Riri for Interactive Story Books, Kabi for Moslem Kids, Kolak for Interactive Kids Song. In 2017, its amazing year we have a lot of platform to build quality content and expanding our company into merchandising, board games, interactive animation and teacher platform.</p>
        </div>
    </div>
</div>
@endsection
