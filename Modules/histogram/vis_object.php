<?php

$visualisations['histgraph'] = array(
    'label'=>_("Histgraph"),
    'location'=>"Modules/histogram/histgraph.php",
    'options'=>array(
        'feedid'=>array('name'=>_("feed"), 'type'=>"feed", 'default'=>null),
        'barwidth'=>array('name'=>_("barwidth"), 'type'=>"int", 'default'=>50),
        'start'=>array('name'=>_("start"), 'type'=>"int", 'default'=>0),
        'end'=>array('name'=>_("end"), 'type'=>"int", 'default'=>0)
    )
);
