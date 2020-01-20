<?php
/**
 * Templates render the content of your pages. 
 * They contain the markup together with some control structures like loops or if-statements.
 * This template is responsible for rendering all the subpages of the `notes` page.
 * The `$page` variable always refers to the currently active page. 
 * To fetch the content from each field we call the field name as a method on the `$page` object, e.g. `$page->title()`.
 * Snippets like the header and footer contain markup used in multiple templates. They also help to keep templates clean.
 * More about templates: https://getkirby.com/docs/guide/templates/basics
 */
?>

<?php snippet('header') ?>

<main>
  <article class="note">
    <header class="note-header intro">
      <h1><?= $page->title() ?></h1>
      <time class="note-date"><?= $page->date()->toDate('d F Y') ?></time>
      <?php if ($page->tags()->isNotEmpty()) : ?>
      <p class="note-tags tags"><?= $page->tags() ?></p>
      <?php endif ?>
    </header>

    <div class="note-text text">
      <?= $page->text()->kt() ?>
    </div>

/** linsey probeert hier een menu te maken */


    <div class="features">
    <div class="title">
        <?= $page->featurestitle()->kirbytext() ?>
        <span></span>
    </div>

    <div id="features"></div>

    <div class="row tab">
        <div class="col-md-2 tablinks" onclick="openCity(event, 'first')">
            <div class="feature" id="first-step">
                Stap 1
            </div>
        </div>
        <div class="col-md-2 tablinks" onclick="openCity(event, 'second')">
            <div class="feature" id="second-step">
                Stap 2
            </div>
        </div>
        <div class="col-md-2 tablinks" onclick="openCity(event, 'third')">
            <div class="feature" id="third-step">
                Stap 3
            </div>
        </div>
        <div class="col-md-2 tablinks" onclick="openCity(event, 'fourth')">
            <div class="feature" id="fourth-step">
                Stap 4
            </div>
        </div>
        <div class="col-md-2 tablinks" onclick="openCity(event, 'fifth')">
            <div class="feature" id="fifth-step">
                Stap 5
            </div>
        </div>
    </div>

</div>

<div id="first" class="tabcontent">
  <h3>Stap 1</h3>
  <p>Verzamel zo veel als mogelijk mensen van verschillende rollen voor een team! (Denk aan: Interaction Designer, visual designer, front-ender, back-ender, project-coordinator, product holder etc.)
Zet hiermee een team op die gaan bedenken over verbeteringen van een service/een service opzetten.</p>
<br></br>
</div>

<div id="second" class="tabcontent">
  <h3>Stap 2</h3>
  <p>Maak het doel waarnaar je gezamenlijk als team naartoe werkt concreet. Maak je een service blueprint om een service te verbeteren? Welke touchpoints gebruikt hierbij de gebruiker? Welke stakeholders komen er hier nog meer aan te pas? Is er al informatie beschikbaar? Wat moet de service blueprint uiteindelijk oplossen voor de organisatie?</p>
  <br></br>
</div>

<div id="third" class="tabcontent">
  <h3>Stap 3</h3>
  <p>Verzamel research over de (eind) gebruikers, stakeholders (welke organisaties komen nog meer te pas voor deze ‘specifieke service’), interne medewerkers.
Kortom:
<br>
Externe informatie van de gebruikers (User journey, interviews, persona’s etc.)
Interne informatie van de medewerkers (hoe ervaren zij werken voor organisatie X? Wat zijn voor hun interactie-punten/momenten).
<br></br></p>
</div>

<div id="fourth" class="tabcontent">
  <h3>Stap 4</h3>
  <p>Het opzetten van de Service Blueprint: <br>
• Workshop organiseren waarbij iedereen fysiek aanwezig is, hierdoor kan je makkelijker gezamenlijk nadenken over verschillende touchpoints etc.
Zorg dat er grote bladen aan de muur waarop je met post-its verschillende inzichten kan opplakken.
Mocht het zo zijn dat je niet gezamenlijk in 1 ruimte kan zitten, zorg dan voor een ‘digitaal’ whiteboard waarop je gezamenlijk inzichten kan plaatsen.
<br></br>
• Zet de gebruikers-acties in kaart.
Bij een service blueprint draait het meer om de medewerkers-acties dan de gebruikers-acties, maar het is alsnog van belang dat de gebruikers acties worden vermeld bij elke stap van het proces (en de daarbij parallelle acties van een medewerker). 
<br></br>
• Zet de mederwerkers ‘front-stage’ & ‘back-stage’ in kaart.
Dit is de kern van een service blueprint, zet alle stappen van de medewerkers en hoe deze communiceren aan de gebruikers aan de front-stage kant van de blueprint, en de interne communicatie aan de back-stage kant. Let wel op! Gebruik hier inzichten van medewerkers van je bedrijf, gebruik hiervoor interviews die je bij een eerdere stap heb afgenomen met medewerkers zodat je realistische afspiegeling hebt wat er intern plaatst vind bij de organisatie.
<br></br>
• Zet support processen in kaart (met bewijs van deze processen).
Zet het proces erbij wat er voor zorgt dat de medewerker contact krijgt met de gebruiker, dit kan digitale artefacten zijn of telefoonjes tot contact in real life/front desk.</p>
<br></br>
</div>

<div id="fifth" class="tabcontent">
  <h3>Stap 5</h3>
  <p>Definieer en concretiseer de service blueprint met overige informatie wat er nog aan ‘ontbreekt’.</p>
  <br></br>
</div>

<script>
function openCity(evt, subject) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(subject).style.display = "block";
  evt.currentTarget.className += " active";
}
</script>

/** einde van linseys tryout */

  </article>
</main>

<?php snippet('footer') ?>
