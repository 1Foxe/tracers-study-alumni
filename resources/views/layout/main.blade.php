<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kuisioner Awal</title>
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    <!--data sertifikat-->
    <script>
        function sertif(x){
          if (x == 0) document.getElementById("sertifikasi").style.display = "block";
          else document.getElementById("sertifikasi").style.display = "none";
        }
      </script>

    <!--data kerja-->
    <script>
        function kerja(y){
          if (y == 0) document.getElementById("datakerja").style.display = "block";
          else document.getElementById("datakerja").style.display = "none";
        }
      </script>

    <!--data wirausaha-->
    <script>
        function wirausaha(z){
          if (z == 0) document.getElementById("datawirausaha").style.display = "block";
          else document.getElementById("datawirausaha").style.display = "none";
        }
      </script>

    <!--data prestasi-->
    <script>
        function prestasi(i){
          if (i == 0) document.getElementById("dataprestasi").style.display = "block";
          else document.getElementById("dataprestasi").style.display = "none";
        }
      </script>

</head>
<body class="font-sans antialiased">
    <div>
        <div class="min-h-screen bg-gray-100">
            
            @include('partials.navbar')

            <main>
                <div class="py-12">
                    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                            <div class="p-6 bg-white border-b border-gray-200">
                                <div>
                                    @yield('container')
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
    <script src="{{ asset('/sw.js') }}"></script>
<script>
    if (!navigator.serviceWorker.controller) {
        navigator.serviceWorker.register("/sw.js").then(function (reg) {
            console.log("Service worker has been registered for scope: " + reg.scope);
        });
    }
</script>
    


    @env ('local')
        <script src="http://localhost:8080/js/bundle.js"></script>
    @endenv
</body>
</html>