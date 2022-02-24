<?php
$birth_year=1996;
$current_year=2022;
if ($current_year - $birth_year > 18) {
    echo "You can drive";
} elseif ($current_year - $birth_year <= 18) {
    echo "Go home play GTA";
}
    ?>