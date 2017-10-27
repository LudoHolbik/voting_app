@extends('poll_app/wrapper')

@section('results')

<form action="#" method="post">

{{ csrf_field() }}

        <label for="option">Option</label>
        <br>
        <input type="text" name="option">
        <br><br>
        <input type="submit" name="submit">


</form>


<?php 

        //var_dump($_POST['poll_name']);

?>

       

@endsection 