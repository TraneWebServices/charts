<?php

namespace T\Charts\Livewire;

use Livewire\Component;
use T\Charts\Models\DonutChartModel;

/**
 * Class LivewireDonutChart
 * @package T\Charts\Livewire
 */
class LivewireDonutChart extends Component
{
    public $donutCharts;

    public function mount(DonutChartModel $donutCharts)
    {
        $this->donutCharts = $donutCharts->toLivewire();
    }

    public function render()
    {
        return view('charts::livewire-donut-chart');
    }
}
