<h1>K5 PEMWEB - <i>Website Profile Team </i></h1>

<h2>Deskripsi</h2>
<p>Web team profile yang menampilkan informasi tentang beberapa anggota team dari nama, pendidikan, asal, latar belakang singkat, dan pengalaman proyek yang pernah ditempuh</p>

<p><strong><italic>Versi Static</italic></strong></p>
<a href="https://23091397085-msyafiulmasruri.github.io/Web-Profile-Team/">Web Team Profile</a>

<h2>Struktur Website</h2>
<p>Struktur pada web kita terdiri dari 2 halaman html static dan 1 php :</p>

<ol>
  <li><strong><code>index.php</code></strong></li>
</br>
  <ul>
    <li>Navbar Section</li>
    <ul>
      <li>Logo Website</li>
      <li>Menu Navbar</li>
      <li>Hamburger Menu</li>
    </ul>
    <li>Hero Section</li>
    <li>Team Section</li>
    <ul>
      <li>Cards Member :</li>
      <ul>
        <li>Member Image</li>
        <li>Nama Member</li>
        <li>Peran</li>
      </ul>
    </ul>
    <li>Contact Section :</li>
    <ul>
      <li>Instagram Icon</li>
      <li>Mail Icon</li>
    </ul>
    <li>Footer</li>
  </ul>
    <br />
    <li><strong><code>db_connect.php</code></strong> : File PHP untuk koneksi database</li>
</br>
    
  <li><strong><code>index.html</code> (Static)</strong></li>
  <br />
  <ul>
    <li>Navbar Section</li>
    <ul>
      <li>Logo Website</li>
      <li>Menu Navbar</li>
      <li>Hamburger Menu</li>
    </ul>
    <li>Hero Section</li>
    <li>Team Section</li>
    <ul>
      <li>Cards Member :</li>
      <ul>
        <li>Member Image</li>
        <li>Nama Member</li>
        <li>Peran</li>
      </ul>
    </ul>
    <li>Contact Section :</li>
    <ul>
      <li>Instagram Icon</li>
      <li>Mail Icon</li>
    </ul>
    <li>Footer</li>
  </ul>

  <br>
    <li><strong><code>detail-member1.html, detail-member2.html, detail-member3.html</code> (Static)</strong></li>
  <br>
  <ul>
    <li>Navbar Section</li>
    <ul>
      <li>Logo Website</li>
      <li>Menu Navbar</li>
      <li>Hamburger Menu</li>
    </ul>
    <li>Member Section :</li>
    <ul>
      <li>Nama Member</li>
      <li>Jurusan</li>
      <li>Asal Universitas</li>
      <li>Asal Daerah</li>
      <li>Latar Belakang Member</li>
      <li>Detail Pengalaman & Foto</li>
      <li>Detail Proyek, Sertifikasi & Foto</li>
  </ul>
    <li>Contact Section :</li>
    <ul>
      <li>Instagram Icon</li>
      <li>Mail Icon</li>
    </ul>
    <li>Footer</li>
  </ul>
</ol>

<h2>Style CSS</h2>

<ol>
  <br>
  <li><strong>Tipografi & Color</strong></li>
  <br>
  <ul>
    <li>Font Poppins, sans-serif</li>
    <li>Primary Color #012851</li>
    <li>Secondary Color #121212</li>
    <li>Background Color #ffff</li>
  </ul>
  <br>
  <li><strong>Pseudo Class Styling</strong></li>
  <br>
  <ul>
    <li>Hover Font, Cards, Button</li>
  </ul>
  <br>
  <li><strong>DOM</strong></li>
  <br>
  <ul>
    <li>Navbar</li>
    <li>Hamburger Menu</li>
    <li>Class Active</li>
  </ul>
</ol>

<h1>Database</h1>
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
    <h2>Setup Database</h2>
    <pre><code>CREATE DATABASE team_profile;</code></pre>
    <pre><code>CREATE TABLE team_members (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    role VARCHAR(255) NOT NULL,
    photo_url VARCHAR(255) NOT NULL
);</code></pre>
 <pre><code>INSERT INTO team_members (name, role, photo_url) VALUES
('M. Syafi\'ul Masruri', 'Front End Developer', 'img/syafiul.jpg'),
('Raditya Bani Ainur Ridho', 'Content Creator', 'img/raditya.jpg'),
('Atika Haniifatun Nisa\'', 'Content Creator', 'img/atika.jpg');</code></pre>

<h1>Teknologi yang Digunakan</h1>
    <ul>
        <li>Frontend: HTML5, CSS3, JavaScript</li>
        <li>Backend: PHP</li>
        <li>Database: MySQL</li>
        <li>Tools: XAMPP, Visual Studio Code</li>
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
