<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Quotes</title>

    <style>
        .quote-background {
            position: relative;
        }

        .quote-background img {
            width: 100%;
            height: 100vh;
            display: block;
            /* opacity: 0.5; */
            /* filter: blur(1px);
            -webkit-filter: blur(1px); */
        }



        .quote-background .quote-text {
            position: absolute;
            top: 50%;
            left: 0;
            width: 100%;
            transform: translateY(-50%);
            color: white;
            font-size: 2rem;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.6);
            text-align: center;
            padding: 0 20px;
            box-sizing: border-box;
            backdrop-filter: blur(5px);
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-12 col-lg-5">
                <div class="quote-background">
                    {{-- <img src="https://plus.unsplash.com/premium_photo-1669689974101-55f9aea22158?q=80&w=1888&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                        class="img-fluid border border-1" alt="Background Image"> --}}
                    <img src="{{ asset(Storage::url($bg_image->image)) }}" class="img-fluid border border-1"
                        alt="Background Image">
                    <div class="quote-text">
                        {{ $quote->quote }}
                    </div>
                    {{-- <div class="quote-text position-absolute">
                        The way to get started is to quit talking and begin doing
                    </div> --}}
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>



{{-- <img src="{{ asset(Storage::url($bg_image->image)) }}" alt="" height="200" width="200">
    <p> {{ $quote->quote }} </p> --}}
