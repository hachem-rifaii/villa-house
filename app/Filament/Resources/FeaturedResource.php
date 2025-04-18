<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FeaturedResource\Pages;
use App\Filament\Resources\FeaturedResource\RelationManagers;
use App\Models\Featured;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;

class FeaturedResource extends Resource
{
    protected static ?string $model = Featured::class;

    protected static ?string $navigationIcon = 'heroicon-o-sparkles';
    protected static ?string $navigationGroup = 'Real Estate';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Grid::make(1)->schema([
                    TextInput::make('name')
                        ->label('Title')
                        ->required()
                        ->maxLength(255),
                    Textarea::make('description')
                        ->nullable(),
                    FileUpload::make('icon')
                        ->disk('public')
                        ->directory('featured')
                        ->getUploadedFileNameForStorageUsing(
                            fn(TemporaryUploadedFile $file): string => (string) str($file->getClientOriginalName())
                                ->prepend(uniqid('customer-prefix-') . '-'),
                        )
                        ->required(),
                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('icon')->circular(),
                TextColumn::make('title')->sortable()->searchable(),
                TextColumn::make('description')->searchable(),
                TextColumn::make('created_at')->datetime(),
                TextColumn::make('updated_at')->datetime(),
            ])
            ->filters([])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListFeatureds::route('/'),
            'create' => Pages\CreateFeatured::route('/create'),
            'edit' => Pages\EditFeatured::route('/{record}/edit'),
        ];
    }
}
