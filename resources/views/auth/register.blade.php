 <x-layout title="Registrate">
    <x-card-main text="Registrate para ver fotos">
        <x-forms.form route="{{ route('register')}}" method="POST">
            <x-forms.input name="name" type="text" value="old('name') ?? old('name')" title="Nombre" placeholder="Nombre Completo" />
            <x-forms.input name="username" type="text" value="old('username') ?? old('username')" title="Nombre de usuario" placeholder="Nombre de usuario" />
            <x-forms.input name="email" type="email" value="old('email') ?? old('email')" title="Email" placeholder="Correo electrónico" />
            <x-forms.input name="password" type="password" title="Contraseña" placeholder="Contraseña" />
            <x-forms.input name="password_confirmation" type="password" title="Confirmar Contraseña" placeholder="Confirmar Contraseña" />
            <x-forms.input-button type="submit" value="Registrarse" />
        </x-forms.form> 
    </x-card-main>  
    <x-card-footer text="Tienes una cuenta ?" route= "{{route('login')}}" textSecondary = "Inicia Sesión"/>  
</x-layout>   