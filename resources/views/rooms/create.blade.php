@extends ('layout.header')

@section ('content')

    <form method="POST" action="/organizations">

        {{ csrf_field() }}

        <div class="parent-div"> 
        
        <div class="login-form">

        <h1 class="title2 grey-back">Rooms</h1>
        
        <div class="grey-back buffer">

            <div class="form-group">
                <label for="organizationName">Room Number:</label>
                <input type="text" class="form-control" id="organizationName" name="organizationName" required>
            </div>

            <div class="form-group">
                <label for="organizationName">Room Type:</label>
                <input type="text" class="form-control" id="organizationName" name="organizationName" required>
            </div>

            <button type="submit" class="btn btn-default">Submit</button>

        </div>

        </div>

        </div>

    </form> 


@endsection
