<div class="container p-5">
    <a href="<?= base_url('employee'); ?>" class="btn btn-secondary mb-2"><i class="fas fa-home"></i></a>
    <div class="card">
        <div class="card-header bg-primary text-white">
            <h4 class="card-title">Edit Data Mahasiswa</h4>
        </div>
        <div class="card-body">
            <form method="post" action="<?= base_url('employee/update'); ?>">
                <div class="form-group">
                    <label for="">Nama Mahasiswa</label>
                    <input type="text" value="<?= $employee->nama_mahasiswa; ?>" name="nama_mahasiswa" required class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Matakuliah</label>
                    <input type="text" value="<?= $employee->matakuliah; ?>" name="matakuliah" required class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Status</label>
                    <select class="form-control" name="status">
                        <option value="">---Pilih Status--</option>
                        <option value="Belum">Belum Selesai</option>
                        <option value="Sudah">Sudah Selesai</option>
                    </select>
                </div>
 
                <input type="hidden" value="<?= $employee->id; ?>" name="id">
                <div class="text-right">
                    <button class="btn btn-success">Update</button>
                </div>
            </form>
 
        </div>
    </div>
</div>