<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giant Book Store</title>

    @include('includes.style')
</head>

<body>

    <div class="container-fluid p-0 m-0">
        <div class="row">
            @include('includes.navbar')

            <div class="col-lg-12">
                <div class="container d-flex justify-content-between">
                    @yield('content')
                </div>
            </div>

            @include('includes.footer')


        </div>
    </div>


    @include('includes.script')
</body>

</html>