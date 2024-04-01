<!doctype html>
<html>

<head>

  <link rel="icon" href="images/GharNagar-logo.png" type="image/x-icon">

  <base href="/public">

  @include('home.homecss')

  <script src="https://unpkg.com/phosphor-icons"></script>
  <script src="js/search.js" defer></script>
</head>







<body>
  <section class="landingPage">

    @include('home.header')
    <div class="container dFlex">
      <!-- left -->
      <div class="width50">
        <h2 class="benefit__title title">
          Want to buy this house?<br />
        </h2>

        <!-- form is here -->
        <div class="contactbox card" style="width: 18rem;">
          <form id="contact-form">
            <input type="text" name="fullname" placeholder="Full Name" required>

            <input type="text" name="address" placeholder="Home Address" required>

            <input type="number" name="number" placeholder="Contact number" required>

            <input type="email" name="email" placeholder="Email Address">

            <button class="buttons" type="sumbit">Submit</button>

          </form>
        </div>
      </div>
      <!-- right -->
      <div class="container-catelog py-5">

      <div class="row row-cols-1 row-cols-md-3 g-4 py-5" >

      <div class="col">



      <div class="card" style="width: 18rem;">
        <img src="postimage/{{$house->image}}" class="card-img-top" alt="...">
        <div class="card-body">
          <h3 class="card-title"><strong>{{$house->title}}</strong></h3>
          <p> Location:{{$house->area}}</p>
          <p> House Details:{{$house->description}}</p>
          <h3>Price:Rs.{{$house->price}}</h3>
        </div>
      </div>

      </div>

      </div>

      </div>

    </div>
  </section>

  <footer id="footer-container">
    <span id="footer-comment">&copy; 2024 GharNagar. All rights reserved.</span>
  </footer>



  <script src="js/sorting.js"></script>
  <script src="js/main.js" async defer></script>
  <script src="js/form.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8N"></script>

</body>

</html>