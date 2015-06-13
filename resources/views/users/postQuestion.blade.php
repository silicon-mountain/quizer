
<form class="form-horizontal" action="{{URL::to('question')}}" method="post">
	<input type="hidden" name="_token" value="{{Session::token()}}">
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">To</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="to">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">From</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="from">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Question</label>
    <div class="col-sm-10">
      <textarea class="form-control" rows="3" name="question"></textarea>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Sign in</button>
    </div>
  </div>
