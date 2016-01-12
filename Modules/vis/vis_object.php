<?php

    /* Types:
      0 - feed realtime or daily
      1 - feed realtime
      2 - feed daily
      3 - feed histogram
      4 - boolean (not used uncomment lines)
      5 - text
      6 - float value
      7 - int value
      8 - multigraph id
    */

    //CHAVEIRO TODO: only used in vis_main_view.php, should be php source for vis/widget/vis_render.js vis_widgetlist variable data
    $visualisations = array();
    
    $visualisations['realtime'] = array(
        'label'=>_("RealTime"),
        'location'=>"Modules/vis/visualisations/realtime.php",
        'options'=>array(
            'feedid'=>array("name"=>_("feed"), "type"=>"feed", "default"=>"")
        )
    );
    
    $visualisations['rawdata'] = array(
        'label'=>_("RawData"),
        'location'=>"Modules/vis/visualisations/rawdata.php",
        'options'=>array(
            'feedid'=>array("name"=>_("feed"), "type"=>"feed", "default"=>""),
            'fill'=>array("name"=>_("fill"), "type"=>"int", "default"=>"0"),
            // Hex colour EDC240 is the default color for flot. since we want existing setups to not change, we set the default value to it manually now,
            'colour'=>array("name"=>_("colour"), "type"=>"text", "default"=>"EDC240"),
            'units'=>array("name"=>_("units"), "type"=>"text", "default"=>""),
            'dp'=>array("name"=>_("dp"), "type"=>"int", "default"=>"2"),
            'scale'=>array("name"=>_("scale"), "type"=>"float", "default"=>"1")
        )
    );
    
    $visualisations['bargraph'] = array(
        'label'=>_("BarGraph"),
        'location'=>"Modules/vis/visualisations/bargraph.php",
        'options'=>array(
            'feedid'=>array("name"=>_("feed"), "type"=>"feed", "default"=>""),
            'colour'=>array("name"=>_("colour"), "type"=>"text", "default"=>"EDC240"),
            'interval'=>array("name"=>_("interval"), "type"=>"int", "default"=>"86400"),
            'units'=>array("name"=>_("units"), "type"=>"text", "default"=>""),
            'dp'=>array("name"=>_("dp"), "type"=>"int", "default"=>"2"),
            'scale'=>array("name"=>_("scale"), "type"=>"float", "default"=>"1"),
            'delta'=>array("name"=>_("delta"), "type"=>"int", "default"=>"0")
        )
    );

    $visualisations['graph'] = array(
        'label'=>_("Graph"),
        'location'=>"Modules/vis/visualisations/graph.php", 
        'options'=>array(
            'feedid'=>array("name"=>_("feed"), "type"=>"feed", "default"=>"")
         )
    );
    
    /*
    $visualisations = array(
        
        'timestoredaily'=> array('label'=>_("Daily from Multiple (BETA)"), 'options'=>array(
            array('feedid',_("feed"),1),
            array('units',_("units"),5,'kWh'))
        ),
        
        'smoothie'=> array('label'=>_("Smoothie"), 'options'=>array(
            array('feedid',_("feed"),1),
            array('ufac',_("ufac"),6))
        ),
        
        //'dailyhistogram'=> array('options'=>array(array('feedid',3))),
        'zoom'=> array('label'=>_("Zoom"), 'options'=>array(
            array('power',_("power"),1),
            array('kwhd',_("kwhd"),2),
            array('currency',_("currency"),5,'&pound;'),
            array('currency_after_val',_("currency_after_val"),7, 0),
            array('pricekwh',_("pricekwh"),6,0.14))
        ),
        
        //'comparison'=> array('options'=>array(array('feedid',3))),
        'stacked'=> array('label'=>_("Stacked"), 'options'=>array(
            array('bottom',_("bottom"),2),
            array('top',_("top"),2))
        ),
        
        'stackedsolar'=> array('label'=>_("StackedSolar"), 'options'=>array(
            array('solar',_("solar"),2),
            array('consumption',_("consumption"),2))
        ),
        
        'threshold'=> array('label'=>_("Threshold"), 'options'=>array(
            array('feedid',_("feed"),3),
            array('thresholdA',_("thresholdA"),6,500),
            array('thresholdB',_("thresholdB"),6,2500))
        ),
        
        'simplezoom'=> array('label'=>_("SimpleZoom"), 'options'=>array(
            array('power',_("power"),1),
            array('kwhd',_("kwhd"),0)
        )),
        
        'orderbars'=> array('label'=>_("OrderBars"), 'options'=>array(
            array('feedid',_("feed"),2)
        )),
        
        'orderthreshold'=> array('label'=>_("OrderThreshold"), 'options'=>array(
            array('feedid',_("feed"),3),
            array('power',_("power"),1),
            array('thresholdA',_("thresholdA"),6,500),
            array('thresholdB',_("thresholdB"),6,2500)
        )),
        
        'editrealtime'=> array('label'=>_("EditRealtime"), 'options'=>array(
            array('feedid',_("feed"),1)
        )),
        
        'editdaily'=> array('label'=>_("EditDaily"), 'options'=>array(
            array('feedid',_("feed"),2)
        )),
        
        'multigraph' => array ('label'=>_("MultiGraph"), 'action'=>'multigraph', 'options'=>array(
            array('mid',_("mid"),8)
        )),
        
        'compare' => array ('label'=>_("Compare"), 'action'=>'compare', 'options'=>array(
            array('feedA',_("Feed A"),1),
            array('feedB',_("Feed B"),1)
        )),
        
        'timecompare'=> array('label'=>_("Time Comparison"), 'options'=>array(
            array('feedid',_("feed"),1),
            array('fill',_("fill"),7,1),
            array('depth',_("depth"),7,3)
        ))
    );*/
