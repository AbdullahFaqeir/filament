<?php

namespace Filament\Tests\App\Fixtures\Pages;

use Filament\Forms\Components\TextInput;
use Filament\Notifications\Notification;
use Filament\Pages\Page;

class Settings extends Page
{
    protected static string $view = 'app.fixtures.pages.settings';

    protected static ?string $navigationIcon = 'heroicon-o-cog-6-tooth';

    protected static ?int $navigationSort = 2;

    public $name;

    public function notificationManager(bool $redirect = false)
    {
        if ($redirect) {
            $this->redirect('/');
        }

        Notification::make()
            ->title('Saved!')
            ->success()
            ->send();
    }

    protected function getFormSchema(): array
    {
        return [
            TextInput::make('name')->required(),
        ];
    }

    public function save()
    {
        $this->form->getState();
    }
}