<x-sidebar-layout>
    <x-cardTitle>
            <x-slot:title>Mi Perfil</x-slot:title>
    </x-cardTitle>
    <div class="container ">
                    @include('profile.update-information')

                    @include('profile.update-password')
    </div>
</x-sidebar-layout>

<script>
     $(document).ready(function(){
        $("#item-profile").addClass('active');

        $('#btn-current_password').click( (e) => { e.preventDefault(); showPassword("current_password", "#icon-current_password") });
        $('#btn-password').click((e) => {  e.preventDefault();  showPassword("password", "#icon-password");  });
        $('#btn-password_confirmation').click((e)=> { e.preventDefault(); showPassword("password_confirmation", "#icon-password_confirmation"); });

        function showPassword(idelement, icon_class){
        let cambio = document.getElementById(idelement);
		if(cambio.type == "password"){
			cambio.type = "text";
			$(icon_class).removeClass('fa-solid fa-eye-slash').addClass('fa-solid fa-eye');
		}else{
			cambio.type = "password";
			$(icon_class).removeClass('fa-solid fa-eye').addClass('fa-solid fa-eye-slash');
		}
	} 
    });
</script>