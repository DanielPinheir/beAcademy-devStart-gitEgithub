<select name="" id="">
  <option selected value=""> -- Selecione o ano -- </option>
  <?php
  $ano = 2022;
  while ($ano >= 1900) {
    echo "<option>{$ano}</option>";
    $ano--;
  }
  ?>
</select>