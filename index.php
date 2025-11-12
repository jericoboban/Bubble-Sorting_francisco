<?php
    // Bubble Sort Function
    function bubbleSort($arr, $order = "asc", &$swapCount = 0) {
        $n = count($arr);
        $swapCount = 0;

        for ($i = 0; $i < $n - 1; $i++) {
            for ($j = 0; $j < $n - $i - 1; $j++) {
                $condition = ($order == "asc") ? ($arr[$j] > $arr[$j + 1]) : ($arr[$j] < $arr[$j + 1]);

                if ($condition) {
                    // Swap elements
                    $temp = $arr[$j];
                    $arr[$j] = $arr[$j + 1];
                    $arr[$j + 1] = $temp;
                    $swapCount++;
                }
            }
        }
        return $arr;
    }

    if (isset($_POST['submit'])) {
        // Get user input
        $numbers = $_POST['numbers'];
        $order = $_POST['order'];

        // Convert string to array
        $arr = array_map('intval', explode(',', $numbers));

        // Keep a copy of the original
        $original = $arr;

        // Sort using Bubble Sort
        $sorted = bubbleSort($arr, $order, $swapCount);

        // Display Results
        echo "<h3>Results:</h3>";
        echo "Original Array: [" . implode(", ", $original) . "]<br>";
        echo "Sorted ($order): [" . implode(", ", $sorted) . "]<br>";
        echo "Total Swaps: $swapCount<br>";
    }
    ?>
