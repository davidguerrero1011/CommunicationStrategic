<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $_GET['artist'] == 1 ? "Justin Biever" : ($_GET['artist'] == 2 ? "Bad Bunny" : ($_GET['artist'] == 3 ? "Rosalia" : ($_GET['artist'] == 4 ? "Billie Elish" : "Tangana"))) ?></title>

    <!-- Bootstrap Library CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- General CSS -->
    <link rel="stylesheet" href="../public/css/general.css">

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Gupter:wght@400;500;700&family=Inconsolata:wght@200..900&display=swap" rel="stylesheet">
</head>

<body>


    <nav class="navbar bg-nav-umb fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand gupter-bold text-show" id="titleNavBar"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end bg-nav-umb" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title gupter-regular" id="offcanvasNavbarLabel"></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link gupter-regular text-show active" aria-current="page" id="navBarMainTitle1"></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link gupter-regular text-show" id="introduction1"></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link gupter-regular text-show" id="methodology1"></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link gupter-regular text-show" id="theme1"></a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle gupter-regular" href="#" role="button" id="examples" data-bs-toggle="dropdown" aria-expanded="false"></a>
                            <ul class="dropdown-menu bg-nav-umb">
                                <li><a class="dropdown-item gupter-regular text-show" id="person1" href="#"></a></li>
                                <li><a class="dropdown-item gupter-regular text-show" id="person2" href="#"></a></li>
                                <li><a class="dropdown-item gupter-regular text-show" id="person3" href="#"></a></li>
                                <li><a class="dropdown-item gupter-regular text-show" id="person4" href="#"></a></li>
                                <li><a class="dropdown-item gupter-regular text-show" id="person5" href="#"></a></li>
                            </ul>
                        </li>
                    </ul>
                    <form class="d-flex mt-3" role="search">
                        <input class="form-control me-2 gupter-regular" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-primary gupter-regular" type="submit" id="search"></button>
                    </form>
                </div>
            </div>
        </div>
    </nav>


    <h1 class="text-center gupter-regular" style="margin-top: 7%;"><?= $_GET['artist'] == 1 ? "Justin Biever" : ($_GET['artist'] == 2 ? "Bad Bunny" : ($_GET['artist'] == 3 ? "Rosalia" : ($_GET['artist'] == 4 ? "Billie Elish" : "Tangana"))) ?></h1>
    <p class="card-text gupter-regular beautiful-text mx-5 my-5" id="paragraphContent">
        <?php 
            if($_GET['artist'] == 1) { ?>
                Justin Bieber ostenta una audiencia considerable en las redes sociales, con un total de 235
                millones de seguidores en Instagram, 114 millones en Twitter, 91 millones en Facebook y 24,6
                millones en TikTok. De manera destacada, la plataforma de preferencia del artista es
                Instagram, donde realiza aproximadamente diez publicaciones por semana,
                mayoritariamente en formato carrusel de imágenes. Cabe señalar que una parte significativa
                del contenido compartido en Instagram se replica en su cuenta de Facebook. <br> Contrariamente,
                el empleo de TikTok se presenta de manera residual, con un total de seis publicaciones en el
                periodo analizado.<br> A pesar de la elevada cantidad de seguidores en Twitter, se destaca la
                limitada actividad en dicha plataforma, evidenciada por la emisión de un único tuit.<br> El
                contenido exhibido en las plataformas de redes sociales de Justin Bieber se orienta
                principalmente hacia la promoción e información relativa a su carrera musical. Además, se
                vislumbra contenido que aborda la esfera personal del artista, mostrando aspectos de su vida
                cotidiana, su círculo familiar, amigos y otras dimensiones de su día a día (Figura 1). <br>En este
                contexto, las publicaciones emitidas en Instagram y TikTok se diseñan con la intención de
                entretener y fomentar el engagement con su comunidad de seguidores. No obstante, en
                menor medida y exclusivamente en la plataforma de Instagram, se identifican otras
                publicaciones de relevancia que buscan concientizar, educar y difundir los valores y la fe del
                artista con relación a su creencia en Dios.<br>
                Los comentarios de los seguidores se centran predominantemente en elogiar al artista
                mediante el uso de emoticonos y mensajes afectuosos. De manera adicional, se observa que
                los seguidores intercambian comentarios entre sí y expresan su aprobación mediante "me
                gusta" en las observaciones de otros. <br>En lo que respecta a la interacción directa de Justin
                Bieber con sus seguidores, no se aprecia ningún tipo de retroalimentación por parte del artista
                en ninguna de sus plataformas, manteniendo así una distancia en cuanto a la interacción con
                su comunidad.<br>
                En las publicaciones relacionadas con música y conciertos, se manifiesta un tono comunicativo
                de naturaleza neutra e informativa, reservando la expresión emocional para aquellos
                contenidos que abordan su vida personal.<br> En el análisis de las entrevistas, se observa la
                intención del artista de establecer una conexión cercana con su audiencia, empleando frases
                como "quiero que la gente piense de mí: este tío realmente es solo un humano" (Bieber, 2020,
                1m20s) y "me gusta contar mi historia... quiero estar conectado con la gente e influir a otras
                personas" (Bieber, 2020, 18m43s). Así, la identidad del artista se fundamenta en la sinceridad
                y la sensibilidad (Bieber, 2022, 5m20s).<br>
                En cuanto al contenido de sus redes sociales y su elección de vestimenta, se aprecia una
                amplia gama de colores, con una marcada predilección por los tonos neón, provenientes tanto
                de las luces de los conciertos como de su vestimenta. El artista adopta un estilo casual y
                urbano, caracterizado por el uso de sudaderas, pantalones anchos y zapatillas deportivas,
                complementando sus atuendos con accesorios como gafas de sol, gorros y gorras.<br> Este
                enfoque, identificado como un estilo Street, otorga especial importancia a los tatuajes, que
                no solo contribuyen a definir su apariencia física, sino que también encapsulan aspectos de su
                personalidad y sus ideas.<br> Un ejemplo de ello es el tatuaje de una rosa en su cuello, que
                simboliza los momentos difíciles de su vida (Bieber, 2020).<br>
                Es relevante señalar que no existe una marcada discrepancia en la elección de vestimenta
                entre sus apariciones públicas en entrevistas, sus actuaciones en videoclips o sus momentos
                cotidianos en las redes sociales. Este hecho evidencia la consistencia del artista en la
                proyección de su estilo distintivo a lo largo de diversas formas de comunicación.<br>

        <?php
        } elseif ($_GET['artist'] == 2) { ?>
            Con el propósito de profundizar en la comprensión de la comunicación en las redes sociales
            de los artistas musicales, se plantea la implementación de un estudio de casos múltiples,
            holísticos, descriptivos y sincrónicos, siguiendo la metodología propuesta por Yin (2009). Este
            enfoque implica el análisis individualizado de la comunicación de diversos artistas durante un
            periodo de tres meses, con el objetivo de proporcionar una descripción detallada de su
            interacción con sus comunidades y/o seguidores en plataformas de redes sociales.

            <div class="table-responsive-sm">
                <table class="table table-dark table-bordered table-striped-columns mx-5">
                    <thead>
                        <tr>
                            <th>Método de Investigación</th>
                            <th>Técnica de Tratamiento de Datos</th>
                            <th>Técnica</th>
                            <th>Proceso Para Concluir</th>
                        </tr>
                    </thead>
                    <tbody class="table-group-divider">
                        <tr>
                            <td>Estudio de casos</td>
                            <td>Análisis de contenido y documentos</td>
                            <td>Descripción y comparación</td>
                            <td>Extracción de patrones, tendencias. <br> Correlaciones con el marco teorico</td>
                        </tr>
                    </tbody>
                </table>
            </div>

        <p class="card-text gupter-regular beautiful-text mx-5 my-5" id="paragraphContent">
            La selección de los artistas objeto de estudio se llevó a cabo mediante la aplicación de criterios
            específicos, considerando aspectos como la internacionalidad, la diversidad de géneros
            musicales, el índice de escucha en Spotify y la popularidad en Instagram, medida a través del
            número de seguidores. La intención subyacente consiste en examinar la comunicación desde
            perspectivas diversas, empleando el criterio de diversidad máxima. Tras este proceso de
            selección, se identificaron cinco artistas: Justin Bieber, Bad Bunny, Rosalía, Billie Eilish y C.
            Tangana.
            Se ha procedido a la selección de la comunicación emitida a través de las plataformas
            Instagram, TikTok, Twitter y Facebook durante el periodo comprendido entre el 1 de enero de
            2022 y el 30 de marzo de 2022. Se fundamenta esta elección en la consideración de que estas
            herramientas de comunicación representan los canales a través de los cuales se puede
            observar al artista interactuar y expresarse de manera más informal y próxima, al tratarse de
            sus redes sociales personales. En consonancia, se ha efectuado un análisis de los comentarios
            emitidos por los seguidores en las mencionadas plataformas, con el propósito de comprender
            la dinámica comunicativa de la comunidad. El examen del contenido de las redes sociales ha
            sido realizado bajo un enfoque cualitativo, desglosándose en 11 parámetros: frecuencia,
            formato, contenido, intención comunicativa de los mensajes, tono de comunicación,
            expresiones, gestos, saludo, colores, tipo de ropa y accesorios. Este análisis se complementa
            con la selección de videoclips y entrevistas, identificadas como elementos potenciales en los
            que el formato audiovisual y la mayor duración ofrecen la posibilidad de captar símbolos y
            mensajes más profundos. Se han seleccionado los cinco videoclips y entrevistas más recientes
            dentro del periodo de análisis, con la intención de garantizar que la imagen proyectada sea lo
            más fiel posible a la actualidad.
            En cuanto al análisis de las entrevistas, se han considerado nueve factores: tono, expresiones,
            gestos, saludo, rasgos de personalidad dominantes, estética, vestimenta, accesorios y
            peinados. Para los videoclips, se han examinado elementos en cinco parámetros: rasgos de
            personalidad dominantes, estética, vestimenta, accesorios y peinados.
        </p>
        <?php
        } else { ?>
            La utilización de un análisis de casos múltiples ha facultado la exploración y discernimiento
            cualitativo de los aspectos más significativos de la comunicación desplegada por cada artista.
            En aras de establecer un contexto cuantitativo, se han recopilado y determinado datos
            relativos a las redes y su actividad. En la fase de presentación y análisis de los datos, se procede
            a la síntesis de los elementos más relevantes de la información recabada.
  <?php } ?>
    </p>
    <q class="gupter-bold mx-5" id="citation2"></q>

    <footer class="mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-3">
                    <h5 class="gupter-medium text-center" id="aboutUs"></h5>
                    <p class="gupter-regular text-center" id="description"></p>
                </div>
                <div class="col-md-4 mb-3">
                    <h5 class="gupter-medium text-center" id="quickWays"></h5>
                    <ul class="list-unstyled text-center">
                        <li><a href="#" class="text-decoration-none text-dark gupter-regular" onclick="showModal()" id="contactUs"></a></li>
                    </ul>
                </div>
                <div class="col-md-4 mb-3">
                    <h5 class="gupter-medium text-center" id="followUs"></h5>
                    <ul class="list-inline social-icons text-center">
                        <li class="list-inline-item"><a id="facebook" class="text-dark"><i class="bi bi-facebook"></i></a></li>
                        <li class="list-inline-item"><a id="twitter" class="text-dark"><i class="bi bi-twitter"></i></a></li>
                        <li class="list-inline-item"><a id="instagram" class="text-dark"><i class="bi bi-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
            <hr class="mb-4">
            <div class="row">
                <div class="col-md-12 text-center">
                    <p class="gupter-regular">&copy; 2024 Universidad Manuela Beltran. Todos los derechos reservados.</p>
                </div>
            </div>
        </div>
    </footer>



    <!-- Jquery Library -->
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>

    <!-- General Javascript -->
    <script src="../public/javascript/general.js"></script>

    <!-- Bootstrap Library JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>

</html>