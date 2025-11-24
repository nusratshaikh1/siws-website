<?php
// life.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Life @ SIWS College</title>
  <link rel="stylesheet" href="assets/css/style.css" />
  <style>
    .life-section {
      max-width: 1100px;
      margin: 0 auto;
      padding: 20px;
    }
    .life-section h1 {
      text-align: center;
      margin-bottom: 20px;
    }
    .life-section .lead {
      text-align: center;
      margin-bottom: 40px;
      font-size: 18px;
      color: #444;
    }
    .activity {
      display: flex;
      align-items: flex-start;
      margin-bottom: 40px;
      gap: 20px;
    }
    .activity img {
      width: 280px;
      height: 180px;
      object-fit: cover;
      border-radius: 8px;
      box-shadow: 0 2px 8px rgba(0,0,0,0.2);
    }
    .activity h2 {
      margin-top: 0;
      color: #003366;
    }
    .activity-content {
      flex: 1;
    }
    @media (max-width: 768px) {
      .activity {
        flex-direction: column;
        align-items: center;
        text-align: center;
      }
      .activity img {
        width: 100%;
        max-width: 400px;
        height: auto;
      }
    }
  </style>
</head>
<body>

  <?php include 'includes/header.php'; ?>

  <main class="container life-section">
    <h1>Life @ SIWS</h1>
    <p class="lead">Explore various student facilities and spaces that support a vibrant and holistic campus experience.</p>

    <div class="activity">
      <img src="assets/images/gymkhana.jpg" alt="Gymkhana">
      <div class="activity-content">
        <h2>Gymkhana</h2>
        <p>The Gymkhana is located on the ground floor and houses indoor games like Carrom, Chess, and Table Tennis. It also serves as a space for dance practice and other extracurricular activities. It is accessible to students before and after lectures and during their breaks.</p>
      </div>
    </div>

    <div class="activity">
      <img src="assets/images/girls-common-room.jpg" alt="Girls' Common Room">
      <div class="activity-content">
        <h2>Girls' Common Room</h2>
        <p>This room offers a quiet and private space for girl students. It is equipped with benches, chairs, a mirror, a wash basin, and an attached washroom. The Girls’ Common Room is well-maintained and located conveniently for easy access.</p>
      </div>
    </div>

    <div class="activity">
      <img src="assets/images/boys-common-room.jpg" alt="Boys' Common Room">
      <div class="activity-content">
        <h2>Boys' Common Room</h2>
        <p>The Boys' Common Room provides a space where male students can relax and unwind between classes. It includes seating arrangements and is located on the ground floor for ease of use.</p>
      </div>
    </div>

    <div class="activity">
      <img src="assets/images/counselling-room.jpg" alt="Counselling Room">
      <div class="activity-content">
        <h2>Counselling Room</h2>
        <p>The college provides a dedicated counselling room for students who require academic or personal guidance. The room ensures privacy and offers support from trained counsellors to help students manage stress, relationships, and academic pressure.</p>
      </div>
    </div>

    <div class="activity">
      <img src="assets/images/canteen.jpg" alt="Canteen">
      <div class="activity-content">
        <h2>Canteen</h2>
        <p>The college canteen is a clean and hygienic space offering a variety of food options at affordable prices. It serves as a popular hangout spot where students can interact and relax during breaks.</p>
      </div>
    </div>

    <div class="activity">
    <img src="assets/images/health-centre.jpg" alt="Health Centre">
    <div class="activity-content">
        <h2>Health Centre</h2>
        <p>The college has a Health Centre located on the ground floor, equipped with basic medical facilities like a bed, stretcher, wheelchair, and an emergency kit. 
    A doctor visits twice a week for free check-ups and is also available on call during emergencies. 
    In major cases, students are shifted to nearby hospitals and parents are informed. 
    The centre also conducts health check-ups in collaboration with local hospitals.</p>
  </div>
</div>

  </main>

  <?php include 'includes/footer.php'; ?>

</body>
</html>
