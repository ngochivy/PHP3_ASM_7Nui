<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CommentResource\Pages;
use App\Filament\Resources\CommentResource\RelationManagers;
use App\Models\Comment;
use App\Models\User;
use App\Models\Product;
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

class CommentResource extends Resource
{
    protected static ?string $model = Comment::class;

    protected static ?string $label = 'Bình Luận';
    protected static ?string $navigationIcon = 'heroicon-o-chat-bubble-left-ellipsis';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Fieldset::make('Thông tin bình luận')
                    ->schema([
                        TextInput::make('content')
                            ->label('nội dung bình luận')
                            ->required()
                            ->maxLength(255)
                            ->columnSpanFull(),
                            TextInput::make('product_id')
                            ->label('sản phẩm')
                            ->required()
                            ->nullable()
                           
                            ->columnSpanFull(),
                        TextInput::make('user_id')
                            ->label('người dùng')
                            ->columnSpanFull()

                    ])
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
                TextColumn::make('content')
                    ->label('Nội dung bình luận')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('product_id')
                    ->label('Tên sản phẩm')
                    ->sortable()
                    ->searchable()
                    
                    ->getStateUsing(function ($record) {
                        return $record->product ? $record->product->title : 'N/A';  // Kiểm tra nếu có sản phẩm
                    }),
                TextColumn::make('user_id')
                    ->label('Tên người dùng')
                    ->sortable()
                    ->searchable()   ->getStateUsing(function ($record) {
                        return $record->user ? $record->user->name : 'N/A';  // Kiểm tra nếu có người dùng
                    }),
                TextColumn::make('created_at')
                    ->label('Ngày tạo')
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
            'index' => Pages\ListComments::route('/'),
            'create' => Pages\CreateComment::route('/create'),
            'edit' => Pages\EditComment::route('/{record}/edit'),
        ];
    }
}
