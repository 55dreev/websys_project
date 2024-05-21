<?php
include("connection.php");
session_start(); // Start the session

// Check if the username is set in the session
if (!isset($_SESSION['username'])) {
    header('Location: login.php'); // Redirect to login page if not logged in
    exit();
}
$username = $_SESSION['username'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Climate Change Awareness</title>
    <link rel="stylesheet" href="../css/styles.css">
   
</head>
<body>
    <div class="navbar" id="navbar">
    <a>Welcome, <?php echo htmlspecialchars($username); ?></a> <!-- Display the username -->
        <a href="#hero">Home</a>
        <a href="#about">About</a>
        <a href="#issues">Issues</a>
        <a href="#solution">Solutions</a>
        <a href="#get-involved">Get Involved</a>
        <a href="logout.php" onclick="return confirm('Are you sure you want to log out?')">Logout</a>

    </div>
<main>
    <section id="hero" class="hero">
        <div class="hero-overlay"></div>
        <div class="container">
            <div class="hero-content">
                <h1 class="hero-title">Join the Fight Against Climate Change!</h1>
                <p class="hero-subtitle">Together, We Can Make a Difference</p>
                <a href="#" class="hero-btn">Learn More</a>
            </div>
        </div>
    </section>

    <section id="about" class="about">
        <div class="container">
            <div class="about-header">
                <div class="logo">
                    <img src="../assets/img/logo.png" alt="Climate Change Awareness Logo">
                </div>
                <div class="about-text">
    <h2 class="section-title">About Us</h2>
   <p class="section-description">Climate Change Awareness is dedicated to spreading knowledge and inspiring action to combat climate change. We believe that through education, advocacy, and community engagement, we can empower individuals and organizations to take meaningful steps towards a sustainable future. <br><br>Our mission is to raise awareness about the urgent need for environmental conservation and sustainability. We aim to highlight the impacts of climate change on ecosystems, wildlife, and human communities, and to promote solutions that can mitigate these effects. <br><br>Through our campaigns, workshops, and outreach programs, we strive to inspire a collective response to the climate crisis. By collaborating with scientists, policymakers, and activists, we work to create a platform for sharing knowledge and fostering innovative approaches to environmental challenges.</p>

    <br><br><br>
    <div class="stats">
        <div class="stat">
            <div class="stat-content">
                <div class="stat-box"></div>
                <h3 class="stat-title">10k+</h3>
            </div>
            <p class="stat-description">Years of Environmental Advocacy</p>
        </div>
        <div class="stat">
            <div class="stat-content">
                <div class="stat-box"></div>
                <h3 class="stat-title">100k+</h3>
            </div>
            <p class="stat-description">People Reached</p>
        </div>
        <div class="stat">
            <div class="stat-content">
                <div class="stat-box"></div>
                <h3 class="stat-title">50+</h3>
            </div>
            <p class="stat-description">Successful Initiatives</p>
        </div>
    </div> 

    <div class="developer-pics">
    <h2 class="section-title">Meet the Developers</h2>
    <div class="pic-container">
        <div class="pic-box">
            <img src="../assets/img/dave.jpg" alt="Developer 1">
            <p class="pic-description">Dave Jazmin <br><br>Front-End Supervisor</p>
        </div>
        <div class="pic-box">
            <img src="../assets/img/karl.jpg" alt="Developer 2">
            <p class="pic-description">Karl De Vera <br><br>Database Engineer</p>
        </div>
        <div class="pic-box">
            <img src="../assets/img/sarah.jpg" alt="Developer 3">
            <p class="pic-description">Sarah Abane<br><br>Lead Web Designer</p>
        </div>
        <div class="pic-box">
            <img src="../assets/img/andreev.jpg" alt="Developer 4">
            
            <p class="pic-description">Andreev Ataiza<br><br>Database Admin</p>
        </div>
    </div>
</div>

</div>
            </div>
        </div>
    </section>
    
    <section id="issues" class="issues">
        <div class="container">
            <h2 class="section-title">Climate Change Issues</h2>
            <div class="issue">
                <img src="../assets/img/issue1.jpg" alt="Global Warming Issue">
                <div class="issue-content">
                    <h3 class="issue-title">Global Warming</h3>
                    <p class="issue-description">Rising temperatures lead to melting ice caps, rising sea levels, and extreme weather events.</p>
                </div>
            </div>
            <div class="issue">
                <img src="../assets/img/issue2.jpg" alt="Deforestation Issue">
                <div class="issue-content">
                    <h3 class="issue-title">Deforestation</h3>
                    <p class="issue-description">Clearing forests for agriculture and urbanization contributes to carbon dioxide emissions and loss of biodiversity.</p>
                </div>
            </div>
            <div class="issue">
                <img src="../assets/img/issue3.jpg" alt="Ocean Acidification Issue">
                <div class="issue-content">
                    <h3 class="issue-title">Ocean Acidification</h3>
                    <p class="issue-description">Increased carbon dioxide levels in the atmosphere lead to higher acidity in oceans, harming marine life and coral reefs.</p>
                </div>
            </div>
        </div>
    </section>
    


    <section id="solution" class="solutions">
        <div class="container">
            <h2 class="section-title">Our Solutions</h2>
            <div class="carousel-box">
                <div class="solution-container">
                    <div class="solution" id="solution1">
                        <img src="../assets/img/solar.jpg" alt="Climate Change Solution 1">
                        <h3 class="solution-title"><br>1. Solar Energy</h3>
                        <p class="solution-description">Solar energy harnesses the sun's abundant and clean power. By converting sunlight into electricity or heat, it provides a sustainable alternative to fossil fuels, reducing carbon emissions and environmental impact.
                            Solar reduces our carbon footprint. A solar panel can reduce carbon dioxide emissions by more than 100 tons over its 28-year lifetime. Adopting solar power reduces our carbon footprint and reliance on fossil fuels.
                        </p>
                    </div>
                    <div class="solution" id="solution2">
                        <img src="../assets/img/wind.jpg" alt="Climate Change Solution 2">
                        <h3 class="solution-title"><br>2. Wind Energy</h3>
                        <p class="solution-description">Wind energy utilizes the power of the wind to generate electricity. It is a clean, abundant, and inexhaustible source, playing a crucial role in mitigating climate change by decreasing dependence on non-renewable energy.
                            Generating energy from the wind does not release any carbon emissions. By replacing electricity generated from other sources such as fossil fuel power stations, wind energy can lead to an overall reduction in carbon emissions.</p>
                    </div>
                    <div class="solution" id="solution3">
                        <img src="../assets/img/hydro.jpg" alt="Climate Change Solution 3">
                        <h3 class="solution-title"><br>3. Hydroelectric energy</h3>
                        <p class="solution-description">Hydroelectric energy tap into the Earth's heat or water flow to produce power. These sources are environmentally friendly, emitting low levels of greenhouse gases, and offer a reliable and consistent energy supply.
                            Hydroelectric energy is a powerful and sustainable solution for addressing climate change. By harnessing the force of moving water, we can generate clean electricity and significantly reduce greenhouse gas emissions.
                            Its contribution to reducing dependence on fossil fuels and managing water resources further solidifies its role in mitigating environmental impact and fostering sustainability.</p>
                    </div>
                    <div class="solution" id="solution4">
                        <img src="../assets/img/forestry.jpg" alt="Climate Change Solution 4">
                        <h3 class="solution-title"><br>4. Better Forestry Management and Sustainable Agriculture</h3>
                        <p class="solution-description">Implementing reforestation and afforestation practices helps sequester carbon, mitigating the impacts of greenhouse gas emissions. 
                            Additionally, sustainable agricultural methods, such as agroforestry and organic farming, contribute to carbon sequestration and enhance soil health. 
                            By promoting biodiversity and reducing deforestation, these approaches foster resilient ecosystems and support a more sustainable and climate-resilient future.</p>
                    </div>
                    <div class="solution" id="solution5">
                        <h3 class="solution-title"><br>5. Our Choices</h3>
                        <p class="solution-description">Our individual and collective choices play a pivotal role in combating climate change. <br>Adopting energy-efficient practices, reducing waste, and supporting policies promoting renewable energy contribute to a more sustainable and resilient future. 
                            <br>Making informed choices empowers communities to address climate challenges and build a cleaner, healthier planet.
                            We can contribute to positive change by paying closer attention to the environmental impact of our food consumption, shopping behaviors, transportation choices, plastic and fossil fuel usage, and the companies we decide to either endorse or avoid. By prioritizing sustainability in our daily decisions, we pave the way for a greener and more equitable world for generations to come.</p>
                    </div>
                </div>
                <button class="prev" onclick="prevSolution()">❮</button>
                <button class="next" onclick="nextSolution()">❯</button>
            </div>
        </div>
    </section>
    
   <section id="get-involved" class="get-involved">
        <div class="container">
            <h2 class="section-title">Get Involved</h2>
            <p class="section-description">Join us in our efforts to combat climate change. There are many ways you can contribute and make a difference.</p>
            <div class="opportunities">
                <div class="opportunity">
                    <h3 class="opportunity-title">Volunteer</h3>
                    <p class="opportunity-description">Help organize events, spread awareness, and engage with your community.</p>
                </div>
                <div class="opportunity">
                    <h3 class="opportunity-title">Donate</h3>
                    <p class="opportunity-description">Support our initiatives financially to fund projects and campaigns.</p>
                </div>
                <div class="opportunity">
                    <h3 class="opportunity-title">Take Action</h3>
                    <p class="opportunity-description">Sign petitions, participate in advocacy efforts, and push for policy changes.</p>
                </div>
            </div>
        </div>
    </section>
</main>

<script>
    document.addEventListener('keydown', function(event) {
        console.log('Key pressed at: ' + new Date().toLocaleTimeString());
    });

    document.addEventListener('click', function(event) {
        console.log('Clicked at: ' + new Date().toLocaleTimeString());
    });

    let currentSolution = 0;
    const totalSolutions = document.querySelectorAll('.solution').length;

    function showSolution(n) {
        const solutions = document.querySelectorAll('.solution');
        currentSolution = (n + totalSolutions) % totalSolutions;
        solutions.forEach((solution, index) => {
            if (index === currentSolution) {
                solution.style.display = "block";
            } else {
                solution.style.display = "none";
            }
        });
    }

    function prevSolution() {
        showSolution(currentSolution - 1);
    }

    function nextSolution() {
        showSolution(currentSolution + 1);
    }

    // Show the initial solution
    showSolution(currentSolution);
    window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    var navbar = document.getElementById("navbar");
    if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
        navbar.classList.add("fixed");
    } else {
        navbar.classList.remove("fixed");
    }
}
</script>

</body>
</html>
