<?php
function generateTriangle(int $altura)
{
    if ($altura >= 1) {
        for ($i = 1; $i <= $altura; $i++) {
            $j = (2 * $i - 1);
            echo '<p style="text-align:center;">' . str_repeat('*', $j) . '</p>';
        }
    } else {
        echo " ";
    }
}
