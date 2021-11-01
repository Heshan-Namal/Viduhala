<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('assets/front/css/all.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
</head>
<body>
    <!--Navigation bar-->
    <nav class="nav__bar">
        <ul class="nav__list">
            <li class="nav__li"><a href="#">Viduhala</a></li>
            <li class="nav__li"><a href="#">Get Started</a></li>
            <li class="nav__li"><a href="#">About</a></li>
            <li class="nav__li"><a href="#">Q&A</a></li>
        </ul>
    </nav>

    @yield('content')

    <!--Footer-->
    <footer>
            <div class="footer-contact">
                <h3>Contact us</h4>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. In lacus mus elit fringilla venenatis amet justo, a morbi. Mattis auctor turpis magna tellus vel senectus ac rhoncus arcu.
                </p>
                
                <div class="wrapper">
                    <div class="icon facebook">
                        <div class="tooltip">
                             Facebook
                        </div>
                        <span><i class="fab fa-facebook-f"></i></span>
                    </div>
                    <div class="icon twitter">
                        <div class="tooltip">
                              Twitter
                        </div>
                        <span><i class="fab fa-twitter"></i></span>
                    </div>
                    <div class="icon instagram">
                        <div class="tooltip">
                              Instagram
                        </div>
                        <span><i class="fab fa-instagram"></i></span>
                    </div>
                    <div class="icon github">
                        <div class="tooltip">
                             Github
                        </div>
                        <span><i class="fab fa-github"></i></span>
                    </div>
                    <div class="icon youtube">
                        <div class="tooltip">
                              YouTube
                        </div>
                        <span><i class="fab fa-youtube"></i></span>
                    </div>
                </div>
            </div>
                <div class="footer-form">
                    <form class="foo-form">
                        <table class="footer-table">
                            <tr>
                                <td><label>Your name</label></td>
                                <td><label>Contact number</label></td>
                            </tr>
                            <tr>
                                <td><input type="text" class="name" name="Name"></td>
                                <td><input type="text" class="number" name="Number"></td>
                            </tr>
                            <tr>
                                <td><label>Email</label></td>
                            </tr>
                            <tr>
                                <td colspan="2"><input type="text" class="email" name="email"></td>
                            </tr>
                            <tr>
                                <td><label>Subject</label></td>
                            </tr>
                            <tr>
                                <td colspan="2"><textarea class="subject" name="subject" rows="4" cols="50"></textarea></td>
                            </tr>
                            <tr>
                               <td><button class="footer-button">Send</button></td> 
                            </tr>
                        </table>
                    </form>
                </div>
                <div class="footer-note">
                    <p class="copyright">© 2021 Web develop team 11. All Rights Reserved.</p>
                </div>
            </footer>  

            @yield('scripts')
</body>
</html>