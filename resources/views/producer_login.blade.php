@extends('layouts.base')
@section('title', "Producer Login")
@section("content")
    <div class="container">
        <div class="card col-md-offset-3 col-md-6">
            <div class="card-title">Login</div>
            <div class="card-body">
                @if(count($errors) > 0)
                    @foreach($errors->all() as $error)
                        <div class="alert alert-danger">
                            {{$error}}
                        </div>
                    @endforeach
                @endif
                <form action="" class="form" method="post">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="text" class="form-control" name="email" required>
                    </div>

                    <div class="form-group">
                        <label for="">Password</label>
                        <input type="password" class="form-control" name="password" required>
                    </div>

                    <button class="btn btn-primary">Login</button>
                </form>


            </div>
            Don't have an account yet?
            <div>
                Register
                <a href="{{url('producer/register')}}">here</a>
            </div>
        </div>
    </div>
@endsection