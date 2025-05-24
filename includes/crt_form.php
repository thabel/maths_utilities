<form action="index.php?tool=crt#result" method="post">
  <div class="num-and-modulus">
    <div class="input-group">
      <label for="a1">a₁:</label>
      <input type="number" id="a1" name="a1" value="<?= htmlspecialchars($_POST['a1'] ?? '2') ?>" required>
    </div>
    <div class="input-group">
      <label for="m1">(mod) m₁:</label>
      <input type="number" id="m1" name="m1" value="<?= htmlspecialchars($_POST['m1'] ?? '4') ?>" required>
    </div>
  </div>

  <div class="num-and-modulus">
    <div class="input-group">
      <label for="a2">a₂:</label>
      <input type="number" id="a2" name="a2" value="<?= htmlspecialchars($_POST['a2'] ?? '1') ?>" required>
    </div>
    <div class="input-group">
      <label for="m2">(mod) m₂:</label>
      <input type="number" id="m2" name="m2" value="<?= htmlspecialchars($_POST['m2'] ?? '7') ?>" required>
    </div>
  </div>

  <button type="submit">Calculate</button>
</form>

