<?php

namespace App\Filament\Resources;

use App\Filament\Resources\OrderResource\Pages;
use App\Filament\Resources\OrderResource\RelationManagers;
use App\Models\Order;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\ToggleColumn;
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Toggle;

class OrderResource extends Resource
{
    protected static ?string $model = Order::class;
    protected static ?string $label = 'Đơn Hàng';
    protected static ?string $navigationIcon = 'heroicon-o-clipboard-document-list';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
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
                    TextColumn::make('code')
                    ->label('Mã đơn hàng')
                    ->sortable()
                    ->searchable(),
                    TextColumn::make('address')
                    ->label('Địa chỉ')
                    ->sortable()
                    ->searchable(),
                    TextColumn::make('phone')
                    ->label('Số điện thoại')
                    ->sortable()
                    ->searchable(),
                    TextColumn::make('status')
                    ->label('Trạng thái')
                    ->sortable()
                    ->searchable(),
                    TextColumn::make('user_id')
                    ->label('Tên người dùng')
                    ->sortable()
                    ->searchable()
                    ->searchable()   ->getStateUsing(function ($record) {
                        return $record->user ? $record->user->name : 'N/A';  // Kiểm tra nếu có người dùng
                    }),
                    TextColumn::make('created_at')
                    ->label('Ngày mua')
                    ->sortable()
                    ->dateTime()
                    ->searchable(),
                    TextColumn::make('updated_at')
                    ->label('Ngày cập nhật')
                    ->sortable()
                    ->dateTime()
                    ->searchable(),
                
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
            'index' => Pages\ListOrders::route('/'),
            'create' => Pages\CreateOrder::route('/create'),
            'edit' => Pages\EditOrder::route('/{record}/edit'),
        ];
    }
}
