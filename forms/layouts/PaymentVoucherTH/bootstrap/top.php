<div class="top-div container">
    <div class="padder">
        <div class="content">
            <div>
                <table>
                    <tbody>
                        <tr>
                            <td style="width: 33%;">
                                <div style="text-align: <?= $formModel->logo->alignment ?>;">
                                    <img src="<?= $formModel->logo->path ?>" alt="logo" height="<?= $formModel->logo->height ?>" width="<?= $formModel->logo->width ?>">
                                </div>
                            </td>
                            <td style="width: 34%; text-align: center; vertical-align: bottom;">
                                <div style="font-size: 1.5em; font-weight: bold;"><span><?= $formModel->header->title ?></span></div>
                            </td>
                            <td style="width: 33%;"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>  
</div>