<!DOCTYPE html>
<html lang="en">
  <?php include('head.php'); ?>
   <body class="game_info" data-spy="scroll" data-target=".header">
      <?php include('header.php'); ?>

      <!-- Carousel -->
      <section id="top">
         <div class="carousel fade-carousel slide" data-ride="carousel" data-interval="4000" id="bs-carousel">
           <!-- Overlay -->
           <div class="overlay"></div>

           <!-- Indicators -->
           <ol class="carousel-indicators">
             <li data-target="#bs-carousel" data-slide-to="0" class="active"></li>
             <li data-target="#bs-carousel" data-slide-to="1"></li>
             <li data-target="#bs-carousel" data-slide-to="2"></li>
           </ol>
           
           <!-- Wrapper for slides -->
           <div class="carousel-inner">
             <div class="item slides active">
               <div class="slide-1"></div>
               <div class="hero">
                 <hgroup>
                     <img src="images/logocircuito.png" style="width: 200px;">
                     <h3 class="spich">Circuito Padel del Oeste</h3>
                 </hgroup>
               </div>
             </div>
             <div class="item slides">
               <div class="slide-2"></div>
               <div class="hero">        
                 <hgroup>
                     <img src="images/logocircuito.png" style="width: 200px;">
                     <h3 class="spich">Una forma diferente de vivir el Padel</h3>
                 </hgroup>       
               </div>
             </div>
             <div class="item slides">
               <div class="slide-3"></div>
               <div class="hero">        
                 <hgroup>
                     <img src="images/logocircuito.png" style="width: 200px;">
                     <h3 class="spich">Una forma diferente de vivir el Padel</h3>
                 </hgroup>
               </div>
             </div>
           </div> 
         </div>
      </section>






      <!-- Proximos Partidos -->
      <section id="fixture" class="fixture">
         <div class="container-fluid">
            <div class="row">
               <div class="main-heading-holder">
                  <div class="main-heading sytle-2">
                     <h2>Próxima Fecha</h2>
                  </div>
               </div>               
            </div>

            <!-- Cronograma -->
            <div class="row">
               <div class="row sede">
                  <img src="images/fecha4/0001.jpg" class="zoom" width="100%">                  
               </div>            
            </div>
            <!-- fin cronograma sede -->



            <!-- Cronograma -->
            <div class="row">
               <div class="row sede">
                  <img src="images/fecha4/0002.jpg" class="zoom" width="100%">                  
               </div>             
            </div>
            <!-- fin cronograma sede -->


            <!-- Cronograma -->
            <div class="row">
               <div class="row sede">
                  <img src="images/fecha4/0003.jpg" class="zoom" width="100%">                  
               </div>             
            </div>
            <!-- fin cronograma sede -->

         </div>   
      </section>


      <section id="sedes">
         <div class="container">

            <div class="row">
               <div class="main-heading-holder">
                  <div class="main-heading sytle-2">
                     <h2>Sedes del Circuito Padel del Oeste</h2>
                  </div>
               </div>               
            </div>

            <div class="row">
               <div class="col-md-12">
            <div class="news-post-holder">
               <div class="news-post-widget">
                  <img class="img-responsive" src="images/img-01_002.jpg" alt="">
                  <div class="news-post-detail">
                     <h2><a href="blog-detail.html">El Nuevo Refugio Padel</a></h2>
                     <p>3 Canchas Techadas + 1 Cancha de Blindex Descubierta + Buffet + Vestuarios</p>
                  </div>
               </div>
               <div class="news-post-widget">
                  <img class="img-responsive" src="images/img-02_003.jpg" alt="">
                  <div class="news-post-detail">
                     <h2><a href="blog-detail.html">El Complejo Padel</a></h2>
                     <p>1 Cancha de Blindex Descubierta + Buffet + Vestuarios</p>
                  </div>
               </div>
            </div>
            <div class="news-post-holder">
               <div class="news-post-widget">
                  <img class="img-responsive" src="images/img-01_001.jpg" alt="">
                  <div class="news-post-detail">
                     <h2><a href="blog-detail.html">Totem bar & Padel</a></h2>
                     <p>2 Canchas Descubiertas + Buffet + Vestuarios</p>
                  </div>
               </div>
            </div>
               </div>                
            </div>
         </div>              
      </section>

      <section class="video_section_main theme-padding middle-bg vedio">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="full">
                     <div class="match_vedio">

                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>

      <section>
         <div class="team-holder theme-padding">
         <div class="container">
            <div class="main-heading-holder">
               <div class="main-heading sytle-2">
                  <h2>Sedes</h2>
                  <p>Tenemos las mejores canchas para que puedas participar de forma profesional</p>
               </div>
            </div>
            <div id="team-slider">
               <div class="container">
                  <div class="col-md-4">
                     <div class="team-column style-2">
                        <img src="images/logo-totem.png" class="img-responsive" alt="">
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="team-column style-2">
                        <img src="images/logo-refugio.png" class="img-responsive" alt="">
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="team-column style-2">
                        <img src="images/logo-complejo.png" class="img-responsive" alt="">
                     </div>
                  </div>
               </div>
            </div>
         </div>
         </div>         
      </section>

      <?php include('footer.php'); ?>
   </body>
</html>