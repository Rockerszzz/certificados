<html>
    <head>
        <link rel="stylesheet" href="/css/style.css">
    </head>
</html>
<div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100 tela-login" id="auth">
    <div class="logo-login">
        {{ $logo }}
    </div>

    <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
        {{ $slot }}
    </div>
    <div class="footer">
        <p>Área Local &copy; 2022</p>
    </div>
</div>
