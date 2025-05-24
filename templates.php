<?php
declare(strict_types=1);

function sl_template_render_header(): void
{
    require("includes/header.php");
}
function sl_template_render_footer(): void
{
    require("includes/footer.php");
}

function sl_template_render_sidebar(): void
{
    require("includes/sidebar.php");
}
function sl_template_render_main_header(): void
{
    require("includes/mainheader.php");
}

function sl_template_crt_form(): void
{
    require("includes/crt_form.php");
}
function render_tool_page(): void {
    $tool = $_GET['tool'] ?? null;

    switch ($tool) {
        case 'crt':
            include 'includes/chinese_remainder.php';
            break;
        case 'gcdlcm':
            include 'includes/gcd_lcm.php';
            break;
        case 'primefact':
            include 'includes/prime_factors.php';
            break;
        case 'sieve':
            include 'tools/sieve.php';
            break;
        default:
            include 'includes/home.php';
            break;
    }
}

function quotient_et_reste($a,$b){
    if ($b>0)
        $q = floor($a/$b);
    else
        $q = ceil($a/$b);
    $r = $a-$q*$b;
    return [$q,$r];
}

function gcd($a, $b){
    
    $t1 = [$a, 1, 0];
    $t2 = [$b, 0, 1];
    [$q,$r] = quotient_et_reste($t1[0] , $t2[0]);
    while($r != 0){
        $t = [$r, $t1[1] - $q * $t2[1], $t1[2] - $q * $t2[2]];
        $t1 = $t2;
        $t2 = $t;
        [$q,$r] = quotient_et_reste($t1[0] , $t2[0]);
    }
    
    return $t2;
    
}

function solveEquation($a1,$m1,$a2,$m2){
    [$x,$y,$z] = gcd($m1, $m2);
    if ($x == 1){
        // so we have 
        // m1*y + m2*z = 1
        // thus the solution is:
        // x = a1*m2*y + a2*m1*z
        $res =  ($a2*$m1*$y + $a1*$m2*$z);
        // made res as string
        return [TRUE, $res];
    }
    else{
        return [FALSE, "The two moduli are not coprime"];
    }
}

function solveCRTEquation($conditions){
    try{
        if(count($conditions) == 1){
            return [true , $conditions[0]["a"]%($conditions[0]["m"]) ];
        }
        else{
            $slice = array_slice($conditions, 0, 2);
            [$isFound,$result]= solveEquation($slice[0]["a"],$slice[0]["m"],$slice[1]["a"],$slice[1]["m"]);
            if(!$isFound)
                return [$isFound,$result];
            $reminder = array_slice($conditions,2);
            array_push($reminder,["a"=>$result , "m"=>($slice[0]["m"]*$slice[1]["m"])  ]);

            return solveCRTEquation($reminder);
        }
    } catch (Exception $e) {
        return [false, "An error occurred: " . $e->getMessage()];
    }
};
