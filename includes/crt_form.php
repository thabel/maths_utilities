<?php
// Grab submitted values or default to 2 empty conditions
$conditions = $_POST['conditions'] ?? [
    ['a' => '2', 'm' => '4'],
    ['a' => '1', 'm' => '7'],
];
if (!is_array($conditions)) $conditions = []; // safety fallback
?>

<form id="crtForm" action="index.php?tool=crt#result" method="post">

  <div id="conditions-container">
    <?php foreach ($conditions as $i => $cond): ?>
    <div class="num-and-modulus" data-index="<?= $i ?>">
      <div class="input-group">
        <label for="a<?= $i ?>">a<span class="small"><?= $i + 1 ?>:</span>  
        </label>
        <input type="number" id="a<?= $i ?>" name="conditions[<?= $i ?>][a]" value="<?= htmlspecialchars($cond['a']) ?>" required>
      </div>

      <div class="input-group">
        <label for="m<?= $i ?>">(mod) m<span class="small"><?= $i + 1 ?>:</span>  
        </label>
        <input type="number" id="m<?= $i ?>" name="conditions[<?= $i ?>][m]" value="<?= htmlspecialchars($cond['m']) ?>" required>
      </div>
      <button type="button" class="remove-condition m-0 bg-color-red-500" <?= count($conditions) <= 2 ? 'disabled' : '' ?>>Remove</button>
    </div>
    <?php endforeach; ?>
  </div>

  <button type="button" id="add-condition">Add condition</button>
  <button type="submit">Calculate</button>
</form>
