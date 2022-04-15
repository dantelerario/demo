<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Demo</title>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Lato:wght@400;500;600;700&display=swap">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    </head>
    <body>
        <header id="header">
            <div class="navbar">
                <div class="navbar-div"></div>
                <div class="link-list navbar-div">
                    <ul>
                        <li class="links"><a href="#header">Home</a></li>
                        <li class="links"><a href="#main">Agenda</a></li>
                        <li class="links"><a href="#bottom">Material</a></li>
                    </ul>
                </div>
                <div class="navbar-div">
                    <ul class="ul-social">
                        <li class="links-social"><a href="www.youtube.com"><i class="fa-brands fa-youtube"></i></a></li>
                        <li class="links-social"><a href="www.twitter.com"><i class="fa-brands fa-twitter"></i></a></li>
                        <li class="links-social"><a href="www.facebook.com"><i class="fa-brands fa-facebook"></i></a></li>
                    </ul>
                </div>
            </div>  
            <div class="hero">
                <h3><i class="fa-solid fa-circle"></i> Webinar 04 November, 10:00 - 14:30 CET</h3>
                <h1>
                    EXPERT WORKSHOP: API <br>
                    BASED WORKER <br>
                    MANAGEMENT AND OSH
                </h1>
            </div>
            <div class="countdown-bar">
                <ul>
                    <li> 
                        <div class="timer-div">
                            <div id="timer-days" class="timer-div-numbers"></div>
                            <span class="timer-span">DAYS</span>
                        </div>
                    </li>
                    <li>
                        <div class="timer-div">
                            <div id="timer-hours" class="timer-div-numbers"></div>
                            <span class="timer-span">HOURS</span>
                        </div>
                    </li>
                    <li>
                        <div class="timer-div">
                            <div id="timer-minutes" class="timer-div-numbers"></div>
                            <span class="timer-span">MINUTES</span>
                        </div>
                    </li>
                    <li>
                        <div class="timer-div">
                            <div id="timer-seconds" class="timer-div-numbers"></div>
                            <span class="timer-span">SECONDS</span>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="text-square">
                <p>The aim of this workshop is to present, discuss, validate and consolidate themain findings of WP1 Tasks 1 and 2 with selected experts on the topic. Theworkshop will also help fine-tune the preparation and implementation ofwork package 2of this project.</p>
            </div>    
        </header>
        <div id="main" class="main-top">
            <div id="container-agenda" class="container">
                <div class="row">
                    <div class="title">
                        <h1>Agenda</h1>
                        <p>04 November 2021 | 10:00 - 14.30 CET</p>
                        <p>Moderator</p>
                        <span>+ Consortium</span>
                    </div>
                </div>
                <div class="row">
                    <div class="hour">10:00-10:10 </div>
                    <div class="info">
                        <div class="row"><h2>Welcome and Introduction</h2></div>
                        <div class="row"><h4>- Ioannis Anyfantis, Consortium</h4></div> 
                        <div id="info-square" class="arrow-box">
                            <div class="avatar-square">
                                <img src="{{ asset('img/bill-gates.jpg')}}">
                            </div>
                            <div class="right-square">
                                <h3>Ioannis Anyfantis</h3>
                                <h5>EU-OSHA</h5>
                                <p> Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                                    accusantium doloremque laudantium, totam rem aperiam, eaque
                                    ipsa quae ab illo inventore veritatis et quasi architecto beatae
                                    vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia
                                    voluptas sit aspernatur aut odit aut fugit, sed.
                                </p> 
                            </div>
                        </div> 
                    </div>
                </div>
                <div class="row">
                    <div class="hour">10:10-10:20</div>
                    <div class="info">
                        <div class="row"><h2>Introduction and aims of the workshop</h2></div>
                        <div class="row"><h4>+ Name Last Name, EU-OSHA</h4></div>
                    </div>
                </div>
                <div class="row">
                    <div class="hour">10:20-10:40</div>
                    <div class="info">
                        <div class="row"><h2>Key note speeches</h2></div>
                        <div class="row"><h4>+ Name Last Name, Consortium</h4></div>
                    </div>
                </div>
                <div class="row">
                    <div class="hour">10:40-11:10</div>
                    <div class="info">
                        <div class="row"><h6>Plenary session 1</h6></div>
                        <div class="row"><h2>The key findings from WP1 Task1, discussion, andvoting sessions</h2></div>
                    </div>
                </div>
                <div class="row">
                    <div class="hour">11:30-11:45</div>
                    <div class="info">
                        <div class="row"><h2>Short break</h2></div>
                    </div>
                </div>
                <div class="row">
                    <div class="hour">11:45-12:15</div>
                    <div class="info">
                        <div class="row"><h6>Breakout room 1</h6></div>
                        <div class="row"><h2>Assessment of the OSH challenges and opportunities associated with AI-based systems for the automation of tasks.</h2></div>
                        <div class="row"><h4>+ Prof. Dr. Phoebe Moore, University of Leicester (UL), UKUniversity of Leicester (UL), UK</h4></div>
                        <div class="row"><h4>+ Prof. Dr. Robert Donoghue, University of Leicester (UL), UKUniversity of Leicester (UL),UK</h4></div>
                    </div>
                </div>
                <div class="row">
                    <div class="hour">12:15-12:45</div>
                    <div class="info"><h2>Q&A - Discussion</h2></div>
                </div>
                <div class="row">
                    <div class="hour">11:45-12:15</div>
                    <div class="info">
                        <div class="row"><h6>Breakout room 2</h6></div>
                        <div class="row"><h2>Assessment of the OSH challenges and opportunities associated with the state of knowledge on advanced robotics.</h2></div>
                        <div class="row"><h4>+ Patricia Rosen, (BAuA)</h4></div>
                        <div class="row"><h4>+ Eva Heinold, (BAuA)</h4></div>
                        <div class="row"><h4>+ Dr. Sascha Wischniewski, (BAuA)</h4></div>
                    </div>
                </div>
                <div class="row">
                    <div class="hour">12:15-12:45</div>
                    <div class="info"><h2>Q&A - Discussion</h2></div>
                </div>
                <div class="row">
                    <div class="hour">12:45-13:45</div>
                    <div class="info"><h2>Lunch break</h2></div>
                </div>
                <div class="row">
                    <div class="hour">13:45-14:00</div>
                    <div class="info">
                        <div class="row"><h6>Panel</h6></div>
                        <div class="row"><h2>Presentation of discussion results from breakout room 1</h2></div>
                        <div class="row"><h4>+ Prof. Dr. Phoebe Moore, (UL)</h4></div>
                    </div>
                </div>
                <div class="row">
                    <div class="hour">14:00-14:15</div>
                    <div class="info">
                        <div class="row"><h2>Presentation of discussion results from breakout room 2</h2></div>
                        <div class="row"><h4>+ Patricia Rosen, (BAuA)</h4></div>
                    </div>
                </div>
                <div class="row">
                    <div class="hour">14:15-14:45</div>
                    <div class="info">
                        <div class="row"><h2>Joint discussion of all results (round table)</h2></div>
                        <div class="row"><h4>+ Dr. Sascha Wischniewski, (BAuA)</h4></div>
                    </div>
                </div>
                <div class="row">
                    <div class="hour">14:45-15:00</div>
                    <div class="info">
                        <div class="row"><h2>Summary and outlook</h2></div>
                        <div class="row"><h4>EU-OSHA</h4></div>
                    </div>
                </div>
                <div class="row btn-div">
                    <div class="download-btn">DOWNLOAD PDF</div>
                </div> 
            </div>
        </div>
        <div id="bottom" class="main-bottom">
            <div class="container">
                <h1>Material</h1>
                <div class="row">
                    <div class="main-bottom-content">
                        <div class="row">
                            <div class="row-download-icon-container">
                                <div class="row-download-icon"><i class="fa-solid fa-book-open"></i></div>
                            </div>
                            <div class="row-download">
                                <h4>EUOSHA Document</h4>
                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy</p>
                                <div class="btn download-btn">DOWNLOAD <i></i></div>
                            </div>
                            <div class="row-download-icon-container">
                                <div class="row-download-icon"><i class="fa-solid fa-book-open"></i></div>
                            </div>
                            <div class="row-download">
                                <h4>EUOSHA Document</h4>
                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy</p>
                                <div class="btn download-btn">DOWNLOAD <i></i></div>
                            </div>
                        </div>
                        <div class="row">
                        <div class="row-download-icon-container">
                                <div class="row-download-icon"><i class="fa-solid fa-book-open"></i></div>
                            </div>
                            <div class="row-download">
                                <h4>EUOSHA Document</h4>
                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy</p>
                                <div class="btn download-btn">DOWNLOAD <i></i></div>
                            </div>
                            <div class="row-download-icon-container">
                                <div class="row-download-icon"><i class="fa-solid fa-book-open"></i></div>
                            </div>
                            <div class="row-download">
                                <h4>EUOSHA Document</h4>
                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy</p>
                                <div class="btn download-btn">DOWNLOAD <i></i></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="row-download-icon-container">
                                <div class="row-download-icon"><i class="fa-solid fa-book-open"></i></div>
                            </div>
                            <div class="row-download">
                                <h4>EUOSHA Document</h4>
                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy</p>
                                <div class="btn download-btn">DOWNLOAD <i></i></div>
                            </div>
                            <div class="row-download-icon-container">
                                <div class="row-download-icon"><i class="fa-solid fa-book-open"></i></div>
                            </div>
                            <div class="row-download">
                                <h4>EUOSHA Document</h4>
                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy</p>
                                <div class="btn download-btn">DOWNLOAD <i></i></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row material-links">
                    <p>For information and lorem ipsum dolor sit amet</p>
                    <a href="/">Lorem ipsum dolor sit amet<i></i></a>
                    <a href="/">Sed ut perspiciatis unde omnis iste<i></i></a>
                    <a href="/">Sed ut perspiciatis unde omnis iste natus error sit voluptatem<i></i></a>
                    <a href="/">Lorem ipsum dolor sit amet, consetetur<i></i></a>
                    <a href="/">Sed ut perspiciatis unde omnis iste natus error sit<i></i></a>
                </div>
            </div>      
        </div>
        <footer>
            <div class="col-lg-8">
                <div class="row">
                    <p>@ 2021 EU-OSHA | an agency of the European Union</p>
                </div>
                <div class="row">
                    <ul>
                        <li>
                            <a href="/">Site map</a>
                        </li>
                        <li>
                            <a href="/">Contact us</a>
                        </li>
                        <li>
                            <a href="/">Accessibility</a>
                        </li>
                        <li>
                            <a href="/">Data protection</a>
                        </li>
                        <li>
                            <a href="/">Privacy notice</a>
                        </li>
                        <li>
                            <a href="/">Cookies</a>
                        </li>
                        <li>
                            <a href="/">Legal notice</a>
                        </li>
                        <li>
                            <a href="/">RSS</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div>
                <div>
                    <a href="/"><i></i>twitter</a>
                    <a href="/"><i></i>Facebook</a>
                    <a href="/"><i></i>Linkedin</a>
                    <a href="/"><i></i>YouTube</a>
                    <a href="/"><i></i>Twitch</a>
                    <a href="/"><i></i>Boh</a>
                </div>
            </div>
        </footer>
        <!-- JS -->
        <script type="text/javascript" src="{{ URL::asset('js/app.js') }}"></script>
    </body>
</html>