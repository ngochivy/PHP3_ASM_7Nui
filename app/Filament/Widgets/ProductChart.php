<?php

namespace App\Filament\Widgets;

use App\Models\Product;
use App\Models\Category;
use Filament\Widgets\ChartWidget;

class ProductChart extends ChartWidget
{

    protected static ?int $sort = 2;
    protected static ?string $heading = 'Sản phẩm theo danh mục';

    // Thêm các thuộc tính mới để điều chỉnh kích thước
    protected static ?string $maxHeight = '500px';
    protected int | string | array $columnSpan = 'full'; // Chiếm toàn bộ chiều rộng

    protected function getData(): array
    {
        // Lấy dữ liệu số lượng sản phẩm theo danh mục
        $categories = Category::withCount('products')->get();

        // Tạo mảng dữ liệu cho biểu đồ
        $labels = [];
        $data = [];
        $backgroundColors = [];
        $borderColors = [];

        // Màu sắc cho các phần của biểu đồ
        $colors = [
            '#4c51bf',
            '#f56565',
            '#48bb78',
            '#ed8936',
            '#9f7aea',
            '#ecc94b',
            '#4299e1',
            '#667eea'
        ];

        foreach ($categories as $index => $category) {
            $labels[] = $category->name;
            $data[] = $category->products_count;

            // Chọn màu theo index (lặp lại nếu hết màu)
            $colorIndex = $index % count($colors);
            $backgroundColors[] = $colors[$colorIndex];
            $borderColors[] = $colors[$colorIndex];
        }

        return [
            'labels' => $labels,
            'datasets' => [
                [
                    'label' => 'Số lượng sản phẩm',
                    'data' => $data,
                    'backgroundColor' => $backgroundColors,
                    'borderColor' => $borderColors,
                    'borderWidth' => 1,
                ],
            ],
        ];
    }

    protected function getType(): string
    {
        return 'bar';
    }

    protected function getOptions(): array
    {
        return [
            'plugins' => [
                'legend' => [
                    'position' => 'right',
                    'labels' => [
                        'font' => [
                            'size' => 14 // Tăng kích thước chú thích
                        ]
                    ]
                ],
            ],
            'responsive' => true,
            'maintainAspectRatio' => false,
            'layout' => [
                'padding' => [
                    'left' => 50, // Tăng padding trái
                    'right' => 50, // Tăng padding phải
                    'top' => 30,
                    'bottom' => 30
                ]
            ],
            'cutout' => '50%', // Giảm cutout để biểu đồ rộng hơn
        ];
    }

    protected function getChartStyles(): ?string
    {
        return <<<HTML
        <style>
            .chart-container {
                width: 100% !important;
                margin: 0 auto;
            }
        </style>
    HTML;
    }
}
