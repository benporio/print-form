<div class="header-div container">
    <div class="padder">
        <div class="content">
            <div>
                <table>
                    <tbody>
                        <tr>
                            <td style="vertical-align: top; height: 80px;">
                                <div>
                                    <span>
                                        <?= $formModel->header->companyName ?>
                                    </span>
                                    <br>
                                    <span>
                                        <?= $formModel->header->title ?>
                                    </span>
                                </div>
                            </td>
                            <td style="text-align: center; vertical-align: top;" rowspan="2">
                                <div>
                                    <img src="<?= $formModel->logo->path ?>" alt="logo" height="<?= $formModel->logo->height ?>" width="<?= $formModel->logo->width ?>">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div>
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td style="width: 120px;"><span>STORE/BRANCH -</span></td>
                                                <td><span><?= $formModel->header->branchName ?></span></td>
                                            </tr>
                                            <tr>
                                                <td><span>FOR THE PERIOD OF&nbsp;</span></td>
                                                <td><span><?= $formModel->header->datePeriod->from ?> - <?= $formModel->header->datePeriod->to ?></span></td>
                                            </tr>
                                            <tr>
                                                <td><span>STORE CODE -</span></td>
                                                <td><span><?= $formModel->header->branchCode ?></span></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>