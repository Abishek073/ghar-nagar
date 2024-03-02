<!doctype html>
<html>

<head>

@include('home.homecss')

  <script src="https://unpkg.com/phosphor-icons"></script>
  <script src="js/search.js" defer></script>
</head>

<body>
  <section class="landingPage">
    <!-- header -->
@include('home.header')
    <!-- section 1 intro -->
    <!--landing page-->
    <section class="intro padding50 position-relative ">
      <div class="container dFlex">
        <!-- left -->
        <div class="width50">
          <h1 class="intro__title">
            Renting out homes <br>
            are made <br>
            simple.
          </h1>
          <img class="intro__border" src="images/line-2.png" />
          <!-- buttons -->
          <div class="intro__butons dFlexCenter dflexMobileFullCenter">
            <a class="buttons">Buy/Sell House</a>
            <a class="intro__play dFlexCenter dflexMobileCenter">
              <a class="buttons">Buy/Sell Flat</a>
            </a>
          </div>
        </div>
        <!-- right -->
        <div class="width50">
          <img src="images/house-intro3.png" />
        </div>
      </div>
      <!-- bottom intro section -->
    </section>
  </section>

  <!-- section 2 support -->
  <section class="support padding50">
    <div class="container dFlex">
      <!-- left -->
      <div class="width55">
        <h2 class="support__title title">
          How we SUPPORT our<br />
          customers all over Nepal
        </h2>
        <p class="support__p">
          Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatem.<br />
          Lorem ipsum dolor sit amet consectetur adipisicing elit.
          <br />
          Lorem ipsum dolor sit amet consectetur.
        </p>
        <!-- support rating -->
        <div class="support__rating dFlexCenter dflexMobileFullCenter">
          <!-- left rating -->
          <div class="support__ratingItem">
            <img src="images/fivestars.svg" />
            <span>4.9 / 5 rating</span>
            <p><b>Buyers</b></p>
          </div>
          <!-- right rating -->
          <div>
            <img src="images/4stars.svg" />
            <span>4.8 / 5 rating</span>
            <p><b>Sellers</b></p>
          </div>
        </div>
      </div>
      <!-- right -->
      <div class="support__features width45">
        <!-- support item -->
        <div class="support__feature dFlex">
          <!-- left -->
          <div class="support__icon">
            <img src="images/publishing.svg" />
          </div>
          <!-- right -->
          <div>
            <h4 class="support__h4">Publishing Houses</h4>
            <p>
              Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius, nobis natus nemo harum aspernatur
              deserunt.
            </p>
          </div>
        </div>
        <!-- support item -->
        <div class="support__feature dFlex">
          <!-- left -->
          <div class="support__icon">
            <img src="images/analytics.svg" />
          </div>
          <!-- right -->
          <div>
            <h4 class="support__h4">Analysing Needs</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est, expedita!</p>
          </div>
        </div>
        <!-- support item -->
        <div class="support__feature dFlex">
          <!-- left -->
          <div class="support__icon">
            <img src="images/engagement.svg" />
          </div>
          <!-- right -->
          <div>
            <h4 class="support__h4">Active Engagement </h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt, autem?</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- section 3 features -->
  <section class="features padding80 position-relative">
    <div class="container">
      <!-- top info -->
      <div class="features__top dFlexCenter">
        <h2 class="title">
          Our Features<br />
        
        </h2>
        <p>
          We offer a variety of interesting houses that you can<br />
          Select and confirm based on your needs and <br />
          your personal requiremnts.
        </p>
        <a class="buttons">Get Started</a>
      </div>
      <!-- bottom info -->
      <div class="features__bottom dFlexCenter dflexMobileCenter">
        <!-- left -->
        <div class="width30">
          <img src="images/feature2.png" />
          <h5 class="features__bottomh5">Buy House</h5>
          <p>Here customers can buy House of their needs</p>
        </div>
        <!-- mid -->
        <div class="width30">
          <img src="images/feature1.png" />
          <h5 class="features__bottomh5">Sell House</h5>
          <p>
            Here house owners can place their house on sell.
          </p>
        </div>
        <!-- right -->
        <div class="width30">
          <img src="images/feature3.png" />
          <h5 class="features__bottomh5">Rent House</h5>
          <p>
            Here we can find a deal in between house customers and owners.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- section 4 benefit -->
  <section class="benefit padding50">
    <div class="container dFlex">
      <!-- left -->
      <div class="width50">
        <h2 class="benefit__title title">
          What Benifit Will<br />
          You Get
        </h2>
        <!-- benefit list -->
        <ul>
          <li class="benefit__li dFlexCenter">
            <img src="images/checked.svg" />
            <span>Real Estate Marketing</span>
          </li>
          <li class="benefit__li dFlexCenter">
            <img src="images/checked.svg" />
            <span>Central Renting System</span>
          </li>
          <li class="benefit__li dFlexCenter">
            <img src="images/checked.svg" />
            <span>Organized Property Listing</span>
          </li>
          <li class="benefit__li dFlexCenter">
            <img src="images/checked.svg" />
            <span>Customer Search Filter</span>
          </li>
          <li class="benefit__li dFlexCenter">
            <img src="images/checked.svg" />
            <span>Online Transection</span>
          </li>
        </ul>
      </div>
      <!-- right -->
      <div class="width50">
        <img src="images/benefits2.png" />
      </div>
    </div>
  </section>

  <!-- section 5 tabs -->
  <section class="tabs padding80 position-relative">
    <div class="container">
      <h2 class="tabs__title title text-center">
        Choose Plan<br />
        That’s Right For You
      </h2>
      <p class="text-center">
        Choose plan that works best for you, feel free to contact us
      </p>

    </div>
  </section>



  <script src="js/main.js" async defer></script>
  <script src="js/form.js"></script>


</body>

</html>