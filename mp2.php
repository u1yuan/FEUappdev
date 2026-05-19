<?php require('header.php'); ?>

<h2>NBA Players — String Functions</h2>

<div class="table-wrap">
    <table>
        <thead>
            <tr>
                <th>Original Name</th>
                <th>Number of characters</th>
                <th>Uppercase first character</th>
                <th>Replace vowels with @</th>
                <th>Check position of character "a"</th>
                <th>Reverse name</th>
            </tr>
        </thead>
        <tbody>
        <?php
        $nbaPlayers = [
            "LeBron James",
            "Stephen Curry",
            "Kevin Durant",
            "Giannis Antetokounmpo",
            "Luka Doncic",
            "Nikola Jokic",
            "Joel Embiid",
            "Jayson Tatum",
            "Devin Booker",
            "Ja Morant",
            "Anthony Davis",
            "Kawhi Leonard",
            "James Harden",
            "Kyrie Irving",
            "Damian Lillard",
            "Jimmy Butler",
            "Paul George",
            "Zion Williamson",
            "Donovan Mitchell",
            "Trae Young"
        ];

        foreach ($nbaPlayers as $player) {
            $numChars = strlen($player);
            $upperFirst = ucfirst($player);
            $replacedVowels = str_ireplace(['a','e','i','o','u'], '@', $player);

            $posA = strpos($player, 'a');
            if ($posA === false) {
                $posADisplay = "Not found";
            } else {
                $posADisplay = $posA;
            }

            $reversed = strrev($player);

            echo "<tr>";
            echo "<td>$player</td>";
            echo "<td>$numChars</td>";
            echo "<td>$upperFirst</td>";
            echo "<td>$replacedVowels</td>";
            echo "<td>$posADisplay</td>";
            echo "<td>$reversed</td>";
            echo "</tr>";
        }
        ?>
        </tbody>
    </table>
</div>

<?php include('footer.php'); ?>
