<?php include 'header.php'; ?>
<section>
  <h2>Contact Us</h2>
  <p>Please fill out the form below to reach us.</p>
  <form method="post" action="formHandler.php" aria-label="Contact Form">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required aria-required="true"><br><br>
    
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required aria-required="true"><br><br>
    
    <label for="message">Message:</label><br>
    <textarea id="message" name="message" rows="5" required aria-required="true"></textarea><br><br>
    
    <button type="submit">Send Message</button>
  </form>
</section>
<?php include 'footer.php'; ?>
