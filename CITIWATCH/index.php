<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <link rel="stylesheet" href="assets/general.css" />
     <link rel="stylesheet" href="assets/navfoot.css">
     <link rel="stylesheet" href="assets/index.css">
     <script src="assets/script.js"></script>

</head>
<body>
    <?php require 'view/nav.php'; ?>

    <main>
        <div class = "hero">
            <h1><span class="highlight">CitiWatch:</span> Community Alert & Action Hub</h1>
            <p>Report hazards, track government responses, and help build safer cities together.</p>
            <p>Your voice matters in creating resilient communities.</p>
            <div class="but">
               <a href="report.php"> <button class="report">Report an Issue</button></a>
                <a href="view.php"><button class="view">View Reported Issues</button></a>
            </div>

        </div>
  <section class="recent-reports">
    <h2>Recent Reports</h2>
    <div class="report-cards">
      <div class="card">
        <img src="image/street_light2.jpg" alt="Broken Street Light">
        <div class="card-body">
          <span class="status emergency">Emergency</span>
          <h3>Broken Street Light</h3>
          <p>Corner of Main St. and 5th Ave.</p>
          <p class="meta">2 days ago • 5 upvotes</p>
          <a href="view.php" class="viewdetails">View Details →</a>
        </div>
      </div>

      <div class="card">
        <img src="image/street_light1.jpg" alt="Broken Street Light">
        <div class="card-body">
          <span class="status progress">In Progress</span>
          <h3>Broken Street Light</h3>
          <p>Corner of Main St. and 5th Ave.</p>
          <p class="meta">2 days ago • 5 upvotes</p>
          <a href="view.php" class="viewdetails">View Details →</a>
        </div>
      </div>

      <div class="card">
        <img src="image/street_light.jpg" alt="Broken Street Light">
        <div class="card-body">
          <span class="status resolved">Resolved</span>
          <h3>Broken Street Light</h3>
          <p>Corner of Main St. and 5th Ave.</p>
          <p class="meta">2 days ago • 5 upvotes</p>
          <a href="view.php" class="viewdetails">View Details →</a>
        </div>
      </div>
    </div>
    <div class="center">
      <a href="view.php" class="all">View All Reports</a>
    </div>


    
  </section>
    </main>

     <?php require 'view/footer.php'; ?>


</body>
</html>
