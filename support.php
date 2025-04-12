<?php include 'header.php'; ?>
<style>
  /* Support/Donate page styling */
  .support-section {
    background: linear-gradient(135deg, #f0f8ff, #d3e0ea);
    padding: 40px 20px;
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: calc(100vh - 160px);
  }
  .support-container {
    background-color: #ffffff;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    padding: 30px;
    max-width: 500px;
    width: 100%;
  }
  .support-container h2 {
    text-align: center;
    color: #333;
    margin-bottom: 20px;
  }
  .support-container p {
    text-align: center;
    margin-bottom: 30px;
    color: #555;
  }
  .support-container label {
    font-weight: bold;
    margin-bottom: 5px;
    display: block;
    color: #555;
  }
  .support-container input {
    width: 100%;
    padding: 10px;
    margin-bottom: 20px;
    border: 1px solid #ccc;
    border-radius: 4px;
  }
  .support-container button {
    width: 100%;
    background-color: #007BFF;
    color: #fff;
    border: none;
    padding: 12px;
    border-radius: 4px;
    font-size: 1em;
    cursor: pointer;
    transition: background-color 0.3s ease;
  }
  .support-container button:hover {
    background-color: #0056b3;
  }
</style>

<section class="support-section">
  <div class="support-container">
    <h2>Support/Donate</h2>
    <p>Your support helps us continue our mission. Please fill out the form to donate.</p>
    <form method="post" action="formHandler.php" aria-label="Donation Form">
      <label for="donorName">Your Name:</label>
      <input type="text" id="donorName" name="donorName" required aria-required="true">
      
      <label for="donorEmail">Email:</label>
      <input type="email" id="donorEmail" name="donorEmail" required aria-required="true">
      
      <label for="donationAmount">Donation Amount:</label>
      <input type="number" id="donationAmount" name="donationAmount" required aria-required="true">
      
      <button type="submit">Donate</button>
    </form>
  </div>
</section>

<?php include 'footer.php'; ?>
