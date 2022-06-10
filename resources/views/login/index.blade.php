@extends('layout.main')

@section('container')

<div class="row justify-content-center mt-3">
    <div class="col-md-4">
        <main class="form-signin">
            {{-- //menampilkan session sukses jika registrasi berhasil --}}
            @if (session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            {{-- //menampilkan Loginfailed jika login gagal --}}
            @if (session()->has('Loginfailed'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('Loginfailed') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            
            <form action="/login" method="POST">
                @csrf
                <h1 class="h3 mb-3 fw-normal text-center">Please login</h1>
            
                <div class="form-floating">
                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="floatingInput" placeholder="name@example.com" value="{{ old('email') }}" required autofocus>
                    <label for="floatingInput">Email address</label>
                    @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-floating">
                    <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password" required>
                    <label for="floatingPassword">Password</label>
                </div>
            
                <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
            </form>
            <small class="d-block text-center mt-3">Not registered ? <a href="/register">Register now !</a></small>
        </main>
    </div>
</div>

    
@endsection