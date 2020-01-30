<?php

namespace PDS\ShipGames;

final class SmallShips
{
        public static function main(string $rowCoordinate, string $columnCoordinate)
        {
                $board = [
                        'A' => [0, 0, 0, 0, 0],
                        'B' => [0, 1, 0, 1, 0],
                        'C' => [0, 1, 0, 0, 0],
                        'D' => [0, 1, 0, 0, 1],
                        'E' => [0, 0, 0, 0, 1],
                ];

                echo sprintf(
                        '%s dla pola %s%s!',
                        $board[$rowCoordinate][$columnCoordinate - 1] ? 'Trafienie' : 'Pudło',
                        $rowCoordinate,
                        $columnCoordinate
                );
        }
}
