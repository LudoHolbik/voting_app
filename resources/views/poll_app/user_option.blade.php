@extends('poll_app/wrapper')

@section('results')

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