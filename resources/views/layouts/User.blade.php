<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('/assets/css/app.css') }}">
    <link rel="shortcut icon" href="/assets/img/icon.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
        integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>{{ config('app.name', 'E-Voting App') }}</title>

    <style>
        .form-floating {
            position: relative;
        }

        #togglePassword {
            position: absolute;
            right: 15px;
            /* Adjust as needed */
            top: 50%;
            transform: translateY(-50%);
            border-radius: 0;
            border: none;
        }

        #togglePassword:hover {
            background-color: transparent;
            color: rgb(145, 145, 145);
        }
    </style>
</head>

<body class="bg-style font-quicksand">
    @if (session()->has('success'))
        <div class="bg-success py-3 px-5 text-white">{{ session('success') }}</div>
    @endif
    @if (session()->has('error'))
        <div class="bg-danger py-3 px-5 text-white">{{ session('error') }}</div>
    @endif
    @if (session()->has('warning'))
        <div class="bg-warning py-3 px-5 text-dark">{{ session('warning') }}</div>
    @endif
    @include('layouts.UserNavbar')
    <div class="container">
        {{ $slot }}
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous">
    </script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        window.addEventListener('DOMContentLoaded', event => {
            // Navbar shrink function
            var navbarShrink = function() {
                const navbarCollapsible = document.body.querySelector('#mainNav');
                if (!navbarCollapsible) {
                    return;
                }
                if (window.scrollY === 0 || window.scrollY <= 10) {
                    navbarCollapsible.classList.add('navbar-shrink');
                    navbarCollapsible.classList.remove('bg-light');
                    navbarCollapsible.classList.add('bg-blur');
                    navbarCollapsible.classList.remove('shadow');
                    $('meta[name=theme-color]').attr('content', '#3C3A35');
                } else {
                    navbarCollapsible.classList.remove('navbar-shrink');
                    navbarCollapsible.classList.add('bg-light');
                    navbarCollapsible.classList.remove('bg-blur');
                    navbarCollapsible.classList.add('shadow');
                    $('meta[name=theme-color]').attr('content', '#f8f9fa');
                }
            };
            // Shrink the navbar
            navbarShrink();
            // Shrink the navbar when page is scrolled
            document.addEventListener('scroll', navbarShrink);
        });
    </script>
    @if (Request::is('login'))
        <script>
            check_login_as();

            function check_login_as() {
                if ($('#login_as')[0].checked) {
                    $('#label_login_as').text('Admin');
                    $('#label_username').text('Username');
                } else {
                    $('#label_login_as').text('Pemilih');
                    $('#label_username').text('NIK');
                }
            }
            $(document).ready(function() {
                $('#login_as').change(function() {
                    check_login_as();
                });
            });
        </script>
    @endif
    <script src="{{ asset('/assets/js/app.js') }}"></script>
    @auth
        <script src="{{ asset('/assets/js/user.js') }}"></script>
    @endauth
    @if (Request::is('hasil'))
        <script src="{{ asset('/assets/js/voteresult.js') }}"></script>
    @endif
    <script src="{{ asset('/assets/js/notif.js') }}"></script>

    <script src="https://unpkg.com/html5-qrcode"></script>

    <script>
        let html5QrcodeScanner;

        document.getElementById('start-scan').addEventListener('click', function() {
            document.getElementById('qrcode').style.display = 'block';
            document.getElementById('reader').style.display = 'block';

            html5QrcodeScanner = new Html5QrcodeScanner("reader", {
                fps: 10,
                qrbox: 250
            });
            html5QrcodeScanner.render(onScanSuccess, onScanFailure);
        });

        function onScanSuccess(decodedText, decodedResult) {

            document.getElementById('idbarcode').value = decodedText;

            fetch('{{ route('login.with.barcode') }}', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                    },
                    body: JSON.stringify({
                        uuid: decodedText
                    })
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        Swal.fire({
                            title: "Sukses!",
                            text: "Login Berhasil!",
                            icon: "success"
                        }).then(() => {
                            window.location.href = data.redirect;
                        });
                    } else {
                        Swal.fire({
                            title: "Gagal!",
                            text: "Barcode tidak ditemukan!",
                            icon: "error"
                        });
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    Swal.fire({
                        title: "Error!",
                        text: "Terjadi kesalahan!",
                        icon: "error"
                    });
                });

            html5QrcodeScanner.clear();
            document.getElementById('reader').style.display = 'none';
        }

        function onScanFailure(error) {
            console.warn(`Code scan error = ${error}`);
        }
    </script>

    <script>
        document.getElementById('togglePassword').addEventListener('click', function() {
            const passwordInput = document.getElementById('password');
            const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordInput.setAttribute('type', type);

            const icon = this.querySelector('i');
            if (type === 'password') {
                icon.classList.remove('bi-eye-slash');
                icon.classList.add('bi-eye');
            } else {
                icon.classList.remove('bi-eye');
                icon.classList.add('bi-eye-slash');
            }
        });
    </script>
</body>

</html>
