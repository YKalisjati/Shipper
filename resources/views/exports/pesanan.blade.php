<table>
    <thead>
      <tr>
        <th><b>Tanggal Pemesanan</b></th>
        <th><b>ID Pengiriman</b></th>
        <th><b>External ID</b></th>
        <th><b>Nama Pengirim</b></th>
        <th><b>Nama Perusahaan</b></th>
        <th><b>Asal Pengiriman</b></th>
        <th><b>Nama Penerima</b></th>
        <th><b>No. Handphone</b></th>
        <th><b>Tujuan Pengiriman</b></th>
        <th><b>Jenis Paket</b></th>
        <th><b>Ongkir</b></th>
        <th><b>Status</b></th>
      </tr>
    </thead>
    <tbody>
        @foreach ($pengiriman_barang as $pengiriman_barang)
      <tr>
        <td>{{ $pengiriman_barang->created_at }}</td>
        <td>{{ $pengiriman_barang->id }}</td>
        <td>@if($pengiriman_barang->ex_id!=null){{ $pengiriman_barang->ex_id }}@else - @endif</td>
        <td>{{ $pengiriman_barang->name }}</td>
        <td>{{ $pengiriman_barang->perusahaan }}</td>
        <td>{{ $pengiriman_barang->alamatLengkap_pengirim }},
          {{ $pengiriman_barang->kota_pengirim }},
          {{ $pengiriman_barang->provinsi_pengirim }},
          {{ $pengiriman_barang->kodePos_pengirim }}.
        </td>
        <td>{{ $pengiriman_barang->nama_penerima }}</td>
        <td>{{ $pengiriman_barang->no_penerima }}</td>
        <td>{{ $pengiriman_barang->alamatLengkap_penerima }},
          {{ $pengiriman_barang->kota_penerima }},
          {{ $pengiriman_barang->provinsi_penerima }},
          {{ $pengiriman_barang->kodePos_penerima }}.
        </td>
        <td>{{ $pengiriman_barang->name_type }}</td>
        <td>{{ $pengiriman_barang->ongkir }}</td>
        <td>{{ $pengiriman_barang->nama_status }}</td>
      </tr>
      @endforeach
    </tbody>
  </table>