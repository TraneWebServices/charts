<?php

namespace TWS\Charts\Livewire;

use Livewire\Component;
use TWS\Charts\Models\DonutChartModel;

/**
 * Class LivewireDonutChart
 * @package TWS\Charts\Livewire
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
