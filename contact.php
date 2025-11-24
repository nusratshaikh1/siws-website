<?php require_once 'includes/header.php'; ?>
<section>
  <h2>Contact Us</h2>
  <p>Have a question? Send us a message and we will get back to you.</p>
  <form action="<?php echo BASE_URL ?>/send_message.php" method="post" class="contact-form">
    <label>Name</label>
    <input type="text" name="name" required>
    <label>Email</label>
    <input type="email" name="email" required>
    <label>Subject</label>
    <input type="text" name="subject">
    <label>Message</label>
    <textarea name="message" rows="6" required></textarea>
    <button type="submit" class="btn">Send Message</button>
  </form>
</section>
<?php require_once 'includes/footer.php'; ?>
