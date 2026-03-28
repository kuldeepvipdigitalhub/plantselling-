<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Team - plantselling</title>
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
            background-color: #333;
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
        .team-section {
            padding: 2em;
            font-family: Arial, sans-serif;
            line-height: 1.6;
            max-width: 1200px;
            margin: 0 auto;
            text-align: center;
        }

        .team-container h2 {
            font-size: 2em;
            margin-bottom: 1em;
            color: #2e7d32;
        }

        .team-members {
            display: flex;
            gap: 1em;
            margin-top: 2em;
            flex-wrap: wrap;
            justify-content: center;
        }

        .member {
            text-align: center;
            flex: 1 1 calc(33.33% - 1em);
            margin-bottom: 2em;
        }

        .member img {
            width: 100%;
            max-width: 200px;
            border-radius: 50%;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
        }

        .member h3 {
            margin: 1em 0 0.5em;
            color: #2e7d32;
        }

        .member p {
            color: #555;
            font-size: 0.9em;
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
                <li><a href="ourteam.php">Our Team</a></li>
                <li><a href="contact_page.php">Contact</a></li>
            </ul>
        </nav>
    </header>

    <main class="team-section">
        <div class="team-container">
            <h2>Our Team</h2>
            <p>
                Meet the dedicated team behind <strong>plantselling</strong>, passionate about bringing greenery and sustainability to your life. Together, we work to inspire your gardening journey.
            </p>
            <div class="team-members">
                <div class="member">
                    <img src="image/Kuldeep.jpg" alt="Team Member 1">
                    <h3>Kuldeep Harinkhede</h3>
                    <p>Founder & CEO</p>
                </div>
                <div class="member">
                    <img src="image/atul3.jpg" alt="Team Member 2">
                    <h3>Atul Rahangdale</h3>
                    <p>Co-founder of Company</p>
                </div>
                <div class="member">
                    <img src="image/niraj - Copy.jpg" alt="Team Member 3">
                    <h3>Neeraj Hirkaney</h3>
                    <p>Head Manager</p>
                </div>
            </div>
        </div>
    </main>

    <footer class="footer">
        <p>&copy; 2024 E-Nursery. All rights reserved.</p>
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
