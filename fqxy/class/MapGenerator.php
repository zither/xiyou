<?php

use Medoo\Medoo;

class MapGenerator
{
    /**
     * @var Medoo
     */
    private $db;

    public function __construct(Medoo $db)
    {
        $this->db = $db;
    }

    /**
     * @param array $room
     * @param int $xSize
     * @param int $ySize
     * @return array
     */
    public function generateMap(array $room, int $xSize, int $ySize)
    {
        $arr = array_fill(0, $ySize, array_fill(0, $xSize, 0));
        $x = floor($xSize & 1 ? $xSize / 2 : $xSize / 2 - 1);
        $y = floor($ySize & 1 ? $ySize / 2 : $ySize / 2 - 1);

        $this->recurLoc($room, (int)$x, (int)$y, $arr);

        foreach ($arr as $m => $row) {
            foreach ($row as $n =>$column) {
                if (is_array($column)) {
                    $up_distance = 1 + $column['up_distance'];
                    $down_distance = 1 + $column['down_distance'];
                    $left_distance = 1 + $column['left_distance'];
                    $right_distance = 1 + $column['right_distance'];

                    if ($column['up'] && isset($arr[$m - $up_distance][$n])) {
                        for (;$up_distance >= 1; $up_distance--) {
                            $arr[$m - $up_distance][$n] = '|';
                        }
                    }
                    if ($column['up_jump'] && isset($arr[$m - 1][$n])) {
                        $arr[$m - 1][$n] = '|';
                    }


                    if ($column['down'] && isset($arr[$m + $down_distance][$n])) {
                        for (;$down_distance >= 1; $down_distance--) {
                            $arr[$m + $down_distance][$n] = '|';
                        }
                    }
                    if ($column['down_jump'] && isset($arr[$m + 1][$n])) {
                        $arr[$m + 1][$n] = '|';
                    }


                    if ($column['left'] && isset($arr[$m][$n - $left_distance])) {
                        for (;$left_distance >= 1; $left_distance--) {
                            $arr[$m][$n - $left_distance] = '—';
                        }
                    }
                    if ($column['left_jump'] && isset($arr[$m][$n - 1])) {
                        $arr[$m][$n - 1] = '—';
                    }


                    if ($column['right'] && isset($arr[$m][$n + $right_distance])) {
                        for (;$right_distance >= 1; $right_distance--) {
                            $arr[$m][$n + $right_distance] = '—';
                        }
                    }
                    if ($column['right_jump'] && isset($arr[$m][$n + 1])) {
                        $arr[$m][$n + 1] = '—';
                    }

                }
            }
        }

        return $arr;
    }

    protected function recurLoc(array $room, int $x, int $y, &$arr, bool $is_jump = false)
    {
        if (!empty($arr[$y][$x]) || !isset($arr[$y][$x])) {
            return;
        }

        if ($is_jump) {
            $room['is_jump'] = true;
        } else {
            $room['is_jump'] = false;
        }
        $arr[$y][$x] = $room;
        //如果跨区域，则不再递归
        if ($is_jump) {
            return;
        }

        if (!empty($room['up'])) {
            if (isset($arr[$y - (2 + $room['up_distance'])][$x]) && empty($arr[$y - (2 + $room['up_distance'])][$x])) {
                $up = $this->getRoom($room['up']);
                $this->recurLoc($up, $x, $y - (2 + $room['up_distance']), $arr);
            }
        } elseif (!empty($room['up_jump'])) {
            if (isset($arr[$y - 2][$x]) && empty($arr[$y - 2][$x])) {
                $up = $this->getRoom($room['up_jump']);
                $this->recurLoc($up, $x, $y - 2, $arr, true);
            }
        }


        if (!empty($room['down'])) {
            $down_distance = 2 + $room['down_distance'];
            if (isset($arr[$y + $down_distance][$x]) && empty($arr[$y + $down_distance][$x])) {
                $down = $this->getRoom($room['down']);
                $this->recurLoc($down, $x, $y + $down_distance, $arr);
            }
        } elseif (!empty($room['down_jump'])) {
            $down_distance = 2;
            if (isset($arr[$y + $down_distance][$x]) && empty($arr[$y + $down_distance][$x])) {
                $down = $this->getRoom($room['down_jump']);
                $this->recurLoc($down, $x, $y + $down_distance, $arr, true);
            }
        }


        if (!empty($room['left'])) {
            $left_distance = 2 + $room['left_distance'];
            if (isset($arr[$y][$x - $left_distance]) && empty($arr[$y][$x - $left_distance])) {
                $left = $this->getRoom($room['left']);
                $this->recurLoc($left, $x - $left_distance, $y, $arr);
            }
        } elseif (!empty($room['left_jump'])) {
            $left_distance = 2;
            if (isset($arr[$y][$x - $left_distance]) && empty($arr[$y][$x - $left_distance])) {
                $left = $this->getRoom($room['left_jump']);
                $this->recurLoc($left, $x - $left_distance, $y, $arr, true);
            }
        }


        if (!empty($room['right'])) {
            $right_distance = 2 + $room['right_distance'];
            if (isset($arr[$y][$x + $right_distance]) && empty($arr[$y][$x + $right_distance])) {
                $right = $this->getRoom($room['right']);
                $this->recurLoc($right, $x + $right_distance, $y, $arr);
            }
        } elseif (!empty($room['right_jump'])) {
            $right_distance = 2;
            if (isset($arr[$y][$x + $right_distance]) && empty($arr[$y][$x + $right_distance])) {
                $right = $this->getRoom($room['right_jump']);
                $this->recurLoc($right, $x + $right_distance, $y, $arr, true);
            }
        }
    }

    protected function getRoom($id)
    {
        return $this->db->get('map', '*', ['dtxy' => $id]);
    }

    protected function print_map($arr) {
        foreach ($arr as $m => $dir) {
            foreach ($dir as $n => $v) {
                if (is_array($v)) {
                    echo "1";
                } else {
                    echo "0";
                }
            }
            echo "<br>";
        }

        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
    }
}