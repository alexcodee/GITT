<div class="container-fluid">
    <table id="example" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>No</th>
                <th>Tanggal Pengaduan</th>
                <th>Nama Pelapor</th>
                <th>Isi Laporan</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            foreach ($aduan as $data) {

                if ($data['status'] == '0') {
                    $status = 'menunggu';
                } else {
                    $status = $data['status'];
                }

                echo '<tr>
    <td>' . $no . '</td>
    <td>' . $data['tgl_pengaduan'] . '</td>
    <td>' . $data['nama'] . '</td>
    <td>' . $data['isi_laporan'] . '</td>
    <td>' . $status . '</td>
    <td><a href="' . base_url('petugas/detailaduan/') . $data['id_pengaduan'] . '" class="btn btn-sm btn-primary">Ubah Status</a>&nbsp;</td>
</tr>';
                $no++;
            }

            ?>
        </tbody>
</div>
</table>