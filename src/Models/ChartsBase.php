<?php

namespace T\Charts\Models;

use Illuminate\Support\Str;
use T\Charts\Models\Traits\ChartContainer;
use T\Charts\Models\Traits\HasColors;
use T\Charts\Models\Traits\HasDataLabels;
use T\Charts\Models\Traits\HasDataSet;
use T\Charts\Models\Traits\HasDistributed;
use T\Charts\Models\Traits\HasFontFamily;
use T\Charts\Models\Traits\HasForeColor;
use T\Charts\Models\Traits\HasGrid;
use T\Charts\Models\Traits\HasHeight;
use T\Charts\Models\Traits\HasHorizontal;
use T\Charts\Models\Traits\HasJsonConfig;
use T\Charts\Models\Traits\HasLabels;
use T\Charts\Models\Traits\HasLegend;
use T\Charts\Models\Traits\HasMarkers;
use T\Charts\Models\Traits\HasSparkLine;
use T\Charts\Models\Traits\HasStacked;
use T\Charts\Models\Traits\HasStroke;
use T\Charts\Models\Traits\HasSubTitle;
use T\Charts\Models\Traits\HasTheme;
use T\Charts\Models\Traits\HasTitle;
use T\Charts\Models\Traits\HasToolBar;
use T\Charts\Models\Traits\HasType;
use T\Charts\Models\Traits\HasWidth;
use T\Charts\Models\Traits\HasXAxis;
use T\Charts\Models\Traits\HasYAxis;
use T\Charts\Models\Traits\HasZoom;

/**
 * Class ChartsBase
 * @package T\Charts\Models
 */
class ChartsBase
{
    use HasType;
    use HasTitle;
    use HasTheme;
    use HasSubTitle;
    use HasLabels;
    use HasDataLabels;
    use HasFontFamily;
    use HasForeColor;
    use HasDataSet;
    use HasHeight;
    use HasWidth;
    use HasColors;
    use HasHorizontal;
    use HasDistributed;
    use HasXAxis;
    use HasGrid;
    use HasMarkers;
    use HasStacked;
    use HasStroke;
    use HasToolBar;
    use HasZoom;
    use HasSparkLine;
    use HasJsonConfig;
    use ChartContainer;
    use HasLegend;
    use HasYAxis;

    public $key;

    public function __construct()
    {
        $this->key = $this->reactiveKey();
        $this->initHorizontal();
        $this->initDistributed();
        $this->initColors();
        $this->initXAxis();
        $this->initYAxis();
        $this->initGrid();
        $this->initLegend();
        $this->initMarkers();
        $this->initToolBar();
        $this->initZoom();
        $this->initDataLabels();
        $this->initSparkLine();
        $this->initFontFamily();
        $this->initForeColor();
        $this->initJsonConfig();
    }

    public function reactiveKey()
    {
        return md5(json_encode(Str::random(32)));
    }

    public function toLivewire() :array
    {
        $options = [
            'chart' => [
                'id' => $this->reactiveKey(),
                'type' => $this->type(),
                'height' => $this->height(),
                'toolbar' => json_decode($this->toolbar()),
                'zoom' => json_decode($this->zoom()),
                'fontFamily' => json_decode($this->fontFamily()),
                'foreColor' => $this->foreColor(),
                'sparkline' => json_decode($this->sparkline()),
                'stacked' => $this->stacked(),
            ],
            'plotOptions' => [
                'bar' => [
                    'horizontal' => json_decode($this->horizontal()),
                    'distributed' => json_decode($this->distributed()),
                ],
            ],
            'colors' => json_decode($this->colors()),
            'series' => json_decode($this->dataset()),
            'dataLabels' => json_decode($this->dataLabels()),
            'theme' => [
                'mode' => $this->theme(),
            ],
            'title' => [
                'text' => $this->title(),
            ],
            'subtitle' => [
                'text' => $this->subtitle() ? $this->subtitle() : '',
                'align' => $this->subtitlePosition() ? $this->subtitlePosition() : '',
            ],
            'xaxis' => [
                'categories' => json_decode($this->xAxis()),
            ],
            'yaxis' => [
                'labels' => [
                    'show' => json_decode($this->yAxis()),
                ]
              ],
            'grid' => json_decode($this->grid()),
            'markers' => json_decode($this->markers()),
            'legend' => json_decode($this->legend()),
        ];

        if($this->labels()) {
            $options['labels'] = $this->labels();
        }

        if($this->stroke()) {
            $options['stroke'] = json_decode($this->stroke());
        }

        return [
            'height' => $this->height(),
            'width' => $this->width(),
            'type' => $this->type(),
            'options' => $options,
            'series' => json_decode($this->dataset()),
            'key' => $this->reactiveKey(),
            'id' => $this->reactiveKey()
        ];
    }
}
