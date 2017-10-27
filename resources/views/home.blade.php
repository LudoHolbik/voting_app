@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
<div class="new_poll">
            <button type="button" class="button" id="create_table">Create new poll</button>
        </div>
        <div class="see_all_poll">
            <button type="button" class="button" id="show_polls">Show all polls</button>
        </div>

        <form action="#" method="post">
        {{ csrf_field() }}
            <label for="poll_name">Poll Name</label>
                <br>
            <input type="text" name="poll_name">
                <br><br>
            <label for="desc">Description</label>
                <br>
         <input type="text" name="desc">
                <br><br>
            <input type="submit" value="Submit">
        </form>
@endsection
