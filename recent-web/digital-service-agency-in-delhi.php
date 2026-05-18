<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digital Marketing Agency in Delhi – Rankmator</title>


    <meta name="description"
        content="Rankmator is a 360° digital marketing agency in Delhi that helps businesses improve search rankings, generate targeted traffic, leads, and convert visitors into customers.">
    <meta name="keywords"
        content="Digital marketing agency in Delhi, SEO services Delhi, digital marketing company Delhi, digital marketing experts in Delhi">
    <meta name="author" content="Rankmator">
    <link rel="canonical" href="digital-service-agency-in-delhi" />


    <?php include('header-link.php'); ?>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            overflow-x: hidden;
        }


        .seo-hero {
            background-color: #212121;
            background-image: url('https://cognivicdigital.com/images/seo/texture.png');
            background-repeat: repeat;
            padding: 180px 0 100px;
            position: relative;
            overflow: hidden;
        }

        .seo-hero h1 {
            color: #d0cc37;
            font-size: 42px;
            font-weight: 800;
            line-height: 1.3;
            margin-bottom: 20px;
            text-align: left;
        }

        .seo-hero p {
            color: #fff;
            font-size: 18px;
            line-height: 1.7;
            margin-bottom: 15px;
            text-align: left;
        }


        .hero-form {
            background: rgba(255, 255, 255, 0.05);
            padding: 40px;
            border-radius: 15px;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        .hero-form h3 {
            color: #d0cc37;
            font-size: 24px;
            font-weight: 700;
            margin-bottom: 20px;
            text-transform: uppercase;
        }

        .hero-form .form-control {
            background: rgba(255, 255, 255, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.2);
            color: #fff;
            padding: 12px 15px;
            margin-bottom: 15px;
            font-size: 15px;
        }

        .hero-form .form-control:focus {
            background: rgba(255, 255, 255, 0.15);
            border-color: #d0cc37;
            color: #fff;
            box-shadow: 0 0 0 0.2rem rgba(208, 204, 55, 0.25);
        }

        .hero-form .form-control::placeholder {
            color: rgba(255, 255, 255, 0.6);
        }

        .hero-form textarea.form-control {
            min-height: 120px;
            resize: vertical;
        }


        .seo-section {
            padding: 30px 0;
        }

        .section-title {
            font-size: 42px;
            font-weight: 800;
            margin-bottom: 2px;
            line-height: 1.3;
            color: #1a1a1a;
        }

        .section-subtitle {
            font-size: 18px;
            color: #666;
            margin-bottom: 5px;
            line-height: 1.6;
        }


        .why-choose-card {
            background: #fff;
            padding: 40px 30px;
            border-radius: 20px;
            box-shadow: 0 5px 30px rgba(0, 0, 0, 0.08);
            margin-bottom: 30px;
            transition: all 0.3s ease;
            border: 2px solid rgba(255, 255, 255, 0.15);
            display: flex;
            flex-direction: column;
            height: 100%;
            min-height: 280px;
        }

        .why-choose-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 50px rgba(208, 204, 55, 0.15);
            border-color: #d0cc37;
        }

        .why-choose-card h4 {
            font-size: 22px;
            font-weight: 700;
            color: #1a1a1a;
            margin-bottom: 15px;
        }

        .why-choose-card p {
            color: #666;
            line-height: 1.7;
            margin: 0;
        }


        .startup-usp-section {
            background: #f9f9f9;
            padding: 40px 0;
            position: relative;
        }



        .startup-usp-box {
            background: #fff;
            padding: 50px;
            border-radius: 25px;
            box-shadow: 0 5px 30px rgba(0, 0, 0, 0.08);
            border: 2px solid #f0f0f0;
        }

        .startup-badge {
            background: #d0cc37;
            color: #000;
            padding: 10px 30px;
            border-radius: 50px;
            font-size: 14px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1px;
            display: inline-block;
            margin-bottom: 20px;
        }

        .startup-usp-box h2 {
            font-size: 36px;
            font-weight: 800;
            color: #1a1a1a;
            margin-bottom: 20px;
        }

        .startup-usp-box .discount {
            font-size: 72px;
            font-weight: 900;
            color: #d0cc37;
            line-height: 1;
            margin: 20px 0;
        }

        .startup-features {
            margin-top: 30px;
        }

        .startup-feature {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
            font-size: 18px;
            color: #444;
            justify-content: flex-start;
        }

        .startup-feature::before {
            content: '??';
            margin-right: 15px;
            font-size: 24px;
        }


        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            margin-top: 20px;
        }

        .service-card {
            background: #fff;
            padding: 40px 30px;
            border-radius: 20px;
            box-shadow: 0 5px 25px rgba(0, 0, 0, 0.08);
            transition: all 0.4s ease;
            position: relative;
            overflow: hidden;
            border: 2px solid rgba(255, 255, 255, 0.15);
        }

        .service-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 5px;
            background: #d0cc37;
            transform: scaleX(0);
            transform-origin: left;
            transition: transform 0.4s ease;
        }

        .service-card:hover::before {
            transform: scaleX(1);
        }

        .service-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 50px rgba(208, 204, 55, 0.2);
            border-color: #d0cc37;
        }

        .service-icon {
            width: 70px;
            height: 70px;
            background: #d0cc37;
            border-radius: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 32px;
            margin-bottom: 25px;
            color: #000;
        }

        .service-card h4 {
            font-size: 22px;
            font-weight: 700;
            color: #1a1a1a;
            margin-bottom: 15px;
        }

        .service-card p {
            color: #666;
            line-height: 1.7;
            margin: 0;
        }


        .industries-grid {
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
            justify-content: center;
            margin-top: 20px;
        }

        .industry-tag {
            background: #f0f0f0;
            color: #1a1a1a;
            padding: 15px 30px;
            border-radius: 50px;
            font-size: 16px;
            font-weight: 600;
            transition: all 0.3s ease;
            border: 2px solid rgba(255, 255, 255, 0.15);
            cursor: default;
        }

        .industry-tag:hover {
            background: #d0cc37;
            color: #000;
            transform: scale(1.05);
            border-color: #d0cc37;
        }


        .trust-list {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin-top: 20px;
        }

        .trust-item {
            display: flex;
            align-items: flex-start;
            padding: 20px;
            background: #fff;
            border-radius: 15px;
            box-shadow: 0 3px 15px rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
        }

        .trust-item:hover {
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
            transform: translateX(5px);
        }

        .trust-item::before {
            content: '✓';
            color: #d0cc37;
            font-size: 24px;
            font-weight: 700;
            margin-right: 15px;
            flex-shrink: 0;
        }

        .trust-item span {
            color: #444;
            font-size: 16px;
            line-height: 1.6;
        }

        .final-cta {
            background: #212121;
            padding: 30px 0;
            color: #fff;
            text-align: center;
            position: relative;
        }



        .final-cta h2 {
            font-size: 42px;
            font-weight: 800;
            color: #fff;
            margin-bottom: 20px;
        }

        .final-cta p {
            font-size: 20px;
            color: rgba(255, 255, 255, 0.9);
            margin-bottom: 15px;
        }

        .final-cta .cta-highlight {
            font-size: 28px;
            font-weight: 700;
            color: #d0cc37;
            margin: 30px 0;
        }

        .btn-final-cta {
            background: #d0cc37;
            color: #000;
            padding: 20px 50px;
            font-size: 18px;
            font-weight: 700;
            border-radius: 0;
            border: 2px solid #d0cc37;
            transition: all 0.3s ease;
            text-transform: uppercase;
            letter-spacing: 2px;
            margin-top: 20px;
        }

        .btn-final-cta:hover {
            opacity: 0.65;
            color: #000;
        }


        .bg-light-gray {
            background-color: #f8f9fa;
        }

        .bg-white {
            background-color: #fff;
        }


        .stats-section {
            background: #ffffff;
            padding: 50px 0;
            position: relative;
        }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 40px;
            margin-top: 20px;
        }

        .stat-item {
            text-align: center;
        }

        .stat-number {
            font-size: 48px;
            font-weight: 900;
            color: #d0cc37;
            line-height: 1;
            margin-bottom: 10px;
        }

        .stat-label {
            font-size: 16px;
            color: #1a1a1a;
            font-weight: 500;
        }


        .process-section {
            background: #212121;
            padding: 30px 0;
        }

        .process-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
            margin-top: 20px;
        }

        .process-step {
            text-align: center;
            padding: 30px 20px;
            background: rgba(255, 255, 255, 0.05);
            border-radius: 15px;
            border: 1px solid rgba(255, 255, 255, 0.1);
            transition: all 0.3s ease;
            position: relative;
        }

        .process-step:hover {
            background: rgba(255, 255, 255, 0.08);
            border-color: #d0cc37;
            transform: translateY(-5px);
        }

        .process-number {
            width: 60px;
            height: 60px;
            background: #d0cc37;
            color: #000;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
            font-weight: 900;
            margin: 0 auto 20px;
        }



        .process-step h4 {
            color: #fff;
            font-size: 20px;
            font-weight: 700;
            margin-bottom: 10px;
        }

        .process-step p {
            color: #ccc;
            font-size: 15px;
            line-height: 1.6;
            margin: 0;
        }


        .faq-section {
            background: #212121;
            padding: 30px 0;
        }

        .faq-container {
            max-width: 900px;
            margin: 50px auto 0;
        }

        .faq-item {
            background: rgba(255, 255, 255, 0.05);
            border-radius: 15px;
            margin-bottom: 20px;
            border: 1px solid rgba(255, 255, 255, 0.1);
            overflow: hidden;
            transition: all 0.3s ease;
        }

        .faq-item:hover {
            border-color: #d0cc37;
        }

        .faq-question {
            padding: 25px 30px;
            cursor: pointer;
            display: flex;
            justify-content: space-between;
            align-items: center;
            color: #fff;
            font-size: 18px;
            font-weight: 600;
        }

        .faq-question:hover {
            color: #d0cc37;
        }

        .faq-icon {
            font-size: 24px;
            color: #d0cc37;
            transition: transform 0.3s ease;
        }

        .faq-item.active .faq-icon {
            transform: rotate(45deg);
        }

        .faq-answer {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease;
        }

        .faq-item.active .faq-answer {
            max-height: 500px;
        }

        .faq-answer-content {
            padding: 0 30px 25px;
            color: #ccc;
            font-size: 16px;
            line-height: 1.7;
        }


        .guarantee-section {
            background: #fff;
            padding: 60px 0;
        }

        .guarantee-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
            margin-top: 20px;
        }

        .guarantee-item {
            text-align: center;
            padding: 30px 20px;
            background: #f9f9f9;
            border-radius: 15px;
            transition: all 0.3s ease;
        }

        .guarantee-item:hover {
            background: #fff;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
        }

        .guarantee-icon {
            font-size: 48px;
            margin-bottom: 15px;
        }

        .guarantee-item h4 {
            font-size: 18px;
            font-weight: 700;
            color: #1a1a1a;
            margin-bottom: 10px;
        }

        .guarantee-item p {
            color: #666;
            font-size: 14px;
            margin: 0;
        }


        .sticky-cta {
            position: fixed;
            bottom: 0;
            left: 0;
            right: 0;
            background: #d0cc37;
            padding: 15px 0;
            box-shadow: 0 -5px 20px rgba(0, 0, 0, 0.2);
            z-index: 9999;
            transform: translateY(100%);
            transition: transform 0.3s ease;
        }

        .sticky-cta.show {
            transform: translateY(0);
        }

        .sticky-cta-content {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 20px;
        }

        .sticky-cta-text {
            color: #000;
            font-size: 18px;
            font-weight: 700;
            margin: 0;
        }

        .sticky-cta-buttons {
            display: flex;
            gap: 15px;
        }

        .btn-sticky {
            background: #212121;
            color: #fff;
            padding: 12px 30px;
            border: 2px solid #212121;
            border-radius: 50px;
            font-weight: 700;
            text-decoration: none;
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            gap: 8px;
        }

        .btn-sticky:hover {
            background: transparent;
            color: #000;
            text-decoration: none;
        }


        @media (max-width: 768px) {
            .seo-hero {
                padding: 100px 0 50px;
            }

            .seo-hero h1 {
                font-size: 28px;
                text-align: center;
            }

            .seo-hero p {
                font-size: 16px;
                text-align: center;
            }

            .section-title {
                font-size: 28px;
            }

            .startup-usp-box {
                padding: 30px 20px;
            }

            .startup-usp-box h2 {
                font-size: 24px;
            }

            .startup-usp-box .discount {
                font-size: 48px;
            }

            .final-cta {
                padding: 40px 0;
            }

            .why-choose-card {
                min-height: auto;
            }

            .service-card {
                padding: 20px 15px;
                margin-bottom: 15px;
                height: auto;
                min-height: auto;
            }

            .service-icon {
                display: none;
            }

            .service-card h4 {
                margin-top: 0;
                margin-bottom: 10px;
                font-size: 18px;
            }

            .service-card p {
                margin-bottom: 0;
                font-size: 14px;
            }

            .final-cta h2 {
                font-size: 28px;
            }

            .final-cta p {
                font-size: 16px;
            }

            .final-cta .cta-highlight {
                font-size: 20px;
            }

            .services-grid {
                grid-template-columns: 1fr;
            }

            .stats-grid {
                grid-template-columns: repeat(2, 1fr);
                gap: 30px;
            }

            .stat-number {
                font-size: 36px;
            }

            .sticky-cta-content {
                flex-direction: column;
                text-align: center;
            }

            .sticky-cta-text {
                font-size: 14px;
            }

            .btn-sticky {
                padding: 10px 20px;
                font-size: 14px;
            }
        }


        .growth-cta-section {
            background-color: #212121;
            padding: 40px 0;
            color: #fff;
            position: relative;
        }

        .growth-cta-content h2 {
            font-size: 38px;
            font-weight: 800;
            margin-bottom: 15px;
            line-height: 1.2;
            color: #fff;
            text-align: left;
        }

        .growth-cta-content p.subheadline {
            font-size: 20px;
            font-weight: 500;
            margin-bottom: 30px;
            line-height: 1.5;
            color: #fff;
            text-align: left;
        }

        .highlight-text {
            color: #d0cc37;
            position: relative;
            display: inline-block;
        }

        .highlight-text::after {
            content: '';
            position: absolute;
            bottom: -2px;
            left: 0;
            width: 100%;
            height: 3px;
            background-color: #d0cc37;
            border-radius: 2px;
        }

        .growth-form {
            display: flex;
            gap: 0;
            max-width: 500px;
        }

        .growth-input {
            flex: 1;
            padding: 15px 20px;
            border: none;
            border-radius: 4px 0 0 4px;
            font-size: 16px;
            color: #333;
            outline: none;
        }

        .growth-btn {
            background-color: #d0cc37;
            color: #000;
            padding: 15px 30px;
            border: none;
            border-radius: 0 4px 4px 0;
            font-weight: 700;
            font-size: 16px;
            text-wrap: auto;
            cursor: pointer;
            transition: all 0.3s ease;
            white-space: nowrap;
        }

        .growth-btn:hover {
            opacity: 0.9;
        }

        .growth-image-container {
            position: relative;
            display: flex;
            align-items: flex-end;
            justify-content: center;
        }

        .growth-image {
            max-width: 100%;
            height: auto;
            position: relative;
            z-index: 1;
        }

        @media (max-width: 768px) {
            .growth-form {
                flex-direction: column;
            }

            .growth-input,
            .growth-btn {
                width: 100%;
                border-radius: 4px;
                text-wrap: auto;
            }

            .growth-input {
                margin-bottom: 10px;
            }

            .growth-image-container {
                margin-top: 40px;
            }

            .growth-cta-content h2,
            .growth-cta-content p.subheadline {
                text-align: center;
            }
        }


        @media (max-width: 480px) {
            .seo-hero h1 {
                font-size: 24px;
            }

            .section-title {
                font-size: 24px;
            }

            .hero-form {
                padding: 25px 20px;
            }

            .why-choose-card,
            .service-card {
                padding: 25px 20px;
            }

            .service-icon {
                width: 50px;
                height: 50px;
                font-size: 24px;
            }

            .process-grid,
            .stats-grid,
            .trust-list,
            .guarantee-grid {
                grid-template-columns: 1fr;
                gap: 20px;
            }

            .industry-tag {
                padding: 12px 20px;
                font-size: 14px;
            }

            .btn-brand,
            .btn-final-cta {
                padding: 15px 30px;
                font-size: 14px;
            }

            .faq-question {
                font-size: 16px;
                padding: 20px 20px;
            }

            .faq-answer-content {
                padding: 0 20px 20px;
                font-size: 15px;
            }
        }
    </style>
    <style>
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="js/header-loader.js"></script>
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top" class="top">
    <div id="header-include"></div>


    <section class="seo-hero">
        <div class="container">
            <div class="row">

                <div class="col-md-7">
                    <h1>Digital Marketing Agency in Delhi – Rankmator</h1>
                    <p>Businesses today compete in a highly digital environment where visibility on search engines and online platforms directly influences growth. <strong>Rankmator is a 360° digital marketing agency in Delhi</strong> that helps businesses improve search rankings, generate targeted traffic, leads, and convert visitors into customers.</p>
                    <p>Our approach focuses on data-driven marketing strategies, measurable performance, and long-term growth. From SEO and paid advertising to website development and social media marketing, we provide complete digital solutions for startups, local businesses, and established brands across India. With a proven track record of improving keyword rankings, organic traffic, and lead generation, Rankmator helps businesses build strong online visibility and sustainable growth.</p>

                </div>


                <div class="col-md-5">
                    <div class="hero-form">
                        <h3>Get Free AI Strategy</h3>
                        <form action="mail.php" method="POST" name="aiMarketingContactForm" id="aiMarketingContactForm"
                            novalidate>
                            <input name="name" type="text" class="form-control" placeholder="Your Name *" id="hero-name"
                                required>
                            <input name="email" type="email" class="form-control" placeholder="Your Email *"
                                id="hero-email" required>
                            <input name="phone" type="tel" class="form-control" placeholder="Your Phone *"
                                id="hero-phone" required>
                            <textarea class="form-control" name="message" placeholder="Tell us about your business *"
                                id="hero-message" required></textarea>
                            <button type="submit" class="btn btn-brand btn-lg btn-block">Book Your FREE
                                Consultation</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="stats-section" style="background: #f9f9f9;">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1 text-center">
                    <h2 class="section-title" style="color: #1a1a1a;">Case Studies – Our Clients SEO Results</h2>
                    <p class="section-subtitle" style="color: #666;">Rankmator has helped businesses across different industries improve their online visibility and search rankings.<br>Below are examples of keyword ranking improvements achieved through our SEO strategies.</p>
                </div>
            </div>
            <div class="row" style="margin-top: 40px;">
                <div class="col-md-10 col-md-offset-1">
                    <div class="table-responsive" style="background: #fff; border-radius: 15px; box-shadow: 0 5px 30px rgba(0,0,0,0.08); padding: 30px;">
                        <table class="table table-striped table-hover" style="font-size: 16px;">
                            <thead style="background: #212121; color: #fff;">
                                <tr>
                                    <th style="padding: 15px;">Client Website</th>
                                    <th style="padding: 15px;">Keyword</th>
                                    <th style="padding: 15px;">Ranking Achieved</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td style="padding: 15px; font-weight: 600;">Business Website</td>
                                    <td style="padding: 15px;">Buy Ceramic Bathroom Sets</td>
                                    <td style="padding: 15px; color: #212121; font-weight: bold;">Top 3</td>
                                </tr>
                                <tr>
                                    <td style="padding: 15px; font-weight: 600;">Ecommerce Store</td>
                                    <td style="padding: 15px;">Acrylic Soap Dispenser</td>
                                    <td style="padding: 15px; color: #212121; font-weight: bold;">Top 5</td>
                                </tr>
                                <tr>
                                    <td style="padding: 15px; font-weight: 600;">Education Institute</td>
                                    <td style="padding: 15px;">Digital Marketing Course Delhi</td>
                                    <td style="padding: 15px; color: #212121; font-weight: bold;">Top 5</td>
                                </tr>
                                <tr>
                                    <td style="padding: 15px; font-weight: 600;">Travel Website</td>
                                    <td style="padding: 15px;">Wildlife Safari Booking</td>
                                    <td style="padding: 15px; color: #212121; font-weight: bold;">Top 3</td>
                                </tr>
                                <tr>
                                    <td style="padding: 15px; font-weight: 600;">Local Business</td>
                                    <td style="padding: 15px;">Waterproofing Services Delhi</td>
                                    <td style="padding: 15px; color: #212121; font-weight: bold;">Top 3</td>
                                </tr>
                                <tr>
                                    <td style="padding: 15px; font-weight: 600;">Real Estate Agency</td>
                                    <td style="padding: 15px;">Property Dealers in Noida</td>
                                    <td style="padding: 15px; color: #212121; font-weight: bold;">Top 3</td>
                                </tr>
                                <tr>
                                    <td style="padding: 15px; font-weight: 600;">Healthcare Clinic</td>
                                    <td style="padding: 15px;">Best Dermatologist Near Me</td>
                                    <td style="padding: 15px; color: #212121; font-weight: bold;">Top 5</td>
                                </tr>
                                <tr>
                                    <td style="padding: 15px; font-weight: 600;">Software Company</td>
                                    <td style="padding: 15px;">CRM Software Solutions India</td>
                                    <td style="padding: 15px; color: #212121; font-weight: bold;">Top 3</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="seo-section" style="background: #212121;">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1 text-center">
                    <h2 class="section-title" style="color: #fff;">Why Choose Rankmator?</h2>
                    <p class="section-subtitle mb-4" style="color: #ccc;margin-bottom:20px">Choosing the right digital marketing agency can significantly impact your business success. Here’s why businesses trust Rankmator:</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="why-choose-card">
                        <h4>Proven SEO Results</h4>
                        <p>Our strategies are focused on improving keyword rankings, increasing traffic, and generating real business leads.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="why-choose-card">
                        <h4>Data-Driven Marketing Approach</h4>
                        <p>Every campaign we run is backed by data analysis, research, and performance tracking.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="why-choose-card">
                        <h4>Customized Marketing Strategies</h4>
                        <p>We understand that every business is unique, so we create personalized strategies based on your goals and industry.</p>
                    </div>
                </div>
            </div>
            <div class="row" style="margin-top: 30px; justify-content: center; display: flex; flex-wrap: wrap;">
                <div class="col-md-4">
                    <div class="why-choose-card">
                        <h4>Transparent Reporting</h4>
                        <p>Our clients receive clear reports on rankings, traffic, and campaign performance.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="why-choose-card">
                        <h4>Affordable Marketing Solutions</h4>
                        <p>We provide cost-effective digital marketing services suitable for startups, local businesses, and growing brands.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="process-section" style="background: #111; padding: 80px 0;">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-title" style="color: #fff; margin-bottom: 20px;">Our Client Website Performance and Growth</h2>
                    <p class="section-subtitle" style="color: #ccc; line-height: 1.8;">Digital marketing success is measured through traffic growth, ranking improvements, and conversion performance. See how we drive measurable impact.</p>
                </div>
            </div>
            <div class="row" style="margin-top: 50px;">
                <div class="col-md-10 col-md-offset-1">
                    <div style="background: rgba(255, 255, 255, 0.05); border-radius: 20px; border: 1px solid rgba(255,255,255,0.1); padding: 30px; box-shadow: 0 15px 40px rgba(0,0,0,0.4);">
                        <ul class="nav nav-tabs" role="tablist" style="border-bottom: none; display: flex; justify-content: center; gap: 15px; margin-bottom: 30px; flex-wrap: wrap;">
                            <li role="presentation" class="active" style="width: auto;">
                                <a href="#traffic" aria-controls="traffic" role="tab" data-toggle="tab" style="background: transparent; color: #fff; border: 2px solid rgba(255,255,255,0.2); border-radius: 50px; padding: 12px 30px; font-weight: 600; font-size: 16px; transition: all 0.3s;" onmouseover="if(!this.parentNode.classList.contains('active')) this.style.borderColor='#d0cc37';" onmouseout="if(!this.parentNode.classList.contains('active')) this.style.borderColor='rgba(255,255,255,0.2)';">
                                    <i class="fa fa-line-chart" style="margin-right: 8px;"></i> Traffic Growth
                                </a>
                            </li>
                            <li role="presentation" style="width: auto;">
                                <a href="#rankings" aria-controls="rankings" role="tab" data-toggle="tab" style="background: transparent; color: #fff; border: 2px solid rgba(255,255,255,0.2); border-radius: 50px; padding: 12px 30px; font-weight: 600; font-size: 16px; transition: all 0.3s;" onmouseover="if(!this.parentNode.classList.contains('active')) this.style.borderColor='#d0cc37';" onmouseout="if(!this.parentNode.classList.contains('active')) this.style.borderColor='rgba(255,255,255,0.2)';">
                                    <i class="fa fa-trophy" style="margin-right: 8px;"></i> Search Rankings
                                </a>
                            </li>
                        </ul>

                        <div class="tab-content" style="background: #1a1a1a; border-radius: 15px; padding: 30px; border: 1px solid rgba(208,204,55,0.2);">
                            <div role="tabpanel" class="tab-pane fade in active" id="traffic">
                                <div class="row" style="display: flex; align-items: center; flex-wrap: wrap;">
                                    <div class="col-md-5">
                                        <h3 style="color: #d0cc37; font-weight: 700; font-size: 28px; margin-bottom: 15px; margin-top: 0;">Explosive Traffic Scaling</h3>
                                        <p style="color: #ccc; font-size: 16px; line-height: 1.7; margin-bottom: 25px;">Through a combination of technical SEO and targeted content marketing, we consistently scale organic traffic for our clients. The result? A larger audience, higher brand visibility, and a steady stream of incoming leads.</p>
                                        <ul style="list-style: none; padding: 0; margin-bottom: 20px;">
                                            <li style="color: #fff; margin-bottom: 10px; font-size: 15px;"><i class="fa fa-check-circle" style="color: #d0cc37; margin-right: 10px;"></i> Advanced On-Page Optimization</li>
                                            <li style="color: #fff; margin-bottom: 10px; font-size: 15px;"><i class="fa fa-check-circle" style="color: #d0cc37; margin-right: 10px;"></i> High-Authority Link Building</li>
                                            <li style="color: #fff; font-size: 15px;"><i class="fa fa-check-circle" style="color: #d0cc37; margin-right: 10px;"></i> Data-Driven Search Context</li>
                                        </ul>
                                    </div>
                                    <div class="col-md-7">
                                        <div style="border-radius: 10px; overflow: hidden; box-shadow: 0 10px 25px rgba(0,0,0,0.5); background: #fff; padding: 10px;">
                                            <img src="img/Traffic-growth1.webp" alt="Traffic Growth Strategy" style="width: 100%; height: auto; border-radius: 5px;">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div role="tabpanel" class="tab-pane fade" id="rankings">
                                <div class="row" style="display: flex; align-items: center; flex-wrap: wrap;">
                                    <div class="col-md-5">
                                        <h3 style="color: #d0cc37; font-weight: 700; font-size: 28px; margin-bottom: 15px; margin-top: 0;">Dominating Page 1</h3>
                                        <p style="color: #ccc; font-size: 16px; line-height: 1.7; margin-bottom: 25px;">We don't just guess what works. Our strategies are built to conquer competitive high-intent keywords that drive real revenue and buyers directly to your service pages.</p>
                                        <ul style="list-style: none; padding: 0; margin-bottom: 20px;">
                                            <li style="color: #fff; margin-bottom: 10px; font-size: 15px;"><i class="fa fa-check-circle" style="color: #d0cc37; margin-right: 10px;"></i> Technical Site Audits</li>
                                            <li style="color: #fff; margin-bottom: 10px; font-size: 15px;"><i class="fa fa-check-circle" style="color: #d0cc37; margin-right: 10px;"></i> Local & Global SEO Targeting</li>
                                            <li style="color: #fff; font-size: 15px;"><i class="fa fa-check-circle" style="color: #d0cc37; margin-right: 10px;"></i> Sustainable Ranking Growth</li>
                                        </ul>
                                    </div>
                                    <div class="col-md-7">
                                        <div style="border-radius: 10px; overflow: hidden; box-shadow: 0 10px 25px rgba(0,0,0,0.5); background: #fff; padding: 10px;">
                                            <img src="img/Traffic-growth2.webp" alt="Keyword Ranking Improvements" style="width: 100%; height: auto; border-radius: 5px;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Specific Style Overrides for custom active tabs -->
    <style>
        .nav-tabs>li.active>a, .nav-tabs>li.active>a:focus, .nav-tabs>li.active>a:hover {
            background-color: #d0cc37 !important;
            color: #000 !important;
            border-color: #d0cc37 !important;
        }
    </style>



    <section class="free-consultation-section" style="padding: 80px 0; background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%); position: relative; overflow: hidden;">
        <!-- Decorative elements -->
        <div style="position: absolute; top: -50px; right: -50px; width: 200px; height: 200px; background: #d0cc37; border-radius: 50%; opacity: 0.1; filter: blur(30px);"></div>
        <div style="position: absolute; bottom: -50px; left: -50px; width: 300px; height: 300px; background: #212121; border-radius: 50%; opacity: 0.05; filter: blur(40px);"></div>
        
        <div class="container" style="position: relative; z-index: 2;">
            <div class="row" style="display: flex; align-items: stretch; flex-wrap: wrap; background: #fff; border-radius: 24px; box-shadow: 0 20px 50px rgba(0,0,0,0.08); overflow: hidden;">
                <!-- Left Content -->
                <div class="col-md-7" style="padding: 60px 50px;">
                    <div style="display: inline-block; padding: 6px 16px; background: rgba(208, 204, 55, 0.2); color: #8c8922; font-weight: 700; font-size: 14px; border-radius: 30px; margin-bottom: 20px; text-transform: uppercase; letter-spacing: 1px;">Free Consultation</div>
                    <h2 style="font-size: 36px; font-weight: 800; color: #1a1a1a; margin-bottom: 20px; line-height: 1.3;">Ready to Boost Your <span style="position: relative; color: #212121;">Online Presence<svg style="position: absolute; bottom: -5px; left: 0; width: 100%; height: 8px;" viewBox="0 0 100 10" preserveAspectRatio="none"><path d="M0 5 Q 50 10 100 5" stroke="#d0cc37" stroke-width="3" fill="transparent"/></svg></span>?</h2>
                    <p style="font-size: 18px; color: #555; margin-bottom: 15px; line-height: 1.6;">If your business is struggling to attract online customers, it may be time to implement a strategic digital marketing plan.</p>
                    <p style="font-size: 18px; color: #555; margin-bottom: 30px; line-height: 1.6;">Rankmator helps businesses identify growth opportunities and build marketing strategies that generate measurable results.</p>
                    
                    <p style="font-style: italic; font-size: 16px; color: #777; margin-bottom: 30px; border-left: 4px solid #d0cc37; padding-left: 15px;">Contact us today to request a free consultation and digital marketing audit.</p>

                    <a href="contact" class="btn" style="background: #212121; color: #fff; padding: 15px 35px; font-size: 16px; font-weight: 700; border-radius: 8px; text-transform: uppercase; letter-spacing: 0.5px; box-shadow: 0 10px 20px rgba(33,33,33,0.3); transition: all 0.3s;" onmouseover="this.style.transform='translateY(-3px)'; this.style.boxShadow='0 15px 25px rgba(33,33,33,0.4)';" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 10px 20px rgba(33,33,33,0.3)';">Get Free Consultation <i class="fa fa-arrow-right" style="margin-left: 8px;"></i></a>
                </div>
                
                <!-- Right Features -->
                <div class="col-md-5" style="background: #212121; padding: 60px 40px; display: flex; flex-direction: column; justify-content: center;">
                    <h3 style="color: #fff; font-size: 22px; font-weight: 700; margin-bottom: 30px; margin-top: 0;">What's Included?</h3>
                    <ul style="list-style: none; padding: 0; margin: 0;">
                        <li style="display: flex; align-items: flex-start; margin-bottom: 25px;">
                            <div style="background: rgba(208, 204, 55, 0.1); width: 45px; height: 45px; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-right: 15px; flex-shrink: 0;">
                                <i class="fa fa-search" style="color: #d0cc37; font-size: 18px;"></i>
                            </div>
                            <div>
                                <h4 style="color: #fff; font-size: 18px; font-weight: 600; margin: 0 0 5px 0;">Website SEO Analysis</h4>
                                <p style="color: #aaa; font-size: 14px; margin: 0; line-height: 1.5;">In-depth technical and content review</p>
                            </div>
                        </li>
                        <li style="display: flex; align-items: flex-start; margin-bottom: 25px;">
                            <div style="background: rgba(208, 204, 55, 0.1); width: 45px; height: 45px; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-right: 15px; flex-shrink: 0;">
                                <i class="fa fa-users" style="color: #d0cc37; font-size: 18px;"></i>
                            </div>
                            <div>
                                <h4 style="color: #fff; font-size: 18px; font-weight: 600; margin: 0 0 5px 0;">Competitor Analysis</h4>
                                <p style="color: #aaa; font-size: 14px; margin: 0; line-height: 1.5;">Understand your market position</p>
                            </div>
                        </li>
                        <li style="display: flex; align-items: flex-start; margin-bottom: 25px;">
                            <div style="background: rgba(208, 204, 55, 0.1); width: 45px; height: 45px; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-right: 15px; flex-shrink: 0;">
                                <i class="fa fa-map-o" style="color: #d0cc37; font-size: 18px;"></i>
                            </div>
                            <div>
                                <h4 style="color: #fff; font-size: 18px; font-weight: 600; margin: 0 0 5px 0;">Strategy Planning</h4>
                                <p style="color: #aaa; font-size: 14px; margin: 0; line-height: 1.5;">Custom roadmap for online growth</p>
                            </div>
                        </li>
                        <li style="display: flex; align-items: flex-start;">
                            <div style="background: rgba(208, 204, 55, 0.1); width: 45px; height: 45px; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-right: 15px; flex-shrink: 0;">
                                <i class="fa fa-bullseye" style="color: #d0cc37; font-size: 20px;"></i>
                            </div>
                            <div>
                                <h4 style="color: #fff; font-size: 18px; font-weight: 600; margin: 0 0 5px 0;">Lead Gen Optimization</h4>
                                <p style="color: #aaa; font-size: 14px; margin: 0; line-height: 1.5;">Maximize your conversion rates</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>


    <section class="seo-section" style="background: #212121;">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1 text-center">
                    <h2 class="section-title" style="color: #fff;">Our Digital Marketing Services</h2>
                    <p class="section-subtitle" style="color: #ccc;">Rankmator offers a wide range of digital marketing services in Delhi designed to improve brand visibility and drive meaningful business results.</p>
                </div>
            </div>

            <div class="row" style="margin-top: 40px;">
                <div class="col-md-4 col-sm-6" style="margin-bottom: 30px;">
                    <div style="position: relative; overflow: hidden; border-radius: 15px; box-shadow: 0 10px 30px rgba(0,0,0,0.15); border: 2px solid transparent; transition: all 0.3s;" onmouseover="this.style.borderColor='#d0cc37'; this.style.transform='translateY(-5px)';" onmouseout="this.style.borderColor='transparent'; this.style.transform='translateY(0)';">
                        <img src="img/SEO.webp" alt="Search Engine Optimization" onerror="this.src='img/about-us.png'" style="width: 100%; height: 260px; object-fit: cover;">
                        <div style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background: linear-gradient(to top, rgba(0,0,0,0.8) 0%, rgba(0,0,0,0.2) 100%);"></div>
                        <a href="best-seo-agency" class="btn" style="position: absolute; bottom: 25px; left: 50%; transform: translateX(-50%); width: 80%; background: #d0cc37; border: none; color: #000; font-weight: 800; padding: 12px; text-transform: uppercase; font-size: 16px; text-align: center; border-radius: 8px; box-shadow: 0 4px 15px rgba(208, 204, 55, 0.4); transition: background 0.3s;" onmouseover="this.style.background='#fff';" onmouseout="this.style.background='#d0cc37';">SEO</a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6" style="margin-bottom: 30px;">
                    <div style="position: relative; overflow: hidden; border-radius: 15px; box-shadow: 0 10px 30px rgba(0,0,0,0.15); border: 2px solid transparent; transition: all 0.3s;" onmouseover="this.style.borderColor='#d0cc37'; this.style.transform='translateY(-5px)';" onmouseout="this.style.borderColor='transparent'; this.style.transform='translateY(0)';">
                        <img src="img/PPC-Advertising.webp" alt="Pay Per Click Advertising" onerror="this.src='img/about-us.png'" style="width: 100%; height: 260px; object-fit: cover;">
                        <div style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background: linear-gradient(to top, rgba(0,0,0,0.8) 0%, rgba(0,0,0,0.2) 100%);"></div>
                        <a href="performance-marketing-agency" class="btn" style="position: absolute; bottom: 25px; left: 50%; transform: translateX(-50%); width: 80%; background: #d0cc37; border: none; color: #000; font-weight: 800; padding: 12px; text-transform: uppercase; font-size: 16px; text-align: center; border-radius: 8px; box-shadow: 0 4px 15px rgba(208, 204, 55, 0.4); transition: background 0.3s;" onmouseover="this.style.background='#fff';" onmouseout="this.style.background='#d0cc37';">PPC</a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6" style="margin-bottom: 30px;">
                    <div style="position: relative; overflow: hidden; border-radius: 15px; box-shadow: 0 10px 30px rgba(0,0,0,0.15); border: 2px solid transparent; transition: all 0.3s;" onmouseover="this.style.borderColor='#d0cc37'; this.style.transform='translateY(-5px)';" onmouseout="this.style.borderColor='transparent'; this.style.transform='translateY(0)';">
                        <img src="img/Social.webp" alt="Social Media Marketing" onerror="this.src='img/about-us.png'" style="width: 100%; height: 260px; object-fit: cover;">
                        <div style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background: linear-gradient(to top, rgba(0,0,0,0.8) 0%, rgba(0,0,0,0.2) 100%);"></div>
                        <a href="social-media-marketing-agency" class="btn" style="position: absolute; bottom: 25px; left: 50%; transform: translateX(-50%); width: 80%; background: #d0cc37; border: none; color: #000; font-weight: 800; padding: 12px; text-transform: uppercase; font-size: 16px; text-align: center; border-radius: 8px; box-shadow: 0 4px 15px rgba(208, 204, 55, 0.4); transition: background 0.3s;" onmouseover="this.style.background='#fff';" onmouseout="this.style.background='#d0cc37';">Social Media</a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6" style="margin-bottom: 30px;">
                    <div style="position: relative; overflow: hidden; border-radius: 15px; box-shadow: 0 10px 30px rgba(0,0,0,0.15); border: 2px solid transparent; transition: all 0.3s;" onmouseover="this.style.borderColor='#d0cc37'; this.style.transform='translateY(-5px)';" onmouseout="this.style.borderColor='transparent'; this.style.transform='translateY(0)';">
                        <img src="img/Website.webp" alt="Website Design and Development" onerror="this.src='img/about-us.png'" style="width: 100%; height: 260px; object-fit: cover;">
                        <div style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background: linear-gradient(to top, rgba(0,0,0,0.8) 0%, rgba(0,0,0,0.2) 100%);"></div>
                        <a href="website-design-development-services" class="btn" style="position: absolute; bottom: 25px; left: 50%; transform: translateX(-50%); width: 80%; background: #d0cc37; border: none; color: #000; font-weight: 800; padding: 12px; text-transform: uppercase; font-size: 16px; text-align: center; border-radius: 8px; box-shadow: 0 4px 15px rgba(208, 204, 55, 0.4); transition: background 0.3s;" onmouseover="this.style.background='#fff';" onmouseout="this.style.background='#d0cc37';">Web Development</a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6" style="margin-bottom: 30px;">
                    <div style="position: relative; overflow: hidden; border-radius: 15px; box-shadow: 0 10px 30px rgba(0,0,0,0.15); border: 2px solid transparent; transition: all 0.3s;" onmouseover="this.style.borderColor='#d0cc37'; this.style.transform='translateY(-5px)';" onmouseout="this.style.borderColor='transparent'; this.style.transform='translateY(0)';">
                        <img src="img/Ecommerce.webp" alt="E-commerce Marketing" onerror="this.src='img/about-us.png'" style="width: 100%; height: 260px; object-fit: cover;">
                        <div style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background: linear-gradient(to top, rgba(0,0,0,0.8) 0%, rgba(0,0,0,0.2) 100%);"></div>
                        <a href="ecommerce-marketing-agency" class="btn" style="position: absolute; bottom: 25px; left: 50%; transform: translateX(-50%); width: 80%; background: #d0cc37; border: none; color: #000; font-weight: 800; padding: 12px; text-transform: uppercase; font-size: 16px; text-align: center; border-radius: 8px; box-shadow: 0 4px 15px rgba(208, 204, 55, 0.4); transition: background 0.3s;" onmouseover="this.style.background='#fff';" onmouseout="this.style.background='#d0cc37';">E-commerce</a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6" style="margin-bottom: 30px;">
                    <div style="position: relative; overflow: hidden; border-radius: 15px; box-shadow: 0 10px 30px rgba(0,0,0,0.15); border: 2px solid transparent; transition: all 0.3s;" onmouseover="this.style.borderColor='#d0cc37'; this.style.transform='translateY(-5px)';" onmouseout="this.style.borderColor='transparent'; this.style.transform='translateY(0)';">
                        <img src="img/Content-Creation.webp" alt="Youtube Marketing" onerror="this.src='img/about-us.png'" style="width: 100%; height: 260px; object-fit: cover;">
                        <div style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background: linear-gradient(to top, rgba(0,0,0,0.8) 0%, rgba(0,0,0,0.2) 100%);"></div>
                        <a href="content-marketing" class="btn" style="position: absolute; bottom: 25px; left: 50%; transform: translateX(-50%); width: 80%; background: #d0cc37; border: none; color: #000; font-weight: 800; padding: 12px; text-transform: uppercase; font-size: 16px; text-align: center; border-radius: 8px; box-shadow: 0 4px 15px rgba(208, 204, 55, 0.4); transition: background 0.3s;" onmouseover="this.style.background='#fff';" onmouseout="this.style.background='#d0cc37';">Youtube Marketing</a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="seo-section bg-white">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1 text-center">
                    <h2 class="section-title">Industries We Work With</h2>
                    <p class="section-subtitle">Our digital marketing services support businesses from various industries including:</p>

                    <div class="industries-grid">
                        <div class="industry-tag">Real Estate</div>
                        <div class="industry-tag">Travel and Tourism</div>
                        <div class="industry-tag">Healthcare</div>
                        <div class="industry-tag">Education</div>
                        <div class="industry-tag">E-commerce</div>
                        <div class="industry-tag">Local Businesses</div>
                        <div class="industry-tag">Professional Services</div>
                        <div class="industry-tag">Startups and Entrepreneurs</div>
                    </div>
                    <p class="mt-4" style="color: #666; font-size: 16px; margin-top: 20px;">Our experience across industries allows us to design strategies that deliver effective results.</p>
                </div>
            </div>
        </div>
    </section>


    <section class="growth-cta-section">
        <div class="container">
            <div class="row" style="display: flex; align-items: center; flex-wrap: wrap;">
                <div class="col-md-7">
                    <div class="growth-cta-content">
                        <h2>Grow Your Business with Rankmator</h2>
                        <p class="subheadline" style="margin-bottom: 15px;">If you are searching for a reliable digital marketing agency in Delhi, Rankmator provides the expertise, strategy, and execution needed to grow your business online.</p>
                        <p class="subheadline" style="margin-bottom: 15px;">Whether your goal is to improve search rankings, increase website traffic, or generate qualified leads, our team is ready to help you achieve measurable success.</p>
                        <p class="subheadline"><span class="highlight-text">Contact Rankmator today</span> and start building your digital growth strategy.</p>
                        
                        <a href="contact" class="btn btn-brand btn-lg" style="margin-top: 20px; background: #d0cc37; color: #000; font-weight: bold; padding: 15px 30px; display: inline-block;">Contact Us Today</a>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="growth-image-container">
                        <img src="img/Performance-Marketing-Solutions.webp" alt="Digital Marketing Agency" class="growth-image" style="border-radius: 20px; box-shadow: 0 10px 30px rgba(0,0,0,0.5);">
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- Unused sections removed to match targeted location-page content -->

    <div class="sticky-cta" id="stickyCTA">
        <div class="container">
            <div class="sticky-cta-content">
                <p class="sticky-cta-text">Grow Your Business with Rankmator</p>
                <div class="sticky-cta-buttons">
                    <a href="tel:+919560864432" class="btn-sticky">Call Now</a>
                    <a href="https://api.whatsapp.com/send?phone=919560864432&text=I'm interested in Digital Marketing services in Delhi"
                        target="_blank" class="btn-sticky">WhatsApp</a>
                </div>
            </div>
        </div>
    </div>


    <?php include('footer-link.php'); ?>

    <script>
        // Smooth scrolling for anchor links
        $('a[href*="#"]:not([href="#"])').click(function () {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    $('html, body').animate({
                        scrollTop: target.offset().top - 80
                    }, 1000);
                    return false;
                }
            }
        });


        document.addEventListener('DOMContentLoaded', function () {
            const faqQuestions = document.querySelectorAll('.faq-question');

            faqQuestions.forEach(function (question) {
                question.addEventListener('click', function () {
                    const faqItem = this.closest('.faq-item');
                    const allFaqItems = document.querySelectorAll('.faq-item');


                    allFaqItems.forEach(function (item) {
                        if (item !== faqItem) {
                            item.classList.remove('active');
                        }
                    });


                    faqItem.classList.toggle('active');
                });
            });
        });


        $(window).scroll(function () {
            var scrollPosition = $(window).scrollTop();


            if (scrollPosition > 500) {
                $('#stickyCTA').addClass('show');
            } else {
                $('#stickyCTA').removeClass('show');
            }
        });
    </script>
    <div id="footer-include"></div>
    <script src="js/footer-loader.js"></script>
</body>

</html>



