<div class="body-div container">
    <div class="padder">
        <div class="content">
            <div style=" border: 2px solid black; height: 200px;">
                <table class="details" style="width: 100%; font-size: 1.1em;">
                    <thead>
                        <tr style=" border-bottom: 1px solid black;">
                            <?php foreach($formModel->columnDefinitions as $column): ?>
                                <th style="background-color: darkblue; color: white;">
                                    <?= $column->description ?>
                                </th>
                            <?php endforeach ?>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (count($formModel->objRowArrResult)): ?>
                            <?php foreach ($formModel->objRowArrResult as $i => $rowObj): ?>
                                <tr style="background-color: lightgray;">
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
                </table>
            </div>
            <div style="padding-top: 5px;">
                <table>
                    <tbody>
                        <tr>
                            <td colspan="<?= count($formModel->columnDefinitions) ?>" style="width: 80%; border: 1px; padding: 0px; margin: 0px;">
                                <div>
                                    <table style="width: 100%;">
                                        <tbody>
                                            <tr>
                                                <td style="width: 50%;">

                                                </td>
                                                <td style="border: 0px; padding: 0px; margin: 0px; text-align: right;">
                                                    <div>
                                                        <table>
                                                            <tbody>
                                                                <tr>
                                                                    <td style="text-align: left; width: 50%; font-weight: bold; line-height: 30px;">
                                                                        <div>
                                                                            <span>
                                                                                Total Purchase (VAT Inc)
                                                                            </span>
                                                                        </div>
                                                                    </td>
                                                                    <td style="text-align: left; font-weight: bold; padding-left: 10px; border-left: 2px solid black;">
                                                                        <div>
                                                                            <span>
                                                                                PHP
                                                                            </span>
                                                                        </div>
                                                                    </td>
                                                                    <td style="text-align: right; font-weight: bold; padding-left: 10px;">
                                                                        <div>
                                                                            <span>
                                                                                <?= Util::moneyFormat(
                                                                                    $formModel->getColumnTotal(
                                                                                        Util::getObjPropValFromObjArrays(
                                                                                            $formModel->columnDefinitions, 
                                                                                            'description', 
                                                                                            'TOTAL AMOUNT', 
                                                                                            'sqlColumnName'
                                                                                        )
                                                                                    )) 
                                                                                ?>
                                                                            </span>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="text-align: left; font-weight: bold; line-height: 30px;">
                                                                        <div>
                                                                            <span>
                                                                                Less: EWT
                                                                            </span>
                                                                        </div>
                                                                    </td>
                                                                    <td style="text-align: left; font-weight: bold; padding-left: 10px; border-left: 2px solid black;">
                                                                        <div>
                                                                            <span>
                                                                                PHP
                                                                            </span>
                                                                        </div>
                                                                    </td>
                                                                    <td style="text-align: right; font-weight: bold; padding-left: 10px;">
                                                                        <div>
                                                                            <span>
                                                                                -
                                                                            </span>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="text-align: left; font-weight: bold; line-height: 30px;">
                                                                        <div>
                                                                            <span>
                                                                                Total Amount to be Paid
                                                                            </span>
                                                                        </div>
                                                                    </td>
                                                                    <td style="text-align: left; font-weight: bold; padding-left: 10px; border-left: 2px solid black;">
                                                                        <div>
                                                                            <span>
                                                                                PHP
                                                                            </span>
                                                                        </div>
                                                                    </td>
                                                                    <td style="text-align: right; font-weight: bold; padding-left: 10px;">
                                                                        <div>
                                                                            <span>
                                                                                <?= Util::moneyFormat(
                                                                                    $formModel->getColumnTotal(
                                                                                        Util::getObjPropValFromObjArrays(
                                                                                            $formModel->columnDefinitions, 
                                                                                            'description', 
                                                                                            'TOTAL AMOUNT', 
                                                                                            'sqlColumnName'
                                                                                        )
                                                                                    )) 
                                                                                ?>
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
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>