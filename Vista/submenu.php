
<?php 
  include ("../conexion/conexion.php");
  if (isset($_GET['action']) ) $action = $_GET['action'];
?>
<body>


<table width="426" height="51" border="0" align="center" cellpadding="0" cellspacing="0" class = "tablainterna">
  <tr>
    <td width="426"><table width="250" border="0" align="center" cellpadding="0" cellspacing="0" class = "tablainterna">
        <?php 
      $consulta = "select distinct menu.idMenu, menu.nombreMenu from menu inner join submenu on menu.idMenu = submenu.idMenu  order by menu.nombreMenu";
      $res = mysqli_query($cnn, $consulta); 
      if (!$res) exit(mysqli_error()); 
      while ($row = mysqli_fetch_array($res)) {
    ?>
        <tr>
          <td height="10" valign="top"><table width="250" border="0" align="center" cellpadding="0" cellspacing="5" class = "tablainterna">
              <tr>
                <td height="29" align="center" bgcolor="#C0DCC0"><a href="javascript:disp<?php echo $row['idMenu'];?>()"><?php echo $row['nombreMenu'];?></a></td>
              </tr>
          </table></td>
        </tr>
        <script type="text/javascript">
      function disp<?php echo $row['idMenu'];?>() {
        if(document.getElementById("disp<?php echo $row['idMenu'];?>").style.display == "none")
          document.getElementById("disp<?php echo $row['idMenu'];?>").style.display = "";
        else
          document.getElementById("disp<?php echo $row['idMenu'];?>").style.display = "none";
      }
    </script>
        <tr>
          <td valign="top"><div id="disp<?php echo $row['idMenu'];?>" style="display:none">
       <?php 
                    $consulta2 = "select submenu.idSubMenu, submenu.nombreSubMenu, submenu.url
                    from menu inner join submenu on menu.idMenu = submenu.idMenu where submenu.idMenu='".$row['idMenu']."'  order by nombreSubMenu";

                    $res2 = mysqli_query($cnn, $consulta2);
                    if (!$res2)  
                        exit(mysqli_error()); 
                        while ($row2 = mysqli_fetch_array($res2)) { 
                ?>
                
              <table width="250" border="0" cellpadding="0" cellspacing="2" class = "tablainterna">
                <tr>
                  <td><img src="../imagen/icono.png"></td>
                    
                  <td><a href="<?php echo $row2['url'];?>"> <?php echo $row2['nombreSubMenu'];?></a></td>
                </tr>
              </table>
              <?php   } ?>
            </div></td>
        </tr>
        <?php } ?>
      </table></td>
  </tr>
</table>
 
</body>