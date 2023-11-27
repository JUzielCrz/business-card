<section>
    <div class="card shadow rounded-0 m-md-5">
        <div class="card-header">
            <h4 >
                {{ __('ACTUALIZA TU CONTRASEÑA') }}
            </h4>
    
            <p class="mt-1">
                {{ __('Asegúrese de que su cuenta esté usando una contraseña larga y aleatoria para mantenerse seguro.') }}
            </p>
        </div>
        <div class="card-body">
            <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
                @csrf
                @method('put')
        
                <div>
                    <label>Contraseña actual</label>
                    <div class="input-group mb-3">
                        <input type="password" id="current_password" name="current_password" class="form-control mt-1 block w-full" autocomplete="current-password" >            
                        <button type="button" class="btn btn-outline-secondary" id="btn-current_password"><i id="icon-current_password" class="fa-solid fa-eye-slash"></i></button>
                    </div>
                    <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
                </div>
        
                <div>
                    <label for="password" >Nueva Contraseña</label>
                    <div class="input-group mb-3">
                        <input type="password" id="password" name="password" class="form-control mt-1 block w-full" autocomplete="new-password" >            
                        <button type="button" class="btn btn-outline-secondary" id="btn-password"><i id="icon-password" class="fa-solid fa-eye-slash"></i></button>
                    </div>
                    <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
                </div>
        
                <div>
                    <label for="password_confirmation">Confirmar Contraseña</label>
                    <div class="input-group mb-3">
                        <input type="password" id="password_confirmation" name="password_confirmation" class="form-control mt-1 block w-full" autocomplete="new-password" >            
                        <button type="button" class="btn btn-outline-secondary" id="btn-password_confirmation"><i id="icon-password_confirmation"  class="fa-solid fa-eye-slash"></i></button>
                    </div>
                    <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
                </div>
        
                <div class="flex items-center gap-4">
                    <button type='submit' class='btn btn-accept my-2'>{{ __('Guardar') }}</button>
        
                    @if (session('status') === 'password-updated')
                        <div class="alert alert-success alert-dismissible fade show p-2 rounded-0" role="alert">
                            <strong>Guardado Correctamente!</strong> 
                            <button type="button" class="btn-close me-2 p-2" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                </div>
            </form>
        </div>
    </div>
</section>
