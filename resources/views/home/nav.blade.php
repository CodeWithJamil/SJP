<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SJP</title>
    <link rel="icon" type="image/x-icon" href="/img/logolagi.png">
    <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@600&display=swap" rel="stylesheet">
<style>
    *{
        margin: 0;
        padding: 0;
        font-family: League Spartan;
        box-sizing: border-box;
    }
    .hero{
        width: 100%;
        min-height: 100vh;
        background: #ffffff;
        color: #525252;

    }
    nav{
        background: white;
        width: 100%;
        padding: 10px 10%;
        display: flex;
        align-items: center;
        justify-content: space-between;
        position: relative;
        font-family: League Spartan;
    }
    .logo{
        width: 120px;
    }
    .user-pic{
        width: 40px;
        border-radius: 50px;
        cursor: pointer;
        margin-left: 30px;
    }
    nav ul{
        width: 100%;
        text-align: right;
    }
    nav ul li{
        display: inline-block;
        list-style: none;
        margin: 10px 20px;
    }
    nav ul li a{
        color: rgb(13, 13, 83);
        text-decoration: none;
        position: center;
    }
    .sub-menu-wrap{
        position: absolute;
        top: 100%;
        right: 10%;
        width: 320px;
        max-height: 0px;
        overflow: hidden;
        transition: max-height 0.5s;

    }
    .sub-menu-wrap.open-menu{
        max-height: 400px;
    }
    .sub-menu{
        background: rgb(122, 122, 122);
        padding: 20px;
        margin: 10px;
    }
    .user-info{
        display: flex;
        align-items: center;
    }
    .user-info h3{
        font-weight: 500;
    }
    .user-info img{
        width: 60px;
        border-radius: 50%;
        margin-right: 15px;
    }
    .sub-menu hr{
        border: 0;
        height: 1px;
        width: 100%;
        background: #ccc;
        margin: 15px 0 10px;

    }
    .sub-menu-link{
        display: flex;
        align-items: center;
        text-decoration: none;
        color: #525252;
        margin: 12px 0;
    }
    .sub-menu-link p{
        width: 100%;
    }
    .sub-menu-link img{
        width: 40px;
        background: 50%;
        border-radius: 50%;
        padding: 8px;
        margin-right: 15px;
    }
    .sub-menu-link span{
        font-size: 22px;
        transition: transform 0.5s;
    }
    .sub-menu-link:hover span{
        transform: translateX(5px);
    }
    .sub-menu-link:hover p{
        font-weight: 600;
    }
    .home {
        min-height: 100vh;
        display: flex;
        align-items: center;
        background-image: url("img/sjp.jpg");
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
        position: relative;
    }.home::after {
        content: "";
        display: block;
        position: absolute;
        width: 100%;
        height: 30%;
        bottom: 0;
        background: linear-gradient(
            0deg,
            rgba(255, 255, 255, 1) 8%,
            rgba(255, 255, 255, 0) 50%
  );
    }
    .home .content {
        padding: 1.4rem 7%;
        max-width: 60rem;
        }

    .home .content h1 {
        font-size: 5.3em;
        color: #fff;
        text-shadow: 1px 1px 3px rgba(1, 1, 3, 0.5);
        line-height: 1.2;
    }
    .home .content h1 span {
        color: blue;
    }
    .about {
        padding: 8rem 7% 7rem;
        color: #000000;
    }
    .about h2 {
        text-align: center;
        font-size: 2.6rem;
        margin-bottom: 3rem;
    }
    .about h2 span {
        color: blue
    }
    .about .row {
  display: flex;
    }
    .about .row .about-img {
    flex: 1 1 45rem;
    }

    .about .row .about-img img {
    width: 100%;
    }

    .about .row .content {
    flex: 1 1 35rem;
    padding: 0 4rem;
    }

    .about .row .content h3 {
    font-size: 4.6rem;
    margin-bottom: 1rem;
    }

    .about .row .content p {
    margin-bottom: 0.8rem;
    font-size: 1.3rem;
    font-weight: 300;
    line-height: 1.6;
    }

</style>
</head>
<body>
    <div class="hero">
        <nav>
            <img src="img/logolagi.png" class="logo">
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href= {{ url('SJP') }}>Data</a></li>
                <li><a href="login">Logout</a></li>
            </ul>
        </nav>
        <section class="home" id="home">
            <main class="content">
                <h1>Safe & Reliable <span>Logistic</span> Solutions!</h1>
            </main>
        </section>

        <section id="about" class="about">
            <h2><span>About</span> Us</h2>

            <div class="row">
              <div class="about-img">
                <img src="img/brg.jpeg" alt="About Us" />
              </div>
              <div class="content">
                <h3>What is SJP?</h3>
                <p>
                  CV. Sahrul Jasa Pratama is a land and sea transportation expedition with fast and easy delivery. Across Sulawesi, Kalimantan, Java and Jakarta. located at Jl. Teuku Umar Raya, Kaluku Bodoa, District. Tallo, Makassar City, South Sulawesi 90212.
                </p>
              </div>
            </div>
          </section>
    </div>

    <script>
        let subMenu = document.getEelementById("subMenu");

        function toggleMenu(){
            subMenu.classList.toggle("open-menu");
        }
    </script>
</body>
</html>
