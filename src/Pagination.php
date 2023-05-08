<?php

declare(strict_types=1);

namespace PsrPHP\Pagination;

class Pagination
{

    public function render($current, $total, $pagenum = 20, $round = 2): array
    {

        if (!$total) {
            return [];
        }

        $total_page = ceil($total / $pagenum);
        $min = max($current - $round, 1);
        $max = min($current + $round, $total_page ?: 1);

        $res = [];

        if ($min > 1) {
            $res[] = [
                'page' => 1,
            ];
            if ($min > 2) {
                $res[] = '...';
            }
        }

        if ($max >= $min) {
            for ($i = $min; $i <= $max; $i++) {
                if ($current == $i) {
                    $res[] = [
                        'page' => $i,
                        'current' => 1,
                    ];
                } else {
                    $res[] = [
                        'page' => $i,
                    ];
                }
            }
        }

        if ($max < $total_page - 1) {
            $res[] = '...';
        }

        if ($max < $total_page) {
            $res[] = [
                'page' => $total_page,
            ];
        }

        return $res;
    }
}
