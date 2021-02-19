<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>MCWD - Product Landing Page</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous" />
  <link rel="stylesheet" href="styles/main.css" />
</head>

<body>
  <header>
    <?php include './includes/nav.php' ?>
  </header>



  <main>
    <section id="hero">
      <!-- Hero-LEFT -->
      <div class="hero-left">
        <h1 class="hero-header">AKAI <span class="contrast-text-block">Timbre</span> Wolf</h1>
        <div class="hero-subheader">
          <p>
            The Timbre Wolf is a polyphonic 4-voice analog synth with a novel approach to how the voices interact. Featuring a single VCA – either square or saw – each voice is run through a 4-pole low-pass filter with resonance. The filter for each voice is modulated by an envelope, which can be shaped by dedicated decay and envelope amount knobs.
          </p>
        </div>
        <div class="hero-btn">
          <a href="#">Buy Now</a>
        </div>
      </div>

      <!-- Hero-RIGHT -->
      <div class="hero-right">
        <div class="hero-img">
          <img src="./images/akai-timbre-wolf.png" alt="Akai timbre wolf" />
        </div>
        <div class="hero-background-text">AKAI</div>
        <div class="callToAction"></div>
      </div>
      <!-- End of HERO section -->
    </section>

    <section id="about">
      <h2>About The <span class="contrast-text-block">Timbre</span> Wolf</h2>
      <div>
        <p>
          The aforementioned classic parameters can be tweaked to quickly dial up fat, great-sounding analog but there’s much more under the hood once you get beyond the basics. Individual voices can be tuned slightly or radically different from each other and played independently, performed polyphonically in a “round robin” style or in unison, where all four play at once. With individual outs for each voice, the potential for all sorts of creative routing and mixing is unleashed.
        </p>
      </div>
    </section>

    <section id="tech">
      <div class="tech-header">
        <h2>Technology</h2>
        <p>
          Not only can the sound be customized to taste, but so can the way each voice is sequenced and played back. All four voices have their own 32-step dedicated sequencer with A/B and fill variation. The sequencer features 4 tracks in total. Each of the sequence tracks send their notes via MIDI, meaning if you’re using the sequence in poly mode, you can have track 1 send its notes to the Timbre Wolf and use tracks 2-4 to control other synths, keyboards, drum machines, etc.
        </p>
      </div>

      <div class="tech-card">
        <div class="tech-svg"><img src="./images/analog.svg" alt="analog" /></div>
        <h3>Analog</h3>
        <p>
          True analog 4-voice polyphonic synthesizer
        </p>
      </div>
      <div class="tech-card">
        <div class="tech-svg"><img src="./images/polyphonic.svg" alt="polyphonic" /></div>
        <h3>Mono/Poly</h3>
        <p>
          Configurable as 4 mono synths, a 4-voice unison or a 4-voice polysynth
        </p>
      </div>
      <div class="tech-card">
        <div class="tech-svg"><img src="./images/customisable.svg" alt="customisable" /></div>
        <h3>Customisable</h3>
        <p>
          Independently customize the sound of each voice as you play
        </p>
      </div>
      <div class="tech-card">
        <div class="tech-svg"><img src="./images/digital.svg" alt="digital" /></div>
        <h3>I/O</h3>
        <p>
          Gate trigger In/Out, for triggering your sequences via modular synths, vintage sequencers or external sound sources
        </p>
      </div>
      <div class="tech-card">
        <div class="tech-svg"><img src="./images/sequencer.svg" alt="sequencer" /></div>
        <h3>Sequencer</h3>
        <p>
          32-step sequencer for each voice
        </p>
      </div>

    </section>
  </main>

  <?php include './includes/footer.php' ?>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

</html>