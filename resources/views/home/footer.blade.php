<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SJP</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@100..900&display=swap" rel="stylesheet">
<style>
*{
    box-sizing: border-box;
    margin:0;
    padding:0;
}
body{
    display: flex;
    justify-content: flex-end;
    align-items: center;
    flex-direction: column;
    min-height: 100vh;
    font-family: 'LeagueSpartan';
}
footer{
     background-color: #e3edff;
     position: relative;
     width: 100%;
     min-height: 350px;
     padding: 3rem 1rem;
}
.container {
    max-width: 1150px;
    margin: 0 auto;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;


}
.row{
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.col{
    min-width: 250px;
    color:#0D1282;
    font-family: League Spartan;
    padding:0 2rem;
}
.col .logo{
    width: 150px;
    margin-bottom:25px;
}
.col h3{
    color:red;
    margin-bottom: 20px;
    position: relative;
    cursor: pointer;
}
.col h3::after{
    content: '';
    height:3px;
    width:0px;
    background-color: red;
    position: absolute;
    bottom: 0;
    left:0;
    transition: 0.3s ease;

}
.col h3:hover::after{
    width:30px
}
.col .social a i{
    color:#0D1282;
    margin-top:2rem;
    margin-right: 5px;
    transition: 0.3s ease;
}
.col .social a i:hover{
    transform: scale(1.5);
    filter:grayscale(25);
}
.col .links a{
    display: block;
    text-decoration: none;
    color:#080808;
    margin-bottom: 5px;
    position: relative;
    transition: 0.3s ease;
}
.col .links a::before{
    content:'';
    height: 16px;
    width:3px;
    position: absolute;
    top:5px;
    left:-10px;
    background-color: #0D1282;
    transition: 0.5s ease;
    opacity: 0;
}
.col .links a:hover::before{
    opacity: 1;
}
.col .links a:hover{
    transform: translateX(-8px);
    color:#0D1282;
    color:#;
}
.col .contact-details{
    display: inline-flex;
    justify-content: space-between;
}
.col .contact-details i{
    margin-right:15px;
}


/**** Responsive Design ****/
@media(max-width:900px)
{
  .row{
    flex-direction: column;
  }
  .col{
    width: 100%;
    text-align: left;
    margin-bottom: 25px;
  }
}
@media(max-width:768px)
{
  .row{
    flex-direction: column;
  }
  .col{
    width: 100%;
    text-align: left;
    margin-bottom: 27px;
  }
}
</style>
</head>
<body>
     <footer>
        <div class="container">
            <div class="row">
                  <div class="col" id="company">
                      <img src="img/logolagi.png" alt="" class="logo">
                      <p>
                        Kegiatan konsultasi manajemen, Kegiatan kantor pusat
                        Kode ISIC 7010, 7020
                      </p>
                  </div>


                  <div class="col" id="services">
                     <h3>Services</h3>
                     <div class="links">
                        <a href="#">Layanan Pengiriman</a>
                        <a href="#">Creatives</a>
                     </div>
                  </div>

                  <div class="col" id="useful-links">
                     <h3>Links</h3>
                     <div class="links">
                        <a href="#">About</a>
                        <a href="#">Services</a>
                        <a href="#">Our Policy</a>
                        <a href="#">Help</a>
                     </div>
                  </div>

                  <div class="col" id="contact">
                      <h3>Contact</h3>
                      <div class="contact-details">
                         <i class="fa fa-location"></i>
                         <a href="https://maps.app.goo.gl/jHwvRspZufnqsg8N6" style="text-decoration: none;">
                        <p>Jl. Teuku Umar Raya No.126 <br> Kec.Tallo, Kota Makassar, <br>Sulawesi Selatan, 90211, Indonesia.</p>
                        </a>
                      </div>
                      <div class="contact-details">
                         <i class="fa fa-phone"></i>
                         <p>(0411)446938</p>
                      </div>
                  </div>
            </div>

        </div>
     </footer>
</body>
</html>
