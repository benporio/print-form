<div class="top-div container">
    <div class="padder">
        <div class="content">
            <div>
                <table>
                    <tbody>
                        <tr>
                            <td rowspan="2" style="width: 40%; padding-top: 20px;">
                                <div>
                                    <span style="font-size: 1.1em;">
                                        <?= $formModel->header->companyName ?>
                                    </span><br>
                                    <span style="font-size: 1.1em;">
                                        <?= $formModel->header->companyAddress ?>
                                    </span>
                                </div>
                            </td>
                            <td style="vertical-align: top;">
                                <div>
                                    <span id="formTitle">
                                        <?= $formModel->header->title ?>
                                    </span>
                                </div>
                            </td>
                        </tr>
                        <tr>
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
                                                    PO No.
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