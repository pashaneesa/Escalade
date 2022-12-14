<?php

header("Content-type: application/vnd-ms-excel");

header("Content-Disposition: attachment; filename=$title.xls");

header("Pragma: no-cache");

header("Expires: 0");

?>

<table border="1">
  <thead>
   <tr>
    <th>Nomor</th>
    <th>Id Rekam Medis</th>
    <th>Tanggal Pemeriksaan</th>
    <th>Jam Pemeriksaan</th>
    <th>Kontrol Selanjutnya</th>
    <th>Nama Dokter</th>
    <th>Nama Akun Keluarga</th>
    <th>Hubungan</th>
    <th>Nama Anggota Keluarga</th>
    <th>Diagnosis</th>
    <th>Resep</th>
    <th>Total Bayar</th>
  </tr>
</thead>

<tbody>
  <?php $i=1; foreach ($laporan->result() as $result) : ?>

    <tr>
      <td><?php echo $i; ?></td>
      <td><?php echo $result->id_rekam_medis ?></td>
      <td><?php echo $result->tanggal_rencana ?></td>
      <td><?php echo $result->jam_rencana ?></td>
      <td><?php echo $result->tanggal_next_control ?></td>
      <td><?php echo $result->nama_dokter ?></td>
      <td><?php echo $result->nama_depan_u ?> <?php echo $result->nama_belakang_u ?></td>
      <td>
        <?php if($result->hubungan=='Anda'){
          ?>Pemilik Akun
        <?php } 
        else{
           echo $result->hubungan;
        }
        ?>
      </td>
      <td><?php echo $result->nama_depan ?> <?php echo $result->nama_belakang ?></td>
      <td><?php echo $result->diagnosis ?></td>
      <td><?php echo $result->resep ?></td>
      <td>Rp. <?php echo $result->grandtotal ?></td>
    </tr>
    <?php $i++; endforeach; ?>
  </tbody>

</table>