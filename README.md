<h1>K5 PEMWEB - Website Profile Team</h1>
    <h2>Deskripsi</h2>
    <p>Website ini adalah sebuah profil tim yang menampilkan informasi tentang anggota tim, termasuk nama, peran, latar belakang singkat, dan pengalaman mereka. Website ini juga menggunakan PHP untuk menghubungkan ke database, sehingga data anggota tim dapat dikelola secara dinamis.</p>
    <h2>Fitur Utama</h2>
    <ul>
        <li><strong>Halaman Utama:</strong> Menampilkan hero section dengan pesan selamat datang, daftar anggota tim, dan bagian kontak.</li>
        <li><strong>Halaman Detail Anggota:</strong> Informasi mendalam tentang anggota tim (opsional).</li>
        <li><strong>Responsivitas:</strong> Desain yang responsif untuk berbagai perangkat.</li>
    </ul>
    <h2>Struktur Website</h2>
    <h3>1. File HTML/PHP</h3>
    <ul>
        <li><code>index.php</code>: Halaman utama.</li>
        <li><code>db_connect.php</code>: File PHP untuk koneksi database.</li>
    </ul>
    <h3>2. Database</h3>
    <ul>
        <li><strong>Nama Database:</strong> <code>team_profile</code></li>
        <li><strong>Tabel:</strong> <code>team_members</code></li>
    </ul>
    <table>
        <thead>
            <tr>
                <th>id</th>
                <th>name</th>
                <th>role</th>
                <th>photo_url</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>M. Syafi'ul Masruri</td>
                <td>Front End Developer</td>
                <td>img/syafiul.jpg</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Raditya Bani Ainur Ridho</td>
                <td>Content Creator</td>
                <td>img/raditya.jpg</td>
            </tr>
            <tr>
                <td>3</td>
                <td>Atika Haniifatun Nisa'</td>
                <td>Content Creator</td>
                <td>img/atika.jpg</td>
            </tr>
        </tbody>
    </table>
    <h2>Cara Menjalankan Proyek</h2>
    <h3>1. Persiapan Lingkungan</h3>
    <p>Pastikan Anda memiliki server lokal seperti XAMPP atau WAMP.</p>
    <h3>2. Setup Database</h3>
    <pre><code>CREATE DATABASE team_profile;

CREATE TABLE team_members (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    role VARCHAR(255) NOT NULL,
    photo_url VARCHAR(255) NOT NULL
);

INSERT INTO team_members (name, role, photo_url) VALUES
('M. Syafi\'ul Masruri', 'Front End Developer', 'img/syafiul.jpg'),
('Raditya Bani Ainur Ridho', 'Content Creator', 'img/raditya.jpg'),
('Atika Haniifatun Nisa\'', 'Content Creator', 'img/atika.jpg');
</code></pre>
    <h3>3. Konfigurasi Koneksi Database</h3>
    <pre><code>&lt;?php
$servername = "localhost";
$username = "root";
$password = "ruri123";
$dbname = "team_profile";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?&gt;</code></pre>
    <h3>4. Menjalankan Proyek</h3>
    <p>Simpan file di folder <code>htdocs</code> dan akses melalui browser di alamat <code>http://localhost/nama-folder/index.php</code>.</p>
    <h2>Teknologi yang Digunakan</h2>
    <ul>
        <li>Frontend: HTML5, CSS3</li>
        <li>Backend: PHP</li>
        <li>Database: MySQL</li>
        <li>Tools: XAMPP/WAMP, Visual Studio Code</li>
    </ul>
    <h2>Software Requirements Specification (SRS)</h2>

<ol>
  <br>
  <li><strong>Pendahuluan</strong></li>
  <br>
  <ul>
    <li>Tujuan : Menyediakan informasi tentang anggota tim secara jelas dan menarik.</li>
    <li>Ruang Lingkup : Halaman utama, detail anggota tim, dan bagian kontak.</li>
  </ul>

  <br>
  <li><strong>Deskripsi Umum</strong></li>
  <br>
  <ul>
    <li>Fungsi Produk :</li>
    <ul>
      <li>Menampilkan informasi anggota tim (nama, foto, asal, latar belakang, posisi).</li>
      <li>Halaman detail untuk masing-masing anggota.</li>
      <li>Kontak melalui email dan media sosial.</li>
    </ul>
  </ul>

  <br>
  <li><strong>Persyaratan</strong></li>
  <br>
  <ul>
    <li>Fungsional :</li>
    <ul>
    <li>Halaman utama dengan ringkasan tim.</li>
    <li>Daftar anggota tim.</li>
    <li>Halaman detail anggota.</li>
    <li>Bagian kontak.</li>
    </ul>
  </ul>
  <br>
  <ul>
    <li>Non-Fungsional :</li>
    <ul>
      <li>Responsif di berbagai perangkat.</li>
      <li> Mematuhi standar aksesibilitas.</li>
      <li>Waktu muat < 3 detik.</li>
      <li>Kode terdokumentasi dengan baik.</li>
    </ul>
  </ul>
</ol>
