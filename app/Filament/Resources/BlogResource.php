<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BlogResource\Pages;
use App\Filament\Resources\BlogResource\RelationManagers;
use App\Models\Blog;
use Filament\Forms;
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ToggleColumn;
use Filament\Tables\Columns\ImageColumn;

class BlogResource extends Resource
{
    protected static ?string $model = Blog::class;

    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static ?string $label = 'Bài viết';

    // protected static ?string $navigationGroup = 'Bài viết';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Fieldset::make('Thông tin bài viết')
                    ->schema([
                        TextInput::make('title')
                            ->label('Tiêu đề')
                            ->required()
                            ->ColumnSpan(['md' => 8])
                            ->placeholder('Nhập tiêu đề bài viết'),
                        RichEditor::make('content')
                            ->label('Nội dung')
                            ->required()
                            ->placeholder('Nhập nội dung bài viết')
                            ->columnSpan(['md' => 8]),
                    ]),
                Fieldset::make('Hình ảnh')
                    ->schema([
                        FileUpload::make('image')
                            ->label('Hình ảnh bài viết')
                            ->required()
                            ->placeholder('Tải lên hình ảnh bài viết')
                            ->columnSpan(['md' => 8]),
                    ]),

                Fieldset::make('Trạng thái & tác giả')
                    ->schema([
                        Toggle::make('status')
                            ->label('Trạng thái')
                            ->required(),
                        Select::make('user_id') // Nếu là quan hệ 1-n
                            ->label('Danh mục')
                            ->relationship('user', 'name') // 'name' là trường hiển thị
                            ->required()
                            ->columnSpan(['md' => 4]),
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
                TextColumn::make('title')
                    ->label('Tiêu đề')
                    ->searchable(),
                ImageColumn::make('image')
                    ->label('Hình ảnh')
                    ->size(50),
                TextColumn::make('user.name')
                    ->label('Tác giả')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('created_at')
                    ->label('Ngày tạo')
                    ->dateTime()
                    ->sortable()
                    ->searchable(),
                ToggleColumn::make('status')
                    ->label('Trạng thái')
                    ->sortable()
                    ->toggleable(),

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
            'index' => Pages\ListBlogs::route('/'),
            'create' => Pages\CreateBlog::route('/create'),
            'edit' => Pages\EditBlog::route('/{record}/edit'),
        ];
    }
}
