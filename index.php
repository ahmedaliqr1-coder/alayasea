<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-18027461174"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'AW-18027461174');
    </script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Al Elais Center - Traffic Services</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        :root {
            --primary-green: #007a53;
            --light-mint: rgba(255, 255, 255, 0.15); 
            --bg-green: #00593c; 
            --footer-black: #000000;
            --btn-gray-transparent: rgba(128, 128, 128, 0.45); 
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background-color: var(--bg-green);
            color: #fff;
        }

        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 25px;
            background-color: var(--primary-green);
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            position: sticky;
            top: 0;
            z-index: 1000;
            box-shadow: 0 4px 10px rgba(0,0,0,0.15);
        }

        .header-left { display: flex; align-items: center; gap: 15px; }
        .menu-icon { font-size: 24px; cursor: pointer; color: #fff; }
        .company-name { font-weight: 800; font-size: 1.05rem; color: #fff; line-height: 1.3; }
        
        .lang-btn {
            background-color: var(--btn-gray-transparent);
            border: 1px solid rgba(255, 255, 255, 0.4);
            color: #fff;
            padding: 5px 15px;
            border-radius: 20px;
            cursor: pointer;
            font-weight: bold;
            text-decoration: none;
            font-size: 0.9rem;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            transition: all 0.3s ease;
        }
        .lang-btn:hover {
            transform: translateY(-2px);
            background-color: rgba(255, 255, 255, 0.2);
        }

        .container { padding: 20px 15px; max-width: 500px; margin: 0 auto; }

        .main-title {
            text-align: center;
            color: #fff;
            font-size: 1.4rem;
            font-weight: 800;
            margin: 20px 0 30px 0;
            line-height: 1.4;
            text-shadow: 0 2px 4px rgba(0,0,0,0.2);
        }

        /* Service Cards - Hover Flight Effect */
        .service-card {
            background-color: var(--light-mint);
            border-radius: 20px;
            padding: 20px;
            margin-bottom: 25px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            text-decoration: none;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.3); 
            transform: translateY(-4px); 
            transition: all 0.3s ease;
            border: 1px solid rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(5px);
        }

        .service-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.45);
            background-color: rgba(255, 255, 255, 0.25);
        }

        /* 3D Raised Buttons */
        .query-btn {
            background-color: #6c757d; 
            color: #fff;
            padding: 12px 26px;
            border-radius: 14px;
            font-weight: bold;
            font-size: 1rem;
            border: 1px solid rgba(255, 255, 255, 0.4);
            box-shadow: 0 5px 0px #495057, 0 8px 15px rgba(0, 0, 0, 0.4); 
            transition: all 0.2s ease;
            position: relative;
        }
        
        .service-card:hover .query-btn {
            background-color: #7b838a;
            box-shadow: 0 6px 0px #495057, 0 10px 20px rgba(0, 0, 0, 0.5);
        }

        .query-btn:active {
            transform: translateY(4px);
            box-shadow: 0 1px 0px #495057, 0 2px 5px rgba(0, 0, 0, 0.3);
        }

        .service-icon {
            font-size: 1.8rem;
            color: #fff;
            width: 40px;
            text-align: center;
        }

        .card-content { flex: 1; margin: 0 15px; text-align: left; }
        .card-title { color: #fff; font-size: 1.1rem; font-weight: 800; display: block; }
        .card-desc { color: #e0e0e0; font-size: 0.85rem; margin-top: 4px; }

        .faq-section { margin-top: 40px; }
        .faq-title { font-size: 1.2rem; font-weight: 800; margin-bottom: 20px; text-shadow: 0 2px 4px rgba(0,0,0,0.2); }
        
        .faq-item {
            background: rgba(255, 255, 255, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.15);
            margin-bottom: 15px;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
            transform: translateY(-2px);
            backdrop-filter: blur(5px);
        }

        .faq-question {
            padding: 18px;
            font-weight: bold;
            cursor: pointer;
            display: flex;
            justify-content: space-between;
            align-items: center;
            color: #fff;
            font-size: 0.95rem;
        }

        .faq-question .plus { color: #fff; font-size: 1.4rem; }

        .faq-answer { max-height: 0; overflow: hidden; transition: 0.3s ease-out; background: rgba(0, 0, 0, 0.2); }
        .faq-answer p { padding: 15px; margin: 0; font-size: 0.9rem; color: #e0e0e0; line-height: 1.6; }

        .legal-stack {
            margin: 40px 0;
            text-align: left;
        }
        
        .legal-stack a {
            display: block;
            color: #fff;
            text-decoration: none;
            font-size: 1.2rem;
            font-weight: 800;
            margin-bottom: 20px;
            padding: 10px;
            background: var(--light-mint);
            border-radius: 12px;
            border: 1px solid rgba(255, 255, 255, 0.1);
            box-shadow: 0 6px 15px rgba(0,0,0,0.2);
            transform: translateY(-2px);
            transition: all 0.3s;
            text-align: center;
        }

        .legal-stack a:hover {
            transform: translateY(-5px);
            background: rgba(255, 255, 255, 0.25);
            box-shadow: 0 10px 20px rgba(0,0,0,0.3);
        }

        footer {
            background-color: var(--footer-black);
            color: #ffffff;
            padding: 40px 20px;
            text-align: center;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
        }

        .f-disclaimer {
            font-size: 0.8rem;
            color: #bbb;
            margin-bottom: 25px;
            line-height: 1.6;
            border-bottom: 1px solid #222;
            padding-bottom: 20px;
            text-align: justify;
        }

        .f-info { font-size: 0.9rem; line-height: 2; text-align: center; }
        .f-info .comp-name { color: #fff; display: block; font-size: 1.1rem; font-weight: bold; margin-bottom: 10px; }
        .f-info .detail { color: #bbb; display: block; }
        .f-info .operator-text { color: #fff; display: block; font-size: 1.05rem; font-weight: bold; margin-top: 15px; border-top: 1px dashed #333; padding-top: 15px; }

        /* Welcome Banner Overlay */
        .banner-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.8);
            z-index: 9999;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
            box-sizing: border-box;
        }

        /* Glassmorphism White Transparent Background */
        .banner-content {
            background-color: rgba(255, 255, 255, 0.25); 
            width: 100%;
            max-width: 480px;
            padding: 35px 25px;
            border-radius: 24px;
            text-align: center;
            box-shadow: 0 15px 40px rgba(0,0,0,0.4);
            border: 2px solid rgba(255, 255, 255, 0.45);
            animation: fadeIn 0.4s ease-out;
            backdrop-filter: blur(15px); 
        }

        @keyframes fadeIn {
            from { transform: scale(0.9); opacity: 0; }
            to { transform: scale(1); opacity: 1; }
        }

        .banner-header {
            font-size: 1.35rem;
            font-weight: 800;
            color: #ffffff;
            margin-bottom: 15px;
            line-height: 1.5;
            text-shadow: 0 2px 4px rgba(0,0,0,0.3);
        }

        /* Thin legal disclaimer text */
        .banner-disclaimer-ar {
            font-size: 0.85rem; 
            color: #f8f9fa;
            line-height: 1.6;
            margin-bottom: 15px;
            font-weight: 400; 
            text-align: justify;
            border-top: 1px dashed rgba(255, 255, 255, 0.3);
            padding-top: 15px;
            text-shadow: 0 1px 3px rgba(0,0,0,0.2);
            direction: rtl;
        }

        .banner-disclaimer-en {
            font-size: 0.8rem;
            color: #e9ecef;
            line-height: 1.5;
            margin-bottom: 25px;
            text-align: justify;
            direction: ltr;
            font-weight: 300;
            text-shadow: 0 1px 3px rgba(0,0,0,0.2);
        }

        /* 3D Raised Button for Start Service */
        .banner-btn {
            background-color: #6c757d;
            color: #ffffff;
            border: 1px solid rgba(255, 255, 255, 0.4);
            padding: 14px 40px;
            font-size: 1.1rem;
            font-weight: bold;
            border-radius: 14px;
            cursor: pointer;
            width: 100%;
            transition: all 0.2s;
            box-shadow: 0 5px 0px #495057, 0 10px 20px rgba(0, 0, 0, 0.4);
        }

        .banner-btn:hover {
            background-color: #7b838a;
            box-shadow: 0 6px 0px #495057, 0 12px 25px rgba(0, 0, 0, 0.5);
        }

        .banner-btn:active {
            transform: translateY(4px);
            box-shadow: 0 1px 0px #495057, 0 3px 6px rgba(0, 0, 0, 0.3);
        }
    </style>
</head>
<body>

<div id="welcomeBanner" class="banner-overlay">
    <div class="banner-content">
        <div class="banner-header">Inquire and Pay Traffic Fines by Vehicle Testing & Registration Centre</div>
        
        <div class="banner-disclaimer-ar">
            تنبيه قانوني وإخلاء مسؤولية: نحن منصة إلكترونية مستقلة تقدم خدمات تسهيل المعاملات وسداد الرسوم والمخالفات المرورية كمتعامل وسيط لحساب المستفيدين، ونود التأكيد بشكل صريح وبات بأننا لا نمثل أي جهة حكومية رسمية، ولا نتبع لشرطة المرور أو هيئات الطرق والمواصفات الرسمية في الدولة، وإنما نقوم بتقديم هذه الخدمات كجهة مستقلة تماماً وفق ضوابط ترخيصنا التجاري.
        </div>
        
        <div class="banner-disclaimer-en">
            Legal Disclaimer: We are an independent electronic platform providing transaction facilitation and traffic fine payment services as an intermediary handler. We explicitly declare that we do not represent any government entity, traffic police, or official transport authorities. All services are rendered independently.
        </div>
        
        <button class="banner-btn" onclick="startService()">Start Service</button>
    </div>
</div>

<header>
    <div class="header-left">
        <div class="menu-icon">☰</div>
        <div class="company-name">AL ELAIS VEHICLE TESTING & REGISTRATION CENTRE L.L.C</div>
    </div>
    <a href="index_ar.php" class="lang-btn">العربية</a>
</header>

<div class="container">
    
    <h1 class="main-title">Traffic Fines Inquiry & Payment Services in UAE</h1>

    <a href="https://vasrsaea.online" class="service-card">
        <div class="service-icon"><i class="fas fa-car-side"></i></div>
        <div class="card-content">
            <span class="card-title">Inquiry by Plate Number</span>
            <p class="card-desc">Quick check using vehicle plate details</p>
        </div>
        <div class="query-btn">Inquire</div>
    </a>

    <a href="https://vasrsaea.online" class="service-card">
        <div class="service-icon"><i class="fas fa-folder-open"></i></div>
        <div class="card-content">
            <span class="card-title">Inquiry by Traffic File</span>
            <p class="card-desc">View all fines listed on your profile file</p>
        </div>
        <div class="query-btn">Inquire</div>
    </a>

    <a href="https://vasrsaea.online" class="service-card">
        <div class="service-icon"><i class="fas fa-id-card"></i></div>
        <div class="card-content">
            <span class="card-title">Inquiry by Driving License</span>
            <p class="card-desc">Search for fines registered on your license</p>
        </div>
        <div class="query-btn">Inquire</div>
    </a>

    <div class="faq-section">
        <div class="faq-title">Frequently Asked Questions</div>

        <div class="faq-item">
            <div class="faq-question">How can I inquire about my traffic fines? <span class="plus">+</span></div>
            <div class="faq-answer"><p>You can easily inquire by selecting the appropriate method (Plate Number, Driving License, or Traffic File) and entering the required details.</p></div>
        </div>

        <div class="faq-item">
            <div class="faq-question">Is the payment gateway safe and secure? <span class="plus">+</span></div>
            <div class="faq-answer"><p>Yes, we use advanced SSL encryption and certified payment processing systems to ensure your financial details are fully secure.</p></div>
        </div>

        <div class="faq-item">
            <div class="faq-question">When will the fine clear after making payment? <span class="plus">+</span></div>
            <div class="faq-answer"><p>Traffic fines are usually updated and cleared in the official system within a few minutes up to 24 business hours after completing the transaction successfully.</p></div>
        </div>

        <div class="faq-item">
            <div class="faq-question">Can I pay fines for all emirates across the UAE? <span class="plus">+</span></div>
            <div class="faq-answer"><p>Yes, our platform supports inquiry and payment services for traffic fines registered across all emirates in the United Arab Emirates.</p></div>
        </div>

        <div class="faq-item">
            <div class="faq-question">What should I do if a fine still appears after payment? <span class="plus">+</span></div>
            <div class="faq-answer"><p>Please allow some time for system synchronization. If it persists after 24 hours, contact our technical support team with your receipt attached.</p></div>
        </div>

        <div class="faq-item">
            <div class="faq-question">Are there any additional service fees? <span class="plus">+</span></div>
            <div class="faq-answer"><p>A minimal convenience or administrative fee may apply to cover the costs of fast electronic clearance and portal technical solutions.</p></div>
        </div>

        <div class="faq-item">
            <div class="faq-question">How do I obtain my payment receipt? <span class="plus">+</span></div>
            <div class="faq-answer"><p>A digital receipt will be automatically sent to your registered email address right after the payment is successfully confirmed.</p></div>
        </div>

        <div class="faq-item">
            <div class="faq-question">Can I dispute a traffic fine through this website? <span class="plus">+</span></div>
            <div class="faq-answer"><p>No, this portal is explicitly for inquiry and clearance payments. Fine disputes must be processed directly through the official transport authorities.</p></div>
        </div>

        <div class="faq-item">
            <div class="faq-question">What payment methods are accepted? <span class="plus">+</span></div>
            <div class="faq-answer"><p>We accept all major international and local credit/debit cards, including Visa, MasterCard, and other authorized payment networks.</p></div>
        </div>

        <div class="faq-item">
            <div class="faq-question">Is the service available during public holidays? <span class="plus">+</span></div>
            <div class="faq-answer"><p>Yes, our platform operates 24/7, allowing you to check and pay traffic fines at any time, including weekends and official holidays.</p></div>
        </div>
    </div>

    <div class="legal-stack">
        <a href="privacy.php">Privacy Policy</a>
        <a href="terms.php">Terms and Conditions</a>
        <a href="disclaimer.php">Legal Disclaimer</a>
        <a href="refund.php">Refund Policy</a>
    </div>
</div>

<footer>
    <div class="f-disclaimer">
        Disclaimer: This website is completely independent and acts as an intermediary electronic portal to facilitate transaction processing and traffic fine clearing services. It belongs to AL ELAIS VEHICLE TESTING & REGISTRATION CENTRE L.L.C. It does not represent any official government entity and is not affiliated with Dubai Police.
    </div>
    
    <div class="f-info">
        <span class="comp-name">AL ELAIS VEHICLE TESTING & REGISTRATION CENTRE L.L.C</span>
        <span class="detail">Unified License Number: 889991</span>
        <span class="detail">Legal Address: Shop 1, Dubai Investment Park Second, Dubai, United Arab Emirates</span>
        <span class="detail">License issued by Dubai Department of Economy and Tourism, Valid until: 2026-06-07</span>
        <span class="operator-text">This website is operated by AL ELAIS VEHICLE TESTING & REGISTRATION CENTRE L.L.C</span>
    </div>
</footer>

<script>
    function startService() {
        document.getElementById('welcomeBanner').style.display = 'none';
    }

    document.querySelectorAll('.faq-question').forEach(item => {
        item.addEventListener('click', () => {
            const answer = item.nextElementSibling;
            const plus = item.querySelector('.plus');
            if (answer.style.maxHeight) {
                answer.style.maxHeight = null;
                plus.innerText = "+";
            } else {
                answer.style.maxHeight = answer.scrollHeight + "px";
                plus.innerText = "−";
            }
        });
    });
</script>

</body>
</html>
