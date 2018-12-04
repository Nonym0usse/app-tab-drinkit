<?php
# @Author: CYRIL VELLA
# @Date:   2018-11-17T15:40:01+01:00
# @Email:  cyril.vella@yahoo.com
# @Last modified by:   CYRIL VELLA
# @Last modified time: 2018-11-17T16:15:53+01:00
# @Copyright: Drink-It
require_once 'lib/Admin.php';
$admin = new Admin();

if($admin->internauteEstConnecte() == false)
{
  header("Location: " . NDD_PATH . "/connexion");

}
?>

  <div class="wrapper">
    <!-- Sidebar  -->
    <nav id="sidebar">
      <div id="dismiss">
        <i class="fas fa-arrow-left"></i>
      </div>

      <div class="sidebar-header">
        <h3>Drink-It</h3>
      </div>

      <ul class="list-unstyled components">
        <li>
          <a href="/">Accueil</a>
        </li>
        <li>
          <a href="/administration">Paramètres</a>
        </li>
        <li>
          <a href="/mentions">Mentions légales</a>
        </li>
        <li>
          <a href="<?= NDD_PATH ?>/deconnexion">Deconnexion</a>
        </li>
      </ul>
    </nav>

    <!-- Page Content  -->
    <div id="content">

      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">

          <button type="button" id="sidebarCollapse" class="btn btn-info">
            <i class="fas fa-bars"></i>
          </button>
        </div>
      </nav>

      <div class="container-fluid">
        <h1 class="title-accueil">Que veux-tu boire ?</h1>
        <div class="row">
          <div class="col-md-6">
            <div class="alcool" id="alcool" onclick="document.location = '<?= NDD_PATH . '/alcool'; ?>'">
              <h1 id="alcool2">Alcool</h1>
            </div>
          </div>
          <div class="col-md-6">
            <div class="soft" id="soft"  onclick="document.location = '<?= NDD_PATH . '/soft'; ?>'">
              <h1 id="soft1">Soft</h1>
            </div>
          </div>

        </div>
      </div>

    </div>
  </div>

  <div class="overlay"></div>



  <!-- jQuery CDN - Slim version (=without AJAX) -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <!-- Popper.JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
  <!-- Bootstrap JS -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
  <!-- jQuery Custom Scroller CDN -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>
  <script>
    var taille = $('#alcool').height() / 2.25;
    document.getElementById("soft1").style.paddingTop = taille+"px";

    var taille2 = $('#soft').height() / 2.25;
    document.getElementById("alcool2").style.paddingTop = taille2+"px";

  </script>
  <script type="text/javascript">
    $(document).ready(function () {
      $("#sidebar").mCustomScrollbar({
        theme: "minimal"
      });

      $('#dismiss, .overlay').on('click', function () {
        $('#sidebar').removeClass('active');
        $('.overlay').removeClass('active');
      });

      $('#sidebarCollapse').on('click', function () {
        $('#sidebar').addClass('active');
        $('.overlay').addClass('active');
        $('.collapse.in').toggleClass('in');
        $('a[aria-expanded=true]').attr('aria-expanded', 'false');
      });
    });
  </script>
</body>

</html>
