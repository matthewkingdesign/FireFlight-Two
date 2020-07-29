<!-- This is our footer file where everything closes. -->
<!-- We are using a php foreach loop to dynamically access the menu. Then using kirby objects to get the correct info from the txt files
We are only using listed (or numbered folders in the file structure)-->

    <footer>
      <nav class="menu">
        <?php foreach($site->children()->listed() as $subpage): ?>
          <a class="menuItem" href="<?= $subpage->url() ?>"><?= $subpage->title() ?></a>
        <?php endforeach ?>
      </nav>
    </footer>
  </div> <!-- container -->
  </body>

</html>
