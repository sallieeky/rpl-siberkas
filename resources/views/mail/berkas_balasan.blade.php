{{-- buat halaman untuk email berkas_balasan --}}
<h3>Berkas anda telah selesai!</h3>
<ul>
  <li>Nama : {{ $user->nama }}</li>
  <li>NIK : {{ $user->nik }}</li>
  <li>Status : Selesai</li>
  <li>Nama Berkas : {{ $nama_berkas }}</li>
  <li>Berkas Balasan : <a href="{{ url("storage/berkas_balasan/" . $berkas_balasan) }}">Lihat Berkas Balasan</a></li>
  <li>Di proses oleh : {{ $admin }}</li>
</ul>

<p>Terima kasih telah mengajukan berkas ini. Berkas anda telah selesai diproses oleh kami. Silakan unduh berkas balasan yang anda ajukan pada laman website kami pada : </p>
<ul>
  <li>Website : <a href="{{ url("/history") }}"></a>{{ url("/history") }}</li>
  <li>Berkas Balasan : <a href="{{ url("storage/berkas_balasan/" . $berkas_balasan) }}">Lihat Berkas Balasan</a></li>
</ul>

{{-- kalimat penutup --}}
<p>Apabila ada kesalahan atau perbaikan mohon untuk mengirimkan feedback kepada kami dengan cara membalas email ini. Terima Kasih!</p>
<p>Jangan lupa untuk mengisi kritik dan saran yang membangun agar kami pada <a href="{{ url("/kritik-dan-saran") }}">halaman kritik dan saran</a> dapat lebih meningkatkan pelayanan kami terima kasih.</p>

<p>Salam hormat, {{ $admin }}</p>
