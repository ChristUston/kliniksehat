@extends('headerfooter.headerfooteradmin')

@section('content')

<div class="container mt-5">
    <h2 class="text-center">Daftar User</h2>
    <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#tambahUserModal">Tambah User</button>
    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">Foto</th>
          <th scope="col">Nama Petugas</th>
          <th scope="col">Jenis Kelamin</th>
          <th scope="col">Jabatan</th>
          <th scope="col">Role</th>
        </tr>
      </thead>
      <tbody>
        <!-- Data user akan ditambahkan di sini -->
      </tbody>
    </table>
  </div>

  <!-- Modal untuk tambah user baru -->
  <div class="modal fade" id="tambahUserModal" tabindex="-1" aria-labelledby="tambahUserModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="tambahUserModalLabel">Tambah User Baru</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form id="tambahUserForm">
            <div class="mb-3">
              <label for="foto" class="form-label">Foto</label>
              <input type="file" class="form-control" id="foto" name="foto" accept="image/*">
            </div>
            <div class="mb-3">
              <label for="namaPetugas" class="form-label">Nama Petugas</label>
              <input type="text" class="form-control" id="namaPetugas" name="namaPetugas" required>
            </div>
            <div class="mb-3">
              <label for="jenisKelamin" class="form-label">Jenis Kelamin</label>
              <select class="form-select" id="jenisKelamin" name="jenisKelamin" required>
                <option value="" selected disabled>Pilih Jenis Kelamin</option>
                <option value="Laki-laki">Laki-laki</option>
                <option value="Perempuan">Perempuan</option>
              </select>
            </div>
            <div class="mb-3">
              <label for="jabatan" class="form-label">Jabatan</label>
              <input type="text" class="form-control" id="jabatan" name="jabatan" required>
            </div>
            <div class="mb-3">
              <label for="role" class="form-label">Role</label>
              <select class="form-select" id="role" name="role" required>
                <option value="" selected disabled>Pilih Role</option>
                <option value="Admin">Admin</option>
                <option value="SuperAdmin">SuperAdmin</option>
              </select>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
          </form>
        </div>
      </div>
    </div>
  </div>

@endsection