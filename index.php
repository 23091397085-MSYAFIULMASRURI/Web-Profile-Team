<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Team Profile</title>
    <link rel="stylesheet" href="css/style.css" />

    <!--font-->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Quicksand:wght@300..700&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <!--navbar-->
    <header>
      <nav class="navbar">
        <a href="#" class="navbar-logo"> K5 PEMWEB</a>

        <div class="navbar-nav">
          <ul>
            <a href="#">Home</a>
            <a href="#team">Team</a>
            <a href="#contact">Contact</a>
          </ul>

          <a id="hamburger-menu">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="24"
              height="24"
              viewBox="0 0 24 24"
              fill="none"
              stroke="currentColor"
              stroke-width="2"
              stroke-linecap="round"
              stroke-linejoin="round"
              class="feather feather-menu"
            >
              <line x1="3" y1="12" x2="21" y2="12"></line>
              <line x1="3" y1="6" x2="21" y2="6"></line>
              <line x1="3" y1="18" x2="21" y2="18"></line>
            </svg>
          </a>
        </div>
      </nav>
    </header>
    <!--navbar-->

    <!--hero section-->
    <section id="home" class="hero">
      <h1>Welcome to Our Team</h1>
      <p>Meet the amazing people behind the scene</p>
    </section>
    <!--hero section-->

    <!--team section-->
   <?php
include 'db_connect.php'; // Sambungkan ke database

// Query data dari tabel
$sql = "SELECT * FROM team_members";
$result = $conn->query($sql);
?>
    <!-- Team Section -->
    <section id="team" class="team">
        <h2>Our Team</h2>
        <div class="team-container">
            <?php
            // Loop untuk menampilkan data anggota tim
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo '<div class="member">';
                    echo '<img src="' . $row['photo_url'] . '" alt="' . $row['name'] . '" />';
                    echo '<div class="content-member">';
                    echo '<h3>' . $row['name'] . '</h3>';
                    echo '<p>' . $row['role'] . '</p>';
                    echo '</div>';
                    echo '</div>';
                }
            } else {
                echo '<p>No team members found.</p>';
            }
            ?>
        </div>
    </section>
    <!--team section-->

    <!--contact section-->
    <section id="contact" class="contact">
      <h2>Contact Us</h2>
      <div class="contact-icon">
        <a href="https://www.instagram.com/class.mi23c/">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            width="24"
            height="24"
            viewBox="0 0 24 24"
            fill="none"
            stroke="currentColor"
            stroke-width="2"
            stroke-linecap="round"
            stroke-linejoin="round"
            class="feather feather-instagram"
          >
            <rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
            <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
            <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
          </svg>
        </a>
        <a href="mailto:m.23085@mhs.unesa.ac.id">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            width="24"
            height="24"
            viewBox="0 0 24 24"
            fill="none"
            stroke="currentColor"
            stroke-width="2"
            stroke-linecap="round"
            stroke-linejoin="round"
            class="feather feather-mail"
          >
            <path
              d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"
            ></path>
            <polyline points="22,6 12,13 2,6"></polyline>
          </svg>
        </a>
      </div>
    </section>
    <!--contact section-->

    <!--footer-->
    <footer>
      <ul>
        <a href="#">Home</a>
        <a href="#">Team</a>
        <a href="#">Contact</a>
      </ul>

      <p>&copy; Copyright 2024 K5 PEMWEB</p>
    </footer>
    <!--footer-->
    <script src="js/script.js"></script>
  </body>
</html>
