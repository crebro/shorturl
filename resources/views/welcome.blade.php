@extends('base')


@section('content')
<div class="jumbotron">
    <div class="container">

        <h1 class="display-4"> Shorten Your Url </h1>
        <hr class="my-2 ">
        <p class="lead">Short Url Allows Your To Create Your Own Short Url for your long url with Just a Click. You can create your own by using the form given below. No Registration Required </p>
        <hr class="my-4">
        <form>
          
            <div class="form-group">
              <label for="exampleInputPassword1"> Enter Your Long Url Here </label>
              <input type="text" class="form-control"  name="url" id="exampleInputPassword1" placeholder="foreg: https://www.example.com">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1"> Enter a Description for Your Url (Optional. Other Users Will Be Able to find your rul using this Description) </label>
              <input name="description" type="text" class="form-control" id="exampleInputPassword1" placeholder="Description Here ..."> 
            </div>
            <div class="form-group form-check">
              <input name="allowShow" type="radio" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Share This With Other Users</label> <br>
              <input name="allowShow" type="radio" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1"> Dont Share This with Other Users </label>
            </div>
            <p>Note: By proceeding you agree to all of our terms of service and privacy Policy That doesnt Exist</p>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
  </div>
@endsection