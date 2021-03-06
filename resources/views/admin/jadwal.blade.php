@extends('layouts.admin.app')
@section('content')
<!-- Page-Title -->
<div class="row">
    <div class="col-sm-12">
        <h4 class="page-title">Jadwal</h4>
        <p class="text-muted page-title-alt">Jadwal UKM {{ Auth()->user()->name }}</p>
    </div>
</div>

<div class="col-lg-12">
    <div class="card-box table-responsive">
        <div style="width: 100%; text-align: right; margin-bottom: 10px;">
            <a href="#" class="on-default edit-row btn btn-success" data-toggle="modal" data-target="#tambah-modal"><i class="fa fa-plus"></i></a>
        </div>

        <table id="datatable" class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Kegiatan</th>
                    <th>Tanggal</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($jadwal as $data)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $data->namaKegiatan }}</td>
                    <td>{{ $data->tanggalAwal }} s/d {{ $data->tanggalAkhir }}</td>
                    <td><a href='#' class='on-default edit-row btn btn-primary' data-toggle="modal" data-target="#edit-modal" onclick="setEditForm('{{ $data->idJadwal }}', '{{ $data->namaKegiatan }}', '{{ $data->tanggalAwal }}', '{{ $data->tanggalAkhir }}', '{{ $data->lokasiKegiatanProker }}', '{{ $data->sasaranKegiatanProker }}', '{{ $data->tuKegiatanProker }}', '{{ $data->pjKegiatanProker }}', '{{ $data->keteranganKegiatanProker }}')"><i class='fa fa-pencil'></i></a>
                        <a href='#' class='on-default delete-row btn btn-danger delete-jadwal' idJadwal="{{ $data->idJadwal }}" namaKegiatan="{{ $data->namaKegiatan }}"><i class='fa fa-trash'></i></a>
                    </td>
                </tr>  
                @endforeach               
            </tbody>
        </table>
    </div>
</div>

<div id="tambah-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">Data Kegiatan</h4>
            </div>
            <form action="/admin/jadwal/tambah" method="post" role="form" autocomplete="off">
            {{ csrf_field() }}
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="control-label">Nama Kegiatan</label>
                                <input type="text" class="form-control" id="namaKegiatan" name="namaKegiatan">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="control-label">Tanggal</label>
                                <div class="input-daterange input-group" id="date-range" name="tanggalKegiatan" required>
                                    <input type="text" class="form-control" id="start" name="tanggalAwal">
                                    <span class="input-group-addon bg-custom b-0 text-white">to</span>
                                    <input type="text" class="form-control" id="end" name="tanggalAkhir">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-info waves-effect waves-light">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div><!-- /.modal -->

<div id="edit-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">Data Kegiatan</h4>
            </div>
            <form action="/admin/jadwal/update" method="post" role="form" autocomplete="off">
            {{ csrf_field() }}
            {{ method_field('PUT') }}
            <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="hidden" id="editIdJadwal" name="editIdJadwal">
                                <label class="control-label">Nama Kegiatan</label>
                                <input type="text" class="form-control" id="editNamaKegiatan" name="editNamaKegiatan">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="control-label">Tanggal</label>
                                <div class="input-daterange input-group datepick" id="editTanggalKegiatan" name="editTanggalKegiatan" required>
                                    <input type="text" class="form-control" id="editTanggalAwal" name="editTanggalAwal">
                                    <span class="input-group-addon bg-custom b-0 text-white">to</span>
                                    <input type="text" class="form-control" id="editTanggalAkhir" name="editTanggalAkhir">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-info waves-effect waves-light">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div><!-- /.modal -->
@endsection
@section('scripts')
<script type="text/javascript">
    function setEditForm(idJadwal, namaKegiatan, tanggalAwal, tanggalAkhir) {
        document.getElementById('editIdJadwal').value = idJadwal;
        document.getElementById('editNamaKegiatan').value = namaKegiatan;
        var tanggalAwal = tanggalAwal.split("-");
        document.getElementById('editTanggalAwal').value = tanggalAwal[1]+ "/" +tanggalAwal[2]+ "/" +tanggalAwal[0];
        var tanggalAkhir = tanggalAkhir.split("-");
        document.getElementById('editTanggalAkhir').value = tanggalAkhir[1]+ "/" +tanggalAkhir[2]+ "/" +tanggalAkhir[0];
    }
    
    $('.datepick').each(function() {
        $(this).datepicker();
    });
    
    $('.delete-jadwal').click(function(){
        var idJadwal = $(this).attr('idJadwal');
        var namaKegiatan = $(this).attr('namaKegiatan');
        swal({
            title: "Yakin ?",
            text: "Menghapus Data Jadwal " +namaKegiatan+ " ?",
            icon: "error",
            buttons: ["Batal", "Hapus"],
            dangerMode: true,
        })
        .then((willDelete) => {
            if (willDelete) {
                window.location = "/admin/jadwal/hapus/" + idJadwal;
            }
        });
        event.preventDefault();
    });
</script>
@endsection