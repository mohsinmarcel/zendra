<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Coming Soon</title>
  <style>
    body {
      background: #00091B;
      color: #fff;
      font-family: 'Poppins', sans-serif;
      margin: 0;
    }
    @keyframes fadeIn {
      from {top: 20%; opacity: 0;}
      to {top: 50%; opacity: 1;}
    }
    .wrapper {
      position: absolute;
      left: 50%;
      top: 50%;
      transform: translate(-50%, -50%);
      animation: fadeIn 1s ease;
      text-align: center;
    }
    h1 {
      font-size: 50px;
      margin: 0;
      font-weight: 700;
    }
    h2 {
      font-size: 24px;
      margin: 10px 0;
      font-weight: normal;
    }
    .dot {
      color: #4FEBFE;
    }
    .icons a {
      color: #00091B;
      background: #fff;
      height: 15px;
      width: 15px;
      padding: 13px;
      margin: 0 5px;
      border-radius: 50%;
      border: 2px solid #fff;
      display: inline-block;
      transition: all 0.2s ease;
    }
    .icons a:hover {
      color: #fff;
      background: none;
      transform: scale(1.2);
    }
  </style>
</head>
<body>
  <div class="wrapper">
    <h1>Hello From Zendra Gadgets <span class="dot"></span></h1>
    <h2>We Are Coming Soon !</h2>
    {{-- <div class="icons">
      <a href="#"><i class="fa fa-twitter"></i></a>
      <a href="#"><i class="fa fa-youtube-play"></i></a>
      <a href="#"><i class="fa fa-paper-plane"></i></a>
    </div> --}}
  </div>
</body>
</html>
