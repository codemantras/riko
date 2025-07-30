<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TransactionResource\Pages;
use App\Filament\Resources\TransactionResource\RelationManagers;
use App\Models\Transaction;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TransactionResource extends Resource
{
    protected static ?string $model = Transaction::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('customer_name')
                    ->required(),
                Forms\Components\DatePicker::make('date')
                    ->required(),
                Forms\Components\TextInput::make('time')
                    ->required(),
                Forms\Components\TextInput::make('credit')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('bonus')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('loaded')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('free_play')
                    ->required()
                    ->numeric(),
                Forms\Components\Textarea::make('remarks')
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('redeem')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('tips')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('cashout')
                    ->required()
                    ->numeric(),
                Forms\Components\Select::make('source_id')
                    ->required()
                    ->searchable()
                    ->preload()
                    ->relationship('source','name'),
                Forms\Components\Select::make('platform_id')
                    ->required()
                    ->searchable()
                    ->preload()
                    ->relationship('platform','name'),
                Forms\Components\Select::make('tag_id')
                    ->required()
                    ->searchable()
                    ->preload()
                    ->relationship('tag','name'),
                Forms\Components\Select::make('employee_id')
                    ->required()
                    ->searchable()
                    ->preload()
                    ->relationship('employee','name'),
            ]);
            
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('customer_name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('date')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('time'),
                Tables\Columns\TextColumn::make('credit')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('bonus')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('loaded')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('free_play')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('redeem')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('tips')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('cashout')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('source_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('platform_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('tag_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('employee_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
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
            'index' => Pages\ListTransactions::route('/'),
            'create' => Pages\CreateTransaction::route('/create'),
            'view' => Pages\ViewTransaction::route('/{record}'),
            'edit' => Pages\EditTransaction::route('/{record}/edit'),
        ];
    }
}
