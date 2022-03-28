<div class="container pt-5">
    <div class="text-right">
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap" style="margin-bottom:10px;">Tambah Data</button>
    </div>

    <div class="card">
        <div class="card-header bg-dark text-white">
            <h4 class="card-title" style="text-align: center;">DATA TUGAS SEMESTER IV</h4>
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama Mahasiswa</th>
                            <th>Matakuliah</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach ($getKaryawan as $krywn) { ?>
                            <tr>
                                <td><?= $no; ?></td>
                                <td><?= $krywn['nama_mahasiswa']; ?></td>
                                <td><?= $krywn['matakuliah']; ?></td>
                                <td><?= $krywn['status']; ?></td>
                                <td>
                                    <a href="<?= base_url('employee/edit/' . $krywn['id']); ?>" class="btn btn-success" data-target="#editModal">
                                        Edit</a>
                                    <a href="<?= base_url('employee/hapus/' . $krywn['id']); ?>" onclick="javascript:return confirm('Apakah Anda yakin ingin menghapus data mahasiswa?')" class="btn btn-danger">
                                        Hapus</a>
                                </td>
                            </tr>
                        <?php $no++;
                        } ?>
                    </tbody>

                </table>
            </div>
        </div>
    </div>
</div>

<!--   Modal Tambah Data-->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data Mahasiswa</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="<?= base_url('employee/add'); ?>">
                    <div class="form-group">
                        <label for="nama_karyawan" class="col-form-label">Nama Mahasiswa</label>
                        <input type="text" class="form-control" id="nama_mahasiswa" name="nama_mahasiswa">
                    </div>
                    <div class="form-group">
                        <label for="usia" class="col-form-label">Matakuliah</label>
                        <input type="text" class="form-control" id="matakuliah" name="matakuliah">
                    </div>
                    <div class="form-group">
                        <label for="status_vaksin_2" class="col-form-label">Status</label>
                        <select class="form-control" name="status">
                            <option value="">---Pilih Status---</option>
                            <option value="Belum">Belum Selesai</option>
                            <option value="Sudah">Sudah Selesai</option>
                        </select>
                    </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            </form>
        </div>
    </div>
</div>
</body>