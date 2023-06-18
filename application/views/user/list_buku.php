<!-- Content Header (Page header) -->
<section class="content">
    <!-- SELECT2 EXAMPLE -->
    <div class=" card card-info">
        <div class="card-header">
            <h3 class="card-title">List Buku</h3>

            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                </button>
            </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <?= anchor('Dash/tambah_buku/', '<button type="button" class="btn btn-primary"><i class="fa fa-plus" style="text-align: center;"> Tulis Buku</i></button>'); ?>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>NO</th>
                        <th>PENULIS</th>
                        <th>JUDUL BUKU</th>
                        <th>TAHUN RILIS</th>
                        <th>DISPLAY</th>
                        <th>HAPUS</th>
                        <th>EDIT</th>
                    </tr>
                </thead>

                <?php

                $no = 1;

                $user = $this->session->userdata('username');
                
                if ($this->session->userdata('id_level') == '2') {
                    $rsk = $this->db->query("SELECT * FROM jurnal WHERE penulis = '$user'")->result();

                } else if ($this->session->userdata('id_level') == '1')
                $rsk = $this->db->query("SELECT * FROM jurnal")->result();

                foreach ($rsk as $s) :

                    ?>

                    <tbody>
                        <tr>
                            <td><?php echo $no++ ?></td>
                            <td><?php echo $s->penulis ?></td>
                            <td><?php echo $s->judul?></td>
                            <td><?php echo $s->tahun_rilis?></td>
                            <td><?php echo anchor('Dash/live_prievew/' . $s->id_buku, '<div class="btn btn-success btn-sm"><i class="fa fa-info-circle"></i></div>'); ?></td>
                            <td onclick="javascript: return confirm('Yakin Hapus?') "><?php echo anchor('#' . $s->id_buku, '<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>') ?></td>
                            <td><?php echo anchor('Dash/edit_buku/' . $s->id_buku, '<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>'); ?></td>
                        </tr>
                    </tbody>

                <?php endforeach; ?>
            </table>
        </div>
    </div>
</section>
