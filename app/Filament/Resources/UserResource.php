<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UserResource\Pages;
use App\Filament\Resources\UserResource\RelationManagers;
use App\Models\User;
use Filament\Forms;
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class UserResource extends Resource
{
    protected static ?string $model = User::class;

    protected static ?string $navigationIcon = 'heroicon-o-users';

    protected static ?string $label = 'Người dùng';

   

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Fieldset::make('Thông tin người dùng')
                    ->schema([
                        TextInput::make('name')
                            ->label('Họ và tên')
                            ->required()
                            ->maxLength(255)
                            ->columnSpan(12),
                        TextInput::make('email')
                            ->label('Email')
                            ->required()
                            ->email()
                            ->maxLength(255)
                            ->columnSpan(12),
                        TextInput::make('password')
                            ->label('Mật khẩu')
                            ->password()
                            ->required()
                            ->columnSpan(12),
                    ])
                    ->columns(8)
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')
                    ->label('ID')
                    ->sortable(), // Hiển thị ID người dùng và cho phép sắp xếp

                TextColumn::make('name')
                    ->label('Họ và tên')
                    ->searchable() // Cho phép tìm kiếm theo tên
                    ->sortable(), // Cho phép sắp xếp theo tên

                TextColumn::make('email')
                    ->label('Email')
                    ->searchable() // Cho phép tìm kiếm theo email
                    ->sortable(), // Cho phép sắp xếp theo email

                // TextColumn::make('date_of_birth')
                //     ->label('Ngày sinh')
                //     ->date('d/m/Y') // Định dạng ngày tháng
                //     ->sortable(), // Cho phép sắp xếp theo ngày sinh

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
            'index' => Pages\ListUsers::route('/'),
            'create' => Pages\CreateUser::route('/create'),
            'edit' => Pages\EditUser::route('/{record}/edit'),
        ];
    }
}
