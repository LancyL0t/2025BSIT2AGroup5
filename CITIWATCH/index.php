<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <link rel="stylesheet" href="assets/style.css" />
     <script src="assets/script.js"></script>

</head>
<body>
    <?php require 'view/nav.php'; ?>

    <main>
        <div class = "hero">
            <h1> CitiWatch: Community Alert & Action Hub</h1>
            <p>Empowering citizens to report safety hazards and infrastructure issues for faster response and safer communities</p>
            <div class="but">
                <button class="report">Report Issue</button>
                <button class="view">View Reported Issues</button>
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
          <a href="issues.php" class="details">View Details →</a>
        </div>
      </div>

      <div class="card">
        <img src="image/street_light1.jpg" alt="Broken Street Light">
        <div class="card-body">
          <span class="status progress">In Progress</span>
          <h3>Broken Street Light</h3>
          <p>Corner of Main St. and 5th Ave.</p>
          <p class="meta">2 days ago • 5 upvotes</p>
          <a href="issues.php" class="details">View Details →</a>
        </div>
      </div>

      <div class="card">
        <img src="image/street_light.jpg" alt="Broken Street Light">
        <div class="card-body">
          <span class="status resolved">Resolved</span>
          <h3>Broken Street Light</h3>
          <p>Corner of Main St. and 5th Ave.</p>
          <p class="meta">2 days ago • 5 upvotes</p>
          <a href="issues.php" class="details">View Details →</a>
        </div>
      </div>
    </div>
    <div class="center">
      <a href="issues.php" class="all">View All Reports</a>
    </div>


    
  </section>
    </main>

     <?php require 'view/footer.php'; ?>







</body>
</html>