<!DOCTYPE html>
<html>

<head>

<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    @include('admin.css')

    <style type="text/css">
        .title_deg {
            font-size: 30px;
            font-weight: bold;
            color: white;
            padding: 30px;
            text-align: center;
        }

        .table_deg {
            border: 1px solid white;
            width: 80%;
            text-align: center;
            margin-left: 70px;
        }

        .th_deg {
            background-color: white;
        }

        .img_deg {
            height: 100px;
            width: 150px;
            padding: 10px;
        }

        .th_des{
            padding: 15px;
        }
    </style>
</head>

<body>
    @include('admin.header')

    <div class="d-flex align-items-stretch">
        <!-- Sidebar Navigation-->

        @include('admin.sidebar')

        <!-- Sidebar Navigation end-->

        <div class="page-content">

        @if(session()->has('message'))

<div class="alert alert-danger">

    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>

    {{session()->get('message')}}

</div>

@endif

            <h1 class="title_deg">All Houses</h1>

            <table class="table_deg">

                <tr class="th_deg">
                    <th class="th_des">House Type</th>
                    <th class="th_des">Address</th>
                    <th class="th_des">Description</th>
                    <th class="th_des">Price</th>
                    <th class="th_des">Uploaded By</th>
                    <th class="th_des">Post Status</th>
                    <th class="th_des">User Type</th>
                    <th class="th_des">Image</th>
                    <th class="th_des">Edit</th>
                    <th class="th_des">Delete</th>


                </tr>

                @foreach($postdata as $postdata)

                <tr>
                    <td>{{$postdata->title}}</td>
                    <td>{{$postdata->area}}</td>
                    <td>{{$postdata->description}}</td>
                    <td>{{$postdata->price}}</td>
                    <td>{{$postdata->name}}</td>
                    <td>{{$postdata->post_status}}</td>
                    <td>{{$postdata->usertype}}</td>
                    <td>
                        <img class="img_deg" src="postimage/{{$postdata->image}}">

                    </td>
                    <td>
                        <a href="{{url('edit_post',$postdata->id)}}" class="btn btn-success" >Edit</a>
                    </td>
                    
                    <td>
                        <a href="{{url('delete_post',$postdata->id)}}" class="btn btn-danger" onclick="confirmation(event)">Delete</a>
                    </td>
                </tr>

                @endforeach





            </table>

        </div>



        @include('admin.footer')

<!-- For SweetAlert Message -->       
 <script>

            function confirmation(ev)
            {
                ev.preventDefault();

                var urlToRedirect=ev.currentTarget.getAttribute('href');

                console.log(urlToRedirect);

                swal({

                    title:"Are you sure to Delete this post?" ,
                
                    text: "You won't be able to revert this again!" ,
                
                    icon: "warning",
                
                    buttons:true,

                    dangerMode:true,

                })

                .then((willCancel)=>
                {
                    if(willCancel)
                    {
                        window.location.href=urlToRedirect;
                    }

                })
            }




        </script>


</body>

</html>