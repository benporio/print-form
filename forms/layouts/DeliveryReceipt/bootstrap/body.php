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
            <div style="font-style: italic;">
                <span>Received the above goods and services in good order & condition</span>
            </div>
        </div>
    </div>
</div>