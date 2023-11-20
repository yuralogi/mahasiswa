@include('template.meta')
@include('template.sidebar')
@include('template.navbar')

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <div class="modal-body">
        ...
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
        </div>
    </div>
    </div>
</div>

<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Data Mahasiswa</h1>
    <a type="button" class="btn btn-primary" href={{'/tambah'}}>
        Tambah
    </a>


    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tabel Mahasiswa</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Jurusan</th>
                            <th>Tanggal Lahir</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Nama</th>
                            <th>Jurusan</th>
                            <th>Tanggal Lahir</th>
                            <th>Aksi</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($mahasiswa as $key => $data)
                        <tr>
                            <td>{{$data->nama}}</td>
                            <td>{{$data->jurusan}}</td>
                            <td>{{{$data->tanggal_lahir}}}</td>
                            <td>
                                <a class="btn btn-danger" href='/hapus-data-mhs?id={{$data->id}}'>Hapus</a>
                                <a type="button" class="btn btn-warning">Edit</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- Page level plugins -->
<script src={{asset('sb-admin-template/vendor/datatables/jquery.dataTables.min.js')}}></script>
<script src={{asset('sb-admin-template/vendor/datatables/dataTables.bootstrap4.min.js')}}></script>

<!-- Page level custom scripts -->
<script src={{asset('sb-admin-template/js/demo/datatables-demo.js')}}></script>

 <!-- Core plugin JavaScript-->
 <script src={{asset('vendor/jquery-easing/jquery.easing.min.js')}}></script>

{{-- @include('template.footer') --}}


</body>

</html>



