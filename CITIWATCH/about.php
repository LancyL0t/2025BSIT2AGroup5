<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="assets/general.css" />
     <link rel="stylesheet" href="assets/navfoot.css">
     <link rel="stylesheet" href="assets/about.css">
    <script src="assets/script.js"></script>
    <title>Document</title>
</head>
<body>
<?php include 'view/nav.php'; ?>

<main>
    <section class="about-hero">
        <h1>About CitiWatch</h1>
        <p>Empowering communities through citizen reporting and transparent issue resolution.</p>
    </section>

   
    <section class="mission-vision">
        <div class="mv-box">
            <h2>Our Mission</h2>
            <p>CitiWatch aims to bridge the gap between citizens and local authorities by providing a transparent, efficient platform for 
              reporting and resolving community issues. We believe that by empowering citizens to actively participate in community 
              improvement, we can create safer, more responsive and more connected neighborhoods. 
            <br> <br>
              Our mission is to transform the traditional reporting process into a 
              collaborative, technology-driven approach that ensures accountability, speeds up resolution times, and builds trust 
              between community members and public service providers.</p>
        </div>
        <div class="mv-box">
            <h2>Our Vision</h2>
            <p>We envision communities where every citizen feels empowered to contribute to public safety and infrastructure maintenance. 
              Where reporting an issue is simple, transparent, and effective. Where authorities can quickly identify prioritize, and address 
              community concerns. 
          <br> <br>
            CitiWatch strives to be the standard for community-driven issue reporting and resolution, creating a model that can be 
            implemented in cities and towns across the country to improve quality of life for all citizens.</p>
        </div>
    </section>

   
    <section class="our-story">
        <div class="story-box">
            <h2>Our Story</h2>
            <p>CitiWatch was founded in 2025 by a group of Students who were frustrated by the inefficient and often 
            opaque process of reporting community issues. After experiencing firsthand the challenges of getting a dangerous 
            pothole fixed on a busy street, our founders decided there had to be a better way. 
            <br><br>
            What started as a simple idea quickly gained support from both community members and forward-thinking local 
            officials who recognized the potential of a citizen-driven reporting system. With input from urban planners, public 
            safety experts,and community organizers, CitiWatch evolved into the comprehensive platform it is today. 
            <br><br>
            Since our launch, we've helped resolve over 5,000 community issues across multiple cities, reduced average resolution 
            times by 65%, and built a network of engaged citizens who are actively improving their neighborhoods every day.</p>
        </div>
    </section>

  
    <section class="partners">
        <h2>Our Partners</h2><br>
        <p>CitiWatch collaborates with government agencies, local organizations, and businesses committed to<br> 
          improving community safety and infrastructure.<br> Our partnerships enable faster response times and more 
        effective solutions to reported issues.</p>
        <br>

        <div class="partner-grid">
            <div class="partner-card">
                <img src="image/PDRRMO.jpg" alt="PDRRMO Logo">
                <h3>Provincial Disaster Risk Reduction and Management Office</h3>
                <br>
                <p>Coordinates emergency responses and 
                  disaster risk management efforts based 
                  on reports submitted by the public.</p>
            </div>
            <div class="partner-card">
                <img src="image/FireProtect.jpg" alt="BFP Logo">
                <h3>Bureau of Fire Protection</h3>
                <br><br><br>
                <p>Responsible for ensuring fire safety 
                conducting inspections, and responding to 
                fire-related incidents reported 
                through CitiWatch.</p>
            </div>
            <div class="partner-card">
                <img src="image/PNP-Logo.png" alt="PNP Logo">
                <h3>Philippine National Police</h3>
                <br><br><br>
                <p>Collaborates on safety and security concerns 
                reported through the platform.</p>
            </div>
        </div>
        
        <br><h3 class="become" >Become a Partner</h3><br>
            <p>Interested in partnering with CitiWatch to improve your community? we're always looking for<br>
              organizations that share our vision for safer, more responsive neighborhoods
            </p><br>
          <button class="contact-partner">Contact Us About Partnership</button>
    </section>

   
    <section class="team">
        <h2>Our Team</h2>
        <br>
        <div class="team-grid">
            <div class="team-card">
                <img src="image/Rob1.jpg" alt="Rob Bebanco">
                <h3>Rob Bebanco</h3>
                <br>
            <div class="team-position">
                <p>Founder & CEO</p>
            </div>
                <br>
                <div class="position-def">
                  <p>Urban planner with 15 years of experience in 
                  community development and public 
                  infrastructure projects.</p>
                </div>
            </div>
            <div class="team-card">
                <img src="image/Cesar1.jpg" alt="Christian Davin">
                <h3>Christian Duran</h3>
                <br>
            <div class="team-position">
                <p>Chief Technology Officer</p>
            </div>
                <br>
                <div class="position-def">
                  <p>Software engineer specializing in civic tech 
                  solutions with a background in government 
                  digital transformation.</p>
                </div>
            </div>
            <div class="team-card">
                <img src="image/Lance1.jpg" alt="Lance Jimenez">
                <h3>Lance Jamon</h3>
                <br>
            <div class="team-position">
                <p>Community Relations Director</p>
            </div>
                <br>
                <div class="position-def">
                 <p>Former public safety officer with extensive 
                  experience in community engagement and 
                  local government coordination.</p>
                </div>
            </div>
        </div>
    </section>

    
    <section class="contact-cta">
        <h2>Get in Touch</h2>
        <p>Have questions about CitiWatch or feedback on how we can help your community?</p>
        <br>
        <div class="contact-footbut">
                <button class="emailBut">Email Us</button>
                <a href="report.php">
  <button class="reportBut">Report an Issue</button>
</a>
        </div>

    </section>
</main>

<?php include 'view/footer.php'; ?>

</body>
</html>
