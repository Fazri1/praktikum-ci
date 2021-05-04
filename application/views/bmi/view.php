<h2>Data BMI Pasien #ID : <?=$bmi_pasien->id?></h2>
<div>
    <table class='table'>
        <tr>
            <td>Tanggal Periksa</td><td>:</td><td><?=$bmi_pasien->tanggal?></td>
        </tr>
        <tr><td>Nama</td><td>:</td><td><?=$bmi_pasien->nama?></td></tr>
        <tr>
            <td>Berat</td><td>:</td><td><?=$bmi_pasien->berat?></td>
        </tr>
        <tr>
            <td>Tinggi</td><td>:</td>
        <td><?=$bmi_pasien->tinggi?></td>
        </tr>
        <tr><td>BMI</td><td>:</td><td><?=$bmi_pasien->bmi?></td>
        </tr>
        <tr>
            <td>Status</td><td>:</td>
            <td><?=$bmi_pasien->status_bmi?></td>
        </tr>
        <tr>
        <td>Catatan</td><td>:</td>
        <td><?=$bmi_pasien->catatan?></td>
        </tr>
    </table>
</div>