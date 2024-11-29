<x-layout bodyClass="bg-gray-200">

        <div class="container position-sticky z-index-sticky top-0">
            <div class="row">
                <div class="col-12">
                    <!-- Navbar -->
                    <x-navbars.navs.guest signin='login' signup='register'></x-navbars.navs.guest>
                    <!-- End Navbar -->
                </div>
            </div>
        </div>
        <main class="main-content  mt-0">
            <div class="page-header align-items-start min-vh-100"
                style="background-image: url('https://cdn.milenio.com/uploads/media/2023/09/11/universidad-politecnica-de-pachuca.jpeg');">
                <span class="mask bg-gradient-to-b from-purple-600 to-purple-900 opacity-80"></span>
                <div class="container mt-5">
                    <div class="row signin-margin">
                        <div class="col-lg-4 col-md-8 col-12 mx-auto">
                            <div class="card z-index-0 fadeIn3 fadeInBottom">
                                
                                <div class="card-body">
                                    <form role="form" method="POST" action="{{ route('login') }}" class="text-start">
                                        @csrf
                                        @if (Session::has('status'))
                                        <div class="alert alert-success alert-dismissible text-white" role="alert">
                                            <span class="text-sm">{{ Session::get('status') }}</span>
                                            <button type="button" class="btn-close text-lg py-3 opacity-10"
                                                data-bs-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        @endif
                                        <div class="input-group input-group-outline mt-3" >
                                            <label class="form-label">Email</label>
                                            <input type="email" class="form-control" name="email" value="{{ 'admin@material.com' }}" >
                                        </div>
                                        @error('email')
                                        <p class='text-danger inputerror'>{{ $message }} </p>
                                        @enderror
                                        <div class="input-group input-group-outline mt-3">
                                            <label class="form-label">Contraseña</label>
                                            <input type="password" class="form-control" name="password" value='{{ 'secret'}}'>
                                        </div>
                                        @error('password')
                                        <p class='text-danger inputerror'>{{ $message }} </p>
                                        @enderror
                                        <div class="form-check form-switch d-flex align-items-center my-3">
                                            <input class="form-check-input" type="checkbox" id="rememberMe">
                                            <label class="form-check-label mb-0 ms-2" for="rememberMe">Recordar contraseña
                                                </label>
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn w-100 my-4 mb-2" style="background-color: #6a1b9a; color: white;">Iniciar sesion
                                                </button>
                                        </div>
                                        <p class="mt-4 text-sm text-center">
                                            Crear una cuenta nueva
                                            <a href="{{ route('register') }}"
                                            style="color: #6a1b9a; text-decoration: none; font-weight: 600;">Registrarse</a>
                                        </p>
                                        <p class="text-sm text-center">
                                            ¿Olvidate tu contraseña? 
                                            <a href="{{ route('verify') }}"
                                            style="color: #6a1b9a; text-decoration: none; font-weight: 600;">Aquí</a>
                                        </p>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <x-footers.guest></x-footers.guest>
            </div>
        </main>
        @push('js')
<script src="{{ asset('assets') }}/js/jquery.min.js"></script>
<script>
    $(function() {

    var text_val = $(".input-group input").val();
    if (text_val === "") {
      $(".input-group").removeClass('is-filled');
    } else {
      $(".input-group").addClass('is-filled');
    }
});
</script>
@endpush
</x-layout>
