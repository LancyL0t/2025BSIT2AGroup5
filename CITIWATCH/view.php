<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">     
    <link rel="stylesheet" href="assets/general.css">
    <link rel="stylesheet" href="assets/view.css">
    <link rel="stylesheet" href="assets/navfoot.css">
    <script src="assets/script.js"></script>
    <title>CitiWatch Community Map</title>
  </head>
  <body>
    <?php require 'view/nav.php'; ?>
    <main>
      <div class="viewpage">
        <div class="just-text">
          <h1>CitiWatch Community Map</h1>
          <p>Interactive map showing reported issues across the community</p>
        </div>

        <!-- FILTERS -->
        <div class="filter-container">
          <h2>Filter Reports</h2>
          <div class="gridfilter">
            <div class="griditem">
              <label>Category</label>
              <select class="filtercontent">
                <option>All Categories</option>
                <option>Electrical</option>
                <option>Road/Traffic</option>
                <option>Sanitation</option>
                <option>Structural</option>
                <option>Flooding</option>
                <option>Other</option>
              </select>
            </div>

            <div class="griditem">
              <label>Urgency</label>
              <select class="filtercontent">
                <option>All Urgency Levels</option>
                <option>Emergency</option>
                <option>High</option>
                <option>Medium</option>
                <option>Low</option>
              </select>
            </div>

            <div class="griditem">
              <label>Status</label>
              <select class="filtercontent">
                <option>All Statuses</option>
                <option>Reported</option>
                <option>In Progress</option>
                <option>Resolved</option>
              </select>
            </div>

            <div class="griditem">
              <label>Barangay</label>
              <select class="filtercontent">
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
                <option>Barangay 41</option>
                <option>Bata</option>
                <option>Cabug</option>
                <option>Estefania</option>
                <option>Felisa</option>
                <option>Granada</option>
                <option>Handumanan</option>
                <option>Mandalagan</option>
                <option>Mansilingan</option>
                <option>Montevista</option>
                <option>Pahanocoy</option>
                <option>Punta Taytay</option>
                <option>Singcang-Airport</option>
                <option>Sum-ag</option>
                <option>Taculing</option>
                <option>Tangub</option>
                <option>Villamonte</option>
                <option>Vista Alegre</option>
              </select>
            </div>
          </div>
        </div>
<!-- FLOATING BUTTON (Mobile only) -->
    <button class="filter-fab">⚙</button>

    <!-- FILTER MODAL (Mobile only) -->
    <div class="filter-modal">
      <div class="filter-modal-content">
        <span class="close">&times;</span>
        <h2>Filter Reports</h2>
        <div class="gridfilter">
          <div class="griditem">
            <label>Category</label>
            <select class="filtercontent">
              <option>All Categories</option>
              <option>Electrical</option>
              <option>Road/Traffic</option>
              <option>Sanitation</option>
              <option>Structural</option>
              <option>Flooding</option>
              <option>Other</option>
            </select>
          </div>

          <div class="griditem">
            <label>Urgency</label>
            <select class="filtercontent">
              <option>All Urgency Levels</option>
              <option>Emergency</option>
              <option>High</option>
              <option>Medium</option>
              <option>Low</option>
            </select>
          </div>

          <div class="griditem">
            <label>Status</label>
            <select class="filtercontent">
              <option>All Statuses</option>
              <option>Reported</option>
              <option>In Progress</option>
              <option>Resolved</option>
            </select>
          </div>

          <div class="griditem">
            <label>Barangay</label>
            <select class="filtercontent">
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
          </div>
        </div>
      </div>
    </div>
        <!-- MAP + REPORTS -->
        <div class="reportsANDmap">
          <div class="map-reports">
            <iframe
              src="https://www.openstreetmap.org/export/embed.html?bbox=122.93%2C10.64%2C122.99%2C10.71&layer=mapnik"
              allowfullscreen>
            </iframe>
          </div>

          <!-- REPORT LIST -->
          <div class="report-list">
            <span>REPORTS (4)</span>
            <div class="scrollcontent">

              <!-- Report 1 -->
              <div class="list-content">
                <div class="list-header">
                  <h3>Broken Street Light</h3>
                  <div class="top-icons">
                    <span class="status-circle reported"></span>
                  </div>
                </div>
                <p>⚲ Manila Street, Barangay 1</p>
                <p>⏱︎ 10:30 am</p>
                <div class="list-status">
                  <span class="reported">REPORTED</span>
                  <div class="reaction">
                    <img src="image/thumbs.png" alt="thumbs_up">
                    <span>5</span>
                  </div>
                </div>
              </div>

              <!-- Report 2 -->
              <div class="list-content">
                <div class="list-header">
                  <h3>Flooded Area</h3>
                  <div class="top-icons">
                    <span class="status-circle in_progress"></span>
                  </div>
                </div>
                <p>⚲ Lopez Jaena St., Barangay 3</p>
                <p>⏱︎ 6:00 pm</p>
                <div class="list-status">
                  <span class="in_progress">IN PROGRESS</span>
                  <div class="reaction">
                    <img src="image/thumbs.png" alt="thumbs_up">                    
                    <span>12</span>
                  </div>
                </div>
              </div>

              <!-- Report 3 -->
              <div class="list-content">
                <div class="list-header">
                  <h3>Garbage Not Collected</h3>
                  <div class="top-icons">
                    <span class="status-circle resolved"></span>
                  </div>
                </div>
                <p>⚲ Burgos Avenue, Barangay 5</p>
                <p>⏱︎ 12:00 pm</p>
                <div class="list-status">
                  <span class="resolved">RESOLVED</span>
                  <div class="reaction">
                  <img src="image/thumbs.png" alt="thumbs_up">
                  <span>8</span>
                  </div>
                </div>
              </div>

              <!-- Report 4 -->
              <div class="list-content">
                <div class="list-header">
                  <h3>Exposed Electric Wires</h3>
                  <div class="top-icons">
                    <span class="status-circle emergency"></span>
                  </div>
                </div>
                <p>⚲ Rizal Avenue, Barangay 2</p>
                <p>⏱︎ 1:00 pm</p>
                <div class="list-status">
                  <span class="emergency">EMERGENCY</span>
                  <div class="reaction">
                     <img src="image/thumbs.png" alt="thumbs_up">
                    <span>15</span>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </main>
    <?php require 'view/footer.php'; ?>
  </body>
</html>
