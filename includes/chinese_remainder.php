<article>
  <h2>Chinese Remainder Theorem</h2>
  <p>
    The Chinese Remainder Theorem (CRT) is a fundamental result in number theory that allows for solving systems of simultaneous congruences with pairwise coprime moduli.
    <a href="#solve_crt" class="color-blue-brand">Solve Chinese Remainder Theorem</a>
  </p>
  <h3>Problem Statement</h3>
  <p>
    Given a system of equations:
  </p>
  <pre>
x ≡ a₁ (mod m₁)  
x ≡ a₂ (mod m₂)  
...  
x ≡ aₙ (mod mₙ)
  </pre>
  <p>
    where all <code>m₁, m₂, ..., mₙ</code> are pairwise coprime, CRT guarantees a unique solution modulo <code>M = m₁ × m₂ × ... × mₙ</code>.
  </p>

  <h3>Applications</h3>
  <ul class="grid-column">
    <li>Cryptography (e.g., RSA optimization)</li>
    <li>Computer arithmetic</li>
    <li>Modular system synchronization</li>
  </ul>

  <h3>Try It</h3>
  <p>
    Use our calculator below to solve your own CRT problem.
  </p>

  <!-- (Optional: embed a calculator or link to tool interface) -->
   <div id="solve_crt" >

        <?php sl_template_crt_form() ?>
      
   </div>
   <div id="result">
         <?php 
         
         if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // The form was submitted via POST
    // Access your form data like this:
  
    $conditions = $_POST['conditions'] ?? [];
    // You can now process the values or validate them
    // Example: echo result or run CRT logic
    if (count($conditions) >= 2) {
        // Call your function to solve the CRT
        [$isFound,$result] = solveCRTEquation($conditions);
        if ($isFound) {
            echo "<p>The solution is: x = $result</p>";
        } else {
            echo "<p>($result)</p>";
        }
    } else {
        echo "<p>Please fill in all fields.</p>";
    }
}

         ?>
   </div>
</article>
