<!DOCTYPE html>
<html><head>
    <title></title>
</head><body>  

<h2 style="text-align:center;">DATA REKAM MEDIS BULLDOC</h2>
        <table>
            <tr>
                
                <th>NO</th>
                <th>Nomor Rekam Medis</th>
                <th>Username</th>
                <th>Nama Dokter</th>
                <th>Keluhan</th>
                <th>Diagnosa</th>
                <th>Tindakan</th>
                <th>Tanggal kirim</th>
            </tr>
            
            <?php $no=1;
                    foreach($rm->result() as $key => $data) { ?>
                    <tr>
                        <td><?= $no++ ?>.</td>
                        <td>RM00<?= $data->id_hasil ?></td>
                        <td><?= $data->username ?></td>
                        <td><?= $data->nama_dokter ?></td>
                        <td><?= $data->keluhan ?></td>
                        <td><?= $data->diagnosa ?></td>
                        <td><?= $data->tindakan ?></td>
                        <td><?= date('d-m-Y', strtotime($data->tanggal_kirim))?></td>
                    </tr>
            <?php } ?>
       </table>
<body></html>