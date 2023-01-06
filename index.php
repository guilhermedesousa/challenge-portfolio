<?php

    $curl = curl_init();

    curl_setopt_array($curl, [
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_URL => 'https://api.github.com/users/guilhermedesousa/repos',
        CURLOPT_USERAGENT => 'GitHub API in CURL'
    ]);

    $response = curl_exec($curl);

    curl_close($curl);

    $repos = json_decode($response);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portfolio</title>
    <link rel="shortcut icon" href="./assets/images/favicon.ico" type="image/x-icon">

    <!-- css links -->
    <link rel="stylesheet" href="./assets/css/desktop-style.css">
    <link rel="stylesheet" href="./assets/css/mobile-style.css">

    <!-- font-family from Google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather+Sans:wght@300;400;500;700&display=swap" rel="stylesheet">
</head>

<body>

    <div class="container">
        <aside class="my-overview">
            <div class="profile card-content">
                <div class="personal-photo">
                    <img src="./assets/images/personal-photo.png" alt="My personal photo">
                </div>

                <h4>Guilherme de Sousa Santos</h4>
                <p>Full Stack Developer</p>
            </div>

            <div class="links card-content">
                <div class="localization">
                    <a href="https://goo.gl/maps/sc1SxaPQXZEmRnPx6" target="_blank">
                        <img src="./assets/images/map-pin.svg" class="link-icon" alt="" srcset="">
                        <p>São Paulo, SP - Brazil</p>
                    </a>
                </div>

                <div class="company">
                    <a href="https://www.mobly.com.br/sobre-a-mobly/" target="_blank">
                        <img src="./assets/images/briefcase.svg" class="link-icon" alt="" srcset="">
                        <p>Mobly</p>
                    </a>
                </div>

                <div class="github">
                    <a href="https://github.com/guilhermedesousa" target="_blank">
                        <img src="./assets/images/github.svg" class="link-icon" alt="" srcset="">
                        <p>guilhermedesousa</p>
                    </a>
                </div>

                <div class="linkedin">
                    <a href="https://www.linkedin.com/in/guilherme-de-sousa-santos/" target="_blank">
                        <img src="./assets/images/linkedin.svg" class="link-icon" alt="" srcset="">
                        <p>guilherme-de-sousa-santos</p>
                    </a>
                </div>

                <div class="instagram">
                    <a href="https://www.instagram.com/_gui.santosx/" target="_blank">
                        <img src="./assets/images/instagram.svg" class="link-icon" alt="" srcset="">
                        <p>@_gui.santosx</p>
                    </a>
                </div>

                <div class="website">
                    <a href="https://guilherme-santos.netlify.app/" target="_blank">
                        <img src="./assets/images/globe.svg" class="link-icon" alt="" srcset="">
                        <p>https://guilherme-santos.netlify.app/</p>
                    </a>
                </div>

                <div class="email">
                    <a href="mailto:guilhermedesousa.dev@gmail.com">
                        <img src="./assets/images/mail.svg" class="link-icon" alt="" srcset="">
                        <p>guilhermedesousa.dev@gmail.com</p>
                    </a>
                </div>
            </div>

            <div class="technologies card-content">
                <h3>Technologies</h3>
                <div class="techs">
                    <div class="tech-label">HTML</div>
                    <div class="tech-label">CSS</div>
                    <div class="tech-label">JavaScript</div>
                    <div class="tech-label">PHP</div>
                    <div class="tech-label">SQL</div>
                    <div class="tech-label">Python</div>
                    <div class="tech-label">Bootstrap</div>
                    <div class="tech-label">Sass</div>
                    <div class="tech-label">jQuery</div>
                    <div class="tech-label">Git</div>
                    <div class="tech-label">GitHub</div>
                    <div class="tech-label">Wordpress</div>
                </div>
            </div>

            <div class="experiences card-content">
                <h3>Experiences</h3>
                <div class="topics-container">
                    <ul class="list">
                        <li>Mobly</li>
                        <p class="list-date">Jun 2021 - Present</p>
                        <p class="list-detail">Web Developer Intern</p>
                    </ul>
                </div>
            </div>

            <div class="education card-content">
                <h3>Education</h3>
                <div class="topics-container">
                    <ul class="list">
                        <li>Federal University of ABC</li>
                        <p class="list-date">2019 - Present</p>
                        <p class="list-detail">Science and Technology</p>
                    </ul>

                    <ul class="list">
                        <li>ETEC Parque Belem</li>
                        <p class="list-date">2016 - 2018</p>
                        <p class="list-detail">High School and Technical Education in Computer for Internet</p>
                    </ul>
                </div>
            </div>

            <div class="languages card-content">
                <h3>Languages</h3>
                <div class="topics-container">
                    <ul class="list">
                        <li>Portuguese</li>
                        <p class="list-date">Native</p>
                    </ul>

                    <ul class="list">
                        <li>English</li>
                        <p class="list-date">Professional working</p>
                    </ul>
                </div>
            </div>
        </aside>

        <main class="my-portfolio">
            <div class="my-projects">
                <div class="card-content">
                    <h3>My Projects</h3>
                    <a href="https://github.com/guilhermedesousa?tab=repositories" target="_blank">More</a>
                </div>

                <div class="projects-list">

                    <?php

                    // projects displayed: 4
                    $projectsNumber = 4;
                    for ($i = 0; $i < $projectsNumber; $i++): ?>
                        <div class="project card-content">
                            <a href="<?= $repos[$i]->url; ?>">
                                <img src="./assets/images/folder.svg" class="link-icon" alt="" srcset="">
                                <?= $repos[$i]->name; ?>
                            </a>

                            <div class="repository-description">
                                <p><?= $repos[$i]->description; ?></p>
                            </div>

                            <div class="extra-infos-repository">
                                <div>
                                    <div class="stars-count">
                                        <img src="./assets/images/star.svg" class="link-icon repo-icon" alt="" srcset="">
                                        <?= $repos[$i]->stargazers_count; ?>
                                    </div>

                                    <div class="forks-count">
                                        <img src="./assets/images/git-branch.svg" class="link-icon repo-icon" alt="" srcset="">
                                        <?= $repos[$i]->forks_count; ?>
                                    </div>
                                </div>

                                <div>
                                    <div class="repository-language">
                                        <div class="circle-color"></div>
                                        <p><?=  $repos[$i]->language; ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endfor; ?>

                </div>

            </div>

            <div class="recent-posts">
                <div class="post-1"></div>
            </div>
        </main>

        <footer>
            <p>Developed by Guilherme Santos 🚀</p>
        </footer>
    </div>

</body>

</html>