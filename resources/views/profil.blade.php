@extends('layouts.navbar-footer')

@section('judul')
PROFIL
@endsection

@section('css')
<link rel="stylesheet" href="css/profil.css">
@endsection

@section('contents')
<section class="contents">
    <div class="container">
        <div class="row">
            <div class="col judul">
                <div class="line"></div>
                <div class="text">PROFIL</div>
            </div>
        </div>
        <div class="row mb-5">
            <div class="col-6 gambar">
                <img src="img/logo/dummy.jpg" alt="Picture">
            </div>
            <div class="col-6 id">
                <form>
                    <div class="mb-3">
                        <input class="form-control" type="text" value="Username : Bla Bla Bla" disabled readonly>
                    </div>
                    <div class="mb-3">
                        <input class="form-control" type="text" value="Password : Bla Bla Bla" disabled readonly>
                    </div>
                    <button type="submit" class="btn btn-primary">Change</button>
                </form>
            </div>
        </div>
        <div class="row form">
            <div class="col-6 kiri">
                <form>
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama Lengkap</label>
                        <input type="text" class="form-control" id="nama" name="nama">
                    </div>
                    <div class="mb-3">
                        <label for="angkatan" class="form-label">Angkatan</label>
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Open this select menu</option>
                            <option value="1">Elysium Saars</option>
                            <option value="2">Fradella Elfareth</option>
                            <option value="3">La Scienza Guardie</option>
                            <option value="4">Estrellas De Quatro</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="bio" class="form-label">Bio Deskripsi</label>
                        <textarea class="form-control" id="bio" rows="3"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Save</button>
                </form>
            </div>
            <div class="col-6 kanan">
                <form>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">No. Whatsapp</label>
                        <input type="text" class="form-control" id="whatsapp" name="whatsapp">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Instagram</label>
                        <input type="text" class="form-control" id="instagram" name="instagram">
                    </div>
                </form>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-6 kiri">
                <div class="check">
                    <input type="checkbox" id="myCheck" onclick="checked1()">
                    <div class="berkuliah ms-3">
                        BERKULIAH
                    </div>
                </div>
                <div class="form">
                    <form>
                        <div class="mb-3">
                            <label for="text" class="form-label">Universitas</label>
                            <input type="text" class="form-control" id="universitas" name="universitas">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Bidang</label>
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Open this select menu</option>
                                <option value="1">Pendidikan</option>
                                <option value="2">Kesehatan</option>
                                <option value="3">Teknik</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="text" class="form-label">Fakultas</label>
                            <input type="text" class="form-control" id="fakultas" name="fakultas">
                        </div>
                        <div class="mb-3">
                            <label for="text" class="form-label">Prodi</label>
                            <input type="text" class="form-control" id="prodi" name="prodi">
                        </div>
                        <div class="mb-3">
                            <label for="text" class="form-label">Tahun Masuk Universitas</label>
                            <input type="text" class="form-control" id="tahun_masuk" name="tahun_masuk">
                        </div>
                        <div class="mb-3">
                            <label for="text" class="form-label">Tahun Lulus Universitas</label>
                            <input type="text" class="form-control" id="tahun_lulus" name="tahun_lulus">
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-6 kanan">
                <div class="check">
                    <input type="checkbox" id="myCheck" onclick="checked2()">
                    <div class="bekerja ms-3">
                        BEKERJA
                    </div>
                </div>
                <div class="form">
                    <form>
                        <div class="mb-3">
                            <label for="text" class="form-label">Universitas</label>
                            <input type="text" class="form-control" id="universitas" name="universitas">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Bidang</label>
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Open this select menu</option>
                                <option value="1">Pendidikan</option>
                                <option value="2">Kesehatan</option>
                                <option value="3">Teknik</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="text" class="form-label">Fakultas</label>
                            <input type="text" class="form-control" id="fakultas" name="fakultas">
                        </div>
                        <div class="mb-3">
                            <label for="text" class="form-label">Prodi</label>
                            <input type="text" class="form-control" id="prodi" name="prodi">
                        </div>
                        <div class="mb-3">
                            <label for="text" class="form-label">Tahun Masuk Universitas</label>
                            <input type="text" class="form-control" id="tahun_masuk" name="tahun_masuk">
                        </div>
                        <div class="mb-3">
                            <label for="text" class="form-label">Tahun Lulus Universitas</label>
                            <input type="text" class="form-control" id="tahun_lulus" name="tahun_lulus">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
