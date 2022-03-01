<!DOCTYPE html>
<html>

<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"> -->

    <style>
        table.receipt-table {
            width: 310px;
            border-collapse: collapse;
        }

        table.receipt-table th {
            padding: 5px 0;
        }

        table.receipt-table td {
            padding: 3px 0;
        }

        .center {
            text-align: center;
        }

        .right {
            text-align: right;
        }

        .left {
            text-align: left
        }

    </style>
    <link rel="stylesheet" href="">
    <title>@yield('judul')</title>
</head>

<body>
    <h2 class="center">
        <b style="font-size: 30px;">{{ env('STORE_NAME') }}</b>
    </h2>
    <h5 class="center">
        <i style="font-size: 20px;">{{ env('STORE_ADDRESS') }} {{ env('STORE_PHONE') }}</i>
    </h5>
    <hr>

    <h2 class="center"><u> Invoice</u></h2>
    {{-- Table Star --}}
    <div class="panel-body table-responsive">
        <table class="table">
            <tbody>

                <tr>
                    <td class="text-right border-bottom">Kode Invoice</td>
                    <td colspan="2" class="text-right border-bottom"> : {{ $data->kode_invoice }}</td>
                    <td class="text-right border-bottom"> {{ $data->created_at }}</td>

                </tr>
                <tr>
                    <td class="text-right border-bottom">Kasir</td>
                    <td colspan="2" class="text-right border-bottom"> : {{ $data->user->name }}</td>
                </tr>
                <tr>
                    <td class="text-right border-bottom">Customer</td>
                    <td colspan="2" class="text-right border-bottom"> : {{ $data->nama }}</td>

                </tr>
                <tr>
                    <td class="text-right border-bottom">Hp/Telp</td>
                    <td colspan="2" class="text-right border-bottom"> : {{ $data->no_hp }}</td>
                </tr>

                <tr>
                    <th colspan="2" class="left">Barang Belanjaan</th>
                    <th class="right">Harga Satuan</th>
                    <th class="right" style="width:90px">Sub Total</th>
                </tr>
                <tr>
                    <td colspan="2" class="strong">
                        {{ $data->produk->nama_produk }} {{ $data->jml_beli }}
                        ({{ $data->produk->satuan->nama_satuan }})</td>
                    <td class="right" style="vertical-align: top;">
                        {{ 'Rp. ' . number_format($data->produk->harga) }}
                    </td>
                    <td class="right">{{ 'Rp. ' . number_format($data->total) }}</td>
                </tr>


                <tr>
                    <th colspan="3" class="right">Total :</th>
                    <th class="right ">{{ 'Rp. ' . number_format($data->total) }}</th>
                </tr>
                <tr>
                    <th colspan="3" class="right ">Jumlah Dibayar :</th>
                    <th class="right ">{{ 'Rp. ' . number_format($data->bayar) }}</th>
                </tr>
                <tr>
                    <th colspan="3" class="right ">Kembalian :</th>
                    <th class="right "> {{ 'Rp. ' . number_format($data->kembalian) }}</th>
                </tr>
            </tbody>
        </table>
    </div>
    {{-- Table End --}}
</body>

</html>
