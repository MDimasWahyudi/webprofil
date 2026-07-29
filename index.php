<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Website</title>

    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<header>
    <h1>Website Portofolio</h1>

    <nav>
        <a href="#Home">Home</a>
        <a href="#Tentang">Tentang</a>
        <a href="#Skill">Skill</a>
        <a href="#Portofolio">Portofolio</a>
        <a href="#Kontak">Kontak</a>
    </nav>
</header>

<section class = "hero" id="home">
    <div class="hero-text">
        <p> Halo nama saya Dimas</p>

        <p> saya mahasiswa Sistem Informasi Gundarma</p>

        <p> Sedang mencoba menjadi Web Developer</p>

        <p> Ini pengalaman pertama saya belajar PHP sendiri</p>  

        <button> Tentang saya </button>
    </div>


    <div class = "hero-image">
        <img src="images/confuse.jpeg" alt = "Foto Profil">
    </div>
</section>

<section class = "about" id="tentang">
    <h2>Tentang Saya</h2>
    <div class="about-content">
        <div class="about-image">
            <img src="images/confuse.jpeg">
        </div>

        <div class="about-text">
            <p>
                Saya adalah mahasiswa sistem informasi Gunadarma yang sedang belajar membuat web dari nol.
            </p>
            <p>
                Saya sedang mencoba memplejari html,css,php.
            </p>
            <p>
                saya juga tertarik dalam dunia data sciene dan data analyst.
            </p>
        </div>
    </div>
</section>

<section class ="skills" id="skill">
    <h2>Skills</h2>

    <div class = skill>
        <div class = "skill-info">
            <span>HTML</span>
            <span>80%</span>
        </div>

        <div class = "progress">
            <div class = "progress-bar html"></div>
        </div>
    </div>

    <div class = "skill">
        <div class = "skill-info">
            <span>CSS</span>
            <span>70%</span>
        </div>

        <div class ="progress">
            <div class = "progress-bar css"></div>
        </div>
    </div>

    <div class = "skill">
        <div class = "skill-info">
            <span>PHP</span>
            <span>60%</span>
        </div>

        <div class = "progress">
            <div class = "progress-bar php"></div>
        </div>
    </div>

    <div class = "skill">
        <div class ="skill-info">
            <span>JAVA</span>
            <span>65%</span>
        </div>

        <div class ="progress">
            <div class = "progress-bar java"></div>
        </div>
    </div>

    <div class = "skill">
        <div class ="skill-info">
            <span>MySQL</span>
            <span>85%</span>
        </div>

        <div class = "progress">
            <div class ="progress-bar mysql"></div>
            </div>
        </div>
    </div>

    <div class = "skill">
        <div class = "skill-info">
            <span>JavaScript</span>
            <span>55%</span>
        </div>

        <div class = "progress">
            <div class ="progress-bar javascript"></div>
        </div>
    </div>
</section>

<footer>
    @Dimas 2026
</footer>
</body>
</html>