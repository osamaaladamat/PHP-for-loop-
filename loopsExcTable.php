<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String Func Table</title>
    <style>
        <?php include "../css/redTable.css"; ?>
    </style>
</head>

<body>
    <!-- TABLE -->
    <table class="styled-table">
        <thead>
            <tr>
                <th>
                    <h2>Task</h2>
                </th>
                <th>
                    <h2>Output</h2>
                </th>
            </tr>
        <tbody>
            <!-- ROW -->
            <tr>
                <td>Create a script that displays 1-2-3-4-5-6-7-8-9-10 on one line. There will be no
                    hyphen(-) at the starting and ending position.</td>
                <td>
                    <?php
                    for ($x = 1; $x <= 10; $x++) {
                        if ($x <= 9) {
                            echo "$x-";
                        } else {
                            echo "$x";
                        }
                    }
                    ?>
                </td>
            </tr>
            <!-- END OF ROW -->
            <!-- ROW -->
            <tr>
                <td>Create a script using a for loop to add all the integers between 0 and 30</td>
                <td>
                    <?php
                    $total = 0;
                    for ($i = 1; $i <= 30; $i++) {
                        $total = $total + $i;
                    }
                    echo $total;
                    ?>
                </td>
            </tr>
            <!-- END OF ROW -->
            <!-- ROW -->
            <tr>
                <td>Create a script to construct a pattern, using nested for loop
                    <!--</br>A A A A A <br>A A A B B <br>A A C C C <br>A D D D D <br>E E E E E <br>-->
                </td>
                <td>
                    <?php
                    $char = "A";
                    for ($i = 0; $i < 5; $i++) {
                        for ($j = 0; $j < 5; $j++) {
                            echo $char++ . " ";
                        }
                        echo '<br>';
                    }
                    ?>
                </td>
            </tr>
            <!-- END OF ROW -->
            <!-- ROW -->
            <tr>
                <td>Create a script to construct a pattern, using nested for loop</td>
                <td>
                    <?php
                    $num = "1";
                    for ($i = 0; $i < 5; $i++) {
                        for ($j = 0; $j < 5; $j++) {
                            echo $num . " ";
                        }
                        echo '<br>';
                    }
                    ?>
                </td>
            </tr>
            <!-- END OF ROW -->
            <!-- ROW -->
            <tr>
                <td>Create a script to construct a pattern, using nested for loop</td>
                <td>
                    <?php
                    $num = "1";
                    for ($i = 0; $i < 5; $i++) {
                        for ($j = 0; $j < 5; $j++) {
                            echo $num . " ";
                        }
                        echo '<br>';
                    }
                    ?>
                </td>
            </tr>
            <!-- END OF ROW -->
            <!-- ROW -->
            <tr>
                <td>Create a script to construct a pattern, using nested for loop</td>
                <td>
                    <?php
                    $num = "1";
                    for ($i = 0; $i < 5; $i++) {
                        for ($j = 0; $j < 5; $j++) {
                            echo $num . " ";
                        }
                        echo '<br>';
                    }
                    ?>
                </td>
            </tr>
            <!-- END OF ROW -->
            <!-- ROW -->
            <tr>
                <td>Write a program to calculate and print the factorial of a number using a for
                    loop.</td>
                <td>
                    <?php
                    $x = 5;
                    $fac = 1;
                    for ($i = $x; $i >= 1; $i--) {
                        $fac = $fac * $i;
                    }
                    echo $fac;
                    ?>
                </td>
            </tr>
            <!-- END OF ROW -->
            <!-- ROW -->
            <tr>
                <td>fibonaci</td>
                <td>
                    <?php
                    // $x = 5;
                    // $fac = 1;
                    for ($i = $x; $i >= 1; $i--) {
                        $fac = $fac * $i;
                    }
                    echo $fac;
                    ?>
                </td>
            </tr>
            <!-- END OF ROW -->
            <!-- ROW -->
            <tr>
                <td>Remove the character in a specific position from a string</td>
                <td>
                    <?php
                    $url1 = "www.example.com/public_html/index.php";
                    $removedChar = substr($url1, 5, 1);
                    $newstr1 = str_replace($removedChar, "", $url1);
                    echo $newstr1;
                    ?>
                </td>
            </tr>
            <!-- END OF ROW -->
            <!-- ROW -->
            <tr>
                <td>Check if either integers are in a certain range</td>
                <td>
                    <?php
                    function checkInt($num1, $num2)
                    {
                        if ($num1 >= 100 && $num1 <= 200 /*range("100", "200")-aparently range is for arrays*/ || $num2 >= 100 && $num2 <= 200 /*range("100", "200")-aparently range is for arrays*/) {
                            echo "One or both the numbers are in range";
                        } else {
                            echo "none of the numbers are in range";
                        }
                    }
                    checkInt(30, 50)
                    ?>
                </td>
            </tr>
            <!-- END OF ROW -->
            <!-- ROW -->
            <tr>
                <td>Get the biggest number of three integers</td>
                <td>
                    <?php
                    function test1($x, $y, $z)
                    {
                        $max = max($x, max($y, $z));
                        echo $max;
                    }
                    echo test1(5, 3, 9) . " Is the largest of the three integers";
                    ?>
                </td>
            </tr>
            <!-- END OF ROW -->
            <!-- ROW -->
            <tr>
                <td>Closest number to 100</td>
                <td>
                    <?php
                    function test2($x, $y)
                    {
                        $n = 100;
                        $val = abs($x - $n);
                        $val2 = abs($y - $n);
                        if ($val == $val2) {
                            echo "0";
                        } elseif ($val < $val2) {
                            echo $x;
                        } else {
                            echo $y;
                        }
                    }
                    test2(5500, 2260)
                    ?>
                </td>
            </tr>
            <!-- END OF ROW -->
            <!-- ROW -->
            <tr>
                <td>Take in 2 int & return true if one of them
                    is 5, their sum, or difference between them is 5.</td>
                <td>
                    <?php
                    function test3($x, $y)
                    {
                        // $n = 100;
                        // $val = abs($x - $n);
                        // $val2 = abs($y - $n);
                        if ($x == 5 || $y == 5 || ($x + $y) == 5 || abs($x - $y) == 5) {
                            echo "True";
                        } else {
                            echo "False";
                        }
                    }
                    test3(0, 200)
                    ?>
                </td>
            </tr>
            <!-- END OF ROW -->
            <!-- ROW -->
        </tbody>
    </table>
</body>

</html>