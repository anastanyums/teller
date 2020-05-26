

@extends('layout')

            @section('title','New Complain')


            @section('complains')

<div class="container">
    <div class="row">
        <div class="col-6 p-4">
            <h3>test</h3>
        </div>

        <div class="col-6 p-4">



            <form  name="complain" method="POST" target="/" >
                <div class="form-group">
                    <label> Complain </label>

                    <input type="text" name="complain" />
                </div>
                <div class="form-group">
                    <label> Details </label>

                    <textarea type="text" name="details"> |</textarea>
                </div>
                <div class="form-group">
                    <label> Add file </label>

                    <input type="file" name="details" />
                </div>
                <div class="form-group">
                    <input type="submit" name="submit" />
                </div>

            </form>

        </div>
    </div>
</div>

@endsection
