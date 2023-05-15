<style>
    body {
        background-image: url("{{asset('img/BackGroundLogin.jpg')}}");
        background-size: cover;
        background-repeat: no-repeat;
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
    }
    
    .login-container {
        text-align: center;
        margin-top: 100px;
    }

    .logo {
        max-width: 10%;
        height: auto;
    }

    .form-container {
        margin-top: 20px;
        width: 300px;
        margin-left: auto;
        margin-right: auto;
        background-color: #ffffff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .form-container label {
        font-weight: bold;
    }

    .form-container input[type="email"],
    .form-container input[type="password"] {
        width: 100%;
        padding: 8px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }

    .form-container .remember-me {
        margin-top: 10px;
    }

    .form-container .forgot-password {
        margin-top: 10px;
        display: inline-block;
        text-decoration: underline;
        color: #636b6f;
    }

    .form-container .login-button {
        margin-top: 20px;
        width: 100%;
        text-align: center;

    }
    .form-container .login-button button {
        width: 100%;
        font-size: 18px;
        padding: 10px;
        border-radius: 6px;
        background-color: #167CA5;
        color: white;
        border: none;
        cursor: pointer;
    }
    .form-container .login-button button:hover {
        background-color: #45a049;
    }
</style>

<body>
    <div class="login-container">
        <img src="{{asset('img/halconLogo.png')}}" class="logo">
    </div>
    <br/>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <div class="form-container">
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" class="block mt-1" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('Password')" />

                <x-text-input id="password" class="block mt-1"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Remember Me -->
            <div class="remember-me">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me')
}}</span>
            </label>
        </div>

      
<div class="login-button">

            <x-primary-button class="ml-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
<br/>
        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif
        </div>
    </form>
