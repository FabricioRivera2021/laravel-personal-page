<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&family=Special+Elite&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/cdc1139b6d.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./resources/css/legacy.css" />
    @vite('resources/css/legacy.css')
    @vite('resources/js/legacy.js')
    <title>Fabricio Rivera</title>
  </head>
  <body>
    <main>
        <section id="hero">
          <div id="mail-send-container">
            <div id="mail-send-icon">
              <a href="#hero" class="up-link"><i class="fa-solid fa-arrow-up"></i></a>
            </div>
          </div>
          <nav id="navbar">
            <ul class="links"> <!-- active --> 
              <li class="hamburguer-btn"><i class=" hamburguer-btn fa-solid fa-bars fa-xl"></i></li>
              <li class="hidden"><a href="#" class="inside-link">Home</a></li>
              <li class="hidden"><a href="#about" class="inside-link">About</a></li>
              <li class="hidden"><a href="#proyectos" class="inside-link">Proyects</a></li>
              <li class="hidden"><a href="#contact" class="inside-link">Contact</a></li>
            </ul>
            <ul>
              <li><a href="https://github.com/FabricioRivera2021" target="_blank" class="link"><i class="fa-brands fa-github fa-xl"></i></a></li>
              <li><a href="https://www.linkedin.com/in/fabricio-rivera/" target="_blank" class="link"><i class="fa-brands fa-linkedin fa-xl"></i></a></li>
              <li><a href="mailto:fabricio.rivera2012@gmail.com" class="link"><i class="fa-sharp fa-solid fa-envelope fa-xl"></i></a></li>
            </ul>
          </nav>
          <div id="hero-container">
            <div class="hero-sub-container1">
              <small>HTML - CSS - JS</small>
              <h1><span class="titleBracket">&lt;</span> FABRICIO RIVERA <span class="titleBracket">&#47;&gt;</span></h1>
              <H4>Web design</H4>
              <ul class="hero-text">
                <li></li>
              </ul>

            </div>
            <div class="hero-btn">    
              <button class="btn-primary"><a id="cv-download" href="{{ route('cv', app()->getLocale()) }}" target="_blank">Download CV</a><i class="cv-icon fa fa-solid fa-file"></i></button>
              <button id="proyects-btn" class="btn-primary">Proyects</button>
            </div>
          </div>
        </section>

        <section id="about">
          <h3>About me</h3>
          <div class="about-me-container">
              <div class="about-me-text">
                <!-- texto sobre mi -->
                <div>
                  <h3>Welcome to me personal Website</h3>
                  <p>                   
                    Hi my name is Fabricio &#128075;, and i love building things that are usefull for the web.
                    Here you can see some of my personal proyects. I also have a photograpy website, <a class="photos-link" href="https://fabriciorivera.art" target="_blank">check it out. &#128247;</a>
                  </p>
                </div>
                <div class="about-me-skills">
                  <h3>Skills</h3>
                  <hr>
                  <div class="skills-container">
                    <div class="skills">
                      <h5>HTML</h5>
                      <i class="fa-brands fa-html5 fa-xl"></i>
                    </div>
                    <div class="skills">
                      <h5>CSS</h5>
                      <i class="fa-brands fa-css3-alt fa-xl"></i>
                    </div>
                    <div class="skills">
                      <h5>JavaScript</h5>
                      <i class="fa-brands fa-square-js fa-xl"></i>
                    </div>
                    <div class="skills">
                      <h5>React</h5>
                      <i class="fa-brands fa-react fa-xl"></i>
                    </div>
                    <div class="skills">
                      <h5>PHP</h5>
                      <i class="fa-brands fa-php fa-xl"></i>
                    </div>
                  </div>
                </div>
              </div>
              <div class="about-me-img">
                <!-- imagen sobre mi -->
                <div class="about-me-img-container">
                  <img src="{{Vite::asset('resources/images/legacy/DSC_9686.jpg')}}" alt="about-me-img">
                </div>
              </div>
        </section>

        <section id="proyectos">
          <div class="card-container">
            <h3>Proyectos</h3>
            <div class="card-item">
              <div class="card-inside">
                <div class="card-img">
                  <img src="{{Vite::asset('resources/images/legacy/pagina-fotos-img.jpg')}}" width="100%" alt="img">
                </div>
                <div class="card-text">
                  <div>
                    <h4 class="card-title">Photograpy page</h4>
                    <p class="card-desc">A small web page destinated to show my work in photograpy.
                    </p>
                  </div>
                  <div>
                    <div class="tec-outer-container">
                      <p>Build with</p>
                      <div class="tec-container">
                        <div class="tec"><i class="fa-brands fa-react fa-xl"></i><small class="tec-icon"> React</small></div>
                        <div class="tec"><small class="tec-icon"> Tailwind CSS</small></div>
                      </div>
                    </div>
                    <div>
                      <div class="card-btn">
                        <a href="https://fabriciorivera.art" target="_blank"><button class="btn-primary">LIVE page</button></a>
                        <a href="https://github.com/FabricioRivera2021/PhotoPage" target="_blank"><button class="btn-primary">GitHub Code</button></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

        <section id="contact">
          <h3>Contact</h3>
          <div class="form-container">
            <h4>Send me a message</h4>
            <form action="./data/sendMail.php" method="POST">
              <label for="nombre">
                <input class="field" type="text" placeholder="Name" />
              </label>
              <label for="email">
                <input class="field"  type="email" placeholder="Email" />
              </label>
              <label for="message">
              </label>
              <textarea class="field" name="message" id="" cols="40" rows="8" placeholder="Message"></textarea>
              <button class="btn-primary" type="submit" >Send</button>
            </form>
          </div>
        </section>
        <footer>
          <p class="footer-text">Build with: HTML | CSS | JS | PHP</p>
          <p class="footer-text">Fabricio Rivera &copy; 2023</p>
          <p class="footer-text">Email: Fabricio.Rivera2012@gmail.com</p>
        </footer>
      </main>
  </body>

  {{-- <script src="./js/legacy.js"></script> --}}
</html>