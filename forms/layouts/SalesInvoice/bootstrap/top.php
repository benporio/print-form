<div class="top-div container">
    <div class="padder">
        <div class="content">
            <div>
                <table>
                    <tbody>
                        <tr>
                            <td>
                                <div style="text-align: <?= $formModel->logo->alignment ?>;">
                                    <img src="<?= $formModel->logo->path ?>" alt="logo" height="<?= $formModel->logo->height ?>" width="<?= $formModel->logo->width ?>">
                                </div>
                            </td>
                            <td style="vertical-align: bottom; line-height: 25px;">
                                <div>
                                    <div style="font-size: 1.5em; font-weight: bold;">
                                        <span><?= $formModel->header->companyName ?></span>
                                    </div>
                                    <div>
                                        <span><?= $formModel->header->companyAddress ?></span>
                                    </div>
                                    <div>
                                        <span>VAT Registration TIN: <?= $formModel->header->tinNo ?></span>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>  
</div>