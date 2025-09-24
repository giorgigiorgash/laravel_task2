<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Great Places to Explore</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet">
  <style>
  body {
    background-color: #1c1c1c;
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
    color: #fff;
  }

  .hero-section {
    text-align: center;
    padding: 60px 20px 40px 20px;
    color: white;
  }

  .hero-title {
    font-size: 42px;
    font-weight: 700;
    margin-bottom: 16px;
  }

  .hero-subtitle {
    font-size: 15px;
    color: #9ca3af;
    max-width: 600px;
    margin: 0 auto;
    line-height: 1.5;
  }

  .place-card {
    background: #2a2a2a;
    border-radius: 12px;
    overflow: hidden;
    display: flex;
    flex-direction: column;
    transition: transform 0.2s ease;
    color: #fff;
    height: 100%; /* Make card fill column height */
  }

  .place-card:hover {
    transform: translateY(-3px);
  }

  /* Dynamic image with aspect ratio */
  .card-image {
    width: 100%;
    aspect-ratio: 16/9; /* Maintain 16:9 ratio */
    background-size: cover;
    background-position: center;
    position: relative;
  }

  .category-badge {
    position: absolute;
    top: 12px;
    left: 12px;
    background: rgba(0, 0, 0, 0.6);
    color: #fff;
    padding: 5px 12px;
    border-radius: 20px;
    font-size: 13px;
    display: flex;
    align-items: center;
    gap: 6px;
    font-weight: 500;
  }

  .status-badge {
    position: absolute;
    top: 12px;
    right: 12px;
    padding: 5px 14px;
    border-radius: 20px;
    font-size: 13px;
    font-weight: 600;
  }

  .status-open { background: #16a34a; color: white; }
  .status-closed { background: #dc2626; color: white; }

  .recommended-badge {
    position: absolute;
    bottom: 12px;
    left: 12px;
    background: #d63384;
    color: white;
    padding: 5px 10px;
    border-radius: 20px;
    font-size: 12px;
    font-weight: 600;
  }

  .card-content {
    flex: 1;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    padding: 16px;
  }

  .card-info { flex-grow: 1; }

  .card-title {
    font-size: 17px;
    font-weight: 700;
    margin-bottom: 12px;
    line-height: 1.3;
  }

  .info-item {
    display: flex;
    align-items: center;
    gap: 8px;
    margin-bottom: 6px;
    font-size: 13px;
    color: #9ca3af;
  }

  .price-info {
    margin: 10px 0;
    font-size: 14px;
  }

  .price-text { color: #9ca3af; }
  .price-amount { color: #22c55e; font-weight: 600; }

  .card-footer {
    border-top: 1px solid #3a3a3a;
    margin-top: 12px;
    padding-top: 10px;
    display: flex;
    justify-content: space-between;
    align-items: center;
  }

  .view-detail {
    color: #a78bfa;
    text-decoration: none;
    font-size: 14px;
    font-weight: 500;
  }

  .view-detail:hover { text-decoration: underline; }

  .heart-btn {
    background: none;
    border: none;
    font-size: 18px;
    cursor: pointer;
    color: #e5e7eb;
  }

  .heart-btn.liked { color: #e11d48; }

  .category-badge .fas,
  .info-item .fas { color: #f7c32e !important; }

  /* Card container styles */
  .card-container {
    width: 100%;
    max-width: 1200px;
    margin: 0 auto;
    padding-left: 1rem;
    padding-right: 1rem;
  }

  /* Responsive adjustments */
  @media (max-width: 1200px) {
    .card-container {
      max-width: none;
      padding-left: 2rem;
      padding-right: 2rem;
    }
    .hero-title { font-size: 36px; }
  }

  @media (max-width: 768px) {
    .hero-title { font-size: 28px; }
  }

  @media (max-width: 576px) {
    .hero-title { font-size: 24px; }
  }
</style>

</head>
<body>
  <!-- Hero -->
  <div class="hero-section">
    <h1 class="hero-title">Great Places to Explore</h1>
    <p class="hero-subtitle">
      Book your hotel with us and don't forget to grab an awesome hotel deal to save massive on your stay.
    </p>
  </div>

  <!-- Cards -->
  <div class="card-container pb-5">
    <div class="row g-4">

      <!-- Card 1 -->
      <div class="col-xl-3 col-lg-4 col-sm-6">
        <div class="place-card">
          <div class="card-image" style="background-image: url('https://picsum.photos/id/1011/600/400');">
            <span class="category-badge"><i class="fas fa-landmark"></i> Museum</span>
            <span class="status-badge status-open">Open</span>
          </div>
          <div class="card-content">
            <div class="card-info">
              <h5 class="card-title">Portland New Art Museum</h5>
              <div class="info-item"><i class="fas fa-map-marker-alt"></i> W Century Blvd, Los Angeles</div>
              <div class="info-item"><i class="fas fa-phone"></i> (+125) 548 996</div>
            </div>
            <div class="card-footer">
              <a href="#" class="view-detail">View detail →</a>
              <button class="heart-btn"><i class="far fa-heart"></i></button>
            </div>
          </div>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="col-xl-3 col-lg-4 col-sm-6">
        <div class="place-card">
          <div class="card-image" style="background-image: url('https://picsum.photos/id/1012/600/400');">
            <span class="category-badge"><i class="fas fa-shopping-bag"></i> Shopping</span>
            <span class="status-badge status-open">Open</span>
            <span class="recommended-badge">Recommended</span>
          </div>
          <div class="card-content">
            <div class="card-info">
              <h5 class="card-title">JP Shopping Mall in California</h5>
              <div class="price-info">Starts at <span class="price-amount">$449</span> for 1 person</div>
            </div>
            <div class="card-footer">
              <a href="#" class="view-detail">View detail →</a>
              <button class="heart-btn"><i class="far fa-heart"></i></button>
            </div>
          </div>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="col-xl-3 col-lg-4 col-sm-6">
        <div class="place-card">
          <div class="card-image" style="background-image: url('https://picsum.photos/id/1015/600/400');">
            <span class="category-badge"><i class="fas fa-utensils"></i> Restaurant</span>
            <span class="status-badge status-closed">Closed</span>
          </div>
          <div class="card-content">
            <div class="card-info">
              <h5 class="card-title">Sunset Dine Restaurant</h5>
              <div class="info-item"><i class="fas fa-map-marker-alt"></i> 123 Sunset Blvd, Los Angeles</div>
              <div class="info-item"><i class="fas fa-phone"></i> (+123) 456 789</div>
              <div class="price-info">Average Price: <span class="price-amount">$35</span> per person</div>
            </div>
            <div class="card-footer">
              <a href="#" class="view-detail">View detail →</a>
              <button class="heart-btn"><i class="far fa-heart"></i></button>
            </div>
          </div>
        </div>
      </div>

      <!-- Card 4 -->
      <div class="col-xl-3 col-lg-4 col-sm-6">
        <div class="place-card">
          <div class="card-image" style="background-image: url('https://picsum.photos/id/1021/600/400');">
            <span class="category-badge"><i class="fas fa-tree"></i> Park</span>
            <span class="status-badge status-open">Open</span>
          </div>
          <div class="card-content">
            <div class="card-info">
              <h5 class="card-title">Golden Gate Park</h5>
              <div class="info-item"><i class="fas fa-map-marker-alt"></i> San Francisco, CA</div>
            </div>
            <div class="card-footer">
              <a href="#" class="view-detail">View detail →</a>
              <button class="heart-btn"><i class="far fa-heart"></i></button>
            </div>
          </div>
        </div>
      </div>

      <!-- Card 5 -->
      <div class="col-xl-3 col-lg-4 col-sm-6">
        <div class="place-card">
          <div class="card-image" style="background-image: url('https://picsum.photos/id/1035/600/400');">
            <span class="category-badge"><i class="fas fa-landmark"></i> Monument</span>
            <span class="status-badge status-open">Open</span>
            <span class="recommended-badge">Recommended</span>
          </div>
          <div class="card-content">
            <div class="card-info">
              <h5 class="card-title">Statue of Liberty</h5>
              <div class="info-item"><i class="fas fa-map-marker-alt"></i> Liberty Island, NY</div>
            </div>
            <div class="card-footer">
              <a href="#" class="view-detail">View detail →</a>
              <button class="heart-btn"><i class="far fa-heart"></i></button>
            </div>
          </div>
        </div>
      </div>

      <!-- Card 6 -->
      <div class="col-xl-3 col-lg-4 col-sm-6">
        <div class="place-card">
          <div class="card-image" style="background-image: url('https://picsum.photos/id/1040/600/400');">
            <span class="category-badge"><i class="fas fa-umbrella-beach"></i> Beach</span>
            <span class="status-badge status-open">Open</span>
          </div>
          <div class="card-content">
            <div class="card-info">
              <h5 class="card-title">Santa Monica Beach</h5>
              <div class="info-item"><i class="fas fa-map-marker-alt"></i> California, USA</div>
            </div>
            <div class="card-footer">
              <a href="#" class="view-detail">View detail →</a>
              <button class="heart-btn"><i class="far fa-heart"></i></button>
            </div>
          </div>
        </div>
      </div>

      <!-- Card 7 -->
      <div class="col-xl-3 col-lg-4 col-sm-6">
        <div class="place-card">
          <div class="card-image" style="background-image: url('https://picsum.photos/id/1050/600/400');">
            <span class="category-badge"><i class="fas fa-landmark"></i> Castle</span>
            <span class="status-badge status-closed">Closed</span>
          </div>
          <div class="card-content">
            <div class="card-info">
              <h5 class="card-title">Neuschwanstein Castle</h5>
              <div class="info-item"><i class="fas fa-map-marker-alt"></i> Bavaria, Germany</div>
            </div>
            <div class="card-footer">
              <a href="#" class="view-detail">View detail →</a>
              <button class="heart-btn"><i class="far fa-heart"></i></button>
            </div>
          </div>
        </div>
      </div>

      <!-- Card 8 -->
      <div class="col-xl-3 col-lg-4 col-sm-6">
        <div class="place-card">
          <div class="card-image" style="background-image: url('https://picsum.photos/id/1060/600/400');">
            <span class="category-badge"><i class="fas fa-mountain"></i> Mountain</span>
            <span class="status-badge status-open">Open</span>
            <span class="recommended-badge">Recommended</span>
          </div>
          <div class="card-content">
            <div class="card-info">
              <h5 class="card-title">Rocky Mountains</h5>
              <div class="info-item"><i class="fas fa-map-marker-alt"></i> Colorado, USA</div>
            </div>
            <div class="card-footer">
              <a href="#" class="view-detail">View detail →</a>
              <button class="heart-btn"><i class="far fa-heart"></i></button>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
