<!doctype html>
<html>

<head>

  <link rel="icon" href="images/GharNagar-logo.png" type="image/x-icon">

  @include('home.homecss')

  <script src="https://unpkg.com/phosphor-icons"></script>
  <script src="js/search.js" defer></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body>
  <section class="landingPage">
    <!-- header -->
    @include('home.header')
    <!-- section 1 intro -->
    <!--landing page-->
    <section class="intro padding50 position-relative " id="home">
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
            <a class="buttons" href="#house">Buy House</a>
            <a class="intro__play dFlexCenter dflexMobileCenter">
              <a class="buttons" href="{{url('sellform')}}">Sell House</a>
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
  @include('home.features')

  <!-- section 3 features -->


  <!-- section 4 benefit -->


  <!-- section 5 tabs -->
  @include('home.catalogue')


  <!-- Comment and reply system starts here -->

  <div style="text-align: center; padding-bottom:30px;">

    <h1 style="font-size: 30px; text-align:center; padding-top:20px; padding-bottom:20px; "><strong>Comments</strong></h1>

    <form action="{{url('add_comment')}}" method="POST">
      @csrf

      <textarea style="height: 150px; width:600px;" placeholder="Comment something here" name="comment"></textarea>

      <br>

     <input type="submit" class="btn btn-primary" value="Comment">

    </form>


  </div>

  <div style="padding-left: 20%;">

    <h1 style="font-size: 20px; padding-bottom: 20px;">All Comments</h1>


    @foreach($comment as $comment)

    <div>

      <b>{{$comment->name}}</b>
      <p>{{$comment->comment}}</p>

      <a style="color:#2699e6;" href="javascript::void(0);" onclick="reply(this)" data-commentid="{{$comment->id}}">Reply</a>

      @foreach($reply as $rep)

      @if($rep->comment_id==$comment->id)

      <div style="padding-left: 3%; padding-bottom:10px; ">

      <b>{{$rep->name}}</b>
      <p>{{$rep->reply}}</p>
      <a style="color:#2699e6;" href="javascript::void(0);" onclick="reply(this)" data-commentid="{{$comment->id}}">Reply</a>



      </div>
      @endif

      @endforeach

    </div>
    <br>

    @endforeach

   <!-- Reply Textbox -->

    <div style="display: none;" class="replyDiv">

    <form action="{{url('add_reply')}}" method="POST">
      @csrf

    <input type="text" id="commentId" name="commentId" hidden="">

      <textarea style="height: 100px; width:500px;" name="reply" placeholder=" Write something here"></textarea>

      <br>

      <button type="submit" class="btn btn-primary ">Reply</button>
      <a href="javascript::void(0);" class="btn " onclick="reply_close(this)">Close</a>

    </form>

    </div>

  </div>









  <!-- Comment and reply system ends here -->

  @include('home.sellform')

  @include('home.aboutus')

  <footer id="footer-container">
    <span id="footer-comment">&copy; 2024 GharNagar. All rights reserved.</span>
  </footer>

  <script>

    function reply(caller)
    {
      document.getElementById('commentId').value=$(caller).attr('data-Commentid');
      $('.replyDiv').insertAfter($(caller));
      $('.replyDiv').show();

    }

    function reply_close(caller)
    {
      $('.replyDiv').hide();

    }
  </script>

<script>
        document.addEventListener("DOMContentLoaded", function(event) { 
            var scrollpos = localStorage.getItem('scrollpos');
            if (scrollpos) window.scrollTo(0, scrollpos);
        });

        window.onbeforeunload = function(e) {
            localStorage.setItem('scrollpos', window.scrollY);
        };
    </script>



  <script src="js/sorting.js"></script>
  <script src="js/main.js" async defer></script>
  <script src="js/form.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8N"></script>


</body>

</html>