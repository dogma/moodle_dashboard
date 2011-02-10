<?php
/**
 * Created by IDEA.
 * User: gstewar8
 * Date: Nov 8, 2010
 * Time: 2:04:36 PM
 * To change this template use File | Settings | File Templates.
 */

$haspersonal = $PAGE->blocks->region_has_content('personal', $OUTPUT)| $PAGE->blocks->region_has_content('personal-1', $OUTPUT) | $PAGE->blocks->region_has_content('personal-2', $OUTPUT)| $PAGE->blocks->region_has_content('personal-3', $OUTPUT);

if ($haspersonal) { ?>
        <div id="my-dashboard">
            <div class="my-dashboard-toolbar panel-toolbar">
                <div id="my-dashboard-close-button"></div>
                Dashboard

            </div>
            <div class="scroll-panel">
            <div id="region-personal" class="block-region">
                <div class="region-content">
                <?php echo $OUTPUT->blocks_for_region('personal') ?>
                </div>
            </div>
            <div id="dashboard-column-regions">
                <table style="width: 100%"><tr>
                    <td>
                        <div id="region-personal-1" class="block-region personal-block-region">
                        <?php echo $OUTPUT->blocks_for_region('personal-1') ?>
                        </div>
                    </td>
                    <td>
                        <div id="region-personal-2" class="block-region personal-block-region">
                        <?php echo $OUTPUT->blocks_for_region('personal-2') ?>
                        </div>
                    </td>
                    <td>
                        <div id="region-personal-3" class="block-region personal-block-region">
                        <?php echo $OUTPUT->blocks_for_region('personal-3') ?>
                        </div>
                    </td>
                </tr></table>
            </div>
                </div>
        </div>
    <?php } ?>
