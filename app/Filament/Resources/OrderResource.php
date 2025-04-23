<?php

namespace App\Filament\Resources;

use App\Filament\Resources\OrderResource\Pages;
use App\Models\Order;
use App\Models\Product;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\ToggleButtons;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Repeater;
use App\filament\Resources\OrderResource\RelationManagers\OrderDetailRelationManager;

class OrderResource extends Resource
{
    protected static ?string $model = Order::class;
    protected static ?string $label = 'Đơn Hàng';
    protected static ?string $navigationIcon = 'heroicon-o-clipboard-document-list';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Thông tin đơn hàng')
                    ->schema([
                        Grid::make(3)
                            ->schema([
                                TextInput::make('code')
                                    ->label('Mã đơn hàng')
                                    ->disabled(),
                                Select::make('user_id')
                                    ->label('Người dùng')
                                    ->relationship('user', 'name')
                                    ->disabled()
                                    ->searchable(),
                                ToggleButtons::make('status')
                                    ->label('Trạng thái')
                                    ->inline()
                                    ->options([
                                        'Tạm giữ' => 'Tạm giữ',
                                        'Chờ duyệt' => 'Chờ duyệt',
                                        'Đã xác nhận' => 'Đã xác nhận',
                                        'Đã giao' => 'Đã giao',
                                        'Hoàn thành - Đã nhận hàng' => 'Đã nhận hàng',
                                        'Đã hủy' => 'Đã hủy',
                                    ])
                                    ->icons([
                                        'Tạm giữ' => 'heroicon-m-sparkles',
                                        'Chờ duyệt' => 'heroicon-m-arrow-path',
                                        'Đã xác nhận' => 'heroicon-m-check-badge',
                                        'Đã giao' => 'heroicon-m-truck',
                                        'Hoàn thành - Đã nhận hàng' => 'heroicon-m-check-circle',
                                        'Đã hủy' => 'heroicon-m-x-circle',
                                    ])
                                    ->colors([
                                        'Tạm giữ' => 'gray',
                                        'Chờ duyệt' => 'gray',
                                        'Đã xác nhận' => 'info',
                                        'Đã giao' => 'warning',
                                        'Hoàn thành - Đã nhận hàng' => 'success',
                                        'Đã hủy' => 'danger',
                                    ]),
                            ]),
                        Grid::make(2)
                            ->schema([
                                TextInput::make('address')->label('Địa chỉ')->disabled(),
                                TextInput::make('phone')->label('Số điện thoại')->disabled(),
                                TextInput::make('email')->label('Email')->disabled(),
                            ]),
                        Textarea::make('note')
                            ->label('Ghi chú')
                            ->rows(4),
                    ]),

            
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')->label('ID')->sortable()->searchable(),
                TextColumn::make('code')->label('Mã đơn hàng')->sortable()->searchable(),
                TextColumn::make('address')->label('Địa chỉ')->sortable()->searchable(),
                TextColumn::make('phone')->label('Số điện thoại')->sortable()->searchable(),
                TextColumn::make('status')->label('Trạng thái')->sortable()->searchable(),
                TextColumn::make('user.name')->label('Tên người dùng')->sortable()->searchable(),
                TextColumn::make('created_at')->label('Ngày mua')->sortable()->dateTime(),
                TextColumn::make('updated_at')->label('Ngày cập nhật')->sortable()->dateTime(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('status')
                ->label('Quyền hạn')
                ->options([
                    'Tạm giữ' => 'Tạm giữ',
                    'Chờ duyệt' => 'Chờ duyệt',
                    'Đã xác nhận' => 'Đã xác nhận',
                    'Đã giao' => 'Đã giao',
                    'Hoàn thành - Đã nhận hàng' => 'Hoàn thành - Đã nhận hàng',
                ]),
  
            ]);
    }

    public static function getRelations(): array
    {
        return [
            OrderDetailRelationManager::class,
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
