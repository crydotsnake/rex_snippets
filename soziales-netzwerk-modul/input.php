<?php

// base ID
$id = 2;

// html form
$form = <<<EOT
    <fieldset class="form-horizontal ">
        <legend>Soziales Netzwerk</legend>
        <div class="form-group">
            <div class="col-sm-2 control-label"><label for="rv2_1_0_name">Name</label></div>
            <div class="col-sm-10"><input id="rv2_1_0_name" type="text" name="REX_INPUT_VALUE[$id][0][name]" value="" class="form-control "></div>
        </div>
        
        <div class="form-group">
            <div class="col-sm-2 control-label"><label for="rv2_1_0_name">Icon Klasse</label></div>
            <div class="col-sm-10"><input id="rv2_1_0_name" type="text" name="REX_INPUT_VALUE[$id][0][icon]" value="" class="form-control "></div>
        </div>

        <div class="form-group">
            <div class="col-sm-2 control-label"><label>URL</label></div>
            <div class="col-sm-10"><input id="rv2_1_0_name" type="text" name="REX_INPUT_VALUE[$id][0][url]" value="" class="form-control "></div>
            </div>
        </div>
    </fieldset>
EOT;

// parse form
echo MBlock::show($id, $form);
