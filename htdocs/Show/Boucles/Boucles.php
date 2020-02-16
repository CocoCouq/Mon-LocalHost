<?php $title = 'Boucles'; ?>
<?php include '../../MyLocalHost/assets/config/config.php'; ?>

<!------------------------------------------------------------------------------->
    <h3>EXERCICE 1</h3>     
    <h5>Nombres impaires de 0 à 150</h5>
    
    <h6>
    <?php
    
          $i = 0;
          while ($i++ <= 150)
          {
            if ($i % 2 != 0)
              echo "$i . ";
          }
          
      ?>
    </h6>
    
    <pre>
        $i = 0;
        while ($i++ <= 150)
        {
            if ($i % 2 != 0)
                echo "$i . ";
        }
    </pre>


<!------------------------------------------------------------------------------->
    <h3>EXERCICE 2</h3>     
    <h5>Ecrire 500 fois la phrases "Je suis une phrase"</h5>
    
    
    <h6>
    <?php
    
      $i = 0;
      while (++$i <= 500)
        echo "$i : Je suis une phrase";
      
    ?>
    </h6>
    
    <pre>
        $i = 0;
        while (++$i <= 500)
            echo "$i : Je suis une phrase";
    </pre>

<!------------------------------------------------------------------------------->
   <h3>EXERCICE 2</h3>     
   <h5>Tables de multiplication 12 x 12</h5>
    
    
    <h6>
<!---->
    <table class="striped">
        <tr class="black">
            <td class="blue-text">X</td>

        <?php
          $i = -1;
          $j = -1;
          while (++$j <= 12)
            echo "<td>$j</td>";       // J'affiche la ligne du haut
        ?>

        </tr>

        <?php
          $j = -1;
          while (++$j <= 12)
          {
            $i = -1;                          // Je remets i à -1 à chaque nouvelle entrée dans la boucle
            echo "<tr>";
            echo "<td class='black'>$j</td>";      // J'affiche la ligne de gauche
            while (++$i <= 12)
            {
              $res = $i * $j;
              echo "<td>$res</td>";
            }
            echo "</tr>";
          }
        ?>
    </table>
<!---->
    </h6>
    <pre>

        &lt;table class="striped"&gt;
            &lt;tr class="black"&gt;
                &lt;td class="blue-text"&gt;X&lt;/td&gt;

                &lt;?php
                    $i = -1;
                    $j = -1;
                    while (++$j &lt;= 12)
                    echo "&lt;td&gt;$j&lt;/td&gt;";
                ?&gt;

            &lt;/tr&gt;

            &lt;?php
                $j = -1;
                while (++$j &lt;= 12)
                {
                    $i = -1; 
                    echo "&lt;tr&gt;";
                    echo "&lt;td class='black'&gt;$j&lt;/td&gt;";
                    while (++$i &lt;= 12)
                    {
                        $res = $i * $j;
                        echo "&lt;td&gt;$res&lt;/td&gt;";
                    }
                    echo "&lt;/tr&gt;";
                }
            ?&gt;

        &lt;/table&gt;
    </pre>


<?php Close(); ?>
