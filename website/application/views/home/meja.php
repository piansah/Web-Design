<div class="container my-5 pt-5">
    <h1 class="text-center">Pesanan Saya</h1>
    <p class="text-center mb-5">Meja | <a href="<?=base_url();?>Pesanan/data/<?=$user->username?>"
            class="text-dark text-muted">Makanan</a>
    </p>
    <div class="d-flex flex-wrap justify-content-center gap-3">
        <?php
        $user = $user->username;
        $this->db->where('username', $user);
        $data = $this->db->get('meja')->result();
        ?>

        <?php if($data == null) :?>
        <h1 class="text-center text-red">Data Tidak Ditemukan!</h1>
        <?php else: ?>
        <?php foreach($data as $d) : ?>
        <div class="card p-2" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title"><?=$d->username?></h5>
                <p class="card-title">No Meja : <?=$d->id?></p>
                <p>Pemesan : <?=$d->nama_pemesan?></p>
                <small>Email : <?=$d->email?></small> <br>
                <small>No WA : <?=$d->no?></small> <br>
                <small>Keterangan : <?=$d->pesan?></small> <br>
                <div class="d-flex justify-content-between mt-3">
                    <small>Tanggal : <?=$d->tanggal?></small>
                    <small>Waktu : <?=$d->waktu?></small>
                </div>
                <a href="<?=base_url();?>Pesanan/hapus_meja/<?=$d->username?>" class="btn btn-red">Cancel</a>
            </div>
        </div>
        <?php endforeach; ?>
        <?php endif; ?>
    </div>

</div>