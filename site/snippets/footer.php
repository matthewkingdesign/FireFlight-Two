<!-- This is our footer file where everything closes. -->
<!-- We are using a php foreach loop to dynamically access the menu. Then using kirby objects to get the correct info from the txt files
We are only using listed (or numbered folders in the file structure)-->
  <!-- <?= snippet('cookie'); ?> -->
    </div> <!-- container -->
  
    <div class="phone-contact">
        <div class="phone-number">+44 7735 886211</div>
        <a href = "mailto: support@fireflightdrones.com"><div class="phone-email">support@fireflightdrones.com</div></a>
      </div>
    </div>
  </body>
  <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  </script>
  <script src="https://unpkg.com/@barba/core"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.4.2/gsap.min.js"></script>
  <?= js('assets/js/less.min.js') ?>
  <?= js('assets/js/jquery.waypoints.min.js') ?>
  <?= js('assets/js/script.js') ?>
</html>
