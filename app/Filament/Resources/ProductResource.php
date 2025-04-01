<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProductResource\Pages;
use App\Filament\Resources\ProductResource\RelationManagers;
use App\Models\Product;
use Filament\Forms;
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\ToggleColumn;


class ProductResource extends Resource
{
    protected static ?string $model = Product::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $label = 'Sản phẩm';

    protected static ?string $navigationGroup = 'Sản phẩm';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                // Fieldset chính cho thông tin sản phẩm
                Fieldset::make('Thông tin chung')
                    ->schema([
                        Grid::make()
                            ->schema([
                                TextInput::make('title')
                                    ->label('Tên sản phẩm')
                                    ->required()
                                    ->maxLength(255)
                                    ->columnSpan(['md' => 8]),

                                TextInput::make('slug')
                                    ->label('Slug')
                                    ->required()
                                    ->columnSpan(['md' => 4]),
                            ]),

                        RichEditor::make('description')
                            ->label('Mô tả ngắn')
                            ->nullable()
                            ->columnSpanFull(),
                    ])
                    ->columns(12),

                // Fieldset cho nội dung chi tiết
                Fieldset::make('Nội dung chi tiết')
                    ->schema([
                        RichEditor::make('content')
                            ->label('Nội dung đầy đủ')
                            ->required()
                            ->columnSpanFull(),
                    ]),

                // Fieldset cho giá và hình ảnh
                Fieldset::make('Giá & Hình ảnh')
                    ->schema([
                        Grid::make()
                            ->schema([
                                TextInput::make('price')
                                    ->label('Giá bán')
                                    ->required()
                                    ->numeric()
                                    ->columnSpan(['md' => 4]),

                                TextInput::make('sale_price')
                                    ->label('Giá khuyến mãi')
                                    ->required()
                                    ->numeric()
                                    ->columnSpan(['md' => 4]),

                                Toggle::make('status')
                                    ->label('Trạng thái')
                                    ->default(true)
                                    ->columnSpan(['md' => 4]),
                            ]),

                        FileUpload::make('thumbnail')
                            ->label('Ảnh sản phẩm')
                            ->columnSpanFull()
                            ->placeholder('Nhập hình ảnh')
                            ->required(),

                        // category id
                        Select::make('category_id') // Nếu là quan hệ 1-n
                            ->label('Danh mục')
                            ->relationship('category', 'name') // 'name' là trường hiển thị
                            ->required()
                            ->columnSpan(['md' => 4]),
                    ])
                    ->columns(12),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')
                    ->label('ID')
                    ->sortable()
                    ->searchable(),
                ImageColumn::make('thumbnail')
                    ->label('Ảnh sản phẩm')
                    ->size('50'),
                TextColumn::make('title')
                    ->label('Tên sản phẩm')
                    ->sortable()
                    ->searchable()
                    // xuống hàng khi độ dài vượt mức 
                    ->limit(50)
                    ->wrap(2),
                TextColumn::make('price')
                    ->label('Giá')
                    ->sortable()
                    ->money('vnd')
                    ->searchable(),
                TextColumn::make('sale_price')
                    ->label('Giá khuyến mãi')
                    ->sortable()
                    ->money('vnd')
                    ->searchable(),

                TextColumn::make('category_id')
                    ->label('Danh mục')
                    ->sortable()
                    ->searchable()
                    ->getStateUsing(function (Product $record) {
                        return $record->category->name;
                    }),
                ToggleColumn::make('status')
                    ->label('Trạng thái')
                    ->sortable(),

            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListProducts::route('/'),
            'create' => Pages\CreateProduct::route('/create'),
            'edit' => Pages\EditProduct::route('/{record}/edit'),
        ];
    }
}
