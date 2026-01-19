@extends('layouts.main')

@section('content')
<div class="container mt-5 mb-5">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card shadow-lg">
                <div class="card-body p-5">
                    <h2 class="text-center mb-4" style="color: #0066CC; font-weight: 800;">🔐 Login</h2>

                    @if($errors->any())
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>Login Gagal!</strong>
                            <ul class="mb-0 mt-2">
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    <form method="POST" action="{{ route('login.attempt') }}">
                        @csrf
                        <div class="mb-4">
                            <label for="email" class="form-label">Email Address</label>
                            <input type="email" class="form-control form-control-lg" id="email" name="email" 
                                   value="{{ old('email') }}" placeholder="Masukkan email Anda" required autofocus>
                        </div>
                        
                        <div class="mb-4">
                            <label for="password" class="form-label">Password</label>
                            <div class="input-group input-group-lg">
                                <input type="password" class="form-control" id="password" name="password" 
                                       placeholder="Masukkan password" required>
                                <button class="btn btn-outline-secondary" type="button" id="togglePassword">
                                    <i class="fa fa-eye"></i>
                                </button>
                            </div>
                        </div>
                        
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="remember" name="remember">
                            <label class="form-check-label" for="remember">Ingat saya</label>
                        </div>
                        
                        <button type="submit" class="btn btn-primary w-100 btn-lg mb-3">Login</button>
                    </form>

                    <hr>
                    <p class="text-center text-muted mb-3" style="font-weight: 600;">Akun Demo:</p>
                    <div style="background-color: #F5FAFE; padding: 15px; border-radius: 8px; border-left: 4px solid #0066CC;">
                        <p class="mb-1"><strong>Email:</strong> admin@example.com</p>
                        <p class="mb-0"><strong>Password:</strong> password123</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
document.getElementById('togglePassword').addEventListener('click', function() {
    const passwordInput = document.getElementById('password');
    const toggleBtn = this;
    
    if (passwordInput.type === 'password') {
        passwordInput.type = 'text';
        toggleBtn.innerHTML = '<i class="fa fa-eye-slash"></i>';
    } else {
        passwordInput.type = 'password';
        toggleBtn.innerHTML = '<i class="fa fa-eye"></i>';
    }
});
</script>

<style>
.input-group .btn-outline-secondary {
    border-color: #ADD8E6;
    color: #0066CC;
}
.input-group .btn-outline-secondary:hover {
    background-color: #F5FAFE;
    border-color: #0066CC;
    color: #0066CC;
}
</style>
@endsection
