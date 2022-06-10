@extends('layout.main')

@section('container')

<div class="row justify-content-center mt-3">
    <div class="col-md-5">
        <main class="form-registration">
            <form action="/register" method="POST">
                
                @csrf
                
                <h1 class="h3 mb-3 fw-normal text-center">Registration Form</h1>
            
                <div class="form-floating">
                    <input type="text" class="form-control rounded-top @error('name') is-invalid @enderror" name="name" id="nameinput" value="{{ old('name') }}" required>
                    <label for="nameinput">Nama User</label>
                    @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-floating">
                    <input type="text" class="form-control @error('username') is-invalid @enderror" name="username" id="usernameinput" value="{{ old('username') }}" required>
                    <label for="usernameinput">Username</label>
                    @error('username')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-floating">
                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="emailinput" value="{{ old('email') }}" required>
                    <label for="emailinput">Email address</label>
                    @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-floating">
                    <input type="password" class="form-control rounded-bottom @error('password') is-invalid @enderror" name="password" id="Password" required>
                    <label for="Password">Password</label>
                    @error('password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
            
                <button class="w-100 btn btn-lg btn-primary" type="submit">Register </button>
            </form>
            <small class="text-center d-block mt-3">Already registered ? <a href="/login">Login</a></small>
        </main>
    </div>
</div>

    
@endsection