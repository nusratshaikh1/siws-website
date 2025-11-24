<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
define('BASE_URL', 'http://localhost/siws');
require_once 'includes/header.php';
?>

<section class="hero">
  <h1>Welcome to SIWS College</h1>
  <p>Where learning meets possibilities.</p>
  <a href="<?php echo BASE_URL ?>#admissions" class="btn large">Apply Now</a>
</section>

<section id="about" class="intro">
  <h2>About SIWS</h2>
  <p>The South Indian Welfare Society (SIWS) College has a proud legacy of academic excellence and holistic education. Our mission is to nurture future leaders through inclusive and value-based learning.</p>
</section>

<section class="cards">
  <div class="card">
    <h3><a href="academics.php#academics">Academics</a></h3>
    <p>Courses and departments info.</p>
  </div>
 <div class="card">
    <h3><a href="admissions.php#admissions">Admissions</a></h3>
    <p>Apply, eligibility, process info.</p>
  </div>
  <div class="card">
    <h3><a href="life.php#life">Life @ SIWS</a></h3>
    <p>Campus activities and culture.</p>
  </div>
</section>

<section id="recruiters" class="recruiters">
  <h2>Our Recruiters</h2>
  <div class="recruiter-grid">
    <?php for ($i = 1; $i <= 11; $i++): ?>
      <div class="recruiter-item">
        <img src="<?php echo BASE_URL ?>/assets/images/recruiter<?php echo $i; ?>.png" alt="Recruiter <?php echo $i; ?>">
      </div>
    <?php endfor; ?>
  </div>
</section>

<?php require_once 'includes/footer.php'; ?>
