<div>
    <div>
        <div class="max-w-3xl mx-auto px-4 py-10">
            <div class="border-b-2 py-4">
                <div class="flex flex-col md:flex-row md:items-center md:justify-between">
                    <div class="flex-1">
                        @if($active_tab == $basicInformationTab)
                            <div>
                                <div class="text-lg font-bold text-gray-700 leading-tight">Basic Information</div>
                            </div>
                        @endif

                        @if($active_tab == $marriageTab)
                            <div>
                                <div class="text-lg font-bold text-gray-700 leading-tight">Marriage Information</div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>


            <div class="py-10">
                @if($active_tab == $basicInformationTab)
                    <livewire:tabs.basic-information-tab :data="$basicInformationFormData" />
                @endif
            </div>

            <div class="py-10">
                @if($active_tab == $marriageTab)
                    <livewire:tabs.marriage-tab :data="$marriageInformationFormData" :basicInformationFormData="$basicInformationFormData" />
                @endif
            </div>

            <div class="py-10">
                @if($active_tab == $outputTab)
                    <livewire:tabs.output-tab
                        :basicInformationFormData="$basicInformationFormData"
                        :marriageInformationFormData="$marriageInformationFormData"
                    />
                @endif
            </div>

        </div>
    </div>
</div>
