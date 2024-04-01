<!DOCTYPE html>
<html>

<head>
    @include('admin.css')

    <style type="text/css">
        .house_title {
            font-size: 30px;
            font-weight: bold;
            text-align: center;
            padding: 30px;
            color: white;
        }

        .div_center {
            text-align: center;
            padding: 30px;
        }

        label {
            display: inline-block;
            width: 200px;
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

            @if(session()->has('success'))

            <div class="alert alert-success">

                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>

                {{session()->get('success')}}

            </div>


            @endif

            @if(session()->has('error'))

            <div class="alert alert-danger">

                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>

                {{session()->get('error')}}

            </div>


            @endif

            <h1 class="house_title">Add House</h1>

            <div>

                <form action="{{url('add_house')}}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="div_center">

                        <label for="">House For</label>
<select name="title" style="Width:150px">
    <option value="rent"> Rent</option>
    <option value="Sell"> Sell</option>
</select>
                    </div>

                    <div class="div_center">

                        <label for="">Address</label>
                        <input type="text" name="area">
                    </div>

                    <div class="div_center">

                        <label for="">House Description</label>
                        <textarea name="description" id=""></textarea>
                    </div>

                    <div class="div_center">

                        <label for="">Price </label>
                        <input type="text" name="price" placeholder="In Rupees">
                    </div>

                    <div class="div_center">

                        <label for="">Add Image</label>
                        <input type="file" name="image" multiple>

                    </div>

                    <div class="div_center">

                        <input type="submit" class="btn btn-primary">

                    </div>
                </form>



            </div>

        </div>


        @include('admin.footer')
</body>

</html>