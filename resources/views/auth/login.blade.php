@extends('layouts.app')

@section('content')

<div class="w-full flex h-full bg-black">
    <div class="w-4/5 flex justify-center mx-auto my-20 bg-black">
        <div class="w-full my-auto max-w-xs">
            <form method="POST" action="{{ route('login') }}" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                @csrf
                <div class="mb-4">
                    <label for="email" class="block text-gray-700 text-sm font-bold mb-2">
                        {{ __('E-Mail Address') }}
                    </label>
                    <input id="email" type="email" class="@error('email') is-invalid @enderror shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Your Email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="password" class="block text-gray-700 text-sm font-bold mb-2">
                        {{ __('Password') }}
                    </label>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror shadow appearance-none border border-red-500 rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" placeholder="Password" name="password" required autocomplete="current-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <p class="text-red-500 text-xs italic">Please choose a password.</p>
                </div>

                <div class="flex items-center">
                    <div class="mr-12">
                        <input class="mr-1" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                        <label class="form-check-label" for="remember">
                            {{ __('Remember Me') }}
                        </label>
                    </div>
                    <button type="submit" class="bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded">
                        {{ __('Login') }}
                    </button>


                </div>

                <div class="my-3 text-center">
                    @if (Route::has('password.request'))
                        <a class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    @endif
                </div>
                <div class="flex items-center mt-2">
                    <p class="text-gray-700 text-xs italic">Don't have an account? Please register.</p>
                    <a href="{{ route('register') }}" class="mr-2 inline-block align-baseline font-bold text-sm text-gray-700 hover:text-black" >
                        {{ __('Register') }}
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
