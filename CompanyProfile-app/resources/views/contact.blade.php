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

        <div class="container text-center mt-5" style="width:300px">
        <h1 class="fw-bolder p-2 bg-white" style="color: rgb(104, 104, 104)"> {{ $titleTron  }}  </h1>
        </div>

    </div>
@endsection

@section('container')

    <div class="container my-5 shadow">
        <div class="row">
            <div class="col-6 p-3">
                <div class="container ms-3 d-flex flex-column mb-3">
                    <div class="p-2">
                        <i class="fa-sharp fa-solid fa-map-pin me-3"></i>
                        <span style="margin-left:6px" class="text-warning fw-bold">Alamat</span>
                        <p style="margin-left:37px">Jl. Gilingrejo No. 10 Salatiga, Jawa Tengah 50743</p>
                    </div>
                    <div class="p-2">
                        <i class="fa-solid fa-envelope me-3"></i>
                        <span class="text-warning fw-bold">Email</span>
                        <p style="margin-left:37px"><a href="mailto:cs@educastudio.com" class="text-decoration-none">cs@educastudio.com</a></p>
                    </div>
                    <div class="p-2">
                        <i class="fa-solid fa-phone me-3"></i>
                        <span class="text-warning fw-bold">Telepon</span>
                        <p style="margin-left:37px">(+62) 298 6031005</p>
                    </div>
                    <div class="p-2">
                        <i class="fa-brands fa-whatsapp me-3"></i>
                        <span class="text-warning fw-bold">Whatsapp</span>
                        <p style="margin-left:37px"><a href="https://api.whatsapp.com/send/?phone=081217782075&text&type=phone_number&app_absent=0" class="text-decoration-none">0812-1778-2075</a></p>
                    </div>
                </div>
            </div>
            <div class="col-6 p-3">
                <div class="mapouter p-2 border rounded shadow" style="margin-left:100px; width:350px; height:300px">
                    <div class="gmap_canvas">
                        <iframe width="100%" height="100%" id="gmap_canvas" src="https://maps.google.com/maps?q=malang&t=&z=13&ie=UTF8& iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
                        </iframe>
                        <br>
                        <style>.mapouter{position:relative;text-align:right;height:100%;width:100%;}</style>
                        <style>.gmap_canvas {overflow:hidden;background:none!important;height:100%;width:100%;}</style>
                    </div>
                </div>
            </div>
        </div>
    </div>





@endsection
