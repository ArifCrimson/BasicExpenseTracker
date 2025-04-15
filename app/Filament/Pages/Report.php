<?php

namespace App\Filament\Pages;

use App\Models\Expense;
use Filament\Pages\Page;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Contracts\HasTable;
use Filament\Tables\Concerns\InteractsWithTable;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Report extends Page implements HasTable

{

    use InteractsWithTable;

    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.pages.report';

    // public static function getNavigationGroup(): ?string
    // {
    //     return 'Report';
    // }

    public static function getNavigationSort(): ?int
    {
        return 3;
    }

    public function table(Table $table): Table
    {
        return $table
        ->query(Expense::query()
        ->selectRaw("DATE_FORMAT(created_at, '%Y-%m') as month")
        ->selectRaw("SUM(total_price) as total")
        ->groupBy('month')
        ->orderByDesc('month'))
        ->emptyStateDescription('When there list of expenses by months, it all will appear in here!')
        ->columns([
            Tables\Columns\TextColumn::make('month')->label('Month')->formatStateUsing(fn ($state) => \Carbon\Carbon::parse($state)->format('F Y')),
            Tables\Columns\TextColumn::make('total')->money('MYR'),
        ])
        ->filters([
            //
        ])
        ->actions([
            Tables\Actions\Action::make('open')->label('Open Report')->url(fn ($record) => route('reports.show', ['month' => $record->month]))->color('primary'),
        
            Tables\Actions\Action::make('print')->label('Print PDF')->url(fn ($record) => route('reports.exportPdf', ['month' => $record->month]))->color('secondary')->openUrlInNewTab(),
        ]);
    }

    public function getTableRecordKey(Model $record): string
    {
        return $record->month;
    }

}
