<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Thank You | Rankmator — Digital Marketing Agency</title>
  <?php include 'links.php'; ?>
  <style>
    .thankyou-page {
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      background: linear-gradient(135deg, #0868A0 0%, #054e78 100%);
      padding: 40px 20px;
    }
    .thankyou-card {
      background: #fff;
      border-radius: 30px;
      padding: 60px 50px;
      text-align: center;
      max-width: 600px;
      box-shadow: 0 30px 60px rgba(0,0,0,0.3);
    }
    .thankyou-icon {
      width: 100px;
      height: 100px;
      background: linear-gradient(135deg, #6BAB44, #4d8a2c);
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      margin: 0 auto 30px;
      font-size: 50px;
      color: #fff;
      box-shadow: 0 10px 30px rgba(107,171,68,0.4);
    }
    .thankyou-card h1 {
      font-size: 36px;
      font-weight: 900;
      color: #0d1b2a;
      margin-bottom: 15px;
    }
    .thankyou-card p {
      font-size: 18px;
      color: #64748b;
      line-height: 1.7;
      margin-bottom: 30px;
    }
    .thankyou-info {
      background: #f8fafc;
      border-radius: 15px;
      padding: 25px;
      margin-bottom: 30px;
    }
    .thankyou-info h3 {
      font-size: 16px;
      font-weight: 700;
      color: #0868A0;
      margin-bottom: 15px;
    }
    .thankyou-info p {
      font-size: 15px;
      margin-bottom: 10px;
    }
    .thankyou-info i {
      color: #6BAB44;
      margin-right: 8px;
    }
    .btn-home {
      display: inline-flex;
      align-items: center;
      gap: 10px;
      padding: 16px 36px;
      background: linear-gradient(135deg, #0868A0, #054e78);
      color: #fff;
      border-radius: 50px;
      font-size: 16px;
      font-weight: 700;
      text-decoration: none;
      transition: all 0.3s;
      box-shadow: 0 8px 25px rgba(8,104,160,0.3);
    }
    .btn-home:hover {
      transform: translateY(-3px);
      box-shadow: 0 12px 35px rgba(8,104,160,0.4);
    }
  </style>
</head>
<body>

<?php include 'header.php'; ?>

<section class="thankyou-page">
  <div class="thankyou-card fade-in">
    <div class="thankyou-icon">
      <i class="fa-solid fa-check"></i>
    </div>
    <h1>Thank You for Reaching Out!</h1>
    <p>Your message has been successfully received by our team. One of our digital growth experts will get in touch with you within 24 hours.</p>

    <div class="thankyou-info">
      <h3><i class="fa-solid fa-clock"></i> What Happens Next?</h3>
      <p><i class="fa-solid fa-check-circle"></i> Our team will review your enquiry</p>
      <p><i class="fa-solid fa-check-circle"></i> A growth expert will reach out within 24 hours</p>
      <p><i class="fa-solid fa-check-circle"></i> We'll schedule a free 30-minute discovery call</p>
      <p><i class="fa-solid fa-check-circle"></i> You'll receive a customized proposal within 3-5 business days</p>
    </div>

    <a href="index.php" class="btn-home">
      <i class="fa-solid fa-arrow-left"></i> Back to Homepage
    </a>
  </div>
</section>

<script src="script.js"></script>
</body>
</html>