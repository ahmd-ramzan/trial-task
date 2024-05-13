<?php

namespace App\Livewire;

use Carbon\Carbon;
use Livewire\Attributes\On;
use Livewire\Component;

class HomePage extends Component
{
    /**
     * Predefined Tabs.
     */
    public $basicInformationTab = 'basic_information_tab';
    public $marriageTab = 'marriage_tab';
    public $outputTab = 'output_tab';

    public string $active_tab = '';

    public array $tabsList = [];

    public array $basicInformationFormData;

    public array $marriageInformationFormData;

    /**
     * Livewire hook called when a component is created
     */
    public function mount(): void
    {
        $this->active_tab = $this->basicInformationTab;
    }


    /**
     * Set the active tab to render
     * @param string $tab
     */
    public function setActiveTab(string $tab): void
    {
        $this->active_tab = $tab;
    }


    /**
     * Livewire listener for a event
     * @param $validatedBasicInformationFormData
     * @return void
     */
    #[On('basic-information-form-validated')]
    public function navigateToMarriageForm($validatedBasicInformationFormData): void
    {
       $this->basicInformationFormData = $validatedBasicInformationFormData;
        $this->active_tab = $this->marriageTab;
    }


    /**
     * Livewire listener for a event
     * @param $validatedMarriageInformationFormData
     * @return void
     */
    #[On('marriage-form-validated')]
    public function navigateToOutputForm($validatedMarriageInformationFormData): void
    {
        $this->marriageInformationFormData = $validatedMarriageInformationFormData;
        $this->active_tab = $this->outputTab;
    }

    public function render()
    {
        return view('livewire.home-page');
    }
}
