<h3>Data BMI Pasien</h3>
<table class='table'> 
    <thead>
        <tr>
            <td>#</td>
            <td>Tanggal</td>
            <td>Nama</td>
            <td>Berat</td>
            <td>Tinggi</td>
            <td>BMI</td>
            <td>Status</td>
            <td>Catatan</td>
            <td>Detail</td>
        </tr>
    </thead>
    <tbody>
        <?php
            $nomor = 1;
            foreach($bmi_pasien->result() as $bmi_pasien){
                echo '
                <tr>
                <td>'.$nomor.'</td>
                <td>'.$bmi_pasien->tanggal.'</td>
                <td>'.$bmi_pasien->nama.'</td>
                <td>'.$bmi_pasien->berat.'</td>
                <td>'.$bmi_pasien->tinggi.'</td>
                <td>'.$bmi_pasien->bmi.'</td>
                <td>'.$bmi_pasien->status_bmi.'</td>
                <td>'.$bmi_pasien->catatan.'</td>
                <td><a href="'.base_url().'index.php/bmi/view/'.$bmi_pasien->id.'">view</a></td>
                <tr>';
                $nomor++;
            }
        ?>
    </tbody>
</table>