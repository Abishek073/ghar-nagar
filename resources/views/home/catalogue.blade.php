<section id="house" class="tabs padding80 position-relative">
    <div class="container">
        <h2 class="title text-center">
            Choose The Best House For Yourself
        </h2>
        <br><br>
        <div>


            <form action="{{url('house_search')}}" method="GET">
                @csrf
                <input type="text" class="form-control" name="search" placeholder="Search....">

                <div class="input-group-addon">
                    <span class="input-group-text"><i class="ti-search" ></i></span>

                </div>
            </form>

           
        </div>
    </div>
    </div>

</section>

<div class="container-catelog py-5">

    <div class="row row-cols-1 row-cols-md-3 g-4 py-5">

        @foreach( $house as $houses )
        <div class="col">
            <div class="card">
                <img src="postimage/{{$houses->image}}" class="card-img-top" alt="..." width="100px" height="100px">
                <div class="card-body">
                    <h3 class="card-title"><b>{{$houses->title}}</b></h3>
                    <p> Location:{{$houses->area}}</p>
                    <h3>Price:Rs.{{$houses->price}}</h3>
                </div>

                <div class="mb-5 d-flex justify-content-around">




                 
                    <a class="buttons" href="{{url('house_details',$houses->id)}}">View Details</a>

                </div>
            </div>
        </div>

        @endforeach


        <div style="padding: 10px;">
        {!!$house->withQueryString()->links('pagination::bootstrap-5')!!}

        </div>








    </div>

</div>