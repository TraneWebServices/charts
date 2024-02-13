<?php

namespace T\Charts\Livewire;

use Livewire\Component;
use T\Charts\Models\AreaChartModel;

/**
 * Class LivewireAreaChart
 * @package T\Charts\Livewire
 */
class LivewireAreaChart extends Component
{
    public $areaCharts;

    public function mount(AreaChartModel $areaCharts)
    {
        $this->areaCharts = $areaCharts->toLivewire();
    }

    public function render()
    {
        return view('charts::livewire-area-chart');
    }
}
