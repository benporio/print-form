<div class="body-div container">
    <div class="padder">
        <div class="content">
            <div>
                <table class="details" style="width: 100%; font-size: 1.1em; border: 1px solid black;">
                    <thead>
                        <tr>
                            <?php foreach($formModel->columnDefinitions as $column): ?>
                                <th style="border: 0.5px solid black; border-right: 0.5px solid white; background-color: darkblue; color: white;">
                                    <?= $column->description ?>
                                </th>
                            <?php endforeach ?>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (count($formModel->objRowArrResult)): ?>
                            <?php $i = 0 ?>
                            <?php foreach ($formModel->objRowArrResult as $i => $rowObj): ?>
                                <?php $i++ ?>
                                <tr style="background-color: <?= $i % 2 == 0 ? 'lightgray' : 'white' ?>;">
                                <?php foreach ($formModel->columnDefinitions as $column): ?>
                                    <?php switch ($column->type):
                                        case ColumnType::MONEY->value: ?>
                                        <td style="text-align: right;"><?= Util::moneyFormat($rowObj->{$column->sqlColumnName}) ?></td>
                                        <?php break ?>
                                    <?php case ColumnType::ROW_NUMBER->value: ?>
                                        <td><?= ++$i ?></td>
                                        <?php break ?>
                                    <?php default: ?>
                                        <td><?= $rowObj->{$column->sqlColumnName} ?></td>
                                    <?php endswitch ?>
                                <?php endforeach ?>
                                </tr>
                            <?php endforeach ?>
                        <?php else: ?>
                            <tr>
                                <td colspan="<?= count($formModel->columnDefinitions) ?>">NO DATA</td>
                            </tr>
                        <?php endif ?>
                    </tbody>
                        <tr>
                            <td colspan="<?= count($formModel->columnDefinitions) ?>" style="width: 80%; border: 1px; padding: 0px; margin: 0px;">
                                <div>
                                    <table style="width: 100%;">
                                        <tbody>
                                            <tr>
                                                <td style="width: 60%; border: 0px; padding: 0px; margin: 0px; text-align: left; vertical-align: bottom;">
                                                    <div>
                                                        <table style="text-align: left;">
                                                            <tbody>
                                                                <tr>
                                                                    <td style="background-color: lightgray; color: black; font-weight: bold;">
                                                                        <div>
                                                                            <span>
                                                                                Comments or Special Instruction:
                                                                            </span>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <div>
                                                                            <span>
                                                                                Test Comment
                                                                            </span>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </td>
                                                <td style="width: 10%;">

                                                </td>
                                                <td style="width: 30%; border: 0px; padding: 0px; margin: 0px; text-align: right;">
                                                    <div>
                                                        <table>
                                                            <tbody>
                                                                <tr>
                                                                    <td style="text-align: right; width: 50%;">
                                                                        <div>
                                                                            <span>
                                                                                SUB-TOTAL
                                                                            </span>
                                                                        </div>
                                                                    </td>
                                                                    <td style="text-align: left; padding-left: 10px; border-color: lightgray; border-style: solid; border-width: 0px 0.5px 0.5px 0.5px;">
                                                                        <div>
                                                                            <span>
                                                                                ₱ -
                                                                            </span>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="text-align: right;">
                                                                        <div>
                                                                            <span>
                                                                                VAT Amount
                                                                            </span>
                                                                        </div>
                                                                    </td>
                                                                    <td style="text-align: left; padding-left: 10px; border-color: lightgray; border-style: solid; border-width: 0px 0.5px 0.5px 0.5px;">
                                                                        <div>
                                                                            <span>
                                                                                ₱ -
                                                                            </span>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="text-align: right;">
                                                                        <div>
                                                                            <span>
                                                                                Net Amount
                                                                            </span>
                                                                        </div>
                                                                    </td>
                                                                    <td style="text-align: left; padding-left: 10px; border-color: lightgray; border-style: solid; border-width: 0px 0.5px 0.5px 0.5px;">
                                                                        <div>
                                                                            <span>
                                                                                ₱ -
                                                                            </span>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="text-align: left;">
                                                                        <div>
                                                                            <span>
                                                                                Less:   
                                                                            </span>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div>
                                                                            <span>
                                                                                
                                                                            </span>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="text-align: right;">
                                                                        <div>
                                                                            <span>
                                                                                0%  
                                                                            </span>
                                                                            <span>
                                                                                Discount  
                                                                            </span>
                                                                        </div>
                                                                    </td>
                                                                    <td style="text-align: left; padding-left: 10px; border-color: lightgray; border-style: solid; border-width: 0.5px 0.5px 0.5px 0.5px;">
                                                                        <div>
                                                                            <span>
                                                                                ₱ -
                                                                            </span>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="text-align: right;">
                                                                        <div>
                                                                            <span>
                                                                                WithHolding Tax
                                                                            </span>
                                                                        </div>
                                                                    </td>
                                                                    <td style="text-align: left; padding-left: 10px; border-color: lightgray; border-style: solid; border-width: 0px 0.5px 0.5px 0.5px;">
                                                                        <div>
                                                                            <span>
                                                                                ₱ -
                                                                            </span>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="text-align: right;">
                                                                        <div>
                                                                            <span>
                                                                                Total Amount
                                                                            </span>
                                                                        </div>
                                                                    </td>
                                                                    <td style="text-align: left; padding-left: 10px; border-bottom: 3px double black; border-left: 0.5 solid lightgray; border-right: 0.5 solid lightgray;">
                                                                        <div>
                                                                            <span>
                                                                                ₱ -
                                                                            </span>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </td>
                        </tr>
                </table>
            </div>
        </div>
    </div>
</div>