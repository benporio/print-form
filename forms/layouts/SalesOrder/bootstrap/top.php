<div class="top-div container">
    <div class="padder">
        <div class="content">
            <div>
                <table>
                    <tbody>
                        <tr>
                            <td style="vertical-align: bottom; width: 50%;">
                                <div>
                                    <span id="formTitle">
                                        <?= $formModel->header->title ?>
                                    </span>
                                </div>
                            </td>
                            <td style="text-align: right; width: 50%;">
                                <div style="text-align: <?= $formModel->logo->alignment ?>;">
                                    <img src="<?= $formModel->logo->path ?>" alt="logo" height="<?= $formModel->logo->height ?>" width="<?= $formModel->logo->width ?>">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td style="width: 50%;">
                                <div>
                                    <span style="font-size: 1.5em;">
                                        <?= $formModel->header->companyAddress ?>
                                    </span>
                                </div>
                            </td>
                            <td style="width: 50%; text-align: right; vertical-align: top;">
                                <div>
                                    <table style="table-layout: auto; width: 55%; text-align: center; font-size: 1.1em;">
                                        <tr>
                                            <th style="border: 0.5px solid black; border-bottom: 0.5px solid white; background-color: <?= $formModel->colors['color2'] ?>; text-align: left;">
                                                <span style="color: white;">
                                                    DATE
                                                </span>
                                            </th>
                                            <td style="border: 0.5px solid black;">
                                                <span>
                                                    <?= $formModel->header->documentDate ?>
                                                </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th style="border: 0.5px solid black; border-top: 0.5px solid white; background-color: <?= $formModel->colors['color2'] ?>; text-align: left;">
                                                <span style="color: white;">
                                                    SO No.
                                                </span>
                                            </th>
                                            <td style="border: 0.5px solid black;">
                                                <span>
                                                    <?= $formModel->header->documentNumber ?>
                                                </span>
                                            </td>
                                        </tr>
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