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
					</div>
				</div>
			</div>

		</div>
</div>

<div class="homepage-midle">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<h2 class="login-heading">Create an account</h2>
				</div>
			</div>
		</div>
	</div>






        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div  class="login-field bg-light rounded">

            <div class="loggin pb-3">
							<div class="login-name-pass border text-center h4 rounded mb-4">
							<div class="login-name">
								<div class="icon-part"> 
									<!-- <input id="email" class="block mt-1 w-full  input-mail pt-2  pb-2 pr-3" type="email" name="email" :value="old('email')" required autofocus    placeholder="Email" > -->
                                    <x-jet-input id="name" class="block mt-1 w-full  input-mail pt-2  pb-2 pr-3" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" placeholder="name" />

                                    <!-- <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus /> -->

								</div>
								
							</div>

			</div>

            <div class="loggin pb-3">
							<div class="login-name-pass border text-center h4 rounded mb-4">
							<div class="login-name">
							
									<!-- <input id="email" class="block mt-1 w-full  input-mail pt-2  pb-2 pr-3" type="email" name="email" :value="old('email')" required autofocus    placeholder="Email" > -->
                                    <!-- <x-jet-input id="name" class="block mt-1 w-full  input-mail pt-2  pb-2 pr-3" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" placeholder="name" /> -->
                                    <x-jet-input id="email" class="block mt-1 w-full  input-mail pt-2  pb-2 pr-3" type="email" name="email" :value="old('email')" required  placeholder="Email" />

                                    <!-- <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus /> -->

							
								
							</div>

			</div>



            <div class="loggin pb-3">
							<div class="login-name-pass border text-center h4 rounded mb-4">
							<div class="login-name">
							
                                    <x-jet-input id="password" class="block mt-1 w-full  input-mail pt-2  pb-2 pr-3" type="password" name="password" :value="old('password')" required  placeholder="password" />

							</div>
                            </div>

			</div>


<div class="loggin pb-3">
							<div class="login-name-pass border text-center h4 rounded mb-4">
							<div class="login-name">
							
                                    <x-jet-input id="password_confirmation" class="block mt-1 w-full  input-mail pt-2  pb-2 pr-3" type="password" name="password_confirmation" :value="old('password')" required autocomplete="new-password"  placeholder="password_confirmation" />

							</div>
                            </div>

			</div>


            

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-jet-label for="terms">
                        <div class="flex items-center">
                            <x-jet-checkbox name="terms" id="terms"/>

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-jet-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-jet-button class="ml-4">
                    {{ __('Register') }}
                </x-jet-button>
            </div>
        </form>
        </div>