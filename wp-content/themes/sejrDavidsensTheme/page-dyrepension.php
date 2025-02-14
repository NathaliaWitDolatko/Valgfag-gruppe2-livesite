<?php
get_header();
?>

<main class="dyrepension-main">
  <div class="hero-dyrpension">
    <h1>Dyrepension</h1>
  </div>
  <section class="content-dyrepension">
    <div class="content-text-dyrepension">
      <h2>Dit kæledyrs andet hjem </h2>
      <p>Hos Sejr & Davidsen sætter vi dit kæledyrs velvære i første række. Vores dygtige personale sørger for, at dit kæledyr får kærlig pleje, masser af opmærksomhed og et trygt miljø, uanset om det er for en kort eller længere periode. Vi tilbyder rummelige ophold, daglig motion, sunde måltider og individuel omsorg, så du kan tage af sted med ro i sindet og vide, at dit kæledyr er i de bedste hænder.</p>
    </div>
    <img src="<?php echo get_theme_file_uri('/assets/img/brunHundDerlaaberRezise.jpg'); ?>">
  </section>


  <section class="info-section-dyrepension">
    <div class="h2-dyrepension">
      <h2>Vores ydelser</h2>
    </div>
    <div class="info-grid-dyrepension">
      <div class="info-item-dyrepension">
        <i class="fa-solid fa-paw"></i>
        <p>Hundepension: Daglig motion, socialisering og individuelle gåture.</p>
      </div>
      <div class="info-item-dyrepension">
        <i class="fa-solid fa-paw"></i>
        <p>Kattepension: Trygge omgivelser, rolige gemmesteder og masser af kærlighed.</p>
      </div>
      <div class="info-item-dyrepension">
        <i class="fa-solid fa-paw"></i>
        <p>Andre kæledyr: Vi giver dem trygge og professionelle omgivelser.</p>
      </div>
      <div class="info-item-dyrepension">
        <i class="fa-solid fa-paw"></i>
        <p>Dagpleje: Har du en lang arbejdsdag? Vi tager os af dit kæledyr i løbet af dagen.</p>
      </div>
      <div class="info-item-dyrepension">
        <i class="fa-solid fa-paw"></i>
        <p>Overnatninger: Komfort og tryghed hele natten.</p>
      </div>
      <div class="info-item-dyrepension">
        <i class="fa-solid fa-paw"></i>
        <p>Hentning: Ved hentning vil vi give dig en opdatering om, hvordan dit kæledyr har haft det.</p>
      </div>
    </div>
  </section>


  <section class="hundepriser">
    <article class="kontaktogpriser">
      <h2>Hundepension Priser</h2>
      <h3>Overnatninger</h3>
      <p>Indlevering mellem kl. 9:00 og 10:00 - Afhentning mellem kl. 17:00 og 18:00 (lørdag 16.00-17.00)
      </p>
      <div class="line-dyrpension">
        <p>1 hund pr. værelse
          <hr class="line"> 220 kr pr dag
        </p>
      </div>
      <div class="line-dyrpension">
        <p>2 hund pr. værelse
          <hr class="line"> 320 kr pr dag
        </p>
      </div>
      <div class="line-dyrpension">
        <p>3 hund pr. værelse
          <hr class="line"> 400 kr per dag
        </p>
      </div>
      <h3>Dagpleje</h3>
      <p>Indlevering mellem kl. 7:00 og 10:00 - Afhentning mellem kl. 17:00 og 18:00 (lørdag 16.00-17.00)</p>
      <div class="line-dyrpension">
        <p>1 hund pr. værelse
          <hr class="line"> 180 kr pr dag
        </p>
      </div>
      <div class="line-dyrpension">
        <p>2 hund pr. værelse
          <hr class="line"> 280 kr pr dag
        </p>
      </div>
      <div class="line-dyrpension">
        <p>3 hund pr. værelse
          <hr class="line"> 360 kr per dag
        </p>
      </div>
    </article>
    <div class="container">
      <h2>Kontakt os omkring Hundepension</h2>
      <form action="action_page.php">

        <label for="name"></label>
        <input type="text" id="fname" name="firstname" placeholder="Dit navn..">

        <label for="Email"></label>
        <input type="text" id="Email" name="firstname" placeholder="Din email">

        <label for="number"></label>
        <input type="text" id="Email" name="firstname" placeholder="Dit telefon Nr">

        <label for="subject"></label>
        <textarea id="subject" name="subject" placeholder="Skriv en besked" style="height:200px"></textarea>
        <input type="submit" value="Send beskeden">

      </form>
    </div>
  </section>
  <section class="forsideFEP">


    <div>
      <article class="treaningFEP smallFocusEntryPoint focusEntryPoint">
        <h3>Kattepension</h3>
        <p>Find din nye ven</p>
        <a class="btn" href="#">Se kattepensionen</a>
      </article>

      <article class="vejledningFEP smallFocusEntryPoint focusEntryPoint">
        <h3>Andre Kæledyr</h3>
        <p>Find din nye ven</p>
        <a class="btn" href="#">Ring og høre mere</a>
      </article>
    </div>
  </section>


</main>
<?php
get_footer();
?>