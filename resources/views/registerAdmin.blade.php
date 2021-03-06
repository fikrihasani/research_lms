
@extends('template')
@section('title')
    {{ "Registrasi Admin" }}
@endsection
@section('usersection')
    <div class="container">
        <form action="{{route('register.admin.store')}}" method="post" style="padding:20px">
            @csrf
            <div style="margin-bottom:10px">
                <div class="form-floating" style="margin: 5px">
                    <input type="text" name="name" id="name" required class="form-control @error('name') is-invalid @enderror" placeholder="Name" value="{{old('name')}}">
                    @error('name')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                    <label for="name">Nama</label>
                </div>
                <div class="form-floating" style="margin: 5px">
                    <input type="text" name="email" id="email" required class="form-control @error('email') is-invalid @enderror" placeholder="email@domain.com" value="{{old('email')}}">
                    @error('email')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                    <label for="email">Email</label>
                </div>
                <div class="form-floating" style="margin: 5px">
                    <input type="password" name="password" id="password" required class="form-control @error('password') is-invalid @enderror" placeholder="Password" value="{{old('password')}}">
                    @error('password')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                    <label for="password">Password</label>
                </div>
            </div>
            <div style="margin:5px">
                <button type="submit" class="btn btn-primary" style="float: right">Registrasi Admin</button>
            </div>
        </form>
    </div>
@endsection