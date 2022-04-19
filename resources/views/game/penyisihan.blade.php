@extends('layout.app')
@extends('layout.header')
@extends('layout.sidenav')

@section('content')
    <div class="page-content-wrapper py-3">
        <div class="container">        
            <div class="card">
                <div class="card-header p-3">
                    <div class="row">
                        <div class="col-6">
                            <h5 class="ps-2">Game</h5>
                        </div>
                        <div class="col-6 text-sm-right">
                            <button id="score" class="btn m-1 btn-creative btn-info" type="button" data-bs-toggle="modal" data-bs-target="#modal_score">Score</button>
                            <button id="finish" class="btn m-1 btn-creative btn-warning" type="button" data-bs-toggle="modal" data-bs-target="#konfirm_finish">Finish</button>
                        </div>
                        <div class="modal fade" id="modal_score" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h6 class="modal-title" id="modalscore">Score</h6>
                                        <button class="btn btn-close p-1 ms-auto" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="#" id="form_score">
                                            <p class="mb-0">Score</p>
                                            <table class="w-100" id="table_score">
                                                <thead>
                                                    <tr>
                                                        <th>Nama Team</th>
                                                        <th>Asal Masjid</th>
                                                        <th>Score</th>
                                                    </tr>
                                                </thead>
                                            </table>
                                            <div class="modal-footer">
                                                <button class="btn btn-sm btn-secondary" type="button" data-bs-dismiss="modal">Keluar</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal fade" id="konfirm_finish" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h6 class="modal-title" id="konfirmfinish">Konfirmasi</h6>
                                        <button class="btn btn-close p-1 ms-auto" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="#" id="form_finish">
                                            <p class="mb-0">Anda akan menyelesaikan permainan. Apakah anda ingin menyelesaikan?.</p>
                                            <div class="modal-footer">
                                                <button class="btn btn-sm btn-secondary" type="button" data-bs-dismiss="modal">Cancel</button>
                                                <button class="btn btn-sm btn-success" type="submit">Setuju</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal fade" id="pilih_team" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h6 class="modal-title" id="pilihteam">Pilih Team</h6>
                                        <button class="btn btn-close p-1 ms-auto" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="#" id="form_pilih">
                                            <p class="mb-0">Pilih team yang akan menjawab : </p>
                                            <button id="teamA" class="btn m-1 btn-creative btn-success" type="button" data-bs-toggle="modal" data-bs-target="#modal_soal">A</button>
                                            <button id="team" class="btn btn-sm btn-success" type="submit">A</button>
                                            <button id="teamB" class="btn btn-sm btn-success" type="submit">B</button>
                                            <button id="teamC" class="btn btn-sm btn-success" type="submit">C</button>
                                            <div class="modal-footer">
                                                <button class="btn btn-sm btn-secondary" type="button" data-bs-dismiss="modal">Cancel</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal fade" id="modal_soal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h6 class="modal-title" id="modalsoal">ID Soal : {DB}</h6>
                                        <button class="btn btn-close p-1 ms-auto" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="#" id="form_soal">
                                            <p class="mb-0">Soal : {DB}</p>
                                            <p class="mb-0">Timer : XXX </p>
                                            <button id="benar" class="btn m-1 btn-creative btn-success" type="button" data-bs-toggle="modal" data-bs-target="#modal_benar">Benar</button>
                                            <button id="salah" class="btn m-1 btn-creative btn-warning" type="button" data-bs-toggle="modal" data-bs-target="#modal_salah">Salah</button>
                                            <div class="modal-footer">
                                                <button class="btn btn-sm btn-secondary" type="button" data-bs-dismiss="modal">Cancel</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal fade" id="modal_benar" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h6 class="modal-title" id="modalbenar">Alert</h6>
                                        <button class="btn btn-close p-1 ms-auto" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="#" id="form_benar">
                                            <p class="mb-0">BENAR </p>
                                            <div class="modal-footer">
                                                <button class="btn btn-sm btn-secondary" type="button" data-bs-dismiss="modal">Cancel</button>
                                                <button class="btn btn-sm btn-success" type="submit">OK</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal fade" id="modal_salah" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h6 class="modal-title" id="modalsalah">Alert</h6>
                                        <button class="btn btn-close p-1 ms-auto" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="#" id="form_salah">
                                            <p class="mb-0">SALAH </p>
                                            <div class="modal-footer">
                                                <button class="btn btn-sm btn-secondary" type="button" data-bs-dismiss="modal">Cancel</button>
                                                <button class="btn btn-sm btn-success" type="submit">OK</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>    
                </div>
                <div class="card-body p-3">
                    <div class="row">
                        <div class="col-2">
                            <button id="pindah" class="btn m-1 btn-creative btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#pilih_team">1</button>
                        </div>
                        <div class="col-2">
                            <button id="pindah" class="btn m-1 btn-creative btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#konfirm_pindah">2</button>
                        </div>
                        <div class="col-2">
                            <button id="pindah" class="btn m-1 btn-creative btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#konfirm_pindah">3</button>
                        </div>
                        <div class="col-2">
                            <button id="pindah" class="btn m-1 btn-creative btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#konfirm_pindah">4</button>
                        </div>
                        <div class="col-2">
                            <button id="pindah" class="btn m-1 btn-creative btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#konfirm_pindah">5</button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-2">
                            <button id="pindah" class="btn m-1 btn-creative btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#konfirm_pindah">6</button>
                        </div>
                        <div class="col-2">
                            <button id="pindah" class="btn m-1 btn-creative btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#konfirm_pindah">7</button>
                        </div>
                        <div class="col-2">
                            <button id="pindah" class="btn m-1 btn-creative btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#konfirm_pindah">8</button>
                        </div>
                        <div class="col-2">
                            <button id="pindah" class="btn m-1 btn-creative btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#konfirm_pindah">9</button>
                        </div>
                        <div class="col-2">
                            <button id="pindah" class="btn m-1 btn-creative btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#konfirm_pindah">10</button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-2">
                            <button id="pindah" class="btn m-1 btn-creative btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#konfirm_pindah">11</button>
                        </div>
                        <div class="col-2">
                            <button id="pindah" class="btn m-1 btn-creative btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#konfirm_pindah">12</button>
                        </div>
                        <div class="col-2">
                            <button id="pindah" class="btn m-1 btn-creative btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#konfirm_pindah">13</button>
                        </div>
                        <div class="col-2">
                            <button id="pindah" class="btn m-1 btn-creative btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#konfirm_pindah">14</button>
                        </div>
                        <div class="col-2">
                            <button id="pindah" class="btn m-1 btn-creative btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#konfirm_pindah">15</button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-2">
                            <button id="pindah" class="btn m-1 btn-creative btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#konfirm_pindah">16</button>
                        </div>
                        <div class="col-2">
                            <button id="pindah" class="btn m-1 btn-creative btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#konfirm_pindah">17</button>
                        </div>
                        <div class="col-2">
                            <button id="pindah" class="btn m-1 btn-creative btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#konfirm_pindah">18</button>
                        </div>
                        <div class="col-2">
                            <button id="pindah" class="btn m-1 btn-creative btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#konfirm_pindah">19</button>
                        </div>
                        <div class="col-2">
                            <button id="pindah" class="btn m-1 btn-creative btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#konfirm_pindah">20</button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-2">
                            <button id="pindah" class="btn m-1 btn-creative btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#konfirm_pindah">21</button>
                        </div>
                        <div class="col-2">
                            <button id="pindah" class="btn m-1 btn-creative btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#konfirm_pindah">22</button>
                        </div>
                        <div class="col-2">
                            <button id="pindah" class="btn m-1 btn-creative btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#konfirm_pindah">23</button>
                        </div>
                        <div class="col-2">
                            <button id="pindah" class="btn m-1 btn-creative btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#konfirm_pindah">24</button>
                        </div>
                        <div class="col-2">
                            <button id="pindah" class="btn m-1 btn-creative btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#konfirm_pindah">25</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>    
