@extends('layout.main')

@section('jumbotron')

<div class="p-5 rounded"
  style="
        margin-top:124px;
        height:300px;
        background-image:url( {{ asset('img/jumbotron/jumbotron-img.jpg')  }}  );
        background-size:cover;
        background-repeat:no-repeat;
        background-position:0px -150px;
  ">

  <div class="container text-center mt-5" style="width:500px">
    <h1>Learning is Fun!</h1>
    <p class="btn btn-primary mt-1">Pelajari lebih lanjut</p>
  </div>

</div>

@endsection

@section('container')
{{-- row container --}}
<div class="row mt-4 text-center">
  <div class="col">
    <div class="container">
      <h2 class="text-warning fw-bolder">Mari belajar sambil bermain</h2>
      <p class="fw-bolder" style="font-size:14px; color:rgb(104, 104, 104)">Brand-brand Educa Studio untuk pertumbuhan dan perkembangan anak</p>
    </div>
  </div>
</div>

{{-- row container --}}
<div class="row mb-5">
  <div class="col">

    <div class="row">
      <div class="col">

        <div class="d-flex justify-content-evenly">
          <div class="card mt-4 shadow" style="width: 22rem;">
              <img src="img/sub-cover/marbel-edu.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h6 class="card-title">Marble - Education Games</h6>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro repudiandae fugit voluptate accusantium iure similique earum, tenetur modi eligendi numquam.</p>
              </div>
          </div>

          <div class="card mt-4 shadow" style="width: 22rem;">
              <img src="img/sub-cover/marbel-friends.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h6 class="card-title">Marbel & Friends - Kids Games</h6>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro repudiandae fugit voluptate accusantium iure similique earum, tenetur modi eligendi numquam.</p>
              </div>
          </div>

          <div class="card mt-4 shadow" style="width: 22rem;">
              <img src="img/sub-cover/riri-story.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h6 class="card-title">Riri - Story Books & Animations</h6>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro repudiandae fugit voluptate accusantium iure similique earum, tenetur modi eligendi numquam.</p>
              </div>
          </div>

        </div>
      </div>
    </div>
    <div class="row">
      <div class="col">

        <div class="d-flex justify-content-evenly">

          <div class="card mt-4 shadow" style="width: 22rem;">
            <img src="img/sub-cover/kolak.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h6 class="card-title">Kolak - Kids Song</h6>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro repudiandae fugit voluptate accusantium iure similique earum, tenetur modi eligendi numquam.</p>
            </div>
          </div>

          <div class="card mt-4 shadow" style="width: 22rem;">
            <img src="img/sub-cover/islamic-edu.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h6 class="card-title">Kabi - Islamic Education</h6>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro repudiandae fugit voluptate accusantium iure similique earum, tenetur modi eligendi numquam.</p>
            </div>
          </div>

          <div class="card mt-4 shadow" style="width: 22rem;">
            <img src="img/sub-cover/marbel-junior.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h6 class="card-title">Marbel Junior - Official Merchandise</h6>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro repudiandae fugit voluptate accusantium iure similique earum, tenetur modi eligendi numquam.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
