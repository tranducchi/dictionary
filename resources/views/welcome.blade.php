@extends('master')
    @section('content')
        <div class="container">
            <div class="col-lg-8 offset-2">
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                @if (session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif
                <a href="/add" class="btn btn-info text-white">+) Add Keyword</a>
                <form  class="text-center" method="get" action="{{action('DictionaryController@checkKey')}}" >
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">English</label>
                        <input type="text" class="form-control" name="english" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Vd : Hello">
                        <small id="emailHelp" class="form-text text-muted">Please enter keyword for translate</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Vietnamese</label>
                        <input type="text" class="form-control" value ="{{session('mean') ?? ''}}"
                      
                         name="vietnamese" id="exampleInputPassword1" placeholder="The mean Vietnamese">
                    </div>
                    <button type="submit" class="btn btn-primary">Translate</button>
                </form>
            </div>
        </div>
    @stop


