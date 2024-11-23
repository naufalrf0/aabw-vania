<html>

<head>
    <style type="text/css">
        .aturkiri {
            text-align: left;
        }

        .aturkanan {
            text-align: right;
        }

        .aturtengah {
            text-align: center;
        }

        .spesifik {
            font-style: italic;
            word-spacing: 30px;
        }

        .judul {
            font-style: italic;
            font-size: 20px;
        }
    </style>
</head>

<body>

    <p class="judul">Perubahan Modal</p>
    Periode : <?= date('d F Y', strtotime($tglawal)) . "s/d" . date('d F Y', strtotime($tglakhir)) ?>
    <br />
    <br />

    <table border="0.1px" class="table-striped table-md">
        <table class="table table-hover table-striped table-md">
            <thead>
            </thead>
            <tbody>
                <tr>
                    <td class="aturkiri">Modal Awal</td>
                    <td></td>
                    <td class="text-right"><?= number_format($dttransaksi['modal_awal'], 0, ",", ","); ?></td>
                </tr>
                <tr>
                    <td class="aturkiri" style="padding-left:3em">Laba/Rugi Bersih</td>
                    <td></td>
                    <td class="text-right" style="padding-right:6em"><?= number_format($dttransaksi['laba_rugi'], 0, ",", ","); ?></td>
                </tr>
                <tr>
                    <td class="aturkiri" style="padding-left:3em">Prive</td>
                    <td></td>
                    <td class="text-right" style="padding-right:6em"><?= number_format($dttransaksi['prive'], 0, ",", ","); ?></td>
                </tr>
                <tr>
                    <td class="aturkiri">Penambahan Modal</td>
                    <td></td>
                    <td class="text-right"><?= number_format($dttransaksi['penambahan_modal'], 0, ",", ","); ?></td>
                </tr>
                <tr>
                    <td class="aturkiri">Modal Akhir</td>
                    <td></td>
                    <td class="text-right"><?= number_format($dttransaksi['modal_akhir'], 0, ",", ","); ?></td>
                </tr>
            </tbody>
            <tfoot>
            </tfoot>
        </table>
</body>

</html>