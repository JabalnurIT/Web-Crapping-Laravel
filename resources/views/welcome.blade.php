<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Scrapper</title>

        <title>Proyek Halaman Website</title>
        <link rel="stylesheet" href="{{ URL::asset('assets/styles/style.css') }}">
        <script type="text/javascript" src="{{ URL::asset('assets/js/code.js') }}"></script>
    </head>
    <body> 
    
    <div class="bg-circles">
        <div class="circle-1"></div>
        <div class="circle-2"></div>
        <div class="circle-3"></div>
        <div class="circle-4"></div>
    </div>
    <header>
        <div id="home" class="jumbotron">
            <div class="row align-item-center">
                <div class="home-text">
                    <p>Hello, My Name is</p>
                    <h1>Jabalnur</h1>
                    <h2>I'm a <span>Web Developer</span></h2>
                </div>
                <div class="home-img">
                    <div class="img-box">
                        <img src="assets/image/jabalnur.png" alt="Jabal.img">
                    </div>
                </div>
            </div>
        </div>
        <nav>
            <ul>
                <li class="bn"><a href="#home" class="btn">Home</a></li>
                <li class="bn"><a href="#data" class="btn">Data</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <div id="content">
            <article id="data" class="card">
                <h2>Anime Terbaru</h2>
                <div class="timeline">
                    <?php
                    $i = 0;
                    for ($j = 0; $j<$output['p'];$j++)
                    {
                    ?>
                    <div class="timeline-item">
                        <h4>{{ $output['judul'][$j] }}</h4>
                        <span class="date">Keterangan :</span>
                        <p>{{ $output['info'][$i++] }}</p>
                        <p>{{ $output['info'][$i++] }}</p>
                        <p>{{ $output['info'][$i++] }}</p>
                        <p>{{ $output['info'][$i++] }}</p>
                        <p>{{ $output['info'][$i++] }}</p>
                    </div>
                    <?php
                    }
                    ?>
                </div>
            </article>
        </div>
        <aside>
            <article id="aboutme" class="profile card">
                <header>
                    <h2>About Me</h2>
                    <figure>
                        <img src="assets/image/jabalnur.png" alt="gambar jabal">
                        <figcaption>Jabalnur</figcaption>
                    </figure>
                </header>
                <section>
                    <table>
                        <tr>
                            <th>Tempat Lahir</th>
                            <td>Pangkep</td>
                        </tr>
                        <tr>
                            <th>Tanggal Lahir</th>
                            <td>29 Juni 2000</td>
                        </tr>
                        <tr>
                            <th>Jurusan</th>
                            <td>Teknik Informatika</td>
                        </tr>
                        <tr>
                            <th>Alamat</th>
                            <td>Pangkep, Sulawesi Selatan</td>
                        </tr>
                        <tr>
                            <th>Telepon</th>
                            <td>+62 853 4258 2944</td>
                        </tr>
                        <tr>
                            <th>Skills</th>
                            <td></td>
                        </tr>
                    </table>
                </section>
                <section>
                    <div class="skills">
                        <div class="skill-item">html</div>
                        <div class="skill-item">CSS</div>
                        <div class="skill-item">Javascript</div>
                        <div class="skill-item">PHP</div>
                        <div class="skill-item">Laravel</div>
                        <div class="skill-item">Bootstrap</div>
                        <div class="skill-item">Photoshop</div>
                        <div class="skill-item">C</div>
                        <div class="skill-item">C++</div>
                        <div class="skill-item">Kotlin</div>
                        <div class="skill-item">Pascal</div>
                        <div class="skill-item">Phyton</div>
                    </div>
                </section>
            </article>
        </aside>
    </main>
    <footer>
        <p>Personal Website &#169; 2021, Jabalnur</p>
    </footer>

    
</body>
</html>
