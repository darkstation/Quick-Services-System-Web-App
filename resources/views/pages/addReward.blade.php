@extends('layouts.default')

@section('content')
<br>
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <h4 style="text-align: center;">Add Rewards</h4><br/>
            <form class="form-horizontal" name="addReward" method="post" action="{{ url('/rewards/add') }}">
                <div class="form-group">
                    <input type="text" name="title" class="form-control" placeholder="Title">
                </div>
                <div class="form-group">
                    <input type="text" name="cost" class="form-control" placeholder="Cost">
                </div>
                <div class="form-group">
                    <label>Description:</label>
                 <textarea name="description" class="form-control"></textarea>
                </div>
                
                <div class="form-group">
                <button type="submit" value="Submit" name="submit" class="btn btn-success">Submit</button>
                </div>
    </form>
        </div>
    </div>
</div>
@stop