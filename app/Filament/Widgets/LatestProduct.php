<?php

namespace App\Filament\Widgets;

use App\Models\Product;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget as BaseWidget;

class LatestProduct extends BaseWidget
{
    protected static ?int $sort = 3;
    protected static ?string $heading = 'Sản phẩm mới nhất';
    protected int|string|array $columnSpan = 'full'; // Chiếm toàn bộ chiều rộng

    public function table(Table $table): Table
    {
        return $table
            ->query(
                Product::query()
                    ->latest() // Sắp xếp theo ngày tạo mới nhất
                    ->limit(5) // Giới hạn 5 sản phẩm
            )
            ->columns([
                ImageColumn::make('thumbnail')
                    ->label('Hình ảnh')
                    ->size(50),
                
                Tables\Columns\TextColumn::make('title')
                    ->label('Tên sản phẩm')
                    ->searchable()
                    ->sortable()
                    ->limit(30),
                
                Tables\Columns\TextColumn::make('category.name')
                    ->label('Danh mục')
                    ->sortable(),
                
                Tables\Columns\TextColumn::make('price')
                    ->label('Giá')
                    ->money('VND')
                    ->sortable(),
                
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Ngày thêm')
                    ->dateTime('d/m/Y H:i')
                    ->sortable(),
            ])
            ->actions([
                Tables\Actions\Action::make('view')
                    ->url(fn (Product $record): string => route('filament.admin.resources.products.edit', $record))
                    ->icon('heroicon-o-eye'),
            ]);
    }
}