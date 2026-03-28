<?php 
   session_start();
   include('./live.php');
   include('./function1/common_function.php');
?> 
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Page</title>
  <link rel="stylesheet" href="contact_page_styles.css">
  <style>
    body, ul, li, a {
            margin: 0;
            padding: 0;
            list-style: none;
            text-decoration: none;
            box-sizing: border-box;
        }
         /* Header Styling */
         .header {
              background:#333; 
           /* background-color:rgb(32, 62, 34);*/
            padding: 0.5em 1em;
            position: sticky;
            top: 0;
            z-index: 1000;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .navbar {
            display: flex;
            align-items: center;
            justify-content: space-between;
            max-width: 1200px;
            margin: 0 auto;
        }

        .logo img {
            height: 50px;
            width: auto;
        }

        .nav-links {
            display: flex;
            gap: 1em;
        }

        .nav-links a {
            color: #fff;
            font-size: 1em;
            font-weight: 500;
            transition: color 0.3s;
        }

        .nav-links a:hover {
            color: #c5e1a5;
        }
        .footer {
            text-align: center;
            padding: 1em;
            background-color: #333;
            color: #fff;
            margin-top: 2em;
        }
  </style>
</head>
<body>
<header class="header">
        <nav class="navbar">
            <div class="logo">
                <a href="webhome.php">
                    <img src="img/l2.jpg" alt="E-Nursery Logo">
                </a>
            </div>
            <button class="hamburger" aria-label="Toggle menu">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </button>
            <ul class="nav-links">
                <li><a href="webhome.php">Home</a></li>
                <li><a href="webhome.php">Shop</a></li>
                <li><a href="aboutpage.php">About Us</a></li>
                <li><a href="contact_page.php">Contact</a></li>
            </ul>
        </nav>
    </header>
<section id="section-wrapper">
  <div class="box-wrapper">
    <!-- Contact Information -->
    <div class="info-wrap">
      <h2 class="info-title">Contact Information</h2>
      <h3 class="info-sub-title">Fill out the form and our team will respond within 24 hours</h3>
      <ul class="info-details">
        <li>
          <img src="call.png" alt="Phone" height="30" width="25">
          <span>Phone:</span> <a href="tel:+917804984824">+91 7804984824</a>
        </li>
        <li>
          <img src="gmail.png" alt="Email" height="30" width="25">
          <span>Email:</span> <a href="mailto:plantselling@gmail.com">plantselling@gmail.com</a>
        </li>
        <li>
          <img src="web.png" alt="Website" height="30" width="25">
          <span>Website:</span> <a href="https://plantselling.com">plantselling.com</a>
        </li>
      </ul>
      <ul class="social-icons">
        <li><a href="https://www.instagram.com/"><img src="instagram 2.png" alt="Instagram"></a></li>
        <li><a href="https://www.facebook.com/"><img src="facebook 2.png" alt="Facebook"></a></li>
        <li><a href="https://twitter.com/"><img src="twitter.png" alt="Twitter"></a></li>
        <li><a href="https://www.linkedin.com/"><img src="linkedin.png" alt="LinkedIn"></a></li>
      </ul>
    </div>

    <!-- Contact Form -->
    <div class="form-wrap">
      <form action="contactdata.php" method="POST">
        <h2 class="form-title">Send Us a Message</h2>
        <div class="form-fields">
          <div class="form-group">
            <input type="text" name="fname" placeholder="First Name" required>
          </div>
          <div class="form-group">
            <input type="text" name="lname" placeholder="Last Name" required>
          </div>
          <div class="form-group">
            <input type="email" name="email" placeholder="Email" required>
          </div>
          <div class="form-group">
            <input type="number" name="phone" placeholder="Phone" required>
          </div>
          <div class="form-group">
            <textarea name="message" placeholder="Write your message here..." required></textarea>
          </div>
        </div>
        <button type="submit" class="submit-button" name="submit">Send Message</button>
      </form>
    </div>
  </div>

  <!-- Back to Home Button -->
  <div class="back-home">
    <a href="webhome.php" class="home-button">Back to Home</a>
  </div>
</section>
<footer class="footer">
        <p>&copy; 2024 plantselling. All rights reserved.</p>
    </footer>

</body>
</html>
