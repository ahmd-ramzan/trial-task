<?php

namespace App\Livewire\Tabs;

use App\Livewire\HomePage;
use Livewire\Component;
use Illuminate\Support\Facades\Validator;

class BasicInformationTab extends Component
{
    public string $firstName = '';
    public string $lastName = '';
    public string $address = '';
    public string $city = '';
    public string $country = '';
    public  $birthDay;
    public  $birthMonth;
    public  $birthYear;


    /**
     * Livewire hook called when a component is created
     * @param array $data
     * @return void
     */
    public function mount(array $data = []): void
    {
        if ($data) {
           $this->firstName = $data['first_name'];
           $this->lastName = $data['last_name'];
           $this->address = $data['address'];
           $this->city = $data['city'];
           $this->country = $data['country'];
           $this->birthDay = $data['birth_day'];
           $this->birthMonth = $data['birth_month'];
           $this->birthYear = $data['birth_year'];
        }
    }

    /**
     * Validation rules
     * @return array[]
     */
    public function rules(): array
    {
        return [
            'first_name' => ['required', 'max:50'],
            'last_name' => ['required', 'max:50'],
            'address' => ['required', 'max:150'],
            'city' => ['required', 'max:100'],
            'country' => ['required', 'max:100'],
            'birth_day' => ['required', 'numeric', 'between:1,31'],
            'birth_month' => ['required', 'numeric', 'between:1,12'],
            'birth_year' => ['required', 'numeric', 'digits:4']
        ];
    }


    /**
     * Navigate to marriage form after complete validation
     * @return void
     */
    public function navigateToMarriageForm(): void
    {
        $validated = Validator::make(
            [
                'first_name' => $this->firstName,
                'last_name' => $this->lastName,
                'address' => $this->address,
                'city' => $this->city,
                'country' => $this->country,
                'birth_day' => $this->birthDay,
                'birth_month' => $this->birthMonth,
                'birth_year' => $this->birthYear
            ],
            $this->rules()
        )->validate();

        $this->dispatch('basic-information-form-validated', validatedBasicInformationFormData: $validated)->to(HomePage::class);
    }

    public function render()
    {
        return view('livewire.tabs.basic-information-tab');
    }
}
