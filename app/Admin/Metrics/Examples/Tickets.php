<?php

namespace App\Admin\Metrics\Examples;

use Dcat\Admin\Widgets\Metrics\RadialBar;
use Illuminate\Http\Request;

class Tickets extends RadialBar
{
    /**
     * 初始化卡片内容
     */
    protected function init()
    {
        parent::init();

        $this->title('網路風向');
        $this->height(400);
        $this->chartHeight(300);
        $this->chartLabels('健康度');
        $this->dropdown([
                            '7'   => 'Last 7 Days',
                            '28'  => 'Last 28 Days',
                            '30'  => 'Last Month',
                            '365' => 'Last Year',
                        ]);
    }

    /**
     * 处理请求
     *
     * @param Request $request
     *
     * @return mixed|void
     */
    public function handle(Request $request)
    {
        switch ($request->get('option')) {
            case '365':
            case '30':
            case '28':
            case '7':
            default:
                // 卡片内容
                $this->withContent(3540);
                // 卡片底部
                $this->withFooter(2667, 836, 37);
                // 图表数据
                $this->withChart(76.4);
        }
    }

    /**
     * 设置图表数据.
     *
     * @param int $data
     *
     * @return $this
     */
    public function withChart(int $data)
    {
        return $this->chart([
                                'series' => [$data],
                            ]);
    }

    /**
     * 卡片内容
     *
     * @param string $content
     *
     * @return $this
     */
    public function withContent($content)
    {
        return $this->content(
            <<<HTML
<div class="d-flex flex-column flex-wrap text-center">
    <h1 class="font-lg-2 mt-2 mb-0">{$content}</h1>
    <small>討論總數</small>
</div>
HTML
        );
    }

    /**
     * 卡片底部内容.
     *
     * @param string $new
     * @param string $open
     * @param string $response
     *
     * @return $this
     */
    public function withFooter($new, $open, $response)
    {
        return $this->footer(
            <<<HTML
<div class="d-flex justify-content-between p-1" style="padding-top: 0!important;">
    <div class="text-center">
        <p>理性討論數</p>
        <span class="font-lg-1">{$new}</span>
    </div>
    <div class="text-center">
        <p>負向討論數</p>
        <span class="font-lg-1">{$open}</span>
    </div>
    <div class="text-center">
        <p>正向討論數</p>
        <span class="font-lg-1">{$response}</span>
    </div>
</div>
HTML
        );
    }
}
