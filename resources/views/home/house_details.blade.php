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
    <!-- header -->
    @include('home.header')
    <!-- section 1 intro -->
    <!--landing page-->

    <div class="container-catelog py-5">

      <div class="row row-cols-1 row-cols-md-3 g-4 py-5">

        <div class="col">
          <div class="card" style="width: 18rem;">
            <img src="postimage/{{$house->image}}" class="card-img-top" alt="...">
            <div class="card-body">
              <h3 class="card-title"><strong>{{$house->title}}</strong></h3>
              <p> Location:{{$house->area}}</p>
              <h3>Price:Rs.{{$house->price}}</h3>
            </div>

            <div class="mb-5 d-flex justify-content-around">




              @if (Route::has('login'))


              @auth
              <a class="buttons" href="{{url('buyform',$house->id)}}">Buy Now</a>


              @endauth

              @endif


            </div>
          </div>
        </div>
        <div>

        <h3><strong>House Description:</strong></h3>
        <p>{{$house->description}}</p>

        </div>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3571.8384006835204!2d87.27048757496684!3d26.46093747691934!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ef75980cef24a3%3A0x5e7c618f8150fad1!2sTintoliya!5e0!3m2!1sen!2snp!4v1709636477440!5m2!1sen!2snp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

      </div>



    </div>
    <!-- bottom intro section -->

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