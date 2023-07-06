<?php 

// Maria plays college basketball and wants to go pro. Each season she maintains a record of her play. She tabulates the number of times she breaks her season record for most points and least points in a game. Points scored in the first game establish her record for the season, and she begins counting from there.

// Example

// Scores are in the same order as the games played. She tabulates her results as follows:

//                                      Count
//     Game  Score  Minimum  Maximum   Min Max
//      0      12     12       12       0   0
//      1      24     12       24       0   1
//      2      10     10       24       1   1
//      3      24     10       24       1   1
// Given the scores for a season, determine the number of times Maria breaks her records for most and least points scored during the season.

// Function Description

// Complete the breakingRecords function in the editor below.

// breakingRecords has the following parameter(s):

// int scores[n]: points scored per game
// Returns

// int[2]: An array with the numbers of times she broke her records. Index  is for breaking most points records, and index  is for breaking least points records.
// Input Format

// The first line contains an integer , the number of games.
// The second line contains  space-separated integers describing the respective values of .

// Constraints

// Sample Input 0

// 9
// 10 5 20 20 4 5 2 25 1
// Sample Output 0

// 2 4

function breakingRecords($scores) {
    if (empty($scores)) return;
    $herRecords = [0,0];
    $mostOrBreakScores = [
        'max' => [$scores[0]],
        'min' => [$scores[0]]
    ];
    for ($i = 0; $i < count($scores); $i++) {
        if ($i === 0) {
            continue;
        }
        if ($scores[$i] > $mostOrBreakScores['max'][count($mostOrBreakScores['max']) - 1]) {
            if ($scores[$i] > max($mostOrBreakScores['max'])) {
                $herRecords[0] = ++$herRecords[0];
            }
            $mostOrBreakScores['max'][] = $scores[$i];
            continue;
        }
        if ($scores[$i] < $mostOrBreakScores['min'][count($mostOrBreakScores['min']) - 1]) {
            if ($scores[$i] < min($mostOrBreakScores['min'])) {
                $herRecords[1] = ++$herRecords[1];
            }
            $mostOrBreakScores['min'][] = $scores[$i];
            continue;
        }
    }
    return $herRecords;
}