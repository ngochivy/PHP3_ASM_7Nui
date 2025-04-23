<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CategoryResource\Pages;
use App\Filament\Resources\CategoryResource\RelationManagers;
use App\Models\Category;
use Filament\Forms;
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Filament\Tables\Columns\ToggleColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CategoryResource extends Resource
{
    protected static ?string $model = Category::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $label = 'Danh mục';

    protected static ?string $navigationGroup = 'Sản phẩm';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Fieldset::make('Thông tin danh mục')
                    ->schema([
                        TextInput::make('name')
                            ->label('Tên danh mục')
                            ->required()
                            ->maxLength(255)
                            ->columnSpanFull(),
                        Textarea::make('description')
                            ->label('Mô tả')
                            ->required()
                            ->nullable()
                            ->rows(4)
                            ->columnSpanFull(),
                        Toggle::make('status')
                            ->label('Trạng thái')
                            ->columnSpanFull() 
                ])
                ->columnSpan(8),
                Fieldset::make('Hình ảnh')
                    ->schema([
                        FileUpload::make('thumbnail')
                            ->label('Chọn ảnh')
                            ->required()
                            ->image()
                            ->columnSpanFull()  
                    ])->columnSpan(4)
            ])
            ->columns(12);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')
                    ->label('ID')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('thumbnail')
                    ->label('Hình ảnh'),
                TextColumn::make('name')
                    ->label('Tên danh mục')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('description')
                    ->label('Mô tả')
                    ->limit(50),
                ToggleColumn::make('status')
                    ->label('Trạng thái'),
                TextColumn::make('created_at')
                    ->label('Ngày tạo')
                    ->sortable()
                    ->dateTime()
                    ->searchable(),
            ])
            ->filters([
                Tables\Filters\Filter::make('created_at')
                ->form([
                    Forms\Components\DatePicker::make('created_from')->label('Từ ngày'),
                    Forms\Components\DatePicker::make('created_until')->label('Đến ngày'),
                ])
                ->query(function (Builder $query, array $data): Builder {
                    return $query
                        ->when($data['created_from'], fn ($q, $date) => $q->whereDate('created_at', '>=', $date))
                        ->when($data['created_until'], fn ($q, $date) => $q->whereDate('created_at', '<=', $date));
                }),
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
            'index' => Pages\ListCategories::route('/'),
            'create' => Pages\CreateCategory::route('/create'),
            'edit' => Pages\EditCategory::route('/{record}/edit'),
        ];
    }
}
