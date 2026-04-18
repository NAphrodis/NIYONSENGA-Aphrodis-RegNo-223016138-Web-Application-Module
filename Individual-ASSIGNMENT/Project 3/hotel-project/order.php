<?php
// No session needed for customer order page
?>

<!DOCTYPE html>
<html>
<head>
    <title>Place Your Order - Aphro Hotel</title>
    <link rel="stylesheet" href="css/style.css">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        .order-container {
            max-width: 800px;
            margin: 40px auto;
            padding: 0 20px;
        }

        .order-header {
            text-align: center;
            margin-bottom: 30px;
        }

        .order-header h1 {
            color: #333;
            font-size: 36px;
            margin-bottom: 10px;
        }

        .order-header p {
            color: #666;
            font-size: 16px;
        }

        .order-form {
            background: white;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            padding: 40px;
        }

        .form-group {
            margin-bottom: 25px;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            color: #333;
            font-weight: 600;
            font-size: 14px;
        }

        .form-group label .required {
            color: #ff6b35;
        }

        .form-group input,
        .form-group select,
        .form-group textarea {
            width: 100%;
            padding: 12px 15px;
            border: 2px solid #e0e0e0;
            border-radius: 10px;
            font-size: 16px;
            box-sizing: border-box;
            font-family: inherit;
        }

        .form-group input:focus,
        .form-group select:focus,
        .form-group textarea:focus {
            outline: none;
            border-color: #ff6b35;
        }

        .form-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
        }

        /* Improved select dropdown styling */
        .menu-select {
            width: 100%;
            padding: 12px 15px;
            border: 2px solid #e0e0e0;
            border-radius: 10px;
            font-size: 16px;
            background: white;
            cursor: pointer;
        }

        .menu-select:focus {
            outline: none;
            border-color: #ff6b35;
        }

        /* Category groups in select */
        .menu-select optgroup {
            font-weight: bold;
            color: #ff6b35;
        }

        .menu-select option {
            padding: 10px;
            font-weight: normal;
        }

        .submit-btn {
            width: 100%;
            padding: 15px;
            background: #ff6b35;
            color: white;
            border: none;
            border-radius: 10px;
            font-size: 18px;
            font-weight: 600;
            cursor: pointer;
            margin-top: 20px;
            transition: all 0.3s ease;
        }

        .submit-btn:hover {
            background: #e55a2b;
            transform: translateY(-2px);
        }

        .order-summary {
            background: #f8f9fa;
            border-radius: 10px;
            padding: 20px;
            margin-top: 30px;
        }

        .order-summary h3 {
            margin: 0 0 15px 0;
            color: #333;
        }

        .summary-item {
            display: flex;
            justify-content: space-between;
            padding: 8px 0;
            border-bottom: 1px solid #e0e0e0;
        }

        .summary-total {
            display: flex;
            justify-content: space-between;
            padding: 15px 0 0 0;
            margin-top: 10px;
            font-weight: 700;
            font-size: 18px;
            color: #ff6b35;
            border-top: 2px solid #e0e0e0;
        }

        /* Price display next to option */
        .price-tag {
            float: right;
            color: #ff6b35;
            font-weight: bold;
        }

        @media (max-width: 768px) {
            .form-row {
                grid-template-columns: 1fr;
                gap: 0;
            }
            
            .order-form {
                padding: 25px;
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
        <a href="contact.php"><i class="fa fa-envelope"></i> Contact</a>
    </div>
</div>

<div class="order-container">
    <div class="order-header">
        <h1><i class="fa fa-shopping-bag"></i> Place Your Order</h1>
        <p> Delicious meals delivered to your doorstep</p>
    </div>

    <form action="insert_order.php" method="POST" class="order-form">
        <div class="form-row">
            <div class="form-group">
                <label><i class="fa fa-user"></i> Full Name <span class="required">*</span></label>
                <input type="text" name="fullname" placeholder="Enter your full name" required>
            </div>

            <div class="form-group">
                <label><i class="fa fa-envelope"></i> Email Address <span class="required">*</span></label>
                <input type="email" name="email" placeholder="your@email.com" required>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group">
                <label><i class="fa fa-phone"></i> Phone Number <span class="required">*</span></label>
                <input type="tel" name="phone" placeholder="+250 7XX XXX XXX" required>
            </div>

            <div class="form-group">
                <label><i class="fa fa-calendar"></i> Delivery Date <span class="required">*</span></label>
                <input type="date" name="date" id="date" required>
            </div>
        </div>

        <div class="form-group">
            <label><i class="fa fa-utensils"></i> Select Your Meal <span class="required">*</span></label>
            <select name="menu" id="menuSelect" class="menu-select" required onchange="updateMealPrice()">
                <option value="">-- Please select a meal --</option>
                <optgroup label=" Fish Dishes">
                    <option value="Grilled Fish" data-price="5000">Grilled Fish - 5,000 RWF</option>
                    <option value="Fried Fish" data-price="4500">Fried Fish - 4,500 RWF</option>
                    <option value="Fish Stew" data-price="6000">Fish Stew - 6,000 RWF</option>
                </optgroup>
                <optgroup label=" Soft Drinks">
                    <option value="Coca Cola" data-price="1000">Coca Cola - 1,000 RWF</option>
                    <option value="Fanta" data-price="1000">Fanta - 1,000 RWF</option>
                    <option value="Sprite" data-price="1000">Sprite - 1,000 RWF</option>
                    <option value="Beer" data-price="2500">Beer - 2,500 RWF</option>
                </optgroup>
                <optgroup label=" Fresh Juices">
                    <option value="Mango Juice" data-price="2000">Mango Juice - 2,000 RWF</option>
                    <option value="Orange Juice" data-price="2000">Orange Juice - 2,000 RWF</option>
                    <option value="Passion Juice" data-price="2500">Passion Juice - 2,500 RWF</option>
                    <option value="Pineapple Juice" data-price="2500">Pineapple Juice - 2,500 RWF</option>
                </optgroup>
            </select>
        </div>

        <div class="form-group">
            <label><i class="fa fa-location-dot"></i> Delivery Address <span class="required">*</span></label>
            <textarea name="address" rows="3" placeholder="Enter your complete delivery address" required></textarea>
        </div>

        <div class="form-group">
            <label><i class="fa fa-pen"></i> Special Instructions (Optional)</label>
            <textarea name="instructions" rows="2" placeholder="Any special requests? (allergies, extra sauce, etc.)"></textarea>
        </div>

        <div class="order-summary">
            <h3><i class="fa fa-receipt"></i> Order Summary</h3>
            <div class="summary-item">
                <span> Selected Meal:</span>
                <span id="summary-meal">Not selected</span>
            </div>
            <div class="summary-item">
                <span><i class="fa fa-calendar"></i> Delivery Date:</span>
                <span id="summary-date">Not selected</span>
            </div>
            <div class="summary-total">
                <span> Total Amount:</span>
                <span id="summary-total">0 RWF</span>
            </div>
        </div>

        <button type="submit" class="submit-btn">
            <i class="fa fa-check-circle"></i> Place Order Now
        </button>
    </form>
</div>

<div class="footer">
    <p><i class="fa fa-copyright"></i> 2026 Aphro Hotel | All Rights Reserved | <i class="fa fa-phone"></i> +250 792448519</p>
</div>

<script>
    // Set minimum date to today
    const today = new Date().toISOString().split('T')[0];
    document.getElementById('date').min = today;
    
    // Set default date to tomorrow
    const tomorrow = new Date();
    tomorrow.setDate(tomorrow.getDate() + 1);
    document.getElementById('date').value = tomorrow.toISOString().split('T')[0];
    
    // Menu items with their prices
    const menuPrices = {
        'Grilled Fish': 5000,
        'Fried Fish': 4500,
        'Fish Stew': 6000,
        'Coca Cola': 1000,
        'Fanta': 1000,
        'Sprite': 1000,
        'Beer': 2500,
        'Mango Juice': 2000,
        'Orange Juice': 2000,
        'Passion Juice': 2500,
        'Pineapple Juice': 2500
    };
    
    function updateMealPrice() {
        const select = document.getElementById('menuSelect');
        const selectedOption = select.options[select.selectedIndex];
        const selectedMeal = select.value;
        const price = menuPrices[selectedMeal] || 0;
        
        if (selectedMeal) {
            document.getElementById('summary-meal').innerHTML = selectedMeal;
            document.getElementById('summary-total').innerHTML = price.toLocaleString() + ' RWF';
        } else {
            document.getElementById('summary-meal').innerHTML = 'Not selected';
            document.getElementById('summary-total').innerHTML = '0 RWF';
        }
    }
    
    // Update delivery date in summary
    document.getElementById('date').addEventListener('change', function() {
        const dateInput = this.value;
        if (dateInput) {
            const formattedDate = new Date(dateInput).toLocaleDateString('en-US', {
                weekday: 'long',
                year: 'numeric',
                month: 'long',
                day: 'numeric'
            });
            document.getElementById('summary-date').innerHTML = formattedDate;
        }
    });
    
    // Trigger date update on page load
    const event = new Event('change');
    document.getElementById('date').dispatchEvent(event);
</script>

</body>
</html>