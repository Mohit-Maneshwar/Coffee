<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Coffee</title>
  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
    integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
      .see-customers {
  /* background: #1c1c1c; */
  color: #fff;
  padding: 60px 20px;
  text-align: center;
}

.customers-header h2 {
  font-size: 32px;
  color: #f2c94c;
  margin-bottom: 10px;
}

.customers-header p {
  color: #ccc;
  margin-bottom: 20px;
  font-size: 18px;
}

.see-more-btn {
  padding: 10px 20px;
  background: #ff9800;
  color: #fff;
  text-decoration: none;
  border-radius: 6px;
  font-weight: bold;
  transition: background 0.3s ease;
}

.see-more-btn:hover {
  background: #e67e00;
}

.customer-grid {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  gap: 25px;
  margin-top: 40px;
}

.customer-box {
  background:rgb(160, 61, 22);
  padding: 20px;
  border-radius: 12px;
  width: 260px;
  box-shadow: 0 6px 20px rgba(0, 0, 0, 0.3);
  transition: transform 0.3s;
}

.customer-box:hover {
  transform: translateY(-8px);
}

.customer-box .avatar {
  font-size: 48px;
  color: #f2c94c;
  margin-bottom: 10px;
}

.customer-box h3 {
  font-size: 20px;
  color: #f2c94c;
  margin: 0;
}

.customer-box .city,
.customer-box .order,
.customer-box .date {
  color: #ccc;
  font-size: 15px;
  margin: 5px 0;
}

    </style>

  <!-- <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script> -->
</head>

