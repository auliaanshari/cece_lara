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
                            <h5 class="ps-2">ID Game : <span id="game_id">{{ $game }}</span></h5>
                        </div>
                        <div class="col-6 text-sm-right d-flex justify-content-end">
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
                                        {{--<h6 class="modal-title fs-2" id="pilihteam">Pilih Team</h6>--}}
                                        <button class="btn btn-close p-1 ms-auto d-flex justify-content-end" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body mb-2">
                                        <form action="#" id="form_pilih">
                                            <p class="mb-0 fs-3">Pilih team yang akan menjawab : </p>
                                            <div class="row d-flex justify-content-center">
                                                <button id="{{ $tim1 }}" class="btn col-2 mx-2 py-2 fs-1 btn-creative btn-danger" type="button" data-bs-toggle="modal" data-bs-target="#modal_soal">A</button>
                                                <button id="{{ $tim2 }}" class="btn col-2 mx-2 py-2 fs-1 btn-creative text-light btn-warning" type="button" data-bs-toggle="modal" data-bs-target="#modal_soal">B</button>
                                                <button id="{{ $tim3 }}" class="btn col-2 mx-2 py-2 fs-1 btn-creative btn-success" type="button" data-bs-toggle="modal" data-bs-target="#modal_soal">C</button>
                                                <button id="{{ $tim4 }}" class="btn col-2 mx-2 py-2 fs-1 btn-creative btn-secondary" type="button" data-bs-toggle="modal" data-bs-target="#modal_soal">P</button>
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
                                        <h6 class="modal-title" id="modalsoal">ID Soal : <span id="idsoal"></span></h6>
                                        <button class="btn btn-close p-1 ms-auto" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="#" id="form_soal">
                                            <h4 class="mb-0">Soal : <span id="soalnya"></span></h4>
                                            <div class="col-12" id="clockdiv">
                                                <div>
                                                    <span class="minutes" id="minute"></span>
                                                </div>
                                                <div>
                                                    <span class="seconds" id="second"></span>
                                                </div>
                                                <button id="startCountdown" class="btn m-1 btn-creative btn-success" type="button">Mulai</button>
                                            </div>
                                            <p id="demo"></p>
                                            <div class="d-flex justify-content-end">
                                                <button id="benar" class="btn m-1 btn-creative btn-success" type="button" data-bs-toggle="modal" data-bs-target="#modal_benar">Benar</button>
                                                <button id="salah" class="btn m-1 btn-creative btn-warning" type="button" data-bs-toggle="modal" data-bs-target="#modal_salah">Salah</button>
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
                                        <button class="btn btn-close p-1 ms-auto" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="#" id="form_benar">
                                            <div class="d-flex justify-content-center">
                                                <lottie-player src="https://assets4.lottiefiles.com/temp/lf20_hT22rr.json"  background="transparent"  speed="1"  style="width: 300px; height: 300px;"  loop  autoplay></lottie-player>
                                            </div>
                                            <div class="d-flex justify-content-center">
                                                <h1>Benar</h1>
                                                <button class="btn btn-sm btn-success" type="submit">OK!</button>
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
                                        <button class="btn btn-close p-1 ms-auto" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="#" id="form_salah">
                                            <div class="d-flex justify-content-center">
                                                <lottie-player src="https://assets2.lottiefiles.com/packages/lf20_geewpiaj.json"  background="transparent"  speed="1"  style="width: 300px; height: 300px;" loop autoplay></lottie-player>
                                            </div>
                                            <div class="d-flex justify-content-center">
                                                <h1>Salah</h1>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>    
                </div>
                <div class="card-body p-3">
                    <div class="row d-flex justify-content-center">
                        @php
                            $no = 1;
                        @endphp
                        @foreach($soal as $so)
                            <div class="col-2 bg-primary py-2 m-1 rounded" onclick="pilihSoal({{ $so->id }})" data-bs-toggle="modal" data-bs-target="#pilih_team">
                                <h1 id="{{$so->id}}" class="text-light text-center py-3 my-2">{{ $no++ }}</h1>
                            </div>
                        @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>    
@endsection

@section('js')
    <script>
        function pilihSoal($id){
            console.log($id);
            $(document).ready( function (){
                $.ajax({
                    url: '{{ url('soal/pilihsoal') }}/'+$id,
                    dataType: "json",
                    success: function(data) {
                        var soal = jQuery.parseJSON(JSON.stringify(data));
                        $.each(soal, function(k, v) {
                            $('#idsoal').html(v.id);
                            $('#soalnya').html(v.soal);
                        })
                    }
                });
            })
        };

        let deadline = new Date("apr 21, 2022 15:37:25").getTime();
        console.log(deadline);
        
        let x = setInterval(function() {
            let now = new Date().getTime();
            let t = deadline - now;
            let minutes = Math.floor((t % (1000 * 60 * 60)) / (1000 * 60));
            let seconds = Math.floor((t % (1000 * 60)) / 1000);
            document.getElementById("minute").innerHTML = minutes; 
            document.getElementById("second").innerHTML =seconds; 
            if (t < 0) {
                clearInterval(x);
                document.getElementById("demo").innerHTML = "TIME UP";
                document.getElementById("minute").innerHTML ='0' ; 
                document.getElementById("second").innerHTML = '0'; }
        }, 1000);
    </script>
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

            $(document).on('click', '#benar', function() {
                    $('#modal_benar').modal('show');
                    $('#form_benar').attr('action', '{{ url('point/create') }}');
            });
            $('#form_benar').submit(function(e) {
                    e.preventDefault();
                    $.ajax({
                        url: $(this).attr('action')+'?_token='+'{{ csrf_token() }}',
                        type: 'post',
                        data: {
                            'game_input': $('#gameid'),
                            'team_input': $('#tim1').val(),
                            'soal_input': $('#idsoal').val(),
                            'point_input': 100,
                        },
                        success :function () {
                            // $('#table_soal').DataTable().destroy();
                            // loadData();
                            // $('#modal_soal').modal('hide');
                        },
                    });
            });

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
        });
    </script>
@endsection