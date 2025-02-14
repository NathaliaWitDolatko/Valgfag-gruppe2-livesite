<?php
get_header();
?>

<main class="hund-main">
  <section class="specificDogInformationContainer">
    <h1><?php echo get_the_title(); ?></h1>
    <div class="imagesAndContact">
      <article class="dogImages">
        <div class="bigImg">
          <?php echo get_the_post_thumbnail(); ?>
        </div>
        <div class=" smallImgs">
          <?php
          // Vores kode henter vores gruppe "Billeder" der ligger i vores ACF, som indeholder flere billeder. Den viser billederne et ad gangen, hvis de findes. 
          $billeder = get_field('billeder');

          if ($billeder) {
            // hvis billede_1 er ikke tomt, så vises billedet
            // ! = not/ikke
            if (!empty($billeder['billede_1'])) {
              echo '<img src="' . esc_url($billeder['billede_1']) . '"" />';
            }

            if (!empty($billeder['billede_2'])) {
              echo '<img src="' . esc_url($billeder['billede_2']) . '"" />';
            }

            if (!empty($billeder['billede_3'])) {
              echo '<img src="' . esc_url($billeder['billede_3']) . '"" />';
            }
          }
          ?>
        </div>
      </article>

      <article class="container">
        <h2>Kontakt os omkring <?php the_title() ?></h2>
        <form action="action_page.php">
          <label for="name"></label>
          <input
            type="text"
            id="name"
            name="firstname"
            placeholder="Dit navn.." />

          <label for="Email"></label>
          <input
            type="text"
            id="email"
            name="firstname"
            placeholder="Din email" />

          <label for="number"></label>
          <input
            type="text"
            id="number"
            name="firstname"
            placeholder="Dit telefon nr." />

          <label for="subject"></label>
          <textarea
            id="subject"
            name="subject"
            placeholder="Skriv en besked"
            style="height: 80px"></textarea>
          <input type="submit" value="Send beskeden" />
        </form>
      </article>
    </div>

    <article class="dogMetaData">
      <div>
        <h4>Alder:</h4>
        <p><?php echo get_field('alder'); ?></p>

        <h4>Vægt:</h4>
        <p><?php echo get_field('vaegt'); ?> kg</p>
      </div>

      <div>
        <h4>Køn:</h4>
        <p><?php echo get_field('koen'); ?></p>

        <h4>Pris:</h4>
        <p><?php echo get_field('pris'); ?> kr</p>
      </div>

      <div>
        <h4>Race:</h4>
        <p><?php echo get_field('race'); ?></p>

        <h4>Chipped:</h4>
        <p><?php echo get_field('chipped'); ?></p>
      </div>
    </article>

    <article class="beskrivelse">
      <h4>Beskrivelse:</h4>
      <p>
        <!-- Her bruger vi funktionen the_content() til at hente vores indhold -->
        <?php the_content(); ?>
      </p>
    </article>
  </section>

  <section class="forsideDyrTilAdoption">
    <h2>Andre der søger et hjem</h2>
    <div class="titles">
      <p>Mød flere søde dyr der venter</p>
      <a href="<?php echo site_url("/adoption") ?>">Se alle dyrene <i class="fa-solid fa-arrow-right"></i></a>
    </div>

    <section class="animalCards">
      <article class="animalCard">
        <a class="animalCard" href="#">
          <img src="<?php echo get_theme_file_uri('/assets/img/catCosmo.jpg'); ?>" loading="lazy" alt="en kat der ligger ned" />
          <article class="animalCardInfo">
            <h3>Cosmo</h3>
            <div class="gender">
              <p>Han</p>
            </div>
          </article>
        </a>
      </article>

      <article class="animalCard">
        <a href="<?php echo site_url("/adoption/charlie") ?>">
          <img src="<?php echo get_theme_file_uri('/assets/img/goldenRetrieverCharlie.jpg'); ?>" loading="lazy" alt="en hvid golden retriever der ligger i en grå hundeseng" />
          <div class="animalCardInfo">
            <h3>Charlie</h3>
            <div class="gender">
              <p>Han</p>
            </div>
          </div>
        </a>
      </article>

      <article class="animalCard">
        <a href="<?php echo site_url("/adoption/molly") ?>">
          <img src="<?php echo get_theme_file_uri('/assets/img/pomeranianMolly.jpg'); ?>" loading="lazy" alt="en pomeranian der sidder udenfor" />
          <article class="animalCardInfo">
            <h3>Molly</h3>
            <div class="gender">
              <p>Tæve</p>
            </div>
          </article>
        </a>
      </article>

      <article class="animalCard">
        <a href="#">
          <img src="<?php echo get_theme_file_uri('/assets/img/bunnyPjuske.jpg'); ?>" loading="lazy" alt="en grå og brun kanin" />
          <article class="animalCardInfo">
            <h3>Pjuske</h3>
            <div class="gender">
              <p>Han</p>
            </div>
          </article>
        </a>
      </article>
    </section>
  </section>
</main>
<?php
get_footer();
?>