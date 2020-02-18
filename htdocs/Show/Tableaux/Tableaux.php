<?php $title = 'Tableau'; ?>
<?php include '../../MyLocalHost/assets/config/config.php'; ?>

    <?php
      /* Tableau imposé */
      $a = [
        "19001" => ["Centre", "Centre", "Centre", "Centre", "Centre", "Centre",
                "", "", "Centre", "Centre", "Stage", "Stage", "Stage", "Stage",
                "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage",
                "Stage", "Validation", "Validation"],
        "19002" => ["Centre", "Centre", "Centre", "Centre", "Centre", "Centre",
                "Centre", "Centre", "Centre", "Centre", "Centre", "Centre",
                "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage",
                "Stage", "Stage", "Stage", "Stage", "Stage", "Validation", ""],
        "19003" => ["", "", "Centre", "Centre", "Centre", "Centre", "Centre",
                "Centre", "Centre", "Centre", "Centre", "Stage", "Stage",
                "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage",
                "Stage", "Stage", "Stage", "", "", "Validation"]
          ];
      ?>
<!------------------------------------------------------------------------------->


    <h3>EXERCICE 0</h3>     
    <p class="txt">Tester le var_dump() sur le tableau donné</p>
    
    <p class="cod">  
    <?php
    
       var_dump($a);
       
    ?>
    </p>

    <!--1ere case-->
    
    <p class="cod">
    <?php
    
       var_dump($a[19001]);
       
    ?>
    </p>
    
    <pre>
        <code class="php">
        var_dump($a);
        <hr>
        var_dump($a[19001]);
        </code>
    </pre>

    
 <!------------------------------------------------------------------------------>

 
    <h3>EXERCICE 1</h3>
    <p class="txt">Durée de validation Groupe 19002</p>
    
    <p class="cod">
    <?php
    
       $i = -1;
       while ($a[19002][++$i] != "Validation"); // Pas besoin d'instruction
       $i++; // Le tab commence a 0 les semaines a 1
       echo "Groupe 19002 : <br>Validation la semaine $i.";
       
    ?>
    </p>
    
    <pre>
       <code class="php">
       $i = -1;
       while ($a[19002][++$i] != "Validation"); 
       $i++; // Le tab commence a 0 les semaines a 1
       echo "Groupe 19002 : <br> Validation la semaine $i.";
       </code>
    </pre>
    
    
<!------------------------------------------------------------------------------->
    

    <h3>EXERCICE 2</h3>
    <p class="txt">Durée semaine de stage Groupe 19001</p>
    
    <p class="cod">
    <?php
    
       $i = -1;
       while ($a[19001][++$i] != "Stage");
       while ($a[19001][$i++] == "Stage"); // Incremente en sortie de boucle 1 donc i--;
       $i --;
       echo "Groupe 19001 :<br>Stage fini la semaine $i";
       
    ?>
    </p>
    
    <pre>
       <code class="php">
       $i = -1;
       while ($a[19001][++$i] != "Stage");
       while ($a[19001][$i++] == "Stage"); 
       $i --;
       echo "Groupe 19001 :<br>Stage fini la semaine $i"; 
       </code>
    </pre>
    
    
 <!------------------------------------------------------------------------------> 
 
 
    
 <h3>EXERCICE 3</h3>
    <p class="txt">Durée des codes des groupes</p>
    
    <p class="cod">
    <?php
    
        $i = -1;
        $grp = [];
        $grp1 = [];
        while (++$i != count($a))
        {
          $grp[$i] = key($a);
          next($a);
        }
        var_dump($grp);
        
    ?>
    </p>

    <!--Version foreach-->
    <p class="cod">
    <?php
    
        $i = 0;
        foreach ($a as $key => $value) {
            $grp1[$i] = $key;
            $i++;
        }
        var_dump($grp1);
        
    ?>
    </p>
    
    
    <pre>
        <code class="php">
        $i = -1;
        $grp = [];
        $grp1 = [];
        while (++$i != count($a))
        {
          $grp[$i] = key($a);
          next($a);
        }
        var_dump($grp);
        <hr>
        $i = 0;
        foreach ($a as $key => $value) {
            $grp1[$i] = $key;
            $i++;
        }
        var_dump($grp1);
        </code>
    </pre>
<!------------------------------------------------------------------------------->
    
    <h3>EXERCICE 4</h3>
    <p class="txt">Durée du stage du Groupe 19003</p>
    
    <p class="cod">
    <?php
    
        $i = -1;
        while ($a[19003][++$i] != "Stage");
        $j = $i; // Sauvegarde de la valeur du début du stage
        while ($a[19003][++$i] == "Stage");
        $i = $i - $j; // Retire le debut de stage a la fin de stage 
        echo "Durée du stage du Groupe 19003 :<br>$i semaines.";
    ?>
    </p>
    
    <pre>
        <code class="php">
        $i = -1;
        while ($a[19003][++$i] != "Stage");
        $j = $i; // Sauvegarde de la valeur du début du stage
        while ($a[19003][++$i] == "Stage");
        $i = $i - $j; // Retire le debut de stage a la fin de stage 
        echo "Durée du stage du Groupe 19003 :<br>$i semaines.";
        </code>
    </pre>

<?php Close(); ?>

    