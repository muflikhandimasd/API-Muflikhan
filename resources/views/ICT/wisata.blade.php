<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>ICT Wisata</title>
    <link rel="shortcut icon" href="https://img.icons8.com/cute-clipart/64/000000/api.png" type="image/x-icon">


    <style>
        body {
            font-family: 'Josefin Sans', sans-serif;
            box-sizing: border-box;
        }

        .container-fluid {
            height: 100%;
            margin: 0;
            padding: 0;
            width: 100%;
            background: #FFF;
        }

        /* ============= Animation background ========= */
        .background {
            background: linear-gradient(132deg, #FC415A, #591BC5, #212335);
            background-size: 400% 400%;
            animation: Gradient 15s ease infinite;
            position: relative;
            height: 100%;
            width: 100%;
            overflow: hidden;
            padding: 0;
            margin: 0px;
        }

        .cube {
            position: absolute;
            top: 80vh;
            left: 45vw;
            width: 10px;
            height: 10px;
            border: solid 1px #D7D4E4;
            transform-origin: top left;
            transform: scale(0) rotate(0deg) translate(-50%, -50%);
            animation: cube 12s ease-in forwards infinite;
        }

        .cube:nth-child(2n) {
            border-color: #FFF;
        }

        .cube:nth-child(2) {
            animation-delay: 2s;
            left: 25vw;
            top: 40vh;
        }

        .cube:nth-child(3) {
            animation-delay: 4s;
            left: 75vw;
            top: 50vh;
        }

        .cube:nth-child(4) {
            animation-delay: 6s;
            left: 90vw;
            top: 10vh;
        }

        .cube:nth-child(5) {
            animation-delay: 8s;
            left: 10vw;
            top: 85vh;
        }

        .cube:nth-child(6) {
            animation-delay: 10s;
            left: 50vw;
            top: 10vh;
        }

        /* ================= Header ============ */
        header {
            position: absolute;
            top: 0%;
            left: 0%;
            width: 100%;
            margin: 0;
            padding: 0;
        }

        /* navbar */
        nav {
            color: #FFF;
            float: right;
            margin: 30px 90px;
        }

        nav ul {
            list-style: none;
        }

        nav ul li {
            float: left;
            transition: .3s;
        }

        nav ul li a {
            text-decoration: none;
            color: #EFEEF5;
            transition: .5;
            font-size: 15px;
            margin-left: 16px;
        }

        nav ul li:hover a {
            text-decoration: none;
            color: #591BC5;
            ;
        }

        nav ul li:hover {
            height: 45px;
            padding-top: 30px;
            margin-top: -30px;
            background: #EFEEF5;
            text-decoration: none;
            transform: skew(15deg);
        }

        /* Logo */
        .logo {
            width: 35px;
            height: 35px;
            background: #EFEEF5;
            margin: 40px 63px;
            float: left;
            transform: rotate(-30deg);
        }

        .logo span {
            color: #591BC5;
            font-size: 2em;
            line-height: 1.4;
            padding-left: 5px;
            font-weight: bold;
        }

        /* Header content & title & button*/
        .header-content {
            margin-top: 25%;
            text-align: center;
            color: #EFEEF5;
        }

        .header-content h1 {
            text-transform: uppercase;
            font-size: 3em;
            letter-spacing: 1px;
        }

        .header-content p {
            font-size: 20px;
            line-height: 1.5;
            margin: 20px auto;
        }

        .header-content button {
            width: 140px;
            margin: 20px 10px;
            color: #591BC5;
            font-size: 17px;
            border: 1px solid #EFEEF5;
            font-weight: 500;
            background: #EFEEF5;
            border-radius: 20px;
            padding: 10px;
            cursor: pointer;
            transition: .3s;
        }

        .header-content button:hover {
            border-radius: 0;
        }

        /* Animate Background*/
        @keyframes Gradient {
            0% {
                background-position: 0% 50%;
            }

            50% {
                background-position: 100% 50%;
            }

            100% {
                background-position: 0% 50%;
            }
        }

        @keyframes cube {
            from {
                transform: scale(0) rotate(0deg) translate(-50%, -50%);
                opacity: 1;
            }

            to {
                transform: scale(20) rotate(960deg) translate(-50%, -50%);
                opacity: 0;
            }
        }

        .pading {
            padding-top: 60px
        }

        .custom {
            padding-top: 30px;
            width: 40%;
        }

    </style>
</head>

<body>
    <div class="background">
        <div class="container text-center pading" style="color: #FFF">
            <h1>Data Wisata</h1>
            <a class="btn btn-primary" href="/ictapi">Back to ICT API</a>
            <p class="mt-3">Get Wisata API ICT</p>
        </div>

        <div class="card container mt-4 py-4 px-5">
            <table class="table table-bordered">
                <thead class="text-center">
                    <tr class="tbl">
                        <th scope="col">No</th>
                        <th scope="col">Gambar</th>
                        <th scope="col">Nama Wisata</th>
                        <th scope="col">Waktu Buka</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Kota</th>
                        <th scope="col">Provinsi</th>
                        <th scope="col">Latitude</th>
                        <th scope="col">Longitude</th>
                    </tr>
                </thead>
                <tbody class="text-center ">
                    @foreach ($response as $wisata)
                        <tr class="tbl">
                            <td>{{ $i++ }}</td>
                            <td><img width="150px" class="rounded" src="{{ $wisata['image'] }}" alt=""></td>
                            <td>{{ $wisata['nama_wisata'] }}</td>
                            <td>{{ $wisata['waktu_buka'] }}</td>
                            <td>Rp. {{ number_format($wisata['harga']) }}</td>
                            <td>{{ $wisata['kota'] }}</td>
                            <td>{{ $wisata['provinsi'] }}</td>
                            <td>{{ $wisata['latitude'] }}</td>
                            <td>{{ $wisata['longitude'] }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
    </script>
    -->
</body>

</html>
