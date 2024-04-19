

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- Font Awesome CDN link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-oScJFMTvvX0pufMbsoQLOVlpvym7xvc/DyLC/a27rwnbTBL+djydAC3NjXhUiu3Tnqj69W0QWpYJlfmSiNCLPQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://kit.fontawesome.com/2b66c0d144.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
    <!-- <link rel="stylesheet" href="css/form.css"> -->
    <link rel="stylesheet" media="screen and (max-width: 768px)" href="css/mobile.css">
    <link rel="stylesheet" media="screen and (min-width: 1100px)" href="css/widescreen.css">
    <title>Agora institute</title>
</head>
<body id="home">

    <!-- Navbar -->
    <nav id="navbar">
        <div class="logo">
           <a href="#home"><img src="img/agora.logo.png" alt="My logo" class="logo"></a> 
        </div>

        <ul>
            <li><a href="#home">Home</a></li>
            <li><a href="#what">What</a></li>
            <li><a href="#who">Who</a></li>
            <li><a href="#contact">Contact-Us</a></li>

        </ul>
    </nav>

    <!-- Header: Showcase -->
    <header id="showcase">
        <div class="showcase-content">
             <h1 class="l-heading">
                Welcome to Agora Institute 
             </h1>
             <p class="lead">
                AGORA RUGGED MISSION is a religious NGO spreading the gospel beyond church walls, empowering individuals in society. 
             </p>
             <a href="#what" class="btn">Read-More</a>
        </div>
    </header>

    <!-- Section: What We Do -->
    <section id="what" class="bg-light py-1">
        <div class="container">
            <h2 class="m-heading text-center">
                <span class="text-primary">What</span> We Offer
            </h2>
            <div class="items">
                <div class="item">
                    <i class="fas fa-chalkboard-teacher fa-2x"></i>
                    <div>
                        <h3>Skill acquisition</h3>
                        <p>"Candidates demonstrates proficiency in a diverse array of 
                            competencies ranging from different practicals  to effective skillful abilities."</p>
                    </div>
                </div>
                <div class="item">
                    <i class="fas fa-user-tie fa-2x"></i>
                    <div>
                        <h3>Life Coach</h3>
                        <p>"Empowering individuals to unlock their full potential, navigate life's challenges with clarity, confidence, and purpose, and thrive."</p>
                    </div>

                </div>
                <div class="item">
                    <i class="fas fa-user-graduate fa-2x"></i>
                    <div>
                        <h3>Educational Mentorship</h3>
                        <p>"Guiding students through personalized learning strategies and providing ongoing 
                            support to cultivate academic growth & personal development."</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section: Who we are -->
    <section id="who">
        <div class="who-img"></div>
        <div class="who-text bg-dark p-2">
            <h2 class="m-heading">
               Who We <span class="text-primary">Are </span>
            </h2>
            <p>AGORA RUGGED MISSION is a non-governmental and religious organization
                 dedicated to taking the gospel outside the walls of the church to disciple men and women
                 in the market place to understand their role as kingly priest and to intentionally maximize it</p>
                 <h3>Our  <span class="text-primary">Duties</h3></span>
                 <ul class="list">
                    <li>Unity Connections</li>
                    <li>Globe Advancement</li>
                    <li>Horizon OutReach</li>
                    <li>Soulful Engagement</li>
                    <li>Faithful Impact</li>
                 </ul>
        </div>
    </section>

    <!-- Section: Clients -->
    <section id="clients" class="py-1">
        <div class="container">
            <h2 class="m-heading text-center">
                <span class="text-primary">Our</span> Sponsors
            </h2>
            <div class="items py-1">
                 <div><img src="./img/anglicanlogo.png" alt="Client"></div>
                 <div><img src="./img/newbblogo.png" alt="Client"></div>
                 <div><img src="./img/menslogo.png" alt="Client"></div>
                 <div><img src="./img/newwomenlogo.png" alt="Client"></div>
                 <div><img src="./img/girlsguild.png" alt="Client"></div>
            </div>
        </div>
    </section>

    <!-- Section: Contact -->
    <section id="contact">
        <!-- New form validation -->
        <div class="contact-form bg-primary p-2">
                <form action="includes/formhandler.inc.php" method="POST" id="form" class="form">
                <h2 class="m-heading">Contact-Us Now</h2>
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" name="name" id="name" placeholder="Enter Full Name">
                    <small class="error-message" id="name-error">Name is required</small>
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="text" name="email" id="email" placeholder="Enter Email">
                    <small class="error-message" id="email-error">Email is required</small>
                </div>
                <div class="form-group">
                    <label for="phone">Phone No:</label>
                    <input type="text" name="phone" id="phone" placeholder="Enter Phone Number">
                    <small class="error-message" id="phone-error">Phone number is required</small>
                </div>
                <div class="form-group">
                    <label for="message">Message:</label>
                    <textarea name="message" id="message" placeholder="Write Message"></textarea>
                    <small class="error-message" id="message-error">Message is required</small>
                </div>
                <button type="submit" class="btn btn-dark">Submit</button>
                <div class="success-message" id="success-message" style="display: none;">Form submitted successfully!</div>
                </form>

        </div>
            



       
        <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.9373618543023!2d7.4954294!3d6.4020723!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1044a1264f735537%3A0x3f5aa85f6f189fab!2sHoly%20Trinity%20Anglican%20Church%2C%20Agbani%20Road%2C%20Awkunanaw%20Enugu.!5e0!3m2!1sen!2sng!4v1710631223525!5m2!1sen!2sng" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
            
    
    </section>
    <!-- Footer -->
    <footer id="main-footer" class="bg-dark text-center py-1">
        <div class="container">
            <p>Copyright &copy; 2024, Tim-Technology, All Rights Reserved</p>
        </div>
        
    </footer>

    <!-- Jquery Cdn -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    

    <!-- Your HTML code -->
    <script>
    window.onload = function() {
        const urlParams = new URLSearchParams(window.location.search);
        const successParam = urlParams.get('success');
        if (successParam === 'true') {
            alert('Form submitted successfully!');
        }

        //For form not successfully filled
        document.getElementById('contactForm').addEventListener('submit', function(event) {
            const name = document.querySelector('input[name="name"]').value;
            const email = document.querySelector('input[name="email"]').value;
            const phone = document.querySelector('input[name="phone"]').value;
            const message = document.querySelector('textarea[name="message"]').value;

            if (!name || !email || !phone || !message) {
                event.preventDefault(); // Prevent form submission
                alert('Please fill in all fields before submitting the form.');
            }
        });
    };
</script>



    <!--  Local Host Js file -->

<script src="js/main.js"></script>
<!-- Contact form: Js file -->
<script src="js/form.js"></script>

</body>
</html>

<!-- AIzaSyCsNmZGSE9-SwE7Iydh50JLuu5a6ROZTXw -->

