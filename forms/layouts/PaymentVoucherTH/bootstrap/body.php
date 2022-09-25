<div class="body-div container">
    <div class="padder">
        <div class="content">
            <div>
                <table class="details" style="font-size: 1em;">
                    <thead>
                        <tr>
                            <?php foreach($formModel->columnDefinitions as $column): ?>
                                <?php switch ($column->type):
                                    case ColumnType::MONEY->value: ?>
                                    <th style="text-align: right;"><?= $column->description ?></th>
                                    <?php break ?>
                                <?php default: ?>
                                    <th><?= $column->description ?></th>
                                <?php endswitch ?>
                            <?php endforeach ?>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (count($formModel->objRowArrResult)): ?>
                            <?php foreach ($formModel->objRowArrResult as $i => $rowObj): ?>
                                <tr>
                                <?php foreach ($formModel->columnDefinitions as $column): ?>
                                    <?php switch ($column->type):
                                        case ColumnType::MONEY->value: ?>
                                        <td style="text-align: right;">
                                            <?= Util::moneyFormat($rowObj->{$column->sqlColumnName}) ?>
                                        </td>
                                        <?php break ?>
                                    <?php case ColumnType::ROW_NUMBER->value: ?>
                                        <td><?= ++$i ?></td>
                                        <?php break ?>
                                    <?php case ColumnType::EMPTY->value: ?>
                                        <td style="color: white;"><?= $rowObj->{$column->sqlColumnName} ?></td>
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
                            <td style="width: 80%;"></td>
                            <td>
                                <div>
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td>Amount</td>
                                                <td style="text-align: right;"><?= Util::moneyFormat($formModel->footer->amount) ?></td>
                                            </tr>
                                            <tr>
                                                <td>Vat</td>
                                                <td style="text-align: right;"><?= Util::moneyFormat($formModel->footer->vat) ?></td>
                                            </tr>
                                            <tr>
                                                <td>WHT</td>
                                                <td style="text-align: right;"><?= Util::moneyFormat($formModel->footer->wht) ?></td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" style="padding-left: 70px;"><hr style="width: 100%;"></td>
                                            </tr>
                                            <tr>
                                                <td>Net Paid</td>
                                                <td style="text-align: right;"><?= Util::moneyFormat($formModel->footer->netPaid) ?></td>
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