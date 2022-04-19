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
                            <h5 class="ps-2">Register Game</h5>
                        </div>
                        <div class="col-6 text-sm-right">
                            <button id="pindah" class="btn m-1 btn-creative btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#konfirm_pindah">Tambah Team</button>
                        </div>
                        <div class="modal fade" id="konfirm_pindah" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h6 class="modal-title" id="konfirmpindah">Konfirmasi</h6>
                                        <button class="btn btn-close p-1 ms-auto" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <p class="mb-0">Anda akan berpindah ke halaman CRUD Team. Apakah anda ingin melanjutkan?.</p>
                                        <div class="modal-footer">
                                            <button class="btn btn-sm btn-secondary" type="button" data-bs-dismiss="modal">Cancel</button>
                                            <button id="setujupindah" class="btn btn-sm btn-success" type="button">Setuju</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>    
                    </div>
                </div>
                <div class="card-body p-3">
                    <form action="#" id="form_regist">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label class="form-label" for="ronde">Ronde</label>
                            <select class="form-select" id="ronde" name="ronde" aria-label="Ronde" required>
                                <option value="">Pilih Ronde</option>
                                <option value="1">Penyisihan</option>
                                <option value="2">Semi Final</option>
                                <option value="3">Final</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="teamA">Team A</label>
                            <select class="form-select" id="teamA" name="teamA" aria-label="Team A" required>
                                <option value="">Pilih Team</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="teamB">Team B</label>
                            <select class="form-select" id="teamB" name="teamB" aria-label="Team B" required>
                                <option value="">Pilih Team</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="teamC">Team C</label>
                            <select class="form-select" id="teamC" name="teamC" aria-label="Team C">
                                <option value="">Pilih Team</option>
                            </select>
                        </div>
                        <div class="modal-footer">
                            <button id="reset" class="btn btn-creative btn-secondary" type="button">Reset</button>
                            <button id="mulai" class="btn m-1 btn-creative btn-success" type="submit" data-bs-toggle="modal" data-bs-target="#konfirm_mulai">Mulai Game</button>
                        </div>
                    </form>
                </div>
                <div class="modal fade" id="konfirm_mulai" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h6 class="modal-title" id="konfirmmulai">Konfirmasi</h6>
                                <button class="btn btn-close p-1 ms-auto" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <p class="mb-0">Permainan akan dimulai dengan team sebagai berikut : </p>
                                <div id="teamAReg"> Team A : </div>
                                <div id="teamBReg"> Team B : </div>
                                <div id="teamCReg"> Team C : </div>
                                <p>Apakah anda ingin melanjutkan?.</p>
                                <div class="modal-footer">
                                    <button class="btn btn-sm btn-secondary" type="button" data-bs-dismiss="modal">Cancel</button>
                                    <button id="mulaigame" class="btn btn-sm btn-success" type="submit">Setuju</button>
                                </div>
                            </div>
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
                $.ajax({
                    url: '{{ url('game/data') }}',
                    dataType: "json",
                    success: function(data) {
                        var tim = jQuery.parseJSON(JSON.stringify(data));
                        for(var tes in tim) {
                            var itemA = tim[0];
                            var itemB = tim[1];
                            var itemC = tim[2];
                        }
                        $('#teamAReg').append(itemA.team.nama_team);
                        $('#teamBReg').append(itemB.team.nama_team);
                        $('#teamCReg').append(itemC.team.nama_team);
                    }
                });
            } loadData();

            $(document).on('click', '#pindah', function() {
                $('#konfirm_pindah').modal('show');
            });

            $(document).on('click', '#setujupindah', function() {
                window.location.href='{{ url('team/') }}';
            });

            $(document).on('click', '#mulai', function() {
                $('#konfirm_mulai').modal('show');
                $('#form_regist').attr('action', '{{ url('game/create') }}');
            });

            $('#form_regist').submit(function(e) {
                    e.preventDefault();
                    $.ajax({
                        url: $(this).attr('action')+'?_token='+'{{ csrf_token() }}',
                        type: 'post',
                        data: {
                            'babak_input': $('#ronde').val(),
                        },
                        success :function () {
                            alert('Game telah ditambahkan.')
                        },
                    });
            });

            $(document).on('click', '#mulaigame', function() {
                window.location.href='{{ url('game/penyisihan') }}';
            });

            $(document).ready(function(){
                $("#reset").click(function(){
                    $("#form_regist").trigger("reset");
                });
            });

            $.ajax({
                url: '{{ url('team/combo_team') }}',
                dataType: "json",
                success: function(data) {
                    var team = jQuery.parseJSON(JSON.stringify(data));
                    $.each(team, function(k, v) {
                        $('#teamA').append($('<option>', {value:v.id}).text(v.nama_team));
                        $('#teamB').append($('<option>', {value:v.id}).text(v.nama_team));
                        $('#teamC').append($('<option>', {value:v.id}).text(v.nama_team));
                    })
                }
            });

            // $('#form_regist').submit(function(e) {
            //         e.preventDefault();
            //         $.ajax({
            //             url: $(this).attr('action')+'?_token='+'{{ csrf_token() }}',
            //             type: 'post',
            //             data: {
            //                 'team_input': $('#team_input').val(),
            //                 'team_input': $('#team_input').val(),
            //                 'team_input': $('#team_input').val(),
            //                 'asal_input': $('#asal_input').val(),
            //             },
            //             success :function () {
            //                 $('#table_team').DataTable().destroy();
            //                 loadData();
            //                 $('#modal_team').modal('hide');
            //             },
            //         });
            // });
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