<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TeamResource\Pages;
use App\Filament\Resources\TeamResource\RelationManagers;
use App\Models\Team;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;

class TeamResource extends Resource
{
    protected static ?string $model = Team::class;

    protected static ?string $navigationIcon = 'heroicon-o-user-circle';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')->required(),
                TextInput::make('experience')->required(),
                TextInput::make('email')->required(),
                TextInput::make('phone')->required(),
                TextInput::make('specialization')->required(),
                FileUpload::make('image')
                    ->disk('public')
                    ->directory('team')
                    ->getUploadedFileNameForStorageUsing(
                        fn(TemporaryUploadedFile $file): string => (string) str($file->getClientOriginalName())
                            ->prepend(uniqid('team-prefix-') . '-'),
                    )
                    ->required(),
                Select::make('languages')
                    ->multiple()
                    ->options([
                        'English' => 'English',
                        'Russian' => 'Russian',
                        'Armenian' => 'Armenian',
                        'Arabic' => 'Arabic',
                        'French' => 'French',
                        'Spanish' => 'Spanish',
                        'Chinese' => 'Chinese',
                        'Japanese' => 'Japanese',
                        'Italian' => 'Italian',
                        'German' => 'German',
                    ])
                    ->searchable()
                    ->required(),
                MarkdownEditor::make('description')->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('image')
                    ->disk('public')
                 
                    ->label('Image')
                    ->size(50)
                    ->circular(),
                TextColumn::make('name')->sortable()->searchable(),
                TextColumn::make('experience')->sortable(),
                TextColumn::make('specialization'),
                TextColumn::make('languages')
                ->formatStateUsing(fn ($state) => implode(', ', explode(', ', $state)))
                ->label('Languages'),

                TextColumn::make('description')->limit(50),
            ])
            ->filters([
            //    
            ])
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
            'index' => Pages\ListTeams::route('/'),
            'create' => Pages\CreateTeam::route('/create'),
            'edit' => Pages\EditTeam::route('/{record}/edit'),
        ];
    }
}
