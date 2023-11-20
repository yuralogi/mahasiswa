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
    <h1 class="h3 mb-2 text-gray-800">Tambah Data Mahasiswa</h1>

    <form action={{'/tambah-data-mhs'}} method="POST">
        @csrf
        <div class="form-group">
          <label for="inputNama">Nama</label>
          <input type="text" class="form-control" id="inputNama" name="inputNama" placeholder="Masukan Nama">
        </div>
        <div class="form-group">
          <label for="inputJurusan">Jurusan</label>
          <input type="text" class="form-control" id="inputJurusan" name="inputJurusan" placeholder="Masukan Jurusan">
        </div>
        <div class="form-group">
            <label for="inputTanggalLahir">Tanggal Lahir</label>
            <input type="date" class="form-control" id="inputTanggalLahir" name="inputTanggalLahir" placeholder="">
          </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>

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


</body>

</html>



