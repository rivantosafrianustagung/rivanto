<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Curriculum Vitae</title>
  <style>
    header h1 {
      font-size: 36px;
      font-weight: bold;
      text-align: center;
    }
    img {
      border-radius: 50%;
    }
  </style>
</head>
<body>
  <header>
    <h1>CV (CURICULUM VITAE)</h1>
    <img src="Rivan.jpg" width="250" height="200">
    <div class="contact-information">
      <?php
        $contact_info = array(
          "nama" => "Rivanto Safrianus Tagung",
          "alamat" => "Denpasar Selatan",
          "umur" => "19 Tahun",
          "email" => "rivantagung@gmail.com",
          "phone" => "+62-81345182988"
        );

        foreach ($contact_info as $key => $value) {
          echo "<p>$key : $value</p>";
        }
      ?>
    </div>
  </header>
  <hr>

  <section class="summary">
    <h2>Summary</h2>
    <p>
      <?php
        $summary = "Saya Rivanto Safrianus Tagung, seorang mahasiswa di kampus Instiki tahun 2024. 
        Saya memiliki pengalaman bekerja di kantor pemerintahan. Saya memiliki keahlian dalam bidang aplikasi perkantoran.
        Saya selalu bersemangat untuk melatih diri saya agar saya juga bisa menjadi seorang programmer.";
        echo $summary;
      ?>
    </p>
  </section>

  <hr>

  <section class="experience">
    <h2>Experience</h2>
    <?php
      $experiences = array(
        "job_title" => "DPMD MANGGARAI",
        "date_range" => "Desember 2021 - Januari 2023",
        "descriptions" => array(
          "Membereskan file-file dalam kantor DPMD Manggarai",
          "Membantu teman-teman kantor untuk pergi sosialisasi ke setiap desa",
          "Merapikan dan membersihkan kantor"
        )
      );
    ?>
    <div class="position">
      <h3>Job Title</h3>
      <h4><?php echo $experiences["job_title"]; ?></h4>
      <p><?php echo $experiences["date_range"]; ?></p>
      <ul>
        <?php
          foreach ($experiences["descriptions"] as $description) {
            echo "<li>$description</li>";
          }
        ?>
      </ul>
    </div>
  </section>

  <hr>

  <section class="education">
    <h2>Education</h2>
    <?php
      $educations = array(
        "degree" => "MAHASISWA",
        "school" => "INSTIKI CAMPUS",
        "date_range" => "2024- SEKARANG",
        "achievements" => array(
          "Kursus aplikasi perkantoran",
          "Juara 1 lomba bela diri antara dojo se-kabupaten Manggarai"
        )
      );
    ?>
    <div class="degree">
      <h3><?php echo $educations["degree"]; ?></h3>
      <h4><?php echo $educations["school"]; ?></h4>
      <p><?php echo $educations["date_range"]; ?></p>
      <ul>
        <?php
          foreach ($educations["achievements"] as $achievement) {
            echo "<li>$achievement</li>";
          }
        ?>
      </ul>
    </div>
  </section>

  <hr>

  <section class="skills">
    <h2>Skills</h2>
    <ul>
      <?php
        $skills = array(
          "Menguasai aplikasi perkantoran",
          "Bisa berbahasa Indonesia dengan baik",
          "Bisa berbahasa Inggris pasif"
        );

        foreach ($skills as $skill) {
          echo "<li>$skill</li>";
        }
      ?>
    </ul>
  </section>

</body