
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Design by foolishdeveloper.com -->
    <title>Glassmorphism login Form Tutorial in html css</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <script src="sweetalert2.min.js"></script>
    <link rel="stylesheet" href="sweetalert2.min.css">
    <!--Stylesheet-->
    <style media="screen">
        *,
        *:before,
        *:after{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
        body{
            background-color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            overflow: hidden;
        }
        
        .container {
            display: flex;
            width: 100%;
            height: 100%;
            background: rgba(255, 255, 255, 0.13);
            border-radius: 10px;
            box-shadow: 0 0 40px rgba(8,7,16,0.6);
        }
        .left-container {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            background-image: url('assets/Vertikal-Banner-Gubook.png');
            background-size: cover;
            background-position: center;
            border-top-right-radius: 5%;
            border-bottom-right-radius: 5%;
        }
        .right-container {
            flex: 2;
            display: flex;
            justify-content: center;
            align-items: center;
            padding-right: 45px;
            padding-left: 45px;
            
        }
        form {
            width: 100%;
        }
        form *{
            font-family: 'Poppins',sans-serif;
            color: black;
            letter-spacing: 0.5px;
            outline: none;
            border: none;
        }
        h3{
            font-size: 1.3rem;
            line-height: 42px;
            text-align: center;
            margin-bottom: 30px;
        }
        label{
            display: block;
            margin-top: 20px;
            font-size: 16px;
            font-weight: 500;
        }
        input {
            display: block;
            height: 50px;
            width: 100%;
            background-color: rgba(255, 255, 255, 0.07);
            border-radius: 3px;
            padding: 0 10px;
            margin-top: 8px;
            font-size: 14px;
            font-weight: 300;
            color: #000000;
            border: 1px solid #01509D;
        }

        ::placeholder{
            color: #BCBCBC;
        }
        button{
            margin-top: 25px;
            margin-bottom: 20px;
            width: 100%;
            background-color: #004180;
            color: #fff;
            padding: 15px 0;
            font-size: 18px;
            font-weight: 600;
            border-radius: 5px;
            cursor: pointer;
            border: none;
            transition: background-color 0.3s ease;
        }
        button:hover {
            background-color: #002D5A;
        }
        .img {
            display: block;
            margin-left: auto;
            margin-right: auto;
        }
        .text-danger {
            color: red;
        }
        .register-link, h4 {
            font-weight: normal;
            margin-top: 20px;
            text-align: center;
        }
        .kebijakan{
            margin-top: 20px;
            text-align: center;
        }
        .h4-blue {
        color: #01509D;
        text-decoration: none;
        cursor: pointer;
        }

        @media (max-width: 1768px) {
        .left-container {
            background-size: contain;
        }
    }


    </style>
</head>
<body>
<div class="container">
    <div class="left-container"></div>
    <div class="right-container">
        <form>
            @csrf
            <img class="img" src="assets/logo-gubook.png" alt="">
            <h3>Selamat Datang!</h3>

            <label for="email">Alamat Email</label>
            <input type="email" placeholder="Masukkan alamat email" name="email">
            <span class="text-danger">@error('email'){{$message}}@enderror</span>

            <label for="password">Kata Sandi</label>
            <input type="password" placeholder="Masukkan kata sandi" name="password">
            <span class="text-danger">@error('password'){{$message}}@enderror</span>

            <h4 class="register-link">
                Lupa Kata Sandi?
            </h4>

            <button>Log In</button>
            
            <div class="register-link">
                <h4>Dengan membuat akun, Anda menyetujui <span class="h4-blue">Ketentuan Layanan</span> dan <span class="h4-blue">Kebijakan Privasi kami</span></h4>
            </div>

            
            <div class="register-link">
                <h4>Belum punya akun? <a href="#" class="h4-blue">Daftar</a></h4>  
            </div>
        </form>
    </div>
</div>
</body>
</html>
