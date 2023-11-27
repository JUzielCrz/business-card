
<div class="card shadow rounded-0 m-md-5"> 
    <div class="card-header">
        <h4>INFORMACIÓN</h4>
        <p class="mt-1">
            {{ __("Actualice la información de perfil y la dirección de correo electrónico de su cuenta.") }}
        </p>
    </div>
    
    <div class="card-body">

        <form id="send-verification" method="post" action="{{ route('verification.send') }}">
            @csrf
        </form>
        <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
            @csrf
            @method('patch')

            
    
            <div>
                <label for="">Nombre</label>
                <input type="text" id="name" name="name" class="form-control mt-1 block w-full" value="{{old('name', $user->name)}}" required autofocus autocomplete="name">
                <x-input-error class="mt-2" :messages="$errors->get('name')" />
            </div>
    
            <div>
                <label for="">Correo</label>
                <input type="text" id="email" name="email" class="form-control mt-1 block w-full" value="{{old('email', $user->email)}}" required autofocus autocomplete="username">
                <x-input-error class="mt-2" :messages="$errors->get('email')" />
    
                @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                    <div>
                        <p class="text-sm mt-2 ">
                            {{ __('Su dirección de correo electrónico no está verificada') }}
    
                            <button form="send-verification" class="underline text-sm ">
                                {{ __('Haga clic aquí para volver a enviar el correo electrónico de verificación.') }}
                            </button>
                        </p>
    
                        @if (session('status') === 'verification-link-sent')
                            <p class="mt-2 font-medium text-sm text-green-600 dark:text-green-400">
                                {{ __('Se ha enviado un nuevo enlace de verificación a su dirección de correo electrónico.') }}
                            </p>
                        @endif
                    </div>
                @endif
            </div>
            
                <button type='submit' class='btn btn-accept my-2'>{{ __('Guardar') }}</button>
    
               
        </form>
    </div>
    @if (session('status') === 'profile-updated')
            <div class="alert alert-success alert-dismissible fade show p-2 rounded-0" role="alert">
                <strong>Guardado Correctamente!</strong> 
                <button type="button" class="btn-close me-2 p-2" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
    @endif
</div>