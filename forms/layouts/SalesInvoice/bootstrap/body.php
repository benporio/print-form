<div class="body-div container">
    <div class="padder">
        <div class="content">
            <div style="height: 200px; border: 1px solid black;">
                <table class="details" style="width: 100%; font-size: 1.1em;">
                    <thead>
                        <tr>
                            <?php foreach($formModel->columnDefinitions as $column): ?>
                                <th style="border: 0.5px solid black; border-right: 0.5px solid white; background-color: <?= $formModel->colors['color2'] ?>; color: white;">
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
                </table>
            </div>
            <div>
                <table style="font-weight: bold;">
                    <tbody>
                        <tr>
                            <td style="width: 30%;"></td>
                            <td>
                                <div>
                                    <table style="text-align: right;">
                                        <tbody>
                                            <tr>
                                                <td style="width: 200px;">
                                                    <div>
                                                        <span>VATable Sales</span>
                                                    </div>
                                                </td>
                                                <td style="width: 50px; padding-left: 5px; text-align: left; border-style: solid; border-width: 1px 0px 1px 1px; border-color: lightgray;">
                                                    <div>
                                                        <span>₱</span>
                                                    </div>
                                                </td>
                                                <td style="width: 40px; padding-right: 5px; border-style: solid; border-width: 1px 1px 1px 0px; border-color: lightgray;">
                                                    <div>
                                                        <span><?= $formModel->footer->vatableSales ?></span>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div>
                                                        <span>VAT Exempt Amount</span>
                                                    </div>
                                                </td>
                                                <td style="padding-left: 5px; text-align: left; border-style: solid; border-width: 1px 0px 1px 1px; border-color: lightgray;">
                                                    <div>
                                                        <span>₱</span>
                                                    </div>
                                                </td>
                                                <td style="padding-right: 5px; border-style: solid; border-width: 1px 1px 1px 0px; border-color: lightgray;">
                                                    <div>
                                                        <span><?= $formModel->footer->vatExAmount ?></span>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div>
                                                        <span>Zero-Rated Sales</span>
                                                    </div>
                                                </td>
                                                <td style="padding-left: 5px; text-align: left; border-style: solid; border-width: 1px 0px 1px 1px; border-color: lightgray;">
                                                    <div>
                                                        <span>₱</span>
                                                    </div>
                                                </td>
                                                <td style="padding-right: 5px; border-style: solid; border-width: 1px 1px 1px 0px; border-color: lightgray;">
                                                    <div>
                                                        <span><?= $formModel->footer->zeroRatedSales ?></span>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div>
                                                        <span>VAT Amount</span>
                                                    </div>
                                                </td>
                                                <td style="padding-left: 5px; text-align: left; border-style: solid; border-width: 1px 0px 1px 1px; border-color: lightgray;">
                                                    <div>
                                                        <span>₱</span>
                                                    </div>
                                                </td>
                                                <td style="padding-right: 5px; border-style: solid; border-width: 1px 1px 1px 0px; border-color: lightgray;">
                                                    <div>
                                                        <span><?= $formModel->footer->vatAmount ?></span>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </td>
                            <td>
                                <div>
                                    <table style="text-align: right;">
                                        <tbody>
                                            <tr>
                                                <td style="width: 200px;">
                                                    <div>
                                                        <span>Total Sales (VAT Inc)</span>
                                                    </div>
                                                </td>
                                                <td style="width: 50px; padding-left: 5px; text-align: left; border-style: solid; border-width: 1px 0px 1px 1px; border-color: lightgray;">
                                                    <div>
                                                        <span>₱</span>
                                                    </div>
                                                </td>
                                                <td style="width: 40px; padding-right: 5px; border-style: solid; border-width: 1px 1px 1px 0px; border-color: lightgray;">
                                                    <div>
                                                        <span><?= $formModel->footer->totalSales ?></span>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div>
                                                        <span>Less: VAT</span>
                                                    </div>
                                                </td>
                                                <td style="padding-left: 5px; text-align: left; border-style: solid; border-width: 1px 0px 1px 1px; border-color: lightgray;">
                                                    <div>
                                                        <span>₱</span>
                                                    </div>
                                                </td>
                                                <td style="padding-right: 5px; border-style: solid; border-width: 1px 1px 1px 0px; border-color: lightgray;">
                                                    <div>
                                                        <span><?= $formModel->footer->lessVat ?></span>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div>
                                                        <span>Net Amount</span>
                                                    </div>
                                                </td>
                                                <td style="padding-left: 5px; text-align: left; border-style: solid; border-width: 1px 0px 1px 1px; border-color: lightgray;">
                                                    <div>
                                                        <span>₱</span>
                                                    </div>
                                                </td>
                                                <td style="padding-right: 5px; border-style: solid; border-width: 1px 1px 1px 0px; border-color: lightgray;">
                                                    <div>
                                                        <span><?= $formModel->footer->netAmount ?></span>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="font-weight: normal;">
                                                    <div>
                                                        <span>Less:</span>
                                                    </div>
                                                </td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div>
                                                        <span>SC/PWD Discount</span>
                                                    </div>
                                                </td>
                                                <td style="padding-left: 5px; text-align: left; border-style: solid; border-width: 1px 0px 1px 1px; border-color: lightgray;">
                                                    <div>
                                                        <span>₱</span>
                                                    </div>
                                                </td>
                                                <td style="padding-right: 5px; border-style: solid; border-width: 1px 1px 1px 0px; border-color: lightgray;">
                                                    <div>
                                                        <span><?= $formModel->footer->scPwdDiscount ?></span>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div>
                                                        <span>Add: VAT</span>
                                                    </div>
                                                </td>
                                                <td style="padding-left: 5px; text-align: left; border-style: solid; border-width: 1px 0px 1px 1px; border-color: lightgray;">
                                                    <div>
                                                        <span>₱</span>
                                                    </div>
                                                </td>
                                                <td style="padding-right: 5px; border-style: solid; border-width: 1px 1px 1px 0px; border-color: lightgray;">
                                                    <div>
                                                        <span><?= $formModel->footer->addVat ?></span>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div>
                                                        <span>Total Amount</span>
                                                    </div>
                                                </td>
                                                <td colspan="2" style="margin: 0; padding: 0; border-left: 1px solid lightgray; border-right: 1px solid lightgray; border-bottom: 3px double black;">
                                                    <div>
                                                        <table>
                                                            <tbody>
                                                                <tr>
                                                                    <td style="padding-left: 5px; text-align: left;">
                                                                        <div>
                                                                            <span>₱</span>
                                                                        </div>
                                                                    </td>
                                                                    <td style="padding-right: 5px;">
                                                                        <div>
                                                                            <span><?= $formModel->footer->totalAmount ?></span>
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