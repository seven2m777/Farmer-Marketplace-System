<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FarmLink ® — Cold Chain & Agricultural Marketplace</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Instrument+Sans:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="assets/css/style.css?v=<?= time() ?>">
</head>
<body>

  <!-- Header Navigation -->
  <header class="site-header" id="siteHeader">
    <div class="container nav-container">
      
      <!-- Logo -->
      <a href="index.php" class="brand-logo" aria-label="FarmLink Homepage">
        <div class="brand-icon">
          <!-- Logo Icon -->
          <svg width="28" height="28" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M16 3V29M16 7C12 9 8 13 8 18C12 18 15 15 16 11M16 13C20 15 24 19 24 24C20 24 17 21 16 17M16 17C12 19 8 23 8 28C12 28 15 25 16 21" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
        </div>
        <div class="brand-name">
          FarmLink <span class="reg">®</span>
        </div>
      </a>

      <!-- Nav Links -->
      <nav class="nav-menu" aria-label="Primary Navigation">
        <a href="#home" class="nav-link active">Home</a>
        <a href="#about" class="nav-link">About Us</a>
        <a href="#roles" class="nav-link has-dropdown">
          The 4 Roles
          <svg width="10" height="6" viewBox="0 0 10 6" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
            <path d="M1 1L5 5L9 1"/>
          </svg>
        </a>
        <a href="#workflow" class="nav-link">Cold Chain</a>
        <a href="#chambers" class="nav-link">Solutions</a>
        <a href="#contact" class="nav-link">Contact</a>
      </nav>

      <!-- Portal Button -->
      <div class="nav-actions">
        <a href="login.php" class="btn-glass" id="portalBtn">
          <svg class="leaf-icon" width="16" height="16" viewBox="0 0 24 24">
            <path d="M17 8C8 10 5.9 16.17 3.82 21.34L5.71 22L6.66 19.7C12 19.7 20.2 16.9 21.6 8.5C21.7 8 21.4 7.6 20.9 7.7C18.6 8.2 16.6 8.9 14.8 9.8C16.8 6.4 19.3 4 20.3 3.1C20.6 2.8 20.5 2.3 20.1 2.2C15.8 1.4 10.3 4.3 7.8 7.4C7.5 7.8 7.8 8.4 8.3 8.3C10.8 7.7 13.9 7.4 17 8Z"/>
          </svg>
          <span>Access Portal</span>
        </a>
      </div>

      <!-- Mobile Menu Toggle -->
      <button class="mobile-menu-toggle" id="mobileToggle" aria-label="Toggle navigation menu">
        <i class="fa-solid fa-bars"></i>
      </button>

    </div>
  </header>

  <!-- Hero Section -->
  <section class="hero-section" id="home">
    
    <!-- Video Background -->
    <div class="hero-video-wrapper">
      <video autoplay muted loop playsinline class="hero-video-bg">
        <source src="https://videos.pexels.com/video-files/4237250/4237250-hd_1920_1080_30fps.mp4" type="video/mp4">
        <source src="https://videos.pexels.com/video-files/4237250/4237250-uhd_2560_1440_30fps.mp4" type="video/mp4">
      </video>
      <div class="hero-overlay"></div>
    </div>

    <!-- Hero Content -->
    <div class="hero-inner">
      <div class="container">
        <div class="hero-split-grid">
          
          <!-- Hero Left Column -->
          <div class="hero-left-content">
            <div class="hero-tag-group">
              <span class="tag-badge-pill">
                <svg width="12" height="12" viewBox="0 0 24 24"><path d="M17 8C8 10 5.9 16.17 3.82 21.34L5.71 22L6.66 19.7C12 19.7 20.2 16.9 21.6 8.5C21.7 8 21.4 7.6 20.9 7.7C18.6 8.2 16.6 8.9 14.8 9.8C16.8 6.4 19.3 4 20.3 3.1C20.6 2.8 20.5 2.3 20.1 2.2C15.8 1.4 10.3 4.3 7.8 7.4C7.5 7.8 7.8 8.4 8.3 8.3C10.8 7.7 13.9 7.4 17 8Z"/></svg>
                Direct Sourcing
              </span>
              <span class="tag-badge-pill">
                <svg width="12" height="12" viewBox="0 0 24 24"><path d="M17 8C8 10 5.9 16.17 3.82 21.34L5.71 22L6.66 19.7C12 19.7 20.2 16.9 21.6 8.5C21.7 8 21.4 7.6 20.9 7.7C18.6 8.2 16.6 8.9 14.8 9.8C16.8 6.4 19.3 4 20.3 3.1C20.6 2.8 20.5 2.3 20.1 2.2C15.8 1.4 10.3 4.3 7.8 7.4C7.5 7.8 7.8 8.4 8.3 8.3C10.8 7.7 13.9 7.4 17 8Z"/></svg>
                Smart Cold Chain
              </span>
              <span class="tag-badge-pill">
                <svg width="12" height="12" viewBox="0 0 24 24"><path d="M17 8C8 10 5.9 16.17 3.82 21.34L5.71 22L6.66 19.7C12 19.7 20.2 16.9 21.6 8.5C21.7 8 21.4 7.6 20.9 7.7C18.6 8.2 16.6 8.9 14.8 9.8C16.8 6.4 19.3 4 20.3 3.1C20.6 2.8 20.5 2.3 20.1 2.2C15.8 1.4 10.3 4.3 7.8 7.4C7.5 7.8 7.8 8.4 8.3 8.3C10.8 7.7 13.9 7.4 17 8Z"/></svg>
                Verified Supply
              </span>
            </div>

            <p class="hero-description">
              Through precision cold storage and transparent digital logistics, we bridge farmers, facility operators, and commercial vendors into one unified regional food chain.
            </p>

            <a href="#workflow" class="hero-arrow-link">
              <span>Start storing with us</span>
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M5 12h14M12 5l7 7-7 7"/>
              </svg>
            </a>
          </div>

          <!-- Hero Right Column -->
          <div class="hero-right-content">
            <h1 class="hero-title">
              Preserving<br>
              freshness at<br>
              regional scale.
            </h1>
            <a href="#workflow" class="hero-scroll-indicator">
              <span>Start storing with us</span>
              <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M12 5v14M19 12l-7 7-7-7"/>
              </svg>
            </a>
          </div>

        </div>
      </div>
    </div>

  </section>

  <!-- Highlights Marquee -->
  <section class="marquee-strip" aria-label="Capabilities Marquee">
    <div class="marquee-track">
      <div class="marquee-item">Smart Cold Storage <span class="marquee-bullet"></span></div>
      <div class="marquee-item">Farm-Gate Direct Intake <span class="marquee-bullet"></span></div>
      <div class="marquee-item">Multi-Chamber Climate Zones <span class="marquee-bullet"></span></div>
      <div class="marquee-item">Zero Distress Selling <span class="marquee-bullet"></span></div>
      <div class="marquee-item">Digital Warehouse Receipts <span class="marquee-bullet"></span></div>
      <div class="marquee-item">24/7 Humidity & Temperature Telemetry <span class="marquee-bullet"></span></div>
      <div class="marquee-item">Verified Commercial Vendors <span class="marquee-bullet"></span></div>
      <div class="marquee-item">Transparent Regional Pricing <span class="marquee-bullet"></span></div>
      <!-- Duplicate track for infinite loop -->
      <div class="marquee-item">Smart Cold Storage <span class="marquee-bullet"></span></div>
      <div class="marquee-item">Farm-Gate Direct Intake <span class="marquee-bullet"></span></div>
      <div class="marquee-item">Multi-Chamber Climate Zones <span class="marquee-bullet"></span></div>
      <div class="marquee-item">Zero Distress Selling <span class="marquee-bullet"></span></div>
      <div class="marquee-item">Digital Warehouse Receipts <span class="marquee-bullet"></span></div>
      <div class="marquee-item">24/7 Humidity & Temperature Telemetry <span class="marquee-bullet"></span></div>
      <div class="marquee-item">Verified Commercial Vendors <span class="marquee-bullet"></span></div>
      <div class="marquee-item">Transparent Regional Pricing <span class="marquee-bullet"></span></div>
    </div>
  </section>

  <!-- About Us Section -->
  <section class="page-section section-light-bg" id="about">
    <div class="container">
      
      <!-- About Grid -->
      <div class="about-grid">
        
        <!-- Left Column -->
        <div class="about-col-left">
          <div class="about-pill-label">
            <svg width="14" height="14" viewBox="0 0 24 24" class="leaf-icon">
              <path d="M17 8C8 10 5.9 16.17 3.82 21.34L5.71 22L6.66 19.7C12 19.7 20.2 16.9 21.6 8.5C21.7 8 21.4 7.6 20.9 7.7C18.6 8.2 16.6 8.9 14.8 9.8C16.8 6.4 19.3 4 20.3 3.1C20.6 2.8 20.5 2.3 20.1 2.2C15.8 1.4 10.3 4.3 7.8 7.4C7.5 7.8 7.8 8.4 8.3 8.3C10.8 7.7 13.9 7.4 17 8Z"/>
            </svg>
            <span>About us</span>
          </div>

          <h2 class="about-heading">
            Bridging the gap between farm harvests and climate-controlled preservation.
          </h2>

          <!-- Feature Tags -->
          <div class="about-tags-cloud">
            <span class="about-tag-item">Sustainable</span>
            <span class="about-tag-item">Decentralized</span>
            <span class="about-tag-item">Cold Chain</span>
            <span class="about-tag-item">Reliable</span>
            <span class="about-tag-item">Zero Waste</span>
            <span class="about-tag-item">Impactful</span>
            <span class="about-tag-item">Telemetry</span>
            <span class="about-tag-item">Fair Pricing</span>
            <span class="about-tag-item">Verified QC</span>
          </div>
        </div>

        <!-- Right Column: Mission Text + Dark Pine Pill CTA Button -->
        <div class="about-col-right">
          <p class="about-lead-text">
            Over 30% of perishable agricultural harvests are lost every season due to lack of immediate cold chain infrastructure and rushed distress sales. FarmLink connects smallholder farmers directly with certified cold storage bays and wholesale commercial buyers — preserving harvest freshness, eliminating post-harvest loss, and securing fair market value.
          </p>

          <a href="#roles" class="btn-about-more">
            <svg width="14" height="14" viewBox="0 0 24 24" class="leaf-icon">
              <path d="M17 8C8 10 5.9 16.17 3.82 21.34L5.71 22L6.66 19.7C12 19.7 20.2 16.9 21.6 8.5C21.7 8 21.4 7.6 20.9 7.7C18.6 8.2 16.6 8.9 14.8 9.8C16.8 6.4 19.3 4 20.3 3.1C20.6 2.8 20.5 2.3 20.1 2.2C15.8 1.4 10.3 4.3 7.8 7.4C7.5 7.8 7.8 8.4 8.3 8.3C10.8 7.7 13.9 7.4 17 8Z"/>
            </svg>
            <span>About the ecosystem</span>
          </a>
        </div>

      </div>

      <!-- 3 Key Metric Cards -->
      <div class="stats-grid">
        
        <div class="stat-box">
          <div class="stat-number">99.2%</div>
          <div class="stat-title">Harvest Freshness Retained</div>
          <p class="stat-desc">
            Continuous temperature and atmospheric humidity controls prevent post-harvest spoilage and weight shrinkage across all chamber bays.
          </p>
        </div>

        <div class="stat-box">
          <div class="stat-number">4,800+ MT</div>
          <div class="stat-title">Regional Cold Storage Capacity</div>
          <p class="stat-desc">
            Multi-commodity storage infrastructure configured for potatoes, apples, citrus, onions, and perishable green vegetables.
          </p>
        </div>

        <div class="stat-box">
          <div class="stat-number">2,400+</div>
          <div class="stat-title">Farmers & Vendors Connected</div>
          <p class="stat-desc">
            Empowering smallholders with direct market access and verified commercial buyers without predatory intermediary markups.
          </p>
        </div>

      </div>

    </div>
  </section>

  <!-- Platform User Roles -->
  <section class="page-section" id="roles">
    <div class="container">
      
      <div class="section-heading-wrap text-center">
        <div class="section-badge">
          <svg width="14" height="14" viewBox="0 0 24 24"><path d="M17 8C8 10 5.9 16.17 3.82 21.34L5.71 22L6.66 19.7C12 19.7 20.2 16.9 21.6 8.5C21.7 8 21.4 7.6 20.9 7.7C18.6 8.2 16.6 8.9 14.8 9.8C16.8 6.4 19.3 4 20.3 3.1C20.6 2.8 20.5 2.3 20.1 2.2C15.8 1.4 10.3 4.3 7.8 7.4C7.5 7.8 7.8 8.4 8.3 8.3C10.8 7.7 13.9 7.4 17 8Z"/></svg>
          Platform Architecture
        </div>
        <h2 class="section-title">Engineered for 4 interconnected stakeholders.</h2>
        <p class="section-subtitle" style="margin: 0 auto;">
          Every participant in the FarmLink ecosystem has dedicated tools, transparent verified logs, and specialized interfaces designed for seamless post-harvest operations.
        </p>
      </div>

      <!-- 4-Card Role Grid -->
      <div class="roles-grid">
        
        <!-- ROLE 1: FARMER -->
        <div class="role-card" id="cardFarmer">
          <div class="role-card-top">
            <div class="role-card-header">
              <span class="role-badge-tag">Produce Origin</span>
              <div class="role-card-icon"><i class="fa-solid fa-wheat-awn"></i></div>
            </div>
            <h3 class="role-title">The Farmer (Producer)</h3>
            <p class="role-brief">
              Lists fresh harvests, secures advance cold storage space, and avoids market gluts by preserving produce until optimal market conditions.
            </p>
            <ul class="role-points-list">
              <li>
                <svg width="16" height="16" viewBox="0 0 24 24"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>
                Direct harvest listing with crop variety, yield tonnage, and harvest date.
              </li>
              <li>
                <svg width="16" height="16" viewBox="0 0 24 24"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>
                Book climate-controlled cold storage bays ahead of peak harvest season.
              </li>
              <li>
                <svg width="16" height="16" viewBox="0 0 24 24"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>
                Obtain official Digital Warehouse Receipts with verified weight and moisture.
              </li>
              <li>
                <svg width="16" height="16" viewBox="0 0 24 24"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>
                Monitor stored inventory status and approve direct purchase bids from verified vendors.
              </li>
            </ul>
          </div>
          <button class="role-action-btn" onclick="openRoleModal('farmer')">
            <span>Explore Farmer Workflow</span>
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
          </button>
        </div>

        <!-- ROLE 2: COLDSTORE OPERATOR -->
        <div class="role-card" id="cardOperator">
          <div class="role-card-top">
            <div class="role-card-header">
              <span class="role-badge-tag">Facility Custody</span>
              <div class="role-card-icon"><i class="fa-solid fa-snowflake"></i></div>
            </div>
            <h3 class="role-title">Coldstore Operator</h3>
            <p class="role-brief">
              Conducts physical intake inspections, logs quality metrics, assigns temperature zones, and guarantees warehouse integrity.
            </p>
            <ul class="role-points-list">
              <li>
                <svg width="16" height="16" viewBox="0 0 24 24"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>
                Inspect incoming produce lots, perform grading, and check moisture levels.
              </li>
              <li>
                <svg width="16" height="16" viewBox="0 0 24 24"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>
                Assign pallet bays across multi-climate zones (0°C–4°C or 8°C–12°C).
              </li>
              <li>
                <svg width="16" height="16" viewBox="0 0 24 24"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>
                Issue and authenticate digital warehouse certificates for bank collateral.
              </li>
              <li>
                <svg width="16" height="16" viewBox="0 0 24 24"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>
                Track live occupancy rates, chamber sensor telemetry, and dispatch releases.
              </li>
            </ul>
          </div>
          <button class="role-action-btn" onclick="openRoleModal('operator')">
            <span>Explore Operator Console</span>
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
          </button>
        </div>

        <!-- ROLE 3: VENDOR -->
        <div class="role-card" id="cardVendor">
          <div class="role-card-top">
            <div class="role-card-header">
              <span class="role-badge-tag">Market Demand</span>
              <div class="role-card-icon"><i class="fa-solid fa-shop"></i></div>
            </div>
            <h3 class="role-title">The Vendor (Buyer)</h3>
            <p class="role-brief">
              Procures verified, cold-preserved produce directly from storage chambers with complete harvest history and grade certification.
            </p>
            <ul class="role-points-list">
              <li>
                <svg width="16" height="16" viewBox="0 0 24 24"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>
                Browse live catalog of cold-stored produce with exact harvest timestamps.
              </li>
              <li>
                <svg width="16" height="16" viewBox="0 0 24 24"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>
                Inspect chamber telemetry history (temperature stability & grading logs).
              </li>
              <li>
                <svg width="16" height="16" viewBox="0 0 24 24"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>
                Execute bulk or split-lot procurement with transparent digital invoices.
              </li>
              <li>
                <svg width="16" height="16" viewBox="0 0 24 24"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>
                Schedule refrigerated transport pickup directly from the cold storage dock.
              </li>
            </ul>
          </div>
          <button class="role-action-btn" onclick="openRoleModal('vendor')">
            <span>Explore Vendor Marketplace</span>
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
          </button>
        </div>

        <!-- ROLE 4: SYSTEM ADMIN -->
        <div class="role-card" id="cardAdmin">
          <div class="role-card-top">
            <div class="role-card-header">
              <span class="role-badge-tag">Governance & Oversight</span>
              <div class="role-card-icon"><i class="fa-solid fa-shield-halved"></i></div>
            </div>
            <h3 class="role-title">System Admin</h3>
            <p class="role-brief">
              Regulates platform standards, verifies facilities and commercial entities, and maintains regional food security telemetry.
            </p>
            <ul class="role-points-list">
              <li>
                <svg width="16" height="16" viewBox="0 0 24 24"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>
                Verify facility licenses, operator credentials, and vendor tax registrations.
              </li>
              <li>
                <svg width="16" height="16" viewBox="0 0 24 24"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>
                Live regional telemetry over storage capacity, power backups, and bay health.
              </li>
              <li>
                <svg width="16" height="16" viewBox="0 0 24 24"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>
                Monitor transparent price indices and enforce anti-hoarding safety rules.
              </li>
              <li>
                <svg width="16" height="16" viewBox="0 0 24 24"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>
                Audit transaction logs, manage dispute resolution, and generate food security reports.
              </li>
            </ul>
          </div>
          <button class="role-action-btn" onclick="openRoleModal('admin')">
            <span>Explore Admin Dashboard</span>
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
          </button>
        </div>

      </div>

    </div>
  </section>

  <!-- Cold Chain Process Steps -->
  <section class="page-section section-light-bg" id="workflow">
    <div class="container">
      
      <div class="section-heading-wrap">
        <div class="section-badge">
          <svg width="14" height="14" viewBox="0 0 24 24"><path d="M17 8C8 10 5.9 16.17 3.82 21.34L5.71 22L6.66 19.7C12 19.7 20.2 16.9 21.6 8.5C21.7 8 21.4 7.6 20.9 7.7C18.6 8.2 16.6 8.9 14.8 9.8C16.8 6.4 19.3 4 20.3 3.1C20.6 2.8 20.5 2.3 20.1 2.2C15.8 1.4 10.3 4.3 7.8 7.4C7.5 7.8 7.8 8.4 8.3 8.3C10.8 7.7 13.9 7.4 17 8Z"/></svg>
          Physical & Digital Journey
        </div>
        <h2 class="section-title">How produce moves: From the field to the coldstore to the vendor.</h2>
        <p class="section-subtitle">
          A synchronized 4-stage pipeline that guarantees complete cold chain traceability and maximum post-harvest crop value.
        </p>
      </div>

      <!-- 4 Step Cards -->
      <div class="steps-grid">
        
        <div class="step-card">
          <div class="step-number">01</div>
          <h3 class="step-title">Farm Gate Listing</h3>
          <p class="step-desc">
            The farmer inputs harvest quantity, crop variety, and expected harvest date into FarmLink, immediately reserving an intake slot at the nearest certified cold storage facility.
          </p>
        </div>

        <div class="step-card">
          <div class="step-number">02</div>
          <h3 class="step-title">Intake QC & Bay Allocation</h3>
          <p class="step-desc">
            Upon facility arrival, the Coldstore Operator inspects produce grade, verifies core temperature and moisture, issues a digital receipt, and assigns a climate-controlled bay.
          </p>
        </div>

        <div class="step-card">
          <div class="step-number">03</div>
          <h3 class="step-title">Preserved Cold Storage</h3>
          <p class="step-desc">
            Stored under active IoT environmental monitoring (humidity, temperature, ethylene), produce remains at peak cellular freshness with automated alerts for any micro-climate shifts.
          </p>
        </div>

        <div class="step-card">
          <div class="step-number">04</div>
          <h3 class="step-title">Vendor Procurement</h3>
          <p class="step-desc">
            Commercial vendors browse verified cold storage lots, inspect laboratory quality grades, purchase batches digitally, and dispatch refrigerated transport directly from the facility.
          </p>
        </div>

      </div>

    </div>
  </section>

  <!-- Climate Storage Chambers -->
  <section class="page-section" id="chambers">
    <div class="container">
      
      <div class="section-heading-wrap">
        <div class="section-badge">
          <svg width="14" height="14" viewBox="0 0 24 24"><path d="M17 8C8 10 5.9 16.17 3.82 21.34L5.71 22L6.66 19.7C12 19.7 20.2 16.9 21.6 8.5C21.7 8 21.4 7.6 20.9 7.7C18.6 8.2 16.6 8.9 14.8 9.8C16.8 6.4 19.3 4 20.3 3.1C20.6 2.8 20.5 2.3 20.1 2.2C15.8 1.4 10.3 4.3 7.8 7.4C7.5 7.8 7.8 8.4 8.3 8.3C10.8 7.7 13.9 7.4 17 8Z"/></svg>
          Technical Standards
        </div>
        <h2 class="section-title">Multi-zone climate chambers for diverse commodities.</h2>
        <p class="section-subtitle">
          Different agricultural goods require precise atmospheric thresholds. FarmLink facilities categorize inventory across 3 specialized temperature and humidity zones.
        </p>
      </div>

      <!-- 3 Chamber Cards -->
      <div class="chambers-grid">
        
        <div class="chamber-card">
          <span class="chamber-badge-tag">Zone A &bull; Root & Tuber</span>
          <h3 class="chamber-title">Root & Tuber Preservation</h3>
          <div class="chamber-specs-row">
            <div class="spec-col">
              <span class="spec-value">1°C – 3°C</span>
              <span class="spec-label">Temperature</span>
            </div>
            <div class="spec-col" style="margin-left: 20px;">
              <span class="spec-value">90% – 95%</span>
              <span class="spec-label">Rel. Humidity</span>
            </div>
          </div>
          <p class="chamber-crops-info">
            <strong>Target Commodities:</strong> Potatoes, Onions, Garlic, Carrots, Ginger, and Sweet Potatoes. Prevents sprouting, weight shrinkage, and fungal rot.
          </p>
        </div>

        <div class="chamber-card">
          <span class="chamber-badge-tag">Zone B &bull; Temperate Fruit</span>
          <h3 class="chamber-title">Pome & Temperate Fruit</h3>
          <div class="chamber-specs-row">
            <div class="spec-col">
              <span class="spec-value">0°C – 2°C</span>
              <span class="spec-label">Temperature</span>
            </div>
            <div class="spec-col" style="margin-left: 20px;">
              <span class="spec-value">92% – 98%</span>
              <span class="spec-label">Rel. Humidity</span>
            </div>
          </div>
          <p class="chamber-crops-info">
            <strong>Target Commodities:</strong> Apples, Pears, Kiwi, and Plums. Controlled ethylene scrubbers delay ripening and maintain crisp firmness for up to 9 months.
          </p>
        </div>

        <div class="chamber-card">
          <span class="chamber-badge-tag">Zone C &bull; Sub-Tropical</span>
          <h3 class="chamber-title">Sub-Tropical & Perishables</h3>
          <div class="chamber-specs-row">
            <div class="spec-col">
              <span class="spec-value">8°C – 12°C</span>
              <span class="spec-label">Temperature</span>
            </div>
            <div class="spec-col" style="margin-left: 20px;">
              <span class="spec-value">85% – 90%</span>
              <span class="spec-label">Rel. Humidity</span>
            </div>
          </div>
          <p class="chamber-crops-info">
            <strong>Target Commodities:</strong> Tomatoes, Bell Peppers, Citrus, and Green Chilis. Prevents chilling injuries and brown pitting while preserving vitamins.
          </p>
        </div>

      </div>

    </div>
  </section>

  <!-- User Testimonials -->
  <section class="page-section section-light-bg">
    <div class="container">
      
      <div class="section-heading-wrap">
        <div class="section-badge">
          <svg width="14" height="14" viewBox="0 0 24 24"><path d="M17 8C8 10 5.9 16.17 3.82 21.34L5.71 22L6.66 19.7C12 19.7 20.2 16.9 21.6 8.5C21.7 8 21.4 7.6 20.9 7.7C18.6 8.2 16.6 8.9 14.8 9.8C16.8 6.4 19.3 4 20.3 3.1C20.6 2.8 20.5 2.3 20.1 2.2C15.8 1.4 10.3 4.3 7.8 7.4C7.5 7.8 7.8 8.4 8.3 8.3C10.8 7.7 13.9 7.4 17 8Z"/></svg>
          Partner Impact
        </div>
        <h2 class="section-title">Trusted by producers and distributors across the region.</h2>
      </div>

      <div class="testimonials-grid">
        
        <div class="testimonial-card">
          <p class="testimonial-quote">
            “Using FarmLink to store our 180-ton potato harvest allowed our cooperative to avoid peak-season distress sales. We waited for off-season market prices, increasing our net farmer payout by 42%.”
          </p>
          <div class="testimonial-user">
            <div class="user-avatar">DC</div>
            <div>
              <div class="user-name">Duhabi Agricultural Cooperative</div>
              <div class="user-role-text">Farmer Producer Group &bull; Sunsari Region</div>
            </div>
          </div>
        </div>

        <div class="testimonial-card">
          <p class="testimonial-quote">
            “As a commercial wholesale buyer, purchasing directly from verified cold storage bays with real-time temperature telemetry eliminated our quality risk. Every batch arrives as crisp as harvest morning.”
          </p>
          <div class="testimonial-user">
            <div class="user-avatar">EF</div>
            <div>
              <div class="user-name">Eastern Fresh Produce Wholesale</div>
              <div class="user-role-text">Commercial Food Distributor &bull; Biratnagar Hub</div>
            </div>
          </div>
        </div>

      </div>

    </div>
  </section>

  <!-- Call to Action Banner -->
  <section class="page-section" id="contact">
    <div class="container">
      
      <div class="cta-box">
        <h2 class="cta-title">Transforming post-harvest agriculture into an intelligent, zero-loss cold chain.</h2>
        <p class="cta-text">
          Whether you are a farmer wanting to preserve crop value, a facility operator optimizing bay occupancy, or a vendor sourcing certified fresh produce — FarmLink is your operational hub.
        </p>
        <div class="cta-buttons">
          <a href="register.php?role=farmer" class="btn-primary-light">
            <i class="fa-solid fa-seedling"></i>
            <span>Register as Farmer</span>
          </a>
          <a href="login.php" class="btn-primary-outline">
            <span>Operator & Vendor Portal &rarr;</span>
          </a>
        </div>
      </div>

    </div>
  </section>

  <!-- Footer -->
  <footer class="page-footer">
    <div class="container">
      
      <div class="footer-columns-grid">
        
        <!-- Brand Info -->
        <div class="footer-brand-info">
          <div class="brand-logo" style="color: var(--color-dark);">
            <div class="brand-icon" style="color: var(--color-primary);">
              <svg width="28" height="28" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M16 3V29M16 7C12 9 8 13 8 18C12 18 15 15 16 11M16 13C20 15 24 19 24 24C20 24 17 21 16 17M16 17C12 19 8 23 8 28C12 28 15 25 16 21" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
            </div>
            <div class="brand-name">
              FarmLink <span class="reg">®</span>
            </div>
          </div>
          <p>
            An integrated cold chain ecosystem connecting agricultural producers, climate-controlled storage facilities, and verified commercial vendors.
          </p>
        </div>

        <!-- Col 1: Platform Roles -->
        <div>
          <h4 class="footer-heading">System Roles</h4>
          <ul class="footer-link-list">
            <li><a href="login.php?role=farmer">Farmer Portal</a></li>
            <li><a href="login.php?role=operator">Coldstore Operator</a></li>
            <li><a href="login.php?role=vendor">Vendor Procurement</a></li>
            <li><a href="login.php?role=admin">System Administrator</a></li>
          </ul>
        </div>

        <!-- Col 2: Architecture -->
        <div>
          <h4 class="footer-heading">Architecture</h4>
          <ul class="footer-link-list">
            <li><a href="#about">Ecosystem Model</a></li>
            <li><a href="#workflow">Intake Pipeline</a></li>
            <li><a href="#chambers">Climate Chambers</a></li>
            <li><a href="#about">Digital Receipts</a></li>
          </ul>
        </div>

        <!-- Col 3: Network -->
        <div>
          <h4 class="footer-heading">Regional Hubs</h4>
          <ul class="footer-link-list">
            <li><a href="#home">Biratnagar Agro Bay</a></li>
            <li><a href="#home">Duhabi Cold Hub</a></li>
            <li><a href="#home">Belbari Horticulture</a></li>
            <li><a href="#home">Dharan Citrus Station</a></li>
          </ul>
        </div>

      </div>

      <!-- Footer Bottom -->
      <div class="footer-bottom-bar">
        <div class="server-status">
          <span class="status-pulse-dot"></span>
          <span>Regional Cold Chain Network: Operational &bull; 24/24 Facilities Online</span>
        </div>
        <div>
          &copy; 2026 FarmLink Agricultural Systems. All rights reserved.
        </div>
      </div>

    </div>
  </footer>

  <!-- Role Preview Modal -->
  <div class="modal-backdrop" id="roleModalOverlay">
    <div class="modal-content-box" id="roleModalContent">
      <button class="modal-close-btn" onclick="closeRoleModal()" aria-label="Close dialog">&times;</button>
      <div id="modalBody">
        <!-- Content injected dynamically by JavaScript -->
      </div>
    </div>
  </div>

  <!-- JavaScript: Header Scroll, Smooth Navigation & Interactive Role Previews -->
  <script>
    // Header Scroll State
    const header = document.getElementById('siteHeader');
    window.addEventListener('scroll', () => {
      if (window.scrollY > 50) {
        header.classList.add('scrolled');
      } else {
        header.classList.remove('scrolled');
      }
    });

    // Mobile Menu Toggle
    const mobileToggle = document.getElementById('mobileToggle');
    const navMenu = document.querySelector('.nav-menu');
    if (mobileToggle) {
      mobileToggle.addEventListener('click', () => {
        navMenu.style.display = navMenu.style.display === 'flex' ? 'none' : 'flex';
        if (navMenu.style.display === 'flex') {
          navMenu.style.position = 'absolute';
          navMenu.style.top = '70px';
          navMenu.style.left = '16px';
          navMenu.style.right = '16px';
          navMenu.style.background = 'rgba(0, 44, 17, 0.98)';
          navMenu.style.flexDirection = 'column';
          navMenu.style.padding = '24px';
          navMenu.style.borderRadius = '16px';
          navMenu.style.border = '1px solid rgba(255,255,255,0.1)';
        }
      });
    }

    // Role Preview Data
    const roleData = {
      farmer: {
        badge: "Produce Origin &bull; Farmer Console",
        title: "🌾 Farmer: Harvest Listing & Storage Booking",
        desc: "Preview of the Farmer dashboard for listing harvests and locking cold storage bays:",
        items: [
          { label: "Active Harvest Listings", val: "3 Active Lots (Red Potatoes, Winter Apples)" },
          { label: "Cold Bay Reservation", val: "Bay #14 Reserved at Duhabi Cold Hub" },
          { label: "Digital Warehouse Receipt", val: "DWR-2026-8841 (Weight: 24.5 MT &bull; Grade A)" },
          { label: "Vendor Bid Requests", val: "2 Wholesale Bids Received (NPR 44.50/kg)" }
        ],
        btnText: "Launch Farmer Portal",
        btnLink: "login.php?role=farmer"
      },
      operator: {
        badge: "Facility Custody &bull; Operator Console",
        title: "❄️ Operator: Intake QC & Climate Chambers",
        desc: "Preview of the Coldstore Operator console for temperature regulation and receipts:",
        items: [
          { label: "Chamber #1 (Potatoes)", val: "2.4°C &bull; 92% RH &bull; Ethylene: Normal" },
          { label: "Chamber #2 (Apples)", val: "0.8°C &bull; 94% RH &bull; Nitrogen: Active" },
          { label: "Intake Queue Today", val: "4 Incoming Trucks &bull; 38 MT Pending QC Check" },
          { label: "Total Bay Capacity", val: "84% Occupied (3,650 MT / 4,300 MT)" }
        ],
        btnText: "Launch Operator Console",
        btnLink: "login.php?role=operator"
      },
      vendor: {
        badge: "Market Demand &bull; Vendor Marketplace",
        title: "🏪 Vendor: Verified Cold-Stored Procurement",
        desc: "Preview of the Vendor procurement marketplace for certified cold-chain produce:",
        items: [
          { label: "Live Verified Inventory", val: "1,200 MT Potatoes, 450 MT Apples, 80 MT Citrus" },
          { label: "Cold Chain Traceability", val: "100% Monitored from Farm Gate to Bay" },
          { label: "Procurement Contracts", val: "Direct Digital Agreement with Locked Reserve Price" },
          { label: "Dockside Dispatch", val: "Refrigerated Logistics Bay #02 Ready" }
        ],
        btnText: "Launch Vendor Marketplace",
        btnLink: "login.php?role=vendor"
      },
      admin: {
        badge: "Governance &bull; System Overseer",
        title: "🛡️ System Admin: Regional Telemetry & Audits",
        desc: "Preview of the System Admin governance dashboard overseeing food security:",
        items: [
          { label: "Certified Facilities", val: "24 Regional Cold Storage Plants Active" },
          { label: "Total Stored Value", val: "NPR 182.4 Million across 4 Districts" },
          { label: "Telemetry Health", val: "100% Sensors Online &bull; 0 Critical Temperature Alarms" },
          { label: "Price Transparency Index", val: "Calculated Real-Time Daily Regional Benchmarks" }
        ],
        btnText: "Launch Admin Overview",
        btnLink: "login.php?role=admin"
      }
    };

    function openRoleModal(role) {
      const data = roleData[role];
      if (!data) return;
      const modalBody = document.getElementById('modalBody');
      modalBody.innerHTML = `
        <div style="font-family: var(--font-heading); font-size: 0.84rem; font-weight: 700; color: var(--color-primary); text-transform: uppercase; letter-spacing: 0.06em; margin-bottom: 12px;">
          ${data.badge}
        </div>
        <h3 style="font-family: var(--font-heading); font-size: 1.7rem; font-weight: 700; color: var(--color-dark); margin-bottom: 12px; line-height: 1.2;">
          ${data.title}
        </h3>
        <p style="font-size: 0.98rem; color: var(--color-text-body); margin-bottom: 24px; line-height: 1.6;">
          ${data.desc}
        </p>
        <div style="display: flex; flex-direction: column; gap: 12px; margin-bottom: 32px; background: var(--color-bg-light); padding: 20px; border-radius: 14px; border: 1px solid var(--color-border);">
          ${data.items.map(item => `
            <div style="display: flex; justify-content: space-between; align-items: center; border-bottom: 1px solid var(--color-border); padding-bottom: 8px;">
              <span style="font-size: 0.88rem; color: var(--color-text-muted); font-weight: 500;">${item.label}:</span>
              <strong style="font-size: 0.92rem; color: var(--color-dark); font-family: var(--font-heading);">${item.val}</strong>
            </div>
          `).join('')}
        </div>
        <div style="display: flex; gap: 14px;">
          <a href="${data.btnLink}" class="btn-primary-light" style="background: var(--color-primary); color: #fff; flex: 1; text-align: center; justify-content: center;">
            <span>${data.btnText}</span> &rarr;
          </a>
          <button onclick="closeRoleModal()" style="padding: 12px 20px; border-radius: 9999px; border: 1px solid var(--color-border); font-weight: 600; color: var(--color-text-body);">
            Close Preview
          </button>
        </div>
      `;
      document.getElementById('roleModalOverlay').classList.add('active');
    }

    function closeRoleModal() {
      document.getElementById('roleModalOverlay').classList.remove('active');
    }

    // Close on backdrop click
    document.getElementById('roleModalOverlay').addEventListener('click', (e) => {
      if (e.target.id === 'roleModalOverlay') {
        closeRoleModal();
      }
    });

    // Close on Escape key
    document.addEventListener('keydown', (e) => {
      if (e.key === 'Escape') closeRoleModal();
    });
  </script>

</body>
</html>
