<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zorber Corporate Games</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>
    <header>
        <nav>
            <div class="logo">
                <img src="assests/image/logo.jpg" alt="Zorber Corporate Games Logo">
            </div>
            <button class="hamburger" id="hamburger">
                <i class="fas fa-bars"></i>
            </button>
            <ul id="nav-menu">
                <li><a href="#home"><i class="fas fa-home"></i> Home</a></li>
                <li><a href="#activities"><i class="fas fa-tasks"></i> Activities</a></li>
                <li><a href="#games"><i class="fas fa-gamepad"></i> Games</a></li>
                <li><a href="#about"><i class="fas fa-info-circle"></i> About Us</a></li>
                <li><a href="#contact"><i class="fas fa-envelope"></i> Contact</a></li>
            </ul>
        </nav>
    </header>
    <script>
        const hamburger = document.getElementById('hamburger');
        const navMenu = document.getElementById('nav-menu');

        hamburger.addEventListener('click', () => {
            navMenu.classList.toggle('active');
        });
    </script>

    </script>
    <style>
        /* Base styles */
        header nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 20px;
            background-color: rgb(29, 30, 31);
            flex-wrap: wrap;
        }

        .logo img {
            height: 60px;
            width: auto;
            border-radius: 10px;
        }

        nav ul {
            display: flex;
            gap: 15px;
            list-style: none;
        }

        nav ul li a {
            color: white;
            text-decoration: none;
            font-size: 1rem;
            display: flex;
            align-items: center;
            gap: 5px;
        }

        nav ul li a:hover {
            text-decoration: underline;
        }

        /* Hamburger style */
        .hamburger {
            display: none;
            background: none;
            border: none;
            font-size: 1.8rem;
            color: white;
            cursor: pointer;
        }

        /* Mobile Styles */
        @media (max-width: 768px) {
            .hamburger {
                display: block;
            }

            #nav-menu {
                display: none;
                flex-direction: column;
                width: 100%;
                margin-top: 10px;
            }

            #nav-menu.active {
                display: flex;
            }

            nav ul li {
                width: 100%;
            }

            nav ul li a {
                display: block;
                width: 100%;
                padding: 10px 0;
                border-bottom: 1px solid rgba(255, 255, 255, 0.2);
            }

            .logo img {
                height: 50px;
            }
        }

        .banner {
            text-align: center;
            background: url('assests/image/header.jpg') no-repeat center center/cover;
            padding: 4em 0;

        }

        .banner h1 {
            font-size: 3em;
        }

        .banner p {
            font-size: 1.5em;
            margin-bottom: 1em;
        }

        .cta-button {
            background-color: #327dd5;
            color: white;
            padding: 0.5em 1em;
            text-decoration: none;
            border-radius: 5px;
        }

        h2 {
            text-align: center;
            margin-top: 1em;
            color: #333;
        }

        section {
            padding: 2em 1em;
            background: #fff;
            margin: 1em 0;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .activity,
        .game {
            margin-bottom: 2em;
        }

        ul {
            list-style: none;
            padding: 0;
        }

        ul li {
            background: #0077cc;
            color: #fff;
            margin: 0.5em 0;
            padding: 0.5em;
            border-radius: 5px;
        }
    </style>
    <main>
        <!-- Home Section -->
        <section id="home" class="banner">
            <div class="banner-content">
                <h1>Zorber Corporate Games</h1>
                <p>Welcome to a Day of Learning, Fun, and Team Building! Embark on a journey of corporate camaraderie
                    with our specially designed outdoor games that go beyond the conventional to build a robust work
                    culture.</p>
                <a href="Bookingform.php" button id="bookNowBtn" class="book-now-btn"><i
                        class="fas fa-calendar-alt"></i> Book Now</a>


                <style>
                    .book-now-btn {
                        padding: 10px 20px;
                        background-color: #0077b6;
                        color: white;
                        border: none;
                        border-radius: 30px;
                        cursor: pointer;
                        font-size: 1rem;
                    }

                    .modal {
                        display: none;
                        position: fixed;
                        z-index: 1000;
                        left: 0;
                        top: 0;
                        width: 100%;
                        height: 100%;
                        overflow: auto;
                        background-color: rgba(0, 0, 0, 0.6);
                    }

                    .modal-content {
                        background-color: #fff;
                        margin: 10% auto;
                        padding: 30px;
                        border-radius: 10px;
                        width: 90%;
                        max-width: 500px;
                        position: relative;
                    }

                    .close-btn {
                        position: absolute;
                        top: 15px;
                        right: 20px;
                        font-size: 24px;
                        cursor: pointer;
                    }

                    /* Banner Section */
                    .banner {
                        position: relative;
                        height: 100vh;
                        background: url('assests/image/header.jpg') no-repeat center center/cover;
                        display: flex;
                        justify-content: center;
                        align-items: center;
                        text-align: center;
                        color: b;
                        overflow: hidden;
                    }

                    .banner-overlay {
                        position: absolute;
                        top: 0;
                        left: 0;
                        width: 100%;
                        height: 100%;
                        background: rgba(10, 9, 9, 0.5);
                        z-index: 1;
                    }

                    .banner-content {
                        position: relative;
                        z-index: 2;
                        max-width: 800px;
                        padding: 20px;
                        animation: fadeInUp 1.2s ease-out;
                    }

                    .banner h1 {
                        font-size: 3rem;
                        margin-bottom: 20px;
                        font-weight: bold;
                        text-shadow: 2px 2px 8px #000;
                    }

                    .banner p {
                        font-size: 1.25rem;
                        line-height: 1.6;
                        margin-bottom: 30px;
                        text-shadow: 1px 1px 6px #000;
                    }


                    .cta-button:hover {
                        background-color: #005fa3;
                        transform: scale(1.05);
                    }

                    /* Animation */
                    @keyframes fadeInUp {
                        from {
                            opacity: 0;
                            transform: translateY(50px);
                        }

                        to {
                            opacity: 1;
                            transform: translateY(0);
                        }
                    }
                </style>
        </section>

        <!-- Activities Section -->
        <section id="activities">
            <div class="container">
                <h2>Activities</h2>
                <div class="games-list">
                    <div class="game">
                        <h3>Team Building Challenge: "Synergy Summit"</h3>
                        <p>Objective: Conquer the metaphorical summit by overcoming challenges that demand
                            collaboration, trust, and collective problem-solving.</p>
                        <p><strong>Key Skills Developed:</strong></p>
                        <ul>
                            <li><i class="fas fa-users"></i> Teamwork and Collaboration</li>
                            <li><i class="fas fa-handshake"></i> Trust-Building</li>
                            <li><i class="fas fa-brain"></i> Problem-Solving</li>
                        </ul>
                    </div>
                    <div class="game">
                        <h3>Coordination Quest: "Precision Pursuit"</h3>
                        <p>Objective: Navigate a series of obstacles as a synchronized team, emphasizing precision,
                            timing, and seamless coordination.</p>
                        <p><strong>Key Skills Developed:</strong></p>
                        <ul>
                            <li><i class="fas fa-sync-alt"></i> Coordination and Synchronization</li>
                            <li><i class="fas fa-clock"></i> Time Management</li>
                            <li><i class="fas fa-lightbulb"></i> Adaptability</li>
                        </ul>
                    </div>
                    <div class="game">
                        <h3>Understanding Relay: "Empathy Express"</h3>
                        <p>Objective: Teams participate in a relay race with a twist – each leg represents a different
                            department. Learn to understand and appreciate the roles and challenges of colleagues.</p>
                        <p><strong>Key Skills Developed:</strong></p>
                        <ul>
                            <li><i class="fas fa-heart"></i> Empathy</li>
                            <li><i class="fas fa-sitemap"></i> Cross-Functional Understanding</li>
                            <li><i class="fas fa-thumbs-up"></i> Appreciation of Diverse Roles</li>
                        </ul>
                    </div>
                    <div class="game more">
                        <h3>Help & Support Marathon: "Unity Relay"</h3>
                        <p>Objective: A team-oriented marathon where participants rotate roles, emphasizing the
                            importance of supporting one another to reach the finish line.</p>
                        <p><strong>Key Skills Developed:</strong></p>
                        <ul>
                            <li><i class="fas fa-hand-holding-heart"></i> Mutual Support</li>
                            <li><i class="fas fa-chess-king"></i> Leadership Rotation</li>
                            <li><i class="fas fa-trophy"></i> Shared Success</li>
                        </ul>
                    </div>
                    <div class="game more">
                        <h3>Managerial Maze: "Leadership Lab"</h3>
                        <p>Objective: Navigate a maze with a designated manager providing guidance. Develop and showcase
                            leadership skills under challenging circumstances.</p>
                        <p><strong>Key Skills Developed:</strong></p>
                        <ul>
                            <li><i class="fas fa-user-tie"></i> Leadership</li>
                            <li><i class="fas fa-check"></i> Decision-Making</li>
                            <li><i class="fas fa-briefcase"></i> Managerial Skills</li>
                        </ul>
                    </div>
                    <div class="game more">
                        <h3>Communication Challenge: "Mission Impeccable"</h3>
                        <p>Objective: Complete a series of tasks with strict communication restrictions, fostering
                            innovative communication strategies and problem-solving.</p>
                        <p><strong>Key Skills Developed:</strong></p>
                        <ul>
                            <li><i class="fas fa-comments"></i> Clear Communication</li>
                            <li><i class="fas fa-puzzle-piece"></i> Creative Problem-Solving</li>
                            <li><i class="fas fa-users-cog"></i> Effective Collaboration</li>
                        </ul>
                    </div>
                    <div class="game more">
                        <h3>Hard Work vs. Smart Work: "Efficiency Expedition"</h3>
                        <p>Objective: Balance the need for hard work and smart work to conquer a series of tasks within
                            a set time frame.</p>
                        <p><strong>Key Skills Developed:</strong></p>
                        <ul>
                            <li><i class="fas fa-hourglass-half"></i> Time Management</li>
                            <li><i class="fas fa-cogs"></i> Work Efficiency</li>
                            <li><i class="fas fa-chess-board"></i> Strategic Thinking</li>
                        </ul>
                    </div>
                </div>
                <button id="learn-more" class="learn-more-button"><i class="fas fa-info-circle"></i> Learn More</button>
            </div>
        </section>
        <style>
            #activities {
                background: #f2f9ff;
                padding: 40px 20px;
            }

            #activities h2 {
                text-align: center;
                font-size: 2.5rem;
                margin-bottom: 30px;
                color: #0077b6;
                font-weight: 700;
            }

            .games-list {
                display: flex;
                overflow-x: auto;
                scroll-behavior: smooth;
                gap: 20px;
                padding-bottom: 20px;
            }

            .games-list::-webkit-scrollbar {
                height: 10px;
            }

            .games-list::-webkit-scrollbar-thumb {
                background-color: #0077b6;
                border-radius: 6px;
            }

            .games-list::-webkit-scrollbar-track {
                background-color: #e0f0ff;
            }


            .game {
                flex: 0 0 300px;
                background: white;
                border-radius: 15px;
                padding: 20px;
                box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
                transition: transform 0.3s ease;
                min-width: 300px;
                opacity: 1;
                transition: transform 0.3s ease, opacity 0.4s ease;
            }

            .game:hover {
                transform: scale(1.05);
            }

            .game h3 {
                font-size: 1.2rem;
                color: #023e8a;
                margin-bottom: 10px;
            }

            .game p {
                font-size: 0.95rem;
                color: #333;
            }

            .game ul {
                list-style: none;
                padding: 0;
                margin-top: 10px;
            }

            .game ul li {
                margin: 8px 0;
                font-size: 0.95rem;
                color: #fff;
            }

            .game ul li i {
                margin-right: 8px;
                color: #0077b6;
            }

            .learn-more-button {
                display: block;
                margin: 30px auto 0;
                background-color: #0077b6;
                color: white;
                padding: 12px 25px;
                font-size: 1rem;
                border: none;
                border-radius: 30px;
                cursor: pointer;
                transition: background-color 0.3s ease;
            }

            .learn-more-button:hover {
                background-color: #005f99;
            }

            .game.more {
                display: none;
            }

            .game.more.show {
                display: block;
                opacity: 1;
            }
        </style>
        <script>
            document.getElementById('learn-more').addEventListener('click', function () {
                const moreGames = document.querySelectorAll('.game.more');
                moreGames.forEach(function (game) {
                    game.classList.add('show');
                });
                this.style.display = 'none'; // hide the button after click
            });
        </script>



        <!-- Games Section -->

        <section id="games" class="games-section">
            <header>
                <h1>Welcome to Games Galore!</h1>
                <p>Experience the thrill of unique games for all ages.</p>
            </header>
            <div class="games-container">
                <div class="game">
                    <h2>Zorbing Football</h2>
                    <img src="assests/image/zorbing.jpg" alt="Zorbing football">
                    <p>Welcome to the dynamic world of Zorbing Football, where the familiar game of football gets a wild
                        makeover. This thrilling activity combines the best elements of traditional football with the
                        excitement of zorbing, creating an unforgettable experience for players and spectators alike.
                    </p>
                    <a href="Zorbing Football.php" class="btn"><i class="fas fa-info-circle"></i> Learn More</a>
                </div>

                <div class="game">
                    <h2>Red Light, Green Light</h2>
                    <img src="assests/image/red-light-green-light.jpg" alt="Red Light, Green Light">
                    <p>Welcome to the timeless and energetic game of Red Light, Green Light – a classic that never fails
                        to bring joy, laughter, and a hint of suspense. Whether you're organizing a children's party, a
                        team-building event, or just want to relive the nostalgia of your childhood, this game is a
                        perfect choice for all ages.</p>
                    <a href="Red and green.php" class="btn"><i class="fas fa-info-circle"></i> Learn More</a>
                </div>
                <div class="game">
                    <h2>Zorb Sumo Wrestling</h2>
                    <img src="assests/image/sumo.webp" alt="Zorb Sumo Wrestling">
                    <p>Welcome to the world of Zorb Sumo Wrestling, where the ancient sport of sumo gets a modern and
                        entertaining twist! This unique and laughter-filled activity combines the excitement of sumo
                        wrestling with the thrill of being encased in giant inflatable zorb balls.</p>
                    <a href="Zorb Sumo.php" class="btn"><i class="fas fa-info-circle"></i> Learn More</a>
                </div>

                <div class="game">
                    <h2>Tic Tac Balloon Relay</h2>
                    <img src="assests/image/tic tac.jpg" alt="Tic Tac Balloon Relay">
                    <p>Welcome to the Tic Tac Balloon Relay, a lively and entertaining variation of the classic X & O
                        game. In this exhilarating team activity, participants compete in a relay race to create a row
                        of three balloons of their team's color on a giant tic-tac-toe board.</p>
                    <a href="Tic Tac Balloon.php" class="btn"><i class="fas fa-info-circle"></i> Learn More</a>
                </div>

                <section class="game">
                    <h2>Plank Walk Challenge</h2>
                    <img src="assests/image/Plank.jpg" alt="Plank Walk Challenge">
                    <p>
                        Welcome to the Plank Walk Challenge, an exhilarating team-building activity that combines
                        coordination, communication, and precision. In this challenge, groups of five people will embark
                        on a race, each holding a rope attached to a plank, navigating their way from the start point to
                        the finish line.
                    </p>
                    <a href="Plank Walk.php" class="btn"><i class="fas fa-info-circle"></i>Learn More</a>
                </section>

                <section class="game">
                    <h2>Lava Walk Challenge</h2>
                    <img src="assests/image/lava.jpg" alt="Lava Walk Challenge">
                    <p>
                        Welcome to the Lava Walk Challenge, a thrilling and strategic team-building activity that will
                        test your group's coordination, communication, and problem-solving skills. In this challenge,
                        groups of 10 people will navigate an imaginary "lava" terrain, using only pieces of paper to
                        avoid touching the ground.
                    </p>
                    <a href="Lava Walk.php" class="btn"><i class="fas fa-info-circle"></i>Learn More</a>
                </section>
                <div class="game">
                    <h2>Pen and Ball Team Challenge</h2>
                    <img src="assests/image/pen.jpg" alt="Pen and Ball Team Challenge">
                    <p>Welcome to the Pen and Ball Team Challenge, a fun and engaging activity that combines teamwork,
                        coordination, and precision. In this challenge, participants will work together to transport a
                        small ball from one point to another using only a set of pens.</p>
                    <a href="Pen and Ball Team.php" class="btn"><i class="fas fa-info-circle"></i> Learn
                        More</a>
                </div>


                <section class="game">
                    <h2>Sponge Relay Challenge</h2>
                    <img src="assests/image/sponge.jpg" alt="Sponge Relay Challenge">
                    <p>
                        Welcome to the Sponge Relay Challenge, a refreshing team activity that tests coordination,
                        speed, and teamwork. Teams of 10 members will race to fill bottles by passing a water-filled
                        sponge.
                    </p>
                    <a href="Sponge Relay.php" class="btn"><i class="fas fa-info-circle"></i>Learn More</a>
                </section>

                <section class="game">
                    <h2>Acid River Crossing Challenge</h2>
                    <img src="assests/image/acid.jpg" alt="Acid River Crossing Challenge">
                    <p>
                        Welcome to the Acid River Crossing Challenge, an exhilarating test of teamwork and coordination.
                        Teams of 10 will navigate an "acid river" by crossing boxes with tied legs.
                    </p>
                    <a href="Acid River Crossing.php" class="btn"><i class="fas fa-info-circle"></i>Learn
                        More</a>
                </section>

                <section class="game">
                    <h2>Celebrity Box Puzzle Challenge</h2>
                    <img src="assests/image/celebrity.jpg" alt="Celebrity Box Puzzle Challenge">
                    <p>
                        Welcome to the Celebrity Box Puzzle Challenge, where teams assemble cube pieces to create a
                        celebrity face. Teams of 10 members race to complete the puzzle first!
                    </p>
                    <a href="Celebrity Box.php" class="btn"><i class="fas fa-info-circle"></i>Learn
                        More</a>
                </section>
                <section class="game">
                    <h2>Tied Hands Ball Push Challenge</h2>
                    <img src="assests/image/tied.jpg" alt="Tied Hands Ball Push Challenge">
                    <p>
                        Welcome to the Tied Hands Ball Push Challenge, a unique team activity where teams of 10 members
                        compete to push a ball to their target area with their hands tied behind their backs.
                    </p>
                    <a href="Tied Hands Ball.php" class="btn"><i class="fas fa-info-circle"></i>Learn
                        More</a>
            </div>
        </section>
        <style>
            .games-header {
                text-align: center;
                margin-bottom: 40px;
                padding: 0 20px;
            }

            header {
                background: white;
                padding: 1em 0;
            }

            header h1 {
                font-family: 'Poppins', sans-serif;
                font-size: 2.8rem;
                font-weight: 700;
                color: #0077b6;
                letter-spacing: 1.2px;
                margin-bottom: 12px;
                text-transform: uppercase;
                text-shadow: 2px 2px 8px rgba(44, 62, 80, 0.2);
            }

            header p {
                font-family: 'Open Sans', sans-serif;
                font-size: 1.1rem;
                color: #7f8c8d;
                max-width: 500px;
                margin: 0 auto;
                font-weight: 400;
                line-height: 1.5;
            }

            .games-section {
                padding: 40px 20px;
                background: #f9f9f9;
                overflow-x: hidden;
            }

            .games-container {
                display: flex;
                overflow-x: auto;
                gap: 20px;
                padding: 20px 0;
                scroll-behavior: smooth;
            }

            .games-container::-webkit-scrollbar {
                height: 10px;
            }

            .games-container::-webkit-scrollbar-thumb {
                background: #888;
                border-radius: 10px;
            }

            .games-container::-webkit-scrollbar-track {
                background: #f1f1f1;
            }

            .game {
                flex: 0 0 300px;
                background: white;
                border-radius: 12px;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                padding: 20px;
                transition: transform 0.3s ease;
                min-width: 300px;
                max-width: 300px;
            }

            .game img {
                width: 100%;
                height: 180px;
                object-fit: cover;
                border-radius: 10px;
            }

            .game h2 {
                font-size: 1.2rem;
                margin: 15px 0 10px;
            }

            .game p {
                font-size: 0.95rem;
                color: #555;
            }

            .game .btn {
                margin-top: 10px;
                display: inline-block;
                background: #007BFF;
                color: white;
                padding: 10px 15px;
                border-radius: 8px;
                text-decoration: none;
                font-size: 0.9rem;
                transition: background 0.3s;
            }

            .game .btn:hover {
                background: #0056b3;
            }

            .games-section header {
                text-align: center;
                margin-bottom: 20px;
            }
        </style>

        <!-- About Us Section -->
        <section id="about" class="about-us-section">
            <div class="container">
                <h2>About Us</h2>
                <p>
                    At Zorber Corporate Games, we are passionate about fostering unity, productivity, and collaboration
                    through engaging outdoor experiences. Our mission is to provide companies with a platform to
                    strengthen team dynamics, enhance communication, and build lasting workplace relationships —
                    all in a fun, energizing environment.
                </p>
            </div>
        </section>
        <style>
            /* About Us Section */
            .about-us-section {
                background: linear-gradient(to right, #e0f7fa, #ffffff);
                padding: 80px 20px;
                text-align: center;
            }

            .about-us-section .container {
                max-width: 900px;
                margin: auto;
                padding: 0 20px;
            }

            .about-us-section h2 {
                font-size: 2.5rem;
                color: #0077b6;
                margin-bottom: 25px;
                position: relative;
            }

            .about-us-section h2::after {
                content: "";
                display: block;
                width: 60px;
                height: 4px;
                background-color: #00bcd4;
                margin: 10px auto 0;
                border-radius: 2px;
            }

            .about-us-section p {
                font-size: 1.1rem;
                color: #333;
                line-height: 1.8;
                font-weight: 400;
            }

            /* Responsive Text Adjustments */
            @media (max-width: 768px) {
                .about-us-section h2 {
                    font-size: 2rem;
                }

                .about-us-section p {
                    font-size: 1rem;
                    padding: 0 10px;
                }
            }
        </style>


        <!-- Contact Section -->
        <section id="contact" class="contact-section">
            <div class="container">
                <h2>Contact Us</h2>
                <p>If you have any questions or would like to book a session, please reach out to us using the form
                    below. We look forward to hearing from you!</p>
                <form action="submit_form.php" method="POST">
                    <div class="form-group">
                        <label for="name"><i class="fas fa-user"></i> Name:</label>
                        <input type="text" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="email"><i class="fas fa-envelope"></i> Email:</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="message"><i class="fas fa-comment"></i> Message:</label>
                        <textarea id="message" name="message" required></textarea>
                    </div>
                    <button type="submit" class="submit-button"><i class="fas fa-paper-plane"></i> Submit</button>
                </form>
            </div>
        </section>
    </main>
    <footer>
        <div class="footer-container">
            <p>&copy; 2025 Zorber Corporate Games. All rights reserved.</p>
            <div class="social-icons">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
            </div>
        </div>
    </footer>

</body>

</html>
<style>
    /* Contact Section */
    .contact-section {
        padding: 80px 20px;
        background: #f0f7ff;
        text-align: center;
    }

    .contact-section .container {
        max-width: 700px;
        margin: 0 auto;
        background: #ffffff;
        padding: 40px 30px;
        border-radius: 16px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
    }

    .contact-section h2 {
        font-size: 2.5rem;
        color: #0077b6;
        margin-bottom: 20px;
    }

    .contact-section p {
        font-size: 1.1rem;
        color: #555;
        margin-bottom: 30px;
        line-height: 1.6;
    }

    /* Form Styles */
    form .form-group {
        margin-bottom: 20px;
        text-align: left;
    }

    form label {
        display: block;
        margin-bottom: 8px;
        font-weight: 600;
        color: #333;
        font-size: 1rem;
    }

    form label i {
        margin-right: 6px;
        color: #0077cc;
    }

    form input,
    form textarea {
        width: 100%;
        padding: 12px 15px;
        border: 1px solid #ccc;
        border-radius: 10px;
        font-size: 1rem;
        transition: border-color 0.3s ease;
    }

    form input:focus,
    form textarea:focus {
        outline: none;
        border-color: #0077cc;
    }

    /* Submit Button */
    .submit-button {
        margin-top: 10px;
        background-color: #0077cc;
        color: white;
        border: none;
        padding: 12px 30px;
        font-size: 1rem;
        border-radius: 30px;
        cursor: pointer;
        transition: background-color 0.3s ease, transform 0.2s ease;
        box-shadow: 0 6px 15px rgba(0, 119, 204, 0.3);
    }

    .submit-button:hover {
        background-color: #005fa3;
        transform: scale(1.05);
    }

    /* Footer Styles */
    footer {
        background-color: #002b45;
        color: #ffffff;
        padding: 30px 20px;
        text-align: center;
        font-size: 0.95rem;
    }

    .footer-container {
        max-width: 1200px;
        margin: 0 auto;
    }

    footer p {
        margin: 0;
        padding-bottom: 10px;
        font-weight: 400;
    }

    .social-icons {
        margin-top: 10px;
    }

    .social-icons a {
        color: #ffffff;
        margin: 0 10px;
        font-size: 1.2rem;
        transition: color 0.3s ease;
    }

    .social-icons a:hover {
        color: #00bcd4;
    }
</style>