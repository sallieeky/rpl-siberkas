<h3>Berkas pengajuan {{ $nama_berkas }} anda telah terkirim!</h3>
<ul>
  <li>Nama : {{ $user->nama }}</li>
  <li>NIK : {{ $user->nik }}</li>
  <li>Status : Dikirim</li>
  <li>Pada Tanggal : {{ date('d F Y') }}</li>
</ul>

<p>Terima kasih telah mengajukan berkas ini. Berkas anda akan segera kami proses. Silakan mengecek status pengajuan anda di laman website kami : </p>
<ul>
  <li>Website : <a href="{{ url("/history") }}"></a>{{ url("/history") }}</li>
</ul>

{{-- kalimat penutup --}}
<p>Apabila ada kesalahan atau perbaikan mohon untuk mengirimkan feedback kepada kami dengan cara membalas email ini. Terima Kasih!</p>
<p>Jangan lupa untuk mengisi kritik dan saran yang membangun agar kami pada <a href="{{ url("/kritik-dan-saran") }}">halaman kritik dan saran</a> dapat lebih meningkatkan pelayanan kami terima kasih.</p>

<p>Salam hormat, SIBERKAS</p>