@endsection

@section('js')
    <script>
        $(document).ready( function () {
            function loadData() {
                $('#table_team').dataTable({
                    "ajax": "{{ url('/team/data') }}",
                            "columns": [
                                { "data": "id" },
                                { "data": "nama_team" },
                                { "data": "asal_masjid" },
                                {
                                    data: 'id',
                                    sClass: 'text-center',
                                    render: function(data) {
                                        return'<a href="#" data-id="'+data+'" id="edit" class="text-warning" title="edit"><i class="btn m-1 btn-creative btn-warning bi-pencil"></i> </a> &nbsp;'+
                                            '<a href="#" data-id="'+data+'" id="delete" class="text-danger" title="hapus"><i class="btn m-1 btn-creative btn-danger bi-trash"></i> </a>';
                                    },
                                }
                            ],
                    });
            } loadData();
            $(document).on('click', '#finish', function() {
                    $('#konfirm_pindah').modal('show');
                    $('#form_pindah').attr('action', '{{ url('team/') }}');
            });
            $(document).on('click', '#score', function() {
                    $('#konfirm_mulai').modal('show');
                    $('#form_mulai').attr('action', '{{ url('game/sisih') }}');
            });
            $(document).on('click', '#teamA', function() {
                    $('#modal_soal').modal('show');
            });
            $(document).ready(function(){
                $("#reset").click(function(){
                    $("#form_regist").trigger("reset");
                });
            });
            $('#form_team').submit(function(e) {
                    e.preventDefault();
                    $.ajax({
                        url: $(this).attr('action')+'?_token='+'{{ csrf_token() }}',
                        type: 'post',
                        data: {
                            'team_input': $('#team_input').val(),
                            'asal_input': $('#asal_input').val(),
                        },
                        success :function () {
                            $('#table_team').DataTable().destroy();
                            loadData();
                            $('#modal_team').modal('hide');
                        },
                    });
            });
            $(document).on('click', '#edit', function() {
                    var data = $('#table_team').DataTable().row($(this).parents('tr')).data();
                    $('#modal_team').modal('show');
                    $('#team_input').val(data.nama_team).change();
                    $('#asal_input').val(data.asal_masjid).change();
                    $('#form_team').attr('action', '{{ url('team/update') }}/'+data.id);
            });
            $('#modal_team').on('hidden.bs.modal', function(e) {
                    $(this).find('#form_team')[0].reset();
            });
            $(document).on('click', '#delete', function() {
                    var id = $(this).data('id');
                    if (confirm("Yakin ingin menghapus data?")){
                        $.ajax({
                            url : "{{ url('team/delete') }}/"+id,
                            success :function () {
                                $('#table_team').DataTable().destroy();
                                loadData();
                            }
                        })
                    }
            });
        } );
    </script>
@endsection