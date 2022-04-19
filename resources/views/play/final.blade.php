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
                            <button id="pindah" class="btn m-1 btn-creative btn-warning" type="button" data-bs-toggle="modal" data-bs-target="#konfirm_pindah">Score</button>
                            <button id="pindah" class="btn m-1 btn-creative btn-warning" type="button" data-bs-toggle="modal" data-bs-target="#konfirm_pindah">Finish</button>
                        </div>
                        <div class="modal fade" id="konfirm_pindah" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h6 class="modal-title" id="konfirmpindah">Konfirmasi</h6>
                                        <button class="btn btn-close p-1 ms-auto" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="#" id="form_pindah">
                                        <p class="mb-0">Anda akan berpindah ke halaman CRUD Team. Apakah anda setuju?.</p>
                                        <div class="modal-footer">
                                            <button class="btn btn-sm btn-secondary" type="button" data-bs-dismiss="modal">Cancel</button>
                                            <button class="btn btn-sm btn-success" type="submit">Setuju</button>
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
                            <button id="pindah" class="btn m-1 btn-creative btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#konfirm_pindah">1</button>
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
                        <div class="col-2">
                            <button id="pindah" class="btn m-1 btn-creative btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#konfirm_pindah">6</button>
                        </div>
                        <div class="col-2">
                            <button id="pindah" class="btn m-1 btn-creative btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#konfirm_pindah">7</button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-2">
                            <button id="pindah" class="btn m-1 btn-creative btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#konfirm_pindah">8</button>
                        </div>
                        <div class="col-2">
                            <button id="pindah" class="btn m-1 btn-creative btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#konfirm_pindah">9</button>
                        </div>
                        <div class="col-2">
                            <button id="pindah" class="btn m-1 btn-creative btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#konfirm_pindah">10</button>
                        </div>
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
                    </div>
                    <div class="row">
                        <div class="col-2">
                            <button id="pindah" class="btn m-1 btn-creative btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#konfirm_pindah">15</button>
                        </div>
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
                        <div class="col-2">
                            <button id="pindah" class="btn m-1 btn-creative btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#konfirm_pindah">21</button>
                        </div>
                    </div>
                    <div class="row">
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
                        <div class="col-2">
                            <button id="pindah" class="btn m-1 btn-creative btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#konfirm_pindah">26</button>
                        </div>
                        <div class="col-2">
                            <button id="pindah" class="btn m-1 btn-creative btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#konfirm_pindah">27</button>
                        </div>
                        <div class="col-2">
                            <button id="pindah" class="btn m-1 btn-creative btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#konfirm_pindah">28</button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-2">
                            <button id="pindah" class="btn m-1 btn-creative btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#konfirm_pindah">29</button>
                        </div>
                        <div class="col-2">
                            <button id="pindah" class="btn m-1 btn-creative btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#konfirm_pindah">30</button>
                        </div>
                        <div class="col-2">
                            <button id="pindah" class="btn m-1 btn-creative btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#konfirm_pindah">31</button>
                        </div>
                        <div class="col-2">
                            <button id="pindah" class="btn m-1 btn-creative btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#konfirm_pindah">32</button>
                        </div>
                        <div class="col-2">
                            <button id="pindah" class="btn m-1 btn-creative btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#konfirm_pindah">33</button>
                        </div>
                        <div class="col-2">
                            <button id="pindah" class="btn m-1 btn-creative btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#konfirm_pindah">34</button>
                        </div>
                        <div class="col-2">
                            <button id="pindah" class="btn m-1 btn-creative btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#konfirm_pindah">35</button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-2">
                            <button id="pindah" class="btn m-1 btn-creative btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#konfirm_pindah">36</button>
                        </div>
                        <div class="col-2">
                            <button id="pindah" class="btn m-1 btn-creative btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#konfirm_pindah">37</button>
                        </div>
                        <div class="col-2">
                            <button id="pindah" class="btn m-1 btn-creative btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#konfirm_pindah">38</button>
                        </div>
                        <div class="col-2">
                            <button id="pindah" class="btn m-1 btn-creative btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#konfirm_pindah">39</button>
                        </div>
                        <div class="col-2">
                            <button id="pindah" class="btn m-1 btn-creative btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#konfirm_pindah">40</button>
                        </div>
                        <div class="col-2">
                            <button id="pindah" class="btn m-1 btn-creative btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#konfirm_pindah">41</button>
                        </div>
                        <div class="col-2">
                            <button id="pindah" class="btn m-1 btn-creative btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#konfirm_pindah">42</button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-2">
                            <button id="pindah" class="btn m-1 btn-creative btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#konfirm_pindah">43</button>
                        </div>
                        <div class="col-2">
                            <button id="pindah" class="btn m-1 btn-creative btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#konfirm_pindah">44</button>
                        </div>
                        <div class="col-2">
                            <button id="pindah" class="btn m-1 btn-creative btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#konfirm_pindah">45</button>
                        </div>
                        <div class="col-2">
                            <button id="pindah" class="btn m-1 btn-creative btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#konfirm_pindah">46</button>
                        </div>
                        <div class="col-2">
                            <button id="pindah" class="btn m-1 btn-creative btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#konfirm_pindah">47</button>
                        </div>
                        <div class="col-2">
                            <button id="pindah" class="btn m-1 btn-creative btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#konfirm_pindah">48</button>
                        </div>
                        <div class="col-2">
                            <button id="pindah" class="btn m-1 btn-creative btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#konfirm_pindah">49</button>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="konfirm_mulai" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h6 class="modal-title" id="konfirmmulai">Konfirmasi</h6>
                                <button class="btn btn-close p-1 ms-auto" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="#" id="form_mulai">
                                    <p class="mb-0">Permainan akan dimulai dengan team sebagai berikut : . Apakah anda setuju?.</p>
                                    <div class="modal-footer">
                                        <button class="btn btn-sm btn-secondary" type="button" data-bs-dismiss="modal">Cancel</button>
                                        <button class="btn btn-sm btn-success" type="submit">Simpan</button>
                                    </div>
                                </form>
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
            $(document).on('click', '#pindah', function() {
                    $('#konfirm_pindah').modal('show');
                    $('#form_pindah').attr('action', '{{ url('team/') }}');
            });
            $(document).on('click', '#mulai', function() {
                    $('#konfirm_mulai').modal('show');
                    $('#form_mulai').attr('action', '{{ url('game/sisih') }}');
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