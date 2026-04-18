<?php
// No session needed for contact page
?>

<!DOCTYPE html>
<html>
<head>
    <title>Contact Us - Aphro Hotel</title>
    <link rel="stylesheet" href="css/style.css">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        /* Additional Contact Page Styles - Teal & Coral Theme */
        .contact-header {
            text-align: center;
            background: linear-gradient(135deg, #008080 0%, #20b2aa 100%);
            color: white;
            padding: 60px 40px;
            border-radius: 10px;
            margin-bottom: 30px;
        }
        
        .contact-header h1 {
            margin: 0 0 15px 0;
            font-size: 42px;
        }
        
        .contact-header p {
            margin: 0;
            font-size: 18px;
            opacity: 0.9;
        }
        
        .contact-wrapper {
            display: grid;
            grid-template-columns: 1fr 1.5fr;
            gap: 30px;
            margin-bottom: 30px;
        }
        
        /* Contact Info Section */
        .contact-info {
            background: white;
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }
        
        .contact-info h2 {
            color: #008080;
            margin-bottom: 20px;
            font-size: 24px;
        }
        
        .info-item {
            display: flex;
            align-items: center;
            margin-bottom: 25px;
            padding: 15px;
            background: #f8f9fa;
            border-radius: 10px;
            transition: transform 0.3s ease;
        }
        
        .info-item:hover {
            transform: translateX(5px);
            background: #fff5f0;
        }
        
        .info-icon {
            width: 50px;
            height: 50px;
            background: linear-gradient(135deg, #008080 0%, #20b2aa 100%);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 15px;
        }
        
        .info-icon i {
            font-size: 24px;
            color: white;
        }
        
        .info-details h4 {
            margin: 0 0 5px 0;
            color: #333;
            font-size: 16px;
        }
        
        .info-details p {
            margin: 0;
            color: #666;
            font-size: 14px;
        }
        
        /* Business Hours */
        .business-hours {
            background: white;
            border-radius: 15px;
            padding: 30px;
            margin-top: 20px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }
        
        .business-hours h3 {
            color: #008080;
            margin-bottom: 20px;
            font-size: 20px;
        }
        
        .hours-item {
            display: flex;
            justify-content: space-between;
            padding: 10px 0;
            border-bottom: 1px solid #e0e0e0;
        }
        
        .hours-day {
            font-weight: 600;
            color: #333;
        }
        
        .hours-time {
            color: #ff7f50;
            font-weight: 600;
        }
        
        /* Contact Form Section */
        .contact-form-container {
            background: white;
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }
        
        .contact-form-container h2 {
            color: #008080;
            margin-bottom: 20px;
            font-size: 24px;
        }
        
        .form-group {
            margin-bottom: 20px;
        }
        
        .form-group label {
            display: block;
            margin-bottom: 8px;
            color: #333;
            font-weight: 600;
            font-size: 14px;
        }
        
        .form-group label i {
            margin-right: 8px;
            color: #008080;
        }
        
        .form-group label .required {
            color: #ff7f50;
        }
        
        .form-group input,
        .form-group textarea {
            width: 100%;
            padding: 12px 15px;
            border: 2px solid #e0e0e0;
            border-radius: 10px;
            font-size: 16px;
            box-sizing: border-box;
            font-family: inherit;
            transition: all 0.3s ease;
        }
        
        .form-group input:focus,
        .form-group textarea:focus {
            outline: none;
            border-color: #008080;
            box-shadow: 0 0 0 3px rgba(0,128,128,0.1);
        }
        
        .submit-btn {
            width: 100%;
            padding: 14px;
            background: #ff7f50;
            color: white;
            border: none;
            border-radius: 10px;
            font-size: 18px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        
        .submit-btn:hover {
            background: #e0683e;
            transform: translateY(-2px);
        }
        
        .submit-btn i {
            margin-right: 8px;
        }
        
        /* Map Section */
        .map-section {
            background: white;
            border-radius: 15px;
            padding: 30px;
            margin-top: 30px;
            text-align: center;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }
        
        .map-section h3 {
            color: #008080;
            margin-bottom: 20px;
        }
        
        .map-placeholder {
            background: linear-gradient(135deg, #008080 0%, #20b2aa 100%);
            color: white;
            padding: 60px;
            border-radius: 10px;
        }
        
        .map-placeholder i {
            font-size: 48px;
            margin-bottom: 15px;
        }
        
        .social-links {
            display: flex;
            justify-content: center;
            gap: 15px;
            margin-top: 20px;
        }
        
        .social-link {
            width: 40px;
            height: 40px;
            background: #008080;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            transition: all 0.3s ease;
        }
        
        .social-link:hover {
            background: #ff7f50;
            transform: translateY(-3px);
        }
        
        @media (max-width: 768px) {
            .contact-wrapper {
                grid-template-columns: 1fr;
            }
            
            .contact-header {
                padding: 40px 20px;
            }
            
            .contact-header h1 {
                font-size: 32px;
            }
            
            .info-item {
                padding: 12px;
            }
        }
    </style>
</head>
<body>

<div class="navbar">
    <h2 class="logo"><i class="fa fa-hotel"></i> Aphro Hotel</h2>
    <div class="menu">
        <a href="index.html"><i class="fa fa-home"></i> Home</a>
        <a href="about.html"><i class="fa fa-info-circle"></i> About</a>
        <a href="menu.html"><i class="fa fa-utensils"></i> Menu</a>
        <a href="gallery.html"><i class="fa fa-image"></i> Gallery</a>
        <a href="order.php"><i class="fa fa-shopping-cart"></i> Order</a>
    </div>
</div>

<div class="content">
    <div class="contact-header">
        <h1><i class="fa fa-envelope"></i> Contact Us</h1>
        <p>We'd love to hear from you! Send us a message and we'll respond within 24 hours</p>
    </div>
    
    <div class="contact-wrapper">
        <!-- Contact Information -->
        <div>
            <div class="contact-info">
                <h2><i class="fa fa-address-card"></i> Get in Touch</h2>
                
                <div class="info-item">
                    <div class="info-icon">
                        <i class="fa fa-map-marker-alt"></i>
                    </div>
                    <div class="info-details">
                        <h4>Our Location</h4>
                        <p>KG 123 St, Kigali, Rwanda</p>
                    </div>
                </div>
                
                <div class="info-item">
                    <div class="info-icon">
                        <i class="fa fa-phone"></i>
                    </div>
                    <div class="info-details">
                        <h4>Phone Number</h4>
                        <p>+250 792 448 519</p>
                    </div>
                </div>
                
                <div class="info-item">
                    <div class="info-icon">
                        <i class="fa fa-envelope"></i>
                    </div>
                    <div class="info-details">
                        <h4>Email Address</h4>
                        <p>aphrohotel@gmail.com</p>
                    </div>
                </div>
                
                <div class="info-item">
                    <div class="info-icon">
                        <i class="fa fa-globe"></i>
                    </div>
                    <div class="info-details">
                        <h4>Website</h4>
                        <p>www.aphrohotel.com</p>
                    </div>
                </div>
            </div>
            
            <div class="business-hours">
                <h3><i class="fa fa-clock"></i> Business Hours</h3>
                <div class="hours-item">
                    <span class="hours-day">Monday - Friday</span>
                    <span class="hours-time">8:00 AM - 10:00 PM</span>
                </div>
                <div class="hours-item">
                    <span class="hours-day">Saturday - Sunday</span>
                    <span class="hours-time">9:00 AM - 11:00 PM</span>
                </div>
                <div class="hours-item">
                    <span class="hours-day">Public Holidays</span>
                    <span class="hours-time">10:00 AM - 8:00 PM</span>
                </div>
            </div>
        </div>
        
        <!-- Contact Form with ALL Required Fields -->
        <div class="contact-form-container">
            <h2><i class="fa fa-paper-plane"></i> Send Us a Message</h2>
            
            <form action="insert_contact.php" method="POST">
                <div class="form-group">
                    <label><i class="fa fa-user"></i> Full Name <span class="required">*</span></label>
                    <input type="text" name="fullname" placeholder="Enter your full name" required>
                </div>
                
                <div class="form-group">
                    <label><i class="fa fa-envelope"></i> Email Address <span class="required">*</span></label>
                    <input type="email" name="email" placeholder="your@email.com" required>
                </div>
                
                <div class="form-group">
                    <label><i class="fa fa-phone"></i> Phone Number <span class="required">*</span></label>
                    <input type="tel" name="phone" placeholder="+250 7XX XXX XXX" required>
                </div>
                
                <div class="form-group">
                    <label><i class="fa fa-location-dot"></i> Location <span class="required">*</span></label>
                    <input type="text" name="location" placeholder="Your city or district" required>
                </div>
                
                <div class="form-group">
                    <label><i class="fa fa-comment"></i> Your Message <span class="required">*</span></label>
                    <textarea name="message" rows="5" placeholder="Tell us how we can help you..." required></textarea>
                </div>
                
                <button type="submit" class="submit-btn">
                    <i class="fa fa-paper-plane"></i> Send Message
                </button>
            </form>
        </div>
    </div>
    
    <!-- Map Section -->
    <div class="map-section">
        <h3><i class="fa fa-map"></i> Find Us Here</h3>
        <div class="map-placeholder">
            <i class="fa fa-map-marker-alt"></i>
            <p>KG 123 St, Kigali, Rwanda</p>
            <p><i class="fa fa-phone"></i> +250 792 448 519</p>
        </div>
        <div class="social-links">
            <a href="#" class="social-link"><i class="fa fa-facebook-f"></i></a>
            <a href="#" class="social-link"><i class="fa fa-twitter"></i></a>
            <a href="#" class="social-link"><i class="fa fa-instagram"></i></a>
            <a href="#" class="social-link"><i class="fa fa-whatsapp"></i></a>
        </div>
    </div>
</div>

<div class="footer">
    <p><i class="fa fa-copyright"></i> 2026 Aphro Hotel | All Rights Reserved | <i class="fa fa-phone"></i> +250 792448519 | <i class="fa fa-envelope"></i> aphrohotel@gmail.com</p>
</div>

</body>
</html>