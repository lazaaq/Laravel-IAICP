@extends('layouts.navbar-footer')

@section('judul')
HOME
@endsection

@section('css')
<link rel="stylesheet" href="css/index.css">
@endsection

@section('contents')
<section class="hero" id="home">
  <div class="image">
    <img src="img/logo/3.png" alt="Image" class="iaicp3">
    <img src="img/logo/1.png" alt="Image" class="iaicp1">
  </div>
  <div class="box">
    WELCOME TO IAICP
  </div>
</section>

<section class="bidang">
  <div class="b1">
    <div class="container">
      <div class="row">
        <div class="col head">
          <div class="line"></div>
          <div class="judul">BIDANG PENDIDIKAN</div>
        </div>
      </div>
      <div class="row mt-5 justify-content-center">
        @foreach ($pendidikan as $item)
        <div class="c c1 col-6 col-sm-4 col-md-3 col-lg-2">
          <div class="box">
            <div class="gambar">
              <img src="img/logo/dummy.jpg" alt="Picture">
            </div>
            <div class="deskripsi">
              <div class="text">{{ $item->fullname }}</div>
              <div class="text">Angkatan {{ $item->generation->number }}</div>
              @foreach ($item->universities as $university)
              <div class="text">Jurusan {{ $university->major }}</div>
              @endforeach
            </div>
            <div class="tombol">
              <a class="btn btn-outline-dark w-100" href="{{ config('APP_URL') . $item->username }}">Lihat Profil</a>
            </div>
          </div>
        </div>
        @endforeach
        
        <div class="c selengkapnya col-6 col-sm-4 col-md-3 col-lg-2">
          <a href="/bidang" class="box">
            <div class="text">
              <p>LIHAT</p>
              <p>SELENGKAPNYA</p>
              <p>-></p>
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>
  
  <div class="b2">
    <div class="container">
      <div class="row">
        <div class="col head">
          <div class="line"></div>
          <div class="judul">BIDANG KESEHATAN</div>
        </div>
      </div>
      <div class="row mt-5 justify-content-center">
        @foreach ($kesehatan as $item)
        <div class="c c1 col-6 col-sm-4 col-md-3 col-lg-2">
          <div class="box">
            <div class="gambar">
              <img src="img/logo/dummy.jpg" alt="Picture">
            </div>
            <div class="deskripsi">
              <div class="text">{{ $item->fullname }}</div>
              <div class="text">Angkatan {{ $item->generation->number }}</div>
              @foreach ($item->universities as $university)
              <div class="text">Jurusan {{ $university->major }}</div>
              @endforeach
            </div>
            <div class="tombol">
              <a class="btn btn-outline-dark w-100" href="{{ config('APP_URL') . $item->username }}">Lihat Profil</a>
            </div>
          </div>
        </div>
        @endforeach
        <div class="c selengkapnya col-6 col-sm-4 col-md-3 col-lg-2">
          <a href="/bidang" class="box">
            <div class="text">
              <p>LIHAT</p>
              <p>SELENGKAPNYA</p>
              <p>-></p>
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>
  
  <div class="b3">
    <div class="container">
      <div class="row">
        <div class="col head">
          <div class="line"></div>
          <div class="judul">BIDANG TEKNIK</div>
        </div>
      </div>
      <div class="row mt-5 justify-content-center">
        @foreach ($teknik as $item)
        <div class="c c1 col-6 col-sm-4 col-md-3 col-lg-2">
          <div class="box">
            <div class="gambar">
              <img src="img/logo/dummy.jpg" alt="Picture">
            </div>
            <div class="deskripsi">
              <div class="text">{{ $item->fullname }}</div>
              <div class="text">Angkatan {{ $item->generation->number }}</div>
              @foreach ($item->universities as $university)
              <div class="text">Jurusan {{ $university->major }}</div>
              @endforeach
            </div>
            <div class="tombol">
              <a class="btn btn-outline-dark w-100" href="{{ config('APP_URL') . $item->username }}">Lihat Profil</a>
            </div>
          </div>
        </div>
        @endforeach
        <div class="c selengkapnya col-6 col-sm-4 col-md-3 col-lg-2">
          <a href="/bidang" class="box">
            <div class="text">
              <p>LIHAT</p>
              <p>SELENGKAPNYA</p>
              <p>-></p>
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>
  
</section>

<section class="about">
  <div class="container">
    <div class="row head">
      <div class="col">
        <div class="judul">ABOUT US</div>
      </div>
    </div>
    <div class="row subhead">
      <div class="col">
        <div class="hr"></div>
      </div>
    </div>
    <div class="row body justify-content-center">
      <div class="col col-12 col-md-9">
        <div class="box">
          Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aliquam quae error optio perspiciatis temporibus totam, eos id mollitia quaerat inventore dolorem provident aspernatur vitae doloribus corrupti nostrum porro laborum obcaecati possimus rem laboriosam quam aperiam nihil consectetur. Eum nisi dolorem eveniet, nemo blanditiis similique nulla iure quidem maiores fuga beatae, harum enim hic. Commodi quidem, exercitationem quas, id repudiandae laudantium reiciendis soluta nobis voluptas cum, dicta beatae explicabo deleniti voluptatem ullam quia quo totam. Enim odio et excepturi quam, consectetur optio, qui vitae similique iste neque non voluptates earum cupiditate aliquid quasi vel dolore aperiam dignissimos voluptatum itaque fuga quas.
        </div>
      </div>
    </div>
  </div>
</section>

@endsection