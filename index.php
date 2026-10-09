<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Lasang Pinoy</title>
    <meta
      name="description"
      content="Lasang Pinoy is a Filipino recipe collection celebrating home-cooked meals and family traditions."
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;500;600;700&family=Inter:wght@400;500;600;700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="assets/css/style.css" />
  </head>
  <body>
    <div class="page-shell">
      <header class="topbar">
        <div class="brand" aria-label="Lasang Pinoy home">
          <div class="brand-mark">Ψ</div>
          <div class="brand-copy">
            <span class="brand-name">Lasang Pinoy</span>
            <small>FROM OUR KITCHEN TO YOURS</small>
          </div>
        </div>

        <nav class="main-nav" aria-label="Main navigation">
          <a href="#">Home</a>
          <a href="#">Recipes</a>
          <a href="#">About us</a>
          <a href="#">Contact</a>
        </nav>

        <div class="nav-actions">
          <a class="link-button" href="#">Sign in</a>
          <a class="btn btn-dark" href="#">Join the table</a>
        </div>
      </header>

      <main>
        <section class="hero">
          <div class="hero-copy">
            <p class="eyebrow">A TASTE OF HOME. A STORY IN EVERY DISH.</p>
            <h1>
              Good food.<br />
              Filipino roots.<br />
              Your kitchen.
            </h1>
            <p class="intro">
              Discover the dishes we grew up with—and the confidence to make
              them your own. Thoughtful recipes, simple steps, unforgettable
              flavors.
            </p>

            <div class="cta-row">
              <a class="btn btn-primary" href="#">Explore the recipes <span>→</span></a>
              <a class="btn btn-light" href="#">Our story</a>
            </div>

            <div class="mini-copy">FREE TO EXPLORE • MADE FOR EVERYDAY COOKING</div>
          </div>

          <div class="hero-visual">
            <img
              src="https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?auto=format&fit=crop&w=1200&q=80"
              alt="Filipino chicken adobo dish on a wooden table"
            />
            <div class="caption-row">
              <span>On the table: Chicken Adobo</span>
              <span>55 minutes • 4 servings <span class="arrow">›</span></span>
            </div>
          </div>
        </section>

        <section class="stats-bar" aria-label="Recipe stats">
          <div class="stat">
            <span class="stat-value">120+</span>
            <span class="stat-label">Recipes to come home to</span>
          </div>
          <div class="stat">
            <span class="stat-value">6</span>
            <span class="stat-label">Everyday cuisine categories</span>
          </div>
          <div class="stat stat-right">
            <span class="stat-value">Step by step</span>
            <span class="stat-label">Made for real home kitchens</span>
          </div>
        </section>

        <section class="search-area">
          <div class="section-intro">
            <p class="eyebrow">FIND YOUR NEXT FAVORITE</p>
            <h2>What are you craving today?</h2>
            <p>
              A comforting sabaw, a quick weeknight ulam, or something sweet to
              share.
            </p>
          </div>

          <div class="search-box">
            <div class="search-input-wrap">
              <input
                type="text"
                placeholder="Search a dish, an ingredient, or a little taste of home..."
                aria-label="Search recipes"
              />
            </div>
            <button type="button" class="btn btn-primary">Find a recipe</button>
          </div>

          <div class="chip-row" aria-label="Popular categories">
            <span class="chip-label">Popular:</span>
            <button type="button" class="chip">Adoho</button>
            <button type="button" class="chip">3-minute meals</button>
            <button type="button" class="chip">Comfort food</button>
            <button type="button" class="chip">Celebration</button>
          </div>
        </section>

        <section class="cta-banner">
          <div class="cta-content">
            <p class="eyebrow light">THERE IS ALWAYS ROOM FOR ONE MORE</p>
            <h3>Bring a little home to your kitchen.</h3>
            <p>
              Build your recipe collection. Cook something wonderful. Share the
              joy.
            </p>
            <a href="#" class="btn btn-light btn-cta">Create your free account <span>→</span></a>
          </div>
        </section>

        <footer class="site-footer">
          <div class="footer-grid">
            <div class="brand-block">
              <h4>Lasang Pinoy</h4>
              <p>
                Recipes worth keeping. Traditions worth sharing. A little taste
                of home, wherever you are.
              </p>
              <small>Made with care for Filipino home cooks.</small>
            </div>

            <div class="footer-column">
              <h5>Explore</h5>
              <ul>
                <li><a href="#">Recipe collection</a></li>
                <li><a href="#">Cuisine categories</a></li>
                <li><a href="#">Our story</a></li>
              </ul>
            </div>

            <div class="footer-column">
              <h5>Connect</h5>
              <ul>
                <li><a href="#">Contact us</a></li>
                <li><a href="#">Meet the developers</a></li>
                <li><a href="#">Community guidelines</a></li>
              </ul>
            </div>

            <div class="footer-column">
              <h5>Your kitchen</h5>
              <ul>
                <li><a href="#">Create an account</a></li>
                <li><a href="#">Sign in</a></li>
                <li><a href="#">Saved recipes</a></li>
              </ul>
            </div>
          </div>

          <div class="footer-bottom">
            <span>© 2026 Lasang Pinoy. A Filipino recipe information system.</span>
            <div class="legal-links">
              <a href="#">Privacy policy</a>
              <a href="#">Terms of use</a>
            </div>
          </div>
        </footer>
      </main>
    </div>
  </body>
</html>
