<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
    </head>
    <body>
        <nav>
          <x-nav-link href="/"> Home </x-nav-link>
          <x-nav-link href="/about" style="color: blue"> About </x-nav-link>
          <x-nav-link href="/contact"> Contact </x-nav-link>
        </nav>


        <!-- blade way to say echo -->
        {{ $slot }}

        <!-- php way -->
         <!-- <?php echo $slot ?> -->
    </body>
</html>
