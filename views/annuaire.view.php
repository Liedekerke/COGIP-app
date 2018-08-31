    <table>
      <thead>
        <th>Annuaire</th>
      </thead>
      <tbody>
        <?php while ($donneeseven = $displayAnnuaireAlphab->fetch()) { ?>
          <tr>
            <td><a href="detailcontact.php?annuaire=<?php echo $donneeseven['idpersonnes'] ?>"><?php echo $donneeseven['name'] ?></a></td>
            <td><?php echo $donneeseven['firstname'] ?></td>
            <td>
              <form class="" action="" method="post">
                 <input type="hidden" name="iddelete" value="<?php echo $donnee3['idpersonnes'] ?>">
                 <button type="submit" name="delete3"><i class="fas fa-trash-alt"></i></button>
               </form>
            </td>
          </tr>
        <?php } ?>
      </tbody>
    </table>
  </body>
</html>
