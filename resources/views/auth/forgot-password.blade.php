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
        width: 400px;
        margin: 0 auto;
        background-color: #ffffff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .form-container label {
        font-weight: bold;
    }

    .form-container input[type="email"] {
        width: 100%;
        padding: 8px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }

    .form-container .description {
        margin-bottom: 20px;
    }

    .form-container .reset-button {
        text-align: right;
        margin-top: 10px;
        text-align: center;

    }

    .form-container .reset-button button {
        font-size: 16px;
        padding: 8px 16px;
        border-radius: 6px;
        background-color: #167CA5;
        color: white;
        border: none;
        cursor: pointer;
    }

    .form-container .reset-button button:hover {
        background-color: #45a049;
    }
</style>

<body>
    <div class="login-container">
        <img src="{{asset('img/halconLogo.png')}}" class="logo">
    </div>
    <br/>

    <div class="form-container">
        <div class="description">
            <div class="mb-4 text-sm text-gray-600 dark:text-gray-400">
                {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
            </div>
        </div>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <div class="reset-button">
                <x-primary-button>
                    {{ __('Email Password Reset Link') }}
                </x-primary-button>
            </div>
        </form>
    </div>
</body>
