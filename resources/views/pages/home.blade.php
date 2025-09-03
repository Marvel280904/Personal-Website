<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Marvel Hans — Personal Website</title>

  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;800&display=swap" rel="stylesheet">

  {{-- CSS utama --}}
  <link rel="stylesheet" href="{{ asset('css/home.css') }}">
  <link rel="stylesheet" href="{{ asset('css/about.css') }}">
  <link rel="stylesheet" href="{{ asset('css/portfolio.css') }}">
  <link rel="stylesheet" href="{{ asset('css/achievement.css') }}">
  <link rel="stylesheet" href="{{ asset('css/contact.css') }}">
</head>
<body>
  <div class="wrap">
    {{-- NAVBAR --}}
    <nav class="navbar">
      <div class="nav-pill">
        <a href="#hero" class="active">Home</a>
        <a href="#about">About me</a>
        <a href="#portfolio">Portfolio</a>
        <a href="#achievement">Achievement</a>
        <a href="#contact">Contact</a>
      </div>
    </nav>

    {{-- HERO --}}
    <section id="hero" class="hero">
      {{-- Kiri: teks --}}
      <div class="intro">
        <h1 class="eyebrow reveal delay-1">Welcome To My</h1>
        <h1 class="title reveal delay-1">
          <span class="type-js">
            <span class="text-js">Personal Website</span>
          </span>
        </h1>

        <p class="desc reveal delay-2">
          I’m <strong>Marvel Hans</strong> — Student in Universitas Ciputra as an
          Information System for Business.
        </p>

        <div class="social-links reveal delay-3">
          <ul class="example-2">
            <!-- Ganti href di bawah dengan URL milikmu -->
            <li class="icon-content">
              <a href="https://www.linkedin.com/in/marvel-hans-surjana/" target="_blank" rel="noopener" aria-label="LinkedIn" data-social="linkedin">
                <div class="filled"></div>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-linkedin" viewBox="0 0 16 16" xml:space="preserve">
                  <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0
                  .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854zm4.943
                  12.248V6.169H2.542v7.225zm-1.2-8.212c.837 0 1.358-.554
                  1.358-1.248-.015-.709-.52-1.248-1.342-1.248S2.4 3.226 2.4
                  3.934c0 .694.521 1.248 1.327 1.248zm4.908
                  8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878
                  1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274
                  0-1.845.7-2.165 1.193v.025h-.016l.016-.025V6.169h-2.4c.03.678 0 7.225 0
                  7.225z" />
                </svg>
              </a>
              <div class="tooltip">LinkedIn</div>
            </li>

            <li class="icon-content">
              <a href="https://github.com/Marvel280904" target="_blank" rel="noopener" aria-label="GitHub" data-social="github">
                <div class="filled"></div>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                    viewBox="0 0 16 16" class="bi bi-github" fill="currentColor" xml:space="preserve">
                  <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47
                  7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01
                  1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95
                  0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0
                  0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27s1.36.09 2
                  .27c1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08
                  2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65
                  3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01
                  2.2 0 .21.15.46.55.38A8.01 8.01 0 0 0 16
                  8c0-4.42-3.58-8-8-8"/>
                </svg>
              </a>
              <div class="tooltip">GitHub</div>
            </li>

            <li class="icon-content">
              <a href="https://www.instagram.com/marvelhanss28/" target="_blank" rel="noopener" aria-label="Instagram" data-social="instagram">
                <div class="filled"></div>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                    class="bi bi-instagram" viewBox="0 0 16 16" fill="currentColor" xml:space="preserve">
                  <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9
                  3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087
                  3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048
                  3.297.04.852.174 1.433.372 1.942.205.526.478.972.923
                  1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555
                  15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174
                  1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99
                  10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9
                  3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01
                  10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166
                  1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275
                  1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166
                  1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5
                  2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24
                  1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0
                  1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109
                  4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667
                  2.667 0 0 1 0-5.334"/>
                </svg>
              </a>
              <div class="tooltip">Instagram</div>
            </li>

            <li class="icon-content">
              <a href="http://www.youtube.com/@MarvelSurjana" target="_blank" rel="noopener" aria-label="YouTube" data-social="youtube">
                <div class="filled"></div>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                    class="bi bi-youtube" viewBox="0 0 16 16" fill="currentColor" xml:space="preserve">
                  <path d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415
                  1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074
                  1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124
                  1.14-.235 1.558a2.01 2.01 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309
                  0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.01
                  2.01 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31 31
                  0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.01
                  2.01 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A100
                  100 0 0 1 7.858 2zM6.4 5.209v4.818l4.157-2.408z"/>
                </svg>
              </a>
              <div class="tooltip">YouTube</div>
            </li>
          </ul>
        </div>
      </div>

      {{-- Kanan: foto --}}
      <div class="profile rainbow-border">
        <div class="rb-container">
          <span></span>
          <span></span>
          <span></span>
          <span></span>
        </div>

        {{-- GANTI blok lama border-img menjadi template tracker --}}
        <div class="container noselect profile-tilt">
          <div class="canvas">
            <div class="tracker tr-1"></div>
            <div class="tracker tr-2"></div>
            <div class="tracker tr-3"></div>
            <div class="tracker tr-4"></div>
            <div class="tracker tr-5"></div>
            <div class="tracker tr-6"></div>
            <div class="tracker tr-7"></div>
            <div class="tracker tr-8"></div>
            <div class="tracker tr-9"></div>
            <div class="tracker tr-10"></div>
            <div class="tracker tr-11"></div>
            <div class="tracker tr-12"></div>
            <div class="tracker tr-13"></div>
            <div class="tracker tr-14"></div>
            <div class="tracker tr-15"></div>
            <div class="tracker tr-16"></div>
            <div class="tracker tr-17"></div>
            <div class="tracker tr-18"></div>
            <div class="tracker tr-19"></div>
            <div class="tracker tr-20"></div>
            <div class="tracker tr-21"></div>
            <div class="tracker tr-22"></div>
            <div class="tracker tr-23"></div>
            <div class="tracker tr-24"></div>
            <div class="tracker tr-25"></div>

            {{-- Kartu = foto kamu --}}
            <div id="card" class="card">
              <div class="card-border-top"></div>
              <div class="img">
                <img src="{{ asset('images/profile.png') }}" alt="Marvel Hans profile photo">
              </div>
              <span>Marvel Hans Surjana</span>
              <p class="job">Student</p>
            </div>
            

            
          </div>
        </div>
        
      </div>
    </section>


    {{-- ABOUT --}}
    <section id="about" class="section about-section">
      <div class="about-grid">
        <div class="about-photo reveal border-img">
          <img src="{{ asset('images/profile.jpg') }}" alt="Marvel Hans">
        </div>

        <div class="about-copy">
          <h2 class="about-title reveal delay-1">About Me</h2>
          <p class="about-text reveal delay-2">
            I am a 21-year-old student, currently in my 7th semester majoring in
            Information Systems and Business at Universitas Ciputra. I am a hardworking,
            diligent, and honest individual who is always eager to learn new things. I
            have a strong passion for sports and possess a high sense of sportsmanship
            and competitiveness. I am a determined person who never gives up and firmly
            holds on to my principles. I aspire to create meaningful innovations in the
            future that can benefit many people and make a positive impact on society.
          </p>

          <div class="social-row">
            <ul class="social-list">
              <li class="social-item">
                <span></span><span></span><span></span>
                <a href="#" aria-label="C#">
                  <img class="ico" src="{{ asset('images/c-sharp.png') }}" alt="C#">
                </a>
                <div class="social-text">C#</div>
              </li>

              <li class="social-item">
                <span></span><span></span><span></span>
                <a href="#" aria-label="HTML">
                  <img class="ico" src="{{ asset('images/html-5.png') }}" alt="HTML">
                </a>
                <div class="social-text">HTML</div>
              </li>

              <li class="social-item">
                <span></span><span></span><span></span>
                <a href="#" aria-label="CSS">
                  <img class="ico" src="{{ asset('images/css-3.png') }}" alt="CSS">
                </a>
                <div class="social-text">CSS</div>
              </li>

              <li class="social-item">
                <span></span><span></span><span></span>
                <a href="#" aria-label="PHP">
                  <img class="ico" src="{{ asset('images/php.png') }}" alt="PHP">
                </a>
                <div class="social-text">PHP</div>
              </li>

              <li class="social-item">
                <span></span><span></span><span></span>
                <a href="#" aria-label="MySQL">
                  <img class="ico" src="{{ asset('images/database.png') }}" alt="MySQL">
                </a>
                <div class="social-text">MySQL</div>
              </li>

              <li class="social-item">
                <span></span><span></span><span></span>
                <a href="#" aria-label="Python">
                  <img class="ico" src="{{ asset('images/python.png') }}" alt="Python">
                </a>
                <div class="social-text">Python</div>
              </li>

              <li class="social-item">
                <span></span><span></span><span></span>
                <a href="#" aria-label="Laravel">
                  <img class="ico" src="{{ asset('images/laravel.png') }}" alt="Laravel">
                </a>
                <div class="social-text">Laravel</div>
              </li>

            </ul>
          </div>

        </div>
      </div>
    </section>


    {{-- PORTFOLIO --}}
    <section id="portfolio" class="section portfolio-section">
      <div class="pf-grid pf-compact">
          <div class="pf-left">
              <div class="pf-monitor">
                  <div class="pf-frame">
                      <div class="pf-screen">
                          <div class="pf-loading-overlay">
                              <div aria-label="Orange and tan hamster running in a metal wheel" role="img" class="wheel-and-hamster">
                                  <div class="wheel"></div>
                                  <div class="hamster"><div class="hamster__body"><div class="hamster__head"><div class="hamster__ear"></div><div class="hamster__eye"></div><div class="hamster__nose"></div></div><div class="hamster__limb hamster__limb--fr"></div><div class="hamster__limb hamster__limb--fl"></div><div class="hamster__limb hamster__limb--br"></div><div class="hamster__limb hamster__limb--bl"></div><div class="hamster__tail"></div></div></div>
                                  <div class="spoke"></div>
                              </div>
                          </div>

                          <div class="wallpaper-container">
                              <div class="auror_bg"></div>
                              <div class="aur_cont">
                                  <span class="aur aur_1"></span><span class="aur aur_2"></span><span class="aur aur_3"></span><span class="aur aur_4"></span><span class="aur aur_5"></span><span class="aur aur_6"></span><span class="aur aur_7"></span><span class="aur aur_8"></span><span class="aur aur_9"></span><span class="aur aur_10"></span><span class="aur aur_11"></span><span class="aur aur_12"></span><span class="aur aur_13"></span><span class="aur aur_14"></span><span class="aur aur_15"></span><span class="aur aur_16"></span><span class="aur aur_17"></span><span class="aur aur_18"></span><span class="aur aur_19"></span><span class="aur aur_20"></span><span class="aur aur_21"></span><span class="aur aur_22"></span><span class="aur aur_23"></span><span class="aur aur_24"></span>
                              </div>
                              <div class="star"></div>
                              <span class="wave wave_1"></span><span class="wave wave_2"></span><span class="wave wave_3"></span><span class="wave wave_4"></span>
                              <div class="pinetree"></div>
                              <span class="hill"></span>
                          </div>

                          <div class="pf-track">
                            <article class="pf-slide"
                              data-title="Jurnal Satpam - PT AICA INDRIA"
                              data-desc="This project is my internship work at PT AICA INDRIA, where I developed a web-based Journal Management System for security operations. 
                                         The platform involves three user roles: Admin, Satpam (Security Guard), and Kepala Satpam (Chief Security Guard). Admin manages guards, 
                                         locations, and system data. Satpam records daily journal entries, including incidents, visitors, and shift activities, with the option to upload 
                                         supporting files. Kepala Satpam oversees submissions, reviews and approves/rejects journals, manages schedules, and monitors guard activities. 
                                         The system also includes reminders, log history, and guard data management, providing structured, transparent, and efficient workflow for security 
                                         reporting and supervision"
                              data-link="https://github.com/Marvel280904/Jurnal-Satpam---PT-AICA-INDRIA.git">
                              
                              <div class="pf-slide-inner">
                                  <img src="{{ asset('images/porto-1.png') }}" alt="Portfolio 1">
                              </div>

                            </article>
                            <article class="pf-slide"
                              data-title="2048 (Game)"
                              data-desc="2048 is a game that my group developed during my first semester of college. It served as the focus of my ALP (Algorithm &
                                         Programming Language) project. The gameplay involves using the keyboard keys: W to move up, A to move left, S to move down,
                                         and D to move right. These directional inputs shift the numbers in the grid accordingly. At the start, two random numbers, either 2 or
                                         4, appear in random positions on the grid. When two identical numbers collide, they merge into a single tile with their sum. The goal
                                         of the game is to combine tiles until reaching the number 2048. If the grid fills up with no remaining merge possibilities, the game
                                         ends in defeat"        
                              data-link="https://github.com/Marvel280904/2048-Game-Project.git">
                              
                              <div class="pf-slide-inner">
                                  <img src="{{ asset('images/porto-2.png') }}" alt="Portfolio 2">
                              </div>

                            </article>
                            <article class="pf-slide"
                              data-title="UMKM App Project"
                              data-desc="SAD Project is an assignment for the System Analysis and Design course. In this project, my team and I are tasked
                                         with developing an application to assist micro and small businesses. Our chosen project focuses on creating a sales
                                         and receipt tracking application for a grocery store. This application aims to streamline their business operations and
                                         improve efficiency"
                              data-link="https://drive.google.com/drive/folders/1L9YlaVncRoerRkDTpFtN7Sjbz7Os3oUd?usp=sharing">
                              
                              <div class="pf-slide-inner">
                                  <img src="{{ asset('images/porto-3.png') }}" alt="Portfolio 3">
                              </div>

                            </article>
                            <article class="pf-slide"
                              data-title="Chat Application"
                              data-desc="This chat application project is a group messaging system where participants can send messages to one another in real time. 
                                         Built with Node.js and Socket.IO, the server tracks connections, maintains a username-to-public-key registry, and broadcasts user 
                                         joins and messages. Each CLI client generates an RSA key pair, registers its public key, and sends messages via a prompt. A secret 
                                         mode encrypts content with the recipient`s public key so only they can decrypt it. Messages are digitally signed and verified to prevent 
                                         impersonation. Handy commands (!secret, !exit, !impersonate) showcase privacy, authenticity, and identity within a lightweight, terminal-based 
                                         chat for everyday collaboration"
                              data-link="https://github.com/Marvel280904/AFL-2---Security---Chat-Application.git">
                              
                              <div class="pf-slide-inner">
                                  <img src="{{ asset('images/porto-4.png') }}" alt="Portfolio 4">
                              </div>

                            </article>
                            <article class="pf-slide"
                              data-title="Soccer Tim List"
                              data-desc="Soccer Team List application is designed to manage soccer teams efficiently. Users can add teams from an existing list and modify
                                         them by adding or removing players. This application serves as a practical assignment for my Application Development course"
                              data-link="https://github.com/Marvel280904/Homework-W4.git">
                              
                              <div class="pf-slide-inner alt">
                                  <img src="{{ asset('images/porto-5.png') }}" alt="Portfolio 5">
                              </div>

                            </article>
                          </div>
                      </div>
                  </div>

                  <div class="pf-stand"></div>
                  <div class="pf-base"></div>

                  <div class="pf-nav">
                      <button class="pf-btn pf-prev" type="button" aria-label="Previous" disabled>
                          <span></span><span></span><span></span><span></span><span>‹</span>
                      </button>
                      <button class="pf-btn pf-next" type="button" aria-label="Next" disabled>
                          <span></span><span></span><span></span><span></span><span>›</span>
                      </button>
                  </div>
              </div>
          </div>

          <div class="pf-right">
              <h2 class="pf-title">My Portfolio</h2>
              <div class="pf-holo-display">
                  <h3 class="pf-holo-title"></h3>
                  <p class="pf-holo-desc"></p>
              </div>
          </div>

          <div class="pf-holo">
              <div class="light-button">
                  <button class="bt" type="button" tabindex="-1" aria-hidden="true">
                      <div class="light-holder"><div class="dot"></div><div class="light on"></div></div>
                      <a class="glass-btn pf-pub-link" href="#" target="_blank" rel="noopener">See Publication</a>
                  </button>
              </div>
          </div>
          
      </div>
    </section>


    {{-- ACHIEVEMENT --}}
    <section id="achievement" class="section achievement-section">
      <h2 class="ach-main-title">My Achievements</h2>

      <div class="ach-scene">
        <div class="ach-stone-container">
          <div class="ach-stone is-left">
            <div class="cube">
              <div class="face front"></div>
              <div class="face back"></div>
              <div class="face right"></div>
              <div class="face left"></div>
              <div class="face top"></div>
             
            </div>
          </div>

          <div class="ach-stone is-right">
            <div class="cube">
              <div class="face front"></div>
              <div class="face back"></div>
              <div class="face right"></div>
              <div class="face left"></div>
              <div class="face top"></div>
            
            </div>
          </div>

          <div class="ach-stone is-center">
            <div class="cube">
              <div class="face front"></div>
              <div class="face back"></div>
              <div class="face right"></div>
              <div class="face left"></div>
              <div class="face top"></div>
          
            </div>
            <!-- tombol dihapus, diganti horizontal scroll -->
          </div>
        </div>

        <div class="ach-track">
          <article class="ach-slide">
            <img src="{{ asset('images/certif-1.png') }}" alt="Achievement 1">
          </article>
          <article class="ach-slide">
            <img src="{{ asset('images/certif-2.png') }}" alt="Achievement 2">
          </article>
          <article class="ach-slide">
            <img src="{{ asset('images/certif-3.jpg') }}" alt="Achievement 3">
          </article>
          <article class="ach-slide">
            <img src="{{ asset('images/certif-4.jpg') }}" alt="Achievement 4">
          </article>
        </div>
      </div>
    </section>


    {{-- CONTACT --}}
    <section id="contact" class="section contact-section">
      <div id="container-stars"><div id="stars"></div></div>

      <div class="contact-wrap">
        <h2 class="contact-title">Contact Me</h2>

        <form id="contact-form"
          class="contact-card"
          method="post"
          action="#"
          data-action="{{ route('contact.send') }}">
          @csrf

          <!-- toast / popup sukses -->
          <div class="form-toast" role="status" aria-live="polite"></div>

          <div class="form-grid">
            <div class="form-field">
              <label for="ct-name">Your Name</label>
              <input id="ct-name" name="name" type="text" placeholder="John Doe" required>
            </div>

            <div class="form-field">
              <label for="ct-email">Email</label>
              <input id="ct-email" name="email" type="email" placeholder="your@email.com" required>
            </div>

            <div class="form-field full">
              <label for="ct-subject">Subject</label>
              <input id="ct-subject" name="subject" type="text" placeholder="What’s this about?" required>
            </div>

            <div class="form-field full">
              <label for="ct-message">Message</label>
              <textarea id="ct-message" name="message" rows="6" placeholder="Write your message…" required></textarea>
            </div>
          </div>

          <button class="glass-btn contact-submit" type="submit" disabled>Send Message</button>
        </form>
      </div>
    </section>

  </div>

  {{-- JS kecil --}}
  <script>
    // Restart efek "typing" ketika tab kembali fokus (opsional)
    document.addEventListener('DOMContentLoaded', () => {
      // ===== Nav active + hash sync =====
      const nav = document.querySelector('.nav-pill');
      const navLinks = [...nav.querySelectorAll('a[href^="#"]')];

      // map: '#id' -> element section
      const sections = navLinks
        .map(a => document.querySelector(a.getAttribute('href')))
        .filter(Boolean);

      function setActive(id) {
        navLinks.forEach(a => {
          const on = a.getAttribute('href') === `#${id}`;
          a.classList.toggle('active', on);
          if (on) a.setAttribute('aria-current', 'page'); else a.removeAttribute('aria-current');
        });
      }

      // klik: scroll halus + set active + update hash
      navLinks.forEach(a => {
        a.addEventListener('click', (e) => {
          const hash = a.getAttribute('href');
          const target = document.querySelector(hash);
          if (!target) return;
          e.preventDefault();

          target.scrollIntoView({ behavior: 'smooth', block: 'start' });
          history.pushState(null, '', hash);   // bikin URL #section ikut berubah
          setActive(hash.slice(1));
        });
      });

      // observer: saat section ada di tengah viewport → aktifkan linknya
      const ioNav = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
          if (!entry.isIntersecting) return;
          const id = entry.target.id;
          setActive(id);

          // sinkronkan hash tanpa bikin jump
          if (location.hash !== `#${id}`) {
            history.replaceState(null, '', `#${id}`);
          }
        });
      }, {
        rootMargin: '-45% 0px -50% 0px', // area "aktif"-nya kira2 tengah layar
        threshold: 0.01
      });
      sections.forEach(sec => ioNav.observe(sec));

      // saat reload / back-forward / ada hash di URL
      window.addEventListener('load', () => {
        const id = (location.hash || '#hero').slice(1);
        setActive(id);
      });
      window.addEventListener('hashchange', () => {
        const tgt = document.querySelector(location.hash);
        if (tgt) tgt.scrollIntoView({ behavior: 'smooth', block: 'start' });
        setActive((location.hash || '#hero').slice(1));
      });


      // HERO
      (function () {
        const typeWrap = document.querySelector('#hero .type-js');
        if (!typeWrap) return;

        const textEl = typeWrap.querySelector('.text-js');
        const fullText = (textEl.textContent || '').trim();
        textEl.dataset.fulltext = fullText;

        let running = false;
        let timers = new Set();
        let inView = false;

        const sleep = (ms) => new Promise(r => {
          const id = setTimeout(() => { timers.delete(id); r(); }, ms);
          timers.add(id);
        });
        const clearAll = () => { timers.forEach(clearTimeout); timers.clear(); };

        function resetTyping() {
          // hapus cursor lama
          const old = typeWrap.querySelector('.cursor');
          if (old) old.remove();

          // buat cursor baru
          const cur = document.createElement('div');
          cur.className = 'cursor';
          typeWrap.prepend(cur);

          // state awal text
          textEl.style.opacity = 0;
          textEl.textContent = '';
        }

        function setCursorRight() {
          const cur = typeWrap.querySelector('.cursor');
          if (!cur) return;
          // pastikan kursor menempel di ujung kanan container (mengikuti lebar teks)
          cur.style.removeProperty('left');
          cur.style.right = '-5px';   // override inline yg sempat "initial"
        }

        async function playLoop() {
          while (running) {
            // ketik
            resetTyping();
            await sleep(300);
            textEl.style.opacity = 1;
            for (let i = 1; i <= fullText.length && running; i++) {
              textEl.textContent = fullText.slice(0, i);
              setCursorRight();
              await sleep(160); // kecepatan ketik
            }
            await sleep(1000);
            // hapus balik
            for (let i = fullText.length - 1; i >= 0 && running; i--) {
              textEl.textContent = fullText.slice(0, i);
              setCursorRight();
              await sleep(160);
            }
            await sleep(700);
          }
        }

        function startLoop() {
          if (running) return;
          running = true;
          clearAll();
          playLoop();
        }
        function stopLoop() {
          running = false;
          clearAll();
          // optional: sembunyikan teks saat keluar
          textEl.style.opacity = 0;
        }

        // IO: mulai saat hero terlihat, berhenti saat keluar
        const hero = document.getElementById('hero') || document.querySelector('.hero');
        const obTyping = new IntersectionObserver((entries) => {
          entries.forEach(e => {
            inView = e.isIntersecting;
            if (inView) startLoop();
            else stopLoop();
          });
        }, { threshold: 0.6 });
        if (hero) obTyping.observe(hero);

        // Bila tab balik aktif dan hero terlihat -> lanjut
        document.addEventListener('visibilitychange', () => {
          if (!document.hidden && inView) startLoop();
        });
      })();

      // === Scroll-reveal hero (punyamu yang lama) ===
      const heroTargets = document.querySelectorAll('#hero .reveal, #hero .profile');
      const ioHero = new IntersectionObserver((entries) => {
        entries.forEach((e) => {
          if (e.isIntersecting) e.target.classList.add('inview');
          else e.target.classList.remove('inview');
        });
      }, { threshold: 0.2, rootMargin: '-5% 0px -5% 0px' });
      heroTargets.forEach(el => ioHero.observe(el));

      // --- Scroll reveal untuk ABOUT (tanpa ubah HTML) ---
      const targets = document.querySelectorAll(
        '#about .about-photo, #about .about-copy, #about .social-row'
      );

      const ioAbout = new IntersectionObserver((entries) => {
        entries.forEach((e) => {
          if (e.isIntersecting) {
            e.target.classList.add('inview');     // tampil
          } else {
            e.target.classList.remove('inview');  // reset -> bisa animasi lagi saat balik
          }
        });
      }, {
        threshold: 0.18,
        rootMargin: '0px 0px -5% 0px'
      });

      targets.forEach(el => ioAbout.observe(el));


      // ======================= PORTFOLIO =======================
      (() => {
        const section = document.querySelector('.portfolio-section');
        if (!section) return;

        // Elemen
        const track = section.querySelector('.pf-track');
        let slides = Array.from(section.querySelectorAll('.pf-slide'));
        const prevBtn = section.querySelector('.pf-prev');
        const nextBtn = section.querySelector('.pf-next');

        const holoTitle   = section.querySelector('.pf-holo-title');
        const holoDesc    = section.querySelector('.pf-holo-desc');
        const holoDisplay = section.querySelector('.pf-holo-display');
        const pubLink     = section.querySelector('.pf-pub-link');

        const loadingOverlay     = section.querySelector('.pf-loading-overlay');
        const wallpaperContainer = section.querySelector('.wallpaper-container');

        // =================== Slider (infinite, aman re-init) ===================
        // clone first/last → [lastClone][S1][S2]..[Sn][firstClone]
        if (slides.length > 1 && !track.querySelector('#first-clone')) {
          const firstClone = slides[0].cloneNode(true);
          const lastClone  = slides[slides.length - 1].cloneNode(true);
          firstClone.id = 'first-clone';
          lastClone.id  = 'last-clone';
          track.appendChild(firstClone);
          track.insertBefore(lastClone, slides[0]);
          slides = Array.from(track.children);
        }

        let idx = 1;                         // mulai di slide pertama “asli”
        const TRANS_MS = 500;
        track.style.transition = 'none';
        track.style.transform  = `translateX(${-idx * 100}%)`;
        setTimeout(() => { track.style.transition = `transform ${TRANS_MS}ms cubic-bezier(.22,1,.36,1)`; });

        function updateHologram() {
          // mapping idx -> slide asli
          let dataIndex = idx - 1;
          if (idx === 0) dataIndex = slides.length - 3;              // last asli
          else if (idx === slides.length - 1) dataIndex = 0;         // first asli

          const currentSlide = track.children[dataIndex + 1];         // offset +1 (ada lastClone di awal)

          // fade-out konten text dulu
          if (holoDisplay) holoDisplay.style.opacity = '0';
          if (pubLink)     pubLink.style.opacity     = '0';

          setTimeout(() => {
            // isi konten
            if (holoTitle) holoTitle.textContent = currentSlide?.dataset?.title || '';
            if (holoDesc)  holoDesc.textContent  = currentSlide?.dataset?.desc  || '';

            // link publikasi
            if (pubLink) {
              const href = currentSlide?.dataset?.link || '';
              if (href) {
                pubLink.href = href;
                pubLink.style.pointerEvents = 'auto';
                pubLink.style.opacity = '1';
              } else {
                pubLink.removeAttribute('href');
                pubLink.style.pointerEvents = 'none';
                pubLink.style.opacity = '0';
              }
            }
            // fade-in
            if (holoDisplay) holoDisplay.style.opacity = '1';
          }, 400);
        }

        function moveToSlide() {
          track.style.transform = `translateX(${-idx * 100}%)`;
          updateHologram();
        }

        function handleNext() { if (idx < slides.length - 1) { idx++; moveToSlide(); } }
        function handlePrev() { if (idx > 0) { idx--; moveToSlide(); } }

        // hindari trigger karena transition opacity; fokus ke transform
        track.addEventListener('transitionend', (ev) => {
          if (ev.propertyName !== 'transform') return;

          if (slides[idx].id === 'first-clone') {
            track.style.transition = 'none';
            idx = 1;
            track.style.transform  = `translateX(${-idx * 100}%)`;
            track.offsetHeight; // reflow
            track.style.transition = `transform ${TRANS_MS}ms cubic-bezier(.22,1,.36,1)`;
          }
          if (slides[idx].id === 'last-clone') {
            track.style.transition = 'none';
            idx = slides.length - 2;
            track.style.transform  = `translateX(${-idx * 100}%)`;
            track.offsetHeight; // reflow
            track.style.transition = `transform ${TRANS_MS}ms cubic-bezier(.22,1,.36,1)`;
          }
        });

        if (nextBtn) nextBtn.addEventListener('click', handleNext);
        if (prevBtn) prevBtn.addEventListener('click', handlePrev);
        window.addEventListener('keydown', (e) => {
          if (!nextBtn || nextBtn.disabled) return;
          if (['INPUT','TEXTAREA','SELECT'].includes(e.target.tagName) || e.target.isContentEditable) return;
          if (e.key === 'ArrowRight') handleNext();
          if (e.key === 'ArrowLeft')  handlePrev();
        });

        // =================== STATE MACHINE (enter/leave/reset) ===================
        const ENTER_TEXT_AT = 4900;   // sesuai urutan animasi CSS-mu
        const timers = [];
        let inView   = false;
        let animLock = false;

        const pushTimer = (ms, cb) => { const t = setTimeout(cb, ms); timers.push(t); return t; };
        const clearTimers = () => { while (timers.length) clearTimeout(timers.pop()); };

        function resetHologram() {
          if (holoTitle) holoTitle.textContent = '';
          if (holoDesc)  holoDesc.textContent  = '';
          if (pubLink) {
            pubLink.removeAttribute('href');
            pubLink.style.opacity = '0';
            pubLink.style.pointerEvents = 'none';
          }
          if (holoDisplay) holoDisplay.style.opacity = '0';
        }

        function disableNav() {
          if (prevBtn) prevBtn.disabled = true;
          if (nextBtn) nextBtn.disabled = true;
        }
        function enableNav() {
          if (prevBtn) prevBtn.disabled = false;
          if (nextBtn) nextBtn.disabled = false;
        }

        function setInitialVisual() {
          section.classList.remove('is-entering','is-leaving');
          // overlay on
          if (loadingOverlay) {
            loadingOverlay.style.display = 'flex';
            loadingOverlay.style.opacity = '1';
          }
          // sembunyikan isi screen
          if (wallpaperContainer) wallpaperContainer.style.opacity = '0';
          if (track)             track.style.opacity = '0';
          resetHologram();
          disableNav();
        }

        // paksa keyframes restart (untuk elemen yang punya animation saat .is-entering/.is-leaving)
        function restartKeyframes() {
          section.querySelectorAll('.pf-frame, .pf-stand, .pf-base, .light, .pf-title, .pf-pub-link')
            .forEach(el => {
              el.style.animation = 'none';
              // reflow
              void el.offsetWidth;
              el.style.animation = '';
            });
        }

        function playEnter() {
          if (animLock) return;
          animLock = true;
          clearTimers();

          // reset & siapkan
          resetHologram();
          section.classList.remove('is-leaving','is-entering');
          restartKeyframes();
          // initial visual
          if (wallpaperContainer) wallpaperContainer.style.opacity = '0';
          if (track)             track.style.opacity = '0';
          disableNav();

          // START: class trigger animasi CSS (dropIn → lightBlinkAndGlow → fadeIn texts)
          // NB: CSS-mu sudah mengatur urutan/delay; kita tinggal timing overlay/teksnya.
          section.offsetHeight;           // reflow dulu biar bersih
          section.classList.add('is-entering');

          // Saat lampu selesai nyala (≈4.9s), sembunyikan overlay & munculkan isi
          pushTimer(ENTER_TEXT_AT - 1400, () => { // 3.5s: wallpaper & track boleh muncul saat loading mau selesai
            if (wallpaperContainer) wallpaperContainer.style.opacity = '1';
            if (track)             track.style.opacity = '1';
          });

          // 4.9s: benar-benar “ready”
          pushTimer(ENTER_TEXT_AT, () => {
            if (loadingOverlay) {
              loadingOverlay.style.opacity = '0';
              pushTimer(500, () => { loadingOverlay.style.display = 'none'; });
            }
            updateHologram();
            enableNav();
            animLock = false;
          });
        }

        function playLeave() {
          if (animLock) return;
          animLock = true;
          clearTimers();

          // tampilkan overlay lagi supaya saat balik animasi mulai dari loading
          if (loadingOverlay) {
            loadingOverlay.style.display = 'flex';
            loadingOverlay.style.opacity = '1';
          }

          // matikan isi screen & tombol segera
          if (wallpaperContainer) wallpaperContainer.style.opacity = '0';
          if (track)             track.style.opacity = '0';
          disableNav();
          resetHologram();

          // trigger reverse animasi (riseOut + lightBlinkOff)
          section.classList.remove('is-entering');
          restartKeyframes();
          section.offsetHeight; // reflow
          section.classList.add('is-leaving');

          // selesai reverse → bersihkan flag (biar siap enter lagi)
          pushTimer(900, () => {
            section.classList.remove('is-leaving');
            animLock = false;
          });
        }

        // =================== Intersection Observer ===================
        const ioPort = new IntersectionObserver((entries) => {
          entries.forEach(e => {
            if (e.target !== section) return;
            const ratio = e.intersectionRatio;

            if (!inView && ratio >= 0.35) {
              inView = true;
              playEnter();
            } else if (inView && ratio < 0.12) {
              inView = false;
              playLeave();
            }
          });
        }, { threshold: [0, 0.12, 0.35, 0.6], rootMargin: '-10% 0px -10% 0px' });

        ioPort.observe(section);
      })();


      //----------------------ACHIEVEMENT---------------------------
      const achSection = document.querySelector('.achievement-section');
      const achSlides  = Array.from(document.querySelectorAll('.ach-slide'));

      if (achSlides.length > 0 && achSection) {
        let achIdx = 0;
        const totalSlides = achSlides.length;

        function updateSlideClasses() {
          const prevIdx = (achIdx - 1 + totalSlides) % totalSlides;
          const nextIdx = (achIdx + 1) % totalSlides;

          achSlides.forEach((slide, index) => {
            slide.classList.remove('is-active', 'is-prev', 'is-next');
            if (index === achIdx) slide.classList.add('is-active');
            else if (index === prevIdx) slide.classList.add('is-prev');
            else if (index === nextIdx) slide.classList.add('is-next');
          });
        }

        function goNext() { achIdx = (achIdx + 1) % totalSlides; updateSlideClasses(); }
        function goPrev() { achIdx = (achIdx - 1 + totalSlides) % totalSlides; updateSlideClasses(); }

        // Inisialisasi posisi
        updateSlideClasses();

        // Keyboard control: ArrowLeft & ArrowRight
        function onKey(e) {
          // Hindari konflik saat sedang mengetik
          if (['INPUT','TEXTAREA','SELECT'].includes(e.target.tagName) || e.target.isContentEditable) return;
          if (e.key === 'ArrowRight') { e.preventDefault(); goNext(); }
          else if (e.key === 'ArrowLeft') { e.preventDefault(); goPrev(); }
        }
        window.addEventListener('keydown', onKey);

        // === ENTER / LEAVE animation control ===
        const STONE_IN_MS  = 950;   // durasi batu naik
        let animLock = false;

        function playEnter() {
          if (animLock) return;
          animLock = true;

          // reset state untuk reveal slide
          achSection.classList.remove('is-leaving','slides-on');
          // trigger anim batu naik
          achSection.classList.add('is-entering');

          // setelah batu naik, munculkan slide (fade-in)
          setTimeout(() => {
            achSection.classList.add('slides-on');
            animLock = false;
          }, STONE_IN_MS - 50);
        }

        function playLeave() {
          if (animLock) return;
          animLock = true;

          // Sembunyikan slide dulu (fade-out), lalu anim batu turun
          achSection.classList.remove('is-entering');
          achSection.classList.remove('slides-on');
          achSection.classList.add('is-leaving');

          // bersihkan flag setelah animasi keluar
          setTimeout(() => { 
            achSection.classList.remove('is-leaving');
            animLock = false;
          }, 700);
        }

        const ioAch = new IntersectionObserver((entries) => {
          entries.forEach(entry => {
            if (entry.isIntersecting) {
              playEnter();
            } else {
              playLeave();
            }
          });
        }, { threshold: 0.35, rootMargin: '-5% 0px -5% 0px' });

        ioAch.observe(achSection);

        // Jika saat reload sudah berada di tengah section, paksa enter agar tidak glitch
        window.addEventListener('load', () => {
          const rect = achSection.getBoundingClientRect();
          const vh = window.innerHeight || document.documentElement.clientHeight;
          const visible = rect.top < vh * 0.65 && rect.bottom > vh * 0.35;
          if (visible) playEnter(); else playLeave();
        });
      }

      const achTrack = document.querySelector('.ach-track');
      if (achTrack) {
        achTrack.addEventListener('click', (e) => {
          const img = e.target.closest('.ach-slide.is-active img');
          if (!img) return;
          window.open(img.src, '_blank', 'noopener'); // buka di tab baru
        });
      }


      // CONTACT
      // ---- IntersectionObserver untuk animasi masuk/keluar section Contact
      const contactSection = document.querySelector('#contact.contact-section');
      const ioContact = new IntersectionObserver((entries) => {
        entries.forEach(e => {
          if (e.isIntersecting){
            contactSection.classList.add('is-entering');
            contactSection.classList.remove('is-leaving');
          } else {
            contactSection.classList.add('is-leaving');
            contactSection.classList.remove('is-entering');
          }
        });
      }, { threshold: 0.28, rootMargin: '-8% 0px -8% 0px' });
      ioContact.observe(contactSection);

      // ---- Form handling
      const form  = document.getElementById('contact-form');
      const actionUrl = form.dataset.action;
      const toast = form.querySelector('.form-toast');
      const btn   = form.querySelector('.contact-submit');

      const fields = ['ct-name','ct-email','ct-subject','ct-message'].map(id => document.getElementById(id));
      const emailRe = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

      function validate(){
        const [name,email,subject,message] = fields.map(i => i.value.trim());
        const ok = name && emailRe.test(email) && subject && message;
        btn.disabled = !ok;
        btn.classList.toggle('is-disabled', !ok);
        return ok;
      }
      fields.forEach(el => el.addEventListener('input', validate));
      validate();

      form.addEventListener('submit', async (e) => {
        e.preventDefault();
        if(!validate()) return;

        btn.disabled = true; btn.classList.add('is-disabled');

        try{
          const formData = new FormData(form);
          const res = await fetch(actionUrl, {                    // ← di sini
            method: 'POST',
            credentials: 'same-origin',                           // penting utk cookie/CSRF
            headers: { 'X-Requested-With':'XMLHttpRequest', 'Accept':'application/json' },
            body: formData
          });

          let data = {};
          try { data = await res.json(); } catch(_) {}

          if(!res.ok || !data.ok){ throw new Error(data.error || 'Failed to send'); }

          toast.textContent = 'Your message has been send';
          form.classList.add('show-toast');
          form.reset(); validate();
          setTimeout(()=> form.classList.remove('show-toast'), 4500);

        }catch(err){
          toast.textContent = err.message || 'Failed to send message. Please try again.';
          form.classList.add('show-toast');
          setTimeout(()=> form.classList.remove('show-toast'), 4500);
        }finally{
          btn.disabled = false; btn.classList.remove('is-disabled');
        }
      });
    });
  </script>
</body>
</html>
