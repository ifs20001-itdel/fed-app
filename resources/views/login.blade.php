<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    @vite(['resources/js/app.js'])
    @vite(['resources/css/app.css'])
</head>

<body>
    <div class="bg-[url('/public/storage/bg_login.jpg')] bg-opacity-50 bg-cover justify-center flex py-5 h-screen" >
        <div class="w-2/6 flex rounded bg-white shadow-2xl p-5 self-center">
            <div>
                <img src="{{ asset('storage/logodel.jpg') }}" alt="Logo Del" width="20%" class="m-auto mb-3">
                <div class="text-center mb-5">
                    <h3>Rencana Kerja dan Evaluasi  Dosen</h3>
                    <h5>Institut Teknologi Del</h5>
                </div>
                <form action="/login/auth" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="username"><strong>Username</strong></label>
                        <input type="text" id="username" name="usernameLogin"
                            class="form-control @error('password') is-invalid @enderror" value="@error('password'){{ old('usernameLogin') }}@enderror"
                            placeholder="Silahkan masukkan username anda" onclick="removeRedBorder()">
                        <div class="invalid-feedback"></div>
                    </div>
                    <div class="mb-4">
                        <label for="password"><strong>Pasword</strong></label>
                        <input type="password" id="password" name="passwordLogin"
                            class="form-control @error('password') is-invalid @enderror"
                            placeholder="Silahkan masukkan password anda" onclick="removeRedBorder()">
                        <div class="invalid-feedback">
                            Username atau password salah
                        </div>

                    </div>
                    <button type="submit" class="bg-blue-600 hover:bg-blue-700 px-5 py-1.5 w-100 text-white rounded ">
                        Login
                    </button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
