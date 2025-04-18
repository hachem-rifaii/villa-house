<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PropertyResource\Pages;
use App\Filament\Resources\PropertyResource\RelationManagers;
use App\Models\Property;
use Dotswan\MapPicker\Facades\MapPicker;
use Dotswan\MapPicker\Fields\Map;
use Filament\Forms;
use Filament\Forms\Components\CheckboxList;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Group;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\NumberInput;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Section;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Illuminate\Support\Facades\Storage;
use Filament\Forms\Set;
use Filament\Forms\Components\View;
use Filament\Forms\Components\ViewField;
use Filament\Tables;
use Filament\Tables\Columns\BooleanColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;

class PropertyResource extends Resource
{
    protected static ?string $model = Property::class;

    protected static ?string $navigationIcon = 'heroicon-o-home-modern';
    protected static ?string $navigationGroup = 'Real Estate';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Grid::make(2)->schema([
                    TextInput::make('title')
                        ->required()
                        ->maxLength(255),


                    Select::make('category_id')
                        ->relationship('category', 'name')
                        ->required(),

                    TextInput::make('bedrooms')->numeric()->minValue(0)->nullable(),
                    TextInput::make('bathrooms')
                        ->numeric()
                        ->minValue(0)
                        ->nullable(),

                    TextInput::make('area')
                        ->numeric()
                        ->minValue(1)
                        ->required(),
                    MarkdownEditor::make('description')->columnSpan(2),
                 
                    
                   Section::make('location')->schema([
                    Map::make('location')
                    ->defaultLocation(latitude: 40.4168, longitude: -3.7038)
                    ->showMarker(true)
                    ->clickable(true)
                    ->tilesUrl("https://tile.openstreetmap.de/{z}/{x}/{y}.png")
                    ->zoom(12),
                    TextInput::make('address')->required()->helperText('Please enter a valid address like Dubai ...'),
                   ]),

                    Select::make('status')
                        ->options([
                            'available' => 'Available',
                            'sold' => 'Sold',
                            'rented' => 'Rented',
                        ])
                        ->required()->columnSpan(2),

                    Toggle::make('is_for_sale')->default(false),
                    Toggle::make('is_Exclusive')->default(false),
                    Toggle::make('off_plan')->default(false),

                   Section::make('features')->schema([
                    CheckboxList::make('featureds')->label('Featured')->columnSpan(2)->relationship('featureds', 'name'),
                   ]),

                    Section::make('details')->schema([
                        TextInput::make('rera_no')
                            ->label('RERA No.')
                            ->nullable()
                            ->maxLength(255),

                        TextInput::make('reference_no')
                            ->label('Reference No.')
                            ->nullable()
                            ->maxLength(255),

                        TextInput::make('property_type')
                            ->label('property type')
                            ->nullable()
                            ->maxLength(255),

                        Select::make('furnishing')
                            ->label('Furnishing')
                            ->options([
                                'Furnished' => 'Furnished',
                                'Unfurnished' => 'Unfurnished',
                                'Semi-Furnished' => 'Semi-Furnished',
                            ])
                            ->nullable(),

                        TextInput::make('parking_lots')
                            ->label('Parking Lots')
                            ->numeric()
                            ->default(0),

                    ]),

                    Section::make('teams')->schema([
                        Select::make('team_id')
                            ->relationship('team', 'name')
                    ]),
                
                    Section::make('prices')->schema([
                        Repeater::make('prices')
                            ->relationship('prices')
                            ->schema([
                                TextInput::make('price')
                                    ->required()
                                    ->numeric()
                                    ->minValue(0),

                                Select::make('currency_id')
                                    ->label('Currency')
                                    ->relationship('currency', 'name')
                                    ->required(),
                            ])
                            ->columnSpan(2),
                    ]),

                    FileUpload::make('images')
                        ->multiple()
                        ->disk('public')
                        ->directory('properties')
                        ->getUploadedFileNameForStorageUsing(
                            fn(TemporaryUploadedFile $file): string => (string) str($file->getClientOriginalName())
                                ->prepend(uniqid('property-prefix-') . '-'),
                        )
                        ->required()
                        ->columnSpan(2),
                ]),


            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('images')->circular()->limit(1),
                TextColumn::make('title')->sortable()->searchable(),

                TextColumn::make('category.name')->sortable(),
                TextColumn::make('bedrooms')->sortable(),
                TextColumn::make('bathrooms')->sortable(),
                TextColumn::make('area')->sortable(),
                BooleanColumn::make('is_for_sale'),
                BooleanColumn::make('is_Exclusive'),
                TextColumn::make('status')->sortable(),
                TextColumn::make('location')->searchable(),
                TextColumn::make('created_at')->dateTime()->sortable(),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('category_id')
                    ->relationship('category', 'name'),

                Tables\Filters\TernaryFilter::make('is_for_sale')
                    ->trueLabel('For Sale')
                    ->falseLabel('For Rent'),
                Tables\Filters\TernaryFilter::make('off_plan')
                    ->trueLabel('Off Plan')
                    ->falseLabel('On Plan'),

                Tables\Filters\TernaryFilter::make('is_Exclusive')
                    ->trueLabel('Featured')
                    ->falseLabel('Not Featured'),
                Tables\Filters\SelectFilter::make('status')
                    ->options([
                        'available' => 'Available',
                        'sold' => 'Sold',
                        'rented' => 'Rented',
                    ]),

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
            'index' => Pages\ListProperties::route('/'),
            'create' => Pages\CreateProperty::route('/create'),
            'edit' => Pages\EditProperty::route('/{record}/edit'),
        ];
    }
}
