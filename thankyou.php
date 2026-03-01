<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Thank You | Rankmator</title>
    <meta name="description" content="Thank you for contacting Rankmator. We will get back to you shortly.">
    <meta name="robots" content="noindex, nofollow">

    <?php include('header-link.php'); ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="js/header-loader.js"></script>

    <style>
        .thank-you-section {
            padding: 150px 0 100px;
            text-align: center;
            min-height: 80vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #f9f9f9;
        }

        .thank-you-card {
            background: #fff;
            padding: 50px;
            border-radius: 20px;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.08);
            max-width: 600px;
            width: 100%;
            margin: 0 auto;
        }

        .check-icon {
            font-size: 80px;
            color: #d0cc37;
            margin-bottom: 30px;
        }

        .thank-you-title {
            font-size: 36px;
            font-weight: 800;
            color: #1a1a1a;
            margin-bottom: 20px;
        }

        .thank-you-text {
            font-size: 18px;
            color: #666;
            margin-bottom: 40px;
            line-height: 1.6;
        }

        .btn-home {
            background: #d0cc37;
            color: #000;
            padding: 15px 40px;
            font-size: 16px;
            font-weight: 700;
            border-radius: 50px;
            text-decoration: none;
            transition: all 0.3s ease;
            display: inline-block;
            border: 2px solid #d0cc37;
        }

        .btn-home:hover {
            background: transparent;
            color: #d0cc37;
            text-decoration: none;
        }
    </style>
</head>

<body id="page-top" class="top">
    <div id="header-include"></div>

    <section class="thank-you-section">
        <div class="container">
            <div class="thank-you-card">
                <i class="fa fa-check-circle check-icon"></i>
                <h1 class="thank-you-title">Thank You!</h1>
                <p class="thank-you-text">Your message has been successfully sent. Our team will review your inquiry and
                    get back to you shortly.</p>
                <a href="index" class="btn-home">Back to Home</a>
            </div>
        </div>
    </section>

    <div id="footer-include"></div>

    <?php include('footer-link.php'); ?>
    <script src="js/footer-loader.js"></script>
</body>

</html>


