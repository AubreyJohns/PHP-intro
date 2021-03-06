<!DOCTYPE html>
<html>
  <head>  
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Laravel Cars App">
    <meta name="author" content="Aubrey J">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <!-- Bootstrap core CSS -->
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>All reviews</title>
  </head>
  <body>
    <div id="app">
    <main role="main" class="container" class="py-4">

      <div class="starter-template">
        <div class="row">
           <div class="col-sm-8">
           <table class="table">
          <thead class="thead-dark">
            <tr>
              <td><b>Review ID</b></td>
              <td><b>Make</b></td>
              <td><b>Model</b></td>
              <td><b>Review</b></td>
              <td><b>Car ID</b></td>
            </tr>
          </thead>
          <tbody>
          @foreach ($reviews as $review)
            <tr>
              <td>{{$review->id}}</td>
              <td>{{$review->make}}</td>
              <td>{{$review->model}}</td>
              <td>{{$review->review}}</td>
              <td>{{$review->car_id}}</td>
            </tr>
          @endforeach
          </tbody>
        </table>
        <h1>Enter a review id to get car details</h1>
        <form action="{{ route('cardetailsAction') }}" method="get">
     {{ csrf_field() }}
      <div class="form-group">
        <label for="review_id">Review ID</label>
        <input type="text" class="form-control" id="review_id"  name="review_id">
      </div>
      @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
      @endif
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
       		</div>
       	</div>
      </div>

    </main><!-- /.container -->
    </div>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  </body>
</html>