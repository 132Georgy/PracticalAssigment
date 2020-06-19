@extends('master')

@section('title','Order Car')

@section('content')
<div class="starter-template">
                            <h1>Confirm Order:</h1>
    <div class="container">
        <div class="row justify-content-center">
            <p>Total Price: <b>0 Eur.</b></p>
            <form action="" method="POST">
                <div>
                    <p>Please write here you number and name:</p>

                    <div class="container">
                        <div class="form-group">
                            <label for="name" class="control-label col-lg-offset-3 col-lg-2">Name: </label>
                            <div class="col-lg-4">
                                <input type="text" name="name" id="name" value="" class="form-control">
                            </div>
                        </div>
                        <br>
                        <br>
                        <div class="form-group">
                            <label for="phone" class="control-label col-lg-offset-3 col-lg-2">Phone number: </label>
                            <div class="col-lg-4">
                                <input type="text" name="phone" id="phone" value="" class="form-control">
                            </div>
                        </div>
                        <br>
                        <br>
                                                    <div class="form-group">
                                <label for="name" class="control-label col-lg-offset-3 col-lg-2">Email: </label>
                                <div class="col-lg-4">
                                    <input type="text" name="email" id="email" value="" class="form-control">
                                </div>
                            </div>
                                            </div>
                    <br>
                    @csrf                    <input type="submit" class="btn btn-success" value="Confirm Order">
                </div>
            </form>
        </div>
    </div>
    </div>
@endsection
