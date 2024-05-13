<?php

namespace App\Livewire\Tabs;

use Livewire\Component;

class OutputTab extends Component
{
    public array $basicInformationData;
    public array $marriageData;

    /**
     * Livewire hook called when a component is created
     * @param array $basicInformationFormData
     * @param array $marriageInformationFormData
     * @return void
     */
    public function mount(array $basicInformationFormData = [], array $marriageInformationFormData = []): void
    {
        $this->basicInformationData = $basicInformationFormData;
        $this->marriageData = $marriageInformationFormData;
    }

    public function render()
    {
        return view('livewire.tabs.output-tab');
    }
}
