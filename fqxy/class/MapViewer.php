<?php


class MapViewer
{
    protected $dtx;
    protected $dty;

    public function __construct(int $dtx, int $dty)
    {
        $this->dtx = $dtx;
        $this->dty = $dty;
    }

    public function show(int $xSize, int $ySize): string
    {
        $xdt =sprintf('%s/xdt/%d.php', XY_DIR, $this->dtx);
        if (!file_exists($xdt)){
            return '';
        }
        $map_arr = include $xdt;
        $currentX = $currentY = null;

        $maxX = count($map_arr[0]);
        $maxY = count($map_arr);

        $dtxy = "{$this->dtx}_{$this->dty}";
        foreach ($map_arr as $y => $rows) {
            foreach ($rows as $x => $v) {
                if (!is_array($v)) {
                    continue;
                }
                if ($v['dtxy'] == $dtxy) {
                    $currentX = $x;
                    $currentY = $y;
                    break;
                }
            }
        }
        if (is_null($currentX)) {
            return '';
        }

        $halfxSize = $xSize & 1 ? ($xSize - 1) / 2 : ($xSize - 2) / 2;
        $halfySize = $ySize & 1 ? ($ySize - 1) / 2 : ($ySize - 2) / 2;
        $keepLeftX = $currentX < $halfxSize ? 0 : $currentX - $halfxSize;
        $keepRightX = $currentX + $halfxSize > $maxX ? $maxX : $currentX + $halfxSize;
        $keepUpY = $currentY < $halfySize ? 0 : $currentY - $halfySize;
        $keepDownY = $currentY + $halfySize > $maxY ? $maxY : $currentY + $halfySize;

        foreach ($map_arr as $y => $rows) {
            foreach ($rows as $x => $v) {
                if ($y < $keepUpY || $y > $keepDownY) {
                    unset($map_arr[$y]);
                }
                if ($x < $keepLeftX || $x > $keepRightX) {
                    unset($map_arr[$y][$x]);
                }
            }
        }

        $directions = $map_arr;
        $fontSize = ($halfxSize * 2 + 1) > 11 ? 10 : 12;
        ob_start();
        ?>
            <div id="map-wrapper" style="overflow: auto">
                <table id="map" style="background-color: #eec65a;text-align: center; font-size: <?=$fontSize?>px;">
                    <?php foreach ($directions as $m => $dir):?>
                        <tr>
                            <?php foreach ($dir as $n => $v): ?>
                                <td style="min-width: 48px;word-break: keep-all">
                                    <?php if (is_array($v)): ?>
                                        <div style="background-color: #942900" title="<?=$v['dtxy']?>">
                                            <?php if ($v['dtxy'] == $dtxy):?>
                                                <span id="user-loc" class="map-loc" style="color: #0befe7;"><?=$v['mz']?></span>
                                            <?php elseif($v['is_jump']) :?>
                                                <span class="map-loc" style="color: #86e2e2;"><?=$v['mz']?></span>
                                            <?php else:?>
                                                <span class="map-loc" style="color: white"><?=$v['mz']?></span>
                                            <?php endif;?>
                                        </div>
                                    <?php elseif (is_string($v) && in_array($v, ['—', '|'])): ?>
                                        <span style="color: black"><?=$v?></span>
                                    <?php else:?>
                                        <span class="inline-block"></span>
                                    <?php endif;?>
                                </td>
                            <?php endforeach;?>
                        </tr>
                    <?php endforeach;?>
                </table>
            </div>
        <?php
        $map = ob_get_clean();
        return $map;
    }
}