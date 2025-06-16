@extends('layout.master')

@section('title', 'jiva petani ')

@section('content')
<main class="app-main" style="background-color: #f4f4f4;">
  <div class="container-fluid p-0">

    <style>
          @keyframes fadeIn {
  from {
    opacity: 0;
    transform: translateY(20px);
  }
  to {
    opacity: 1;
    transform: translateY(0);
  }
}

.fade-in {
  opacity: 0; 
  transition: opacity 1s ease;
}

.fade-in.show {
  animation: fadeIn 1s ease-out forwards;
}
    </style>
    
    <div style="width: 100%; overflow: hidden;">
        <img src="{{ asset('img/utama.jpg') }}" alt="BannerMDP"style="width: 100%; height: auto; display: block;">
    </div>

    <section class="container my-5" id="home">
  <div class="p-4"> 
    <h2 class="text-Success" >Tentang Pertanian</h2>
    <p class="fs-5">
      Pertanian adalah salah satu sektor terpenting dalam kehidupan manusia yang mencakup berbagai aktivitas seperti budidaya tanaman, pemeliharaan hewan ternak, dan pengelolaan sumber daya alam untuk memenuhi kebutuhan pangan, pakan, serat, dan bahan baku industri. Kegiatan pertanian telah menjadi bagian dari peradaban manusia sejak ribuan tahun lalu dan terus berkembang seiring kemajuan teknologi.
    </p>
    <p class="fs-5">
      Di Indonesia, pertanian memiliki peran vital dalam menopang perekonomian nasional serta menjadi sumber penghidupan bagi jutaan penduduk, terutama di wilayah pedesaan. Produk-produk pertanian lokal seperti padi, jagung, sayur-mayur, buah-buahan, kopi, dan rempah-rempah tidak hanya memenuhi kebutuhan dalam negeri, tetapi juga diekspor ke berbagai negara.
    </p>
    <p class="fs-5">
      Tantangan dalam dunia pertanian saat ini mencakup perubahan iklim, keterbatasan lahan, ketergantungan pada pupuk kimia, serta ketimpangan dalam rantai distribusi hasil panen. Oleh karena itu, dibutuhkan pendekatan baru yang lebih berkelanjutan, efisien, dan berbasis teknologi agar petani bisa mendapatkan hasil yang maksimal dan konsumen bisa memperoleh produk yang sehat dan terjangkau.
    </p>
    <p class="fs-5">
      Melalui pemanfaatan teknologi digital, seperti platform jual beli online, edukasi berbasis aplikasi, dan pemantauan hasil panen secara real-time, pertanian Indonesia dapat bergerak menuju era modern yang lebih cerdas dan terhubung. Inilah semangat yang ingin diusung oleh Jiva Petani: menjadikan pertanian sebagai sektor yang kuat, sejahtera, dan berdaya saing di tingkat global.
    </p>
  </div>
</section>

<!-- Layanan -->
<section class="container my-5" id="layanan">
  <div class="p-4">
    <h2 class="text-Success">Layanan Pertanian</h2>
    <ul class="fs-5">
      <li>Konsultasi pertanian modern</li>
      <li>Pelatihan teknologi pertanian</li>
      <li>Pengembangan lahan pertanian organik</li>
      <li>Distribusi hasil panen</li>
      <li>Pendampingan petani milenial</li>
    </ul>
  </div>
