<!-- lien de navigation -->
<div class="ml-5 mt-4 collapse navbar-collapse" id="collapse_target" >
  <ul id="menu" class="navbar-nav mr-auto mb-4 ml-5 ">
      <li>
        <a class="mr-2 nav-link " href="../controller/ctrl_homePage.php" >PROFIL</a>
      </li>
      <li>
        <a class="mr-2 nav-link " href="../controller/ctrl_studentStat.php" >STATISTIQUES</a>
      </li>
      <li>
        <a class="mr-2 nav-link " href="../controller/ctrl_startTest.php" >DEMARRER UN TEST</a>
      </li>
      <li>
        <a class="nav-link" ml-5 href="../controller/logout.php">Se déconnecter</a>
      </li>
  </ul>

 <!-- AFFICHAGE DU CHRONO LORSQU'UN TEST EST DEMARRE -->
  <body onload="decompte();">
    <div class="" id="Chrono"></div>
  </body>
</div>
