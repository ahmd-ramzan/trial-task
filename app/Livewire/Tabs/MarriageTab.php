<?php

namespace App\Livewire\Tabs;

use App\Livewire\HomePage;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Livewire\Component;

class MarriageTab extends Component
{
    public string $isMarried = '';
    public $marriageDay;
    public $marriageMonth;
    public $marriageYear;
    public string $marriageCountry = '';
    public string $isWidowed = '';
    public string $isMarriedInPast = '';

    public array $basicInformationData;


    /**
     * Livewire hook called when a component is created
     * @param array $data
     * @param array $basicInformationFormData
     * @return void
     */
    public function mount(array $data = [], array $basicInformationFormData = []): void
    {
        if ($data) {
            dump($data);
           $this->isMarried = $data['is_married'];
           $this->marriageDay = $data['marriage_day'];
           $this->marriageMonth = $data['marriage_month'];
           $this->marriageYear = $data['marriage_year'];
           $this->marriageCountry = $data['marriage_country'];
           $this->isWidowed = $data['is_widowed'];
           $this->isMarriedInPast = $data['is_married_in_past'];
        }

        $this->basicInformationData = $basicInformationFormData;
    }

    /**
     * Validation rules
     * @return array[]
     */
    public function rules(): array
    {
        return [
            'is_married' => ['required'],
            'marriage_day' => [Rule::excludeIf($this->isMarried == 'no' || $this->isMarried == ''), 'required',  'numeric', 'between:1,31'],
            'marriage_month' => [Rule::excludeIf($this->isMarried == 'no' || $this->isMarried == ''), 'required',  'numeric', 'between:1,12'],
            'marriage_year' => [Rule::excludeIf($this->isMarried == 'no' || $this->isMarried == ''), 'required',  'numeric', 'digits:4',
                function ($attribute, $value, $fail) {
                    $userBirthDate = Carbon::create($this->basicInformationData['birth_year'], $this->basicInformationData['birth_month'], $this->basicInformationData['birth_day']);

                    $marriageDate = Carbon::create($this->marriageYear, $this->marriageMonth, $this->marriageDay);


                    if ($marriageDate->diffInYears($userBirthDate) < 18) {
                        $fail('You are not eligible to apply because your marriage occurred before your 18th birthday.');
                    }
                }
                ],
            'marriage_country' => ['required_if:is_married,yes'],
            'is_widowed' =>['required_if:is_married,no'],
            'is_married_in_past' =>['required_if:is_married,no']
        ];
    }

    /**
     * Custom validation messages
     * @return string[]
     */
    public function messages(): array
    {
        return [
            'is_married.required' => 'The marriage field is required.',
            'is_widowed.required' => 'The widowed field is required.',
            'is_married_in_past.required' => 'The marriedInPast field is required.',
        ];
    }

    /**
     * Navigate to output section after complete validation
     * @return void
     */
    public function navigateToOutputTab(): void
    {
        $validated = Validator::make(
            [
                'is_married' => $this->isMarried,
                'marriage_day' => $this->marriageDay,
                'marriage_month' => $this->marriageMonth,
                'marriage_year' => $this->marriageYear,
                'marriage_country' => $this->marriageCountry,
                'is_widowed' => $this->isWidowed,
                'is_married_in_past' => $this->isMarriedInPast
            ],
            $this->rules(),
            $this->messages()
        )->validate();


        $this->dispatch('marriage-form-validated', validatedMarriageInformationFormData: $validated)->to(HomePage::class);
    }

    public function foobar()
    {
        $this->dispatch('barfoo')->to(HomePage::class);
    }

    public function render()
    {
        return view('livewire.tabs.marriage-tab');
    }
}