</section>

      
     <section class="py-5">
        <div class="container fade-in">
          <h2 class="mb-4 text-Success">Galeri</h2>
          <div class="row g-4">
            <div class="col-md-4">
              <div class="card h-100">
                <img src="{{ asset('img/beritap1.jpg') }}" class="card-img-top" alt="Berita 1">
                <div class="card-body">
                  <p class="card-text"></p>
                </div>
              </div>
            </div>
  
            <div class="col-md-4">
              <div class="card h-100">
                <img src="{{ asset('img/beritap2.jpg') }}" class="card-img-top" alt="Berita 2">
                <div class="card-body">

                  <p class="card-text"></p>
                </div>
              </div>
            </div>
  
            <div class="col-md-4">
              <div class="card h-100">
                <img src="{{ asset('img/beritap3.jpg') }}" class="card-img-top" alt="Berita 3">
                <div class="card-body">
                  <p class="card-text"></p>
                </div>
              </div>
            </div>
  
          </div>
        </div>
      </section>

      <section class="py-5">
        <div class="container fade-in">
          <div class="row g-4">
            <div class="col-md-4">
              <div class="card h-100">
                <img src="{{ asset('img/beritap4.jpg') }}" class="card-img-top" alt="Berita 4">
                <div class="card-body">
                  <p class="card-text"></p>
                </div>
              </div>
            </div>
  
            <div class="col-md-4">
              <div class="card h-100">
                <img src="{{ asset('img/beritap5.jpg') }}" class="card-img-top" alt="Berita 5">
                <div class="card-body">

                  <p class="card-text"></p>
                </div>
              </div>
            </div>
  
            <div class="col-md-4">
              <div class="card h-100">
                <img src="{{ asset('img/beritap6.jpg') }}" class="card-img-top" alt="Berita 6">
                <div class="card-body">
                  <p class="card-text"></p>
                </div>
              </div>
            </div>
  
          </div>
        </div>
      </section>
    
    
      
      <div class="row mx-5 fade-in" style="color: #f4f4f4; text-align: center;">
        <div class="col-lg-3 col-6">
          <div class="small-box bg-success">
            <div class="inner">
              <h3>6</h3>
              <p>Program Studi</p>
            </div>
          </div>
        </div>
      
        <div class="col-lg-3 col-6">
          <div class="small-box bg-success">
            <div class="inner">
              <h3>120</h3>
              <p>Dosen</p>
            </div>
          </div>
        </div>
      
        <div class="col-lg-3 col-6">
          <div class="small-box bg-success">
            <div class="inner">
              <h3>2500</h3>
              <p>Mahasiswa Aktif</p>
            </div>

          </div>
        </div>
      
        <div class="col-lg-3 col-6">
          <div class="small-box bg-success">
            <div class="inner">
              <h3>95%</h3>
              <p>Lulusan Terserap Kerja</p>
            </div>
          </div>
        </div>
      </div>
      
      <div class="container py-5 mx-5">
    <h1 class="text-success mb-4">Visi</h1>
    <p class="fs-5">
        “Menjadi platform digital terpercaya yang memberdayakan petani dan memperkuat rantai distribusi hasil pertanian secara adil, berkelanjutan, dan modern di Indonesia.”
    </p>

    <h2 class="text-success mt-5 mb-3">Misi</h2>
    <p class="fs-5">Misi Jiva Petani yaitu:</p>
    <ol class="fs-5">
        <li>Menyediakan akses langsung bagi petani untuk memasarkan hasil pertanian mereka tanpa perantara yang merugikan.</li>
        <li>Menghubungkan konsumen dengan hasil pertanian segar dan berkualitas langsung dari petani.</li>
        <li>Mendorong penggunaan teknologi di kalangan petani melalui pelatihan dan fitur-fitur platform yang ramah pengguna.</li>
        <li>Mengedepankan praktik pertanian yang ramah lingkungan dan mendukung produk lokal yang berkelanjutan.</li>
        <li>Menyediakan informasi harga, kualitas, dan asal produk secara terbuka untuk menciptakan kepercayaan antara penjual dan pembeli.</li>
    </ol>
</div>

<section class="container my-5" id="kontak">
    <div class="card p-4">
      <h2 class="border-start border-4 ps-2" style="border-color: var(--primary-color)">Kontak Kami</h2>
      <p><strong>Alamat:</strong> Jl. Sultan Iskandar Muda, Jakarta Selatan</p>
      <p><strong>Email:</strong> jivapertanian112@gmail.com</p>
      <p><strong>Telepon:</strong> 0812-7711-261</p>
      <h4>Formulir Kontak</h4>
      <form>
        <div class="mb-3">
          <input type="text" class="form-control" placeholder="Nama Anda" required>
        </div>
        <div class="mb-3">
          <input type="email" class="form-control" placeholder="Email Anda" required>
        </div>
        <div class="mb-3">
          <textarea class="form-control" rows="5" placeholder="Pesan Anda" required></textarea>
        </div>
        <button type="submit" class="btn btn-success">Kirim Pesan</button>
      </form>
    </div>
  </section>
   
  </div>
</main>
@endsection


