<title>DIU Healthline</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">

	<link rel="stylesheet" type="text/css" href="css/style2.css">

	

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

	<script src="https://kit.fontawesome.com/e9a2714ba8.js" crossorigin="anonymous"></script>

<div class="homepage-navbar">
		<div class="container">
			<div class="row">
				<div class="col-lg-3">
					<div class="logo">
					<a href="{{URL('index')}}"><img src="image/diu.png"></a>
					</div>
				</div>
				<div class="col-lg-9">
				<div class="home-menu-item">
						<a href="{{URL('index')}}">Home</a>
						<a href="{{URL('login')}}">Login</a>
						<a href="{{URL('register')}}">Register</a>

						<div class="col-md-2 logout">
            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <x-jet-dropdown-link href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                        this.closest('form').submit();">
                                        {{ __('Logout') }}
                                </x-jet-dropdown-link>
                            </form>
                </div>
					</div>
				</div>
			</div>

		</div>
</div>


        <div class="homepage-midle">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<h2 class="login-heading">Welcome to DIU HEALTHLINE</h2>
				</div>
			</div>
		</div>
	</div>
        
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="login-field bg-light rounded pt-4">

                <div class="loggin pb-3">
							<div class="login-name-pass border text-center h4 rounded mb-4">
							<div class="login-name">
								<div class="icon-part"> 
									<input id="email" class="block mt-1 w-full  input-mail pt-2  pb-2 pr-3" type="email" name="email" :value="old('email')" required autofocus    placeholder="Email" >
                                    <!-- <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus /> -->

								</div>
								
							</div>

				</div>
                <!-- <x-jet-label for="email" value="{{ __('Email') }}" /> -->
                <!-- <input class="input-mail pt-2  pb-2 pr-3" type="email" placeholder="Email" name="Email">

                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus /> -->
            </div>

            <div class="mt-4">
                <div class="login-name-pass border text-center h4 rounded mb-4 ">
							<div class="login-name ">
								<div class="icon-part ">
                                <input id="password" class="block mt-1 w-full input-mail pt-2 pb-2 pr-3" type="password" name="password" required autocomplete="current-password"    placeholder="Password" >

								</div>
								
							</div>

				</div>
                <!-- <x-jet-label for="password" value="{{ __('Password') }}" /> -->

                <!-- <input id="password" class="block mt-1 w-full input-mail pt-2 pb-2 pr-3" type="password" name="password" required autocomplete="current-password"    placeholder="Password" > -->

            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-jet-button class="ml-4 btn btn-primary mb-5">
                    {{ __('Log in') }}
                </x-jet-button>
            </div>
        </form>
   