<body>
  <header>
    <nav>
      <div class="nav-container">
        <div class="logo">Coffee</div>
        <div class="hamburger" onclick="toggleSidebar()">☰</div>
      </div>
      <ul class="nav-links">
        <li><a href="#main">Home</a></li>
        <li><a href="#about">About</a></li>
        <li><a href="#service">Service</a></li>
        <li><a href="#faqs">FAQs</a></li>
        <li><a href="#ContactUs">Contact Us</a></li>
      </ul>
    </nav>
    <div class="sidebar" id="sidebar">
      <ul>
        <li><a href="#main">Home</a></li>
        <li><a href="#about">About</a></li>
        <li><a href="#service">Service</a></li>
        <li><a href="#faqs">FAQs</a></li>
        <li><a href="#ContactUs">Contact Us</a></li>
      </ul>
    </div>
  </header>

  <main>
    <section class="section-1" id="main">
      <div class="text-container">
        <h1>COFFEE</h1>
        <h2>Service for <span>Office Breakrooms</span> and Free Dilevery</h2>
        <div><a href="shop.php"><button>Shop Now</button></a></div>
      </div>
      <div class="image-container">
        <img src="images/coffee.png" alt="Coffee" />
      </div>
    </section>

    <div class="section-2" id="service">
      <h1>OUR SERVICE</h1>

      <div class="card-container">
        <div class="card">
          <img src="images/Coffee-tea.jpg" alt="" />
          <h3>COFFEE AND TEA</h3>
          <a href="shop.php"><i class="fa-solid fa-circle-chevron-right"></i></a>
        </div>
        <div class="card">
          <img src="images/brewers-equipment.jpg" alt="" />
          <h3>brewers equipment</h3>
          <a href="shop.php"><i class="fa-solid fa-circle-chevron-right"></i></a>
        </div>
        <div class="card">
          <img src="images/paper-janitorial.jpg" alt="" />
          <h3>paper, janitorial</h3>
          <a href="shop.php"><i class="fa-solid fa-circle-chevron-right"></i></a>
        </div>
        <div class="card">
          <img src="images/FOOD-beverage.jpg" alt="" />
          <h3>FOOD & beverage</h3>
          <a href="shop.php"><i class="fa-solid fa-circle-chevron-right"></i></a>
        </div>
      </div>
    </div>

    <section class="about-section" id="about">
      <div class="about-image">
        <img src="images/coffee-stream.png" alt="Coffee Cup" />
      </div>
      <div class="about-content">
        <h2>ABOUT US</h2>
        <p>
          Welcome to Mohit's COffee, Balaghat’s cozy corner for coffee lovers! Established in 2025, we’re a proud,
          locally owned and operated coffee shop dedicated to serving the finest handcrafted beverages, freshly brewed
          coffee, and warm hospitality. Our journey began with a simple goal – to create a space where people could
          connect, relax, and enjoy great coffee made from high-quality, locally sourced beans.
        </p>
        <a href="shop.php"><button class="shop-btn">SHOP NOW</button></a>
      </div>
    </section>

    <section class="faq-section" id="faqs">
      <h2>COMMON CUSTOMER QUESTIONS</h2>

      <div class="faq-item">
        <div class="faq-question">
          <h3>HOW DO I SET UP AN OFFICE COFFEE STATION FOR MY COMPANY?</h3>
          <span class="icon">+</span>
        </div>
        <div class="faq-answer">
          Contact our office and we’ll walk you through options tailored to
          your office size and coffee preferences.
        </div>
      </div>

      <div class="faq-item">
        <div class="faq-question">
          <h3>WHAT FLAVORS SHOULD I GET?</h3>
          <span class="icon">+</span>
        </div>
        <div class="faq-answer">
          We recommend a mix of regular, decaf, and specialty flavors to
          satisfy all employees' tastes.
        </div>
      </div>

      <div class="faq-item">
        <div class="faq-question">
          <h3>HOW CAN I IMPROVE OFFICE COFFEE?</h3>
          <span class="icon">+</span>
        </div>
        <div class="faq-answer">
          Improve quality by choosing premium coffee, offering creamer
          options, keeping the station clean, and having a variety of flavors
          for everyone.
        </div>
      </div>

      <div class="faq-item">
        <div class="faq-question">
          <h3>HOW DO COFFEE MACHINES WORK IN AN OFFICE?</h3>
          <span class="icon">+</span>
        </div>
        <div class="faq-answer">
          Office coffee machines are designed for convenience and high usage.
          Employees place a cup under the dispenser, choose their beverage
          option, and the machine brews a fresh cup instantly—usually from
          pods, grounds, or bean-to-cup systems.
        </div>
      </div>

      <div class="faq-item">
        <div class="faq-question">
          <h3>HOW MUCH DOES AN OFFICE COFFEE MACHINE COST?</h3>
          <span class="icon">+</span>
        </div>
        <div class="faq-answer">
          Office coffee machine prices vary depending on the type and
          features. Basic models can start around $200–$500, while high-end
          commercial machines can cost $1,000 or more. Leasing options are
          also available for businesses.
        </div>
      </div>
    </section>

    <section class="see-customers" id="all-customers">
      <div class="customers-header">
        <h2>🌟 See All Our Happy Customers</h2>
        <p>We’re proud to serve amazing people who love our coffee and tea. Here’s what they’re ordering!</p>
        <a href="display-orders.php" class="see-more-btn">See Full List</a>
      </div>

      <div class="customer-grid">
        <!-- Example Customer Cards -->
        <div class="customer-box">
          <div class="avatar"><i class="fas fa-user-circle"></i></div>
          <h3>Rohit Sharma</h3>
          <p class="city">📍 Nagpur</p>
          <p class="order">Ordered <strong>2x Cappuccino</strong></p>
          <p class="date">🗓️ May 26, 2025</p>
        </div>

        <div class="customer-box">
          <div class="avatar"><i class="fas fa-user-circle"></i></div>
          <h3>Pooja Patel</h3>
          <p class="city">📍 Bhopal</p>
          <p class="order">Ordered <strong>1x Masala Tea</strong></p>
          <p class="date">🗓️ June 2, 2025</p>
        </div>

        <div class="customer-box">
          <div class="avatar"><i class="fas fa-user-circle"></i></div>
          <h3>Mohit Maneshwar</h3>
          <p class="city">📍 Balaghat</p>
          <p class="order">Ordered <strong>3x Cold Brew</strong></p>
          <p class="date">🗓️ June 6, 2025</p>
        </div>

        <!-- Add more dynamically using PHP -->
      </div>
    </section>


    <section id="ContactUs">
      <?php include "contact.html" ?>
    </section>
    <?php include "footer.html" ?>

  </main>
  <script>



    function toggleSidebar() {
      document.getElementById("sidebar").classList.toggle("show");
    }
  </script>
  <script src="script.js"></script>
</body>

</html>