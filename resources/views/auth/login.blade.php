<x-layout title="Iniciar Sesión">
    <x-card-main text="Ingresa para ver fotos y videos de tus amigos">
        <x-forms.form route="{{ route('login')}}" method="POST">
            <x-forms.input name="email" title="Email" placeholder="Correo electrónico" type="email"/>
            <x-forms.input name="password" title="Contraseña" placeholder="Contraseña" type="password"/>
            <x-forms.input-button type="submit" value="Iniciar Sesion" />
        </x-forms.form>
        <hr class="mt-5 mb-5"> 
        <h2 class="text-center"><a class="text-blue-600" href="{{route('register')}}">Olvidaste tu contraseña ?</a></h2>
    </x-card-main>
    <x-card-footer text="No tienes una cuenta ?" route= "{{route('register')}}" textSecondary = "Registrate"/>
</x-layout>