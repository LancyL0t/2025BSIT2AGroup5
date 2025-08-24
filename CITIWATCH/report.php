<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/report.css">
    <link rel="stylesheet" href="assets/general.css">
    <link rel="stylesheet" href="assets/navfoot.css">
    <script src="assets/script.js"></script>
    <title>CitiWatch Community Map</title>
  </head>
  <body>
    <?php require 'view/nav.php'; ?>
<main>
<!-- Report Form -->
<div class="formcontainer">
  <div class="form-card">
    <div class="form-header">
      <h2>Report an Issue</h2>
      <p class="subtitle">Help keep your community safe</p>
    </div>

    <form id="reportForm" method="POST" enctype="multipart/form-data">

        <!-- Issue Title -->
        <label>Issue Title</label>
        <input type="text" name="issue_title" placeholder="Brief description of the issue" required>

        <!-- Category & Urgency -->
        <div class="row">
          <div class="col">
            <label>Category</label>
            <select name="category" required>
              <option>⚡ Electrical</option>
              <option>🚦 Road/Traffic</option>
              <option>🗑 Sanitation</option>
              <option>🏗 Structural</option>
              <option>🌊 Flooding</option>
              <option>📌 Other</option>
            </select>
          </div>
          <div class="col">
            <label>Urgency Level</label>
            <select name="urgency" required>
              <option>🟢 Low - Minor inconvenience</option>
              <option selected>🔵 Medium - Needs attention</option>
              <option>🟠 High - Safety concern</option>
              <option>🔴 EMERGENCY - Immediate danger</option>
            </select>
          </div>
        </div>

        <!-- Barangay -->
        <label>Barangay</label>
        <select name="barangay" required>
         <option selected>All Barangays</option>
              <option>Alangilan</option>
              <option>Alijis</option>
              <option>Banago</option>
              <option>Barangay 1</option>
              <option>Barangay 2</option>
              <option>Barangay 3</option>
              <option>Barangay 4</option>
              <option>Barangay 5</option>
              <option>Barangay 6</option>
              <option>Barangay 7</option>
              <option>Barangay 8</option>
              <option>Barangay 9</option>
              <option>Barangay 10</option>
              <option>Barangay 11</option>
              <option>Barangay 12</option>
              <option>Barangay 13</option>
              <option>Barangay 14</option>
              <option>Barangay 15</option>
              <option>Barangay 16</option>
              <option>Barangay 17</option>
              <option>Barangay 18</option>
              <option>Barangay 19</option>
              <option>Barangay 20</option>
              <option>Barangay 21</option>
              <option>Barangay 22</option>
              <option>Barangay 23</option>
              <option>Barangay 24</option>
              <option>Barangay 25</option>
              <option>Barangay 26</option>
              <option>Barangay 27</option>
              <option>Barangay 28</option>
              <option>Barangay 29</option>
              <option>Barangay 30</option>
              <option>Barangay 31</option>
              <option>Barangay 32</option>
              <option>Barangay 33</option>
              <option>Barangay 34</option>
              <option>Barangay 35</option>
              <option>Barangay 36</option>
              <option>Barangay 37</option>
              <option>Barangay 38</option>
              <option>Barangay 39</option>
              <option>Barangay 40</option>
        </select>

        <!-- Detailed Description -->
        <label>Detailed Description</label>
        <textarea name="description" placeholder="Provide detailed information about the issue, including any immediate dangers..." required></textarea>

<!-- File Upload -->
<label>Photo Evidence</label>
<div class="file-upload highlight-section">
  <label for="fileInput" class="file-btn">📷 Upload Photo</label>
  <input type="file" name="photo" id="fileInput">
  <span class="file-name">No file chosen</span>
</div>


        <!-- Location -->
        <label>Location</label>
        <button type="button" id="getLocation" class="btn blue">Get Current Location</button>
        <div class="form_map">
              <iframe
              src="https://www.openstreetmap.org/export/embed.html?bbox=122.93%2C10.64%2C122.99%2C10.71&layer=mapnik"
              style="width:100%; height:100%; border:2px solid #000; border-radius:10px;"
              allowfullscreen>
            </iframe>
        </div>

        <!-- Emergency Warning -->
        <p class="warning">⚠ Emergency? If this is an immediate life-threatening situation, also call emergency services (911) directly.</p>

        <!-- Submit -->
        <button type="submit" class="btn submit">Submit Report</button>
      </form>
    </div>
</div>
</main>
    <?php require 'view/footer.php'; ?>
  </body>
</html>
