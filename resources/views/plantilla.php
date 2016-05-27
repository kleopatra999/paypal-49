<!DOCTYPE html>
<html>
<head>
  <title>Plantilla CSS</title>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="/css/style.css">
</head>
<body>
<div class="wrapper">
    <header>
      <h1> Mi Sitio Web </h1>
      <nav>
          <ul>
            <li><a href="" class="current">Principal</a></li>
            <li><a href="">Fotos</a></li>
            <li><a href="">Videos</a></li>
            <li><a href="">Contacto</a></li>
          </ul>
        </nav>
     </header>
     <section class="content">
       <article>
           <figure>
             <img src="/water.jpg">
             <figcaption> Esta es la imagen del primer mensaje. </figcaption>
           </figure>
           <hgroup>
               <h2>Título del mensaje uno</h2>
               <h3>Subtítulo del mensaje uno</h3>
           </hgroup>
           <time datetime="2011-12-10" pubdate="">Publicado 10-12-2011:</time><br>
           <p id="p1">Este es el texto de mi primer mensaje. </p>
           <p>Comentarios (0)</p>
       </article>
       <article>
          <figure>
            <img src="/city.jpg">
            <figcaption> Esta es la imagen del segundo mensaje. </figcaption>
          </figure>
          <hgroup>
              <h2>Tí­tulo del mensaje dos</h2>
              <h3>Subtítulo del mensaje dos</h3>
              <time datetime="2011-12-15" pubdate="">Publicado 15-12-2011:</time><br>
              <p id="p1">Este es el texto de mi segundo mensaje. </p>
              <p>Comentarios (0)</p>
          </hgroup>
          </article>
      </section>
      <aside>
        <section>
            <h2>Mensajes</h2>
            <a href=""> Mensaje Número Uno</a>
            <a href=""> Mensaje Número Dos</a>
        </section>
      </aside>
      <footer>
			     Derechos Reservados	&copy; 2016 Manuel Samudio
			</footer>
</div>
</body>
</html>
