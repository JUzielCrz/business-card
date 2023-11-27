<x-panel-layout>
    <style>
        body{
            background-color: #08720b;
        }

        @media(min-width: 768px){

            .card{
                width: 80%;
            }
        }
        
        h1{
            margin-bottom: 50px;
        }

        .img-col{
            max-width: 17rem;
        }
    </style>
    <main>
        <section class="container text-center ">
            <div class="card mt-5 rounded-5 ">
                <div class="card-body p-0">
                    <div class="row  align-items-center">
                        <div class="col d-none d-sm-none d-md-block text-center ">
                            <img src="img/login/welcome.png" class="m-0 p-0 img-fluid img-col rounded-start-5" alt="login form" alt="">
                        </div>
                        <div class="col position-relative p-5">
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <h1>Inicio de Sesión</h1>
                                <div class="form-outline">
                                    
                                </div>
                                <div class="form-floating mb-3">
                                    <input class="input-text  form-control" id="email"  type="email" name="email" placeholder='nombre@ejemplo.com' required autofocus >
                                    <label for="floatingInput" class="ms-2 mb-2">Correo</label>
                                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                </div>

                                <div class="form-floating mb-3">
                                    <input class="input-text form-control" id="password" 
                                    type="password"
                                    name="password"
                                    required autocomplete="current-password" placeholder='Contraeña' >
                                    <label for="floatingInput" class="ms-2 mb-2">Contraeña</label>
                                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                </div>   
        
                                <!-- Remember Me -->
                                <div class="form-outline my-4">
                                    <input id="remember_me" type="checkbox" class="form-check-input me-1" name="remember">
                                    <span class="form-check-label">{{ __('Recuerdame') }}</span>
                                </div>  

                                <x-button-accept  type="submit">
                                    {{ __('Log in') }}
                                </x-button-accept>

                                <div class="flex items-center justify-end mt-4">
                                    @if (Route::has('password.request'))
                                        <a class="" href="{{ route('password.request') }}">
                                            {{ __('¿ Olvidó su nombre de usuario/contraseña?') }}
                                        </a>
                                    @endif
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</x-panel-layout>