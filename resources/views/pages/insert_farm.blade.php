@extends ('layouts.skeleton')


@section ('content')
<div class="col-8">

    <h1> REGISTER </h1>

    <form action="/create_farm" method="post">
        {{csrf_field()}}

        <div class="form-group">
            <label for="name">Farm Name:</label>
            <input class="form-control" name="name" id="name" type="text" placeholder="Full Name">
        </div>

        <div class="form-group">
            <label for="description">Farm Description:</label>
            <input class="form-control" name="description" id="description" type="text" placeholder="Description">
        </div>


        <div class="form-group">
            <button type="submit" class="btn btn-primary">Add</button>
        </div>



    </form>


</div>


    @endsection