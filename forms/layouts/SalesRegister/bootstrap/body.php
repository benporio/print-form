<div class="body-div container">
    <div class="padder">
        <div class="content">
            <div>
                <table class="details" style="width: 100%; font-size: 1.1em;">
                    <thead>
                        <tr>
                            <?php foreach($formModel->columnDefinitions as $column): ?>
                                <th style="border-bottom: 2px solid black;">
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
                                <tr>
                                <?php foreach ($formModel->columnDefinitions as $column): ?>
                                    <?php switch ($column->type):
                                        case ColumnType::MONEY->value: ?>
                                        <?php if ($column->sqlColumnName): ?>
                                            <td style="text-align: right;"><?= Util::moneyFormat($rowObj->{$column->sqlColumnName}) ?></td>
                                        <?php else: ?>
                                            <td style="text-align: right;"><?= Util::moneyFormat($formModel->execRowFormula($column->formulaName, $rowObj)) ?></td>
                                        <?php endif ?>
                                        <?php break ?>
                                    <?php case ColumnType::ROW_NUMBER->value: ?>
                                        <td><?= ++$i ?></td>
                                        <?php break ?>
                                    <?php default: ?>
                                        <?php if ($column->sqlColumnName): ?>
                                            <td><?= $rowObj->{$column->sqlColumnName} ?></td>
                                        <?php else: ?>
                                            <td><?= $formModel->execRowFormula($column->formulaName, $rowObj) ?></td>
                                        <?php endif ?>
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
                    <tfoot>
                        <tr>
                            <?php foreach ($formModel->columnDefinitions as $column): ?>
                                <td style="text-align: right; border-top: 2px solid black; font-weight: bold;">
                                    <?php if ($column->sqlColumnName): ?>
                                        <?= Util::moneyFormat(
                                            $formModel->getColumnTotal(
                                                $column->sqlColumnName
                                            )) 
                                        ?>
                                    <?php else: ?>
                                        <?= Util::moneyFormat(
                                            $formModel->getColumnTotal(
                                                $column->formulaName,
                                                true
                                            )) 
                                        ?>
                                    <?php endif ?>
                                </td>
                            <?php endforeach ?>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>