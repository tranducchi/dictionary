@extends('master')
    @section('content')
        <div class="container">
            <div class="col-lg-8 offset-2">
                <form method="POST" class="text-center" action="{{action('DictionaryController@addKey')}}">
                @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">English</label>
                        <input type="text" class="form-control" name="english" aria-describedby="emailHelp" placeholder="Vd : Hello">
                        <small id="emailHelp" class="form-text text-muted">Please enter keyword for translate</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Vietnamese</label>
                        <input type="text" class="form-control" name="vietnamese" id="exampleInputPassword1" placeholder="The mean vietnamese">
                    </div>
                    <button type="submit" class="btn btn-primary">Add key</button>
                </form>
            </div>
        </div>
    @stop


