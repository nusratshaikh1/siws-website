<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
define('BASE_URL', 'http://localhost/siws');
require_once 'includes/header.php';
?>

<section class="recruiters-page">
  <h1>Our Recruiters</h1>
  <p>We are proud to be associated with top recruiters who provide excellent placement opportunities for our students.</p>
  
  <div class="recruiter-grid">
    <?php for ($i = 1; $i <= 11; $i++): ?>
      <div class="recruiter-item">
        <img src="<?php echo BASE_URL ?>/assets/images/recruiter<?php echo $i; ?>.png" alt="Recruiter <?php echo $i; ?>">
        <h4>Recruiter <?php echo $i; ?></h4>
      </div>
    <?php endfor; ?>
  </div>
</section>

<?php require_once 'includes/footer.php'; ?>
