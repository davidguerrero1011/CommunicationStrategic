$(document).ready(function() {

    // Charge Text By Default
    $('#titlePage').append('Las estrategias de comunicación en redes sociales');
    $('#titleNavBar').append('Home');
    $('#titleMainPage').append('Las estrategias de comunicación en redes sociales de los artistas musicales');
    $('#offcanvasNavbarLabel').append('Estrategias De Comunicación');
    $('#navBarMainTitle').append('Home');
    $('#introduction').append('Marco Teorico');
    $('#theme').append('Resultados');
    $('#methodologuy').append('Metodologia');
    $('#navBarMainTitle1').append('Home');
    $('#introduction1').append('Marco Teorico');
    $('#theme1').append('Resultados');
    $('#methodology1').append('Metodologia');
    $('#examples').append('Ejemplos');
    $('#person1').append('Justin Biever');
    $('#person2').append('Bad Bunny');
    $('#person3').append('Rosalia');
    $('#person4').append('Bllie Ellish');
    $('#person5').append('Tangana');
    $('#personIndex1').append('Justin Biever');
    $('#personIndex2').append('Bad Bunny');
    $('#personIndex3').append('Rosalia');
    $('#personIndex4').append('Bllie Ellish');
    $('#personIndex5').append('Tangana');
    $('#search').append('Search');
    $('#aboutUs').append('Sobre Nosotros');
    $('#description').append('Proyecto que quiere mostrar a traves de una página web los conceptos de las estrategias de comunicación en redes sociales.');
    $('#quickWays').append('Caminos Rapidos');
    $('#phoneContact').append('+321 3334597');
    $('#contactUs').append('Contactanos');
    $('#followUs').append('Siguenos');
    $('#resume').append("La evolución del ecosistema en los últimos años, entre el mercado musical online y offline, ha afectado no solo la distribución sino también el consumo y las relaciones con los públicos. <br/> En una investigación exploratoria y cualitativa que busca describir, el fenómeno desde la perspectiva de la comunicación del artista. <br/> Utilizando estudios de casos múltiples, los artistas analizados en este contexto son Justin Bieber, Bad Bunny, Rosalía, Billie Eilish and C. Tangana, en el primer trimestre de 2022. <br/> Los resultados del análisis indican que las comunicaciones de los artistas se centran en dos intenciones. <br/> Primera, se evidencia una inclinación hacia la promoción e información, destacándose el contenido relacionado con la trayectoria musical del artista, abordando conciertos, álbumes y colaboraciones no musicales en plataformas como Instagram, Facebook y Twitter. <br/> Emplea diversos formatos, como imágenes, texto y vídeos, con el objetivo de maximizar la difusión. <br/> Por otro lado, se identifica una estrategia orientada a generar engagement, siendo más evidente en TikTok y en menor medida en Twitter. <br/> En TikTok, los artistas utilizan la brevedad de los vídeos para entretener, compartir aspectos personales y crear contenido humorístico. <br/> En Twitter, se facilita la expresión libre y espontánea, estableciendo un contacto directo con las comunidades y humanizando a los artistas, generando así una conexión más cercana y afectiva con su público. <br/> A modo de conclusiones, se destaca el uso de las redes para fines profesionales, contenido espontáneo y personal como efectivo generador de engagement, la importancia de la interacción directa del artista con su público y la importancia de un discurso y simbología específicos para la diferenciación.");
    $('#card-title-1').append("Las estrategias de comunicación en Artistas");
    $('#card-resume').append("Resumen");
    $('#abstract').append("Las Tecnologías de la Información han instigado la Revolución Digital, en consecuencia, a una metamorfosis de las industrias y actividades en las últimas cuatro décadas. <br/> El desarrollo de dichas tecnologías ha modificado la naturaleza misma de la conexión y la comunicación digital, ya que estas tecnologías permean diversos aspectos de la existencia individual, las relaciones públicas y la comunicación. <br/> La industria musical se ha visto compelida a ajustarse a diversas dinámicas y tendencias emergentes. <br/> A medida que evolucionan las modalidades de distribución en el ámbito musical, se manifiestan simultáneamente transformaciones en las formas de interactuar con las audiencias. <br/> Dichas plataformas han facilitado la realización de conciertos en línea, propiciando incluso la interacción con los artistas a través de plataformas digitales como redes sociales o blogs. <br/> Este enfoque de proximidad hacia la audiencia incita al aumento de las reproducciones y, por ende, de los ingresos generados.<br/> La irrupción de la pandemia de Covid-19 ha tenido repercusiones sustanciales en la industria musical, con el cierre de numerosas salas de conciertos y la cancelación o postergación de eventos en vivo. No obstante, esta coyuntura ha engendrado un incremento en la demanda de conexión humana a través de plataformas digitales como Twinch, TikTok, Instagram y Facebook. <br/> Como resultado, han surgido nuevos formatos de eventos musicales en el ámbito digital, ejemplificado por los denominados 'festivales' gratuitos, transmitidos en tiempo real mediante streaming. <br/> Ilustrativamente, el #Yomequedoencasafestival constituye un paradigma en el cual un extenso conjunto de artistas ha actuado desde sus residencias a través de las redes sociales, permitiendo una notable interactividad con el público");
    $('#introductionResume').append("Introducción");
    $('#introductionTitle').append("Introducción a las estrategias de comunicación en Artistas");
    $('#citation1').append("Investigado en: Revista Internacional de Relaciones Públicas.");
    $('#citation2').append("Fuente: Revista Internacional de Relaciones Públicas.");
    $('#citation3').append("Fuente: Revista Internacional de Relaciones Públicas.");
    $('#citation4').append("Fuente: Revista Internacional de Relaciones Públicas.");
    $('#citation5').append("Fuente: Revista Internacional de Relaciones Públicas.");


    // Charge HTML Elements Or Properties By Default
    $('#navBarMainTitle').attr('href', './index.html');
    $('#introduction').attr('href',    './views/resourceView.html?view=1');
    $('#methodologuy').attr('href',    './views/resourceView.html?view=2');
    $('#theme').attr('href',           './views/resourceView.html?view=3');
    
    // Desde vista diferente al index
    $('#navBarMainTitle1').attr('href', '../index.html');
    $('#introduction1').attr('href',    './resourceView.html?view=1');
    $('#methodology1').attr('href',     './resourceView.html?view=2');
    $('#theme1').attr('href',           './resourceView.html?view=3');

    // Rutas desde fuera del index
    $('#person1').attr('href', './artistContent.html?artist=1');
    $('#person2').attr('href', './artistContent.html?artist=2');
    $('#person3').attr('href', './artistContent.html?artist=3');
    $('#person4').attr('href', './artistContent.html?artist=4');
    $('#person5').attr('href', './artistContent.html?artist=5');

    // Rutas desde el index
    $('#personIndex1').attr('href', '/views/artistContent.html?artist=1');
    $('#personIndex2').attr('href', '/views/artistContent.html?artist=2');
    $('#personIndex3').attr('href', '/views/artistContent.html?artist=3');
    $('#personIndex4').attr('href', '/views/artistContent.html?artist=4');
    $('#personIndex5').attr('href', '/views/artistContent.html?artist=5');


    // Recibo parametros por url desde index
    let params = new URLSearchParams(location.search);
    let viewParam = params.get('view');
    viewParam == 1 ? $('#resourceTitle').append('Marco Teorico') : viewParam == 2 ? 
                     $('#resourceTitle').append('Metodologia') : $('#resourceTitle').append('Resultados');
    
    viewParam == 1 ? $('#resourceContentTitle').append('Marco Teorico') : viewParam == 2 ? 
                     $('#resourceContentTitle').append('Metodologia') : $('#resourceContentTitle').append('Resultados');
    
    viewParam == 1 ? $('#paragraphContentTeoric').removeClass('d-none') : viewParam == 2 ? 
                     $('#paragraphContentMethologic').removeClass('d-none') : $('#paragraphContentResults').removeClass('d-none'); 

    
    let params1 = new URLSearchParams(location.search);
    let artistParams = params1.get('artist');
    artistParams == 1 ? $('#artistTitle').append('Justin Biever') : artistParams == 2 ? 
                        $('#artistTitle').append('Bad Bunny') : artistParams == 3 ? $('#artistTitle').append('Rosalia') :
                        artistParams == 4 ? $('#artistTitle').append('Billie Elish') : $('#artistTitle').append('Tangana');

    artistParams == 1 ? $('#paragraphArtist1').removeClass('d-none') : artistParams == 2 ? 
                     $('#paragrapArtist2').removeClass('d-none') : artistParams == 3 ? 
                     $('#paragrapArtist3').removeClass('d-none') : artistParams == 4 ? $('#paragrapArtist4').removeClass('d-none') :
                     $('#paragrapArtist5').removeClass('d-none');
    
    artistParams == 1 ? $('#titleArtist').append('Justin Biever') : artistParams == 2 ? $('#titleArtist').append('Bad Bunny') :
    artistParams == 3 ? $('#titleArtist').append('Rosalia') : artistParams == 4 ? $('#titleArtist').append('Billie Elish') :
    $('#titleArtist').append('Tangana');   

    // Social Networks
    $('#facebook').attr('href',  'https://www.facebook.com/UMBVirtual');
    $('#twitter').attr('href',   'https://twitter.com/UMBVirtual');
    $('#instagram').attr('href', 'https://www.instagram.com/umb.virtual/');

    // Modal
    $('#contactUsModalLabel').append('Contactanos');
    $('#sendButton').append('Enviar');
    $('#closeModal').append('Cerrar');

    // FormModal
    $('#nameLabel').append('Nombres');
    $('#lastNameLabel').append('Apellidos');
    $('#emailLabel').append('Correo');
    $('#phoneLabel').append('Telefono');
    $('#messageTextArea').append('Mensaje');
});


function showModal() {
    $('#contactUsModal').modal('show');
}