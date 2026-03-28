<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us -plantselling</title>
    <style>
        /* General reset */
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

        /* Hamburger Menu */
        .hamburger {
            display: none;
            flex-direction: column;
            gap: 5px;
            background: none;
            border: none;
            cursor: pointer;
        }

        .hamburger .bar {
            width: 25px;
            height: 3px;
            background-color: #fff;
            transition: all 0.3s;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .nav-links {
                display: none;
                flex-direction: column;
                background-color: #2e7d32;
                position: absolute;
                top: 60px;
                right: 10px;
                width: 200px;
                padding: 1em;
                border-radius: 5px;
                box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            }

            .nav-links.show {
                display: flex;
            }

            .hamburger {
                display: flex;
            }
        }

        /* Main Section */
        .about-section {
            padding: 2em;
            font-family: Arial, sans-serif;
            line-height: 1.6;
            max-width: 1200px;
            margin: 0 auto;
        }

        .about-container h2 {
            font-size: 2em;
            margin-bottom: 1em;
            color: #2e7d32;
        }

        .about-features {
            display: flex;
            gap: 1em;
            margin-top: 2em;
            flex-wrap: wrap;
        }

        .feature {
            text-align: center;
            flex: 1 1 calc(33.33% - 1em);
            margin-bottom: 2em;
        }

        .feature img {
            width: 100%;
            max-width: 300px;
            border-radius: 10px;
        }

        .feature h3 {
            margin: 1em 0 0.5em;
            color: #2e7d32;
        }

        /* Footer */
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

    <main class="about-section">
        <div class="about-container">
            <h2>About Us</h2>
            <p>
                Welcome to <strong>plantselling</strong>, your go-to destination for quality plants, gardening tools, and expert advice. We believe that everyone deserves a little green in their lives, and our mission is to bring nature closer to you.
            </p>
            <p>
                From flowering plants to succulents, indoor greenery to garden essentials, we offer a wide range of products designed to inspire your gardening journey. Whether you're an experienced gardener or just getting started, we are here to help.
            </p>
            <div class="about-features">
                <div class="feature">
                    <img src="image/d6.jpeg" alt="Quality Plants">
                    <h3>Premium Quality Plants</h3>
                    <p>Handpicked, healthy plants delivered to your doorstep.</p>
                </div>
                <div class="feature">
                    <img src="image/13.jpg" alt="Gardening Tools">
                    <h3>Gardening Essentials</h3>
                    <p>Everything you need to nurture your plants with care.</p>
                </div>
                <div class="feature">
                    <img src="image/111.jpg" alt="Expert Advice">
                    <h3>Expert Gardening Tips</h3>
                    <p>Step-by-step guides and tips for a thriving garden.</p>
                </div>
                <div class="feature">
                    <img src="image/d4.jpeg" alt="Custom Planters">
                    <h3>Custom Planters</h3>
                    <p>Beautiful planters tailored to match your decor.</p>
                </div>
                <div class="feature">
                    <img src="image/d2.jpeg" alt="Workshops">
                    <h3>Gardening Workshops</h3>
                    <p>Interactive sessions to enhance your gardening skills.</p>
                </div>
                <div class="feature">
                    <img src="image/d3.jpeg" alt="Eco-Friendly Solutions">
                    <h3>Eco-Friendly Solutions</h3>
                    <p>Sustainable products for an environment-friendly garden.</p>
                </div>
            </div>
        </div>
    </main>

    <footer class="footer">
        <p>&copy; 2024 plantselling. All rights reserved.</p>
    </footer>

    <script>
        const hamburger = document.querySelector('.hamburger');
        const navLinks = document.querySelector('.nav-links');

        hamburger.addEventListener('click', () => {
            navLinks.classList.toggle('show');
        });
    </script>
</body>
</html>
