{{-- buat halaman untuk email berkas_balasan --}}
<h3>Berkas anda telah diproses!</h3>
<ul>
  <li>Nama : {{ $user->nama }}</li>
  <li>NIK : {{ $user->nik }}</li>
  <li>Nama Berkas : {{ $nama_berkas }}</li>
  <li>Status : {{ $status }}</li>
  <li>Di proses oleh : {{ $admin }}</li>
</ul>

<p>Terima kasih telah mengajukan berkas ini. Berkas anda sedang {{ $status }} oleh kami. Untuk dapat memantau status pengajuan anda, dapat mengecek melalui.</p>
<ul>
  <li>Website : <a href="{{ url("/") }}"></a>{{ url("/") }}</li>
  <li>History Pengajuan : <a href="{{ url("/history") }}"></a>{{ url("/history") }}</li>
</ul>

{{-- kalimat penutup --}}
<p>Apabila ada kesalahan atau perbaikan mohon untuk mengirimkan feedback kepada kami dengan cara membalas email ini. Terima Kasih!</p>
<p>Jangan lupa untuk mengisi kritik dan saran yang membangun agar kami pada <a href="{{ url("/kritik-dan-saran") }}">halaman kritik dan saran</a> dapat lebih meningkatkan pelayanan kami terima kasih.</p>

<p>Salam hormat, {{ $admin }}</p>
