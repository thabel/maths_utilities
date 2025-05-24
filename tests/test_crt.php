<?php
require_once '../templates.php'; // adjust path

function normalize_mod($x, $mod) {
    return ($x % $mod + $mod) % $mod;
}

function assertEqual($actual, $expected, $label = '') {
    if ($actual === $expected) {
        echo "✅ PASS: $label\n";
    } else {
        echo "❌ FAIL: $label\n";
        echo "   Expected: " . var_export($expected, true) . "\n";
        echo "   Got:      " . var_export($actual, true) . "\n";
    }
}

function runTests() {
    // Test 1: Two coprime congruences
    [$ok1, $res1] = solveCRTEquation([
        ["a" => 2, "m" => 3],
        ["a" => 3, "m" => 4]
    ]);
    assertEqual([$ok1, $res1 % 12], [true, 11], "2 mod 3 and 3 mod 4 => x ≡ 11 mod 12");

    // Test 2: Three congruences
    [$ok2, $res2] = solveCRTEquation([
        ["a" => 2, "m" => 3],
        ["a" => 3, "m" => 4],
        ["a" => 2, "m" => 5]
    ]);
    assertEqual([$ok2, $res2 % 60], [true, 47], "x ≡ 2 mod 3, 3 mod 4, 2 mod 5 => x ≡ 47 mod 60");

    // Test 3: Not coprime moduli
    [$ok3, $res3] = solveCRTEquation([
        ["a" => 1, "m" => 6],
        ["a" => 3, "m" => 9]
    ]);
    assertEqual([$ok3, $res3], [false, "The two moduli are not coprime"], "Moduli not coprime");

    // Test 4: Single condition
    [$ok4, $res4] = solveCRTEquation([
        ["a" => 13, "m" => 5]
    ]);
    assertEqual([$ok4, $res4], [true, 13 % 5], "Single condition: x ≡ 13 mod 5");

    // Test 5: Negative value
    [$ok5, $res5] = solveCRTEquation([
        ["a" => -1, "m" => 3],
        ["a" => 2, "m" => 5]
    ]);
    assertEqual([$ok5, $res5 % 15], [true, 14], "x ≡ -1 mod 3, 2 mod 5 => x ≡ 14 mod 15");
}

runTests();

// some tests Failed
// need to fix the code