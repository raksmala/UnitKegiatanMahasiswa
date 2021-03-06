@extends('layouts.user.app')
@section('contentTop')
<div data-aos="fade-right" data-aos-duration="1000" style="color: #ffffff; text-align: center; margin-top: 12rem;">
    <div class="container">
        <div class="col-md-12 col-sm-12 px-0 mx-0">
            <h3 class="display-3">Registrasi UKM</h3>
        </div>
    </div>
</div>
@endsection
@section('content')
<div class="page-content">
  <div>
    <div class="da-section bg-secondary">
      <div class="container">
        <div class="row">
            <div class="col-lg-6" style="margin: auto;">
                <div class="card-body">
                    <h4 class="m-t-0 header-title text-center" style="margin-bottom: 3rem;"><b>Form Registrasi</b></h4>

                    <div class="col-md-8" style="margin: auto;">
                        <form action="/daftar/tambah" method="post" role="form" autocomplete="off">
                        {{ csrf_field() }}
                            <div class="form-group">
                                <label for="ukm">Unit Kegiatan Mahasiswa</label>
                                <select class="form-control" id="idUKM" name="idUKM">
                                    @foreach($ukm as $data)
                                    <option value="{{ $data->idUKM }}">{{ $data->namaUKM }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="nim">NIM</label>
                                <input type="text" id="NIM" name="NIM" class="form-control" value="{{ Auth::guard('mahasiswa')->user()->NIM }}">
                            </div>
                            <div class="form-group">
                                <label for="nama">Nama</label>
                                <input type="text" id="namaMahasiswa" name="namaMahasiswa" class="form-control" value="{{ Auth::guard('mahasiswa')->user()->name }}">
                            </div>
                            <div class="form-group">
                                <label for="prodi">Program Studi</label>
                                <input type="text" id="programStudi" name="programStudi" class="form-control" value="{{ Auth::guard('mahasiswa')->user()->programStudi }}">
                            </div>

                            <div class="form-group text-right m-b-0">
                                <button type="submit" class="btn btn-primary waves-effect waves-light">Kirim</button>
                                <button type="reset" class="btn btn-default waves-effect waves-light m-l-5">Batal</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection