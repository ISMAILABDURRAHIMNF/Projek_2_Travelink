<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Jenis</th>
                        <th scope="col">Preview</th>
                        <th scope="col">Harga Tiket</th>
                        <th scope="col">Fasilitas</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $nomor = 1;
                            foreach($list_wisata as $wst){
                        ?>
                            <tr>
                                <td><?=$nomor?></td>
                                <td><?=$wst->nama?></td>
                                <td><?=$wst->alamat?></td>
                                <td><?=$wst->jenis_id?></td>
                                <td><img src="img/<?= $wst->foto1 ?>" alt=""></td>
                                <td><?=$wst->harga_tiket?></td>
                                <td><?=$wst->fasilitas?></td>
                            </tr>
                        <?php
                                $nomor++;
                            }
                        ?>
                    </tbody>
                </table>
</body>
</html>