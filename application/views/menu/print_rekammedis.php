<!DOCTYPE html>
<html><head>
    <title></title>
</head><body>  
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
                    foreach($print_rm->result() as $key => $data) { ?>
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

    <script type="text/javascript">
        window.print();
    </script>

<body></html>