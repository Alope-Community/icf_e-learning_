@extends('layouts.app')

@section('content')
    <div class="flex flex-col items-center justify-center min-h-screen w-screen">
        <h2 class="text-2xl font-bold text-center my-6">Registrasi sebagai Guru</h2>
        <form method="POST" action="{{ route('register.teacher.submit') }}"
            class="max-w-lg mx-auto bg-white p-6 rounded-lg shadow-xl border-2">
            @csrf

            <div class="flex gap-5">

                <!-- NUPTK -->
                <div class="mb-4">
                    <label for="nuptk" class="block text-gray-700 font-medium mb-2">NUPTK</label>
                    <input id="nuptk" type="number"
                        style="appearance: none; -moz-appearance: textfield; -webkit-appearance: none;"
                        class="w-full border rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-indigo-500 @error('nuptk') border-red-500 @enderror"
                        name="nuptk" value="{{ old('nuptk') }}" required autofocus>
                    @error('nuptk')
                        <span class="text-sm text-red-500">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Nama -->
                <div class="mb-4">
                    <label for="name" class="block text-gray-700 font-medium mb-2">Nama</label>
                    <input id="name" type="text"
                        class="w-full border rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-indigo-500 @error('name') border-red-500 @enderror"
                        name="name" value="{{ old('name') }}" required>
                    @error('name')
                        <span class="text-sm text-red-500">{{ $message }}</span>
                    @enderror
                </div>

            </div>

            <!-- Email -->
            <div class="mb-4">
                <label for="email" class="block text-gray-700 font-medium mb-2">Email</label>
                <input id="email" type="email"
                    class="w-full border rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-indigo-500 @error('email') border-red-500 @enderror"
                    name="email" value="{{ old('email') }}" required>
                @error('email')
                    <span class="text-sm text-red-500">{{ $message }}</span>
                @enderror
            </div>

            <div class="flex gap-5">

                <!-- Password -->
                <div class="mb-4 w-full relative">
                    <label for="password" class="block text-gray-700 font-medium mb-2">Password</label>
                    <input id="password" type="password"
                        class="w-full border rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-indigo-500 @error('password') border-red-500 @enderror"
                        name="password" required>
                    @error('password')
                        <span class="text-sm text-red-500">{{ $message }}</span>
                    @enderror

                    <!-- Toggle Password Visibility -->
                    <button type="button" class="absolute right-3 top-10 text-gray-500" id="toggle-password"
                        onclick="visiblity('password', 'svg-eye-pass')">
                        <svg id="svg-eye-pass" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                        </svg>
                    </button>
                </div>

                <!-- Konfirmasi Password -->
                <div class="mb-4 w-full relative">
                    <label for="password_confirmation" class="block text-gray-700 font-medium mb-2">Konfirmasi
                        Password</label>
                    <input id="password_confirmation" type="password"
                        class="w-full border rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-indigo-500 @error('password_confirmation') border-red-500 @enderror"
                        name="password_confirmation" required>
                    @error('password_confirmation')
                        <span class="text-sm text-red-500">{{ $message }}</span>
                    @enderror

                    <button type="button" class="absolute right-3 top-10 text-gray-500" id="toggle-password-confirmation"
                        onclick="visiblity('password_confirmation', 'svg-eye-confirm-pass')">
                        <svg id="svg-eye-confirm-pass" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                        </svg>
                    </button>

                </div>

            </div>

            <button type="submit"
                class="w-full bg-indigo-500 hover:bg-indigo-600 text-white font-medium py-2 rounded-lg transition mt-5">
                Register
            </button>
        </form>
    </div>

    <script>
        function visiblity(idPassField, idIcon) {
            const passwordField = document.getElementById(idPassField);
            const eyeIconPass = document.getElementById(idIcon);

            const type = passwordField.type === 'password' ? 'text' : 'password';
            passwordField.type = type;

            if (type === 'text') {
                eyeIconPass.innerHTML = `
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.98 8.223A10.477 10.477 0 0 0 1.934 12C3.226 16.338 7.244 19.5 12 19.5c.993 0 1.953-.138 2.863-.395M6.228 6.228A10.451 10.451 0 0 1 12 4.5c4.756 0 8.773 3.162 10.065 7.498a10.522 10.522 0 0 1-4.293 5.774M6.228 6.228 3 3m3.228 3.228 3.65 3.65m7.894 7.894L21 21m-3.228-3.228-3.65-3.65m0 0a3 3 0 1 0-4.243-4.243m4.242 4.242L9.88 9.88" />
                `
            } else {
                eyeIconPass.innerHTML = `
                <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                `
            }
        }
    </script>
@endsection
