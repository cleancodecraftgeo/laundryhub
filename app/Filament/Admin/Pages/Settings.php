<?php

namespace App\Filament\Admin\Pages;

use App\Models\Setting;
use BackedEnum;
use Filament\Forms;
use Filament\Pages\Page;
use Filament\Support\Icons\Heroicon;
use Forms\Form;
use Filament\Notifications\Notification;
use UnitEnum;

class Settings extends Page implements Forms\Contracts\HasForms
{
    use Forms\Concerns\InteractsWithForms;

    protected  string $view = 'filament.pages.settings';

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedCog;

    protected static string|UnitEnum|null $navigationGroup = 'System';

    protected static ?string $navigationLabel = 'Settings';


    public ?array $data = [];

    public function mount(): void
    {
        $setting = Setting::first();

        $this->form->fill(
            $setting?->toArray() ?? []
        );
    }

    protected function getFormSchema(): array
    {
        return [
            Forms\Components\TextInput::make('site_name'),
            Forms\Components\TextInput::make('email'),
            Forms\Components\TextInput::make('phone'),

            Forms\Components\TextInput::make('meta_title'),
            Forms\Components\Textarea::make('meta_description'),
        ];
    }


    public function save()
{
    Setting::updateOrCreate(
        ['id' => 1],
        $this->form->getState()
    );

    Notification::make()
    ->title('Settings updated')
    ->body('Your changes have been saved successfully')
    ->success()
    ->send();


    // public function save()
    // {
    //     Setting::updateOrCreate(
    //         ['id' => 1],
    //         $this->form->getState()
    //     );

    //     $this->notify('success', 'Saved!');
    // }

}}
