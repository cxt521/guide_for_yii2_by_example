<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\web\View;
use app\assets\HighchartAsset;
?>
<?= Html::Button('查询', ['id'=>'btn','class' => 'btn btn-primary']) ?>
<?php
$js=<<<JS
                  $('#view').hide();
	$('#btn').click(function(){
	    $.post('index.php?r=card/getdata',
	    	function(result){
       var obj = eval("("+result+")");
        $('#view').highcharts({
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'pie'
        },
        title: {
            text: '石家庄铁道大学男女比例表'
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: true,
                    format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                    style: {
                        color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                    }
                }
            }
        },
        series: [{
            name: 'Brands',
            colorByPoint: true,
            data: obj
        }]
    });
});
                  $('#view').show();
	});
JS;
$this->registerJs($js);
?>
<div id="view" >
</div>
