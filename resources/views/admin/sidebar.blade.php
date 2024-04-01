<nav id="sidebar">
        <!-- Sidebar Header-->
        <div class="sidebar-header d-flex align-items-center">
          
          <div class="title">


           <strong  class="text-primary">HELLO !</strong>
          <div class="brand-text brand-big visible text-uppercase"><strong class="text-primary">{{ Auth::user()->name }}</strong></div>

          
           <!-- <p>Web Designer</p> -->
          </div>
        </div>
        <!-- Sidebar Navidation Menus-->
        <ul class="list-unstyled">
                <li><a href="{{url('welcomepage')}}"> <div class="text-white">Dashboard </div></a></li>
                <li><a href="{{url('post_page')}}"> <div class="text-white">Add House </div></a></li>
                <li><a href="{{url('show_post')}}"> <div class="text-white">Show House </div> </a></li>
                <!-- <li><a href=""> <div class="text-white">Approve Post </div></a></li> -->
                  
                
        </ul>
      </nav>