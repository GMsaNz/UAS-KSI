<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SeminarResource\Pages;
use App\Filament\Resources\SeminarResource\RelationManagers;
use App\Models\Seminar;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Form as ResourceForm;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\DatePicker;
use Filament\Tables\Columns\TextColumn;

class SeminarResource extends Resource
{
    protected static ?string $model = Seminar::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('judul')
                    ->required()
                    ->label('Judul Seminar'),

                Textarea::make('deskripsi')
                    ->required()
                    ->label('Deskripsi'),
                DatePicker::make('tanggal') // tambahkan ini
                    ->required()
                    ->label('Tanggal Seminar'),

                TextInput::make('kuota')
                    ->required()
                    ->numeric()
                    ->label('Kuota Peserta'),
                // tambahkan field lainnya sesuai kebutuhan

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('judul')->label('Judul'),
                TextColumn::make('tanggal')->label('Tanggal'),
                TextColumn::make('kuota')->label('Kuota'),
                //
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
            'index' => Pages\ListSeminars::route('/'),
            'create' => Pages\CreateSeminar::route('/create'),
            'edit' => Pages\EditSeminar::route('/{record}/edit'),
        ];
    }
}
